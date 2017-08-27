<?php
require_once(getabspath("include/xml.php"));
require_once(getabspath("classes/cipherer.php"));
require_once(getabspath("classes/searchclause.php"));


function getReportArray($name)
{
	$arr = array();
	$xml = new xml();
	$rpt_strXML = LoadSelectedReport($name);
	$arr=$xml->xml_to_array($rpt_strXML);
	if(count($arr))
	{
		$_SESSION["webobject"]["table_type"]=$arr["table_type"];
		$_SESSION["object_sql"]=$arr["sql"];
		if($arr["table_type"]=="custom")
		{
			$connection = getWebreportConnection();	// #9875	
			
			$tables_query = $arr["tables"][0];
			
			$strSQL = "SELECT ". $connection->addFieldWrappers("sqlcontent")." FROM ". $connection->addTableWrappers("webreport_sql")
				." WHERE ". $connection->addFieldWrappers("sqlname")."='".$tables_query."'";
				
			$row = $connection->query( $strSQL )->fetchNumeric();
			if( $row )
				$_SESSION["object_sql"] = $row[0];
		}
	}
	return $arr;
}

function getChartArray($name)
{
	$arr = array();
	$xml = new xml();
	$chrt_strXML = LoadSelectedChart($name);
	$arr=$xml->xml_to_array($chrt_strXML);
	if(count($arr))
	{
		$_SESSION["webobject"]["table_type"]=$arr["table_type"];
		$_SESSION["object_sql"]=$arr["sql"];
		if($arr["table_type"]=="custom")
		{
			$connection = getWebreportConnection();	// #9875	
			
			$tables_query = $arr["tables"][0];
			
			$strSQL = "SELECT ".$connection->addFieldWrappers("sqlcontent")." FROM ".$connection->addTableWrappers("webreport_sql")
				." WHERE ".$connection->addFieldWrappers("sqlname")."='".$tables_query."'";
			
			$row = $connection->query( $strSQL )->fetchNumeric();
			if( $row )
				$_SESSION["object_sql"]=$row[0];
		}
	}
	return $arr;
}

function GetUserGroups() {
	global $wr_is_standalone, $cman;
	return array();
}

function GetUserGroup() 
{
	global $wr_is_standalone;
	return array();
}

function CheckLastID($type) 
{
	$connection = getWebreportConnection(); // #9875
	
	$strSQL = "SELECT ".$connection->addFieldWrappers("rpt_id")." FROM ".$connection->addTableWrappers("webreports")
		." WHERE ".$connection->addFieldWrappers("rpt_type")." = '".$type."'";
	
	$qResult = $connection->query( $strSQL );
	
	$maxID = 0;
	while( $row = $qResult->fetchNumeric() ) 
	{
		if ( $maxID < $row[0] )
			$maxID = $row[0];
	}
	
	return ++$maxID;
}

function GetNumberFieldsList($table) {
	$t = WRGetFieldsList($table);
	$arr=array();
	foreach($t as $f)
	{
		if(!is_wr_custom())
			$ftype=WRGetFieldType($table.".".$f);
		else
			$ftype=WRCustomGetFieldType($table,$f);
		if(IsNumberType($ftype))
			$arr[]=$f;
	}
	return $arr;
}

function WRGetNBFieldsList($table) {
	$t = WRGetFieldsList($table);
	$arr=array();
	foreach($t as $f)
	{
		if(!is_wr_custom())
			$ftype=WRGetFieldType($table.".".$f);
		else
			$ftype=WRCustomGetFieldType($table,$f);
		if(!IsBinaryType($ftype))
			$arr[]=$f;
	}
	return $arr;
}

function GetChartsList() 
{
	$xml = new xml();
	$arr = array();
	
	$arrUserGroup = GetUserGroup();	
	$connection = getWebreportConnection();// #9875
	
	$strSQL = "SELECT ".$connection->addFieldWrappers("rpt_name").", ".$connection->addFieldWrappers("rpt_title").", ".$connection->addFieldWrappers("rpt_owner")
		.", ".$connection->addFieldWrappers("rpt_status").", ".$connection->addFieldWrappers("rpt_content")
		." FROM ".$connection->addTableWrappers("webreports")." WHERE ".$connection->addFieldWrappers("rpt_type")." = 'chart'"
		." order by ".$connection->addFieldWrappers("rpt_title");
	
	$qResult = $connection->query( $strSQL );
	while( $row = $qResult->fetchNumeric() ) 
	{
		$chart_arr = $xml->xml_to_array( escapeEntities($row[4]) );
        $view = 0;
		$edit = 0;
        
		if ( isset($chart_arr['permissions']) ) {
			foreach ( $chart_arr['permissions'] as $arr_prm ) {
				if (in_array($arr_prm['id'], $arrUserGroup)) {
					$view = ( $arr_prm['view'] == "true" ) ? 1 : 0;
					$edit = ( $arr_prm['edit'] == "true" ) ? 1 : 0;
				}
			}
		}
		else
		{
			$view=1;
		}
		if(!$chart_arr["tmp_active"])
		{
			$arr[] = array(
				"name"		=> $row[0],
				"title"		=> $row[1],
				"owner"		=> $row[2],
				"status"	=> $row[3],
				"view"		=> $view,
				"edit"		=> $edit
			);
		}
	}

	return $arr;
}

function LoadSelectedChart($report) 
{
	$connection = getWebreportConnection();// #9875
	
	$strSQL = "SELECT ".$connection->addFieldWrappers("rpt_content")." FROM ".$connection->addTableWrappers("webreports")
		." WHERE ".$connection->addFieldWrappers("rpt_name")."=".$connection->prepareString($report)." and ".$connection->addFieldWrappers("rpt_type")."='chart'";
	
	$rptContent = $connection->query( $strSQL )->fetchNumeric();
	return escapeEntities( $rptContent[0] );	
}

function SaveChart($reportname, $report, $rtitle, $rstatus, $strXML, $saveas) 
{
	$connection = getWebreportConnection();// #9875

	if(!@$_SESSION["UserID"])
		$_SESSION["UserID"] = " ";
		
	$reportname = GoodFieldName($reportname);
	$report = GoodFieldName($report);
	
	$strSQL = "SELECT ".$connection->addFieldWrappers("rpt_id")." FROM ".$connection->addTableWrappers("webreports")
		." WHERE ".$connection->addFieldWrappers("rpt_name")."=".$connection->prepareString($reportname)." and ".$connection->addFieldWrappers("rpt_type")."='chart'";
	
	$data =  $connection->query( $strSQL )->fetchAssoc();
	if ( $data && (!$saveas || $reportname == $report) ) 
	{
		$strSQL = "UPDATE ".$connection->addTableWrappers("webreports")." SET ".$connection->addFieldWrappers("rpt_name")."=".$connection->prepareString($report)
			.",".$connection->addFieldWrappers("rpt_title")."=".$connection->prepareString($rtitle)
			.", ".$connection->addFieldWrappers("rpt_content")."=".$connection->prepareString($strXML)
			.", ".$connection->addFieldWrappers("rpt_status")."=".$connection->prepareString($rstatus).", ".$connection->addFieldWrappers("rpt_mdate")."='".now()
			."' WHERE ".$connection->addFieldWrappers("rpt_name")."=".$connection->prepareString($reportname)." and ".$connection->addFieldWrappers("rpt_type")."='chart'";
			
		$connection->exec( $strSQL );
	} 
	else 
	{
		$strSQL = "INSERT INTO ".$connection->addTableWrappers("webreports")." ( ".$connection->addFieldWrappers("rpt_name")
			.", ".$connection->addFieldWrappers("rpt_title").", ".$connection->addFieldWrappers("rpt_cdate").", ".$connection->addFieldWrappers("rpt_mdate")
			.", ".$connection->addFieldWrappers("rpt_content").", ".$connection->addFieldWrappers("rpt_owner").", ".$connection->addFieldWrappers("rpt_status")
			.", ".$connection->addFieldWrappers("rpt_type")." )";
			
		$strSQL .= " VALUES(".$connection->prepareString($report).", ".$connection->prepareString($rtitle).", '".now()."', '".now()."'"
			.", ".$connection->prepareString($strXML).", ".$connection->prepareString(@$_SESSION["UserID"]).", ".$connection->prepareString($rstatus).", 'chart')";
		
		$connection->exec( $strSQL );
	}
}

function DeleteChart($report) 
{
	$connection = getWebreportConnection(); // #9875
	
	$strSQL = "DELETE FROM ".$connection->addTableWrappers("webreports")
		." WHERE ".$connection->addFieldWrappers("rpt_name")."=".$connection->prepareString($report)." and ".$connection->addFieldWrappers("rpt_type")."='chart'";
	$connection->exec( $strSQL );
}

function GetReportsList() 
{
	$connection = getWebreportConnection();// #9875

	$xml = new xml();
	$arr = array();
	$arrUserGroup = GetUserGroup();
	
	$strSQL = "SELECT ".$connection->addFieldWrappers("rpt_name").", ".$connection->addFieldWrappers("rpt_title").", ".$connection->addFieldWrappers("rpt_owner")
		.", ".$connection->addFieldWrappers("rpt_status").", ".$connection->addFieldWrappers("rpt_content")." FROM ".$connection->addTableWrappers("webreports")
		." WHERE ".$connection->addFieldWrappers("rpt_type")." = 'report' order by ".$connection->addFieldWrappers("rpt_title");

	$qResult = $connection->query( $strSQL );	
	while( $row = $qResult->fetchNumeric() ) 
	{
		$report_arr = $xml->xml_to_array( escapeEntities($row[4]) );
        $view = 0;
		$edit = 0;

		if ( isset($report_arr['permissions']) ) {
			foreach ( $report_arr['permissions'] as $arr_prm ) {
				if (in_array($arr_prm['id'], $arrUserGroup)) {
					$view = ( $arr_prm['view'] == "true" ) ? 1 : 0;
					$edit = ( $arr_prm['edit'] == "true" ) ? 1 : 0;
				}
			}
		}
		else
		{
			$view=1;
		}

		if(!$report_arr["tmp_active"])
		{
			$arr[] = array(
				"name"		=> $row[0],
				"title"		=> $row[1],
				"owner"		=> $row[2],
				"status"	=> $row[3],
				"view"		=> $view,
				"edit"		=> $edit
			);
		}
	}
	
	return $arr;
}

function LoadSelectedReport($report) 
{
	$connection = getWebreportConnection();// #9875
	
	$strSQL = "SELECT ".$connection->addFieldWrappers("rpt_content")." FROM ".$connection->addTableWrappers("webreports")
		." WHERE ".$connection->addFieldWrappers("rpt_name")."=".$connection->prepareString($report)." and ".$connection->addFieldWrappers("rpt_type")."='report'";

	$rptContent = $connection->query( $strSQL )->fetchNumeric();
	return escapeEntities($rptContent[0]);	
}

function SaveReport($reportname, $report, $rtitle, $rstatus, $strXML, $saveas) 
{	
	$reportname = GoodFieldName($reportname);
	$report = GoodFieldName($report);
	if(!@$_SESSION["UserID"])
		$_SESSION["UserID"] = " ";
		
	// #9875 It's expected that webreports, webreport_style tables belong to the same db connection
	$connection = getWebreportConnection();		
		
	$strSQL = "SELECT ".$connection->addFieldWrappers("rpt_id")." FROM ".$connection->addTableWrappers("webreports")
		." WHERE ".$connection->addFieldWrappers("rpt_name")."=".$connection->prepareString($reportname)." and ".$connection->addFieldWrappers("rpt_type")."='report'";

	$data = $connection->query( $strSQL )->fetchAssoc();
	if ( $data && (!$saveas || $reportname == $report) ) 
	{
		$strSQL = "UPDATE ".$connection->addTableWrappers("webreports")." SET ".$connection->addFieldWrappers("rpt_name")."=".$connection->prepareString($report)
			.", ".$connection->addFieldWrappers("rpt_title")."=".$connection->prepareString($rtitle)
			.", ".$connection->addFieldWrappers("rpt_content")."=".PrepareString4DB($strXML, $connection)
			.", ".$connection->addFieldWrappers("rpt_status")."=".$connection->prepareString($rstatus)
			.", ".$connection->addFieldWrappers("rpt_mdate")."='".now()."' WHERE ".$connection->addFieldWrappers("rpt_name")."=".$connection->prepareString($reportname)
			." and ".$connection->addFieldWrappers("rpt_type")."='report'";
			
		$connection->exec( $strSQL );
	}
	else 
	{
		$strSQL = "INSERT INTO ".$connection->addTableWrappers("webreports")." ( ".$connection->addFieldWrappers("rpt_name")
			.", ".$connection->addFieldWrappers("rpt_title").", ".$connection->addFieldWrappers("rpt_cdate").", ".$connection->addFieldWrappers("rpt_mdate")
			.", ".$connection->addFieldWrappers("rpt_content").", ".$connection->addFieldWrappers("rpt_owner").", ".$connection->addFieldWrappers("rpt_status")
			.", ".$connection->addFieldWrappers("rpt_type")." )";
		$strSQL .= " VALUES(".$connection->prepareString($report).", ".$connection->prepareString($rtitle).", '".now()."', '".now()."', ".PrepareString4DB($strXML, $connection)
			.", ".$connection->prepareString(@$_SESSION["UserID"]).", ".$connection->prepareString($rstatus).", 'report')";	
			
		$connection->exec( $strSQL );
	}
	
	$strSQL = "UPDATE ".$connection->addTableWrappers("webreport_style")." set ".$connection->addFieldWrappers("repname")."=".$connection->prepareString($report)
		." where ".$connection->addFieldWrappers("repname")."='".$_SESSION['webreports_oldname']."'";
	$connection->exec( $strSQL );
}

