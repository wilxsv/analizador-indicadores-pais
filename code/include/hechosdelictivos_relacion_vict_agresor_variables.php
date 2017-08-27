<?php
$strTableName="hechosdelictivos_relacion_vict_agresor";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="hechos_delictivos1";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("hechosdelictivos_relacion_vict_agresor");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["hechosdelictivos_relacion_vict_agresor"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>