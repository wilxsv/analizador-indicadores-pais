<?php
require_once(getabspath("classes/cipherer.php"));




$tdatahomicidios_sv_2016_Report1 = array();
	$tdatahomicidios_sv_2016_Report1[".truncateText"] = true;
	$tdatahomicidios_sv_2016_Report1[".NumberOfChars"] = 80;
	$tdatahomicidios_sv_2016_Report1[".ShortName"] = "homicidios_sv_2016_Report1";
	$tdatahomicidios_sv_2016_Report1[".OwnerID"] = "";
	$tdatahomicidios_sv_2016_Report1[".OriginalTable"] = "homicidios_sv_2016";

//	field labels
$fieldLabelshomicidios_sv_2016_Report1 = array();
$fieldToolTipshomicidios_sv_2016_Report1 = array();
$pageTitleshomicidios_sv_2016_Report1 = array();
$placeHoldershomicidios_sv_2016_Report1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"] = array();
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"] = array();
	$placeHoldershomicidios_sv_2016_Report1["Spanish"] = array();
	$pageTitleshomicidios_sv_2016_Report1["Spanish"] = array();
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["situacion"] = "Situacion";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["situacion"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["situacion"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["hoja"] = "Hoja";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["hoja"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["hoja"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__homicidios"] = "Homicidios";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__homicidios"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__homicidios"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__edad"] = "Edad";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__edad"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__edad"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__relacion_e"] = "Relacion E";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__relacion_e"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__relacion_e"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__sexo"] = "Sexo";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__sexo"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__sexo"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__relacionad"] = "Relacionad";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__relacionad"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__relacionad"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__causa_prel"] = "Causa Prel";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__causa_prel"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__causa_prel"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__circunstan"] = "Circunstan";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__circunstan"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__circunstan"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__movil"] = "Movil";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__movil"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__movil"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__tipo_viole"] = "Tipo Viole";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__tipo_viole"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__tipo_viole"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__relac_vict"] = "Relac Vict";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__relac_vict"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__relac_vict"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__victima_pa"] = "Victima Pa";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__victima_pa"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__victima_pa"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__segun"] = "Segun";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__segun"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__segun"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__pandilla"] = "Pandilla";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__pandilla"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__pandilla"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__ocupacion_"] = "Ocupacion";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__ocupacion_"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__ocupacion_"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__nacionalid"] = "Nacionalid";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__nacionalid"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__nacionalid"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__depto"] = "Depto";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__depto"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__depto"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__municipio"] = "Municipio";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__municipio"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__municipio"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__canton"] = "Canton";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__canton"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__canton"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__caserio"] = "Caserio";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__caserio"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__caserio"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__barrio"] = "Barrio";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__barrio"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__barrio"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__comunidad"] = "Comunidad";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__comunidad"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__comunidad"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__reparto"] = "Reparto";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__reparto"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__reparto"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__colonia"] = "Colonia";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__colonia"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__colonia"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__no"] = "No";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__no"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__no"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__calle"] = "Calle";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__calle"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__calle"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__avenida"] = "Avenida";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__avenida"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__avenida"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__alameda"] = "Alameda";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__alameda"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__alameda"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__boulevard"] = "Boulevard";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__boulevard"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__boulevard"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__pasaje"] = "Pasaje";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__pasaje"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__pasaje"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__sector_spd"] = "Sector Spd";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__sector_spd"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__sector_spd"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__tipo_lugar"] = "Tipo Lugar";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__tipo_lugar"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__tipo_lugar"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__area"] = "Area";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__area"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__area"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__x"] = "X";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__x"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__x"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__y"] = "Y";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__y"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__y"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__fecha_hech"] = "Fecha Hech";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__fecha_hech"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__fecha_hech"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__dia"] = "Dia";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__dia"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__dia"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__mes"] = "Mes";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__mes"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__mes"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__hora_hecho"] = "Hora Hecho";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__hora_hecho"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__hora_hecho"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__periodo"] = "Periodo";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__periodo"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__periodo"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__tipo_arma"] = "Tipo Arma";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__tipo_arma"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__tipo_arma"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__especifica"] = "Especifica";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__especifica"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__especifica"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__calibre"] = "Calibre";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__calibre"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__calibre"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__tipo_delit"] = "Tipo Delit";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__tipo_delit"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__tipo_delit"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__muertos"] = "Muertos";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__muertos"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__muertos"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__fecha_leva"] = "Fecha Leva";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__fecha_leva"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__fecha_leva"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__hora_de_le"] = "Hora De Le";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__hora_de_le"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__hora_de_le"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__observacio"] = "Observacio";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__observacio"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__observacio"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__f50"] = "F50";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__f50"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__f50"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__numforma"] = "Numforma";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__numforma"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__numforma"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__edad1"] = "Edad1";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__edad1"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__edad1"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__sexo1"] = "Sexo1";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__sexo1"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__sexo1"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__departamen"] = "Departamen";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__departamen"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__departamen"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__municipio_"] = "Municipio";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__municipio_"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__municipio_"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__canton1"] = "Canton1";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__canton1"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__canton1"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__caserio1"] = "Caserio1";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__caserio1"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__caserio1"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__colonia1"] = "Colonia1";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__colonia1"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__colonia1"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__fechahecho"] = "Fechahecho";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__fechahecho"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__fechahecho"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__hora"] = "Hora";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__hora"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__hora"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__minutos"] = "Minutos";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__minutos"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__minutos"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__tipoarma"] = "Tipoarma";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__tipoarma"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__tipoarma"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__especifiqu"] = "Especifiqu";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__especifiqu"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__especifiqu"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__calificaci"] = "Calificaci";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__calificaci"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__calificaci"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__fecha_de_l"] = "Fecha De L";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__fecha_de_l"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__fecha_de_l"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__departam_1"] = "Departam 1";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__departam_1"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__departam_1"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__municipi_1"] = "Municipi 1";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__municipi_1"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__municipi_1"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__conciliaci"] = "Conciliaci";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__conciliaci"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__conciliaci"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__levantamie"] = "Levantamie";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__levantamie"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__levantamie"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__profesi_n"] = "Profesión";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__profesi_n"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__profesi_n"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__tipo_halla"] = "Tipo Halla";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__tipo_halla"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__tipo_halla"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__victimario"] = "Victimario";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__victimario"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__victimario"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__causa_pr_1"] = "Causa Pr 1";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__causa_pr_1"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__causa_pr_1"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__dpto"] = "Dpto";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__dpto"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__dpto"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__munic"] = "Munic";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__munic"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__munic"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__cdpto_cmun"] = "Cdpto Cmun";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__cdpto_cmun"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__cdpto_cmun"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__cab_dpto"] = "Cab Dpto";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__cab_dpto"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__cab_dpto"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__cdpto"] = "Cdpto";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__cdpto"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__cdpto"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__fid"] = "Fid";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__fid"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__fid"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__area1"] = "Area1";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__area1"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__area1"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__munic25k_"] = "Munic25k";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__munic25k_"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__munic25k_"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__munic25k_i"] = "Munic25k I";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__munic25k_i"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__munic25k_i"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__poly_"] = "Poly";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__poly_"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__poly_"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__subclass"] = "Subclass";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__subclass"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__subclass"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__subclass_"] = "Subclass";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__subclass_"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__subclass_"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__rings_ok"] = "Rings Ok";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__rings_ok"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__rings_ok"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__rings_nok"] = "Rings Nok";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__rings_nok"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__rings_nok"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__dpto1"] = "Dpto1";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__dpto1"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__dpto1"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__munic1"] = "Munic1";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__munic1"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__munic1"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__cdpto_cmun1"] = "Cdpto Cmun1";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__cdpto_cmun1"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__cdpto_cmun1"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__cab_dpto1"] = "Cab Dpto1";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__cab_dpto1"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__cab_dpto1"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__cdpto1"] = "Cdpto1";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__cdpto1"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__cdpto1"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["Spanish"]["__acres"] = "Acres";
	$fieldToolTipshomicidios_sv_2016_Report1["Spanish"]["__acres"] = "";
	$placeHoldershomicidios_sv_2016_Report1["Spanish"]["__acres"] = "";
	if (count($fieldToolTipshomicidios_sv_2016_Report1["Spanish"]))
		$tdatahomicidios_sv_2016_Report1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshomicidios_sv_2016_Report1["English"] = array();
	$fieldToolTipshomicidios_sv_2016_Report1["English"] = array();
	$placeHoldershomicidios_sv_2016_Report1["English"] = array();
	$pageTitleshomicidios_sv_2016_Report1["English"] = array();
	$fieldLabelshomicidios_sv_2016_Report1["English"]["situacion"] = "Situacion";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["situacion"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["situacion"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["hoja"] = "Hoja";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["hoja"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["hoja"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__homicidios"] = "Homicidios";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__homicidios"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__homicidios"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__edad"] = "Edad";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__edad"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__edad"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__relacion_e"] = "Relacion E";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__relacion_e"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__relacion_e"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__sexo"] = "Sexo";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__sexo"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__sexo"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__relacionad"] = "Relacionad";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__relacionad"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__relacionad"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__causa_prel"] = "Causa Prel";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__causa_prel"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__causa_prel"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__circunstan"] = "Circunstan";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__circunstan"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__circunstan"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__movil"] = "Movil";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__movil"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__movil"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__tipo_viole"] = "Tipo Viole";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__tipo_viole"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__tipo_viole"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__relac_vict"] = "Relac Vict";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__relac_vict"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__relac_vict"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__victima_pa"] = "Victima Pa";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__victima_pa"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__victima_pa"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__segun"] = "Segun";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__segun"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__segun"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__pandilla"] = "Pandilla";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__pandilla"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__pandilla"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__ocupacion_"] = "Ocupacion";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__ocupacion_"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__ocupacion_"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__nacionalid"] = "Nacionalid";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__nacionalid"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__nacionalid"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__depto"] = "Depto";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__depto"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__depto"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__municipio"] = "Municipio";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__municipio"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__municipio"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__canton"] = "Canton";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__canton"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__canton"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__caserio"] = "Caserio";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__caserio"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__caserio"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__barrio"] = "Barrio";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__barrio"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__barrio"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__comunidad"] = "Comunidad";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__comunidad"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__comunidad"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__reparto"] = "Reparto";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__reparto"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__reparto"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__colonia"] = "Colonia";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__colonia"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__colonia"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__no"] = "No";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__no"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__no"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__calle"] = "Calle";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__calle"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__calle"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__avenida"] = "Avenida";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__avenida"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__avenida"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__alameda"] = "Alameda";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__alameda"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__alameda"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__boulevard"] = "Boulevard";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__boulevard"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__boulevard"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__pasaje"] = "Pasaje";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__pasaje"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__pasaje"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__sector_spd"] = "Sector Spd";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__sector_spd"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__sector_spd"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__tipo_lugar"] = "Tipo Lugar";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__tipo_lugar"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__tipo_lugar"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__area"] = "Area";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__area"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__area"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__x"] = "X";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__x"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__x"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__y"] = "Y";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__y"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__y"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__fecha_hech"] = "Fecha Hech";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__fecha_hech"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__fecha_hech"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__dia"] = "Dia";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__dia"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__dia"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__mes"] = "Mes";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__mes"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__mes"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__hora_hecho"] = "Hora Hecho";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__hora_hecho"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__hora_hecho"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__periodo"] = "Periodo";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__periodo"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__periodo"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__tipo_arma"] = "Tipo Arma";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__tipo_arma"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__tipo_arma"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__especifica"] = "Especifica";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__especifica"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__especifica"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__calibre"] = "Calibre";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__calibre"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__calibre"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__tipo_delit"] = "Tipo Delit";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__tipo_delit"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__tipo_delit"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__muertos"] = "Muertos";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__muertos"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__muertos"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__fecha_leva"] = "Fecha Leva";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__fecha_leva"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__fecha_leva"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__hora_de_le"] = "Hora De Le";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__hora_de_le"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__hora_de_le"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__observacio"] = "Observacio";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__observacio"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__observacio"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__f50"] = "F50";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__f50"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__f50"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__numforma"] = "Numforma";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__numforma"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__numforma"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__edad1"] = "Edad1";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__edad1"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__edad1"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__sexo1"] = "Sexo1";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__sexo1"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__sexo1"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__departamen"] = "Departamen";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__departamen"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__departamen"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__municipio_"] = "Municipio";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__municipio_"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__municipio_"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__canton1"] = "Canton1";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__canton1"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__canton1"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__caserio1"] = "Caserio1";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__caserio1"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__caserio1"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__colonia1"] = "Colonia1";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__colonia1"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__colonia1"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__fechahecho"] = "Fechahecho";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__fechahecho"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__fechahecho"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__hora"] = "Hora";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__hora"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__hora"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__minutos"] = "Minutos";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__minutos"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__minutos"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__tipoarma"] = "Tipoarma";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__tipoarma"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__tipoarma"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__especifiqu"] = "Especifiqu";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__especifiqu"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__especifiqu"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__calificaci"] = "Calificaci";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__calificaci"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__calificaci"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__fecha_de_l"] = "Fecha De L";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__fecha_de_l"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__fecha_de_l"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__departam_1"] = "Departam 1";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__departam_1"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__departam_1"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__municipi_1"] = "Municipi 1";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__municipi_1"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__municipi_1"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__conciliaci"] = "Conciliaci";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__conciliaci"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__conciliaci"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__levantamie"] = "Levantamie";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__levantamie"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__levantamie"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__profesi_n"] = "Profesión";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__profesi_n"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__profesi_n"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__tipo_halla"] = "Tipo Halla";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__tipo_halla"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__tipo_halla"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__victimario"] = "Victimario";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__victimario"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__victimario"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__causa_pr_1"] = "Causa Pr 1";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__causa_pr_1"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__causa_pr_1"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__dpto"] = "Dpto";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__dpto"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__dpto"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__munic"] = "Munic";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__munic"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__munic"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__cdpto_cmun"] = "Cdpto Cmun";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__cdpto_cmun"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__cdpto_cmun"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__cab_dpto"] = "Cab Dpto";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__cab_dpto"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__cab_dpto"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__cdpto"] = "Cdpto";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__cdpto"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__cdpto"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__fid"] = "Fid";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__fid"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__fid"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__area1"] = "Area1";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__area1"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__area1"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__munic25k_"] = "Munic25k";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__munic25k_"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__munic25k_"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__munic25k_i"] = "Munic25k I";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__munic25k_i"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__munic25k_i"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__poly_"] = "Poly";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__poly_"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__poly_"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__subclass"] = "Subclass";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__subclass"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__subclass"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__subclass_"] = "Subclass";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__subclass_"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__subclass_"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__rings_ok"] = "Rings Ok";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__rings_ok"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__rings_ok"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__rings_nok"] = "Rings Nok";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__rings_nok"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__rings_nok"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__dpto1"] = "Dpto1";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__dpto1"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__dpto1"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__munic1"] = "Munic1";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__munic1"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__munic1"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__cdpto_cmun1"] = "Cdpto Cmun1";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__cdpto_cmun1"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__cdpto_cmun1"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__cab_dpto1"] = "Cab Dpto1";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__cab_dpto1"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__cab_dpto1"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__cdpto1"] = "Cdpto1";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__cdpto1"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__cdpto1"] = "";
	$fieldLabelshomicidios_sv_2016_Report1["English"]["__acres"] = "Acres";
	$fieldToolTipshomicidios_sv_2016_Report1["English"]["__acres"] = "";
	$placeHoldershomicidios_sv_2016_Report1["English"]["__acres"] = "";
	if (count($fieldToolTipshomicidios_sv_2016_Report1["English"]))
		$tdatahomicidios_sv_2016_Report1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelshomicidios_sv_2016_Report1[""] = array();
	$fieldToolTipshomicidios_sv_2016_Report1[""] = array();
	$placeHoldershomicidios_sv_2016_Report1[""] = array();
	$pageTitleshomicidios_sv_2016_Report1[""] = array();
	if (count($fieldToolTipshomicidios_sv_2016_Report1[""]))
		$tdatahomicidios_sv_2016_Report1[".isUseToolTips"] = true;
}





