<?php
$strTableName="PPL pertenecientes a Pandilla_prueba";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="carcel";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("PPL pertenecientes a Pandilla_prueba");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["PPL pertenecientes a Pandilla_prueba"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>