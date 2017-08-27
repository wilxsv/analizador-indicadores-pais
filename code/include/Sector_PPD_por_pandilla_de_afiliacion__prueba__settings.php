<?php
require_once(getabspath("classes/cipherer.php"));




$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_ = array();
	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".truncateText"] = true;
	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".NumberOfChars"] = 80;
	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".ShortName"] = "Sector_PPD_por_pandilla_de_afiliacion__prueba_";
	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".OwnerID"] = "";
	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".OriginalTable"] = "carcel";

//	field labels
$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_ = array();
$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_ = array();
$pageTitlesSector_PPD_por_pandilla_de_afiliacion__prueba_ = array();
$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_ = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"] = array();
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"] = array();
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"] = array();
	$pageTitlesSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"] = array();
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["org_delictiva"] = "Org Delictiva";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["org_delictiva"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["org_delictiva"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["tipo_mara"] = "Tipo Mara";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["tipo_mara"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["tipo_mara"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["id"] = "Id";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["id"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["id"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["sipe"] = "Sipe";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["sipe"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["sipe"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["afis"] = "Afis";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["afis"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["afis"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["edad"] = "Edad";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["edad"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["edad"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["rangoetario"] = "Rangoetario";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["rangoetario"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["rangoetario"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["genero"] = "Genero";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["genero"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["genero"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["fecha_nac"] = "Fecha Nac";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["fecha_nac"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["fecha_nac"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["edad1"] = "Edad1";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["edad1"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["edad1"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["dui"] = "Dui";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["dui"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["dui"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["nivel_edu"] = "Nivel Edu";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["nivel_edu"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["nivel_edu"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["educacionanalisis"] = "Educacionanalisis";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["educacionanalisis"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["educacionanalisis"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["profesion_oficio"] = "Profesion Oficio";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["profesion_oficio"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["profesion_oficio"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["estado_civil"] = "Estado Civil";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["estado_civil"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["estado_civil"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["ciudadania"] = "Ciudadania";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["ciudadania"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["ciudadania"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["mun_nacimiento"] = "Mun Nacimiento";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["mun_nacimiento"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["mun_nacimiento"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["depto_nacim"] = "Depto Nacim";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["depto_nacim"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["depto_nacim"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["direccion"] = "Direccion";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["direccion"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["direccion"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["mun_resid"] = "Mun Resid";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["mun_resid"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["mun_resid"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["depart_resid"] = "Depart Resid";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["depart_resid"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["depart_resid"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["delitosanalisis"] = "Delitosanalisis";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["delitosanalisis"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["delitosanalisis"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["sj_interno"] = "Sj Interno";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["sj_interno"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["sj_interno"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["fase"] = "Fase";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["fase"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["fase"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["reincidente"] = "Reincidente";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["reincidente"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["reincidente"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["deportado"] = "Deportado";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["deportado"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["deportado"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["direccion1"] = "Direccion1";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["direccion1"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["direccion1"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["sector"] = "Sector";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["sector"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["sector"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["celda"] = "Celda";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["celda"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["celda"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["fecha_ing__sp"] = "Fecha Ing  Sp";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["fecha_ing__sp"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["fecha_ing__sp"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["libro"] = "Libro";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["libro"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["libro"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["fecha_ing__cp"] = "Fecha Ing  Cp";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["fecha_ing__cp"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["fecha_ing__cp"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["total_delitos"] = "Total Delitos";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["total_delitos"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["total_delitos"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["delitos"] = "Delitos";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["delitos"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["delitos"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["delitoanalisis"] = "Delitoanalisis";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["delitoanalisis"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["delitoanalisis"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["sector_ppd"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]["sector_ppd"] = "";
	if (count($fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["Spanish"]))
		$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"] = array();
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"] = array();
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["English"] = array();
	$pageTitlesSector_PPD_por_pandilla_de_afiliacion__prueba_["English"] = array();
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["org_delictiva"] = "Org Delictiva";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["org_delictiva"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["org_delictiva"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["tipo_mara"] = "Tipo Mara";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["tipo_mara"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["tipo_mara"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["id"] = "Id";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["id"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["id"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["sipe"] = "Sipe";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["sipe"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["sipe"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["afis"] = "Afis";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["afis"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["afis"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["edad"] = "Edad";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["edad"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["edad"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["rangoetario"] = "Rangoetario";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["rangoetario"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["rangoetario"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["genero"] = "Genero";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["genero"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["genero"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["fecha_nac"] = "Fecha Nac";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["fecha_nac"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["fecha_nac"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["edad1"] = "Edad1";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["edad1"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["edad1"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["dui"] = "Dui";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["dui"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["dui"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["nivel_edu"] = "Nivel Edu";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["nivel_edu"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["nivel_edu"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["educacionanalisis"] = "Educacionanalisis";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["educacionanalisis"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["educacionanalisis"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["profesion_oficio"] = "Profesion Oficio";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["profesion_oficio"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["profesion_oficio"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["estado_civil"] = "Estado Civil";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["estado_civil"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["estado_civil"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["ciudadania"] = "Ciudadania";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["ciudadania"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["ciudadania"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["mun_nacimiento"] = "Mun Nacimiento";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["mun_nacimiento"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["mun_nacimiento"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["depto_nacim"] = "Depto Nacim";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["depto_nacim"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["depto_nacim"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["direccion"] = "Direccion";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["direccion"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["direccion"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["mun_resid"] = "Mun Resid";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["mun_resid"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["mun_resid"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["depart_resid"] = "Depart Resid";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["depart_resid"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["depart_resid"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["delitosanalisis"] = "Delitosanalisis";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["delitosanalisis"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["delitosanalisis"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["sj_interno"] = "Sj Interno";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["sj_interno"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["sj_interno"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["fase"] = "Fase";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["fase"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["fase"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["reincidente"] = "Reincidente";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["reincidente"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["reincidente"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["deportado"] = "Deportado";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["deportado"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["deportado"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["direccion1"] = "Direccion1";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["direccion1"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["direccion1"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["sector"] = "Sector";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["sector"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["sector"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["celda"] = "Celda";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["celda"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["celda"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["fecha_ing__sp"] = "Fecha Ing  Sp";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["fecha_ing__sp"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["fecha_ing__sp"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["libro"] = "Libro";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["libro"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["libro"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["fecha_ing__cp"] = "Fecha Ing  Cp";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["fecha_ing__cp"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["fecha_ing__cp"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["total_delitos"] = "Total Delitos";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["total_delitos"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["total_delitos"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["delitos"] = "Delitos";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["delitos"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["delitos"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["delitoanalisis"] = "Delitoanalisis";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["delitoanalisis"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["delitoanalisis"] = "";
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["sector_ppd"] = "";
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]["sector_ppd"] = "";
	if (count($fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_["English"]))
		$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_[""] = array();
	$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_[""] = array();
	$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_[""] = array();
	$pageTitlesSector_PPD_por_pandilla_de_afiliacion__prueba_[""] = array();
	if (count($fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_[""]))
		$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".isUseToolTips"] = true;
}





$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".shortTableName"] = "Sector_PPD_por_pandilla_de_afiliacion__prueba_";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".nSecOptions"] = 0;
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".recsPerRowPrint"] = 1;
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".mainTableOwnerID"] = "";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".moveNext"] = 1;
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".entityType"] = 2;

$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".strOriginalTableName"] = "carcel";

	



$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".showAddInPopup"] = false;

$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".showEditInPopup"] = false;

$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".fieldsForRegister"] = array();

$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".listAjax"] = false;

	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".audit"] = false;

	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".locking"] = false;



$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".list"] = true;



$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".reorderRecordsByHeader"] = true;





$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".exportTo"] = true;

$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".printFriendly"] = true;


$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".searchSaving"] = false;
//

$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".showSearchPanel"] = true;
		$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".flexibleSearch"] = true;

$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".isUseAjaxSuggest"] = true;






$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".ajaxCodeSnippetAdded"] = false;

$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".buttonsAdded"] = false;

$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".addPageEvents"] = false;

// use timepicker for search panel
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".isUseTimeForSearch"] = false;





$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".allSearchFields"] = array();
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".filterFields"] = array();
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".requiredSearchFields"] = array();

$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".allSearchFields"][] = "id";
	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".allSearchFields"][] = "sipe";
	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".allSearchFields"][] = "afis";
	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".allSearchFields"][] = "edad";
	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".allSearchFields"][] = "rangoetario";
	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".allSearchFields"][] = "genero";
	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".allSearchFields"][] = "fecha_nac";
	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".allSearchFields"][] = "edad1";
	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".allSearchFields"][] = "dui";
	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".allSearchFields"][] = "nivel_edu";
	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".allSearchFields"][] = "educacionanalisis";
	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".allSearchFields"][] = "profesion_oficio";
	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".allSearchFields"][] = "estado_civil";
	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".allSearchFields"][] = "ciudadania";
	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".allSearchFields"][] = "mun_nacimiento";
	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".allSearchFields"][] = "depto_nacim";
	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".allSearchFields"][] = "direccion";
	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".allSearchFields"][] = "mun_resid";
	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".allSearchFields"][] = "depart_resid";
	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".allSearchFields"][] = "delitosanalisis";
	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".allSearchFields"][] = "sj_interno";
	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".allSearchFields"][] = "fase";
	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".allSearchFields"][] = "org_delictiva";
	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".allSearchFields"][] = "tipo_mara";
	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".allSearchFields"][] = "reincidente";
	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".allSearchFields"][] = "deportado";
	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".allSearchFields"][] = "direccion1";
	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".allSearchFields"][] = "sector";
	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".allSearchFields"][] = "celda";
	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".allSearchFields"][] = "fecha_ing__sp";
	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".allSearchFields"][] = "libro";
	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".allSearchFields"][] = "fecha_ing__cp";
	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".allSearchFields"][] = "total_delitos";
	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".allSearchFields"][] = "delitos";
	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".allSearchFields"][] = "delitoanalisis";
	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".allSearchFields"][] = "sector_ppd";
	

$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".googleLikeFields"] = array();
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".googleLikeFields"][] = "id";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".googleLikeFields"][] = "sipe";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".googleLikeFields"][] = "afis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".googleLikeFields"][] = "edad";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".googleLikeFields"][] = "rangoetario";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".googleLikeFields"][] = "genero";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".googleLikeFields"][] = "fecha_nac";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".googleLikeFields"][] = "edad1";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".googleLikeFields"][] = "dui";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".googleLikeFields"][] = "nivel_edu";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".googleLikeFields"][] = "educacionanalisis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".googleLikeFields"][] = "profesion_oficio";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".googleLikeFields"][] = "estado_civil";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".googleLikeFields"][] = "ciudadania";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".googleLikeFields"][] = "mun_nacimiento";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".googleLikeFields"][] = "depto_nacim";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".googleLikeFields"][] = "direccion";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".googleLikeFields"][] = "mun_resid";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".googleLikeFields"][] = "depart_resid";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".googleLikeFields"][] = "delitosanalisis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".googleLikeFields"][] = "sj_interno";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".googleLikeFields"][] = "fase";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".googleLikeFields"][] = "org_delictiva";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".googleLikeFields"][] = "tipo_mara";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".googleLikeFields"][] = "reincidente";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".googleLikeFields"][] = "deportado";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".googleLikeFields"][] = "direccion1";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".googleLikeFields"][] = "sector";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".googleLikeFields"][] = "celda";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".googleLikeFields"][] = "fecha_ing__sp";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".googleLikeFields"][] = "libro";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".googleLikeFields"][] = "fecha_ing__cp";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".googleLikeFields"][] = "total_delitos";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".googleLikeFields"][] = "delitos";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".googleLikeFields"][] = "delitoanalisis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".googleLikeFields"][] = "sector_ppd";


$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".advSearchFields"] = array();
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".advSearchFields"][] = "id";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".advSearchFields"][] = "sipe";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".advSearchFields"][] = "afis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".advSearchFields"][] = "edad";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".advSearchFields"][] = "rangoetario";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".advSearchFields"][] = "genero";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".advSearchFields"][] = "fecha_nac";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".advSearchFields"][] = "edad1";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".advSearchFields"][] = "dui";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".advSearchFields"][] = "nivel_edu";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".advSearchFields"][] = "educacionanalisis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".advSearchFields"][] = "profesion_oficio";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".advSearchFields"][] = "estado_civil";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".advSearchFields"][] = "ciudadania";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".advSearchFields"][] = "mun_nacimiento";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".advSearchFields"][] = "depto_nacim";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".advSearchFields"][] = "direccion";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".advSearchFields"][] = "mun_resid";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".advSearchFields"][] = "depart_resid";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".advSearchFields"][] = "delitosanalisis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".advSearchFields"][] = "sj_interno";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".advSearchFields"][] = "fase";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".advSearchFields"][] = "org_delictiva";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".advSearchFields"][] = "tipo_mara";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".advSearchFields"][] = "reincidente";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".advSearchFields"][] = "deportado";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".advSearchFields"][] = "direccion1";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".advSearchFields"][] = "sector";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".advSearchFields"][] = "celda";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".advSearchFields"][] = "fecha_ing__sp";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".advSearchFields"][] = "libro";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".advSearchFields"][] = "fecha_ing__cp";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".advSearchFields"][] = "total_delitos";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".advSearchFields"][] = "delitos";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".advSearchFields"][] = "delitoanalisis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".advSearchFields"][] = "sector_ppd";

$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".tableType"] = "report";

$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".printerPageOrientation"] = 0;
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".nPrinterPageScale"] = 100;

$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".nPrinterSplitRecords"] = 40;

$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".nPrinterPDFSplitRecords"] = 40;



$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".geocodingEnabled"] = false;

//report settings
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".crossTabReport"] = true;

$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".reportGroupFields"] = true;
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".pageSize"] = 5;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "org_delictiva";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "COUNT(org_delictiva)";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "1";
	$reportGroupFields[] = $rgroupField;
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".reportGroupFieldsData"] = $reportGroupFields;






$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".repShowDet"] = true;

$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".reportLayout"] = 6;

//end of report settings




$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".listGridLayout"] = 3;

$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".isDisplayLoading"] = true;




// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".strOrderBy"] = $tstrOrderBy;

$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".orderindexes"] = array();

$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".sqlHead"] = "SELECT id,  	sipe,  	afis,  	edad,  	rangoetario,  	genero,  	fecha_nac,  	edad1,  	dui,  	nivel_edu,  	educacionanalisis,  	profesion_oficio,  	estado_civil,  	ciudadania,  	mun_nacimiento,  	depto_nacim,  	direccion,  	mun_resid,  	depart_resid,  	delitosanalisis,  	sj_interno,  	fase,  	org_delictiva,  	tipo_mara,  	reincidente,  	deportado,  	direccion1,  	sector,  	celda,  	fecha_ing__sp,  	libro,  	fecha_ing__cp,  	total_delitos,  	delitos,  	delitoanalisis,  	sector_ppd";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".sqlFrom"] = "FROM carcel";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".sqlWhereExpr"] = "";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".arrGroupsPerPage"] = $arrGPP;

$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".highlightSearchResults"] = true;

$tableKeysSector_PPD_por_pandilla_de_afiliacion__prueba_ = array();
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".Keys"] = $tableKeysSector_PPD_por_pandilla_de_afiliacion__prueba_;

$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".listFields"] = array();
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".listFields"][] = "id";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".listFields"][] = "sipe";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".listFields"][] = "afis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".listFields"][] = "edad";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".listFields"][] = "rangoetario";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".listFields"][] = "genero";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".listFields"][] = "fecha_nac";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".listFields"][] = "edad1";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".listFields"][] = "dui";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".listFields"][] = "nivel_edu";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".listFields"][] = "educacionanalisis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".listFields"][] = "profesion_oficio";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".listFields"][] = "estado_civil";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".listFields"][] = "ciudadania";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".listFields"][] = "mun_nacimiento";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".listFields"][] = "depto_nacim";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".listFields"][] = "direccion";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".listFields"][] = "mun_resid";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".listFields"][] = "depart_resid";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".listFields"][] = "delitosanalisis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".listFields"][] = "sj_interno";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".listFields"][] = "fase";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".listFields"][] = "org_delictiva";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".listFields"][] = "tipo_mara";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".listFields"][] = "reincidente";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".listFields"][] = "deportado";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".listFields"][] = "direccion1";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".listFields"][] = "sector";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".listFields"][] = "celda";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".listFields"][] = "fecha_ing__sp";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".listFields"][] = "libro";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".listFields"][] = "fecha_ing__cp";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".listFields"][] = "total_delitos";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".listFields"][] = "delitos";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".listFields"][] = "delitoanalisis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".listFields"][] = "sector_ppd";

$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".hideMobileList"] = array();


$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".viewFields"] = array();
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".viewFields"][] = "id";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".viewFields"][] = "sipe";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".viewFields"][] = "afis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".viewFields"][] = "edad";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".viewFields"][] = "rangoetario";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".viewFields"][] = "genero";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".viewFields"][] = "fecha_nac";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".viewFields"][] = "edad1";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".viewFields"][] = "dui";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".viewFields"][] = "nivel_edu";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".viewFields"][] = "educacionanalisis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".viewFields"][] = "profesion_oficio";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".viewFields"][] = "estado_civil";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".viewFields"][] = "ciudadania";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".viewFields"][] = "mun_nacimiento";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".viewFields"][] = "depto_nacim";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".viewFields"][] = "direccion";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".viewFields"][] = "mun_resid";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".viewFields"][] = "depart_resid";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".viewFields"][] = "delitosanalisis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".viewFields"][] = "sj_interno";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".viewFields"][] = "fase";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".viewFields"][] = "org_delictiva";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".viewFields"][] = "tipo_mara";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".viewFields"][] = "reincidente";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".viewFields"][] = "deportado";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".viewFields"][] = "direccion1";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".viewFields"][] = "sector";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".viewFields"][] = "celda";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".viewFields"][] = "fecha_ing__sp";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".viewFields"][] = "libro";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".viewFields"][] = "fecha_ing__cp";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".viewFields"][] = "total_delitos";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".viewFields"][] = "delitos";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".viewFields"][] = "delitoanalisis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".viewFields"][] = "sector_ppd";

