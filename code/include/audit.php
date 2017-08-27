<?php
class AuditTrailTable
{
	var $logTableName="";
	var $params;
	
	var $strLogin="login";
	var $strFailLogin="failed login";
	var $strLogout="logout";
	var $strChPass="change password";
	var $strAdd="add";
	var $strEdit="edit";
	var $strDelete="delete";
	var $strAccess="access";
	var $strKeysHeader="---Keys";
	var $strFieldsHeader="---Fields";
	var $columnDate="Date";
	var $columnTime="Time";
	var $columnIP="IP";
	var $columnUser="User";
	var $columnTable="Table";
	var $columnAction="Action";
	var $columnKey="Key field";
	var $columnField="Field";
	var $columnOldValue="Old value";
	var $columnNewValue="New value";
	var $attLogin=0;
	var $timeLogin=0;
	var $maxFieldLength = 300;

	/**
	 * @type Connection
	 */
	protected $connection;
	
	function __construct()
	{
		global $cman;
		
		$this->connection = $cman->getForAudit();		
		$userid="";
		if(@$_SESSION["UserID"])
			$userid=$_SESSION["UserID"];
			
		$this->params=array($_SERVER["REMOTE_ADDR"],$userid);
	}
	
    function LogLogin($pUsername)
    {
    }
	
    function LogLoginFailed($pUsername)
    {
    }
	
    function LogLogout()
    {
    }
	
    function LogChPassword()
    {
    }
	
