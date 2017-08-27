<?php
$strTableName="PPL Grupos etarios por afiliación a Pandillas femenino";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="carcel";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("PPL Grupos etarios por afiliación a Pandillas femenino");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["PPL Grupos etarios por afiliación a Pandillas femenino"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>