$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".addFields"] = array();
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".addFields"][] = "id";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".addFields"][] = "sipe";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".addFields"][] = "afis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".addFields"][] = "edad";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".addFields"][] = "rangoetario";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".addFields"][] = "genero";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".addFields"][] = "fecha_nac";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".addFields"][] = "edad1";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".addFields"][] = "dui";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".addFields"][] = "nivel_edu";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".addFields"][] = "educacionanalisis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".addFields"][] = "profesion_oficio";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".addFields"][] = "estado_civil";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".addFields"][] = "ciudadania";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".addFields"][] = "mun_nacimiento";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".addFields"][] = "depto_nacim";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".addFields"][] = "direccion";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".addFields"][] = "mun_resid";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".addFields"][] = "depart_resid";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".addFields"][] = "delitosanalisis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".addFields"][] = "sj_interno";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".addFields"][] = "fase";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".addFields"][] = "org_delictiva";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".addFields"][] = "tipo_mara";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".addFields"][] = "reincidente";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".addFields"][] = "deportado";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".addFields"][] = "direccion1";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".addFields"][] = "sector";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".addFields"][] = "celda";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".addFields"][] = "fecha_ing__sp";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".addFields"][] = "libro";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".addFields"][] = "fecha_ing__cp";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".addFields"][] = "total_delitos";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".addFields"][] = "delitos";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".addFields"][] = "delitoanalisis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".addFields"][] = "sector_ppd";