    function LogAdd($str_table,$values,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strAdd, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			$str="";
			if(count($keys)>0)
			{
				$str.=$this->strKeysHeader."\r\n";
				foreach($keys as $idx=>$val)
					$str.=$idx." : ".$val."\r\n";
			}
			$strFields="";
			if($this->logValueEnable($str_table))
			{
				foreach($values as $idx=>$val)
				{
					if($val!="" && !array_key_exists($idx,$keys))
					{
						$strFields.=$idx." [new]: ";
						if(IsBinaryType($pSet->getFieldType($idx)))
							$v="<binary value>";
						else
						{
							$v=str_replace(array("\r\n","\n","\t")," ",$val);
							if(strlen($v)>$this->maxFieldLength)
								$v=runner_substr($val,0,$this->maxFieldLength);
						}
						$strFields.=$v."\r\n";
					}
				}
			}
			if($strFields!="")
				$str.=$this->strFieldsHeader."\r\n".$strFields;
			
			$this->insert(now(), $this->params[0], $this->params[1], $str_table, $this->strAdd, $str);
		}
		return $retval;
    }
	
    function LogEdit($str_table,$newvalues,$oldvalues,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strEdit, $this->params, $table, $keys, $newvalues, $oldvalues);
		if($retval)
		{
			$str="";
			if(count($keys)>0)
			{
				$str.=$this->strKeysHeader."\r\n";
				foreach($newvalues as $idx=>$val)
				{
					if(array_key_exists($idx,$keys))
					{
						if($val!=$oldvalues[$idx])
						{
							$str.=$idx." [old]: ".$oldvalues[$idx]."\r\n";
							$str.=$idx." [new]: ".$val."\r\n";
						}
						else
							$str.=$idx." : ".$val."\r\n";
					}
				}
			}
			$strFields="";
			if($this->logValueEnable($str_table))
			{
				$v="";
				foreach($newvalues as $idx=>$val)
				{
					$type=$pSet->getFieldType($idx);
					if(IsBinaryType($type))
						continue;
					if(IsDateFieldType($type))
					{
						$newvalue=format_datetime_custom(db2time($newvalues[$idx]),"yyyy-MM-dd HH:mm:ss");
						$oldvalue=format_datetime_custom(db2time($oldvalues[$idx]),"yyyy-MM-dd HH:mm:ss");
					}
					else
					{
						$newvalue=$newvalues[$idx];
						$oldvalue=$oldvalues[$idx];
					}
					if($newvalue!=$oldvalue && !array_key_exists($idx,$keys))
					{
						$strFields.=$idx." [old]: ";
						if(IsBinaryType($type))
							$v="<binary value>";
						else
						{
							$v=str_replace(array("\r\n","\n","\t")," ",$oldvalue);
							if(strlen($v)>$this->maxFieldLength)
								$v=runner_substr($v,0,$this->maxFieldLength);
						}
						$strFields.=$v."\r\n";
												
						$strFields.=$idx." [new]: ";
						if(IsBinaryType($type))
							$v="<binary value>";
						else
						{
							$v=str_replace(array("\r\n","\n","\t")," ",$newvalue);
							if(strlen($v)>$this->maxFieldLength)
								$v=runner_substr($v,0,$this->maxFieldLength);
						}
						$strFields.=$v."\r\n";
					}
				}
				$v="";
			}
			if($strFields!="")
				$str.=$this->strFieldsHeader."\r\n".$strFields;
			
			$this->insert(now(), $this->params[0], $this->params[1], $str_table, $this->strEdit, $str);
		}
		return $retval;
    }
	
    function LogDelete($str_table,$values,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strDelete, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			$str="";
			if(count($keys)>0)
			{
				$str.=$this->strKeysHeader."\r\n";
				foreach($keys as $idx=>$val)
					$str.=$idx." : ".$val."\r\n";
			}
			$strFields="";
			if($this->logValueEnable($str_table))
			{
				$v="";
				foreach($values as $idx=>$val)
				{
					if($val!="" && !array_key_exists($idx,$keys))
					{
						$strFields.=$idx." [old]: ";
						if(IsBinaryType($pSet->getFieldType($idx)))
							$v="<binary value>";
						else
						{	
							$v=str_replace(array("\r\n","\n","\t")," ",$val);
							if(strlen($v)>$this->maxFieldLength)
								$v=runner_substr($v,0,$this->maxFieldLength);
						}
						$strFields.=$v."\r\n";
					}
				}
			}
			if($strFields!="")
				$str.=$this->strFieldsHeader."\r\n".$strFields;
			
			$this->insert(now(), $this->params[0], $this->params[1], $str_table, $this->strDelete, $str);
		}
		return $retval;
    }
    
    function LogAddEvent($message,$description="",$stable="")
    {
		global $globalEvents;
		$retval=true;
		$table=$stable;
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($message, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			$this->insert(now(), $this->params[0], $this->params[1], $stable, $message, $description);
		}
		return $retval;
    }
	
    function LoginSuccessful()
    {
		if($this->attLogin>0 && $this->timeLogin>0)
		{
			$where = $this->connection->addFieldWrappers("ip"). "=" .$this->connection->prepareString($_SERVER["REMOTE_ADDR"]). 
				" AND " .$this->connection->addFieldWrappers("action"). "=" .$this->connection->prepareString($this->strAccess);
			$sql = "DELETE FROM " .$this->connection->addTableWrappers( $this->logTableName ). " WHERE " .$where;
			
			$this->connection->exec( $sql );
		}
		
    }
	
    function LoginUnsuccessful($pUsername)
    {
		if($this->attLogin>0 && $this->timeLogin>0)
		{
			$this->insert(now(), $_SERVER["REMOTE_ADDR"], $pUsername, "", $this->strAccess, "");
		}
    }
    
	function LoginAccess()
	{
		if( $this->attLogin > 0 && $this->timeLogin > 0 )
		{
			$where = $this->connection->addFieldWrappers("ip"). "=" .$this->connection->prepareString($_SERVER["REMOTE_ADDR"]). 
				" AND " .$this->connection->addFieldWrappers("action"). "=".$this->connection->prepareString("access");
			$orderBy = $this->connection->addFieldWrappers("id")." asc";
			$sql = "SELECT * FROM " .$this->connection->addTableWrappers( $this->logTableName ). " WHERE " .$where. " ORDER BY " .$orderBy;
			
			$qResult = $this->connection->query( $sql );
			
			$i = 0;
			while( $data = $qResult->fetchAssoc() )
			{
				if( secondsPassedFrom($data["datetime"]) / 60 <= $this->timeLogin )
				{
					if($i==0)
						$firstAccess=$data["datetime"];
					$i+=1;
				}
			}
			
			if( $i >= $this->attLogin )
				return ceil($this->timeLogin-secondsPassedFrom($firstAccess) / 60);
		}

		return false;
	}
	
	function logValueEnable($table)
	{
		if($table=="Delitos especificos")
		{
			return false;
		}
		if($table=="carcel1")
		{
			return false;
		}
		if($table=="class_lugarespecifico")
		{
			return false;
		}
		if($table=="sectorppdf")
		{
			return false;
		}
		if($table=="tipo_mara")
		{
			return false;
		}
		if($table=="carcel_CAMBIOS")
		{
			return false;
		}
		if($table=="clasificacion")
		{
			return false;
		}
		if($table=="Espacios abiertos")
		{
			return false;
		}
		if($table=="hechosdelictivos")
		{
			return false;
		}
		if($table=="hechosdelictivos_lugaresp")
		{
			return false;
		}
		if($table=="Todos los datos PPL")
		{
			return false;
		}
		if($table=="PPL pertenecientes a Pandilla")
		{
			return false;
		}
		if($table=="Sector PPD")
		{
			return false;
		}
		if($table=="Homicidios tentados por rango etarios, según sexo victima")
		{
			return false;
		}
		if($table=="Hurtos por rango etarios, según sexo victima")
		{
			return false;
		}
		if($table=="Hurtos de vehículo por rango etarios, según sexo victima")
		{
			return false;
		}
		if($table=="Lesiones por rango etarios etarios, según sexo victima")
		{
			return false;
		}
		if($table=="Robos por rango etario, según sexo victima")
		{
			return false;
		}
		if($table=="Robo de vehículo por rango etario, según sexo victima")
		{
			return false;
		}
		if($table=="Robo y hurto de vehículo con mercaderia por rango etario, según sexo victima")
		{
			return false;
		}
		if($table=="Personas privadas de libertad por Sectores Estandarizados según género")
		{
			return false;
		}
		if($table=="Delitos por área")
		{
			return false;
		}
		if($table=="Personas privadas de libertad por rango etario según género")
		{
			return false;
		}
		if($table=="Personas privadas de libertad por rango etario, segun nivel educativo y genero Femenino")
		{
			return false;
		}
		if($table=="Personas privadas de libertad por rango etario, segun nivel educativo y genero Masculino")
		{
			return false;
		}
		if($table=="Personas privadas de libertad  segun Sector Estandarizado y pertenecientes a pandillas")
		{
			return false;
		}
		if($table=="Delitos por lugar del hecho")
		{
			return false;
		}
		if($table=="Delitos por Móvil")
		{
			return false;
		}
		if($table=="Conteo de delitos por sector estandarizado según Movil")
		{
			return false;
		}
		if($table=="Delitos por tipo de arma")
		{
			return false;
		}
		if($table=="Ocupación de la víctima por Delitos")
		{
			return false;
		}
		if($table=="Amenazas, por rango etarios, según sexo victima")
		{
			return false;
		}
		if($table=="Delitos Sexuales  por rango etarios, según sexo victima")
		{
			return false;
		}
		if($table=="Homicidios por rango etarios, según sexo")
		{
			return false;
		}
		if($table=="Delitos por sector Estandarizado")
		{
			return false;
		}
		if($table=="Delitos por rango de horas")
		{
			return false;
		}
		if($table=="Conteo de delitos, por Sector Estandarizado según Movil")
		{
			return false;
		}
		if($table=="Delitos por mes del hecho")
		{
			return false;
		}
		if($table=="homicidios_sv_2016")
		{
			return false;
		}
		if($table=="homicidios_sv_2016 Report")
		{
			return false;
		}
		if($table=="homicidios_sv_2016 Report1")
		{
			return false;
		}
		if($table=="Muertes PNC enfrentamientos")
		{
			return false;
		}
		if($table=="homicidios_municipio")
		{
			return false;
		}
		if($table=="Municipios con porcentaje de enfrentamiento")
		{
			return false;
		}
		if($table=="PPL pertenecientes a pandillas por municipio")
		{
			return false;
		}
		if($table=="PPL delitos")
		{
			return false;
		}
		if($table=="Transito class Rango Etario")
		{
			return false;
		}
		if($table=="PPL delitos_clasificacion")
		{
			return false;
		}
		if($table=="Carcel_hurto_mercaderia")
		{
			return false;
		}
		if($table=="PPL_educacion")
		{
			return false;
		}
		if($table=="Personas Privadas de Libertad")
		{
			return false;
		}
		if($table=="hechos_delictivos_class delitos")
		{
			return false;
		}
		if($table=="Sector PPD por pandilla de afiliacion (prueba)")
		{
			return false;
		}
		if($table=="tipo organizacion delictiva")
		{
			return false;
		}
		if($table=="carcel visualizacion todos")
		{
			return false;
		}
		if($table=="Grupos etarios por estado civil (masculino)")
		{
			return false;
		}
		if($table=="Grupo etarios por estado civil (masculino)")
		{
			return false;
		}
		if($table=="Grupo etarios por estado civil (femenino)")
		{
			return false;
		}
		if($table=="PPL Grupos etarios por afiliación a Pandillas")
		{
			return false;
		}
		if($table=="PPL Grupos etarios por afiliación a Pandillas femenino")
		{
			return false;
		}
		if($table=="PPL grupos etarios por Deportado masculino")
		{
			return false;
		}
		if($table=="PPL grupos etarios por Deportado Femenino")
		{
			return false;
		}
		if($table=="PPL grupos etarios delito genero masculino")
		{
			return false;
		}
		if($table=="hechos_delictivos1")
		{
			return false;
		}
		if($table=="PPL Grupos etarios por delitos masculino")
		{
			return false;
		}
		if($table=="PPL Grupos etarios por delitos femenino")
		{
			return false;
		}
		if($table=="DELITOS PNC")
		{
			return false;
		}
		if($table=="carcel prueba santa tecla")
		{
			return false;
		}
		if($table=="carcel_clasificacion lugar")
		{
			return false;
		}
		if($table=="mes_corregido")
		{
			return false;
		}
		if($table=="Hechos delictivos dia del hecho")
		{
			return false;
		}
		if($table=="hechos_delictivos11")
		{
			return false;
		}
		if($table=="BD Carcel")
		{
			return false;
		}
		if($table=="DB PNC")
		{
			return false;
		}
		if($table=="Hechosdelictivos movil class")
		{
			return false;
		}
		if($table=="hechosdelictivos_tipo_arma")
		{
			return false;
		}
		if($table=="Municipios y delitos")
		{
			return false;
		}
		if($table=="Hechosdelictivos ocupacion class")
		{
			return false;
		}
		if($table=="hechosdelictivos_relacion_vict_agresor")
		{
			return false;
		}
		if($table=="Relacion de victima con agresor")
		{
			return false;
		}
		if($table=="hechosdelictivos_lugar_del_hecho")
		{
			return false;
		}
		if($table=="pnc911")
		{
			return false;
		}
		if($table=="pnc9111 class delito")
		{
			return false;
		}
		if($table=="pnc9111")
		{
			return false;
		}
		if($table=="pnc911 Sector por eventos")
		{
			return false;
		}
		if($table=="pnc911municipios")
		{
			return false;
		}
		if($table=="PNC911 Avisos")
		{
			return false;
		}
		if($table=="horas_completar")
		{
			return false;
		}
		if($table=="hora_sustituir")
		{
			return false;
		}
		if($table=="hechos_delictivos")
		{
			return false;
		}
		if($table=="hechosdelictivos2")
		{
			return false;
		}
		if($table=="PPL pertenecientes a Pandilla_prueba")
		{
			return false;
		}
		if($table=="PPL pertenecientes a Pandilla_prueba1")
		{
			return false;
		}
		if($table=="retornados")
		{
			return false;
		}
		if($table=="Retornados, clasificacion rango etario")
		{
			return false;
		}
		if($table=="BD Retornados")
		{
			return false;
		}
		if($table=="Retornados-Región Repatriación por año")
		{
			return false;
		}
		if($table=="mes corregido retornado")
		{
			return false;
		}
		if($table=="Retornados-Regiones repatriación por meses")
		{
			return false;
		}
		if($table=="Retornados-Consulados por año")
		{
			return false;
		}
		if($table=="Retornados Dashboard")
		{
			return false;
		}
		if($table=="Retornados-Departamento por año")
		{
			return false;
		}
		if($table=="Retornados-Municipios por año")
		{
			return false;
		}
		if($table=="Retornados-Rango etario por sexo")
		{
			return false;
		}
		if($table=="Retornados-Rango etario por antecedentes género masculino")
		{
			return false;
		}
		if($table=="Retornados-Rango etario por antecedentes género femenino")
		{
			return false;
		}
		if($table=="transito")
		{
			return false;
		}
		if($table=="Tránsito- Departamento por resultado del accidente")
		{
			return false;
		}
		if($table=="Tránsito")
		{
			return false;
		}
		if($table=="Tránsito- municipio por resultado del accidente")
		{
			return false;
		}
		if($table=="Tránsito-Fallecidos Rango etario víctima por sexo víctima")
		{
			return false;
		}
		if($table=="Tránsito-Lesionados Rango etario víctima por sexo víctima")
		{
			return false;
		}
		if($table=="Tránsito-Calidad de la víctima por resultado del accidente")
		{
			return false;
		}
		if($table=="Tránsito-Tipo de accidente por resultado del accidente")
		{
			return false;
		}
		if($table=="Transito class causas")
		{
			return false;
		}
		if($table=="transito1")
		{
			return false;
		}
		if($table=="Tránsito-Causa del accidente por resultado del accidente")
		{
			return false;
		}
		if($table=="Transito class tipo vehículo")
		{
			return false;
		}
		if($table=="Tránsito-Tipo de vehículo por resultado del accidente")
		{
			return false;
		}
		if($table=="Tránsito-Ruta transporte colectivo por resultado del accidente")
		{
			return false;
		}
		if($table=="Tránsito-Responsable accidente detenido por resultado del accidente")
		{
			return false;
		}
		if($table=="Transito extraer mes")
		{
			return false;
		}
		if($table=="Tránsito-Resultado del accidente por meses de accidentes")
		{
			return false;
		}
		if($table=="Tránsito-Resultado del accidente por rango horario de accidentes")
		{
			return false;
		}
		if($table=="Tránsito-Dirección accidente por resultado del accidente")
		{
			return false;
		}
		if($table=="Transito prueba datos")
		{
			return false;
		}
		if($table=="empalme tablas")
		{
			return false;
		}
		if($table=="hechos_delictivos12")
		{
			return false;
		}
		if($table=="Municipios")
		{
			return false;
		}
		if($table=="Transito arreglar guiones")
		{
			return false;
		}
		if($table=="sectorppd1")
		{
			return false;
		}
		if($table=="Sector PPD 24")
		{
			return false;
		}
		if($table=="sectorppd1 Report")
		{
			return false;
		}
		if($table=="Dashboard")
		{
			return false;
		}
		if($table=="sectorppd1 Chart")
		{
			return false;
		}
		if($table=="Hechosdelictivos_rango etario")
		{
			return false;
		}
		if($table=="carcel Report")
		{
			return false;
		}
		if($table=="pnc9112 PRUEBA")
		{
			return false;
		}
		if($table=="Sector PPD por tipo de arma")
		{
			return false;
		}
		if($table=="Cruce Sector PPD")
		{
			return false;
		}
		if($table=="enlazando sector")
		{
			return false;
		}
		if($table=="Retornados-Todos los departamentos")
		{
			return false;
		}
		if($table=="reemplazar sectores")
		{
			return false;
		}
		if($table=="hechos_delictivos_VISTA")
		{
			return false;
		}
		if($table=="reemplazar sectores PPL")
		{
			return false;
		}
		if($table=="anexar_carcel")
		{
			return false;
		}
		if($table=="anexar_carcel1")
		{
			return false;
		}
		if($table=="SUPRIMIR REGISTROS ANEXO CARCEL")
		{
			return false;
		}
		if($table=="Sectorizacion")
		{
			return false;
		}
		if($table=="PPL DGCP")
		{
			return false;
		}
		if($table=="Personas Privadas de Libertad123")
		{
			return false;
		}
		if($table=="Personas privadas de libertad por rango etario, segun nivel educativo y género femenino")
		{
			return false;
		}
		if($table=="Dashboard1")
		{
			return false;
		}
		if($table=="PPL por rango etario según género")
		{
			return false;
		}
		if($table=="reemplazar_sectores_hechosdelictivos")
		{
			return false;
		}
		if($table=="mined")
		{
			return false;
		}
		if($table=="mined1")
		{
			return false;
		}
		if($table=="mined2")
		{
			return false;
		}
		if($table=="mined21")
		{
			return false;
		}
		if($table=="mined Report")
		{
			return false;
		}
		if($table=="MINED IPCE")
		{
			return false;
		}
		if($table=="MINED INDICE")
		{
			return false;
		}
		if($table=="mined11")
		{
			return false;
		}
		if($table=="calcular indice MINED")
		{
			return false;
		}
		if($table=="calcular indice MINED2")
		{
			return false;
		}
		if($table=="mined1 Report")
		{
			return false;
		}
		if($table=="Maxima Matricula Mined")
		{
			return false;
		}
		if($table=="Matricula Relativa Final")
		{
			return false;
		}
		if($table=="IPCE_NAIVE")
		{
			return false;
		}
		if($table=="IPCE_FINAL")
		{
			return false;
		}
		if($table=="Mined_Maximo IPCE")
		{
			return false;
		}
		if($table=="mined maximo valor")
		{
			return false;
		}
		if($table=="BD Mined")
		{
			return false;
		}
		if($table=="mined3")
		{
			return false;
		}
		if($table=="valor maximo mined 2")
		{
			return false;
		}
		if($table=="BD SECTORES")
		{
			return false;
		}
		if($table=="Anexar Sector a PPL")
		{
			return false;
		}
		if($table=="mined4")
		{
			return false;
		}
		if($table=="anexar_carcel2")
		{
			return false;
		}
		if($table=="BD ANEXO CARCEL")
		{
			return false;
		}
	}
	
	protected function insert($datetime, $ip, $user, $table, $action, $description)
	{
		$sql = "INSERT INTO " .$this->connection->addTableWrappers( $this->logTableName ).
			" (" .$this->connection->addFieldWrappers("datetime").
			"," .$this->connection->addFieldWrappers("ip").
			"," .$this->connection->addFieldWrappers("user").
			"," .$this->connection->addFieldWrappers("table"). 
			"," .$this->connection->addFieldWrappers("action").
			"," .$this->connection->addFieldWrappers("description").
			") VALUES (" .$this->connection->addDateQuotes($datetime).
			"," .$this->connection->prepareString($ip). 
			"," .$this->connection->prepareString($user).
			"," .$this->connection->prepareString($table).
			"," .$this->connection->prepareString($action). 
			"," .$this->connection->prepareString($description).
			")";
		
		return $this->connection->exec( $sql );
	}
}