function DeleteReport($report) 
{
	$connection = getWebreportConnection();// #9875 
	
	$strSQL = "DELETE FROM ".$connection->addTableWrappers("webreports")." WHERE ".$connection->addFieldWrappers("rpt_name")."=".$connection->prepareString($report)
		." and ".$connection->addFieldWrappers("rpt_type")."='report'";
	$connection->exec( $strSQL );
}

function testAdvSearch($table)
{
	if(is_wr_project())
	{
		if($table=="Delitos especificos")
		{
    			return 1;
		}
		if($table=="carcel1")
		{
    			return 1;
		}
		if($table=="class_lugarespecifico")
		{
    			return 0;
		}
		if($table=="sectorppdf")
		{
    			return 1;
		}
		if($table=="tipo_mara")
		{
    			return 1;
		}
		if($table=="carcel_CAMBIOS")
		{
    			return 1;
		}
		if($table=="clasificacion")
		{
    			return 1;
		}
		if($table=="Espacios abiertos")
		{
    			return 0;
		}
		if($table=="hechosdelictivos")
		{
    			return 1;
		}
		if($table=="hechosdelictivos_lugaresp")
		{
    			return 1;
		}
		if($table=="Todos los datos PPL")
		{
    			return 1;
		}
		if($table=="PPL pertenecientes a Pandilla")
		{
    			return 1;
		}
		if($table=="Sector PPD")
		{
    			return 1;
		}
		if($table=="Homicidios tentados por rango etarios, según sexo victima")
		{
    			return 1;
		}
		if($table=="Hurtos por rango etarios, según sexo victima")
		{
    			return 1;
		}
		if($table=="Hurtos de vehículo por rango etarios, según sexo victima")
		{
    			return 1;
		}
		if($table=="Lesiones por rango etarios etarios, según sexo victima")
		{
    			return 1;
		}
		if($table=="Robos por rango etario, según sexo victima")
		{
    			return 1;
		}
		if($table=="Robo de vehículo por rango etario, según sexo victima")
		{
    			return 1;
		}
		if($table=="Robo y hurto de vehículo con mercaderia por rango etario, según sexo victima")
		{
    			return 1;
		}
		if($table=="Personas privadas de libertad por Sectores Estandarizados según género")
		{
    			return 1;
		}
		if($table=="Delitos por área")
		{
    			return 1;
		}
		if($table=="Personas privadas de libertad por rango etario según género")
		{
    			return 1;
		}
		if($table=="Personas privadas de libertad por rango etario, segun nivel educativo y genero Femenino")
		{
    			return 1;
		}
		if($table=="Personas privadas de libertad por rango etario, segun nivel educativo y genero Masculino")
		{
    			return 1;
		}
		if($table=="Personas privadas de libertad  segun Sector Estandarizado y pertenecientes a pandillas")
		{
    			return 1;
		}
		if($table=="Delitos por lugar del hecho")
		{
    			return 1;
		}
		if($table=="Delitos por Móvil")
		{
    			return 1;
		}
		if($table=="Conteo de delitos por sector estandarizado según Movil")
		{
    			return 1;
		}
		if($table=="Delitos por tipo de arma")
		{
    			return 1;
		}
		if($table=="Ocupación de la víctima por Delitos")
		{
    			return 1;
		}
		if($table=="Amenazas, por rango etarios, según sexo victima")
		{
    			return 1;
		}
		if($table=="Delitos Sexuales  por rango etarios, según sexo victima")
		{
    			return 1;
		}
		if($table=="Homicidios por rango etarios, según sexo")
		{
    			return 1;
		}
		if($table=="Delitos por sector Estandarizado")
		{
    			return 1;
		}
		if($table=="Delitos por rango de horas")
		{
    			return 1;
		}
		if($table=="Conteo de delitos, por Sector Estandarizado según Movil")
		{
    			return 1;
		}
		if($table=="Delitos por mes del hecho")
		{
    			return 1;
		}
		if($table=="homicidios_sv_2016")
		{
    			return 1;
		}
		if($table=="homicidios_sv_2016 Report")
		{
    			return 1;
		}
		if($table=="homicidios_sv_2016 Report1")
		{
    			return 1;
		}
		if($table=="Muertes PNC enfrentamientos")
		{
    			return 1;
		}
		if($table=="homicidios_municipio")
		{
    			return 1;
		}
		if($table=="Municipios con porcentaje de enfrentamiento")
		{
    			return 1;
		}
		if($table=="PPL pertenecientes a pandillas por municipio")
		{
    			return 1;
		}
		if($table=="PPL delitos")
		{
    			return 1;
		}
		if($table=="Transito class Rango Etario")
		{
    			return 0;
		}
		if($table=="PPL delitos_clasificacion")
		{
    			return 1;
		}
		if($table=="Carcel_hurto_mercaderia")
		{
    			return 1;
		}
		if($table=="PPL_educacion")
		{
    			return 0;
		}
		if($table=="Personas Privadas de Libertad")
		{
    			return 0;
		}
		if($table=="hechos_delictivos_class delitos")
		{
    			return 1;
		}
		if($table=="Sector PPD por pandilla de afiliacion (prueba)")
		{
    			return 1;
		}
		if($table=="tipo organizacion delictiva")
		{
    			return 0;
		}
		if($table=="carcel visualizacion todos")
		{
    			return 1;
		}
		if($table=="Grupos etarios por estado civil (masculino)")
		{
    			return 1;
		}
		if($table=="Grupo etarios por estado civil (masculino)")
		{
    			return 1;
		}
		if($table=="Grupo etarios por estado civil (femenino)")
		{
    			return 1;
		}
		if($table=="PPL Grupos etarios por afiliación a Pandillas")
		{
    			return 1;
		}
		if($table=="PPL Grupos etarios por afiliación a Pandillas femenino")
		{
    			return 1;
		}
		if($table=="PPL grupos etarios por Deportado masculino")
		{
    			return 1;
		}
		if($table=="PPL grupos etarios por Deportado Femenino")
		{
    			return 1;
		}
		if($table=="PPL grupos etarios delito genero masculino")
		{
    			return 1;
		}
		if($table=="hechos_delictivos1")
		{
    			return 0;
		}
		if($table=="PPL Grupos etarios por delitos masculino")
		{
    			return 1;
		}
		if($table=="PPL Grupos etarios por delitos femenino")
		{
    			return 1;
		}
		if($table=="DELITOS PNC")
		{
    			return 0;
		}
		if($table=="carcel prueba santa tecla")
		{
    			return 1;
		}
		if($table=="carcel_clasificacion lugar")
		{
    			return 1;
		}
		if($table=="mes_corregido")
		{
    			return 0;
		}
		if($table=="Hechos delictivos dia del hecho")
		{
    			return 1;
		}
		if($table=="hechos_delictivos11")
		{
    			return 1;
		}
		if($table=="BD Carcel")
		{
    			return 1;
		}
		if($table=="DB PNC")
		{
    			return 1;
		}
		if($table=="Hechosdelictivos movil class")
		{
    			return 0;
		}
		if($table=="hechosdelictivos_tipo_arma")
		{
    			return 0;
		}
		if($table=="Municipios y delitos")
		{
    			return 1;
		}
		if($table=="Hechosdelictivos ocupacion class")
		{
    			return 0;
		}
		if($table=="hechosdelictivos_relacion_vict_agresor")
		{
    			return 0;
		}
		if($table=="Relacion de victima con agresor")
		{
    			return 1;
		}
		if($table=="hechosdelictivos_lugar_del_hecho")
		{
    			return 0;
		}
		if($table=="pnc911")
		{
    			return 1;
		}
		if($table=="pnc9111 class delito")
		{
    			return 0;
		}
		if($table=="pnc9111")
		{
    			return 1;
		}
		if($table=="pnc911 Sector por eventos")
		{
    			return 1;
		}
		if($table=="pnc911municipios")
		{
    			return 1;
		}
		if($table=="PNC911 Avisos")
		{
    			return 0;
		}
		if($table=="horas_completar")
		{
    			return 1;
		}
		if($table=="hora_sustituir")
		{
    			return 1;
		}
		if($table=="hechos_delictivos")
		{
    			return 1;
		}
		if($table=="hechosdelictivos2")
		{
    			return 1;
		}
		if($table=="PPL pertenecientes a Pandilla_prueba")
		{
    			return 1;
		}
		if($table=="PPL pertenecientes a Pandilla_prueba1")
		{
    			return 1;
		}
		if($table=="retornados")
		{
    			return 1;
		}
		if($table=="Retornados, clasificacion rango etario")
		{
    			return 0;
		}
		if($table=="BD Retornados")
		{
    			return 1;
		}
		if($table=="Retornados-Región Repatriación por año")
		{
    			return 1;
		}
		if($table=="mes corregido retornado")
		{
    			return 0;
		}
		if($table=="Retornados-Regiones repatriación por meses")
		{
    			return 1;
		}
		if($table=="Retornados-Consulados por año")
		{
    			return 1;
		}
		if($table=="Retornados Dashboard")
		{
    			return 0;
		}
		if($table=="Retornados-Departamento por año")
		{
    			return 1;
		}
		if($table=="Retornados-Municipios por año")
		{
    			return 1;
		}
		if($table=="Retornados-Rango etario por sexo")
		{
    			return 1;
		}
		if($table=="Retornados-Rango etario por antecedentes género masculino")
		{
    			return 1;
		}
		if($table=="Retornados-Rango etario por antecedentes género femenino")
		{
    			return 1;
		}
		if($table=="transito")
		{
    			return 1;
		}
		if($table=="Tránsito- Departamento por resultado del accidente")
		{
    			return 1;
		}
		if($table=="Tránsito")
		{
    			return 0;
		}
		if($table=="Tránsito- municipio por resultado del accidente")
		{
    			return 1;
		}
		if($table=="Tránsito-Fallecidos Rango etario víctima por sexo víctima")
		{
    			return 1;
		}
		if($table=="Tránsito-Lesionados Rango etario víctima por sexo víctima")
		{
    			return 1;
		}
		if($table=="Tránsito-Calidad de la víctima por resultado del accidente")
		{
    			return 1;
		}
		if($table=="Tránsito-Tipo de accidente por resultado del accidente")
		{
    			return 1;
		}
		if($table=="Transito class causas")
		{
    			return 0;
		}
		if($table=="transito1")
		{
    			return 1;
		}
		if($table=="Tránsito-Causa del accidente por resultado del accidente")
		{
    			return 1;
		}
		if($table=="Transito class tipo vehículo")
		{
    			return 0;
		}
		if($table=="Tránsito-Tipo de vehículo por resultado del accidente")
		{
    			return 1;
		}
		if($table=="Tránsito-Ruta transporte colectivo por resultado del accidente")
		{
    			return 1;
		}
		if($table=="Tránsito-Responsable accidente detenido por resultado del accidente")
		{
    			return 1;
		}
		if($table=="Transito extraer mes")
		{
    			return 0;
		}
		if($table=="Tránsito-Resultado del accidente por meses de accidentes")
		{
    			return 1;
		}
		if($table=="Tránsito-Resultado del accidente por rango horario de accidentes")
		{
    			return 1;
		}
		if($table=="Tránsito-Dirección accidente por resultado del accidente")
		{
    			return 1;
		}
		if($table=="Transito prueba datos")
		{
    			return 1;
		}
		if($table=="empalme tablas")
		{
    			return 0;
		}
		if($table=="hechos_delictivos12")
		{
    			return 1;
		}
		if($table=="Municipios")
		{
    			return 1;
		}
		if($table=="Transito arreglar guiones")
		{
    			return 0;
		}
		if($table=="sectorppd1")
		{
    			return 1;
		}
		if($table=="Sector PPD 24")
		{
    			return 1;
		}
		if($table=="sectorppd1 Report")
		{
    			return 1;
		}
		if($table=="Dashboard")
		{
    			return 0;
		}
		if($table=="sectorppd1 Chart")
		{
    			return 1;
		}
		if($table=="Hechosdelictivos_rango etario")
		{
    			return 0;
		}
		if($table=="carcel Report")
		{
    			return 1;
		}
		if($table=="pnc9112 PRUEBA")
		{
    			return 1;
		}
		if($table=="Sector PPD por tipo de arma")
		{
    			return 1;
		}
		if($table=="Cruce Sector PPD")
		{
    			return 1;
		}
		if($table=="enlazando sector")
		{
    			return 1;
		}
		if($table=="Retornados-Todos los departamentos")
		{
    			return 1;
		}
		if($table=="reemplazar sectores")
		{
    			return 0;
		}
		if($table=="hechos_delictivos_VISTA")
		{
    			return 1;
		}
		if($table=="reemplazar sectores PPL")
		{
    			return 0;
		}
		if($table=="anexar_carcel")
		{
    			return 1;
		}
		if($table=="anexar_carcel1")
		{
    			return 1;
		}
		if($table=="SUPRIMIR REGISTROS ANEXO CARCEL")
		{
    			return 0;
		}
		if($table=="Sectorizacion")
		{
    			return 0;
		}
		if($table=="PPL DGCP")
		{
    			return 0;
		}
		if($table=="Personas Privadas de Libertad123")
		{
    			return 0;
		}
		if($table=="Personas privadas de libertad por rango etario, segun nivel educativo y género femenino")
		{
    			return 1;
		}
		if($table=="Dashboard1")
		{
    			return 0;
		}
		if($table=="PPL por rango etario según género")
		{
    			return 1;
		}
		if($table=="reemplazar_sectores_hechosdelictivos")
		{
    			return 0;
		}
		if($table=="mined")
		{
    			return 1;
		}
		if($table=="mined1")
		{
    			return 0;
		}
		if($table=="mined2")
		{
    			return 1;
		}
		if($table=="mined21")
		{
    			return 1;
		}
		if($table=="mined Report")
		{
    			return 1;
		}
		if($table=="MINED IPCE")
		{
    			return 0;
		}
		if($table=="MINED INDICE")
		{
    			return 1;
		}
		if($table=="mined11")
		{
    			return 1;
		}
		if($table=="calcular indice MINED")
		{
    			return 1;
		}
		if($table=="calcular indice MINED2")
		{
    			return 0;
		}
		if($table=="mined1 Report")
		{
    			return 1;
		}
		if($table=="Maxima Matricula Mined")
		{
    			return 0;
		}
		if($table=="Matricula Relativa Final")
		{
    			return 0;
		}
		if($table=="IPCE_NAIVE")
		{
    			return 0;
		}
		if($table=="IPCE_FINAL")
		{
    			return 0;
		}
		if($table=="Mined_Maximo IPCE")
		{
    			return 1;
		}
		if($table=="mined maximo valor")
		{
    			return 1;
		}
		if($table=="BD Mined")
		{
    			return 1;
		}
		if($table=="mined3")
		{
    			return 0;
		}
		if($table=="valor maximo mined 2")
		{
    			return 1;
		}
		if($table=="BD SECTORES")
		{
    			return 1;
		}
		if($table=="Anexar Sector a PPL")
		{
    			return 1;
		}
		if($table=="mined4")
		{
    			return 1;
		}
		if($table=="anexar_carcel2")
		{
    			return 1;
		}
		if($table=="anexar_carcel3")
		{
    			return 1;
		}
	}
	elseif(is_wr_db())
	{
		global $dal;
		$table_list=WRGetTablesList();
		foreach($table_list as $key=>$value)
		{
			if($table==$value)
			{
				return 1;
			}
		}
	}
	elseif(is_wr_custom())
	{
		return 1;
	}
	return 0;
}

