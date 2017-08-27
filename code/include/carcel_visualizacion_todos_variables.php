<?php
$strTableName="carcel visualizacion todos";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="carcel";

$gstrOrderBy="ORDER BY delitoanalisis DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("carcel visualizacion todos");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["carcel visualizacion todos"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>