$tdatahomicidios_sv_2016_Report1[".shortTableName"] = "homicidios_sv_2016_Report1";
$tdatahomicidios_sv_2016_Report1[".nSecOptions"] = 0;
$tdatahomicidios_sv_2016_Report1[".recsPerRowPrint"] = 1;
$tdatahomicidios_sv_2016_Report1[".mainTableOwnerID"] = "";
$tdatahomicidios_sv_2016_Report1[".moveNext"] = 1;
$tdatahomicidios_sv_2016_Report1[".entityType"] = 2;

$tdatahomicidios_sv_2016_Report1[".strOriginalTableName"] = "homicidios_sv_2016";

	



$tdatahomicidios_sv_2016_Report1[".showAddInPopup"] = false;

$tdatahomicidios_sv_2016_Report1[".showEditInPopup"] = false;

$tdatahomicidios_sv_2016_Report1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatahomicidios_sv_2016_Report1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatahomicidios_sv_2016_Report1[".fieldsForRegister"] = array();

$tdatahomicidios_sv_2016_Report1[".listAjax"] = false;

	$tdatahomicidios_sv_2016_Report1[".audit"] = false;

	$tdatahomicidios_sv_2016_Report1[".locking"] = false;



$tdatahomicidios_sv_2016_Report1[".list"] = true;



$tdatahomicidios_sv_2016_Report1[".reorderRecordsByHeader"] = true;





$tdatahomicidios_sv_2016_Report1[".exportTo"] = true;

$tdatahomicidios_sv_2016_Report1[".printFriendly"] = true;


