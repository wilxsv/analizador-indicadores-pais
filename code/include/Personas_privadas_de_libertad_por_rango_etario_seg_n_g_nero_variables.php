<?php
$strTableName="Personas privadas de libertad por rango etario según género";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="dgcp";

$gstrOrderBy="ORDER BY mun_resid, rangoetario DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Personas privadas de libertad por rango etario según género");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Personas privadas de libertad por rango etario según género"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>