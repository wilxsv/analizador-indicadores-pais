<?php
$strTableName="Personas privadas de libertad por rango etario, segun Sector Estandarizado y pertenecientes a pandillas";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="dgcp";

$gstrOrderBy="ORDER BY carcel.genero DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Personas privadas de libertad por rango etario, segun Sector Estandarizado y pertenecientes a pandillas");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Personas privadas de libertad por rango etario, segun Sector Estandarizado y pertenecientes a pandillas"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>