$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".masterListFields"] = array();
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".masterListFields"][] = "id";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".masterListFields"][] = "sipe";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".masterListFields"][] = "afis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".masterListFields"][] = "edad";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".masterListFields"][] = "rangoetario";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".masterListFields"][] = "genero";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".masterListFields"][] = "fecha_nac";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".masterListFields"][] = "edad1";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".masterListFields"][] = "dui";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".masterListFields"][] = "nivel_edu";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".masterListFields"][] = "educacionanalisis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".masterListFields"][] = "profesion_oficio";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".masterListFields"][] = "estado_civil";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".masterListFields"][] = "ciudadania";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".masterListFields"][] = "mun_nacimiento";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".masterListFields"][] = "depto_nacim";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".masterListFields"][] = "direccion";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".masterListFields"][] = "mun_resid";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".masterListFields"][] = "depart_resid";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".masterListFields"][] = "delitosanalisis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".masterListFields"][] = "sj_interno";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".masterListFields"][] = "fase";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".masterListFields"][] = "org_delictiva";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".masterListFields"][] = "tipo_mara";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".masterListFields"][] = "reincidente";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".masterListFields"][] = "deportado";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".masterListFields"][] = "direccion1";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".masterListFields"][] = "sector";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".masterListFields"][] = "celda";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".masterListFields"][] = "fecha_ing__sp";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".masterListFields"][] = "libro";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".masterListFields"][] = "fecha_ing__cp";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".masterListFields"][] = "total_delitos";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".masterListFields"][] = "delitos";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".masterListFields"][] = "delitoanalisis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".masterListFields"][] = "sector_ppd";

