<?php
$strTableName="Personas privadas de libertad por rango etario, segun nivel educativo y genero Masculino";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="dgcp";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Personas privadas de libertad por rango etario, segun nivel educativo y genero Masculino");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Personas privadas de libertad por rango etario, segun nivel educativo y genero Masculino"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>