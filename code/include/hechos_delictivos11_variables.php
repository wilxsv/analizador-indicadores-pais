<?php
$strTableName="hechos_delictivos11";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="hechos_delictivos1";

$gstrOrderBy="ORDER BY sector_ppd DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("hechos_delictivos11");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["hechos_delictivos11"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>