<?php
$strTableName="Retornados-Consulados por año";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="retornados";

$gstrOrderBy="ORDER BY regionrepatriacion";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Retornados-Consulados por año");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Retornados-Consulados por año"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>