/**
 * convert cars.Make to [cars].[Make]
 */
function WRAddFieldWrappers($field)
{
	//The default connection is temporary used #9875
	$connection = getDefaultConnection();
	
	$t = "";
	$f = "";
	WRSplitFieldName($field, $t, $f);
	
	if(!$t)
	{
		return $connection->addFieldWrappers($f);
	}
	return $connection->addTableWrappers($t).".".$connection->addFieldWrappers($f);
}

function WRSplitFieldName($str, &$table, &$field)
{
	$table="";
	$field=$str;
	$pos=strrpos($field,".");
	if($pos===false)
		return;
	$table=substr($str,0,$pos);
	$field=substr($str,$pos+1);		
}

function is_groupby_chart()
{
	if(!count(@$_SESSION['webcharts']))
		return false;
	$root=&$_SESSION['webcharts'];
	if(!is_array($root["group_by_condition"]))
		return false;
	return ($root["group_by_condition"]["group_by_toggle"]=="true");
}

function WRChartLabel($str)
{
	$table="";
	$field="";
	WRSplitFieldName($str,$table,$field);
	return $field;
	if(!$table)
		return $field;
	return $table.".".$field;
}

function is_wr_db()
{
	if(@$_SESSION["webobject"]["table_type"]=="db")
		return true;
	else
		return false;
}

function is_wr_project()
{
	if(@$_SESSION["webobject"]["table_type"]=="project")
		return true;
	else
		return false;
}

function is_wr_custom()
{
	if(@$_SESSION["webobject"]["table_type"]=="custom")
		return true;
	else
		return false;
}

function WRGetTablesList()
{
	if(!isset($_SESSION["WRTableList"]))
	{
		//The default connection is temporary used #9875
		$connection = getDefaultConnection();			
		$_SESSION["WRTableList"] = $connection->getTableList();
	}
	return $_SESSION["WRTableList"];
}

function WRGetFieldsList($table)
{
	if(is_wr_project()){
		$pSet = new ProjectSettings($table);
		return $pSet->getFieldsList();
	}
	
	if(is_wr_db())
	{
		global $wr_is_standalone;
		if(!$wr_is_standalone)
		{
			global $dal;
			if($dal->Table($table))
				return $dal->GetFieldsList($table);
		}
		return dbinfoFieldsList($table);
	}
	
	if(is_wr_custom())
	{
		$res = array();
		$sql = $_SESSION["object_sql"];
		
		//The default connection is temporary used #9875
		$connection = getDefaultConnection(); 
		$arr = $connection->getFieldsList($sql); 
		
		foreach($arr as $val)
		{
			$res[] = $val["fieldname"];
		}
		return $res;
	}
}

function dbinfoFieldsList($table)
{	
	if( isset($_SESSION["WRFieldList"][$table]) )
		return $_SESSION["WRFieldList"][$table];

	//The default connection is temporary used #9875
	$connection = getDefaultConnection(); 
	$arr = $connection->getFieldsList("select * from ".$connection->addTableWrappers($table)." where 1=0");

	$res = array();		
	foreach($arr as $val)
	{
		$res[] = $val["fieldname"];
	}
	
	$_SESSION["WRFieldList"][$table] = $res;
	return $res;
}

function WRCustomGetFieldType($table,$field)
{
	global $conn;
	if(is_wr_project())
	{
		$pSet = new ProjectSettings($_SESSION['webreports']['tables'][0]);
		$type = $pSet->getFieldType($field);
		if($type)
			return $type;
	}
	if(is_wr_db())
	{
		global $wr_is_standalone;
		if(!$wr_is_standalone)
		{
			global $dal;
			if($dal->Table($table))
				return $dal->GetFieldType($table,$field);
		}
		return dbinfoFieldsType($table,$field);
	}
	
	if(is_wr_custom())
	{
		$res = "";
		$sql = $_SESSION["object_sql"];
		if($sql)
		{
			//The default connection is temporary used #9875
			$connection = getDefaultConnection();			
		
			$arr = $connection->getFieldsList( $sql );
			foreach($arr as $val)
			{
				if($val["fieldname"] == $field)
					$res = $val["type"];
			}
		}
		return $res;
	}
}

function WRGetAllCustomFieldType()
{
	//The default connection is temporary used #9875
	$connection = getDefaultConnection();	
	
	$res = array();
	$sql = $_SESSION["object_sql"];	
	$arr = $connection->getFieldsList($sql);
	foreach($arr as $val)
	{
		$res[ $val["fieldname"] ] = $val["type"];
	}
	return $res;
}

function WRGetFieldType($fld)
{
	$table="";
	$field="";
	WRSplitFieldName($fld,$table,$field);
	return WRCustomGetFieldType($table,$field);
}

function dbinfoFieldsType($table,$field)
{
	if( isset($_SESSION["WRFieldType"][ $table ][ $field ]) )
		return $_SESSION["WRFieldType"][ $table ][ $field ];

	//The default connection is temporary used #9875
	$connection = getDefaultConnection();		
	$arr = $connection->getFieldsList("select * from ".$connection->addTableWrappers($table)." where 1=0");

	$res = "";	
	foreach($arr as $val)
	{
		if( $val["fieldname"] == $field )
			$res = $val["type"];
			
		$_SESSION["WRFieldType"][$table][$val["fieldname"]]=$val["type"]   ;
	}
	return $res;
}

function WRUseTimepicker($table,$field)
{
	return false;
}

function WRUseListLookup($table,$field)
{
	return false;
}