class AuditTrailFile
{
	var $logfile="audit.log";
	var $strLogin="login";
	var $strFailLogin="failed login";
	var $strLogout="logout";
	var $strChPass="change password";
	var $strAdd="add";
	var $strEdit="edit";
	var $strDelete="delete";
	var $strAccess="access";
	var $strKeysHeader="---Keys";
	var $strFieldsHeader="---Fields";
	var $columnDate="Date";
	var $columnTime="Time";
	var $columnIP="IP";
	var $columnUser="User";
	var $columnTable="Table";
	var $columnAction="Action";
	var $columnKey="Key field";
	var $columnField="Field";
	var $columnOldValue="Old value";
	var $columnNewValue="New value";
	var $params;
	var $maxFieldLength = 300;
	
	function __construct()
	{
		$userid="";
		if(@$_SESSION["UserID"])
			$userid=$_SESSION["UserID"];
		$this->params=array($_SERVER["REMOTE_ADDR"],$userid);
	}
	
    function LogLogin($pUsername)
    {
		    }
	
    function LogLoginFailed($pUsername)
    {
		    }
	
    function LogLogout()
    {
    }
	
    function LogChPassword()
    {
    }
	
    function LogAdd($str_table,$values,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strAdd, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			if(count($keys)>0)
			{
				$key="";
				foreach($keys as $idx=>$val)
				{
					if($key!="")
						$key.=",";
					$key.=$val;
				}
			}

			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strAdd.chr(9).$key;
			$str_add="";
			if($this->logValueEnable($str_table))
			{
				foreach($values as $idx=>$val)
				{
					if($val!="" && !array_key_exists($idx,$keys))
					{
						$v="";
						if(IsBinaryType($pSet->getFieldType($idx)))
							$v="<binary value>"."\r\n";
						else
						{
							$v=str_replace(array("\r\n","\n","\t")," ",$val);
							if(strlen($v)>$this->maxFieldLength)
								$v=runner_substr($v,0,$this->maxFieldLength);
						}
						$str_add.=$str.chr(9).$idx.chr(9).chr(9).$v."\r\n";
					}
				}
			}
			else
				$str_add.=$str."\r\n";
			
			$this->writeToLogFile( $str_add );
		}
		return $retval;
    }
	
    function LogEdit($str_table,$newvalues,$oldvalues,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strEdit, $this->params, $table, $keys, $newvalues, $oldvalues);
		if($retval)
		{
			if(count($keys)>0)
			{
				$key="";
				foreach($keys as $idx=>$val)
				{
					if($key!="")
						$key.=",";
					$key.=$val;
				}
			}

			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strEdit.chr(9).$key;
			$putsValue=true;
			$str_add="";
			if($this->logValueEnable($str_table))
			{
				foreach($newvalues as $idx=>$val)
				{
					$type=$pSet->getFieldType($idx);
					if(IsBinaryType($type))
						continue;
					if(IsDateFieldType($type))
					{
						$newvalue=format_datetime_custom(db2time($newvalues[$idx]),"yyyy-MM-dd HH:mm:ss");
						$oldvalue=format_datetime_custom(db2time($oldvalues[$idx]),"yyyy-MM-dd HH:mm:ss");
					}
					else
					{
						$newvalue=$newvalues[$idx];
						$oldvalue=$oldvalues[$idx];
					}
					if($newvalue!=$oldvalue)
					{
						$v1="";
						if(IsBinaryType($type))
							$v1="<binary value>";
						else
						{
							$v1=str_replace(array("\r\n","\n","\t")," ",$oldvalue);
							if(strlen($v1)>$this->maxFieldLength)
								$v1=runner_substr($v1,0,$this->maxFieldLength);
						}
						
						$v2="";
						if(IsBinaryType($type))
							$v2="<binary value>";
						else
						{
							$v2=str_replace(array("\r\n","\n","\t")," ",$newvalue);
							if(strlen($v2)>$this->maxFieldLength)
								$v2=runner_substr($v2,0,$this->maxFieldLength);
						}
						$str_add.=$str.chr(9).$idx.chr(9).$v1.chr(9).$v2."\r\n";
					}
				}
			}
			else
				$str_add.=$str."\r\n";
			$this->writeToLogFile( $str_add );
		}
		return $retval;
    }
	
    function LogDelete($str_table,$values,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strDelete, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			if(count($keys)>0)
			{
				$key="";
				foreach($keys as $idx=>$val)
				{
					if($key!="")
						$key.=",";
					$key.=$val;
				}
			}
			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strDelete.chr(9).$key;
			$str_add="";
			if($this->logValueEnable($str_table))
			{
				foreach($values as $idx=>$val)
				{
					$v="";
					if(IsBinaryType($pSet->getFieldType($idx)))
						$v="<binary value>";
					else
					{
						$v=str_replace(array("\r\n","\n","\t")," ",$val);
						if(strlen($v)>$this->maxFieldLength)
							$v=runner_substr($v,0,$this->maxFieldLength);
					}
					$str_add.=$str.chr(9).$idx.chr(9).$v."\r\n";
				}
			}
			else
				$str_add=$str."\r\n";
				
			$this->writeToLogFile( $str_add );
		}
		return $retval;
    }
	
	function writeToLogFile( $str )
	{
		$p=strrpos($this->logfile,".");
		$logfileName=runner_substr($this->logfile,0,$p);
		$logfileExt=runner_substr($this->logfile,$p+1, strlen($this->logfile)-1);
		$tn=$logfileName."_".format_datetime_custom(db2time(now()),"yyyyMMdd").".".$logfileExt;
		
		$fullname = getabspath($tn);
		$fsize = 0;
		if (file_exists($fullname)){
			$fsize = filesize($fullname);
		}
		$str_to_append = "";
		if( !$fsize )
		{
			$str_to_append = $this->columnDate.chr(9).$this->columnTime.chr(9).$this->columnIP.chr(9).$this->columnUser.chr(9).$this->columnTable.chr(9).$this->columnAction.chr(9).$this->columnKey.chr(9).$this->columnField.chr(9).$this->columnOldValue.chr(9).$this->columnNewValue."\r\n";
		}
		$str_to_append .= $str;
		append_to_file( $fullname, $str_to_append );
		
	}
	
	function LogAddEvent($message,$description="",$str_table="")
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($message, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$params[0].chr(9).$params[1].chr(9).$table.chr(9).$message.chr(9).$description."\r\n";
			$this->writeToLogFile( $str );
		}
		return $retval;
    }
    
    function LoginAccess()
	{
		return false;
	}
	
	function LoginSuccessful()
    {
		return true;
    }
	
    function LoginUnsuccessful($pUsername)
    {	
		return true;
	}
	
	function logValueEnable($table)
	{
		if($table=="Delitos especificos")
		{
			return false;
		}
		if($table=="carcel1")
		{
			return false;
		}
		if($table=="class_lugarespecifico")
		{
			return false;
		}
		if($table=="sectorppdf")
		{
			return false;
		}
		if($table=="tipo_mara")
		{
			return false;
		}
		if($table=="carcel_CAMBIOS")
		{
			return false;
		}
		if($table=="clasificacion")
		{
			return false;
		}
		if($table=="Espacios abiertos")
		{
			return false;
		}
		if($table=="hechosdelictivos")
		{
			return false;
		}
		if($table=="hechosdelictivos_lugaresp")
		{
			return false;
		}
		if($table=="Todos los datos PPL")
		{
			return false;
		}
		if($table=="PPL pertenecientes a Pandilla")
		{
			return false;
		}
		if($table=="Sector PPD")
		{
			return false;
		}
		if($table=="Homicidios tentados por rango etarios, según sexo victima")
		{
			return false;
		}
		if($table=="Hurtos por rango etarios, según sexo victima")
		{
			return false;
		}
		if($table=="Hurtos de vehículo por rango etarios, según sexo victima")
		{
			return false;
		}
		if($table=="Lesiones por rango etarios etarios, según sexo victima")
		{
			return false;
		}
		if($table=="Robos por rango etario, según sexo victima")
		{
			return false;
		}
		if($table=="Robo de vehículo por rango etario, según sexo victima")
		{
			return false;
		}
		if($table=="Robo y hurto de vehículo con mercaderia por rango etario, según sexo victima")
		{
			return false;
		}
		if($table=="Personas privadas de libertad por Sectores Estandarizados según género")
		{
			return false;
		}
		if($table=="Delitos por área")
		{
			return false;
		}
		if($table=="Personas privadas de libertad por rango etario según género")
		{
			return false;
		}
		if($table=="Personas privadas de libertad por rango etario, segun nivel educativo y genero Femenino")
		{
			return false;
		}
		if($table=="Personas privadas de libertad por rango etario, segun nivel educativo y genero Masculino")
		{
			return false;
		}
		if($table=="Personas privadas de libertad  segun Sector Estandarizado y pertenecientes a pandillas")
		{
			return false;
		}
		if($table=="Delitos por lugar del hecho")
		{
			return false;
		}
		if($table=="Delitos por Móvil")
		{
			return false;
		}
		if($table=="Conteo de delitos por sector estandarizado según Movil")
		{
			return false;
		}
		if($table=="Delitos por tipo de arma")
		{
			return false;
		}
		if($table=="Ocupación de la víctima por Delitos")
		{
			return false;
		}
		if($table=="Amenazas, por rango etarios, según sexo victima")
		{
			return false;
		}
		if($table=="Delitos Sexuales  por rango etarios, según sexo victima")
		{
			return false;
		}
		if($table=="Homicidios por rango etarios, según sexo")
		{
			return false;
		}
		if($table=="Delitos por sector Estandarizado")
		{
			return false;
		}
		if($table=="Delitos por rango de horas")
		{
			return false;
		}
		if($table=="Conteo de delitos, por Sector Estandarizado según Movil")
		{
			return false;
		}
		if($table=="Delitos por mes del hecho")
		{
			return false;
		}
		if($table=="homicidios_sv_2016")
		{
			return false;
		}
		if($table=="homicidios_sv_2016 Report")
		{
			return false;
		}
		if($table=="homicidios_sv_2016 Report1")
		{
			return false;
		}
		if($table=="Muertes PNC enfrentamientos")
		{
			return false;
		}
		if($table=="homicidios_municipio")
		{
			return false;
		}
		if($table=="Municipios con porcentaje de enfrentamiento")
		{
			return false;
		}
		if($table=="PPL pertenecientes a pandillas por municipio")
		{
			return false;
		}
		if($table=="PPL delitos")
		{
			return false;
		}
		if($table=="Transito class Rango Etario")
		{
			return false;
		}
		if($table=="PPL delitos_clasificacion")
		{
			return false;
		}
		if($table=="Carcel_hurto_mercaderia")
		{
			return false;
		}
		if($table=="PPL_educacion")
		{
			return false;
		}
		if($table=="Personas Privadas de Libertad")
		{
			return false;
		}
		if($table=="hechos_delictivos_class delitos")
		{
			return false;
		}
		if($table=="Sector PPD por pandilla de afiliacion (prueba)")
		{
			return false;
		}
		if($table=="tipo organizacion delictiva")
		{
			return false;
		}
		if($table=="carcel visualizacion todos")
		{
			return false;
		}
		if($table=="Grupos etarios por estado civil (masculino)")
		{
			return false;
		}
		if($table=="Grupo etarios por estado civil (masculino)")
		{
			return false;
		}
		if($table=="Grupo etarios por estado civil (femenino)")
		{
			return false;
		}
		if($table=="PPL Grupos etarios por afiliación a Pandillas")
		{
			return false;
		}
		if($table=="PPL Grupos etarios por afiliación a Pandillas femenino")
		{
			return false;
		}
		if($table=="PPL grupos etarios por Deportado masculino")
		{
			return false;
		}
		if($table=="PPL grupos etarios por Deportado Femenino")
		{
			return false;
		}
		if($table=="PPL grupos etarios delito genero masculino")
		{
			return false;
		}
		if($table=="hechos_delictivos1")
		{
			return false;
		}
		if($table=="PPL Grupos etarios por delitos masculino")
		{
			return false;
		}
		if($table=="PPL Grupos etarios por delitos femenino")
		{
			return false;
		}
		if($table=="DELITOS PNC")
		{
			return false;
		}
		if($table=="carcel prueba santa tecla")
		{
			return false;
		}
		if($table=="carcel_clasificacion lugar")
		{
			return false;
		}
		if($table=="mes_corregido")
		{
			return false;
		}
		if($table=="Hechos delictivos dia del hecho")
		{
			return false;
		}
		if($table=="hechos_delictivos11")
		{
			return false;
		}
		if($table=="BD Carcel")
		{
			return false;
		}
		if($table=="DB PNC")
		{
			return false;
		}
		if($table=="Hechosdelictivos movil class")
		{
			return false;
		}
		if($table=="hechosdelictivos_tipo_arma")
		{
			return false;
		}
		if($table=="Municipios y delitos")
		{
			return false;
		}
		if($table=="Hechosdelictivos ocupacion class")
		{
			return false;
		}
		if($table=="hechosdelictivos_relacion_vict_agresor")
		{
			return false;
		}
		if($table=="Relacion de victima con agresor")
		{
			return false;
		}
		if($table=="hechosdelictivos_lugar_del_hecho")
		{
			return false;
		}
		if($table=="pnc911")
		{
			return false;
		}
		if($table=="pnc9111 class delito")
		{
			return false;
		}
		if($table=="pnc9111")
		{
			return false;
		}
		if($table=="pnc911 Sector por eventos")
		{
			return false;
		}
		if($table=="pnc911municipios")
		{
			return false;
		}
		if($table=="PNC911 Avisos")
		{
			return false;
		}
		if($table=="horas_completar")
		{
			return false;
		}
		if($table=="hora_sustituir")
		{
			return false;
		}
		if($table=="hechos_delictivos")
		{
			return false;
		}
		if($table=="hechosdelictivos2")
		{
			return false;
		}
		if($table=="PPL pertenecientes a Pandilla_prueba")
		{
			return false;
		}
		if($table=="PPL pertenecientes a Pandilla_prueba1")
		{
			return false;
		}
		if($table=="retornados")
		{
			return false;
		}
		if($table=="Retornados, clasificacion rango etario")
		{
			return false;
		}
		if($table=="BD Retornados")
		{
			return false;
		}
		if($table=="Retornados-Región Repatriación por año")
		{
			return false;
		}
		if($table=="mes corregido retornado")
		{
			return false;
		}
		if($table=="Retornados-Regiones repatriación por meses")
		{
			return false;
		}
		if($table=="Retornados-Consulados por año")
		{
			return false;
		}
		if($table=="Retornados Dashboard")
		{
			return false;
		}
		if($table=="Retornados-Departamento por año")
		{
			return false;
		}
		if($table=="Retornados-Municipios por año")
		{
			return false;
		}
		if($table=="Retornados-Rango etario por sexo")
		{
			return false;
		}
		if($table=="Retornados-Rango etario por antecedentes género masculino")
		{
			return false;
		}
		if($table=="Retornados-Rango etario por antecedentes género femenino")
		{
			return false;
		}
		if($table=="transito")
		{
			return false;
		}
		if($table=="Tránsito- Departamento por resultado del accidente")
		{
			return false;
		}
		if($table=="Tránsito")
		{
			return false;
		}
		if($table=="Tránsito- municipio por resultado del accidente")
		{
			return false;
		}
		if($table=="Tránsito-Fallecidos Rango etario víctima por sexo víctima")
		{
			return false;
		}
		if($table=="Tránsito-Lesionados Rango etario víctima por sexo víctima")
		{
			return false;
		}
		if($table=="Tránsito-Calidad de la víctima por resultado del accidente")
		{
			return false;
		}
		if($table=="Tránsito-Tipo de accidente por resultado del accidente")
		{
			return false;
		}
		if($table=="Transito class causas")
		{
			return false;
		}
		if($table=="transito1")
		{
			return false;
		}
		if($table=="Tránsito-Causa del accidente por resultado del accidente")
		{
			return false;
		}
		if($table=="Transito class tipo vehículo")
		{
			return false;
		}
		if($table=="Tránsito-Tipo de vehículo por resultado del accidente")
		{
			return false;
		}
		if($table=="Tránsito-Ruta transporte colectivo por resultado del accidente")
		{
			return false;
		}
		if($table=="Tránsito-Responsable accidente detenido por resultado del accidente")
		{
			return false;
		}
		if($table=="Transito extraer mes")
		{
			return false;
		}
		if($table=="Tránsito-Resultado del accidente por meses de accidentes")
		{
			return false;
		}
		if($table=="Tránsito-Resultado del accidente por rango horario de accidentes")
		{
			return false;
		}
		if($table=="Tránsito-Dirección accidente por resultado del accidente")
		{
			return false;
		}
		if($table=="Transito prueba datos")
		{
			return false;
		}
		if($table=="empalme tablas")
		{
			return false;
		}
		if($table=="hechos_delictivos12")
		{
			return false;
		}
		if($table=="Municipios")
		{
			return false;
		}
		if($table=="Transito arreglar guiones")
		{
			return false;
		}
		if($table=="sectorppd1")
		{
			return false;
		}
		if($table=="Sector PPD 24")
		{
			return false;
		}
		if($table=="sectorppd1 Report")
		{
			return false;
		}
		if($table=="Dashboard")
		{
			return false;
		}
		if($table=="sectorppd1 Chart")
		{
			return false;
		}
		if($table=="Hechosdelictivos_rango etario")
		{
			return false;
		}
		if($table=="carcel Report")
		{
			return false;
		}
		if($table=="pnc9112 PRUEBA")
		{
			return false;
		}
		if($table=="Sector PPD por tipo de arma")
		{
			return false;
		}
		if($table=="Cruce Sector PPD")
		{
			return false;
		}
		if($table=="enlazando sector")
		{
			return false;
		}
		if($table=="Retornados-Todos los departamentos")
		{
			return false;
		}
		if($table=="reemplazar sectores")
		{
			return false;
		}
		if($table=="hechos_delictivos_VISTA")
		{
			return false;
		}
		if($table=="reemplazar sectores PPL")
		{
			return false;
		}
		if($table=="anexar_carcel")
		{
			return false;
		}
		if($table=="anexar_carcel1")
		{
			return false;
		}
		if($table=="SUPRIMIR REGISTROS ANEXO CARCEL")
		{
			return false;
		}
		if($table=="Sectorizacion")
		{
			return false;
		}
		if($table=="PPL DGCP")
		{
			return false;
		}
		if($table=="Personas Privadas de Libertad123")
		{
			return false;
		}
		if($table=="Personas privadas de libertad por rango etario, segun nivel educativo y género femenino")
		{
			return false;
		}
		if($table=="Dashboard1")
		{
			return false;
		}
		if($table=="PPL por rango etario según género")
		{
			return false;
		}
		if($table=="reemplazar_sectores_hechosdelictivos")
		{
			return false;
		}
		if($table=="mined")
		{
			return false;
		}
		if($table=="mined1")
		{
			return false;
		}
		if($table=="mined2")
		{
			return false;
		}
		if($table=="mined21")
		{
			return false;
		}
		if($table=="mined Report")
		{
			return false;
		}
		if($table=="MINED IPCE")
		{
			return false;
		}
		if($table=="MINED INDICE")
		{
			return false;
		}
		if($table=="mined11")
		{
			return false;
		}
		if($table=="calcular indice MINED")
		{
			return false;
		}
		if($table=="calcular indice MINED2")
		{
			return false;
		}
		if($table=="mined1 Report")
		{
			return false;
		}
		if($table=="Maxima Matricula Mined")
		{
			return false;
		}
		if($table=="Matricula Relativa Final")
		{
			return false;
		}
		if($table=="IPCE_NAIVE")
		{
			return false;
		}
		if($table=="IPCE_FINAL")
		{
			return false;
		}
		if($table=="Mined_Maximo IPCE")
		{
			return false;
		}
		if($table=="mined maximo valor")
		{
			return false;
		}
		if($table=="BD Mined")
		{
			return false;
		}
		if($table=="mined3")
		{
			return false;
		}
		if($table=="valor maximo mined 2")
		{
			return false;
		}
		if($table=="BD SECTORES")
		{
			return false;
		}
		if($table=="Anexar Sector a PPL")
		{
			return false;
		}
		if($table=="mined4")
		{
			return false;
		}
		if($table=="anexar_carcel2")
		{
			return false;
		}
		if($table=="BD ANEXO CARCEL")
		{
			return false;
		}
	}
}
?>