<?php
$strTableName="Ocupación de la víctima por Delitos";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="hechosdelictivos";

$gstrOrderBy="ORDER BY ocupa_analisis DESC, sector_ppd DESC, `aÑo_hecho` DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Ocupación de la víctima por Delitos");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Ocupación de la víctima por Delitos"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>