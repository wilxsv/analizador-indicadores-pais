<?php
$strTableName="Tránsito-Resultado del accidente por rango horario de accidentes";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="transito";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Tránsito-Resultado del accidente por rango horario de accidentes");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Tránsito-Resultado del accidente por rango horario de accidentes"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>