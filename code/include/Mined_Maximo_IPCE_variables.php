<?php
$strTableName="Mined_Maximo IPCE";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="mined";

$gstrOrderBy="ORDER BY ipce_0_1 DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Mined_Maximo IPCE");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Mined_Maximo IPCE"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>