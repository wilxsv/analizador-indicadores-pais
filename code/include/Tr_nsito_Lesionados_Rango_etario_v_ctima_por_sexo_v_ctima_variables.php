<?php
$strTableName="Tránsito-Lesionados Rango etario víctima por sexo víctima";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="transito";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Tránsito-Lesionados Rango etario víctima por sexo víctima");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Tránsito-Lesionados Rango etario víctima por sexo víctima"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>