function getCaptionTable($table)
{
	global $strTableName;
	if(!$table)
		$table=$strTableName;
	if($table=="Delitos especificos")
	{
		return GetTableCaption("Delitos_especificos");
	}
	if($table=="carcel1")
	{
		return GetTableCaption("carcel1");
	}
	if($table=="class_lugarespecifico")
	{
		return GetTableCaption("class_lugarespecifico");
	}
	if($table=="sectorppdf")
	{
		return GetTableCaption("sectorppdf");
	}
	if($table=="tipo_mara")
	{
		return GetTableCaption("tipo_mara");
	}
	if($table=="carcel_CAMBIOS")
	{
		return GetTableCaption("carcel_CAMBIOS");
	}
	if($table=="clasificacion")
	{
		return GetTableCaption("clasificacion");
	}
	if($table=="Espacios abiertos")
	{
		return GetTableCaption("Espacios_abiertos");
	}
	if($table=="hechosdelictivos")
	{
		return GetTableCaption("hechosdelictivos");
	}
	if($table=="hechosdelictivos_lugaresp")
	{
		return GetTableCaption("hechosdelictivos_lugaresp");
	}
	if($table=="Todos los datos PPL")
	{
		return GetTableCaption("Todos_los_datos_PPL");
	}
	if($table=="PPL pertenecientes a Pandilla")
	{
		return GetTableCaption("PPL_pertenecientes_a_Pandilla");
	}
	if($table=="Sector PPD")
	{
		return GetTableCaption("Sector_PPD");
	}
	if($table=="Homicidios tentados por rango etarios, según sexo victima")
	{
		return GetTableCaption("Homicidios_tentados_por_rango_etarios__seg_n_sexo_victima");
	}
	if($table=="Hurtos por rango etarios, según sexo victima")
	{
		return GetTableCaption("Hurtos_por_rango_etarios__seg_n_sexo_victima");
	}
	if($table=="Hurtos de vehículo por rango etarios, según sexo victima")
	{
		return GetTableCaption("Hurtos_de_veh_culo_por_rango_etarios__seg_n_sexo_victima");
	}
	if($table=="Lesiones por rango etarios etarios, según sexo victima")
	{
		return GetTableCaption("Lesiones_por_rango_etarios_etarios__seg_n_sexo_victima");
	}
	if($table=="Robos por rango etario, según sexo victima")
	{
		return GetTableCaption("Robos_por_rango_etario__seg_n_sexo_victima");
	}
	if($table=="Robo de vehículo por rango etario, según sexo victima")
	{
		return GetTableCaption("Robo_de_veh_culo_por_rango_etario__seg_n_sexo_victima");
	}
	if($table=="Robo y hurto de vehículo con mercaderia por rango etario, según sexo victima")
	{
		return GetTableCaption("Robo_y_hurto_de_veh_culo_con_mercaderia_por_rango_etario__seg_n_sexo_victima");
	}
	if($table=="Personas privadas de libertad por Sectores Estandarizados según género")
	{
		return GetTableCaption("Personas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero");
	}
	if($table=="Delitos por área")
	{
		return GetTableCaption("Delitos_por__rea");
	}
	if($table=="Personas privadas de libertad por rango etario según género")
	{
		return GetTableCaption("Personas_privadas_de_libertad_por_rango_etario_seg_n_g_nero");
	}
	if($table=="Personas privadas de libertad por rango etario, segun nivel educativo y genero Femenino")
	{
		return GetTableCaption("Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino");
	}
	if($table=="Personas privadas de libertad por rango etario, segun nivel educativo y genero Masculino")
	{
		return GetTableCaption("Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Masculino");
	}
	if($table=="Personas privadas de libertad  segun Sector Estandarizado y pertenecientes a pandillas")
	{
		return GetTableCaption("Personas_privadas_de_libertad__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas");
	}
	if($table=="Delitos por lugar del hecho")
	{
		return GetTableCaption("Delitos_por_lugar_del_hecho");
	}
	if($table=="Delitos por Móvil")
	{
		return GetTableCaption("Delitos_por_M_vil");
	}
	if($table=="Conteo de delitos por sector estandarizado según Movil")
	{
		return GetTableCaption("Conteo_de_delitos_por_sector_estandarizado_seg_n_Movil");
	}
	if($table=="Delitos por tipo de arma")
	{
		return GetTableCaption("Delitos_por_tipo_de_arma");
	}
	if($table=="Ocupación de la víctima por Delitos")
	{
		return GetTableCaption("Ocupaci_n_de_la_v_ctima_por_Delitos");
	}
	if($table=="Amenazas, por rango etarios, según sexo victima")
	{
		return GetTableCaption("Amenazas__por_rango_etarios__seg_n_sexo_victima");
	}
	if($table=="Delitos Sexuales  por rango etarios, según sexo victima")
	{
		return GetTableCaption("Delitos_Sexuales__por_rango_etarios__seg_n_sexo_victima");
	}
	if($table=="Homicidios por rango etarios, según sexo")
	{
		return GetTableCaption("Homicidios_por_rango_etarios__seg_n_sexo");
	}
	if($table=="Delitos por sector Estandarizado")
	{
		return GetTableCaption("Delitos_por_sector_Estandarizado");
	}
	if($table=="Delitos por rango de horas")
	{
		return GetTableCaption("Delitos_por_rango_de_horas");
	}
	if($table=="Conteo de delitos, por Sector Estandarizado según Movil")
	{
		return GetTableCaption("Conteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil");
	}
	if($table=="Delitos por mes del hecho")
	{
		return GetTableCaption("Delitos_por_mes_del_hecho");
	}
	if($table=="homicidios_sv_2016")
	{
		return GetTableCaption("homicidios_sv_2016");
	}
	if($table=="homicidios_sv_2016 Report")
	{
		return GetTableCaption("homicidios_sv_2016_Report");
	}
	if($table=="homicidios_sv_2016 Report1")
	{
		return GetTableCaption("homicidios_sv_2016_Report1");
	}
	if($table=="Muertes PNC enfrentamientos")
	{
		return GetTableCaption("Muertes_PNC_enfrentamientos");
	}
	if($table=="homicidios_municipio")
	{
		return GetTableCaption("homicidios_municipio");
	}
	if($table=="Municipios con porcentaje de enfrentamiento")
	{
		return GetTableCaption("Municipios_con_porcentaje_de_enfrentamiento");
	}
	if($table=="PPL pertenecientes a pandillas por municipio")
	{
		return GetTableCaption("PPL_pertenecientes_a_pandillas_por_municipio");
	}
	if($table=="PPL delitos")
	{
		return GetTableCaption("PPL_delitos");
	}
	if($table=="Transito class Rango Etario")
	{
		return GetTableCaption("Transito_class_Rango_Etario");
	}
	if($table=="PPL delitos_clasificacion")
	{
		return GetTableCaption("PPL_delitos_clasificacion");
	}
	if($table=="Carcel_hurto_mercaderia")
	{
		return GetTableCaption("Carcel_hurto_mercaderia");
	}
	if($table=="PPL_educacion")
	{
		return GetTableCaption("PPL_educacion");
	}
	if($table=="Personas Privadas de Libertad")
	{
		return GetTableCaption("Personas_Privadas_de_Libertad");
	}
	if($table=="hechos_delictivos_class delitos")
	{
		return GetTableCaption("hechos_delictivos_class_delitos");
	}
	if($table=="Sector PPD por pandilla de afiliacion (prueba)")
	{
		return GetTableCaption("Sector_PPD_por_pandilla_de_afiliacion__prueba_");
	}
	if($table=="tipo organizacion delictiva")
	{
		return GetTableCaption("tipo_organizacion_delictiva");
	}
	if($table=="carcel visualizacion todos")
	{
		return GetTableCaption("carcel_visualizacion_todos");
	}
	if($table=="Grupos etarios por estado civil (masculino)")
	{
		return GetTableCaption("Grupos_etarios_por_estado_civil__masculino_");
	}
	if($table=="Grupo etarios por estado civil (masculino)")
	{
		return GetTableCaption("Grupo_etarios_por_estado_civil__masculino_");
	}
	if($table=="Grupo etarios por estado civil (femenino)")
	{
		return GetTableCaption("Grupo_etarios_por_estado_civil__femenino_");
	}
	if($table=="PPL Grupos etarios por afiliación a Pandillas")
	{
		return GetTableCaption("PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas");
	}
	if($table=="PPL Grupos etarios por afiliación a Pandillas femenino")
	{
		return GetTableCaption("PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino");
	}
	if($table=="PPL grupos etarios por Deportado masculino")
	{
		return GetTableCaption("PPL_grupos_etarios_por_Deportado_masculino");
	}
	if($table=="PPL grupos etarios por Deportado Femenino")
	{
		return GetTableCaption("PPL_grupos_etarios_por_Deportado_Femenino");
	}
	if($table=="PPL grupos etarios delito genero masculino")
	{
		return GetTableCaption("PPL_grupos_etarios_delito_genero_masculino");
	}
	if($table=="hechos_delictivos1")
	{
		return GetTableCaption("hechos_delictivos1");
	}
	if($table=="PPL Grupos etarios por delitos masculino")
	{
		return GetTableCaption("PPL_Grupos_etarios_por_delitos_masculino");
	}
	if($table=="PPL Grupos etarios por delitos femenino")
	{
		return GetTableCaption("PPL_Grupos_etarios_por_delitos_femenino");
	}
	if($table=="DELITOS PNC")
	{
		return GetTableCaption("DELITOS_PNC");
	}
	if($table=="carcel prueba santa tecla")
	{
		return GetTableCaption("carcel_prueba_santa_tecla");
	}
	if($table=="carcel_clasificacion lugar")
	{
		return GetTableCaption("carcel_clasificacion_lugar");
	}
	if($table=="mes_corregido")
	{
		return GetTableCaption("mes_corregido");
	}
	if($table=="Hechos delictivos dia del hecho")
	{
		return GetTableCaption("Hechos_delictivos_dia_del_hecho");
	}
	if($table=="hechos_delictivos11")
	{
		return GetTableCaption("hechos_delictivos11");
	}
	if($table=="BD Carcel")
	{
		return GetTableCaption("BD_Carcel");
	}
	if($table=="DB PNC")
	{
		return GetTableCaption("DB_PNC");
	}
	if($table=="Hechosdelictivos movil class")
	{
		return GetTableCaption("Hechosdelictivos_movil_class");
	}
	if($table=="hechosdelictivos_tipo_arma")
	{
		return GetTableCaption("hechosdelictivos_tipo_arma");
	}
	if($table=="Municipios y delitos")
	{
		return GetTableCaption("Municipios_y_delitos");
	}
	if($table=="Hechosdelictivos ocupacion class")
	{
		return GetTableCaption("Hechosdelictivos_ocupacion_class");
	}
	if($table=="hechosdelictivos_relacion_vict_agresor")
	{
		return GetTableCaption("hechosdelictivos_relacion_vict_agresor");
	}
	if($table=="Relacion de victima con agresor")
	{
		return GetTableCaption("Relacion_de_victima_con_agresor");
	}
	if($table=="hechosdelictivos_lugar_del_hecho")
	{
		return GetTableCaption("hechosdelictivos_lugar_del_hecho");
	}
	if($table=="pnc911")
	{
		return GetTableCaption("pnc911");
	}
	if($table=="pnc9111 class delito")
	{
		return GetTableCaption("pnc9111_class_delito");
	}
	if($table=="pnc9111")
	{
		return GetTableCaption("pnc9111");
	}
	if($table=="pnc911 Sector por eventos")
	{
		return GetTableCaption("pnc911_Sector_por_eventos");
	}
	if($table=="pnc911municipios")
	{
		return GetTableCaption("pnc911municipios");
	}
	if($table=="PNC911 Avisos")
	{
		return GetTableCaption("PNC911_Avisos");
	}
	if($table=="horas_completar")
	{
		return GetTableCaption("horas_completar");
	}
	if($table=="hora_sustituir")
	{
		return GetTableCaption("hora_sustituir");
	}
	if($table=="hechos_delictivos")
	{
		return GetTableCaption("hechos_delictivos");
	}
	if($table=="hechosdelictivos2")
	{
		return GetTableCaption("hechosdelictivos2");
	}
	if($table=="PPL pertenecientes a Pandilla_prueba")
	{
		return GetTableCaption("PPL_pertenecientes_a_Pandilla_prueba");
	}
	if($table=="PPL pertenecientes a Pandilla_prueba1")
	{
		return GetTableCaption("PPL_pertenecientes_a_Pandilla_prueba1");
	}
	if($table=="retornados")
	{
		return GetTableCaption("retornados");
	}
	if($table=="Retornados, clasificacion rango etario")
	{
		return GetTableCaption("Retornados__clasificacion_rango_etario");
	}
	if($table=="BD Retornados")
	{
		return GetTableCaption("BD_Retornados");
	}
	if($table=="Retornados-Región Repatriación por año")
	{
		return GetTableCaption("Retornados_Regi_n_Repatriaci_n_por_a_o");
	}
	if($table=="mes corregido retornado")
	{
		return GetTableCaption("mes_corregido_retornado");
	}
	if($table=="Retornados-Regiones repatriación por meses")
	{
		return GetTableCaption("Retornados_Regiones_repatriaci_n_por_meses");
	}
	if($table=="Retornados-Consulados por año")
	{
		return GetTableCaption("Retornados_Consulados_por_a_o");
	}
	if($table=="Retornados Dashboard")
	{
		return GetTableCaption("Retornados_Dashboard");
	}
	if($table=="Retornados-Departamento por año")
	{
		return GetTableCaption("Retornados_Departamento_por_a_o");
	}
	if($table=="Retornados-Municipios por año")
	{
		return GetTableCaption("Retornados_Municipios_por_a_o");
	}
	if($table=="Retornados-Rango etario por sexo")
	{
		return GetTableCaption("Retornados_Rango_etario_por_sexo");
	}
	if($table=="Retornados-Rango etario por antecedentes género masculino")
	{
		return GetTableCaption("Retornados_Rango_etario_por_antecedentes_g_nero_masculino");
	}
	if($table=="Retornados-Rango etario por antecedentes género femenino")
	{
		return GetTableCaption("Retornados_Rango_etario_por_antecedentes_g_nero_femenino");
	}
	if($table=="transito")
	{
		return GetTableCaption("transito");
	}
	if($table=="Tránsito- Departamento por resultado del accidente")
	{
		return GetTableCaption("Tr_nsito__Departamento_por_resultado_del_accidente");
	}
	if($table=="Tránsito")
	{
		return GetTableCaption("Tr_nsito");
	}
	if($table=="Tránsito- municipio por resultado del accidente")
	{
		return GetTableCaption("Tr_nsito__municipio_por_resultado_del_accidente");
	}
	if($table=="Tránsito-Fallecidos Rango etario víctima por sexo víctima")
	{
		return GetTableCaption("Tr_nsito_Fallecidos_Rango_etario_v_ctima_por_sexo_v_ctima");
	}
	if($table=="Tránsito-Lesionados Rango etario víctima por sexo víctima")
	{
		return GetTableCaption("Tr_nsito_Lesionados_Rango_etario_v_ctima_por_sexo_v_ctima");
	}
	if($table=="Tránsito-Calidad de la víctima por resultado del accidente")
	{
		return GetTableCaption("Tr_nsito_Calidad_de_la_v_ctima_por_resultado_del_accidente");
	}
	if($table=="Tránsito-Tipo de accidente por resultado del accidente")
	{
		return GetTableCaption("Tr_nsito_Tipo_de_accidente_por_resultado_del_accidente");
	}
	if($table=="Transito class causas")
	{
		return GetTableCaption("Transito_class_causas");
	}
	if($table=="transito1")
	{
		return GetTableCaption("transito1");
	}
	if($table=="Tránsito-Causa del accidente por resultado del accidente")
	{
		return GetTableCaption("Tr_nsito_Causa_del_accidente_por_resultado_del_accidente");
	}
	if($table=="Transito class tipo vehículo")
	{
		return GetTableCaption("Transito_class_tipo_veh_culo");
	}
	if($table=="Tránsito-Tipo de vehículo por resultado del accidente")
	{
		return GetTableCaption("Tr_nsito_Tipo_de_veh_culo_por_resultado_del_accidente");
	}
	if($table=="Tránsito-Ruta transporte colectivo por resultado del accidente")
	{
		return GetTableCaption("Tr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente");
	}
	if($table=="Tránsito-Responsable accidente detenido por resultado del accidente")
	{
		return GetTableCaption("Tr_nsito_Responsable_accidente_detenido_por_resultado_del_accidente");
	}
	if($table=="Transito extraer mes")
	{
		return GetTableCaption("Transito_extraer_mes");
	}
	if($table=="Tránsito-Resultado del accidente por meses de accidentes")
	{
		return GetTableCaption("Tr_nsito_Resultado_del_accidente_por_meses_de_accidentes");
	}
	if($table=="Tránsito-Resultado del accidente por rango horario de accidentes")
	{
		return GetTableCaption("Tr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes");
	}
	if($table=="Tránsito-Dirección accidente por resultado del accidente")
	{
		return GetTableCaption("Tr_nsito_Direcci_n_accidente_por_resultado_del_accidente");
	}
	if($table=="Transito prueba datos")
	{
		return GetTableCaption("Transito_prueba_datos");
	}
	if($table=="empalme tablas")
	{
		return GetTableCaption("empalme_tablas");
	}
	if($table=="hechos_delictivos12")
	{
		return GetTableCaption("hechos_delictivos12");
	}
	if($table=="Municipios")
	{
		return GetTableCaption("Municipios");
	}
	if($table=="Transito arreglar guiones")
	{
		return GetTableCaption("Transito_arreglar_guiones");
	}
	if($table=="sectorppd1")
	{
		return GetTableCaption("sectorppd1");
	}
	if($table=="Sector PPD 24")
	{
		return GetTableCaption("Sector_PPD_24");
	}
	if($table=="sectorppd1 Report")
	{
		return GetTableCaption("sectorppd1_Report");
	}
	if($table=="Dashboard")
	{
		return GetTableCaption("Dashboard");
	}
	if($table=="sectorppd1 Chart")
	{
		return GetTableCaption("sectorppd1_Chart");
	}
	if($table=="Hechosdelictivos_rango etario")
	{
		return GetTableCaption("Hechosdelictivos_rango_etario");
	}
	if($table=="carcel Report")
	{
		return GetTableCaption("carcel_Report");
	}
	if($table=="pnc9112 PRUEBA")
	{
		return GetTableCaption("pnc9112_PRUEBA");
	}
	if($table=="Sector PPD por tipo de arma")
	{
		return GetTableCaption("Sector_PPD_por_tipo_de_arma");
	}
	if($table=="Cruce Sector PPD")
	{
		return GetTableCaption("Cruce_Sector_PPD");
	}
	if($table=="enlazando sector")
	{
		return GetTableCaption("enlazando_sector");
	}
	if($table=="Retornados-Todos los departamentos")
	{
		return GetTableCaption("Retornados_Todos_los_departamentos");
	}
	if($table=="reemplazar sectores")
	{
		return GetTableCaption("reemplazar_sectores");
	}
	if($table=="hechos_delictivos_VISTA")
	{
		return GetTableCaption("hechos_delictivos_VISTA");
	}
	if($table=="reemplazar sectores PPL")
	{
		return GetTableCaption("reemplazar_sectores_PPL");
	}
	if($table=="anexar_carcel")
	{
		return GetTableCaption("anexar_carcel");
	}
	if($table=="anexar_carcel1")
	{
		return GetTableCaption("anexar_carcel1");
	}
	if($table=="SUPRIMIR REGISTROS ANEXO CARCEL")
	{
		return GetTableCaption("SUPRIMIR_REGISTROS_ANEXO_CARCEL");
	}
	if($table=="Sectorizacion")
	{
		return GetTableCaption("Sectorizacion");
	}
	if($table=="PPL DGCP")
	{
		return GetTableCaption("PPL_DGCP");
	}
	if($table=="Personas Privadas de Libertad123")
	{
		return GetTableCaption("Personas_Privadas_de_Libertad123");
	}
	if($table=="Personas privadas de libertad por rango etario, segun nivel educativo y género femenino")
	{
		return GetTableCaption("Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino");
	}
	if($table=="Dashboard1")
	{
		return GetTableCaption("Dashboard1");
	}
	if($table=="PPL por rango etario según género")
	{
		return GetTableCaption("PPL_por_rango_etario_seg_n_g_nero");
	}
	if($table=="reemplazar_sectores_hechosdelictivos")
	{
		return GetTableCaption("reemplazar_sectores_hechosdelictivos");
	}
	if($table=="mined")
	{
		return GetTableCaption("mined");
	}
	if($table=="mined1")
	{
		return GetTableCaption("mined1");
	}
	if($table=="mined2")
	{
		return GetTableCaption("mined2");
	}
	if($table=="mined21")
	{
		return GetTableCaption("mined21");
	}
	if($table=="mined Report")
	{
		return GetTableCaption("mined_Report");
	}
	if($table=="MINED IPCE")
	{
		return GetTableCaption("MINED_IPCE");
	}
	if($table=="MINED INDICE")
	{
		return GetTableCaption("MINED_INDICE");
	}
	if($table=="mined11")
	{
		return GetTableCaption("mined11");
	}
	if($table=="calcular indice MINED")
	{
		return GetTableCaption("calcular_indice_MINED");
	}
	if($table=="calcular indice MINED2")
	{
		return GetTableCaption("calcular_indice_MINED2");
	}
	if($table=="mined1 Report")
	{
		return GetTableCaption("mined1_Report");
	}
	if($table=="Maxima Matricula Mined")
	{
		return GetTableCaption("Maxima_Matricula_Mined");
	}
	if($table=="Matricula Relativa Final")
	{
		return GetTableCaption("Matricula_Relativa_Final");
	}
	if($table=="IPCE_NAIVE")
	{
		return GetTableCaption("IPCE_NAIVE");
	}
	if($table=="IPCE_FINAL")
	{
		return GetTableCaption("IPCE_FINAL");
	}
	if($table=="Mined_Maximo IPCE")
	{
		return GetTableCaption("Mined_Maximo_IPCE");
	}
	if($table=="mined maximo valor")
	{
		return GetTableCaption("mined_maximo_valor");
	}
	if($table=="BD Mined")
	{
		return GetTableCaption("BD_Mined");
	}
	if($table=="mined3")
	{
		return GetTableCaption("mined3");
	}
	if($table=="valor maximo mined 2")
	{
		return GetTableCaption("valor_maximo_mined_2");
	}
	if($table=="BD SECTORES")
	{
		return GetTableCaption("BD_SECTORES");
	}
	if($table=="Anexar Sector a PPL")
	{
		return GetTableCaption("Anexar_Sector_a_PPL");
	}
	if($table=="mined4")
	{
		return GetTableCaption("mined4");
	}
	if($table=="anexar_carcel2")
	{
		return GetTableCaption("anexar_carcel2");
	}
	if($table=="anexar_carcel3")
	{
		return GetTableCaption("anexar_carcel3");
	}
	return $table;
}