$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineAddFields"] = array();
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineAddFields"][] = "id";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineAddFields"][] = "sipe";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineAddFields"][] = "afis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineAddFields"][] = "edad";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineAddFields"][] = "rangoetario";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineAddFields"][] = "genero";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineAddFields"][] = "fecha_nac";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineAddFields"][] = "edad1";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineAddFields"][] = "dui";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineAddFields"][] = "nivel_edu";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineAddFields"][] = "educacionanalisis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineAddFields"][] = "profesion_oficio";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineAddFields"][] = "estado_civil";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineAddFields"][] = "ciudadania";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineAddFields"][] = "mun_nacimiento";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineAddFields"][] = "depto_nacim";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineAddFields"][] = "direccion";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineAddFields"][] = "mun_resid";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineAddFields"][] = "depart_resid";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineAddFields"][] = "delitosanalisis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineAddFields"][] = "sj_interno";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineAddFields"][] = "fase";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineAddFields"][] = "org_delictiva";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineAddFields"][] = "tipo_mara";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineAddFields"][] = "reincidente";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineAddFields"][] = "deportado";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineAddFields"][] = "direccion1";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineAddFields"][] = "sector";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineAddFields"][] = "celda";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineAddFields"][] = "fecha_ing__sp";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineAddFields"][] = "libro";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineAddFields"][] = "fecha_ing__cp";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineAddFields"][] = "total_delitos";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineAddFields"][] = "delitos";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineAddFields"][] = "delitoanalisis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineAddFields"][] = "sector_ppd";

$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".editFields"] = array();
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".editFields"][] = "id";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".editFields"][] = "sipe";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".editFields"][] = "afis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".editFields"][] = "edad";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".editFields"][] = "rangoetario";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".editFields"][] = "genero";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".editFields"][] = "fecha_nac";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".editFields"][] = "edad1";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".editFields"][] = "dui";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".editFields"][] = "nivel_edu";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".editFields"][] = "educacionanalisis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".editFields"][] = "profesion_oficio";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".editFields"][] = "estado_civil";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".editFields"][] = "ciudadania";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".editFields"][] = "mun_nacimiento";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".editFields"][] = "depto_nacim";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".editFields"][] = "direccion";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".editFields"][] = "mun_resid";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".editFields"][] = "depart_resid";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".editFields"][] = "delitosanalisis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".editFields"][] = "sj_interno";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".editFields"][] = "fase";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".editFields"][] = "org_delictiva";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".editFields"][] = "tipo_mara";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".editFields"][] = "reincidente";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".editFields"][] = "deportado";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".editFields"][] = "direccion1";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".editFields"][] = "sector";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".editFields"][] = "celda";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".editFields"][] = "fecha_ing__sp";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".editFields"][] = "libro";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".editFields"][] = "fecha_ing__cp";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".editFields"][] = "total_delitos";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".editFields"][] = "delitos";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".editFields"][] = "delitoanalisis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".editFields"][] = "sector_ppd";

$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineEditFields"] = array();
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineEditFields"][] = "id";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineEditFields"][] = "sipe";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineEditFields"][] = "afis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineEditFields"][] = "edad";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineEditFields"][] = "rangoetario";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineEditFields"][] = "genero";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineEditFields"][] = "fecha_nac";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineEditFields"][] = "edad1";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineEditFields"][] = "dui";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineEditFields"][] = "nivel_edu";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineEditFields"][] = "educacionanalisis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineEditFields"][] = "profesion_oficio";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineEditFields"][] = "estado_civil";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineEditFields"][] = "ciudadania";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineEditFields"][] = "mun_nacimiento";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineEditFields"][] = "depto_nacim";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineEditFields"][] = "direccion";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineEditFields"][] = "mun_resid";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineEditFields"][] = "depart_resid";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineEditFields"][] = "delitosanalisis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineEditFields"][] = "sj_interno";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineEditFields"][] = "fase";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineEditFields"][] = "org_delictiva";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineEditFields"][] = "tipo_mara";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineEditFields"][] = "reincidente";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineEditFields"][] = "deportado";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineEditFields"][] = "direccion1";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineEditFields"][] = "sector";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineEditFields"][] = "celda";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineEditFields"][] = "fecha_ing__sp";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineEditFields"][] = "libro";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineEditFields"][] = "fecha_ing__cp";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineEditFields"][] = "total_delitos";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineEditFields"][] = "delitos";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineEditFields"][] = "delitoanalisis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".inlineEditFields"][] = "sector_ppd";

