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
  ".get_info_leyenda('<i style="background:#009FE3"></i> Inseguridad muy baja (00 &ndash; 18)', '<i style="background:#94C11F"></i> Inseguridad baja     (18 &ndash; 31)', '<i style="background:#FCEA12"></i> Inseguridad media    (31 &ndash; 48)','<i style="background:#F39200"></i> Inseguridad alta     (48 &ndash; 68)','<i style="background:#E94190"></i> Inseguridad muy alta (68 &ndash; 100)')."
  ".get_mapa_interactivo("<h4>Municipio</h4>", 'name', 'parseInt(props.indice*100)', 'Pase el cursor sobre un municipio', 18, 31, 48, 68, 'feature.properties.indice*100', $sectorBase)."
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
  } elseif ($filtro == 4){
    $max = get_max_dgcp($wpdb, $anyo, $vars, $code);
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
  ".get_mapa_interactivo("<h4>Sector policial</h4>", 'name', 'parseInt(props.cantidad)', 'Pase el cursor sobre un sector', $l0, $l1, $l2, $l3, 'feature.properties.cantidad', $sectorPri)."

  /*
  var info = L.control();
	info.onAdd = function (map) {
		this._div = L.DomUtil.create('div', 'info');
    L.DomEvent.disableClickPropagation(this._div);
		this.update();
		return this._div;
	};
	info.update = function (props) {
		this._div.innerHTML = '<h4></h4>' +  (props ?
			'<b>' + props.nombre + '</b><br />' +  : 'Pase el cursor sobre ');
	};
	info.addTo(map);
	function getColor(d) {
		return d > $l3 ? '#E94190' :
				d > $l2  ? '#F39200' :
				d >= $l1  ? '#FCEA12' :
				d >= $l0   ? '#94C11F' : '#009FE3';
	}
	function style(feature) {
		return { weight: 2, opacity: 1, color: 'white', dashArray: '3', fillOpacity: 0.7, fillColor: getColor() };
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
  */
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

function get_mapa_ce($wpdb, $vars, $centro, $zoom, $anyo){
  $map = uniqid();
  $label = "
  L.geoJson(departamentosData, {
    onEachFeature: function(feature, layer) {
      var label = L.marker(layer.getBounds().getCenter(), { icon: L.divIcon({className: 'label',html: '<font color=\"black\">'+feature.properties.name+'</font>'}) }).addTo(map);
    }
  });";
  $sector = get_sector_ppd($wpdb, $vars);
  $label .= "L.geoJson(sectoresData, {
    onEachFeature: function(feature, layer) {
      var label = L.marker(layer.getBounds().getCenter(), { icon: L.divIcon({className: 'label',html: '<font color=\"black\">'+feature.properties.name+'</font>'}) }).addTo(map);
    }
   });";
  $escuelas = get_centros_escolares($wpdb, $vars, TRUE, $anyo);
  $files = '<style>.info { padding: 6px 8px; font: 10px/12px Arial, Helvetica, sans-serif; background: white; background: rgba(255,255,255,0.8); box-shadow: 0 0 14px rgba(0,0,0,0.2); border-radius: 5px; } .info h4 { margin: 0 0 5px; color: #777; }.legend { text-align: left; line-height: 15px; color: #555; } .legend i { width: 15px; height: 15px; float: left; margin-right: 8px; opacity: 0.7; }</style>';
  $datos = get_mapa_base($wpdb, 'departamentosData', 'XXXX', FALSE);
 return "
<div id='$map' style='width: 100%; height: 900px;'></div>
 $files\n$datos\n$sector
 <script type=\"text/javascript\">
  var map = L.map('$map').setView([$centro], $zoom);
  L.tileLayer('', { attribution: 'Dirección de Información y Análisis' }).addTo(map);
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
  $label
</script>";
}