function getChartTablesList()
{
	return WRGetQueryTables('webcharts');
}

function getReportTablesList()
{
	return WRGetQueryTables('webreports');
}

function WRGetQueryTables($type)
{
	$root=&$_SESSION[$type];
	$ret=array($root['tables'][0]);
	if (strlen(@$root['table_relations']["relations"]) && strpos($root['table_relations']['join_tables'], ",") !== false) 
	{
		$joined = explode(",", $root['table_relations']['join_tables']);
		foreach($joined as $t)
		{
			if(strlen($t))
				$ret[]=$t;
		}
	}
	return $ret;
}

function GetDefaultViewFormat($type)
{
	if(IsBinaryType($type))
		return FORMAT_DATABASE_IMAGE;
	elseif(IsDateFieldType($type))
		return FORMAT_DATE_SHORT;
	else
		return FORMAT_NONE;
}

function GetDefaultEditFormat($type)
{
	if(IsBinaryType($type))
		return EDIT_FORMAT_DATABASE_IMAGE;
	elseif(IsDateFieldType($type))
		return EDIT_FORMAT_DATE;
	else
		return EDIT_FORMAT_TEXT_FIELD;
}

function GetGenericViewFormat($table,$field)
{
	return GetDefaultViewFormat(WRGetFieldType($table.".".$field));
}


function GetGenericEditFormat($table,$field)
{
	return GetDefaultEditFormat(WRGetFieldType($table.".".$field));
}

function GenericStrWhereAdv($strTable, $strField, $SearchFor, $strSearchOption, $SearchFor2, $etype)
{
	global $dal;
	$sfield=$strField;
	$stable="";
	if(is_wr_db())
	{
		WRSplitFieldName($strField,$stable,$sfield);
		$type=WRGetFieldType($strField);
	}
	else
		$type=WRCustomGetFieldType($strTable,$strField);

	if(GetDatabaseType() != nDATABASE_MSSQLServer)
		$ismssql=false;
	else
		$ismssql=true;
		
		$btexttype=IsTextType($type);
	if(GetDatabaseType() == nDATABASE_MySQL)
		$btexttype=false;

	if(IsBinaryType($type))
		return "";
	
	if(GetDatabaseType() == nDATABASE_MSSQLServer)
	{
		if($btexttype && $strSearchOption!="Contains" && $strSearchOption!="Starts with ..." )
			return "";
	}
	if($strSearchOption=='Empty')
	{
		if(IsCharType($type) && (!$ismssql || !$btexttype))
			return "(".WRAddFieldWrappers($strField)." is null or ".WRAddFieldWrappers($strField)."='')";			
		elseif ($ismssql && $btexttype)	
			return "(".WRAddFieldWrappers($strField)." is null or ".WRAddFieldWrappers($strField)." LIKE '')";
		else
			return WRAddFieldWrappers($strField)." is null";
	}
	if(GetDatabaseType() == nDATABASE_PostgreSQL)
		$like="ilike";
	else
		$like="like";
	if(GetGenericEditFormat($strTable,$sfield)==EDIT_FORMAT_LOOKUP_WIZARD)
	{
		$pSet = new ProjectSettings($strTable);
		if($pSet->multiSelect($sfield))
			$SearchFor=splitvalues($SearchFor);
		else
			$SearchFor=array($SearchFor);
		$ret="";
		foreach($SearchFor as $searchItem)
		{
			$value = $searchItem;
			if(!($value=="null" || $value=="Null" || $value==""))
			{
				if(strlen($ret))
					$ret.=" or ";
				if($strSearchOption=="Equals")
				{
					$value=WRmake_db_value($sfield,$value,$strTable);
					if(!($value=="null" || $value=="Null"))
						$ret.=WRAddFieldWrappers($strField).'='.$value;
				}
				else
				{
					$connection = getWebreportConnection();
					if(strpos($value,",")!==false || strpos($value,'"')!==false)
						$value = '"'.str_replace('"','""',$value).'"';
					$ret.=WRAddFieldWrappers($strField)." = ".$connection->prepareString($value);
					$ret.=" or ".WRAddFieldWrappers($strField)." ".$like." ".$connection->prepareString("%,".$value.",%");
					$ret.=" or ".WRAddFieldWrappers($strField)." ".$like." ".$connection->prepareString("%,".$value);
					$ret.=" or ".WRAddFieldWrappers($strField)." ".$like." ".$connection->prepareString($value.",%");
				}
			}
		}
		if(strlen($ret))
			$ret="(".$ret.")";
		return $ret;
	}
	if(GetGenericEditFormat($strTable,$sfield)==EDIT_FORMAT_CHECKBOX)
	{
		if($SearchFor=="none")
			return "";
		if(NeedQuotes($type))
		{
			if($SearchFor=="on")
				return "(".WRAddFieldWrappers($strField)."<>'0' and ".WRAddFieldWrappers($strField)."<>'' and ".WRAddFieldWrappers($strField)." is not null)";
			else
				return "(".WRAddFieldWrappers($strField)."='0' or ".WRAddFieldWrappers($strField)."='' or ".WRAddFieldWrappers($strField)." is null)";
		}
		else
		{
			if($SearchFor=="on")
				return "(".WRAddFieldWrappers($strField)."<>0 and ".WRAddFieldWrappers($strField)." is not null)";
			else
				return "(".WRAddFieldWrappers($strField)."=0 or ".WRAddFieldWrappers($strField)." is null)";
		}
	}
	$value1=WRmake_db_value($sfield,$SearchFor,$strTable);
	$value2=false;
	if($strSearchOption=="Between")
		$value2=WRmake_db_value($sfield,$SearchFor2,$strTable);
	if($strSearchOption!="Contains" && $strSearchOption!="Starts with ..." && ($value1==="null" || $value2==="null" ))
		return "";

	$connection = getWebreportConnection();
	if(IsCharType($type) && !$btexttype)
	{
		$value1=$connection->upper($value1);
		$value2=$connection->upper($value2);
		$strField=$connection->upper(WRAddFieldWrappers($strField));
	}
	elseif ($ismssql && !$btexttype && ($strSearchOption=="Contains" || $strSearchOption=="Starts with ..."))
		$strField="convert(varchar,".WRAddFieldWrappers($strField).")";
	elseif(GetDatabaseType() == nDATABASE_PostgreSQL && !$btexttype && ($strSearchOption=="Contains" || $strSearchOption=="Starts with ..."))
		$strField = "CAST(".WRAddFieldWrappers($strField)." AS TEXT)";
	else 
		$strField=WRAddFieldWrappers($strField);
	$ret="";
	if($strSearchOption=="Contains")
	{
		if(IsCharType($type) && !$btexttype)
			return $strField." ".$like." ".$connection->upper($connection->prepareString("%".$SearchFor."%"));
		else
			return $strField." ".$like." ".$connection->prepareString("%".$SearchFor."%");
	}
	else if($strSearchOption=="Equals")
	{
		return $strField."=".$value1;
	}
	else if($strSearchOption=="Starts with ...")
	{
		if(IsCharType($type) && !$btexttype)
			return $strField." ".$like." ".$connection->upper($connection->prepareString($SearchFor."%"));
		else
			return $strField." ".$like." ".$connection->prepareString($SearchFor."%");
	}
	else if($strSearchOption=="More than ...") return $strField.">".$value1;
	else if($strSearchOption=="Less than ...") return $strField."<".$value1;
	else if($strSearchOption=="Equal or more than ...") return $strField.">=".$value1;
	else if($strSearchOption=="Equal or less than ...") return $strField."<=".$value1;
	else if($strSearchOption=="Between")
	{
		$ret=$strField.">=".$value1;
		$ret.=" and ".$strField."<=".$value2;
		return $ret;
	}
	return "";
}



function GetAdvSearchOptions($table,$field)
{
	$format=GetGenericEditFormat($table,$field);
	$options=array();
	if($format==EDIT_FORMAT_DATE)
	{
		$options[]=array("type"=>"Equals","label"=>mlang_message("EQUALS"));
		$options[]=array("type"=>"More than ...","label"=>mlang_message("MORE_THAN"));
		$options[]=array("type"=>"Less than ...","label"=>mlang_message("LESS_THAN"));
		$options[]=array("type"=>"Equal or more than ...","label"=>mlang_message("EQUAL_OR_MORE"));
		$options[]=array("type"=>"Equal or less than ...","label"=>mlang_message("EQUAL_OR_LESS"));
		$options[]=array("type"=>"Between","label"=>mlang_message("BETWEEN"));
		$options[]=array("type"=>"Empty","label"=>mlang_message("EMPTY"));
	}
	elseif($format==EDIT_FORMAT_LOOKUP_WIZARD)
	{
		$pSet = new ProjectSettings($table, PAGE_REPORT);
		if($pSet->multiSelect($field))
			$options[]=array("type"=>"Contains","label"=>mlang_message("CONTAINS"));
		else
			$options[]=array("type"=>"Equals","label"=>mlang_message("EQUALS"));
	}
	elseif($format==EDIT_FORMAT_TEXT_FIELD
	|| $format==EDIT_FORMAT_TEXT_AREA
	|| $format==EDIT_FORMAT_PASSWORD
	|| $format==EDIT_FORMAT_HIDDEN
	|| $format==EDIT_FORMAT_READONLY	)
	{
		$options[]=array("type"=>"Contains","label"=>mlang_message("CONTAINS"));
		$options[]=array("type"=>"Equals","label"=>mlang_message("EQUALS"));
		$options[]=array("type"=>"Starts with ...","label"=>mlang_message("STARTS_WITH"));
		$options[]=array("type"=>"More than ...","label"=>mlang_message("MORE_THAN"));
		$options[]=array("type"=>"Less than ...","label"=>mlang_message("LESS_THAN"));
		$options[]=array("type"=>"Equal or more than ...","label"=>mlang_message("EQUAL_OR_MORE"));
		$options[]=array("type"=>"Equal or less than ...","label"=>mlang_message("EQUAL_OR_LESS"));
		$options[]=array("type"=>"Between","label"=>mlang_message("BETWEEN"));
		$options[]=array("type"=>"Empty","label"=>mlang_message("EMPTY"));
	}
	else
	{
		$options[]=array("type"=>"Equals","label"=>mlang_message("EQUALS"));
}
	return $options;
}