$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".updateSelectedFields"] = array();
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".updateSelectedFields"][] = "id";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".updateSelectedFields"][] = "sipe";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".updateSelectedFields"][] = "afis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".updateSelectedFields"][] = "edad";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".updateSelectedFields"][] = "rangoetario";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".updateSelectedFields"][] = "genero";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".updateSelectedFields"][] = "fecha_nac";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".updateSelectedFields"][] = "edad1";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".updateSelectedFields"][] = "dui";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".updateSelectedFields"][] = "nivel_edu";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".updateSelectedFields"][] = "educacionanalisis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".updateSelectedFields"][] = "profesion_oficio";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".updateSelectedFields"][] = "estado_civil";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".updateSelectedFields"][] = "ciudadania";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".updateSelectedFields"][] = "mun_nacimiento";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".updateSelectedFields"][] = "depto_nacim";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".updateSelectedFields"][] = "direccion";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".updateSelectedFields"][] = "mun_resid";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".updateSelectedFields"][] = "depart_resid";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".updateSelectedFields"][] = "delitosanalisis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".updateSelectedFields"][] = "sj_interno";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".updateSelectedFields"][] = "fase";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".updateSelectedFields"][] = "org_delictiva";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".updateSelectedFields"][] = "tipo_mara";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".updateSelectedFields"][] = "reincidente";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".updateSelectedFields"][] = "deportado";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".updateSelectedFields"][] = "direccion1";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".updateSelectedFields"][] = "sector";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".updateSelectedFields"][] = "celda";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".updateSelectedFields"][] = "fecha_ing__sp";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".updateSelectedFields"][] = "libro";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".updateSelectedFields"][] = "fecha_ing__cp";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".updateSelectedFields"][] = "total_delitos";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".updateSelectedFields"][] = "delitos";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".updateSelectedFields"][] = "delitoanalisis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".updateSelectedFields"][] = "sector_ppd";


$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".exportFields"] = array();
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".exportFields"][] = "id";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".exportFields"][] = "sipe";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".exportFields"][] = "afis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".exportFields"][] = "edad";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".exportFields"][] = "rangoetario";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".exportFields"][] = "genero";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".exportFields"][] = "fecha_nac";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".exportFields"][] = "edad1";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".exportFields"][] = "dui";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".exportFields"][] = "nivel_edu";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".exportFields"][] = "educacionanalisis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".exportFields"][] = "profesion_oficio";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".exportFields"][] = "estado_civil";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".exportFields"][] = "ciudadania";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".exportFields"][] = "mun_nacimiento";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".exportFields"][] = "depto_nacim";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".exportFields"][] = "direccion";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".exportFields"][] = "mun_resid";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".exportFields"][] = "depart_resid";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".exportFields"][] = "delitosanalisis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".exportFields"][] = "sj_interno";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".exportFields"][] = "fase";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".exportFields"][] = "org_delictiva";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".exportFields"][] = "tipo_mara";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".exportFields"][] = "reincidente";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".exportFields"][] = "deportado";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".exportFields"][] = "direccion1";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".exportFields"][] = "sector";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".exportFields"][] = "celda";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".exportFields"][] = "fecha_ing__sp";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".exportFields"][] = "libro";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".exportFields"][] = "fecha_ing__cp";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".exportFields"][] = "total_delitos";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".exportFields"][] = "delitos";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".exportFields"][] = "delitoanalisis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".exportFields"][] = "sector_ppd";

$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".importFields"] = array();
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".importFields"][] = "id";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".importFields"][] = "sipe";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".importFields"][] = "afis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".importFields"][] = "edad";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".importFields"][] = "rangoetario";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".importFields"][] = "genero";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".importFields"][] = "fecha_nac";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".importFields"][] = "edad1";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".importFields"][] = "dui";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".importFields"][] = "nivel_edu";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".importFields"][] = "educacionanalisis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".importFields"][] = "profesion_oficio";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".importFields"][] = "estado_civil";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".importFields"][] = "ciudadania";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".importFields"][] = "mun_nacimiento";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".importFields"][] = "depto_nacim";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".importFields"][] = "direccion";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".importFields"][] = "mun_resid";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".importFields"][] = "depart_resid";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".importFields"][] = "delitosanalisis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".importFields"][] = "sj_interno";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".importFields"][] = "fase";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".importFields"][] = "org_delictiva";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".importFields"][] = "tipo_mara";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".importFields"][] = "reincidente";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".importFields"][] = "deportado";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".importFields"][] = "direccion1";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".importFields"][] = "sector";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".importFields"][] = "celda";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".importFields"][] = "fecha_ing__sp";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".importFields"][] = "libro";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".importFields"][] = "fecha_ing__cp";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".importFields"][] = "total_delitos";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".importFields"][] = "delitos";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".importFields"][] = "delitoanalisis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".importFields"][] = "sector_ppd";

$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".printFields"] = array();
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".printFields"][] = "id";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".printFields"][] = "sipe";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".printFields"][] = "afis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".printFields"][] = "edad";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".printFields"][] = "rangoetario";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".printFields"][] = "genero";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".printFields"][] = "fecha_nac";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".printFields"][] = "edad1";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".printFields"][] = "dui";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".printFields"][] = "nivel_edu";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".printFields"][] = "educacionanalisis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".printFields"][] = "profesion_oficio";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".printFields"][] = "estado_civil";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".printFields"][] = "ciudadania";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".printFields"][] = "mun_nacimiento";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".printFields"][] = "depto_nacim";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".printFields"][] = "direccion";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".printFields"][] = "mun_resid";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".printFields"][] = "depart_resid";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".printFields"][] = "delitosanalisis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".printFields"][] = "sj_interno";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".printFields"][] = "fase";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".printFields"][] = "org_delictiva";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".printFields"][] = "tipo_mara";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".printFields"][] = "reincidente";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".printFields"][] = "deportado";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".printFields"][] = "direccion1";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".printFields"][] = "sector";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".printFields"][] = "celda";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".printFields"][] = "fecha_ing__sp";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".printFields"][] = "libro";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".printFields"][] = "fecha_ing__cp";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".printFields"][] = "total_delitos";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".printFields"][] = "delitos";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".printFields"][] = "delitoanalisis";
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".printFields"][] = "sector_ppd";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_por_pandilla_de_afiliacion__prueba_","id");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_["id"] = $fdata;
//	sipe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sipe";
	$fdata["GoodName"] = "sipe";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_por_pandilla_de_afiliacion__prueba_","sipe");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sipe";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sipe";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_["sipe"] = $fdata;
//	afis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "afis";
	$fdata["GoodName"] = "afis";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_por_pandilla_de_afiliacion__prueba_","afis");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "afis";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "afis";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_["afis"] = $fdata;
//	edad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "edad";
	$fdata["GoodName"] = "edad";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_por_pandilla_de_afiliacion__prueba_","edad");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "edad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "edad";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_["edad"] = $fdata;
//	rangoetario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "rangoetario";
	$fdata["GoodName"] = "rangoetario";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_por_pandilla_de_afiliacion__prueba_","rangoetario");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "rangoetario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rangoetario";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_["rangoetario"] = $fdata;
//	genero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "genero";
	$fdata["GoodName"] = "genero";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_por_pandilla_de_afiliacion__prueba_","genero");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "genero";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "genero";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_["genero"] = $fdata;
