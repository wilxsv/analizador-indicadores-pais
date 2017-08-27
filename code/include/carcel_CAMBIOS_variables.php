<?php
$strTableName="carcel_CAMBIOS";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="carcel";

$gstrOrderBy="ORDER BY carcel.delitoanalisis";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("carcel_CAMBIOS");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["carcel_CAMBIOS"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>