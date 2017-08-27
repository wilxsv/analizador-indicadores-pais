<?php
$strTableName="Tránsito-Calidad de la víctima por resultado del accidente";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="transito";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Tránsito-Calidad de la víctima por resultado del accidente");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Tránsito-Calidad de la víctima por resultado del accidente"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>