//	fecha_nac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "fecha_nac";
	$fdata["GoodName"] = "fecha_nac";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_por_pandilla_de_afiliacion__prueba_","fecha_nac");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "fecha_nac";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_nac";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_["fecha_nac"] = $fdata;
//	edad1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "edad1";
	$fdata["GoodName"] = "edad1";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_por_pandilla_de_afiliacion__prueba_","edad1");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "edad1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "edad1";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_["edad1"] = $fdata;
//	dui
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "dui";
	$fdata["GoodName"] = "dui";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_por_pandilla_de_afiliacion__prueba_","dui");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dui";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dui";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_["dui"] = $fdata;
//	nivel_edu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "nivel_edu";
	$fdata["GoodName"] = "nivel_edu";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_por_pandilla_de_afiliacion__prueba_","nivel_edu");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "nivel_edu";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nivel_edu";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_["nivel_edu"] = $fdata;
//	educacionanalisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "educacionanalisis";
	$fdata["GoodName"] = "educacionanalisis";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_por_pandilla_de_afiliacion__prueba_","educacionanalisis");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "educacionanalisis";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "educacionanalisis";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_["educacionanalisis"] = $fdata;
//	profesion_oficio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "profesion_oficio";
	$fdata["GoodName"] = "profesion_oficio";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_por_pandilla_de_afiliacion__prueba_","profesion_oficio");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "profesion_oficio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "profesion_oficio";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_["profesion_oficio"] = $fdata;
//	estado_civil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "estado_civil";
	$fdata["GoodName"] = "estado_civil";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_por_pandilla_de_afiliacion__prueba_","estado_civil");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "estado_civil";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado_civil";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_["estado_civil"] = $fdata;
//	ciudadania
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "ciudadania";
	$fdata["GoodName"] = "ciudadania";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_por_pandilla_de_afiliacion__prueba_","ciudadania");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ciudadania";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ciudadania";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_["ciudadania"] = $fdata;
//	mun_nacimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "mun_nacimiento";
	$fdata["GoodName"] = "mun_nacimiento";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_por_pandilla_de_afiliacion__prueba_","mun_nacimiento");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "mun_nacimiento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mun_nacimiento";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_["mun_nacimiento"] = $fdata;
//	depto_nacim
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "depto_nacim";
	$fdata["GoodName"] = "depto_nacim";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_por_pandilla_de_afiliacion__prueba_","depto_nacim");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "depto_nacim";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "depto_nacim";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_["depto_nacim"] = $fdata;
//	direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "direccion";
	$fdata["GoodName"] = "direccion";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_por_pandilla_de_afiliacion__prueba_","direccion");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "direccion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "direccion";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_["direccion"] = $fdata;
//	mun_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "mun_resid";
	$fdata["GoodName"] = "mun_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_por_pandilla_de_afiliacion__prueba_","mun_resid");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "mun_resid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mun_resid";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_["mun_resid"] = $fdata;
//	depart_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "depart_resid";
	$fdata["GoodName"] = "depart_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_por_pandilla_de_afiliacion__prueba_","depart_resid");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "depart_resid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "depart_resid";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_["depart_resid"] = $fdata;
//	delitosanalisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "delitosanalisis";
	$fdata["GoodName"] = "delitosanalisis";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_por_pandilla_de_afiliacion__prueba_","delitosanalisis");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "delitosanalisis";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "delitosanalisis";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_["delitosanalisis"] = $fdata;
//	sj_interno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "sj_interno";
	$fdata["GoodName"] = "sj_interno";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_por_pandilla_de_afiliacion__prueba_","sj_interno");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sj_interno";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sj_interno";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_["sj_interno"] = $fdata;
//	fase
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "fase";
	$fdata["GoodName"] = "fase";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_por_pandilla_de_afiliacion__prueba_","fase");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "fase";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fase";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_["fase"] = $fdata;
//	org_delictiva
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "org_delictiva";
	$fdata["GoodName"] = "org_delictiva";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_por_pandilla_de_afiliacion__prueba_","org_delictiva");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "org_delictiva";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "org_delictiva";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_["org_delictiva"] = $fdata;
//	tipo_mara
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "tipo_mara";
	$fdata["GoodName"] = "tipo_mara";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_por_pandilla_de_afiliacion__prueba_","tipo_mara");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "tipo_mara";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_mara";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_["tipo_mara"] = $fdata;
//	reincidente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "reincidente";
	$fdata["GoodName"] = "reincidente";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_por_pandilla_de_afiliacion__prueba_","reincidente");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "reincidente";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reincidente";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_["reincidente"] = $fdata;
//	deportado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "deportado";
	$fdata["GoodName"] = "deportado";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_por_pandilla_de_afiliacion__prueba_","deportado");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "deportado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "deportado";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_["deportado"] = $fdata;
//	direccion1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "direccion1";
	$fdata["GoodName"] = "direccion1";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_por_pandilla_de_afiliacion__prueba_","direccion1");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "direccion1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "direccion1";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_["direccion1"] = $fdata;
//	sector
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "sector";
	$fdata["GoodName"] = "sector";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_por_pandilla_de_afiliacion__prueba_","sector");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sector";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sector";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_["sector"] = $fdata;
//	celda
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "celda";
	$fdata["GoodName"] = "celda";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_por_pandilla_de_afiliacion__prueba_","celda");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "celda";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "celda";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_["celda"] = $fdata;
//	fecha_ing__sp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "fecha_ing__sp";
	$fdata["GoodName"] = "fecha_ing__sp";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_por_pandilla_de_afiliacion__prueba_","fecha_ing__sp");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "fecha_ing__sp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_ing__sp";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_["fecha_ing__sp"] = $fdata;
//	libro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "libro";
	$fdata["GoodName"] = "libro";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_por_pandilla_de_afiliacion__prueba_","libro");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "libro";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "libro";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_["libro"] = $fdata;
//	fecha_ing__cp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "fecha_ing__cp";
	$fdata["GoodName"] = "fecha_ing__cp";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_por_pandilla_de_afiliacion__prueba_","fecha_ing__cp");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "fecha_ing__cp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_ing__cp";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_["fecha_ing__cp"] = $fdata;
//	total_delitos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "total_delitos";
	$fdata["GoodName"] = "total_delitos";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_por_pandilla_de_afiliacion__prueba_","total_delitos");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "total_delitos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "total_delitos";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_["total_delitos"] = $fdata;
//	delitos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "delitos";
	$fdata["GoodName"] = "delitos";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_por_pandilla_de_afiliacion__prueba_","delitos");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "delitos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "delitos";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_["delitos"] = $fdata;