$tdatahomicidios_sv_2016_Report1[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatahomicidios_sv_2016_Report1[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatahomicidios_sv_2016_Report1[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatahomicidios_sv_2016_Report1[".searchSaving"] = false;
//

$tdatahomicidios_sv_2016_Report1[".showSearchPanel"] = true;
		$tdatahomicidios_sv_2016_Report1[".flexibleSearch"] = true;

$tdatahomicidios_sv_2016_Report1[".isUseAjaxSuggest"] = true;






$tdatahomicidios_sv_2016_Report1[".ajaxCodeSnippetAdded"] = false;

$tdatahomicidios_sv_2016_Report1[".buttonsAdded"] = false;

$tdatahomicidios_sv_2016_Report1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahomicidios_sv_2016_Report1[".isUseTimeForSearch"] = false;





$tdatahomicidios_sv_2016_Report1[".allSearchFields"] = array();
$tdatahomicidios_sv_2016_Report1[".filterFields"] = array();
$tdatahomicidios_sv_2016_Report1[".requiredSearchFields"] = array();

$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "situacion";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "hoja";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__homicidios";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__edad";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__relacion_e";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__sexo";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__relacionad";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__causa_prel";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__circunstan";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__movil";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__tipo_viole";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__relac_vict";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__victima_pa";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__segun";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__pandilla";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__ocupacion_";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__nacionalid";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__depto";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__municipio";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__canton";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__caserio";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__barrio";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__comunidad";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__reparto";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__colonia";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__no";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__calle";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__avenida";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__alameda";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__boulevard";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__pasaje";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__sector_spd";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__tipo_lugar";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__area";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__x";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__y";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__fecha_hech";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__dia";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__mes";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__hora_hecho";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__periodo";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__tipo_arma";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__especifica";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__calibre";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__tipo_delit";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__muertos";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__fecha_leva";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__hora_de_le";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__observacio";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__f50";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__numforma";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__edad1";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__sexo1";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__departamen";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__municipio_";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__canton1";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__caserio1";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__colonia1";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__fechahecho";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__hora";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__minutos";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__tipoarma";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__especifiqu";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__calificaci";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__fecha_de_l";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__departam_1";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__municipi_1";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__conciliaci";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__levantamie";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__profesión";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__tipo_halla";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__victimario";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__causa_pr_1";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__dpto";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__munic";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__cdpto_cmun";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__cab_dpto";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__cdpto";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__fid";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__area1";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__munic25k_";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__munic25k_i";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__poly_";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__subclass";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__subclass_";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__rings_ok";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__rings_nok";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__dpto1";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__munic1";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__cdpto_cmun1";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__cab_dpto1";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__cdpto1";
	$tdatahomicidios_sv_2016_Report1[".allSearchFields"][] = "__acres";
	

$tdatahomicidios_sv_2016_Report1[".googleLikeFields"] = array();
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "situacion";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "hoja";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__homicidios";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__edad";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__relacion_e";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__sexo";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__relacionad";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__causa_prel";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__circunstan";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__movil";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__tipo_viole";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__relac_vict";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__victima_pa";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__segun";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__pandilla";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__ocupacion_";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__nacionalid";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__depto";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__municipio";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__canton";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__caserio";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__barrio";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__comunidad";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__reparto";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__colonia";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__no";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__calle";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__avenida";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__alameda";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__boulevard";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__pasaje";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__sector_spd";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__tipo_lugar";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__area";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__x";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__y";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__fecha_hech";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__dia";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__mes";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__hora_hecho";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__periodo";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__tipo_arma";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__especifica";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__calibre";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__tipo_delit";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__muertos";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__fecha_leva";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__hora_de_le";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__observacio";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__f50";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__numforma";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__edad1";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__sexo1";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__departamen";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__municipio_";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__canton1";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__caserio1";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__colonia1";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__fechahecho";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__hora";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__minutos";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__tipoarma";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__especifiqu";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__calificaci";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__fecha_de_l";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__departam_1";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__municipi_1";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__conciliaci";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__levantamie";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__profesión";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__tipo_halla";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__victimario";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__causa_pr_1";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__dpto";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__munic";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__cdpto_cmun";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__cab_dpto";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__cdpto";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__fid";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__area1";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__munic25k_";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__munic25k_i";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__poly_";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__subclass";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__subclass_";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__rings_ok";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__rings_nok";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__dpto1";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__munic1";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__cdpto_cmun1";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__cab_dpto1";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__cdpto1";
$tdatahomicidios_sv_2016_Report1[".googleLikeFields"][] = "__acres";


$tdatahomicidios_sv_2016_Report1[".advSearchFields"] = array();
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "situacion";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "hoja";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__homicidios";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__edad";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__relacion_e";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__sexo";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__relacionad";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__causa_prel";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__circunstan";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__movil";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__tipo_viole";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__relac_vict";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__victima_pa";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__segun";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__pandilla";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__ocupacion_";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__nacionalid";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__depto";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__municipio";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__canton";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__caserio";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__barrio";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__comunidad";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__reparto";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__colonia";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__no";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__calle";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__avenida";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__alameda";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__boulevard";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__pasaje";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__sector_spd";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__tipo_lugar";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__area";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__x";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__y";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__fecha_hech";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__dia";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__mes";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__hora_hecho";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__periodo";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__tipo_arma";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__especifica";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__calibre";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__tipo_delit";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__muertos";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__fecha_leva";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__hora_de_le";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__observacio";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__f50";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__numforma";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__edad1";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__sexo1";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__departamen";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__municipio_";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__canton1";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__caserio1";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__colonia1";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__fechahecho";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__hora";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__minutos";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__tipoarma";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__especifiqu";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__calificaci";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__fecha_de_l";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__departam_1";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__municipi_1";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__conciliaci";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__levantamie";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__profesión";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__tipo_halla";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__victimario";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__causa_pr_1";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__dpto";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__munic";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__cdpto_cmun";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__cab_dpto";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__cdpto";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__fid";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__area1";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__munic25k_";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__munic25k_i";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__poly_";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__subclass";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__subclass_";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__rings_ok";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__rings_nok";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__dpto1";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__munic1";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__cdpto_cmun1";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__cab_dpto1";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__cdpto1";
$tdatahomicidios_sv_2016_Report1[".advSearchFields"][] = "__acres";

$tdatahomicidios_sv_2016_Report1[".tableType"] = "report";

$tdatahomicidios_sv_2016_Report1[".printerPageOrientation"] = 0;
$tdatahomicidios_sv_2016_Report1[".nPrinterPageScale"] = 100;

$tdatahomicidios_sv_2016_Report1[".nPrinterSplitRecords"] = 40;

$tdatahomicidios_sv_2016_Report1[".nPrinterPDFSplitRecords"] = 40;



$tdatahomicidios_sv_2016_Report1[".geocodingEnabled"] = false;

//report settings
$tdatahomicidios_sv_2016_Report1[".printReportLayout"] = 6;

$tdatahomicidios_sv_2016_Report1[".reportPrintPartitionType"] = 1;
$tdatahomicidios_sv_2016_Report1[".reportPrintGroupsPerPage"] = 40;
$tdatahomicidios_sv_2016_Report1[".reportPrintPDFGroupsPerPage"] = 40;
$tdatahomicidios_sv_2016_Report1[".lowGroup"] = 0;



$tdatahomicidios_sv_2016_Report1[".pageSize"] = 10;






$tdatahomicidios_sv_2016_Report1[".repShowDet"] = true;

$tdatahomicidios_sv_2016_Report1[".reportLayout"] = 6;

//end of report settings




$tdatahomicidios_sv_2016_Report1[".listGridLayout"] = 3;

$tdatahomicidios_sv_2016_Report1[".isDisplayLoading"] = true;




// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahomicidios_sv_2016_Report1[".strOrderBy"] = $tstrOrderBy;

$tdatahomicidios_sv_2016_Report1[".orderindexes"] = array();

$tdatahomicidios_sv_2016_Report1[".sqlHead"] = "SELECT situacion,  	hoja,  	`__homicidios`,  	`__edad`,  	`__relacion_e`,  	`__sexo`,  	`__relacionad`,  	`__causa_prel`,  	`__circunstan`,  	`__movil`,  	`__tipo_viole`,  	`__relac_vict`,  	`__victima_pa`,  	`__segun`,  	`__pandilla`,  	`__ocupacion_`,  	`__nacionalid`,  	`__depto`,  	`__municipio`,  	`__canton`,  	`__caserio`,  	`__barrio`,  	`__comunidad`,  	`__reparto`,  	`__colonia`,  	`__no`,  	`__calle`,  	`__avenida`,  	`__alameda`,  	`__boulevard`,  	`__pasaje`,  	`__sector_spd`,  	`__tipo_lugar`,  	`__area`,  	`__x`,  	`__y`,  	`__fecha_hech`,  	`__dia`,  	`__mes`,  	`__hora_hecho`,  	`__periodo`,  	`__tipo_arma`,  	`__especifica`,  	`__calibre`,  	`__tipo_delit`,  	`__muertos`,  	`__fecha_leva`,  	`__hora_de_le`,  	`__observacio`,  	`__f50`,  	`__numforma`,  	`__edad1`,  	`__sexo1`,  	`__departamen`,  	`__municipio_`,  	`__canton1`,  	`__caserio1`,  	`__colonia1`,  	`__fechahecho`,  	`__hora`,  	`__minutos`,  	`__tipoarma`,  	`__especifiqu`,  	`__calificaci`,  	`__fecha_de_l`,  	`__departam_1`,  	`__municipi_1`,  	`__conciliaci`,  	`__levantamie`,  	`__profesión`,  	`__tipo_halla`,  	`__victimario`,  	`__causa_pr_1`,  	`__dpto`,  	`__munic`,  	`__cdpto_cmun`,  	`__cab_dpto`,  	`__cdpto`,  	`__fid`,  	`__area1`,  	`__munic25k_`,  	`__munic25k_i`,  	`__poly_`,  	`__subclass`,  	`__subclass_`,  	`__rings_ok`,  	`__rings_nok`,  	`__dpto1`,  	`__munic1`,  	`__cdpto_cmun1`,  	`__cab_dpto1`,  	`__cdpto1`,  	`__acres`";
$tdatahomicidios_sv_2016_Report1[".sqlFrom"] = "FROM homicidios_sv_2016";
$tdatahomicidios_sv_2016_Report1[".sqlWhereExpr"] = "";
$tdatahomicidios_sv_2016_Report1[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahomicidios_sv_2016_Report1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahomicidios_sv_2016_Report1[".arrGroupsPerPage"] = $arrGPP;

$tdatahomicidios_sv_2016_Report1[".highlightSearchResults"] = true;

$tableKeyshomicidios_sv_2016_Report1 = array();
$tdatahomicidios_sv_2016_Report1[".Keys"] = $tableKeyshomicidios_sv_2016_Report1;

$tdatahomicidios_sv_2016_Report1[".listFields"] = array();
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "situacion";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "hoja";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__homicidios";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__edad";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__relacion_e";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__sexo";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__relacionad";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__causa_prel";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__circunstan";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__movil";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__tipo_viole";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__relac_vict";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__victima_pa";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__segun";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__pandilla";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__ocupacion_";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__nacionalid";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__depto";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__municipio";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__canton";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__caserio";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__barrio";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__comunidad";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__reparto";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__colonia";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__no";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__calle";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__avenida";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__alameda";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__boulevard";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__pasaje";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__sector_spd";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__tipo_lugar";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__area";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__x";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__y";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__fecha_hech";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__dia";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__mes";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__hora_hecho";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__periodo";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__tipo_arma";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__especifica";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__calibre";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__tipo_delit";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__muertos";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__fecha_leva";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__hora_de_le";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__observacio";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__f50";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__numforma";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__edad1";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__sexo1";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__departamen";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__municipio_";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__canton1";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__caserio1";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__colonia1";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__fechahecho";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__hora";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__minutos";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__tipoarma";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__especifiqu";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__calificaci";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__fecha_de_l";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__departam_1";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__municipi_1";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__conciliaci";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__levantamie";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__profesión";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__tipo_halla";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__victimario";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__causa_pr_1";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__dpto";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__munic";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__cdpto_cmun";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__cab_dpto";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__cdpto";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__fid";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__area1";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__munic25k_";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__munic25k_i";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__poly_";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__subclass";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__subclass_";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__rings_ok";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__rings_nok";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__dpto1";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__munic1";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__cdpto_cmun1";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__cab_dpto1";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__cdpto1";
$tdatahomicidios_sv_2016_Report1[".listFields"][] = "__acres";

$tdatahomicidios_sv_2016_Report1[".hideMobileList"] = array();


$tdatahomicidios_sv_2016_Report1[".viewFields"] = array();
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "situacion";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "hoja";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__homicidios";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__edad";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__relacion_e";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__sexo";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__relacionad";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__causa_prel";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__circunstan";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__movil";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__tipo_viole";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__relac_vict";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__victima_pa";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__segun";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__pandilla";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__ocupacion_";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__nacionalid";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__depto";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__municipio";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__canton";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__caserio";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__barrio";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__comunidad";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__reparto";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__colonia";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__no";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__calle";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__avenida";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__alameda";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__boulevard";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__pasaje";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__sector_spd";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__tipo_lugar";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__area";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__x";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__y";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__fecha_hech";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__dia";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__mes";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__hora_hecho";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__periodo";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__tipo_arma";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__especifica";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__calibre";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__tipo_delit";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__muertos";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__fecha_leva";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__hora_de_le";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__observacio";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__f50";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__numforma";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__edad1";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__sexo1";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__departamen";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__municipio_";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__canton1";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__caserio1";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__colonia1";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__fechahecho";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__hora";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__minutos";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__tipoarma";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__especifiqu";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__calificaci";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__fecha_de_l";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__departam_1";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__municipi_1";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__conciliaci";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__levantamie";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__profesión";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__tipo_halla";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__victimario";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__causa_pr_1";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__dpto";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__munic";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__cdpto_cmun";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__cab_dpto";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__cdpto";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__fid";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__area1";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__munic25k_";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__munic25k_i";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__poly_";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__subclass";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__subclass_";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__rings_ok";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__rings_nok";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__dpto1";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__munic1";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__cdpto_cmun1";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__cab_dpto1";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__cdpto1";
$tdatahomicidios_sv_2016_Report1[".viewFields"][] = "__acres";

$tdatahomicidios_sv_2016_Report1[".addFields"] = array();
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "situacion";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "hoja";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__homicidios";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__edad";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__relacion_e";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__sexo";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__relacionad";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__causa_prel";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__circunstan";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__movil";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__tipo_viole";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__relac_vict";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__victima_pa";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__segun";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__pandilla";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__ocupacion_";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__nacionalid";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__depto";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__municipio";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__canton";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__caserio";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__barrio";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__comunidad";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__reparto";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__colonia";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__no";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__calle";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__avenida";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__alameda";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__boulevard";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__pasaje";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__sector_spd";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__tipo_lugar";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__area";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__x";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__y";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__fecha_hech";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__dia";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__mes";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__hora_hecho";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__periodo";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__tipo_arma";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__especifica";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__calibre";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__tipo_delit";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__muertos";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__fecha_leva";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__hora_de_le";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__observacio";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__f50";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__numforma";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__edad1";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__sexo1";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__departamen";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__municipio_";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__canton1";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__caserio1";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__colonia1";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__fechahecho";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__hora";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__minutos";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__tipoarma";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__especifiqu";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__calificaci";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__fecha_de_l";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__departam_1";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__municipi_1";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__conciliaci";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__levantamie";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__profesión";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__tipo_halla";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__victimario";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__causa_pr_1";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__dpto";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__munic";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__cdpto_cmun";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__cab_dpto";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__cdpto";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__fid";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__area1";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__munic25k_";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__munic25k_i";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__poly_";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__subclass";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__subclass_";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__rings_ok";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__rings_nok";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__dpto1";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__munic1";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__cdpto_cmun1";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__cab_dpto1";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__cdpto1";
$tdatahomicidios_sv_2016_Report1[".addFields"][] = "__acres";

$tdatahomicidios_sv_2016_Report1[".masterListFields"] = array();
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "situacion";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "hoja";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__homicidios";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__edad";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__relacion_e";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__sexo";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__relacionad";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__causa_prel";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__circunstan";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__movil";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__tipo_viole";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__relac_vict";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__victima_pa";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__segun";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__pandilla";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__ocupacion_";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__nacionalid";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__depto";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__municipio";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__canton";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__caserio";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__barrio";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__comunidad";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__reparto";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__colonia";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__no";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__calle";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__avenida";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__alameda";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__boulevard";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__pasaje";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__sector_spd";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__tipo_lugar";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__area";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__x";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__y";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__fecha_hech";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__dia";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__mes";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__hora_hecho";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__periodo";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__tipo_arma";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__especifica";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__calibre";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__tipo_delit";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__muertos";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__fecha_leva";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__hora_de_le";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__observacio";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__f50";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__numforma";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__edad1";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__sexo1";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__departamen";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__municipio_";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__canton1";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__caserio1";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__colonia1";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__fechahecho";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__hora";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__minutos";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__tipoarma";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__especifiqu";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__calificaci";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__fecha_de_l";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__departam_1";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__municipi_1";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__conciliaci";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__levantamie";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__profesión";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__tipo_halla";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__victimario";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__causa_pr_1";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__dpto";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__munic";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__cdpto_cmun";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__cab_dpto";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__cdpto";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__fid";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__area1";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__munic25k_";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__munic25k_i";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__poly_";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__subclass";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__subclass_";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__rings_ok";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__rings_nok";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__dpto1";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__munic1";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__cdpto_cmun1";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__cab_dpto1";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__cdpto1";
$tdatahomicidios_sv_2016_Report1[".masterListFields"][] = "__acres";

$tdatahomicidios_sv_2016_Report1[".inlineAddFields"] = array();
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "situacion";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "hoja";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__homicidios";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__edad";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__relacion_e";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__sexo";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__relacionad";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__causa_prel";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__circunstan";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__movil";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__tipo_viole";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__relac_vict";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__victima_pa";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__segun";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__pandilla";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__ocupacion_";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__nacionalid";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__depto";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__municipio";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__canton";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__caserio";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__barrio";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__comunidad";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__reparto";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__colonia";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__no";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__calle";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__avenida";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__alameda";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__boulevard";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__pasaje";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__sector_spd";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__tipo_lugar";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__area";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__x";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__y";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__fecha_hech";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__dia";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__mes";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__hora_hecho";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__periodo";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__tipo_arma";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__especifica";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__calibre";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__tipo_delit";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__muertos";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__fecha_leva";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__hora_de_le";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__observacio";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__f50";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__numforma";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__edad1";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__sexo1";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__departamen";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__municipio_";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__canton1";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__caserio1";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__colonia1";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__fechahecho";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__hora";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__minutos";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__tipoarma";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__especifiqu";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__calificaci";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__fecha_de_l";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__departam_1";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__municipi_1";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__conciliaci";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__levantamie";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__profesión";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__tipo_halla";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__victimario";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__causa_pr_1";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__dpto";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__munic";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__cdpto_cmun";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__cab_dpto";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__cdpto";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__fid";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__area1";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__munic25k_";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__munic25k_i";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__poly_";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__subclass";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__subclass_";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__rings_ok";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__rings_nok";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__dpto1";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__munic1";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__cdpto_cmun1";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__cab_dpto1";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__cdpto1";
$tdatahomicidios_sv_2016_Report1[".inlineAddFields"][] = "__acres";

$tdatahomicidios_sv_2016_Report1[".editFields"] = array();
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "situacion";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "hoja";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__homicidios";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__edad";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__relacion_e";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__sexo";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__relacionad";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__causa_prel";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__circunstan";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__movil";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__tipo_viole";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__relac_vict";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__victima_pa";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__segun";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__pandilla";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__ocupacion_";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__nacionalid";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__depto";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__municipio";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__canton";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__caserio";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__barrio";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__comunidad";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__reparto";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__colonia";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__no";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__calle";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__avenida";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__alameda";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__boulevard";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__pasaje";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__sector_spd";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__tipo_lugar";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__area";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__x";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__y";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__fecha_hech";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__dia";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__mes";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__hora_hecho";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__periodo";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__tipo_arma";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__especifica";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__calibre";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__tipo_delit";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__muertos";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__fecha_leva";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__hora_de_le";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__observacio";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__f50";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__numforma";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__edad1";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__sexo1";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__departamen";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__municipio_";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__canton1";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__caserio1";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__colonia1";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__fechahecho";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__hora";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__minutos";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__tipoarma";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__especifiqu";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__calificaci";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__fecha_de_l";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__departam_1";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__municipi_1";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__conciliaci";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__levantamie";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__profesión";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__tipo_halla";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__victimario";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__causa_pr_1";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__dpto";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__munic";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__cdpto_cmun";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__cab_dpto";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__cdpto";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__fid";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__area1";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__munic25k_";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__munic25k_i";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__poly_";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__subclass";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__subclass_";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__rings_ok";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__rings_nok";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__dpto1";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__munic1";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__cdpto_cmun1";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__cab_dpto1";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__cdpto1";
$tdatahomicidios_sv_2016_Report1[".editFields"][] = "__acres";

$tdatahomicidios_sv_2016_Report1[".inlineEditFields"] = array();
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "situacion";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "hoja";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__homicidios";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__edad";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__relacion_e";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__sexo";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__relacionad";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__causa_prel";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__circunstan";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__movil";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__tipo_viole";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__relac_vict";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__victima_pa";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__segun";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__pandilla";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__ocupacion_";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__nacionalid";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__depto";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__municipio";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__canton";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__caserio";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__barrio";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__comunidad";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__reparto";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__colonia";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__no";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__calle";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__avenida";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__alameda";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__boulevard";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__pasaje";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__sector_spd";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__tipo_lugar";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__area";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__x";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__y";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__fecha_hech";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__dia";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__mes";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__hora_hecho";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__periodo";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__tipo_arma";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__especifica";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__calibre";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__tipo_delit";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__muertos";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__fecha_leva";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__hora_de_le";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__observacio";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__f50";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__numforma";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__edad1";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__sexo1";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__departamen";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__municipio_";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__canton1";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__caserio1";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__colonia1";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__fechahecho";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__hora";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__minutos";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__tipoarma";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__especifiqu";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__calificaci";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__fecha_de_l";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__departam_1";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__municipi_1";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__conciliaci";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__levantamie";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__profesión";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__tipo_halla";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__victimario";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__causa_pr_1";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__dpto";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__munic";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__cdpto_cmun";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__cab_dpto";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__cdpto";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__fid";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__area1";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__munic25k_";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__munic25k_i";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__poly_";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__subclass";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__subclass_";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__rings_ok";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__rings_nok";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__dpto1";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__munic1";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__cdpto_cmun1";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__cab_dpto1";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__cdpto1";
$tdatahomicidios_sv_2016_Report1[".inlineEditFields"][] = "__acres";

$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"] = array();
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "situacion";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "hoja";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__homicidios";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__edad";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__relacion_e";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__sexo";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__relacionad";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__causa_prel";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__circunstan";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__movil";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__tipo_viole";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__relac_vict";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__victima_pa";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__segun";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__pandilla";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__ocupacion_";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__nacionalid";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__depto";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__municipio";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__canton";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__caserio";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__barrio";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__comunidad";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__reparto";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__colonia";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__no";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__calle";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__avenida";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__alameda";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__boulevard";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__pasaje";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__sector_spd";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__tipo_lugar";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__area";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__x";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__y";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__fecha_hech";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__dia";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__mes";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__hora_hecho";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__periodo";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__tipo_arma";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__especifica";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__calibre";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__tipo_delit";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__muertos";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__fecha_leva";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__hora_de_le";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__observacio";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__f50";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__numforma";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__edad1";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__sexo1";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__departamen";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__municipio_";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__canton1";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__caserio1";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__colonia1";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__fechahecho";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__hora";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__minutos";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__tipoarma";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__especifiqu";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__calificaci";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__fecha_de_l";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__departam_1";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__municipi_1";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__conciliaci";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__levantamie";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__profesión";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__tipo_halla";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__victimario";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__causa_pr_1";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__dpto";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__munic";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__cdpto_cmun";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__cab_dpto";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__cdpto";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__fid";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__area1";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__munic25k_";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__munic25k_i";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__poly_";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__subclass";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__subclass_";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__rings_ok";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__rings_nok";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__dpto1";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__munic1";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__cdpto_cmun1";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__cab_dpto1";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__cdpto1";
$tdatahomicidios_sv_2016_Report1[".updateSelectedFields"][] = "__acres";


$tdatahomicidios_sv_2016_Report1[".exportFields"] = array();
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "situacion";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "hoja";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__homicidios";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__edad";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__relacion_e";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__sexo";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__relacionad";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__causa_prel";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__circunstan";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__movil";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__tipo_viole";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__relac_vict";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__victima_pa";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__segun";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__pandilla";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__ocupacion_";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__nacionalid";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__depto";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__municipio";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__canton";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__caserio";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__barrio";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__comunidad";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__reparto";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__colonia";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__no";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__calle";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__avenida";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__alameda";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__boulevard";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__pasaje";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__sector_spd";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__tipo_lugar";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__area";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__x";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__y";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__fecha_hech";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__dia";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__mes";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__hora_hecho";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__periodo";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__tipo_arma";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__especifica";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__calibre";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__tipo_delit";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__muertos";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__fecha_leva";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__hora_de_le";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__observacio";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__f50";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__numforma";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__edad1";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__sexo1";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__departamen";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__municipio_";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__canton1";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__caserio1";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__colonia1";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__fechahecho";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__hora";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__minutos";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__tipoarma";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__especifiqu";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__calificaci";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__fecha_de_l";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__departam_1";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__municipi_1";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__conciliaci";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__levantamie";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__profesión";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__tipo_halla";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__victimario";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__causa_pr_1";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__dpto";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__munic";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__cdpto_cmun";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__cab_dpto";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__cdpto";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__fid";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__area1";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__munic25k_";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__munic25k_i";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__poly_";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__subclass";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__subclass_";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__rings_ok";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__rings_nok";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__dpto1";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__munic1";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__cdpto_cmun1";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__cab_dpto1";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__cdpto1";
$tdatahomicidios_sv_2016_Report1[".exportFields"][] = "__acres";

$tdatahomicidios_sv_2016_Report1[".importFields"] = array();
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "situacion";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "hoja";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__homicidios";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__edad";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__relacion_e";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__sexo";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__relacionad";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__causa_prel";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__circunstan";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__movil";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__tipo_viole";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__relac_vict";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__victima_pa";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__segun";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__pandilla";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__ocupacion_";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__nacionalid";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__depto";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__municipio";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__canton";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__caserio";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__barrio";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__comunidad";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__reparto";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__colonia";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__no";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__calle";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__avenida";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__alameda";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__boulevard";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__pasaje";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__sector_spd";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__tipo_lugar";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__area";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__x";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__y";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__fecha_hech";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__dia";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__mes";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__hora_hecho";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__periodo";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__tipo_arma";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__especifica";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__calibre";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__tipo_delit";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__muertos";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__fecha_leva";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__hora_de_le";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__observacio";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__f50";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__numforma";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__edad1";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__sexo1";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__departamen";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__municipio_";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__canton1";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__caserio1";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__colonia1";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__fechahecho";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__hora";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__minutos";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__tipoarma";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__especifiqu";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__calificaci";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__fecha_de_l";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__departam_1";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__municipi_1";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__conciliaci";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__levantamie";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__profesión";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__tipo_halla";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__victimario";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__causa_pr_1";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__dpto";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__munic";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__cdpto_cmun";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__cab_dpto";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__cdpto";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__fid";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__area1";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__munic25k_";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__munic25k_i";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__poly_";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__subclass";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__subclass_";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__rings_ok";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__rings_nok";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__dpto1";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__munic1";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__cdpto_cmun1";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__cab_dpto1";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__cdpto1";
$tdatahomicidios_sv_2016_Report1[".importFields"][] = "__acres";

$tdatahomicidios_sv_2016_Report1[".printFields"] = array();
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "situacion";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "hoja";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__homicidios";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__edad";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__relacion_e";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__sexo";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__relacionad";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__causa_prel";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__circunstan";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__movil";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__tipo_viole";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__relac_vict";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__victima_pa";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__segun";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__pandilla";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__ocupacion_";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__nacionalid";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__depto";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__municipio";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__canton";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__caserio";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__barrio";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__comunidad";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__reparto";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__colonia";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__no";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__calle";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__avenida";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__alameda";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__boulevard";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__pasaje";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__sector_spd";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__tipo_lugar";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__area";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__x";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__y";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__fecha_hech";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__dia";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__mes";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__hora_hecho";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__periodo";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__tipo_arma";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__especifica";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__calibre";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__tipo_delit";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__muertos";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__fecha_leva";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__hora_de_le";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__observacio";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__f50";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__numforma";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__edad1";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__sexo1";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__departamen";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__municipio_";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__canton1";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__caserio1";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__colonia1";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__fechahecho";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__hora";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__minutos";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__tipoarma";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__especifiqu";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__calificaci";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__fecha_de_l";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__departam_1";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__municipi_1";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__conciliaci";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__levantamie";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__profesión";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__tipo_halla";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__victimario";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__causa_pr_1";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__dpto";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__munic";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__cdpto_cmun";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__cab_dpto";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__cdpto";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__fid";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__area1";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__munic25k_";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__munic25k_i";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__poly_";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__subclass";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__subclass_";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__rings_ok";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__rings_nok";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__dpto1";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__munic1";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__cdpto_cmun1";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__cab_dpto1";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__cdpto1";
$tdatahomicidios_sv_2016_Report1[".printFields"][] = "__acres";

//	situacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "situacion";
	$fdata["GoodName"] = "situacion";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","situacion");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "situacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "situacion";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["situacion"] = $fdata;
//	hoja
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "hoja";
	$fdata["GoodName"] = "hoja";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","hoja");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "hoja";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hoja";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["hoja"] = $fdata;
//	__homicidios
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "__homicidios";
	$fdata["GoodName"] = "__homicidios";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__homicidios");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__homicidios";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__homicidios`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__homicidios"] = $fdata;
//	__edad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "__edad";
	$fdata["GoodName"] = "__edad";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__edad");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__edad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__edad`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__edad"] = $fdata;
//	__relacion_e
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "__relacion_e";
	$fdata["GoodName"] = "__relacion_e";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__relacion_e");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__relacion_e";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__relacion_e`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__relacion_e"] = $fdata;
//	__sexo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "__sexo";
	$fdata["GoodName"] = "__sexo";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__sexo");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__sexo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__sexo`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__sexo"] = $fdata;
//	__relacionad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "__relacionad";
	$fdata["GoodName"] = "__relacionad";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__relacionad");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__relacionad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__relacionad`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__relacionad"] = $fdata;
//	__causa_prel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "__causa_prel";
	$fdata["GoodName"] = "__causa_prel";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__causa_prel");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__causa_prel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__causa_prel`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__causa_prel"] = $fdata;
//	__circunstan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "__circunstan";
	$fdata["GoodName"] = "__circunstan";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__circunstan");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__circunstan";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__circunstan`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__circunstan"] = $fdata;
//	__movil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "__movil";
	$fdata["GoodName"] = "__movil";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__movil");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__movil";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__movil`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__movil"] = $fdata;
//	__tipo_viole
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "__tipo_viole";
	$fdata["GoodName"] = "__tipo_viole";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__tipo_viole");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__tipo_viole";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__tipo_viole`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__tipo_viole"] = $fdata;
//	__relac_vict
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "__relac_vict";
	$fdata["GoodName"] = "__relac_vict";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__relac_vict");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__relac_vict";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__relac_vict`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__relac_vict"] = $fdata;
//	__victima_pa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "__victima_pa";
	$fdata["GoodName"] = "__victima_pa";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__victima_pa");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__victima_pa";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__victima_pa`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__victima_pa"] = $fdata;
//	__segun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "__segun";
	$fdata["GoodName"] = "__segun";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__segun");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__segun";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__segun`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__segun"] = $fdata;
//	__pandilla
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "__pandilla";
	$fdata["GoodName"] = "__pandilla";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__pandilla");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__pandilla";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__pandilla`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__pandilla"] = $fdata;
//	__ocupacion_
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "__ocupacion_";
	$fdata["GoodName"] = "__ocupacion_";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__ocupacion_");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__ocupacion_";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__ocupacion_`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__ocupacion_"] = $fdata;
//	__nacionalid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "__nacionalid";
	$fdata["GoodName"] = "__nacionalid";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__nacionalid");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__nacionalid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__nacionalid`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__nacionalid"] = $fdata;
//	__depto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "__depto";
	$fdata["GoodName"] = "__depto";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__depto");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__depto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__depto`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__depto"] = $fdata;
