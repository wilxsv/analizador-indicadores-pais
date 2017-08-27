<?php
$strTableName="Sector PPD por pandilla de afiliacion (prueba)";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="carcel";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Sector PPD por pandilla de afiliacion (prueba)");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Sector PPD por pandilla de afiliacion (prueba)"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>