//	delitoanalisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "delitoanalisis";
	$fdata["GoodName"] = "delitoanalisis";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_por_pandilla_de_afiliacion__prueba_","delitoanalisis");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "delitoanalisis";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "delitoanalisis";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_["delitoanalisis"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_por_pandilla_de_afiliacion__prueba_","sector_ppd");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sector_ppd";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sector_ppd";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_["sector_ppd"] = $fdata;


$tables_data["Sector PPD por pandilla de afiliacion (prueba)"]=&$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_;
$field_labels["Sector_PPD_por_pandilla_de_afiliacion__prueba_"] = &$fieldLabelsSector_PPD_por_pandilla_de_afiliacion__prueba_;
$fieldToolTips["Sector_PPD_por_pandilla_de_afiliacion__prueba_"] = &$fieldToolTipsSector_PPD_por_pandilla_de_afiliacion__prueba_;
$placeHolders["Sector_PPD_por_pandilla_de_afiliacion__prueba_"] = &$placeHoldersSector_PPD_por_pandilla_de_afiliacion__prueba_;
$page_titles["Sector_PPD_por_pandilla_de_afiliacion__prueba_"] = &$pageTitlesSector_PPD_por_pandilla_de_afiliacion__prueba_;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["Sector PPD por pandilla de afiliacion (prueba)"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Sector_PPD_por_pandilla_de_afiliacion__prueba_()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	sipe,  	afis,  	edad,  	rangoetario,  	genero,  	fecha_nac,  	edad1,  	dui,  	nivel_edu,  	educacionanalisis,  	profesion_oficio,  	estado_civil,  	ciudadania,  	mun_nacimiento,  	depto_nacim,  	direccion,  	mun_resid,  	depart_resid,  	delitosanalisis,  	sj_interno,  	fase,  	org_delictiva,  	tipo_mara,  	reincidente,  	deportado,  	direccion1,  	sector,  	celda,  	fecha_ing__sp,  	libro,  	fecha_ing__cp,  	total_delitos,  	delitos,  	delitoanalisis,  	sector_ppd";
$proto0["m_strFrom"] = "FROM carcel";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Sector PPD por pandilla de afiliacion (prueba)"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "Sector PPD por pandilla de afiliacion (prueba)";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sipe",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Sector PPD por pandilla de afiliacion (prueba)"
));

$proto8["m_sql"] = "sipe";
$proto8["m_srcTableName"] = "Sector PPD por pandilla de afiliacion (prueba)";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "afis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Sector PPD por pandilla de afiliacion (prueba)"
));

$proto10["m_sql"] = "afis";
$proto10["m_srcTableName"] = "Sector PPD por pandilla de afiliacion (prueba)";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "edad",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Sector PPD por pandilla de afiliacion (prueba)"
));

$proto12["m_sql"] = "edad";
$proto12["m_srcTableName"] = "Sector PPD por pandilla de afiliacion (prueba)";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "rangoetario",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Sector PPD por pandilla de afiliacion (prueba)"
));

$proto14["m_sql"] = "rangoetario";
$proto14["m_srcTableName"] = "Sector PPD por pandilla de afiliacion (prueba)";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Sector PPD por pandilla de afiliacion (prueba)"
));

$proto16["m_sql"] = "genero";
$proto16["m_srcTableName"] = "Sector PPD por pandilla de afiliacion (prueba)";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_nac",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Sector PPD por pandilla de afiliacion (prueba)"
));

$proto18["m_sql"] = "fecha_nac";
$proto18["m_srcTableName"] = "Sector PPD por pandilla de afiliacion (prueba)";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "edad1",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Sector PPD por pandilla de afiliacion (prueba)"
));

$proto20["m_sql"] = "edad1";
$proto20["m_srcTableName"] = "Sector PPD por pandilla de afiliacion (prueba)";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "dui",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Sector PPD por pandilla de afiliacion (prueba)"
));

$proto22["m_sql"] = "dui";
$proto22["m_srcTableName"] = "Sector PPD por pandilla de afiliacion (prueba)";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "nivel_edu",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Sector PPD por pandilla de afiliacion (prueba)"
));

$proto24["m_sql"] = "nivel_edu";
$proto24["m_srcTableName"] = "Sector PPD por pandilla de afiliacion (prueba)";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "educacionanalisis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Sector PPD por pandilla de afiliacion (prueba)"
));

$proto26["m_sql"] = "educacionanalisis";
$proto26["m_srcTableName"] = "Sector PPD por pandilla de afiliacion (prueba)";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "profesion_oficio",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Sector PPD por pandilla de afiliacion (prueba)"
));

$proto28["m_sql"] = "profesion_oficio";
$proto28["m_srcTableName"] = "Sector PPD por pandilla de afiliacion (prueba)";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "estado_civil",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Sector PPD por pandilla de afiliacion (prueba)"
));

$proto30["m_sql"] = "estado_civil";
$proto30["m_srcTableName"] = "Sector PPD por pandilla de afiliacion (prueba)";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "ciudadania",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Sector PPD por pandilla de afiliacion (prueba)"
));

$proto32["m_sql"] = "ciudadania";
$proto32["m_srcTableName"] = "Sector PPD por pandilla de afiliacion (prueba)";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "mun_nacimiento",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Sector PPD por pandilla de afiliacion (prueba)"
));

$proto34["m_sql"] = "mun_nacimiento";
$proto34["m_srcTableName"] = "Sector PPD por pandilla de afiliacion (prueba)";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "depto_nacim",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Sector PPD por pandilla de afiliacion (prueba)"
));

$proto36["m_sql"] = "depto_nacim";
$proto36["m_srcTableName"] = "Sector PPD por pandilla de afiliacion (prueba)";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "direccion",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Sector PPD por pandilla de afiliacion (prueba)"
));

$proto38["m_sql"] = "direccion";
$proto38["m_srcTableName"] = "Sector PPD por pandilla de afiliacion (prueba)";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Sector PPD por pandilla de afiliacion (prueba)"
));

$proto40["m_sql"] = "mun_resid";
$proto40["m_srcTableName"] = "Sector PPD por pandilla de afiliacion (prueba)";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Sector PPD por pandilla de afiliacion (prueba)"
));

$proto42["m_sql"] = "depart_resid";
$proto42["m_srcTableName"] = "Sector PPD por pandilla de afiliacion (prueba)";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "delitosanalisis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Sector PPD por pandilla de afiliacion (prueba)"
));

$proto44["m_sql"] = "delitosanalisis";
$proto44["m_srcTableName"] = "Sector PPD por pandilla de afiliacion (prueba)";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "sj_interno",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Sector PPD por pandilla de afiliacion (prueba)"
));

$proto46["m_sql"] = "sj_interno";
$proto46["m_srcTableName"] = "Sector PPD por pandilla de afiliacion (prueba)";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "fase",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Sector PPD por pandilla de afiliacion (prueba)"
));

