<?php
$strTableName="homicidios_sv_2016 Report";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="homicidios_sv_2016";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("homicidios_sv_2016 Report");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["homicidios_sv_2016 Report"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>