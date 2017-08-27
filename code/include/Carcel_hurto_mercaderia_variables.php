<?php
$strTableName="Carcel_hurto_mercaderia";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="carcel";

$gstrOrderBy="ORDER BY delitoanalisis DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Carcel_hurto_mercaderia");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Carcel_hurto_mercaderia"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>