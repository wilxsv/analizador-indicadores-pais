<?php
$strTableName="Retornados-Regiones repatriación por meses";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="retornados";

$gstrOrderBy="ORDER BY regionrepatriacion, num_mes";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Retornados-Regiones repatriación por meses");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Retornados-Regiones repatriación por meses"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>