$proto48["m_sql"] = "fase";
$proto48["m_srcTableName"] = "Sector PPD por pandilla de afiliacion (prueba)";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "org_delictiva",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Sector PPD por pandilla de afiliacion (prueba)"
));

$proto50["m_sql"] = "org_delictiva";
$proto50["m_srcTableName"] = "Sector PPD por pandilla de afiliacion (prueba)";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_mara",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Sector PPD por pandilla de afiliacion (prueba)"
));

$proto52["m_sql"] = "tipo_mara";
$proto52["m_srcTableName"] = "Sector PPD por pandilla de afiliacion (prueba)";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "reincidente",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Sector PPD por pandilla de afiliacion (prueba)"
));

$proto54["m_sql"] = "reincidente";
$proto54["m_srcTableName"] = "Sector PPD por pandilla de afiliacion (prueba)";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "deportado",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Sector PPD por pandilla de afiliacion (prueba)"
));

$proto56["m_sql"] = "deportado";
$proto56["m_srcTableName"] = "Sector PPD por pandilla de afiliacion (prueba)";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "direccion1",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Sector PPD por pandilla de afiliacion (prueba)"
));

$proto58["m_sql"] = "direccion1";
$proto58["m_srcTableName"] = "Sector PPD por pandilla de afiliacion (prueba)";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "sector",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Sector PPD por pandilla de afiliacion (prueba)"
));

$proto60["m_sql"] = "sector";
$proto60["m_srcTableName"] = "Sector PPD por pandilla de afiliacion (prueba)";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "celda",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Sector PPD por pandilla de afiliacion (prueba)"
));

$proto62["m_sql"] = "celda";
$proto62["m_srcTableName"] = "Sector PPD por pandilla de afiliacion (prueba)";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_ing__sp",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Sector PPD por pandilla de afiliacion (prueba)"
));

$proto64["m_sql"] = "fecha_ing__sp";
$proto64["m_srcTableName"] = "Sector PPD por pandilla de afiliacion (prueba)";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "libro",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Sector PPD por pandilla de afiliacion (prueba)"
));

$proto66["m_sql"] = "libro";
$proto66["m_srcTableName"] = "Sector PPD por pandilla de afiliacion (prueba)";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_ing__cp",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Sector PPD por pandilla de afiliacion (prueba)"
));

$proto68["m_sql"] = "fecha_ing__cp";
$proto68["m_srcTableName"] = "Sector PPD por pandilla de afiliacion (prueba)";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "total_delitos",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Sector PPD por pandilla de afiliacion (prueba)"
));

$proto70["m_sql"] = "total_delitos";
$proto70["m_srcTableName"] = "Sector PPD por pandilla de afiliacion (prueba)";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "delitos",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Sector PPD por pandilla de afiliacion (prueba)"
));

$proto72["m_sql"] = "delitos";
$proto72["m_srcTableName"] = "Sector PPD por pandilla de afiliacion (prueba)";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "delitoanalisis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Sector PPD por pandilla de afiliacion (prueba)"
));

$proto74["m_sql"] = "delitoanalisis";
$proto74["m_srcTableName"] = "Sector PPD por pandilla de afiliacion (prueba)";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Sector PPD por pandilla de afiliacion (prueba)"
));

$proto76["m_sql"] = "sector_ppd";
$proto76["m_srcTableName"] = "Sector PPD por pandilla de afiliacion (prueba)";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto78=array();
$proto78["m_link"] = "SQLL_MAIN";
			$proto79=array();
$proto79["m_strName"] = "carcel";
$proto79["m_srcTableName"] = "Sector PPD por pandilla de afiliacion (prueba)";
$proto79["m_columns"] = array();
$proto79["m_columns"][] = "id";
$proto79["m_columns"][] = "sipe";
$proto79["m_columns"][] = "afis";
$proto79["m_columns"][] = "edad";
$proto79["m_columns"][] = "rangoetario";
$proto79["m_columns"][] = "genero";
$proto79["m_columns"][] = "fecha_nac";
$proto79["m_columns"][] = "edad1";
$proto79["m_columns"][] = "dui";
$proto79["m_columns"][] = "nivel_edu";
$proto79["m_columns"][] = "educacionanalisis";
$proto79["m_columns"][] = "profesion_oficio";
$proto79["m_columns"][] = "estado_civil";
$proto79["m_columns"][] = "ciudadania";
$proto79["m_columns"][] = "mun_nacimiento";
$proto79["m_columns"][] = "depto_nacim";
$proto79["m_columns"][] = "direccion";
$proto79["m_columns"][] = "mun_resid";
$proto79["m_columns"][] = "depart_resid";
$proto79["m_columns"][] = "delitosanalisis";
$proto79["m_columns"][] = "sj_interno";
$proto79["m_columns"][] = "fase";
$proto79["m_columns"][] = "org_delictiva";
$proto79["m_columns"][] = "tipo_mara";
$proto79["m_columns"][] = "reincidente";
$proto79["m_columns"][] = "deportado";
$proto79["m_columns"][] = "direccion1";
$proto79["m_columns"][] = "sector";
$proto79["m_columns"][] = "celda";
$proto79["m_columns"][] = "fecha_ing__sp";
$proto79["m_columns"][] = "libro";
$proto79["m_columns"][] = "fecha_ing__cp";
$proto79["m_columns"][] = "total_delitos";
$proto79["m_columns"][] = "delitos";
$proto79["m_columns"][] = "delitoanalisis";
$proto79["m_columns"][] = "sector_ppd";
$obj = new SQLTable($proto79);

$proto78["m_table"] = $obj;
$proto78["m_sql"] = "carcel";
$proto78["m_alias"] = "";
$proto78["m_srcTableName"] = "Sector PPD por pandilla de afiliacion (prueba)";
$proto80=array();
$proto80["m_sql"] = "";
$proto80["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto80["m_column"]=$obj;
$proto80["m_contained"] = array();
$proto80["m_strCase"] = "";
$proto80["m_havingmode"] = false;
$proto80["m_inBrackets"] = false;
$proto80["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto80);

$proto78["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto78);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Sector PPD por pandilla de afiliacion (prueba)";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Sector_PPD_por_pandilla_de_afiliacion__prueba_ = createSqlQuery_Sector_PPD_por_pandilla_de_afiliacion__prueba_();


	
		;

																																				

$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".sqlquery"] = $queryData_Sector_PPD_por_pandilla_de_afiliacion__prueba_;

$tableEvents["Sector PPD por pandilla de afiliacion (prueba)"] = new eventsBase;
$tdataSector_PPD_por_pandilla_de_afiliacion__prueba_[".hasEvents"] = false;

?>