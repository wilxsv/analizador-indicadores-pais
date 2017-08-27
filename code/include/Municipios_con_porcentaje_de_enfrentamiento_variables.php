<?php
$strTableName="Municipios con porcentaje de enfrentamiento";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="homicidios_sv_2016";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Municipios con porcentaje de enfrentamiento");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Municipios con porcentaje de enfrentamiento"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>