function CalcSearchParam($webreportsMode=false)
{
	global $sessPrefix, $strSQL, $strTableName;
	$sWhere="";
	
	
	if(!$webreportsMode)
	{
		$cipherer = new RunnerCipherer($strTableName);
		$params = array();
		
		$params['tName'] = $strTableName;
		$params['cipherer'] = $cipherer;
		$params['searchFieldsArr'] = WRGetFieldsList($strTableName);
		
		$searchClauseObj = new SearchClause($params);
		$searchClauseObj->parseRequest();
		return $searchClauseObj->buildItegratedWhere(WRGetFieldsList($strTableName));
	}
	
	if(@$_SESSION[$sessPrefix."_search"]==2)
//	 advanced search
	{
		foreach(@$_SESSION[$sessPrefix."_asearchfor"] as $f => $sfor)
		{
			$strSearchFor=trim($sfor);
			$strSearchFor2="";
			$type=@$_SESSION[$sessPrefix."_asearchfortype"][$f];
			if(array_key_exists($f,@$_SESSION[$sessPrefix."_asearchfor2"]))
				$strSearchFor2=trim(@$_SESSION[$sessPrefix."_asearchfor2"][$f]);
			if($strSearchFor!="" || true)
			{
				if (!$sWhere) 
				{
					if($_SESSION[$sessPrefix."_asearchtype"]=="and")
						$sWhere="1=1";
					else
						$sWhere="1=0";
				}
				$strSearchOption=trim($_SESSION[$sessPrefix."_asearchopt"][$f]);
				$where = GenericStrWhereAdv(@$_SESSION[$sessPrefix."_asearchtable"][$f], $f, $strSearchFor, $strSearchOption, $strSearchFor2,$type);
				if($where)
				{
					if($_SESSION[$sessPrefix."_asearchnot"][$f])
						$where="not (".$where.")";
					if($_SESSION[$sessPrefix."_asearchtype"]=="and")
	   					$sWhere .= " and ".$where;
					else
	   					$sWhere .= " or ".$where;
				}
			}
		}
	}
	return $sWhere;
}

function WRViewFormat($field,$table="")
{
	$pSet = new ProjectSettings($table);
	return $pSet->getViewFormat($field);
}

function get_chart_series_fields(&$arr_data_series,&$arr_label_series)
{
	if(is_groupby_chart())
		return get_chart_groupbyseries_fields($arr_data_series,$arr_label_series);
	$root=&$_SESSION['webcharts'];
	$arr_data_series=array();
	$arr_label_series=array();

	$arr_join_tables = getChartTablesList();

	for ($i=0; $i < count($arr_join_tables); $i++ ) 
	{
		$t = $arr_join_tables[$i];
		$arr_fields = GetNumberFieldsList($t);
		for ($j=0; $j < count($arr_fields); $j++) 
		{
			if(!is_wr_custom())
				$arr_data_series[] = array("field" => $t.".".$arr_fields[$j], "label" => WRChartLabel($t.".".$arr_fields[$j]));
			else
				$arr_data_series[] = array("field" => $arr_fields[$j], "label" => WRChartLabel($arr_fields[$j]));
		}
		$arr_fields = WRGetNBFieldsList($t);
		for ($j=0; $j < count($arr_fields); $j++) 
		{
			if(!is_wr_custom())
				$arr_label_series[] = array("field" => $t.".".$arr_fields[$j], "label" => WRChartLabel($t.".".$arr_fields[$j]));
			else
				$arr_label_series[] = array("field" => $arr_fields[$j], "label" => WRChartLabel($arr_fields[$j]));
		}	
	}
	if(!count($arr_data_series))
		$arr_data_series = $arr_label_series;
}

function get_chart_groupbyseries_fields(&$arr_data_series,&$arr_label_series)
{
	$root=&$_SESSION['webcharts'];
	$arr_data_series=array();
	$arr_label_series=array();
	for ($i=0; $i < count($root['group_by_condition'])-1; $i++) 
	{
		$arr = &$root['group_by_condition'][$i];
		$field=$arr["field_opt"];
		$strLabel=WRChartLabel($field);
		$isLabel=false;
		$isData=false;
		if($arr["group_by_value"]!="-1" && $arr["group_by_value"]!="GROUP BY")
		{
			$field=$arr["group_by_value"]."(".$field.")";
			$isData=true;
			$isLabel=true;
		}
		else if($arr["group_by_value"]=="GROUP BY")
		{
			$type = WRGetFieldType($field);
			if(IsNumberType($type))
				$isData=true;
			$isLabel=true;
		}
		
		$ret = array("field"=>$field,"label"=>$strLabel);
		if($isLabel)
			$arr_label_series[]=$ret;
		if($isData)
			$arr_data_series[]=$ret;
	}
	if(!count($arr_data_series))
		$arr_data_series = $arr_label_series;
}

function WRProcessLargeText($text,$field,$recid,$chars,$mode,$strLabel, $isProgectTable = false)
{
	if(!$chars)
		return $text;
	if($mode!=MODE_LIST && $mode!=MODE_PRINT || strlen($text)<$chars+10)
		return $text;
	
	if($isProgectTable)
		$shortening = GetShorteningForLargeText($text, $cNumberOfChars);
	else 
		$shortening = substr($text,0,$chars);
		
	if($mode==MODE_PRINT)
	{
		return $shortening."...";
	}
//	List page
	$id="textbox_".GoodFieldName($field).$recid;
	$textbox="<span style=\"display:none\" id=\"".$id."\">".$text."</span>";
	$link="<a href=# onclick=\"
	
	var offset = $(this).offset();
	offset.left -= $(window).scrollLeft();
	offset.top -= $(window).scrollTop();
	$('#".$id."').clone().dialog(
	{
title: '".jsreplace($strLabel)."',
		draggable: true,
		resizable: true,
		bgiframe: true,
		modal: false,
		minheight:400,
		position:[offset.left-50,offset.top-50]
	}
	);
	return false;
	\">&nbsp;".mlang_message("MORE")."...</a>";
	return $shortening.$link.$textbox;
}

