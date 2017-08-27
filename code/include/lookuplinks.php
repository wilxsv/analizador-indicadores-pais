<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

	$lookupTableLinks["sectorppd"]["Homicidios_tentados_por_rango_etarios__seg_n_sexo_victima.sector_ppd"]["search"] = array("table" => "Homicidios tentados por rango etarios, según sexo victima", "field" => "sector_ppd", "page" => "search");
	$lookupTableLinks["sectorppd"]["Hurtos_por_rango_etarios__seg_n_sexo_victima.sector_ppd"]["search"] = array("table" => "Hurtos por rango etarios, según sexo victima", "field" => "sector_ppd", "page" => "search");
	$lookupTableLinks["sectorppd"]["Lesiones_por_rango_etarios_etarios__seg_n_sexo_victima.sector_ppd"]["search"] = array("table" => "Lesiones por rango etarios etarios, según sexo victima", "field" => "sector_ppd", "page" => "search");
	$lookupTableLinks["sectorppd"]["Robos_por_rango_etario__seg_n_sexo_victima.sector_ppd"]["search"] = array("table" => "Robos por rango etario, según sexo victima", "field" => "sector_ppd", "page" => "search");
	$lookupTableLinks["sectorppd"]["Robo_de_veh_culo_por_rango_etario__seg_n_sexo_victima.sector_ppd"]["search"] = array("table" => "Robo de vehículo por rango etario, según sexo victima", "field" => "sector_ppd", "page" => "search");
	$lookupTableLinks["sectorppd"]["Robo_y_hurto_de_veh_culo_con_mercaderia_por_rango_etario__seg_n_sexo_victima.sector_ppd"]["search"] = array("table" => "Robo y hurto de vehículo con mercaderia por rango etario, según sexo victima", "field" => "sector_ppd", "page" => "search");
	$lookupTableLinks["sectorppd"]["Personas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero.sector_ppd"]["search"] = array("table" => "Personas privadas de libertad por Sectores Estandarizados según género", "field" => "sector_ppd", "page" => "search");
	$lookupTableLinks["sectorppd"]["Delitos_por__rea.sector_ppd"]["search"] = array("table" => "Delitos por área", "field" => "sector_ppd", "page" => "search");
	$lookupTableLinks["sectorppd"]["Personas_privadas_de_libertad__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas.sector_ppd"]["search"] = array("table" => "Personas privadas de libertad  segun Sector Estandarizado y pertenecientes a pandillas", "field" => "sector_ppd", "page" => "search");
	$lookupTableLinks["sectorppd"]["Delitos_por_lugar_del_hecho.sector_ppd"]["search"] = array("table" => "Delitos por lugar del hecho", "field" => "sector_ppd", "page" => "search");
	$lookupTableLinks["sectorppd"]["Delitos_por_M_vil.sector_ppd"]["search"] = array("table" => "Delitos por Móvil", "field" => "sector_ppd", "page" => "search");
	$lookupTableLinks["sectorppd"]["Conteo_de_delitos_por_sector_estandarizado_seg_n_Movil.sector_ppd"]["search"] = array("table" => "Conteo de delitos por sector estandarizado según Movil", "field" => "sector_ppd", "page" => "search");
	$lookupTableLinks["sectorppd"]["Delitos_por_tipo_de_arma.sector_ppd"]["search"] = array("table" => "Delitos por tipo de arma", "field" => "sector_ppd", "page" => "search");
	$lookupTableLinks["sectorppd"]["Ocupaci_n_de_la_v_ctima_por_Delitos.sector_ppd"]["search"] = array("table" => "Ocupación de la víctima por Delitos", "field" => "sector_ppd", "page" => "search");
	$lookupTableLinks["sectorppd"]["Delitos_Sexuales__por_rango_etarios__seg_n_sexo_victima.sector_ppd"]["search"] = array("table" => "Delitos Sexuales  por rango etarios, según sexo victima", "field" => "sector_ppd", "page" => "search");
	$lookupTableLinks["sectorppd"]["Homicidios_por_rango_etarios__seg_n_sexo.sector_ppd"]["search"] = array("table" => "Homicidios por rango etarios, según sexo", "field" => "sector_ppd", "page" => "search");
	$lookupTableLinks["sectorppd"]["Delitos_por_sector_Estandarizado.sector_ppd"]["search"] = array("table" => "Delitos por sector Estandarizado", "field" => "sector_ppd", "page" => "search");
	$lookupTableLinks["sectorppd"]["Delitos_por_rango_de_horas.sector_ppd"]["search"] = array("table" => "Delitos por rango de horas", "field" => "sector_ppd", "page" => "search");
	$lookupTableLinks["sectorppd"]["Conteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil.sector_ppd"]["search"] = array("table" => "Conteo de delitos, por Sector Estandarizado según Movil", "field" => "sector_ppd", "page" => "search");
	$lookupTableLinks["sectorppd"]["Delitos_por_mes_del_hecho.sector_ppd"]["search"] = array("table" => "Delitos por mes del hecho", "field" => "sector_ppd", "page" => "search");
	$lookupTableLinks["sectorppd"]["Relacion_de_victima_con_agresor.sector_ppd"]["search"] = array("table" => "Relacion de victima con agresor", "field" => "sector_ppd", "page" => "search");
	$lookupTableLinks["sectorppd"]["Sector_PPD_por_tipo_de_arma.sector_ppd"]["search"] = array("table" => "Sector PPD por tipo de arma", "field" => "sector_ppd", "page" => "search");
	$lookupTableLinks["sectorppd"]["Cruce_Sector_PPD.sector_ppd"]["search"] = array("table" => "Cruce Sector PPD", "field" => "sector_ppd", "page" => "search");
}

?>