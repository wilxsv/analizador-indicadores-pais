<?php
$strTableName="Delitos Sexuales  por rango etarios, según sexo victima";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="hechosdelictivos";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Delitos Sexuales  por rango etarios, según sexo victima");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Delitos Sexuales  por rango etarios, según sexo victima"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>