function JumpTo()
{
	return "$(\"#jumpto\").mouseover(function(){
		if(closetimer) {
			window.clearTimeout(closetimer);
			closetimer = null;
		}
		var jumpto = $(\"#jumpto\"), menujump = $(\"#menujump\"), framejump = $(\"#framejump\");
		if (jumpto.top + jumpto.height() + menujump.height() + $(window).scrollTop() > $(window).height()) {
			if(menujump.height() - jumpto.offset().top + $(window).scrollTop()>0)
			{
				menujump.css(\"top\", $(window).scrollTop()+\"px\");		
				menujump.css(\"left\", ($(this).offset().left - 6) + \"px\");					
				framejump.css(\"width\", menujump.width());
				framejump.css(\"height\", menujump.height());
				framejump.css(\"top\", $(window).scrollTop()+\"px\");		
				framejump.css(\"left\", ($(this).offset().left - 1) + \"px\");
			}
			else
			{
				menujump.css(\"top\", ($(this).offset().top - menujump.height()) + \"px\");		
				menujump.css(\"left\", ($(this).offset().left - 6) + \"px\");					
				framejump.css(\"width\", menujump.width());
				framejump.css(\"height\", menujump.height());
				framejump.css(\"top\", ($(this).offset().top - framejump.height()) + \"px\");		
				framejump.css(\"left\", ($(this).offset().left - 1) + \"px\");
			}
		} else {
			menujump.css(\"top\", ($(this).offset().top + $(this).height()) + \"px\");		
			menujump.css(\"left\", ($(this).offset().left - 6) + \"px\");			
			framejump.css(\"width\", menujump.width());
			framejump.css(\"height\", menujump.height());
			framejump.css(\"top\", ($(this).offset().top + $(this).height()) + \"px\");		
			framejump.css(\"left\", ($(this).offset().left - 1) + \"px\");		
		}
		framejump.show();
		menujump.show();
	});

	$(\"#jumpto\").mouseout(function(){
		closetimer = window.setTimeout(\"$('#menujump').hide();$('#framejump').hide();\", timeout);
	});
	
	$(\"#menujump td\").mouseover(function(){
		if(closetimer) {
			window.clearTimeout(closetimer);
			closetimer = null;
		}
	});
		
	$(\"#menujump td\").mouseout(function(){
		closetimer = window.setTimeout(\"$('#menujump').hide();$('#framejump').hide();\", timeout);
	});
	
	$(document.body).click(function(){
		$(\"#menujump\").hide();
		$(\"#framejump\").hide();
	});	";
}

function alertDialog()
{
return	"$(\"#alert\").dialog({
		open: function(event,ui){
			var alertParent = $(\"#alert\").parent(\".ui-dialog\"), aframe = $(\"#aframe\"); 
			w = alertParent.width();
			h = alertParent.height();
			t = alertParent.offset().top;
			l = alertParent.offset().left;
			aframe.css(\"width\",w+6);
			aframe.css(\"height\",h+6);
			aframe.css(\"top\",t + \"px\");		
			aframe.css(\"left\",l + \"px\");	
			aframe.show();
		},
		beforeclose: function(event,ui){
			$(\"#aframe\").hide();
		},
		title: \"Message\",
		draggable: false,
		resizable: false,
		bgiframe: true,
		autoOpen: false,
		modal: true,
		buttons: {
			Ok: function() {
				$(this).dialog(\"close\");
			}
		}
	});";
}

function DBGetTableKeys($table)
{
	global $dal,$wr_is_standalone;
	if(!$wr_is_standalone)
	{
		if($dal->Table($table))
			return $dal->GetDBTableKeys($table);
		return array();
	}
	else
		return array();
}

function colorPickerMouse()
{
return "

function GiveDec(Hex)
{
   if(Hex == \"A\")
	  Value = 10;
   else
   if(Hex == \"B\")
	  Value = 11;
   else
   if(Hex == \"C\")
	  Value = 12;
   else
   if(Hex == \"D\")
	  Value = 13;
   else
   if(Hex == \"E\")
	  Value = 14;
   else
   if(Hex == \"F\")
	  Value = 15;
   else
	  Value = eval(Hex);

   return Value;
}

function GiveHex(Dec)
{
   if(Dec == 10)
	  Value = \"A\";
   else
   if(Dec == 11)
	  Value = \"B\";
   else
   if(Dec == 12)
	  Value = \"C\";
   else
   if(Dec == 13)
	  Value = \"D\";
   else
   if(Dec == 14)
	  Value = \"E\";
   else
   if(Dec == 15)
	  Value = \"F\";
   else
	  Value = \"\" + Dec;

   return Value;
}

function HexToDec(value)
{
   Input = value.toUpperCase();

   a = GiveDec(Input.substring(0, 1));
   b = GiveDec(Input.substring(1, 2));
   c = GiveDec(Input.substring(2, 3));
   d = GiveDec(Input.substring(3, 4));
   e = GiveDec(Input.substring(4, 5));
   f = GiveDec(Input.substring(5, 6));

   x = (a * 16) + b; // Red
   y = (c * 16) + d; // Green
   z = (e * 16) + f; // Blue

	return [x,y,z]
}

function DecToHex(Red, Green, Blue)
{
   a = GiveHex(Math.floor(Red / 16));
   b = GiveHex(Red % 16);
   c = GiveHex(Math.floor(Green / 16));
   d = GiveHex(Green % 16);
   e = GiveHex(Math.floor(Blue / 16));
   f = GiveHex(Blue % 16);

   z = a + b + c + d + e + f;

	return z;
}

function rgbToHex(str)
{
	if(str==undefined)
		return \"\";
	if(str.substr(0,1)==\"#\")
		return str.substr(1);
	str=str.substring(4);
	str=str.replace(\")\",\"\");
	arr = new Array();
	arr=str.split(\",\");
	return DecToHex(arr[0],arr[1],arr[2]);
}

	$(\".ColorPickerDivSample\").css(\"cursor\",\"pointer\");
	
	$(\"#colorPickerVtd td\").each(function(){
        $(this).css(\"border\",\"1px solid \" + $(this).css(\"backgroundColor\"));
    })
		.css(\"cursor\",\"pointer\");
	
	$(\".selector,.ColorPickerDivSample\").click(function(){
	    click_color_event(this);
	});
	
	$(\"#colorPickerVtd\").mouseover(function(){
		if(closetimerpicker) {
			window.clearTimeout(closetimerpicker);
			closetimerpicker = null;
		}
	}).mouseout(function(){
		closetimerpicker = window.setTimeout(function (){
				$('#colorPickerVtd').hide();
				$(\"div.ColorPickerDivSample.active\").css(\"background-color\", $(\"div.ColorPickerDivSample.active\").attr(\"color1\"));
			}, timeoutpicker);
	});
		
	$(\"#colorPickerVtd td\").mouseover(function(){
		if(closetimerpicker) {
			window.clearTimeout(closetimerpicker);
			closetimerpicker = null;
		}
		$(this).css(\"border\", \"1px dotted #fff\");
		$(\"div.ColorPickerDivSample.active\").css(\"background-color\", $(this).css(\"background-color\"));
	});
	
	$(\"#colorPickerVtd td\").mouseout(function(){
		$(this).css(\"border\", \"1px solid \"+$(\"div.ColorPickerDivSample.active\").css(\"background-color\"));
	});	
	
	$(\"#colorPickerVtd td\").click(function(){
		if ( this.id == \"nocolor\" ) {
			$(\"div.ColorPickerDivSample.active\").attr(\"color1\", \"\");
			$(\"div.ColorPickerDivSample.active\").attr(\"color2\", \"\");
		} else {
			bgcol=$(this).css(\"backgroundColor\");
			if(bgcol.substring(0,1)!=\"#\")
				bgcol=rgbToHex(bgcol);
			else
				bgcol=bgcol.substring(1);
			$(\"div.ColorPickerDivSample.active\").attr(\"color1\", bgcol);
			arr = HexToDec(bgcol);
			red = parseInt( arr[0] * 0.85 );
			green = parseInt( arr[1] * 0.85 );
			blue = parseInt( arr[2] * 0.85 );
			hex = DecToHex( red, green, blue );
			$(\"div.ColorPickerDivSample.active\").attr(\"color2\", hex);
		}
		$(\"#colorPickerVtd\").hide();
	});
	
	function click_color_event(th)
	{
		if($(th).css(\"cursor\")==\"pointer\")
	    {
			if(closetimerpicker) {
				window.clearTimeout(closetimerpicker);
				closetimerpicker = null;
		}
		if($(th).attr(\"class\")==\"selector\")
			bc=$(th).parents(\"td:first\").prev(\"td\").find(\"div.ColorPickerDivSample\").css(\"background-color\");
		else
			bc=$(th).parents(\"td:first\").find(\"div.ColorPickerDivSample\").css(\"background-color\");
		
		var activeDiv = $(\"div.ColorPickerDivSample.active\"), colorPicker = $(\"#colorPickerVtd\");
		if(activeDiv.length){
			activeDiv.css(\"background-color\", activeDiv.attr(\"color1\"));
			activeDiv.removeClass(\"active\");
		}
		
		if($(th).attr(\"class\")==\"selector\")
			$(th).parents(\"td:first\").prev(\"td\").find(\"div.ColorPickerDivSample\").addClass(\"active\");
		else
			$(th).parents(\"td:first\").find(\"div.ColorPickerDivSample\").addClass(\"active\");
			
		
		colorPicker.css(\"top\", $(th).offset().top + \"px\");
		colorPicker.css(\"left\", $(th).offset().left + $(th).width() + 3 + \"px\");
		colorPicker.show();
		$(\"td\", colorPicker).each(function(){
			$(this).css(\"border\", \"1px solid \"+$(this).css(\"background-color\"));
			if(bc==$(this).css(\"background-color\"))
				$(this).css(\"border\", \"1px dotted #fff\");
		});
	    }
	}

	";
}

function MoveTdTotal()
{
return "
function total_td_move(th,direct)
{
	tr=$(th).parent().parent().parent();

	if(direct==\"up\")
		tr2=$(tr).prev();
	else
		tr2=$(tr).next();
	// || $(tr2).find(\"td\").eq(3).find(\"input\").get(0).type=='checkbox'
	if(!$(tr2).find(\"td\").eq(3).find(\"input\").get(0) || $(tr2).find(\"td\").eq(3).find(\"input\").get(0).disabled)
		tr2=\"\";		
	if(tr2!=\"\")
	{
		if(direct==\"up\")
			$(tr).insertBefore(tr2);
		else
			$(tr).insertAfter(tr2);
	}
}";
}

/**
 * @param String str
 * @param Connection connection
 * @return String
 */
function PrepareString4DB($str, $connection)
{
	if($connection->dbType != nDATABASE_Oracle)
	{
		return $connection->prepareString($str);
	}

	if( strlen($str) < 4000 )
		return $connection->prepareString($str);
	
	$chunklen = 3900;
	$chunks = floor(strlen($str) / $chunklen);
	if( strlen($str) % $chunklen != 0 )
		$chunks++;
		
	$out = "";
	for($i = 0; $i < $chunks; $i++)
	{
		if(strlen($out))
			$out.="||";
			
		$out.="to_clob(";
		$out.= $connection->prepareString( substr($str, $i*$chunklen, $chunklen) );
		$out.=")";
	}
	return $out;
}

function WRmake_db_value($field,$value,$table="")
{	
	$ret=WRprepare_for_db($field,$value,$table);
	
	if($ret===false)
		return $ret;
	return WRadd_db_quotes($field,$ret,$table);
}

function WRadd_db_quotes($field,$value,$table="")
{
	$connection = getWebreportConnection();
	
	$type = WRGetFieldType($table.".".$field);
	if(IsBinaryType($type))
	{
		return $connection->addSlashesBinary($value);
	}
	if(($value==="" || $value===FALSE) && !IsCharType($type))
		return "null";
	if(NeedQuotes($type))
	{
		if(!IsDateFieldType($type))
			$value=$connection->prepareString($value);
		else
			$value=$connection->addDateQuotes($value);
	}
	else
	{
		$strvalue = (string)$value;
		$strvalue = str_replace(",",".",$strvalue);
		if(is_numeric($strvalue))
			$value=$strvalue;
		else
			$value=0;
	}
	return $value;
}

function WRprepare_for_db($field,$value,$table="")
{
	$type=WRGetFieldType($table.".".$field);
	if(is_array($value))
		$value=combinevalues($value);
	if(($value==="" || $value===FALSE) && !IsCharType($type))
		return "";
	if(IsDateFieldType($type))
		$value=localdatetime2db($value);
	return $value;
}

function DBGetTablesList()
{
	global $dal;
	$tables = WRGetTablesList();
	$ret=array();

	foreach($tables as $value)
	{
		$val_lower=wr_getTableName(strtolower($value));
		if(substr($val_lower,-6)!="_audit" && substr($val_lower,-8)!="_locking" && substr($val_lower,-9)!="_ugrights" && substr($val_lower,-9)!="_uggroups" 
		&& substr($val_lower,-10)!="_ugmembers" && $val_lower!="admin_rights" && $val_lower!="admin_users" 
		&& $val_lower!="admin_members" && $val_lower!="webreports" && $val_lower!="webreport_style" 
		&& $val_lower!="webreport_admin" && $val_lower!="webreport_settings" && $val_lower!="webreport_sql")
			$ret[]=$value;
	}
	return $ret;
}

function WRGetTableListAdmin($db_type)
{
	$connection = getWebreportConnection();// #9875
	
	$ret = array();
	$sql = "select ".$connection->addFieldWrappers("tablename").",".$connection->addFieldWrappers("group_name")
		." from ".$connection->addTableWrappers("webreport_admin")." where ".$connection->addFieldWrappers("db_type")."='".$db_type."'" ;
		
	$qResult = $connection->query( $sql );
	while( $data = $qResult->fetchNumeric() )
	{
		$ret[] = array("tablename" => $data[0], "group" => $data[1]);	
	}
	return $ret;
}

function GetTablesListReport()
{
	$arr=array();
	$securityFlag = true;
	if($securityFlag)
	{
		$value="Delitos especificos";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="Delitos especificos";
	}
	if($securityFlag)
	{
		$value="carcel1";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="carcel1";
	}
	if($securityFlag)
	{
		$value="class_lugarespecifico";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="class_lugarespecifico";
	}
	if($securityFlag)
	{
		$value="sectorppdf";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="sectorppdf";
	}
	if($securityFlag)
	{
		$value="tipo_mara";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="tipo_mara";
	}
	if($securityFlag)
	{
		$value="carcel_CAMBIOS";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="carcel_CAMBIOS";
	}
	if($securityFlag)
	{
		$value="clasificacion";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="clasificacion";
	}
	if($securityFlag)
	{
		$value="Espacios abiertos";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="Espacios abiertos";
	}
	if($securityFlag)
	{
		$value="hechosdelictivos";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="hechosdelictivos";
	}
	if($securityFlag)
	{
		$value="hechosdelictivos_lugaresp";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="hechosdelictivos_lugaresp";
	}
	if($securityFlag)
	{
		$value="Todos los datos PPL";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="Todos los datos PPL";
	}
	if($securityFlag)
	{
		$value="homicidios_sv_2016";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="homicidios_sv_2016";
	}
	if($securityFlag)
	{
		$value="Transito class Rango Etario";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="Transito class Rango Etario";
	}
	if($securityFlag)
	{
		$value="PPL delitos_clasificacion";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="PPL delitos_clasificacion";
	}
	if($securityFlag)
	{
		$value="Carcel_hurto_mercaderia";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="Carcel_hurto_mercaderia";
	}
	if($securityFlag)
	{
		$value="PPL_educacion";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="PPL_educacion";
	}
	if($securityFlag)
	{
		$value="hechos_delictivos_class delitos";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="hechos_delictivos_class delitos";
	}
	if($securityFlag)
	{
		$value="tipo organizacion delictiva";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="tipo organizacion delictiva";
	}
	if($securityFlag)
	{
		$value="carcel visualizacion todos";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="carcel visualizacion todos";
	}
	if($securityFlag)
	{
		$value="Grupos etarios por estado civil (masculino)";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="Grupos etarios por estado civil (masculino)";
	}
	if($securityFlag)
	{
		$value="hechos_delictivos1";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="hechos_delictivos1";
	}
	if($securityFlag)
	{
		$value="carcel prueba santa tecla";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="carcel prueba santa tecla";
	}
	if($securityFlag)
	{
		$value="carcel_clasificacion lugar";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="carcel_clasificacion lugar";
	}
	if($securityFlag)
	{
		$value="mes_corregido";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="mes_corregido";
	}
	if($securityFlag)
	{
		$value="hechos_delictivos11";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="hechos_delictivos11";
	}
	if($securityFlag)
	{
		$value="BD Carcel";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="BD Carcel";
	}
	if($securityFlag)
	{
		$value="DB PNC";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="DB PNC";
	}
	if($securityFlag)
	{
		$value="Hechosdelictivos movil class";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="Hechosdelictivos movil class";
	}
	if($securityFlag)
	{
		$value="hechosdelictivos_tipo_arma";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="hechosdelictivos_tipo_arma";
	}
	if($securityFlag)
	{
		$value="Hechosdelictivos ocupacion class";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="Hechosdelictivos ocupacion class";
	}
	if($securityFlag)
	{
		$value="hechosdelictivos_relacion_vict_agresor";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="hechosdelictivos_relacion_vict_agresor";
	}
	if($securityFlag)
	{
		$value="hechosdelictivos_lugar_del_hecho";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="hechosdelictivos_lugar_del_hecho";
	}
	if($securityFlag)
	{
		$value="pnc911";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="pnc911";
	}
	if($securityFlag)
	{
		$value="pnc9111 class delito";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="pnc9111 class delito";
	}
	if($securityFlag)
	{
		$value="pnc9111";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="pnc9111";
	}
	if($securityFlag)
	{
		$value="horas_completar";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="horas_completar";
	}
	if($securityFlag)
	{
		$value="hora_sustituir";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="hora_sustituir";
	}
	if($securityFlag)
	{
		$value="hechos_delictivos";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="hechos_delictivos";
	}
	if($securityFlag)
	{
		$value="hechosdelictivos2";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="hechosdelictivos2";
	}
	if($securityFlag)
	{
		$value="retornados";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="retornados";
	}
	if($securityFlag)
	{
		$value="Retornados, clasificacion rango etario";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="Retornados, clasificacion rango etario";
	}
	if($securityFlag)
	{
		$value="mes corregido retornado";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="mes corregido retornado";
	}
	if($securityFlag)
	{
		$value="transito";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="transito";
	}
	if($securityFlag)
	{
		$value="Transito class causas";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="Transito class causas";
	}
	if($securityFlag)
	{
		$value="transito1";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="transito1";
	}
	if($securityFlag)
	{
		$value="Transito class tipo vehículo";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="Transito class tipo vehículo";
	}
	if($securityFlag)
	{
		$value="Transito extraer mes";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="Transito extraer mes";
	}
	if($securityFlag)
	{
		$value="Transito prueba datos";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="Transito prueba datos";
	}
	if($securityFlag)
	{
		$value="empalme tablas";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="empalme tablas";
	}
	if($securityFlag)
	{
		$value="hechos_delictivos12";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="hechos_delictivos12";
	}
	if($securityFlag)
	{
		$value="Municipios";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="Municipios";
	}
	if($securityFlag)
	{
		$value="Transito arreglar guiones";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="Transito arreglar guiones";
	}
	if($securityFlag)
	{
		$value="sectorppd1";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="sectorppd1";
	}
	if($securityFlag)
	{
		$value="Sector PPD 24";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="Sector PPD 24";
	}
	if($securityFlag)
	{
		$value="Hechosdelictivos_rango etario";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="Hechosdelictivos_rango etario";
	}
	if($securityFlag)
	{
		$value="pnc9112 PRUEBA";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="pnc9112 PRUEBA";
	}
	if($securityFlag)
	{
		$value="enlazando sector";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="enlazando sector";
	}
	if($securityFlag)
	{
		$value="reemplazar sectores";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="reemplazar sectores";
	}
	if($securityFlag)
	{
		$value="hechos_delictivos_VISTA";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="hechos_delictivos_VISTA";
	}
	if($securityFlag)
	{
		$value="reemplazar sectores PPL";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="reemplazar sectores PPL";
	}
	if($securityFlag)
	{
		$value="anexar_carcel";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="anexar_carcel";
	}
	if($securityFlag)
	{
		$value="anexar_carcel1";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="anexar_carcel1";
	}
	if($securityFlag)
	{
		$value="SUPRIMIR REGISTROS ANEXO CARCEL";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="SUPRIMIR REGISTROS ANEXO CARCEL";
	}
	if($securityFlag)
	{
		$value="reemplazar_sectores_hechosdelictivos";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="reemplazar_sectores_hechosdelictivos";
	}
	if($securityFlag)
	{
		$value="mined";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="mined";
	}
	if($securityFlag)
	{
		$value="mined1";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="mined1";
	}
	if($securityFlag)
	{
		$value="mined2";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="mined2";
	}
	if($securityFlag)
	{
		$value="mined21";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="mined21";
	}
	if($securityFlag)
	{
		$value="MINED INDICE";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="MINED INDICE";
	}
	if($securityFlag)
	{
		$value="mined11";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="mined11";
	}
	if($securityFlag)
	{
		$value="calcular indice MINED";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="calcular indice MINED";
	}
	if($securityFlag)
	{
		$value="calcular indice MINED2";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="calcular indice MINED2";
	}
	if($securityFlag)
	{
		$value="Maxima Matricula Mined";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="Maxima Matricula Mined";
	}
	if($securityFlag)
	{
		$value="Matricula Relativa Final";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="Matricula Relativa Final";
	}
	if($securityFlag)
	{
		$value="IPCE_NAIVE";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="IPCE_NAIVE";
	}
	if($securityFlag)
	{
		$value="IPCE_FINAL";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="IPCE_FINAL";
	}
	if($securityFlag)
	{
		$value="Mined_Maximo IPCE";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="Mined_Maximo IPCE";
	}
	if($securityFlag)
	{
		$value="mined maximo valor";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="mined maximo valor";
	}
	if($securityFlag)
	{
		$value="BD Mined";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="BD Mined";
	}
	if($securityFlag)
	{
		$value="mined3";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="mined3";
	}
	if($securityFlag)
	{
		$value="valor maximo mined 2";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="valor maximo mined 2";
	}
	if($securityFlag)
	{
		$value="BD SECTORES";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="BD SECTORES";
	}
	if($securityFlag)
	{
		$value="Anexar Sector a PPL";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="Anexar Sector a PPL";
	}
	if($securityFlag)
	{
		$value="mined4";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="mined4";
	}
	if($securityFlag)
	{
		$value="anexar_carcel2";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="anexar_carcel2";
	}
	if($securityFlag)
	{
		$value="anexar_carcel3";
		if(substr($value,-6)!="_audit" && substr($value,-8)!="_locking" && substr($value,-9)!="_ugrights" && substr($value,-9)!="_uggroups" 
		&& substr($value,-10)!="_ugmembers" && $value!="admin_rights" && $value!="admin_users"
		&& $value!="admin_members" && $value!="webreports" && $value!="webreport_style" && $value!="webreport_settings" && $value!="webreport_admin" && $value!="webreport_sql")
			$arr[]="anexar_carcel3";
	}
	return $arr;
}

function GetTablesListCustom()
{
	$connection = getWebreportConnection();// #9875
	$arr = array();
	
	$qResult = $connection->query( "select * from ".$connection->addTableWrappers("webreport_sql")." order by ".$connection->addFieldWrappers("sqlname") );
	while( $data = $qResult->fetchAssoc() )
	{	
		$arr[] = array("sqlname" => $data["sqlname"], "isStorProc" => IsStoredProcedure($data["sqlcontent"]));
	}
	return $arr;
}

function DBGetTablesListByGroup($db="db")
{
	if($db=="db")
		$tables = DBGetTablesList();
	elseif($db=="project")
		$tables = GetTablesListReport();
	else
		$tables = GetTablesListCustom();
	$ret=array();
	if($db=="db")
		$tables_admin = WRGetTableListAdmin("db");
	elseif($db=="project")
		$tables_admin = WRGetTableListAdmin("project");
	else
		$tables_admin = WRGetTableListAdmin("custom");

	$userGroups = GetUserGroup();

//	all tables
	foreach($tables as $table_name)
	{
		if($db=="custom")
			$tablename=$table_name["sqlname"];
		else
			$tablename=$table_name;
//	permissions
		foreach($tables_admin as $tablerights)
		{
			if($tablerights["tablename"]!=$tablename)
				continue;
//	user groups
			$found=false;
			if(!count($userGroups))
			{
//	no groups at all
				$found=true;
			}
			elseif($tablerights["group"]=="")
			{
//	initial table initialization
				$found=true;
			}
			else
			{
				foreach($userGroups as $group)
				{
					if((string)$group == $tablerights["group"])
					{
						$found=true;
						break;
					}
				}
			}
			if($found)
			{
				$ret[]=$table_name;
				break;
			}
		}
	}
	return $ret;
}

function isWRAdmin()
{
	return @$_SESSION["WRAdmin"];
}

function sortUserGroup($a,$b)
{
	if($a[1]<$b[1])
		return -1;
	else
		return 1;
}

function Convert_Old_Chart($arr)
{
	switch($arr["chart_type"]["type"])
	{
		case "3d_column":
			$arr["chart_type"]["type"]="2d_column";
			$arr["appearance"]["is3d"]="true";
			$arr["appearance"]["isstacked"]="false";
			break;
		case "3d_bar":
			$arr["chart_type"]["type"]="2d_bar";
			$arr["appearance"]["is3d"]="true";
			$arr["appearance"]["isstacked"]="false";
			break;
		case "3d_column_stacked":
			$arr["chart_type"]["type"]="2d_column";
			$arr["appearance"]["is3d"]="true";
			$arr["appearance"]["isstacked"]="true";
			break;
		case "3d_bar_stacked":
			$arr["chart_type"]["type"]="2d_bar";
			$arr["appearance"]["is3d"]="true";
			$arr["appearance"]["isstacked"]="true";
			break;
		case "2d_column_stacked":
			$arr["chart_type"]["type"]="2d_column";
			$arr["appearance"]["isstacked"]="true";
			$arr["appearance"]["is3d"]="false";
			break;
		case "2d_column":
			$arr["chart_type"]["type"]="2d_column";
			if(!isset($arr["appearance"]["isstacked"]))
				$arr["appearance"]["isstacked"]="false";
			if(!isset($arr["appearance"]["is3d"]))
				$arr["appearance"]["is3d"]="false";
			break;
		case "2d_bar_stacked":
			$arr["chart_type"]["type"]="2d_bar";
			$arr["appearance"]["isstacked"]="true";
			$arr["appearance"]["is3d"]="false";
			break;
		case "2d_bar":
			$arr["chart_type"]["type"]="2d_bar";
			if(!isset($arr["appearance"]["isstacked"]))
				$arr["appearance"]["isstacked"]="false";
			if(!isset($arr["appearance"]["is3d"]))
				$arr["appearance"]["is3d"]="false";
			break;
		case "line":
			$arr["chart_type"]["type"]="line";
			if(!isset($arr["appearance"]["linestyle"]))
				$arr["appearance"]["linestyle"]=0;
			break;
		case "spline":
			$arr["chart_type"]["type"]="line";
			$arr["appearance"]["linestyle"]=1;
			break;
		case "step_line":
			$arr["chart_type"]["type"]="line";
			$arr["appearance"]["linestyle"]=2;
			break;
		case "area_stacked":
			$arr["chart_type"]["type"]="area";
			$arr["appearance"]["isstacked"]="true";
			break;
	}
	if(!isset($arr['appearance']["cscroll"]))
	{
		$arr['appearance']["cscroll"]="true";
		$arr['appearance']["autoupdate"]="false";
		$arr['appearance']["maxbarscroll"]="10";
		$arr['appearance']["update_interval"]="5";
	}

	for($i=0;$i<4;$i++)
	{
		if(isset($arr['appearance']['color'.($i+1).'1']))
			$arr['parameters'][$i]['series_color']=$arr['appearance']['color'.($i+1).'1'];
	}
	return $arr;
}

function WRGetListCustomSQL()
{
	$connection = getWebreportConnection();// #9875
	
	$arr = array();

	$qResult = $connection->query( "select * from ".$connection->addTableWrappers("webreport_sql")." order by ".$connection->addFieldWrappers("sqlname") );
	while( $data = $qResult->fetchAssoc() ) 
	{
		$arr[] = array("id" => $data["id"], "sqlname" => $data["sqlname"], "sqlcontent" => $data["sqlcontent"]);
	}
	return $arr;
}

function WRgetCurrentCustomSQL($id)
{	
	if( !$id )
		return array(0, "", "");

	$connection = getWebreportConnection();	// #9875	
	
	$sql = "select * from ".$connection->addTableWrappers("webreport_sql")." where ".$connection->addFieldWrappers("id")."=".$id;
	$data = $connection->query( $sql )->fetchAssoc();
	if( count($data) ) 
		return array($data["id"], $data["sqlname"], $data["sqlcontent"]);
	
	return "";
}

function getCustomSQLbyName($sqlname)
{
	$connection = getWebreportConnection();// #9875

	$sql = "select * from ".$connection->addTableWrappers("webreport_sql")." where ".$connection->addFieldWrappers("sqlname")."='".$sqlname."'";
	$data = $connection->query( $sql )->fetchAssoc();
	if( count($data) ) 
		return array($data["id"], $data["sqlname"], $data["sqlcontent"]);
	
	return "";
}

function update_report_totals()
{
	$root=&$_SESSION["webreports"];
//	ensure all fields in reports are listed in the tables	
	$tables=getReportTablesList();
	if(is_wr_custom())
		$fields = WRGetFieldsList('');
	$arr_unset=array();
	foreach($root["totals"] as $idx=>$fld)
	{
		if(array_search($fld["table"],$tables)!==false || is_null($fld["table"]) && is_wr_custom())
		{
			if(!is_wr_custom())
				$fields = WRGetFieldsList($fld["table"]);
			if(array_search($fld["name"], $fields)!==false)
				continue;
		}
//	remove $total if found
		$arr_unset[]=$idx;
	}
	foreach($arr_unset as $idx=>$fld)
	{
		unset($root["totals"][$fld]);
	}
	
//	ensure all fields appear in the totals
	$all_fields=array();
	foreach($tables as $t)
	{
		$fields=WRGetFieldsList($t);
		foreach($fields as $f)
		{
			if(is_wr_db())
				$all_fields[]=$t.".".$f;
			else
				$all_fields[]=$f;
		}
	}
	
//	ensure all series  fields appear in the totals
	foreach($all_fields as $fieldItem)
	{
		$f = $fieldItem;
		$table="";
		$fld="";
		if(is_wr_db())
			WRSplitFieldName($f,$table,$fld);
		else
		{
			$table=$tables[0];
			$fld=$f;
			$f=$table."_".$f;
		}
		if(array_key_exists(GoodFieldName($f),$root["totals"]))
			continue;
		$pSet = new ProjectSettings($table, PAGE_LIST);
        $root['totals'][GoodFieldName($f)] = array();
        $root['totals'][GoodFieldName($f)]["name"] = $fld;
        $root['totals'][GoodFieldName($f)]["table"] = $table;
		$root['totals'][GoodFieldName($f)]["label"] = $pSet->label($fld);
        $root['totals'][GoodFieldName($f)]["show"] = "true";
        $root['totals'][GoodFieldName($f)]["min"] = "false";
        $root['totals'][GoodFieldName($f)]["max"] = "false";
        $root['totals'][GoodFieldName($f)]["sum"] = "false";
        $root['totals'][GoodFieldName($f)]["avg"] = "false";
		$root['totals'][GoodFieldName($f)]["curr"] = "false";
        $root['totals'][GoodFieldName($f)]["search"] = "";
        $root['totals'][GoodFieldName($f)]["view_format"] = GetGenericViewFormat($table, $fld);
        $root['totals'][GoodFieldName($f)]["edit_format"] = GetGenericEditFormat($table, $fld);
        $root['totals'][GoodFieldName($f)]["display_field"] = $pSet->getDisplayField($fld);
        $root['totals'][GoodFieldName($f)]["linkfield"] = $pSet->getLinkField($fld);
        $root['totals'][GoodFieldName($f)]["show_thumbnail"] = $pSet->showThumbnail($fld);
        $root['totals'][GoodFieldName($f)]["need_encode"] = $pSet->NeedEncode($fld);
        $root['totals'][GoodFieldName($f)]["thumbnail"] = $pSet->getStrThumbnail($fld);
        $root['totals'][GoodFieldName($f)]["listformatobj_imgwidth"] = $pSet->getImageWidth($fld);
        $root['totals'][GoodFieldName($f)]["listformatobj_imgheight"] = $pSet->getImageHeight($fld);
        $root['totals'][GoodFieldName($f)]["hlprefix"] = $pSet->getLinkPrefix($fld);
        $root['totals'][GoodFieldName($f)]["listformatobj_filename"] = $pSet->getFilenameField($fld);
        $root['totals'][GoodFieldName($f)]["lookupobj_lookuptype"] = $pSet->getLookupType($fld);
        $root['totals'][GoodFieldName($f)]["editformatobj_lookupobj_customdispaly"] = $pSet->getDisplayField($fld);
        $root['totals'][GoodFieldName($f)]["editformatobj_lookupobj_table"] = $pSet->getLookupTable($fld);
        $root['totals'][GoodFieldName($f)]["editformatobj_lookupobj_where"] = GetLWWhere($fld,PAGE_REPORT);
	}
	$_SESSION["webreports"]=$root;
}

function Reload_Report($name)
{
	if(!$name)
	{
		if(isset($_SESSION['webreports']))
			return true;
		else
			HeaderRedirect("webreport");
	}
	if(postvalue("edit")=="style" && isset($_SESSION['webreports']))
		return true;
	$arr=getReportArray($name);
	if(!count($arr))
		HeaderRedirect("webreport");
	if(!$arr["table_type"])
		if($arr["db_based"])
			$arr["table_type"]="db";
		else
			$arr["table_type"]="project";
	$_SESSION['webreports'] = $arr;
	$_SESSION["webobject"]["table_type"]=$_SESSION['webreports']["table_type"];
	$_SESSION["webobject"]["name"]=$_SESSION['webreports']['settings']['name'];
}

function Reload_Chart($name)
{
	if(!$name)
	{
		if(isset($_SESSION['webcharts']))
			return true;
		else
			HeaderRedirect("webreport");
	}
	$arr=getChartArray($name);
	if(!count($arr))
		HeaderRedirect("webreport");
	if(!$arr["table_type"])
		if($arr["db_based"])
			$arr["table_type"]="db";
		else
			$arr["table_type"]="project";
	$_SESSION['webcharts'] = $arr;
	$_SESSION["webobject"]["table_type"]=$_SESSION['webcharts']["table_type"];
	$_SESSION["webobject"]["name"]=$_SESSION['webcharts']['settings']['name'];
}

function wr_getTableName($name)
{
	$pos = strrpos($name,".");
	if($pos !== false)
		$name = substr($name, $pos+1);
	return $name;
}

/**
 * Get the conneciton object corresponding to the wizard werbreport tables
 * @return Connetion
 */
function getWebreportConnection()
{
	global $cman;
	return $cman->getForWebReports();
}

/**
 * @param xTempl xt
 * @param String prefix
 */
function SetWRLangVars($xt, $prefix)
{
	$xt->assign("lang_label", true);
	if( @$_REQUEST["language"] )
		$_SESSION["language"] = @$_REQUEST["language"];

	$var = GoodFieldName( mlang_getcurrentlang() )."_langattrs";
	$xt->assign($var, "selected");
	
	$is508 = isEnableSection508();
	if($is508)
		$xt->assign_section("lang_label","<label for=\"lang\">","</label>");

	$xt->assign("langselector_attrs","name=lang ".($is508==true ? "id=\"lang\" " : "")
		."onchange=\"javascript: window.location='".GetTableLink($prefix)."?language='+this.options[this.selectedIndex].value\"");
}
?>