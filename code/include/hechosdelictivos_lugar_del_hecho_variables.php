<?php
$strTableName="hechosdelictivos_lugar_del_hecho";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="hechos_delictivos1";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("hechosdelictivos_lugar_del_hecho");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["hechosdelictivos_lugar_del_hecho"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>