//	__municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "__municipio";
	$fdata["GoodName"] = "__municipio";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__municipio");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__municipio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__municipio`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__municipio"] = $fdata;
//	__canton
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "__canton";
	$fdata["GoodName"] = "__canton";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__canton");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__canton";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__canton`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__canton"] = $fdata;
//	__caserio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "__caserio";
	$fdata["GoodName"] = "__caserio";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__caserio");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__caserio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__caserio`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__caserio"] = $fdata;
//	__barrio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "__barrio";
	$fdata["GoodName"] = "__barrio";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__barrio");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__barrio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__barrio`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__barrio"] = $fdata;
//	__comunidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "__comunidad";
	$fdata["GoodName"] = "__comunidad";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__comunidad");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__comunidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__comunidad`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__comunidad"] = $fdata;
//	__reparto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "__reparto";
	$fdata["GoodName"] = "__reparto";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__reparto");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__reparto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__reparto`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__reparto"] = $fdata;
//	__colonia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "__colonia";
	$fdata["GoodName"] = "__colonia";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__colonia");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__colonia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__colonia`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__colonia"] = $fdata;
//	__no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "__no";
	$fdata["GoodName"] = "__no";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__no");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__no";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__no`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__no"] = $fdata;
//	__calle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "__calle";
	$fdata["GoodName"] = "__calle";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__calle");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__calle";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__calle`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__calle"] = $fdata;
