<?php
$strTableName="Retornados-Rango etario por antecedentes género masculino";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="retornados";

$gstrOrderBy="ORDER BY rango_etario";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Retornados-Rango etario por antecedentes género masculino");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Retornados-Rango etario por antecedentes género masculino"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>