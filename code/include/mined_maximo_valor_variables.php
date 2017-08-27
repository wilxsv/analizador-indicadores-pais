<?php
$strTableName="mined maximo valor";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="mined";

$gstrOrderBy="ORDER BY ipce_naive DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("mined maximo valor");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["mined maximo valor"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>