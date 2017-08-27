<?php
$strTableName="Muertes PNC enfrentamientos";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="homicidios_sv_2016";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Muertes PNC enfrentamientos");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Muertes PNC enfrentamientos"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>