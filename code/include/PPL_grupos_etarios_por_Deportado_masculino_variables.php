<?php
$strTableName="PPL grupos etarios por Deportado masculino";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="carcel";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("PPL grupos etarios por Deportado masculino");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["PPL grupos etarios por Deportado masculino"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>