<?php
$strTableName="Hechos delictivos dia del hecho";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="hechos_delictivos1";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Hechos delictivos dia del hecho");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Hechos delictivos dia del hecho"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>