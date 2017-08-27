<?php
$strTableName="Grupo etarios por estado civil (masculino)";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="carcel";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Grupo etarios por estado civil (masculino)");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Grupo etarios por estado civil (masculino)"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>