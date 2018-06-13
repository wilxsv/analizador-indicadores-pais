<?php
ini_set('memory_limit', '356M');
/**
 * Plugin Name: indicadores-pais-El-Salvador-seguro
 * Plugin URI: http://wordpress.org/plugins/
 * Description: Administración de banco de datos del Sistema Integrado de Estadisticas (SIE), El SIE tiene como objetivo proporcionar información a las autoridades del MJSP para la definición de prioridades, diseño de estrategias, seguimiento a los resultados e impactos de la política del sector y la rendición de cuentas a la ciudadanía.
 * Author: PNUD - El Salvador
 * Version: 0.9
 * Author URI: http://pnud.org.sv/
*/

 require_once( get_plugin_path()."includes/utils/maps.php" );

function get_mapa_focalizacion( $vars, $centro, $wpdb ){
  $map = uniqid();
  $zoom = 12;
  $img = plugin_dir_url( __FILE__ )."js/leaflet/images/marker-icon.png";

  get_style_maps();
  $sectorBase = "sectoresData";
  $sectorPri = "sectorPri";
  echo get_sector_ppd($wpdb, $vars, $sectorBase, FALSE);
  echo get_sector_ppd($wpdb, $vars, $sectorPri, TRUE);
  $mapa = "
<div id='$map' class=\"mapDiv\"></div>
<script type=\"text/javascript\">
  var map = L.map('$map').setView([$centro], $zoom);
  L.tileLayer('', {attribution: 'Dirección de Información y Análisis'}).addTo(map);

  ".get_info_leyenda('<img src="'.$img.'" width="15" height="15"> Centro escolar', '<i style="background:#989898"></i> Sector policial', '<i style="background:#E0E02D"></i> Sector policial priorizado','','')."
  ".add_leyenda_geojson_leaflet($sectorBase, "black", "feature.properties.name")."
  ".add_sector_leaflet($sectorBase, 1, "gray", "white")."
  ".add_sector_leaflet($sectorPri, 2, "yellow", "white")."
  ".get_centros_escolares($wpdb, $vars, FALSE)."
  map.addControl(new L.Control.Fullscreen());
  L.control.browserPrint().addTo(map);
  L.easyPrint({
          //tileLayer: tiles,
          sizeModes: ['Current', 'A4Landscape', 'A4Portrait'],
          filename: 'myMap',
          exportOnly: true,
          hideControlContainer: true
  }).addTo(map);
</script>";
  return $mapa;
}

function get_mapa_centroescolar($wpdb, $vars, $centro, $anyo){
  $map = uniqid();
  $zoom = 12;
  get_style_maps();
  $sectorBase = "sectoresData";
  echo get_sector_ppd($wpdb, $vars, $sectorBase, FALSE);
  $mapa = "
<div id='$map' class=\"mapDiv\"></div>
<script type=\"text/javascript\">
  var map = L.map('$map').setView([$centro], $zoom);
  L.tileLayer('', {attribution: 'Dirección de Información y Análisis'}).addTo(map);
  ".get_info_leyenda('<i style="background:#009FE3"></i> Inseguridad muy baja (0.00 &ndash; 0.20)', '<i style="background:#94C11F"></i> Inseguridad baja     (0.21 &ndash; 0.40)', '<i style="background:#FCEA12"></i> Inseguridad media    (0.41 &ndash; 0.60)','<i style="background:#F39200"></i> Inseguridad alta     (0.61 &ndash; 0.80)','<i style="background:#E94190"></i> Inseguridad muy alta (0.81 &ndash; 1.00)')."
  ".add_leyenda_geojson_leaflet($sectorBase, "black", "feature.properties.name")."
  ".add_sector_leaflet($sectorBase, 1, "gray", "white")."
  ".get_centros_escolares($wpdb, $vars, TRUE, $anyo)."
  map.addControl(new L.Control.Fullscreen());
  L.control.browserPrint().addTo(map);
  L.easyPrint({
          //tileLayer: tiles,
          sizeModes: ['Current', 'A4Landscape', 'A4Portrait'],
          filename: 'myMap',
          exportOnly: true,
          hideControlContainer: true
  }).addTo(map);
</script>";
  return $mapa;
}