//	__avenida
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "__avenida";
	$fdata["GoodName"] = "__avenida";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__avenida");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__avenida";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__avenida`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__avenida"] = $fdata;
//	__alameda
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "__alameda";
	$fdata["GoodName"] = "__alameda";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__alameda");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__alameda";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__alameda`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__alameda"] = $fdata;
//	__boulevard
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "__boulevard";
	$fdata["GoodName"] = "__boulevard";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__boulevard");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__boulevard";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__boulevard`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__boulevard"] = $fdata;
//	__pasaje
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "__pasaje";
	$fdata["GoodName"] = "__pasaje";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__pasaje");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__pasaje";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__pasaje`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__pasaje"] = $fdata;
//	__sector_spd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "__sector_spd";
	$fdata["GoodName"] = "__sector_spd";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__sector_spd");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__sector_spd";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__sector_spd`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__sector_spd"] = $fdata;
//	__tipo_lugar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "__tipo_lugar";
	$fdata["GoodName"] = "__tipo_lugar";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__tipo_lugar");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__tipo_lugar";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__tipo_lugar`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__tipo_lugar"] = $fdata;
//	__area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "__area";
	$fdata["GoodName"] = "__area";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__area");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__area";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__area`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__area"] = $fdata;
//	__x
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "__x";
	$fdata["GoodName"] = "__x";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__x");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__x";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__x`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__x"] = $fdata;
//	__y
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "__y";
	$fdata["GoodName"] = "__y";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__y");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__y";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__y`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__y"] = $fdata;
//	__fecha_hech
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "__fecha_hech";
	$fdata["GoodName"] = "__fecha_hech";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__fecha_hech");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__fecha_hech";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__fecha_hech`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__fecha_hech"] = $fdata;
//	__dia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "__dia";
	$fdata["GoodName"] = "__dia";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__dia");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__dia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__dia`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__dia"] = $fdata;
//	__mes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "__mes";
	$fdata["GoodName"] = "__mes";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__mes");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__mes";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__mes`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__mes"] = $fdata;
//	__hora_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "__hora_hecho";
	$fdata["GoodName"] = "__hora_hecho";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__hora_hecho");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__hora_hecho";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__hora_hecho`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__hora_hecho"] = $fdata;
//	__periodo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "__periodo";
	$fdata["GoodName"] = "__periodo";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__periodo");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__periodo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__periodo`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__periodo"] = $fdata;
//	__tipo_arma
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "__tipo_arma";
	$fdata["GoodName"] = "__tipo_arma";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__tipo_arma");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__tipo_arma";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__tipo_arma`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__tipo_arma"] = $fdata;
//	__especifica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "__especifica";
	$fdata["GoodName"] = "__especifica";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__especifica");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__especifica";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__especifica`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__especifica"] = $fdata;
