<?php
$strTableName="hechosdelictivos";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="hechosdelictivos";

$gstrOrderBy="ORDER BY `aÑo_hecho` DESC, mes_corre";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("hechosdelictivos");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["hechosdelictivos"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>