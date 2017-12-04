<?php
ini_set('memory_limit', '256M');
/**
 * Plugin Name: indicadores-pais-El-Salvador-seguro
 * Plugin URI: http://wordpress.org/plugins/
 * Description: Administración de banco de datos del Sistema Integrado de Estadisticas (SIE), El SIE tiene como objetivo proporcionar información a las autoridades del MJSP para la definición de prioridades, diseño de estrategias, seguimiento a los resultados e impactos de la política del sector y la rendición de cuentas a la ciudadanía.
 * Author: PNUD - El Salvador
 * Version: 0.9
 * Author URI: http://pnud.org.sv/
*/

function get_mapa($wpdb, $anyo, $filtro, $centro){
  if( (strlen($filtro) > 0) && !(1 === preg_match('~[0-9]~', $filtro)) ){
    $filtro = " AND i.departamento = '$filtro' ";
  } else {
    $filtro = "";
  }
  if ( $anyo >= 2014 ){
    $anyo = " AND i.anyo = $anyo ";
  } else {
    $anyo = 2015;
  }
  $sql = "SELECT i.id AS id, i.municipio AS municipio , i.ipn AS indice, m.geojson_municipio AS coordenada FROM ind_municipio i, ind_ctl_departamento d, ind_ctl_municipio m WHERE i.departamento = d.nombre_departamento AND d.id = m.ctl_departamento_id AND i.municipio = m.nombre_municipio $anyo $filtro";
  $hechos = $wpdb->get_results( $sql);
  $json = NULL;
  foreach ($hechos as $key => $object) {
    if ($json != NULL){
      $json.= ",";
    }
    $json.= "{\"type\":\"Feature\",\"id\":\"$object->id\",\"properties\":{\"name\":\"$object->municipio\",\"indice\":$object->indice },\"geometry\":{\"type\":\"MultiPolygon\",\"coordinates\":[[[$object->coordenada]]]}}";
  }
  ;
  $files = '<style>
  .info { padding: 6px 8px; font: 10px/12px Arial, Helvetica, sans-serif; background: white; background: rgba(255,255,255,0.8); box-shadow: 0 0 14px rgba(0,0,0,0.2); border-radius: 5px; } .info h4 { margin: 0 0 5px; color: #777; }
  .legend { text-align: left; line-height: 15px; color: #555; } .legend i { width: 15px; height: 15px; float: left; margin-right: 8px; opacity: 0.7; }</style>';
  $zoom = 9;
  $datos = "<script type=\"text/javascript\">var municipiosData = {\"type\":\"FeatureCollection\",\"features\":[$json]};</script>";
  return "$files $datos
<script type=\"text/javascript\">	var map = L.map('map', { zoomControl:false, dragging: false, tap: false, scrollWheelZoom: false, touchZoom:false }).setView([$centro], $zoom);
	L.tileLayer('', {
		maxZoom: $zoom,minZoom: $zoom,
    attribution: 'Dirección de Información y Análisis'
	}).addTo(map);

  map.dragging.disable();
map.touchZoom.disable();
map.doubleClickZoom.disable();
map.scrollWheelZoom.disable();
map.boxZoom.disable();
map.keyboard.disable();
if (map.tap) map.tap.disable();
document.getElementById('map').style.cursor='default';

	// control that shows state info on hover
	var info = L.control();
	info.onAdd = function (map) {
		this._div = L.DomUtil.create('div', 'info');
    L.DomEvent.disableClickPropagation(this._div);
		this.update();
		return this._div;
	};
	info.update = function (props) {
		this._div.innerHTML = '<h4>Municipio</h4>' +  (props ?
			'<b>' + props.name + '</b><br />' + props.indice : 'Pase el cursor sobre un municipio');
	};
	info.addTo(map);
	function getColor(d) {
		return d > 0.8 ? '#E94190' :
				d > 0.6  ? '#F39200' :
				//d >= 0.4  ? '#E31A1C' :
				d >= 0.4  ? '#FCEA12' :
				//d <= 0.2   ? '#FD8D3C' :
				d >= 0.2   ? '#94C11F' : '#009FE3';
	}
	function style(feature) {
		return { weight: 2, opacity: 1, color: 'white', dashArray: '3', fillOpacity: 0.7, fillColor: getColor(feature.properties.indice) };
	}
	function highlightFeature(e) {
		var layer = e.target;
		layer.setStyle({weight: 5,color: '#666',dashArray: '',fillOpacity: 0.7});
		if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {	layer.bringToFront();	}
		info.update(layer.feature.properties);
	}
	var geojson;
	function resetHighlight(e) {geojson.resetStyle(e.target);	info.update();}
	function zoomToFeature(e) {map.fitBounds(e.target.getBounds());}
	function onEachFeature(feature, layer) {
		layer.on({mouseover: highlightFeature,mouseout: resetHighlight,click: zoomToFeature});
	}
	geojson = L.geoJson(municipiosData, {	style: style,	onEachFeature: onEachFeature	}).addTo(map);
  map.attributionControl.addAttribution('');
	var legend = L.control({position: 'bottomright'});
	legend.onAdd = function (map) {
		var div = L.DomUtil.create('div', 'info legend'),
			grades = [0.0, 0.2, 0.4, 0.6, 0.8],
			labels = [],
			from, to;
		for (var i = 0; i < grades.length; i++) {
			from = grades[i];
			to = grades[i + 1];
			labels.push(
				'<i style=\"background:' + getColor(from + 0.05) + '\"></i> ' +
				from + (to ? ' &ndash; ' + to : ' &ndash; 1'));
		}
		div.innerHTML = labels.join('<br>');
		return div;
	};
	legend.addTo(map);
</script>";
}

function get_sv($type, $vars, $wpdb, $centro, $zoom){
  if ( !$vars ){//Se carga por defecto ya que vars no posee ningun valor
    $sql = "SELECT id, nombre_departamento AS nombre, geojson_departamento AS coordenada FROM ind_ctl_departamento";
    $escuelas = get_centros_escolares($wpdb, NULL, FALSE);
    $sector = get_sector_ppd($wpdb, NULL);
  } else {//cuando se solicita un departamento, municipio, codigo, etc
    $sql = "SELECT id, nombre_departamento AS nombre, geojson_departamento AS coordenada FROM ind_ctl_departamento";
    $escuelas = get_centros_escolares($wpdb, $vars, FALSE);
    $sector = get_sector_ppd($wpdb, $vars);
  }
  $hechos = $wpdb->get_results( $sql);
  $json = NULL;
  foreach ($hechos as $key => $object) {
    if ($json != NULL){
      $json.= ",";
    }
    $json.= "{\"type\":\"Feature\",\"id\":\"$object->id\",\"properties\":{\"name\":\"$object->nombre\"},\"geometry\":{\"type\":\"MultiPolygon\",\"coordinates\":[[[$object->coordenada]]]}}";
  }
  $datos = "<script type=\"text/javascript\">var departamentosData = {\"type\":\"FeatureCollection\",\"features\":[$json]};</script>";
 return " $sector\n$datos
 <script type=\"text/javascript\">	var map = L.map('map', { zoomControl:false, dragging: false, tap: false, scrollWheelZoom: false }).setView([$centro], $zoom);
L.tileLayer('', {
  maxZoom: $zoom,minZoom: $zoom,
  attribution: 'Dirección de Información y Análisis'
}).addTo(map);
$escuelas
L.geoJson(departamentosData).addTo(map);
function style(feature) {
    return {
        weight: 2,
        opacity: 1,
        color: 'white',
        dashArray: '3',
        fillOpacity: 0.7,
        fillColor: 'gray'
    }
}
L.geoJson(sectoresData, { style: style } ).addTo(map);
</script>";
}

function get_centros_escolares($wpdb, $centro, $indice, $anyo = 0){
  if (!$centro AND !$indice){
    $sql = "SELECT nombre_ce AS nombre, lon, lat FROM ind_focalizacion WHERE lon IS NOT NULL AND lat IS NOT NULL";
  }  elseif (1 === preg_match('~[0-9]~', $centro) AND !$indice) {
    $sql = "SELECT nombre_ce AS nombre, lon, lat FROM ind_focalizacion WHERE lon IS NOT NULL AND lat IS NOT NULL AND sector = '$centro'";
  }elseif (!$indice){
    $sql = "SELECT nombre_ce AS nombre, lon, lat FROM ind_focalizacion WHERE lon IS NOT NULL AND lat IS NOT NULL AND municipio = '$centro'";
  }
  if (!$centro AND $indice){
    $sql = "SELECT nombre_ce AS nombre, lon, lat, ipce FROM ind_centro_escolar WHERE anyo = $anyo AND lon IS NOT NULL AND lat IS NOT NULL";
  }  elseif (1 === preg_match('~[0-9]~', $centro) AND $indice) {
    $sql = "SELECT nombre_ce AS nombre, lon, lat, ipce FROM ind_centro_escolar WHERE anyo = $anyo AND lon IS NOT NULL AND lat IS NOT NULL AND sector = '$centro'";
  }elseif ($indice){
    $sql = "SELECT nombre_ce AS nombre, lon, lat, ipce FROM ind_centro_escolar WHERE anyo = $anyo AND lon IS NOT NULL AND lat IS NOT NULL AND municipio = '$centro'";
  }
  $ce = $wpdb->get_results( $sql);
  $escuelas = "";
  $style = "";
  if ($indice) {
    $style  = "var amarilloIcon = L.icon({ iconUrl: '".plugin_dir_url( __FILE__ )."/images/punto_amarillo.png' });\n";
    $style .= "var verdeIcon = L.icon({ iconUrl: '".plugin_dir_url( __FILE__ )."/images/punto_verde.png' });\n";
    $style .= "var azulIcon = L.icon({ iconUrl: '".plugin_dir_url( __FILE__ )."/images/punto_azul.png' });\n";
    $style .= "var naranjaIcon = L.icon({ iconUrl: '".plugin_dir_url( __FILE__ )."/images/punto_naranja.png' });\n";
    $style .= "var rosaIcon = L.icon({ iconUrl: '".plugin_dir_url( __FILE__ )."/images/punto_rosa.png' });\n";
    foreach ($ce as $key => $object) {
      if ( $object->ipce <= 0.2 ){
        $escuelas .= "L.marker([$object->lat, $object->lon], {icon: amarilloIcon}).addTo(map).bindPopup(\"<b>$object->nombre</b><br/>$object->ipce\");\n";
      }
      elseif ( $object->ipce <= 0.4 ) {
        $escuelas .= "L.marker([$object->lat, $object->lon], {icon: verdeIcon}).addTo(map).bindPopup(\"<b>$object->nombre</b><br/>$object->ipce\");\n";
      }
      elseif ( $object->ipce <= 0.6 ) {
        $escuelas .= "L.marker([$object->lat, $object->lon], {icon: azulIcon}).addTo(map).bindPopup(\"<b>$object->nombre</b><br/>$object->ipce\");\n";
      }
      elseif ( $object->ipce <= 0.8 ) {
        $escuelas .= "L.marker([$object->lat, $object->lon], {icon: naranjaIcon}).addTo(map).bindPopup(\"<b>$object->nombre</b><br/>$object->ipce\");\n";
      }else {
        $escuelas .= "L.marker([$object->lat, $object->lon], {icon: rosaIcon}).addTo(map).bindPopup(\"<b>$object->nombre</b><br/>$object->ipce\");\n";
      }
    }
  } else {
    foreach ($ce as $key => $object) {
      $escuelas .= "L.marker([$object->lat, $object->lon]).addTo(map).bindPopup(\"<b>$object->nombre</b>\");\n";
    }
  }
  return "$style \n $escuelas";
}

function get_sector_ppd($wpdb, $sector){
  if (!$sector){
    $sql = "SELECT s.id, s.dsc_ppd AS nombre, s.geojson_ppd AS coordenada FROM ind_ctl_sector_ppd AS s, ind_focalizacion as f WHERE s.dsc_ppd = f.sector";
  }  elseif (1 === preg_match('~[0-9]~', $sector)) {
    $sql = "SELECT s.id, s.dsc_ppd AS nombre, s.geojson_ppd AS coordenada FROM ind_ctl_sector_ppd AS s, ind_focalizacion as f WHERE s.dsc_ppd = f.sector AND f.lon IS NOT NULL AND f.lat IS NOT NULL AND f.sector = '$sector'";
  }else{
    $sql = "SELECT s.id, s.dsc_ppd AS nombre, s.geojson_ppd AS coordenada FROM ind_ctl_sector_ppd AS s, ind_focalizacion as f WHERE s.dsc_ppd = f.sector AND f.lon IS NOT NULL AND f.lat IS NOT NULL AND f.municipio = '$sector'";
  }
  $sppd = $wpdb->get_results( $sql);
  $json = '';
  foreach ($sppd as $key => $object) {
    if ($json != NULL){
      $json.= ",";
    }
    $json.= "{\"type\":\"Feature\",\"id\":\"$object->id\",\"properties\":{\"name\":\"$object->nombre\"},\"geometry\":{\"type\":\"MultiPolygon\",\"coordinates\":[[[$object->coordenada]]]}}";
  }
  return "<script type=\"text/javascript\">var sectoresData = {\"type\":\"FeatureCollection\",\"features\":[$json]};</script>";
}

function get_centro($wpdb, $sector){
  $punto = "13.79111, -89.00012";
  if (1 === preg_match('~[0-9]~', $sector)) {
    $sql = "SELECT d.lat_departamento, d.lon_departamento FROM ind_ctl_departamento AS d, ind_focalizacion as f WHERE d.nombre_departamento = f.departamento AND f.sector = '$sector' LIMIT 1";
  }else{
    $sql = "SELECT d.lat_departamento, d.lon_departamento FROM ind_ctl_departamento AS d, ind_focalizacion as f WHERE d.nombre_departamento = f.departamento AND f.municipio = '$sector' LIMIT 1";
  }
  $data = $wpdb->get_results( $sql);
  foreach ($data as $key => $object) {
    $punto = "$object->lat_departamento, $object->lon_departamento";
  }
  return $punto;
}

function get_mapa_ce($wpdb, $vars, $centro, $zoom, $anyo){
  $escuelas = get_centros_escolares($wpdb, $vars, TRUE, $anyo);
  $files = '<style>
  .info { padding: 6px 8px; font: 10px/12px Arial, Helvetica, sans-serif; background: white; background: rgba(255,255,255,0.8); box-shadow: 0 0 14px rgba(0,0,0,0.2); border-radius: 5px; } .info h4 { margin: 0 0 5px; color: #777; }
  .legend { text-align: left; line-height: 15px; color: #555; } .legend i { width: 15px; height: 15px; float: left; margin-right: 8px; opacity: 0.7; }</style>';
  $sql = "SELECT id, nombre_departamento AS nombre, geojson_departamento AS coordenada FROM ind_ctl_departamento";
  $hechos = $wpdb->get_results( $sql);
  $json = NULL;
  foreach ($hechos as $key => $object) {
    if ($json != NULL){
      $json.= ",";
    }
    $json.= "{\"type\":\"Feature\",\"id\":\"$object->id\",\"properties\":{\"name\":\"$object->nombre\"},\"geometry\":{\"type\":\"MultiPolygon\",\"coordinates\":[[[$object->coordenada]]]}}";
  }
  $datos = "<script type=\"text/javascript\">var departamentosData = {\"type\":\"FeatureCollection\",\"features\":[$json]};</script>";
 return "$files\n$datos
 <script type=\"text/javascript\">	var map = L.map('map').setView([$centro], $zoom);
  L.tileLayer('', {
   attribution: 'Dirección de Información y Análisis'
  }).addTo(map);
  L.geoJson(departamentosData).addTo(map);
  var legend = L.control({position: 'bottomright'});
  legend.onAdd = function (map) {
    var div = L.DomUtil.create('div', 'info legend'),
      grades = [],
      labels = [],
      from, to;
    labels.push('<i style=\"background:#009FE3\"></i> Inseguridad muy baja (0.00 &ndash; 0.20)');
    labels.push('<i style=\"background:#94C11F\"></i> Inseguridad baja     (0.21 &ndash; 0.40)');
    labels.push('<i style=\"background:#FCEA12\"></i> Inseguridad media    (0.41 &ndash; 0.60)');
    labels.push('<i style=\"background:#F39200\"></i> Inseguridad alta     (0.61 &ndash; 0.80)');
    labels.push('<i style=\"background:#E94190\"></i> Inseguridad muy alta (0.81 &ndash; 1.00)');
    div.innerHTML = labels.join('<br>');
    return div;
  };
  legend.addTo(map);
  $escuelas
  var greenIcon = L.icon({ iconUrl: '".plugin_dir_url( __FILE__ )."/images/pdf-24x24.png' });
  L.marker([$centro], {icon: greenIcon}).addTo(map).bindPopup(\"<b>}ttt</b>\");;
</script>";
}

function get_mapa_base($wpdb, $var_nombre, $filtro){
  if( isset($filtro) && (strlen($filtro) > 0) && !(1 === preg_match('~[0-9]~', $filtro)) ){
    $sql = "SELECT id, nombre_departamento AS nombre, geojson_departamento AS coordenada FROM ind_ctl_departamento WHERE nombre_departamento = '$filtro'";
  } else {
    $sql = "SELECT id, nombre_departamento AS nombre, geojson_departamento AS coordenada FROM ind_ctl_departamento";
  }
  $hechos = $wpdb->get_results( $sql);
  $json = NULL;
  foreach ($hechos as $key => $object) {
    if ($json != NULL){
      $json.= ",";
    }
    $json.= "{\"type\":\"Feature\",\"id\":\"$object->id\",\"properties\":{\"name\":\"$object->nombre\"},\"geometry\":{\"type\":\"MultiPolygon\",\"coordinates\":[[[$object->coordenada]]]}}";
  }
  if ( strlen( $var_nombre ) > 0){
    $nombreVar = $var_nombre;
  }else {
    $nombreVar = "departamentosData";
  }
 return "<script type=\"text/javascript\">var $nombreVar = {\"type\":\"FeatureCollection\",\"features\":[$json]};</script>";
}
