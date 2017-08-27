<?php
$strTableName="valor maximo mined 2";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="mined1";

$gstrOrderBy="ORDER BY ipce_naive DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("valor maximo mined 2");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["valor maximo mined 2"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>