function get_mapa_municipal($wpdb, $anyo, $filtro, $centro){
  $map = uniqid();
  $zoom = 10;
  get_style_maps();
  $sectorBase = "sectoresData";
  echo get_geojson_indice_municipio($wpdb, $filtro, $anyo, $sectorBase);
  $mapa = "
<div id='$map' class=\"mapDiv\"></div>
<script type=\"text/javascript\">
  var map = L.map('$map').setView([$centro], $zoom);
  L.tileLayer('', {attribution: 'Dirección de Información y Análisis'}).addTo(map);
  ".get_info_leyenda('<i style="background:#009FE3"></i> Inseguridad muy baja (00 &ndash; 0.18)', '<i style="background:#94C11F"></i> Inseguridad baja     (0.18 &ndash; 0.31)', '<i style="background:#FCEA12"></i> Inseguridad media    (0.31 &ndash; 0.48)','<i style="background:#F39200"></i> Inseguridad alta     (0.48 &ndash; 0.68)','<i style="background:#E94190"></i> Inseguridad muy alta (0.68 &ndash; 1.0)')."
  ".get_mapa_interactivo("<h4>Municipio:</h4>", 'name', "'IPM : '+parseFloat(props.indice).toFixed(2)", 'Pase el cursor sobre un municipio', 0.18, 0.31, 0.48, 0.68, 'feature.properties.indice', $sectorBase)."
  map.addControl(new L.Control.Fullscreen());
  L.control.browserPrint().addTo(map);

  L.easyPrint({
      		//tileLayer: tiles,
      		sizeModes: ['Current', 'A4Landscape', 'A4Portrait'],
      		filename: 'myMap',
      		exportOnly: true,
      		hideControlContainer: true
	}).addTo(map);
</script>";
  return $mapa;
}

function get_mapa_analisis_situacional($wpdb, $anyo, $vars, $code,  $centro){
  $map = uniqid();
  $zoom = 12;
  get_style_maps();
  $sectorBase = "sectoresData";
  echo get_sector_ppd($wpdb, $vars, $sectorBase, FALSE);
  if ($code == 6 | $code == 5  | $code == 3  | $code == 2  | $code == 0){
    $max = get_max_delito($wpdb, $anyo, $vars, $code);
  } elseif ($code == 4){
    $max = get_max_dgcp($wpdb, $anyo, $vars);
  }
  $sectorPri = "municipiosData";
  echo get_indicador_situacional($wpdb, $sectorPri, $anyo, $vars, $code);
  $l0 = intval($max*0.2);
  $l1 = intval($max*0.4);
  $l2 = intval($max*0.6);
  $l3 = intval($max*0.8);

  $mapa = "
<div id='$map' class=\"mapDiv\"></div>
<script type=\"text/javascript\">
  var map = L.map('$map').setView([$centro], $zoom);
  L.tileLayer('', {attribution: 'Dirección de Información y Análisis'}).addTo(map);
  ".get_info_leyenda("<i style=\"background:#009FE3\"></i> Inseguridad muy baja (00 &ndash; $l0)","<i style=\"background:#94C11F\"></i> Inseguridad baja     ($l0 &ndash; $l1)","<i style=\"background:#FCEA12\"></i> Inseguridad media    ($l1 &ndash; $l2)","<i style=\"background:#F39200\"></i> Inseguridad alta     ($l2 &ndash; $l3)","<i style=\"background:#E94190\"></i> Inseguridad muy alta ($l3 &ndash; $max)")."
  ".add_sector_leaflet($sectorBase, 1, "gray", "white")."
  ".add_leyenda_geojson_leaflet($sectorBase, "black", "feature.properties.name")."
  ".get_mapa_interactivo("<h4>Sector policial:</h4>", 'nombre', "'Total delitos : '+parseInt(props.cantidad)", 'Pase el cursor sobre un sector', $l0, $l1, $l2, $l3, 'feature.properties.cantidad', $sectorPri)."
  map.addControl(new L.Control.Fullscreen());
  L.control.browserPrint().addTo(map);

  L.easyPrint({
          //tileLayer: tiles,
          sizeModes: ['Current', 'A4Landscape', 'A4Portrait'],
          filename: 'myMap',
          exportOnly: true,
          hideControlContainer: true
  }).addTo(map);
</script>";
  return $mapa;
}


function get_centro($wpdb, $sector, $depto){
  $punto = "13.79111, -89.00012";
  if (1 === preg_match('~[0-9]~', $sector)) {
    $sql = "SELECT d.lat_departamento, d.lon_departamento FROM ind_ctl_departamento AS d, ind_focalizacion as f WHERE d.nombre_departamento = f.departamento AND f.sector = '$sector' LIMIT 1";
  }elseif( $depto ){
    $sql = "SELECT d.lat_departamento, d.lon_departamento FROM ind_ctl_departamento AS d WHERE d.nombre_departamento = '$sector' LIMIT 1";
  }else {
    $sql = "SELECT d.lat_departamento, d.lon_departamento FROM ind_ctl_departamento AS d, ind_focalizacion as f WHERE d.nombre_departamento = f.departamento AND f.municipio = '$sector' LIMIT 1";
  }
  $data = $wpdb->get_results( $sql);
  foreach ($data as $key => $object) {
    $punto = "$object->lat_departamento, $object->lon_departamento";
  }
  return $punto;
}

