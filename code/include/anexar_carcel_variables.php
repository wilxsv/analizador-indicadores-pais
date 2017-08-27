<?php
$strTableName="anexar_carcel";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="anexar_carcel";

$gstrOrderBy="ORDER BY sector_ppd";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("anexar_carcel");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["anexar_carcel"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>