//	__calibre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "__calibre";
	$fdata["GoodName"] = "__calibre";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__calibre");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__calibre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__calibre`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__calibre"] = $fdata;
//	__tipo_delit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "__tipo_delit";
	$fdata["GoodName"] = "__tipo_delit";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__tipo_delit");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__tipo_delit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__tipo_delit`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__tipo_delit"] = $fdata;
//	__muertos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "__muertos";
	$fdata["GoodName"] = "__muertos";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__muertos");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__muertos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__muertos`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__muertos"] = $fdata;
//	__fecha_leva
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "__fecha_leva";
	$fdata["GoodName"] = "__fecha_leva";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__fecha_leva");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__fecha_leva";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__fecha_leva`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__fecha_leva"] = $fdata;
//	__hora_de_le
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "__hora_de_le";
	$fdata["GoodName"] = "__hora_de_le";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__hora_de_le");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__hora_de_le";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__hora_de_le`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__hora_de_le"] = $fdata;
//	__observacio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "__observacio";
	$fdata["GoodName"] = "__observacio";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__observacio");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__observacio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__observacio`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__observacio"] = $fdata;
//	__f50
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "__f50";
	$fdata["GoodName"] = "__f50";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__f50");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__f50";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__f50`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__f50"] = $fdata;
//	__numforma
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "__numforma";
	$fdata["GoodName"] = "__numforma";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__numforma");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__numforma";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__numforma`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__numforma"] = $fdata;
//	__edad1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "__edad1";
	$fdata["GoodName"] = "__edad1";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__edad1");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__edad1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__edad1`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__edad1"] = $fdata;
//	__sexo1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "__sexo1";
	$fdata["GoodName"] = "__sexo1";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__sexo1");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__sexo1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__sexo1`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__sexo1"] = $fdata;
//	__departamen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "__departamen";
	$fdata["GoodName"] = "__departamen";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__departamen");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__departamen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__departamen`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__departamen"] = $fdata;
//	__municipio_
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "__municipio_";
	$fdata["GoodName"] = "__municipio_";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__municipio_");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__municipio_";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__municipio_`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__municipio_"] = $fdata;
//	__canton1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "__canton1";
	$fdata["GoodName"] = "__canton1";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__canton1");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__canton1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__canton1`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__canton1"] = $fdata;
//	__caserio1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "__caserio1";
	$fdata["GoodName"] = "__caserio1";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__caserio1");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__caserio1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__caserio1`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__caserio1"] = $fdata;
//	__colonia1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "__colonia1";
	$fdata["GoodName"] = "__colonia1";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__colonia1");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__colonia1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__colonia1`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__colonia1"] = $fdata;
//	__fechahecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "__fechahecho";
	$fdata["GoodName"] = "__fechahecho";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__fechahecho");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__fechahecho";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__fechahecho`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__fechahecho"] = $fdata;
//	__hora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "__hora";
	$fdata["GoodName"] = "__hora";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__hora");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__hora";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__hora`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__hora"] = $fdata;
//	__minutos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "__minutos";
	$fdata["GoodName"] = "__minutos";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__minutos");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__minutos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__minutos`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__minutos"] = $fdata;
//	__tipoarma
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "__tipoarma";
	$fdata["GoodName"] = "__tipoarma";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__tipoarma");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__tipoarma";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__tipoarma`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__tipoarma"] = $fdata;
//	__especifiqu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "__especifiqu";
	$fdata["GoodName"] = "__especifiqu";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__especifiqu");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__especifiqu";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__especifiqu`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__especifiqu"] = $fdata;
//	__calificaci
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "__calificaci";
	$fdata["GoodName"] = "__calificaci";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__calificaci");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__calificaci";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__calificaci`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__calificaci"] = $fdata;
//	__fecha_de_l
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "__fecha_de_l";
	$fdata["GoodName"] = "__fecha_de_l";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__fecha_de_l");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__fecha_de_l";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__fecha_de_l`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__fecha_de_l"] = $fdata;
//	__departam_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "__departam_1";
	$fdata["GoodName"] = "__departam_1";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__departam_1");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__departam_1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__departam_1`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__departam_1"] = $fdata;
//	__municipi_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "__municipi_1";
	$fdata["GoodName"] = "__municipi_1";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__municipi_1");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__municipi_1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__municipi_1`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__municipi_1"] = $fdata;
//	__conciliaci
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "__conciliaci";
	$fdata["GoodName"] = "__conciliaci";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__conciliaci");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__conciliaci";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__conciliaci`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__conciliaci"] = $fdata;
//	__levantamie
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "__levantamie";
	$fdata["GoodName"] = "__levantamie";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__levantamie");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__levantamie";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__levantamie`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__levantamie"] = $fdata;
//	__profesión
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "__profesión";
	$fdata["GoodName"] = "__profesi_n";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__profesi_n");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__profesión";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__profesión`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__profesión"] = $fdata;
//	__tipo_halla
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 71;
	$fdata["strName"] = "__tipo_halla";
	$fdata["GoodName"] = "__tipo_halla";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__tipo_halla");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__tipo_halla";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__tipo_halla`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__tipo_halla"] = $fdata;
//	__victimario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 72;
	$fdata["strName"] = "__victimario";
	$fdata["GoodName"] = "__victimario";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__victimario");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__victimario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__victimario`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__victimario"] = $fdata;
//	__causa_pr_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 73;
	$fdata["strName"] = "__causa_pr_1";
	$fdata["GoodName"] = "__causa_pr_1";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__causa_pr_1");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__causa_pr_1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__causa_pr_1`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__causa_pr_1"] = $fdata;
//	__dpto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 74;
	$fdata["strName"] = "__dpto";
	$fdata["GoodName"] = "__dpto";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__dpto");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__dpto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__dpto`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__dpto"] = $fdata;
//	__munic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 75;
	$fdata["strName"] = "__munic";
	$fdata["GoodName"] = "__munic";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__munic");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__munic";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__munic`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__munic"] = $fdata;
//	__cdpto_cmun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 76;
	$fdata["strName"] = "__cdpto_cmun";
	$fdata["GoodName"] = "__cdpto_cmun";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__cdpto_cmun");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__cdpto_cmun";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__cdpto_cmun`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__cdpto_cmun"] = $fdata;
//	__cab_dpto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 77;
	$fdata["strName"] = "__cab_dpto";
	$fdata["GoodName"] = "__cab_dpto";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__cab_dpto");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__cab_dpto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__cab_dpto`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__cab_dpto"] = $fdata;
//	__cdpto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 78;
	$fdata["strName"] = "__cdpto";
	$fdata["GoodName"] = "__cdpto";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__cdpto");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__cdpto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__cdpto`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__cdpto"] = $fdata;
//	__fid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 79;
	$fdata["strName"] = "__fid";
	$fdata["GoodName"] = "__fid";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__fid");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__fid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__fid`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__fid"] = $fdata;
//	__area1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 80;
	$fdata["strName"] = "__area1";
	$fdata["GoodName"] = "__area1";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__area1");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__area1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__area1`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__area1"] = $fdata;
//	__munic25k_
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 81;
	$fdata["strName"] = "__munic25k_";
	$fdata["GoodName"] = "__munic25k_";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__munic25k_");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__munic25k_";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__munic25k_`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__munic25k_"] = $fdata;
//	__munic25k_i
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 82;
	$fdata["strName"] = "__munic25k_i";
	$fdata["GoodName"] = "__munic25k_i";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__munic25k_i");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__munic25k_i";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__munic25k_i`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__munic25k_i"] = $fdata;
//	__poly_
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 83;
	$fdata["strName"] = "__poly_";
	$fdata["GoodName"] = "__poly_";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__poly_");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__poly_";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__poly_`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__poly_"] = $fdata;
//	__subclass
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 84;
	$fdata["strName"] = "__subclass";
	$fdata["GoodName"] = "__subclass";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__subclass");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__subclass";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__subclass`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__subclass"] = $fdata;
//	__subclass_
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 85;
	$fdata["strName"] = "__subclass_";
	$fdata["GoodName"] = "__subclass_";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__subclass_");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__subclass_";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__subclass_`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__subclass_"] = $fdata;
//	__rings_ok
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 86;
	$fdata["strName"] = "__rings_ok";
	$fdata["GoodName"] = "__rings_ok";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__rings_ok");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__rings_ok";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__rings_ok`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__rings_ok"] = $fdata;
//	__rings_nok
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 87;
	$fdata["strName"] = "__rings_nok";
	$fdata["GoodName"] = "__rings_nok";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__rings_nok");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__rings_nok";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__rings_nok`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__rings_nok"] = $fdata;
//	__dpto1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 88;
	$fdata["strName"] = "__dpto1";
	$fdata["GoodName"] = "__dpto1";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__dpto1");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__dpto1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__dpto1`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__dpto1"] = $fdata;
//	__munic1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 89;
	$fdata["strName"] = "__munic1";
	$fdata["GoodName"] = "__munic1";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__munic1");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__munic1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__munic1`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__munic1"] = $fdata;
//	__cdpto_cmun1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 90;
	$fdata["strName"] = "__cdpto_cmun1";
	$fdata["GoodName"] = "__cdpto_cmun1";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__cdpto_cmun1");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__cdpto_cmun1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__cdpto_cmun1`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__cdpto_cmun1"] = $fdata;
//	__cab_dpto1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 91;
	$fdata["strName"] = "__cab_dpto1";
	$fdata["GoodName"] = "__cab_dpto1";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__cab_dpto1");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__cab_dpto1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__cab_dpto1`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__cab_dpto1"] = $fdata;
//	__cdpto1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 92;
	$fdata["strName"] = "__cdpto1";
	$fdata["GoodName"] = "__cdpto1";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__cdpto1");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__cdpto1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__cdpto1`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__cdpto1"] = $fdata;
