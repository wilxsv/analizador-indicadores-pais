<?php
$strTableName="reemplazar_sectores_hechosdelictivos";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="hechosdelictivos";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("reemplazar_sectores_hechosdelictivos");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["reemplazar_sectores_hechosdelictivos"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>