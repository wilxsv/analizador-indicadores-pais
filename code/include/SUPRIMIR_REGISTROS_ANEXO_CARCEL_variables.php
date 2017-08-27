<?php
$strTableName="SUPRIMIR REGISTROS ANEXO CARCEL";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="anexar_carcel";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("SUPRIMIR REGISTROS ANEXO CARCEL");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["SUPRIMIR REGISTROS ANEXO CARCEL"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>