//	__acres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 93;
	$fdata["strName"] = "__acres";
	$fdata["GoodName"] = "__acres";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("homicidios_sv_2016_Report1","__acres");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "__acres";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__acres`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatahomicidios_sv_2016_Report1["__acres"] = $fdata;


$tables_data["homicidios_sv_2016 Report1"]=&$tdatahomicidios_sv_2016_Report1;
$field_labels["homicidios_sv_2016_Report1"] = &$fieldLabelshomicidios_sv_2016_Report1;
$fieldToolTips["homicidios_sv_2016_Report1"] = &$fieldToolTipshomicidios_sv_2016_Report1;
$placeHolders["homicidios_sv_2016_Report1"] = &$placeHoldershomicidios_sv_2016_Report1;
$page_titles["homicidios_sv_2016_Report1"] = &$pageTitleshomicidios_sv_2016_Report1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["homicidios_sv_2016 Report1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["homicidios_sv_2016 Report1"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_homicidios_sv_2016_Report1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "situacion,  	hoja,  	`__homicidios`,  	`__edad`,  	`__relacion_e`,  	`__sexo`,  	`__relacionad`,  	`__causa_prel`,  	`__circunstan`,  	`__movil`,  	`__tipo_viole`,  	`__relac_vict`,  	`__victima_pa`,  	`__segun`,  	`__pandilla`,  	`__ocupacion_`,  	`__nacionalid`,  	`__depto`,  	`__municipio`,  	`__canton`,  	`__caserio`,  	`__barrio`,  	`__comunidad`,  	`__reparto`,  	`__colonia`,  	`__no`,  	`__calle`,  	`__avenida`,  	`__alameda`,  	`__boulevard`,  	`__pasaje`,  	`__sector_spd`,  	`__tipo_lugar`,  	`__area`,  	`__x`,  	`__y`,  	`__fecha_hech`,  	`__dia`,  	`__mes`,  	`__hora_hecho`,  	`__periodo`,  	`__tipo_arma`,  	`__especifica`,  	`__calibre`,  	`__tipo_delit`,  	`__muertos`,  	`__fecha_leva`,  	`__hora_de_le`,  	`__observacio`,  	`__f50`,  	`__numforma`,  	`__edad1`,  	`__sexo1`,  	`__departamen`,  	`__municipio_`,  	`__canton1`,  	`__caserio1`,  	`__colonia1`,  	`__fechahecho`,  	`__hora`,  	`__minutos`,  	`__tipoarma`,  	`__especifiqu`,  	`__calificaci`,  	`__fecha_de_l`,  	`__departam_1`,  	`__municipi_1`,  	`__conciliaci`,  	`__levantamie`,  	`__profesión`,  	`__tipo_halla`,  	`__victimario`,  	`__causa_pr_1`,  	`__dpto`,  	`__munic`,  	`__cdpto_cmun`,  	`__cab_dpto`,  	`__cdpto`,  	`__fid`,  	`__area1`,  	`__munic25k_`,  	`__munic25k_i`,  	`__poly_`,  	`__subclass`,  	`__subclass_`,  	`__rings_ok`,  	`__rings_nok`,  	`__dpto1`,  	`__munic1`,  	`__cdpto_cmun1`,  	`__cab_dpto1`,  	`__cdpto1`,  	`__acres`";
$proto0["m_strFrom"] = "FROM homicidios_sv_2016";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "situacion",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto6["m_sql"] = "situacion";
$proto6["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "hoja",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto8["m_sql"] = "hoja";
$proto8["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "__homicidios",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto10["m_sql"] = "`__homicidios`";
$proto10["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "__edad",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto12["m_sql"] = "`__edad`";
$proto12["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "__relacion_e",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto14["m_sql"] = "`__relacion_e`";
$proto14["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "__sexo",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto16["m_sql"] = "`__sexo`";
$proto16["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "__relacionad",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto18["m_sql"] = "`__relacionad`";
$proto18["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "__causa_prel",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto20["m_sql"] = "`__causa_prel`";
$proto20["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "__circunstan",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto22["m_sql"] = "`__circunstan`";
$proto22["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "__movil",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto24["m_sql"] = "`__movil`";
$proto24["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "__tipo_viole",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto26["m_sql"] = "`__tipo_viole`";
$proto26["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "__relac_vict",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto28["m_sql"] = "`__relac_vict`";
$proto28["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "__victima_pa",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto30["m_sql"] = "`__victima_pa`";
$proto30["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "__segun",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto32["m_sql"] = "`__segun`";
$proto32["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "__pandilla",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto34["m_sql"] = "`__pandilla`";
$proto34["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "__ocupacion_",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto36["m_sql"] = "`__ocupacion_`";
$proto36["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "__nacionalid",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto38["m_sql"] = "`__nacionalid`";
$proto38["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "__depto",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto40["m_sql"] = "`__depto`";
$proto40["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "__municipio",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto42["m_sql"] = "`__municipio`";
$proto42["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "__canton",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto44["m_sql"] = "`__canton`";
$proto44["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "__caserio",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto46["m_sql"] = "`__caserio`";
$proto46["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "__barrio",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto48["m_sql"] = "`__barrio`";
$proto48["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "__comunidad",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto50["m_sql"] = "`__comunidad`";
$proto50["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "__reparto",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto52["m_sql"] = "`__reparto`";
$proto52["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "__colonia",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto54["m_sql"] = "`__colonia`";
$proto54["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "__no",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto56["m_sql"] = "`__no`";
$proto56["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "__calle",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto58["m_sql"] = "`__calle`";
$proto58["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "__avenida",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto60["m_sql"] = "`__avenida`";
$proto60["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "__alameda",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto62["m_sql"] = "`__alameda`";
$proto62["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "__boulevard",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto64["m_sql"] = "`__boulevard`";
$proto64["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "__pasaje",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto66["m_sql"] = "`__pasaje`";
$proto66["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "__sector_spd",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto68["m_sql"] = "`__sector_spd`";
$proto68["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "__tipo_lugar",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto70["m_sql"] = "`__tipo_lugar`";
$proto70["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "__area",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto72["m_sql"] = "`__area`";
$proto72["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "__x",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto74["m_sql"] = "`__x`";
$proto74["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "__y",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto76["m_sql"] = "`__y`";
$proto76["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "__fecha_hech",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto78["m_sql"] = "`__fecha_hech`";
$proto78["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "__dia",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto80["m_sql"] = "`__dia`";
$proto80["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "__mes",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto82["m_sql"] = "`__mes`";
$proto82["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "__hora_hecho",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto84["m_sql"] = "`__hora_hecho`";
$proto84["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "__periodo",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto86["m_sql"] = "`__periodo`";
$proto86["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "__tipo_arma",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto88["m_sql"] = "`__tipo_arma`";
$proto88["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "__especifica",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto90["m_sql"] = "`__especifica`";
$proto90["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "__calibre",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto92["m_sql"] = "`__calibre`";
$proto92["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "__tipo_delit",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto94["m_sql"] = "`__tipo_delit`";
$proto94["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "__muertos",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto96["m_sql"] = "`__muertos`";
$proto96["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "__fecha_leva",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto98["m_sql"] = "`__fecha_leva`";
$proto98["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "__hora_de_le",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto100["m_sql"] = "`__hora_de_le`";
$proto100["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "__observacio",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto102["m_sql"] = "`__observacio`";
$proto102["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "__f50",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto104["m_sql"] = "`__f50`";
$proto104["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "__numforma",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto106["m_sql"] = "`__numforma`";
$proto106["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "__edad1",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto108["m_sql"] = "`__edad1`";
$proto108["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "__sexo1",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto110["m_sql"] = "`__sexo1`";
$proto110["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "__departamen",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto112["m_sql"] = "`__departamen`";
$proto112["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "__municipio_",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto114["m_sql"] = "`__municipio_`";
$proto114["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "__canton1",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto116["m_sql"] = "`__canton1`";
$proto116["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "__caserio1",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto118["m_sql"] = "`__caserio1`";
$proto118["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "__colonia1",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto120["m_sql"] = "`__colonia1`";
$proto120["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "__fechahecho",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto122["m_sql"] = "`__fechahecho`";
$proto122["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "__hora",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto124["m_sql"] = "`__hora`";
$proto124["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "__minutos",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto126["m_sql"] = "`__minutos`";
$proto126["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "__tipoarma",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto128["m_sql"] = "`__tipoarma`";
$proto128["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "__especifiqu",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto130["m_sql"] = "`__especifiqu`";
$proto130["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "__calificaci",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto132["m_sql"] = "`__calificaci`";
$proto132["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "__fecha_de_l",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto134["m_sql"] = "`__fecha_de_l`";
$proto134["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "__departam_1",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto136["m_sql"] = "`__departam_1`";
$proto136["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "__municipi_1",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto138["m_sql"] = "`__municipi_1`";
$proto138["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "__conciliaci",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto140["m_sql"] = "`__conciliaci`";
$proto140["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "__levantamie",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto142["m_sql"] = "`__levantamie`";
$proto142["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto0["m_fieldlist"][]=$obj;
						$proto144=array();
			$obj = new SQLField(array(
	"m_strName" => "__profesión",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto144["m_sql"] = "`__profesión`";
$proto144["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto144["m_expr"]=$obj;
$proto144["m_alias"] = "";
$obj = new SQLFieldListItem($proto144);

$proto0["m_fieldlist"][]=$obj;
						$proto146=array();
			$obj = new SQLField(array(
	"m_strName" => "__tipo_halla",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto146["m_sql"] = "`__tipo_halla`";
$proto146["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto146["m_expr"]=$obj;
$proto146["m_alias"] = "";
$obj = new SQLFieldListItem($proto146);

$proto0["m_fieldlist"][]=$obj;
						$proto148=array();
			$obj = new SQLField(array(
	"m_strName" => "__victimario",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto148["m_sql"] = "`__victimario`";
$proto148["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto148["m_expr"]=$obj;
$proto148["m_alias"] = "";
$obj = new SQLFieldListItem($proto148);

$proto0["m_fieldlist"][]=$obj;
						$proto150=array();
			$obj = new SQLField(array(
	"m_strName" => "__causa_pr_1",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto150["m_sql"] = "`__causa_pr_1`";
$proto150["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto150["m_expr"]=$obj;
$proto150["m_alias"] = "";
$obj = new SQLFieldListItem($proto150);

$proto0["m_fieldlist"][]=$obj;
						$proto152=array();
			$obj = new SQLField(array(
	"m_strName" => "__dpto",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto152["m_sql"] = "`__dpto`";
$proto152["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto152["m_expr"]=$obj;
$proto152["m_alias"] = "";
$obj = new SQLFieldListItem($proto152);

$proto0["m_fieldlist"][]=$obj;
						$proto154=array();
			$obj = new SQLField(array(
	"m_strName" => "__munic",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto154["m_sql"] = "`__munic`";
$proto154["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto154["m_expr"]=$obj;
$proto154["m_alias"] = "";
$obj = new SQLFieldListItem($proto154);

$proto0["m_fieldlist"][]=$obj;
						$proto156=array();
			$obj = new SQLField(array(
	"m_strName" => "__cdpto_cmun",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto156["m_sql"] = "`__cdpto_cmun`";
$proto156["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto156["m_expr"]=$obj;
$proto156["m_alias"] = "";
$obj = new SQLFieldListItem($proto156);

$proto0["m_fieldlist"][]=$obj;
						$proto158=array();
			$obj = new SQLField(array(
	"m_strName" => "__cab_dpto",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto158["m_sql"] = "`__cab_dpto`";
$proto158["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto158["m_expr"]=$obj;
$proto158["m_alias"] = "";
$obj = new SQLFieldListItem($proto158);

$proto0["m_fieldlist"][]=$obj;
						$proto160=array();
			$obj = new SQLField(array(
	"m_strName" => "__cdpto",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto160["m_sql"] = "`__cdpto`";
$proto160["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto160["m_expr"]=$obj;
$proto160["m_alias"] = "";
$obj = new SQLFieldListItem($proto160);

$proto0["m_fieldlist"][]=$obj;
						$proto162=array();
			$obj = new SQLField(array(
	"m_strName" => "__fid",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto162["m_sql"] = "`__fid`";
$proto162["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto162["m_expr"]=$obj;
$proto162["m_alias"] = "";
$obj = new SQLFieldListItem($proto162);

$proto0["m_fieldlist"][]=$obj;
						$proto164=array();
			$obj = new SQLField(array(
	"m_strName" => "__area1",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto164["m_sql"] = "`__area1`";
$proto164["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto164["m_expr"]=$obj;
$proto164["m_alias"] = "";
$obj = new SQLFieldListItem($proto164);

$proto0["m_fieldlist"][]=$obj;
						$proto166=array();
			$obj = new SQLField(array(
	"m_strName" => "__munic25k_",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto166["m_sql"] = "`__munic25k_`";
$proto166["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto166["m_expr"]=$obj;
$proto166["m_alias"] = "";
$obj = new SQLFieldListItem($proto166);

$proto0["m_fieldlist"][]=$obj;
						$proto168=array();
			$obj = new SQLField(array(
	"m_strName" => "__munic25k_i",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto168["m_sql"] = "`__munic25k_i`";
$proto168["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto168["m_expr"]=$obj;
$proto168["m_alias"] = "";
$obj = new SQLFieldListItem($proto168);

$proto0["m_fieldlist"][]=$obj;
						$proto170=array();
			$obj = new SQLField(array(
	"m_strName" => "__poly_",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto170["m_sql"] = "`__poly_`";
$proto170["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto170["m_expr"]=$obj;
$proto170["m_alias"] = "";
$obj = new SQLFieldListItem($proto170);

$proto0["m_fieldlist"][]=$obj;
						$proto172=array();
			$obj = new SQLField(array(
	"m_strName" => "__subclass",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto172["m_sql"] = "`__subclass`";
$proto172["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto172["m_expr"]=$obj;
$proto172["m_alias"] = "";
$obj = new SQLFieldListItem($proto172);

$proto0["m_fieldlist"][]=$obj;
						$proto174=array();
			$obj = new SQLField(array(
	"m_strName" => "__subclass_",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto174["m_sql"] = "`__subclass_`";
$proto174["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto174["m_expr"]=$obj;
$proto174["m_alias"] = "";
$obj = new SQLFieldListItem($proto174);

$proto0["m_fieldlist"][]=$obj;
						$proto176=array();
			$obj = new SQLField(array(
	"m_strName" => "__rings_ok",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto176["m_sql"] = "`__rings_ok`";
$proto176["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto176["m_expr"]=$obj;
$proto176["m_alias"] = "";
$obj = new SQLFieldListItem($proto176);

$proto0["m_fieldlist"][]=$obj;
						$proto178=array();
			$obj = new SQLField(array(
	"m_strName" => "__rings_nok",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto178["m_sql"] = "`__rings_nok`";
$proto178["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto178["m_expr"]=$obj;
$proto178["m_alias"] = "";
$obj = new SQLFieldListItem($proto178);

$proto0["m_fieldlist"][]=$obj;
						$proto180=array();
			$obj = new SQLField(array(
	"m_strName" => "__dpto1",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto180["m_sql"] = "`__dpto1`";
$proto180["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto180["m_expr"]=$obj;
$proto180["m_alias"] = "";
$obj = new SQLFieldListItem($proto180);

$proto0["m_fieldlist"][]=$obj;
						$proto182=array();
			$obj = new SQLField(array(
	"m_strName" => "__munic1",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto182["m_sql"] = "`__munic1`";
$proto182["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto182["m_expr"]=$obj;
$proto182["m_alias"] = "";
$obj = new SQLFieldListItem($proto182);

$proto0["m_fieldlist"][]=$obj;
						$proto184=array();
			$obj = new SQLField(array(
	"m_strName" => "__cdpto_cmun1",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto184["m_sql"] = "`__cdpto_cmun1`";
$proto184["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto184["m_expr"]=$obj;
$proto184["m_alias"] = "";
$obj = new SQLFieldListItem($proto184);

$proto0["m_fieldlist"][]=$obj;
						$proto186=array();
			$obj = new SQLField(array(
	"m_strName" => "__cab_dpto1",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto186["m_sql"] = "`__cab_dpto1`";
$proto186["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto186["m_expr"]=$obj;
$proto186["m_alias"] = "";
$obj = new SQLFieldListItem($proto186);

$proto0["m_fieldlist"][]=$obj;
						$proto188=array();
			$obj = new SQLField(array(
	"m_strName" => "__cdpto1",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto188["m_sql"] = "`__cdpto1`";
$proto188["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto188["m_expr"]=$obj;
$proto188["m_alias"] = "";
$obj = new SQLFieldListItem($proto188);

$proto0["m_fieldlist"][]=$obj;
						$proto190=array();
			$obj = new SQLField(array(
	"m_strName" => "__acres",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "homicidios_sv_2016 Report1"
));

$proto190["m_sql"] = "`__acres`";
$proto190["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto190["m_expr"]=$obj;
$proto190["m_alias"] = "";
$obj = new SQLFieldListItem($proto190);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto192=array();
$proto192["m_link"] = "SQLL_MAIN";
			$proto193=array();
$proto193["m_strName"] = "homicidios_sv_2016";
$proto193["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto193["m_columns"] = array();
$proto193["m_columns"][] = "situacion";
$proto193["m_columns"][] = "hoja";
$proto193["m_columns"][] = "__homicidios";
$proto193["m_columns"][] = "__edad";
$proto193["m_columns"][] = "__relacion_e";
$proto193["m_columns"][] = "__sexo";
$proto193["m_columns"][] = "__relacionad";
$proto193["m_columns"][] = "__causa_prel";
$proto193["m_columns"][] = "__circunstan";
$proto193["m_columns"][] = "__movil";
$proto193["m_columns"][] = "__tipo_viole";
$proto193["m_columns"][] = "__relac_vict";
$proto193["m_columns"][] = "__victima_pa";
$proto193["m_columns"][] = "__segun";
$proto193["m_columns"][] = "__pandilla";
$proto193["m_columns"][] = "__ocupacion_";
$proto193["m_columns"][] = "__nacionalid";
$proto193["m_columns"][] = "__depto";
$proto193["m_columns"][] = "__municipio";
$proto193["m_columns"][] = "__canton";
$proto193["m_columns"][] = "__caserio";
$proto193["m_columns"][] = "__barrio";
$proto193["m_columns"][] = "__comunidad";
$proto193["m_columns"][] = "__reparto";
$proto193["m_columns"][] = "__colonia";
$proto193["m_columns"][] = "__no";
$proto193["m_columns"][] = "__calle";
$proto193["m_columns"][] = "__avenida";
$proto193["m_columns"][] = "__alameda";
$proto193["m_columns"][] = "__boulevard";
$proto193["m_columns"][] = "__pasaje";
$proto193["m_columns"][] = "__sector_spd";
$proto193["m_columns"][] = "__tipo_lugar";
$proto193["m_columns"][] = "__area";
$proto193["m_columns"][] = "__x";
$proto193["m_columns"][] = "__y";
$proto193["m_columns"][] = "__fecha_hech";
$proto193["m_columns"][] = "__dia";
$proto193["m_columns"][] = "__mes";
$proto193["m_columns"][] = "__hora_hecho";
$proto193["m_columns"][] = "__periodo";
$proto193["m_columns"][] = "__tipo_arma";
$proto193["m_columns"][] = "__especifica";
$proto193["m_columns"][] = "__calibre";
$proto193["m_columns"][] = "__tipo_delit";
$proto193["m_columns"][] = "__muertos";
$proto193["m_columns"][] = "__fecha_leva";
$proto193["m_columns"][] = "__hora_de_le";
$proto193["m_columns"][] = "__observacio";
$proto193["m_columns"][] = "__f50";
$proto193["m_columns"][] = "__numforma";
$proto193["m_columns"][] = "__edad1";
$proto193["m_columns"][] = "__sexo1";
$proto193["m_columns"][] = "__departamen";
$proto193["m_columns"][] = "__municipio_";
$proto193["m_columns"][] = "__canton1";
$proto193["m_columns"][] = "__caserio1";
$proto193["m_columns"][] = "__colonia1";
$proto193["m_columns"][] = "__fechahecho";
$proto193["m_columns"][] = "__hora";
$proto193["m_columns"][] = "__minutos";
$proto193["m_columns"][] = "__tipoarma";
$proto193["m_columns"][] = "__especifiqu";
$proto193["m_columns"][] = "__calificaci";
$proto193["m_columns"][] = "__fecha_de_l";
$proto193["m_columns"][] = "__departam_1";
$proto193["m_columns"][] = "__municipi_1";
$proto193["m_columns"][] = "__conciliaci";
$proto193["m_columns"][] = "__levantamie";
$proto193["m_columns"][] = "__profesión";
$proto193["m_columns"][] = "__tipo_halla";
$proto193["m_columns"][] = "__victimario";
$proto193["m_columns"][] = "__causa_pr_1";
$proto193["m_columns"][] = "__dpto";
$proto193["m_columns"][] = "__munic";
$proto193["m_columns"][] = "__cdpto_cmun";
$proto193["m_columns"][] = "__cab_dpto";
$proto193["m_columns"][] = "__cdpto";
$proto193["m_columns"][] = "__fid";
$proto193["m_columns"][] = "__area1";
$proto193["m_columns"][] = "__munic25k_";
$proto193["m_columns"][] = "__munic25k_i";
$proto193["m_columns"][] = "__poly_";
$proto193["m_columns"][] = "__subclass";
$proto193["m_columns"][] = "__subclass_";
$proto193["m_columns"][] = "__rings_ok";
$proto193["m_columns"][] = "__rings_nok";
$proto193["m_columns"][] = "__dpto1";
$proto193["m_columns"][] = "__munic1";
$proto193["m_columns"][] = "__cdpto_cmun1";
$proto193["m_columns"][] = "__cab_dpto1";
$proto193["m_columns"][] = "__cdpto1";
$proto193["m_columns"][] = "__acres";
$obj = new SQLTable($proto193);

$proto192["m_table"] = $obj;
$proto192["m_sql"] = "homicidios_sv_2016";
$proto192["m_alias"] = "";
$proto192["m_srcTableName"] = "homicidios_sv_2016 Report1";
$proto194=array();
$proto194["m_sql"] = "";
$proto194["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto194["m_column"]=$obj;
$proto194["m_contained"] = array();
$proto194["m_strCase"] = "";
$proto194["m_havingmode"] = false;
$proto194["m_inBrackets"] = false;
$proto194["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto194);

$proto192["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto192);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="homicidios_sv_2016 Report1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_homicidios_sv_2016_Report1 = createSqlQuery_homicidios_sv_2016_Report1();


	
		;

																																																																																													

$tdatahomicidios_sv_2016_Report1[".sqlquery"] = $queryData_homicidios_sv_2016_Report1;

$tableEvents["homicidios_sv_2016 Report1"] = new eventsBase;
$tdatahomicidios_sv_2016_Report1[".hasEvents"] = false;

?>