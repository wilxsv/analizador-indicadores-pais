<?php
$strTableName="Conteo de delitos por sector estandarizado según Movil";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="hechosdelictivos";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Conteo de delitos por sector estandarizado según Movil");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Conteo de delitos por sector estandarizado según Movil"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>