function get_centro_sector($wpdb, $sector){
  $punto = "13.79111, -89.00012";
  $sql = "SELECT d.lat_municipio, d.lon_municipio FROM ind_ctl_municipio AS m, ind_centro_escolar AS c WHERE m.nombre_municipio = c.municipio AND c.sector = '$sector' GROUP BY c.sector  LIMIT 1";
  $data = $wpdb->get_results( $sql);
  foreach ($data as $key => $object) {
    $punto = "$object->lat_municipio, $object->lon_municipio";
  }
  return $punto;
}

function get_centro_municipio($wpdb, $id){
  $punto = "13.79111, -89.00012";
  if( $id ){
    $sql = "SELECT lat_municipio, lon_municipio FROM ind_ctl_municipio WHERE id = '$id' LIMIT 1";
    $data = $wpdb->get_results( $sql);
    foreach ($data as $key => $object) {
      $punto = "$object->lat_municipio, $object->lon_municipio";
    }
  }
  return $punto;
}

function get_municipio_by_sector($wpdb, $filtro){
  $sql = "SELECT municipio FROM ind_focalizacion WHERE sector_policial = '$filtro' LIMIT 1";
  $data = $wpdb->get_results( $sql);
  foreach ($data as $key => $object) {
    return $object->municipio;
  }
}

 function get_indicador_situacional($wpdb, $nombre_var, $anyo, $vars, $indicador){
   $filtro = getFiltroE($wpdb, $vars);
   $having = getHaving($wpdb, $vars);
   if ($indicador == 4){
     $sql = "SELECT id, COUNT(*) AS cantidad, sector_policial AS nombre FROM ind_bnc_dgcp WHERE anyo = $anyo  AND $filtro AND sector_policial != 'ND' GROUP BY sector_policial ";
   } elseif ($indicador == 6) {
     $sql = "SELECT id, COUNT(*) AS cantidad, sector_policial AS nombre FROM ind_bnc_delito WHERE delito LIKE '%FEMENICIDIO%' OR delito LIKE '%HOMICIDIO%' AND sector_policial != 'ND' AND  anyo = $anyo  AND $filtro GROUP BY sector_policial;";
   } elseif ($indicador == 5) {
     $sql = "SELECT id, COUNT(*) AS cantidad, sector_policial AS nombre FROM ind_bnc_delito WHERE delito LIKE '%VIOLACION%' AND sector_policial != 'ND' AND  anyo = $anyo  AND $filtro GROUP BY sector_policial;";
   } elseif ($indicador == 3) {
     $sql = "SELECT id, COUNT(*) AS cantidad, sector_policial AS nombre, municipio FROM ind_bnc_delito WHERE delito LIKE '%ROBO%' OR delito LIKE '%HURTO%' OR delito LIKE '%EXTORSION%' AND sector_policial != 'ND' AND  anyo = $anyo  AND $filtro GROUP BY sector_policial HAVING $having;";
   } elseif ($indicador == 2) {
     $sql = "SELECT id, COUNT(*) AS cantidad, sector_policial AS nombre FROM ind_bnc_delito WHERE delito LIKE '%LESIONES%' AND sector_policial != 'ND' AND  anyo = $anyo  AND $filtro GROUP BY sector_policial;";
   } elseif ($indicador == 0) {
     $sql = "SELECT id, COUNT(*) AS cantidad, sector_policial AS nombre FROM ind_bnc_delito WHERE delito LIKE '%AMENAZAS%' AND sector_policial != 'ND' AND  anyo = $anyo  AND $filtro GROUP BY sector_policial;";
   } else {
     $sql = "SELECT * FROM ind_bnc_delito WHERE municipio = 'XXXX' GROUP BY sector_policial;";
   }
   $hechos = $wpdb->get_results( $sql);
   $json = NULL;
   foreach ($hechos as $key => $object) {
     if ($json != NULL){
       $json.= ",";
     }
     $json.= "{\"type\":\"Feature\",\"id\":\"$object->id\",\"properties\":{\"nombre\":\"$object->nombre\",\"cantidad\":$object->cantidad },\"geometry\":".get_geojson_por_sector($wpdb, $object->nombre)."}";
   }
   return "\n<script type=\"text/javascript\">var $nombre_var = {\"type\":\"FeatureCollection\",\"features\":[$json]};</script>\n";

 }

 function get_geojson_por_sector($wpdb, $sector){
   $coordenada = "geojson_ppd".map_load();
   if ($sector !== "ND"){
     $sql = "SELECT $coordenada AS coordenada FROM ind_ctl_sector_ppd WHERE dsc_ppd = '$sector' AND $coordenada IS NOT NULL";
     $sppd = $wpdb->get_results( $sql);
     foreach ($sppd as $key => $object) {
         return $object->coordenada;
     }
   }
   return "";
 }