function get_mapa_base($wpdb, $var_nombre, $filtro, $depto){
  if( isset($filtro) && (strlen($filtro) > 0) && !(1 === preg_match('~[0-9]~', $filtro)) && $depto ){
    $sql = "SELECT id, nombre_departamento AS nombre, geojson_departamento AS coordenada FROM ind_ctl_departamento WHERE nombre_departamento = '$filtro'";
  } elseif( $depto ) {
    $sql = "SELECT id, nombre_departamento AS nombre, geojson_departamento AS coordenada FROM ind_ctl_departamento";
  }elseif ($filtro && !$depto) {
    $sql = "SELECT id, nombre_municipio AS nombre, geojson_municipio AS coordenada FROM ind_ctl_municipio WHERE nombre_municipio = '$filtro'";
  } else {
    $sql = "SELECT id, nombre_municipio AS nombre, geojson_municipio AS coordenada FROM ind_ctl_municipio";
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

function get_municipio_by_sector($wpdb, $filtro){
  $sql = "SELECT municipio FROM ind_focalizacion WHERE sector_policial = '$filtro' LIMIT 1";
  $data = $wpdb->get_results( $sql);
  foreach ($data as $key => $object) {
    return $object->municipio;
  }
}

function get_mapa_situacional($wpdb, $anyo, $vars, $filtro, $centro ){
  $map = uniqid();
  $zoom = 12;
  $max = 0;
  if ($filtro == 6 | $filtro == 5  | $filtro == 3  | $filtro == 2  | $filtro == 0){
    $max = get_max_delito($wpdb, $anyo, $vars, $filtro);
  } elseif ($filtro == 4){
    $max = get_max_dgcp($wpdb, $anyo, $vars, $filtro);
  }
  $datos = get_indicador_situacional($wpdb, 'municipiosData', $anyo, $vars, $filtro);
  $l0 = intval($max*0.2);
  $l1 = intval($max*0.4);
  $l2 = intval($max*0.6);
  $l3 = intval($max*0.8);
  $labels_municipios = get_leyenda_municipio($wpdb, $anyo, $vars, $filtro);
  $sector = get_sector_ppd($wpdb, $vars, 'municipiosData', FALSE);
  $files = '<style>.info { padding: 6px 8px; font: 10px/12px Arial, Helvetica, sans-serif; background: white; background: rgba(255,255,255,0.8); box-shadow: 0 0 14px rgba(0,0,0,0.2); border-radius: 5px; } .info h4 { margin: 0 0 5px; color: #777; }.legend { text-align: left; line-height: 15px; color: #555; } .legend i { width: 15px; height: 15px; float: left; margin-right: 8px; opacity: 0.7; }</style>';
  return "<div id='$map' style='width: 100%; height: 900px;'></div>
  $files\n$datos\n$sector
  <script type=\"text/javascript\">	var map = L.map('$map', { scrollWheelZoom: false, touchZoom:false } ).setView([$centro], $zoom );
	L.tileLayer('', { attribution: 'Dirección de Información y Análisis' }).addTo(map);
  function styleS(feature) {
      return { weight: 2, opacity: 1, color: 'white', dashArray: '3', fillOpacity: 0.7, fillColor: 'gray' }
  }

  L.geoJson(sectoresData, { style: styleS } ).addTo(map);
  L.geoJson(sectoresData, { onEachFeature: function(feature, layer) { var label = L.marker(layer.getBounds().getCenter(), { icon: L.divIcon({className: 'label',html: '<font color=\"black\">'+feature.properties.name+'</font>' }) }).addTo(map); } });
	var info = L.control();
	info.onAdd = function (map) {
		this._div = L.DomUtil.create('div', 'info');
    L.DomEvent.disableClickPropagation(this._div);
		this.update();
		return this._div;
	};
	info.update = function (props) {
		this._div.innerHTML = '<h4>Sector policial</h4>' +  (props ?
			'<b>' + props.nombre + '</b><br />' + parseInt(props.cantidad) : 'Pase el cursor sobre un sector');
	};
	info.addTo(map);
	function getColor(d) {
		return d > $l3 ? '#E94190' :
				d > $l2  ? '#F39200' :
				d >= $l1  ? '#FCEA12' :
				d >= $l0   ? '#94C11F' : '#009FE3';
	}
	function style(feature) {
		return { weight: 2, opacity: 1, color: 'white', dashArray: '3', fillOpacity: 0.7, fillColor: getColor(feature.properties.cantidad) };
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
  $labels_municipios
 </script>";
}


 function get_indicador_situacional($wpdb, $nombre_var, $anyo, $vars, $indicador){
   if ($indicador == 4){
     $sql = "SELECT id, COUNT(*) AS cantidad, sector_policial AS nombre FROM ind_bnc_dgcp WHERE anyo = $anyo  AND municipio = '$vars' GROUP BY sector_policial ";
   } elseif ($indicador == 6) {
     $sql = "SELECT id, COUNT(*) AS cantidad, sector_policial AS nombre FROM ind_bnc_delito WHERE delito LIKE '%FEMENICIDIO%' OR delito LIKE '%HOMICIDIO%' AND sector_policial != 'ND' AND  anyo = $anyo  AND municipio = '$vars' GROUP BY sector_policial;";
   } elseif ($indicador == 5) {
     $sql = "SELECT id, COUNT(*) AS cantidad, sector_policial AS nombre FROM ind_bnc_delito WHERE delito LIKE '%VIOLACION%' AND sector_policial != 'ND' AND  anyo = $anyo  AND municipio = '$vars' GROUP BY sector_policial;";
   } elseif ($indicador == 3) {
     $sql = "SELECT id, COUNT(*) AS cantidad, sector_policial AS nombre, municipio FROM ind_bnc_delito WHERE delito LIKE '%ROBO%' OR delito LIKE '%HURTO%' OR delito LIKE '%EXTORSION%' AND sector_policial != 'ND' AND  anyo = $anyo  AND municipio = '$vars' GROUP BY sector_policial HAVING municipio = '$vars';";
   } elseif ($indicador == 2) {
     $sql = "SELECT id, COUNT(*) AS cantidad, sector_policial AS nombre FROM ind_bnc_delito WHERE delito LIKE '%LESIONES%' AND sector_policial != 'ND' AND  anyo = $anyo  AND municipio = '$vars' GROUP BY sector_policial;";
   } elseif ($indicador == 0) {
     $sql = "SELECT id, COUNT(*) AS cantidad, sector_policial AS nombre FROM ind_bnc_delito WHERE delito LIKE '%AMENAZAS%' AND sector_policial != 'ND' AND  anyo = $anyo  AND municipio = '$vars' GROUP BY sector_policial;";
   } else {
     $sql = "SELECT * FROM ind_bnc_delito WHERE municipio = 'XXXX' GROUP BY sector_policial;";
   }
   $hechos = $wpdb->get_results( $sql);
   $json = NULL;
   foreach ($hechos as $key => $object) {
     if ($json != NULL){
       $json.= ",";
     }
     $json.= "{\"type\":\"Feature\",\"id\":\"$object->id\",\"properties\":{\"nombre\":\"$object->nombre\",\"cantidad\":$object->cantidad },\"geometry\":{\"type\":\"MultiPolygon\",\"coordinates\":[[[ ".get_geojson_por_sector($wpdb, $object->nombre)." ]]]}}";
   }
   return "<script type=\"text/javascript\">var $nombre_var = {\"type\":\"FeatureCollection\",\"features\":[$json]};</script>";
 }

 function get_geojson_por_sector($wpdb, $sector){
   if ($sector !== "ND"){
     $sql = "SELECT geojson_ppd AS coordenada FROM ind_ctl_sector_ppd WHERE dsc_ppd = '$sector'";
     $sppd = $wpdb->get_results( $sql);
     foreach ($sppd as $key => $object) {
         return $object->coordenada;
     }
   }
   return "";
 }
