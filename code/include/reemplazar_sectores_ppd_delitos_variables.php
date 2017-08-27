<?php
$strTableName="reemplazar sectores ppd delitos";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="hechosdelictivos";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("reemplazar sectores ppd delitos");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["reemplazar sectores ppd delitos"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>