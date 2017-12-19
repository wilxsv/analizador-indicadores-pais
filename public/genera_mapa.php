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
  $labels_municipios = "
  var legend = L.control({position: 'bottomright'});
  legend.onAdd = function (map) {
  	var div = L.DomUtil.create('div', 'info legend'),
  		grades = [],
  		labels = [],
  		from, to;
  	labels.push('<i style=\"background:#009FE3\"></i> Inseguridad muy baja (00 &ndash; 18)');
  	labels.push('<i style=\"background:#94C11F\"></i> Inseguridad baja     (18 &ndash; 31)');
  	labels.push('<i style=\"background:#FCEA12\"></i> Inseguridad media    (31 &ndash; 48)');
  	labels.push('<i style=\"background:#F39200\"></i> Inseguridad alta     (48 &ndash; 68)');
  	labels.push('<i style=\"background:#E94190\"></i> Inseguridad muy alta (68 &ndash; 100)');
  	div.innerHTML = labels.join('<br>');
  	return div;
  };
  legend.addTo(map);";

  $zoom = 9;
  if( (strlen($filtro) > 0) && !(1 === preg_match('~[0-9]~', $filtro)) ){
    $filtro = " AND i.departamento = '$filtro' ";
    $zoom = 10;
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
  .info { padding: 6px 8px; font: 13px/15px Arial, Helvetica, sans-serif; background: white; background: rgba(255,255,255,0.8); box-shadow: 0 0 14px rgba(0,0,0,0.2); border-radius: 5px; } .info h4 { margin: 0 0 12px; color: #777; }
  .legend { text-align: left; line-height: 16px; color: #555; } .legend i { width: 16px; height: 16px; float: left; margin-right: 10px; opacity: 0.7; }</style>';
  $datos = "<script type=\"text/javascript\">var municipiosData = {\"type\":\"FeatureCollection\",\"features\":[$json]};</script>";
  return "$files $datos
<script type=\"text/javascript\">	var map = L.map('map', { zoomControl:false, dragging: false, tap: false, scrollWheelZoom: false, touchZoom:false }).setView([$centro], $zoom);
	L.tileLayer('', {
		maxZoom: $zoom,minZoom: $zoom,
    attribution: 'Dirección de Información y Análisis'
	}).addTo(map);
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
			'<b>' + props.name + '</b><br />' + parseInt(props.indice*100) : 'Pase el cursor sobre un municipio');
	};
	info.addTo(map);
	function getColor(d) {
		return d > 68 ? '#E94190' :
				d > 48  ? '#F39200' :
				d >= 31  ? '#FCEA12' :
				d >= 18   ? '#94C11F' : '#009FE3';
	}
	function style(feature) {
		return { weight: 2, opacity: 1, color: 'white', dashArray: '3', fillOpacity: 0.7, fillColor: getColor(feature.properties.indice*100) };
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

function get_sv($type, $vars, $wpdb, $centro, $zoom){
  $label = "
  L.geoJson(departamentosData, {
    onEachFeature: function(feature, layer) {
      var label = L.marker(layer.getBounds().getCenter(), { icon: L.divIcon({className: 'label',html:'<font color=\"black\">'+feature.properties.name+'</font>' }) }).addTo(map);
    }
   });
   var legend = L.control({position: 'bottomright'});
   legend.onAdd = function (map) {
   	var div = L.DomUtil.create('div', 'info legend'),
   		grades = [],
   		labels = [],
   		from, to;
   	labels.push('<i style=\"background:#989898\"></i> Sector policial');
   	labels.push('<i style=\"background:#E0E02D\"></i> Sector policial priorizado');
   	div.innerHTML = labels.join('<br>');
   	return div;
   };
   legend.addTo(map);";
  $priorizado = get_sector_ppd_priorizado($wpdb, 'XXXX', 'priorizadoData', TRUE);
  if ( !$vars ){//Se carga por defecto ya que vars no posee ningun valor
    $escuelas = get_centros_escolares($wpdb, NULL, FALSE);
    $sector = get_sector_ppd($wpdb, NULL);
    $datos = get_mapa_base($wpdb, 'departamentosData', FALSE, TRUE);
    $label .= "
    L.geoJson(priorizadoData).addTo(map);";
  } else {//cuando se solicita un departamento, municipio, codigo, etc
    $escuelas = get_centros_escolares($wpdb, $vars, FALSE);
    $sector = get_sector_ppd($wpdb, $vars);
    $label .= "L.geoJson(sectoresData, {
      onEachFeature: function(feature, layer) {
        var label = L.marker(layer.getBounds().getCenter(), { icon: L.divIcon({className: 'label',html: '<font color=\"black\">'+feature.properties.name+'</font>' }) }).addTo(map);
      }
     });
     function style2(feature) {
         return { weight: 2, opacity: 1, color: 'white', dashArray: '3', fillOpacity: 0.7, fillColor: 'yellow' }
     }
     L.geoJson(priorizadoData, { style: style2 } ).addTo(map);";
    $datos = get_mapa_base($wpdb, 'departamentosData', 'XXXX', TRUE);
    $zoom = 12;
    $priorizado = get_sector_ppd_priorizado($wpdb, $vars, 'priorizadoData', TRUE);
  }
  $files = '<style>
  .info { padding: 6px 8px; font: 13px/15px Arial, Helvetica, sans-serif; background: white; background: rgba(255,255,255,0.8); box-shadow: 0 0 14px rgba(0,0,0,0.2); border-radius: 5px; } .info h4 { margin: 0 0 12px; color: #777; }
  .legend { text-align: left; line-height: 16px; color: #555; } .legend i { width: 16px; height: 16px; float: left; margin-right: 10px; opacity: 0.7; }</style>';
  return "$files \n $sector\n$datos\n$priorizado
 <script type=\"text/javascript\">	var map = L.map('map').setView([$centro], $zoom);
L.tileLayer('', {attribution: 'Dirección de Información y Análisis'}).addTo(map);
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
$label
</script>";
}

function get_centros_escolares($wpdb, $centro, $indice, $anyo = 0){
  if (!$centro AND !$indice){
    $sql = "SELECT nombre_ce AS nombre, lon, lat FROM ind_focalizacion WHERE lon IS NOT NULL AND lat IS NOT NULL";
  }  elseif (1 === preg_match('~[0-9]~', $centro) AND !$indice) {
    $sql = "SELECT nombre_ce AS nombre, lon, lat FROM ind_focalizacion WHERE lon IS NOT NULL AND lat IS NOT NULL AND sector = '$centro'";
  } elseif (!$indice){
    $sql = "SELECT nombre_ce AS nombre, lon, lat FROM ind_focalizacion WHERE lon IS NOT NULL AND lat IS NOT NULL AND municipio = '$centro'";
  } elseif (!$centro AND $indice){
    $sql = "SELECT nombre_ce AS nombre, lon, lat, ipce FROM ind_centro_escolar WHERE anyo = $anyo AND lon IS NOT NULL AND lat IS NOT NULL";
  } else {
    $sql = "SELECT nombre_ce AS nombre, lon, lat, ipce FROM ind_centro_escolar WHERE municipio = '$centro' OR codigo = '$centro' OR nombre_ce = '$centro' AND anyo = $anyo";
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
        $escuelas .= "L.marker([$object->lat, $object->lon], {icon: amarilloIcon}).addTo(map).bindPopup(\"<b>$object->nombre</b><br/>$object->ipce\").bindTooltip(\"<b>$object->nombre</b><br/>$object->ipce\");\n";
      }
      elseif ( $object->ipce <= 0.4 ) {
        $escuelas .= "L.marker([$object->lat, $object->lon], {icon: verdeIcon}).addTo(map).bindPopup(\"<b>$object->nombre</b><br/>$object->ipce\").bindTooltip(\"<b>$object->nombre</b><br/>$object->ipce\");\n";
      }
      elseif ( $object->ipce <= 0.6 ) {
        $escuelas .= "L.marker([$object->lat, $object->lon], {icon: azulIcon}).addTo(map).bindPopup(\"<b>$object->nombre</b><br/>$object->ipce\").bindTooltip(\"<b>$object->nombre</b><br/>$object->ipce\");\n";
      }
      elseif ( $object->ipce <= 0.8 ) {
        $escuelas .= "L.marker([$object->lat, $object->lon], {icon: naranjaIcon}).addTo(map).bindPopup(\"<b>$object->nombre</b><br/>$object->ipce\").bindTooltip(\"<b>$object->nombre</b><br/>$object->ipce\");\n";
      }else {
        $escuelas .= "L.marker([$object->lat, $object->lon], {icon: rosaIcon}).addTo(map).bindPopup(\"<b>$object->nombre</b><br/>$object->ipce\").bindTooltip(\"<b>$object->nombre</b><br/>$object->ipce\");\n";
      }
    }
  } else {
    foreach ($ce as $key => $object) {
      $escuelas .= "L.marker([$object->lat, $object->lon]).addTo(map).bindPopup(\"<b>$object->nombre</b>\").bindTooltip(\"<b>$object->nombre</b>\");\n";
    }
  }
  return "$style \n $escuelas";
}

function get_sector_ppd_priorizado($wpdb, $sector, $nombreVar, $priorizado){
  if ($priorizado AND $sector) {
    $sql = "SELECT s.id, s.dsc_ppd AS nombre, s.geojson_ppd AS coordenada FROM ind_ctl_sector_ppd AS s, ind_focalizacion as f WHERE s.dsc_ppd = f.sector_policial AND s.nombre_municipio_ppd = '$sector'";
  }else {
    if (!$sector){
      //$sql = "SELECT id, dsc_ppd AS nombre, geojson_ppd AS coordenada FROM ind_ctl_sector_ppd";
      $sql = "SELECT s.id, s.dsc_ppd AS nombre, s.geojson_ppd AS coordenada FROM ind_ctl_sector_ppd AS s, ind_focalizacion as f WHERE s.dsc_ppd = f.sector";
    }  elseif (1 === preg_match('~[0-9]~', $sector)) {
      $sql = "SELECT id, dsc_ppd AS nombre, geojson_ppd AS coordenada FROM ind_ctl_sector_ppd WHERE sector = '$sector'";
    }else{
      $sql = "SELECT id, dsc_ppd AS nombre, geojson_ppd AS coordenada FROM ind_ctl_sector_ppd WHERE nombre_municipio_ppd = '$sector'";
    }
  }
  $sppd = $wpdb->get_results( $sql);
  $json = '';
  foreach ($sppd as $key => $object) {
    if ($json != NULL){
      $json.= ",";
    }
    $json.= "{\"type\":\"Feature\",\"id\":\"$object->id\",\"properties\":{\"name\":\"$object->nombre\"},\"geometry\":{\"type\":\"MultiPolygon\",\"coordinates\":[[[$object->coordenada]]]}}";
  }
  return "<script type=\"text/javascript\">var $nombreVar = {\"type\":\"FeatureCollection\",\"features\":[$json]};</script>";
}

function get_sector_ppd($wpdb, $sector){
  if (!$sector){
    $sql = "SELECT s.id, s.dsc_ppd AS nombre, s.geojson_ppd AS coordenada FROM ind_ctl_sector_ppd AS s, ind_focalizacion as f WHERE s.dsc_ppd = f.sector";
  }  elseif (1 === preg_match('~[0-9]~', $sector)) {
    $sql = "SELECT id, dsc_ppd AS nombre, geojson_ppd AS coordenada FROM ind_ctl_sector_ppd WHERE sector = '$sector'";
  }else{
    $sql = "SELECT id, dsc_ppd AS nombre, geojson_ppd AS coordenada FROM ind_ctl_sector_ppd WHERE nombre_municipio_ppd = '$sector'";
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
    $sql = "SELECT lat_municipio, lon_municipio FROM ind_ctl_municipio WHERE nombre_municipio = '$id' LIMIT 1";
    $data = $wpdb->get_results( $sql);
    foreach ($data as $key => $object) {
      $punto = "$object->lat_municipio, $object->lon_municipio";
    }
  }
  return $punto;
}

function get_mapa_ce($wpdb, $vars, $centro, $zoom, $anyo){
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
 return "$files\n$datos\n$sector
 <script type=\"text/javascript\">
  var map = L.map('map').setView([$centro], $zoom);
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
  $sector = get_sector_ppd($wpdb, $vars);
  $files = '<style>.info { padding: 6px 8px; font: 10px/12px Arial, Helvetica, sans-serif; background: white; background: rgba(255,255,255,0.8); box-shadow: 0 0 14px rgba(0,0,0,0.2); border-radius: 5px; } .info h4 { margin: 0 0 5px; color: #777; }.legend { text-align: left; line-height: 15px; color: #555; } .legend i { width: 15px; height: 15px; float: left; margin-right: 8px; opacity: 0.7; }</style>';
  return "$files\n$datos\n$sector
<script type=\"text/javascript\">	var map = L.map('map', { scrollWheelZoom: false, touchZoom:false } ).setView([$centro], $zoom );
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

function get_leyenda_municipio($wpdb, $anyo, $vars, $filtro){
  $max = 0;
  if ($filtro == 6 | $filtro == 5  | $filtro == 3  | $filtro == 2  | $filtro == 0){
    $max = get_max_delito($wpdb, $anyo, $vars, $filtro);
  } elseif ($filtro == 4){
    $max = get_max_dgcp($wpdb, $anyo, $vars, $filtro);
  }
  $l0 = intval($max*0.2);
  $l1 = intval($max*0.4);
  $l2 = intval($max*0.6);
  $l3 = intval($max*0.8);
  return "
  var legend = L.control({position: 'bottomright'});
  legend.onAdd = function (map) {
  	var div = L.DomUtil.create('div', 'info legend'),
  		grades = [],
  		labels = [],
  		from, to;
  	labels.push('<i style=\"background:#009FE3\"></i> Inseguridad muy baja (00 &ndash; $l0)');
  	labels.push('<i style=\"background:#94C11F\"></i> Inseguridad baja     ($l0 &ndash; $l1)');
  	labels.push('<i style=\"background:#FCEA12\"></i> Inseguridad media    ($l1 &ndash; $l2)');
  	labels.push('<i style=\"background:#F39200\"></i> Inseguridad alta     ($l2 &ndash; $l3)');
  	labels.push('<i style=\"background:#E94190\"></i> Inseguridad muy alta ($l3 &ndash; $max)');
  	div.innerHTML = labels.join('<br>');
  	return div;
  };
  legend.addTo(map);";
}

function get_max_dgcp($wpdb, $anyo, $vars, $filtro){
  if ($filtro == 4){
    $query=$wpdb->get_results( "SELECT count(*) AS total FROM ind_bnc_dgcp WHERE sector_policial != 'ND' AND anyo = $anyo AND municipio = '$vars' GROUP BY sector_policial ORDER BY total DESC LIMIT 1" );
  }
  foreach ($query as $l) {
   return $l->total;
  }
  return 0;
 }

 function get_max_delito($wpdb, $anyo, $vars, $filtro){
   if ($filtro == 6) {
     $where = " delito LIKE '%FEMENICIDIO%' OR delito LIKE '%HOMICIDIO%' AND ";
   } elseif ($filtro == 5){
     $where = " delito LIKE '%VIOLACION%' AND ";
   } elseif ($filtro == 3){
     $where = " delito LIKE '%ROBO%' OR delito LIKE '%HURTO%' OR delito LIKE '%EXTORSION%' AND ";
   } elseif ($filtro == 2){
     $where = " delito LIKE '%LESIONES%' AND ";
   } elseif ($filtro == 0){
     $where = " delito LIKE '%AMENAZAS%' AND ";
   } else {
     $where = "";
   }
   $query=$wpdb->get_results( "SELECT count(*) AS total FROM ind_bnc_delito WHERE $where anyo = $anyo AND sector_policial != 'ND' AND municipio = '$vars' GROUP BY sector_policial ORDER BY total DESC LIMIT 1" );
   foreach ($query as $l) {
    return $l->total;
   }
   return 0;
  }

 function get_indicador_situacional($wpdb, $nombre_var, $anyo, $vars, $indicador){
   if ($indicador == 4){
     $sql = "SELECT id, COUNT(*) AS cantidad, sector_policial AS nombre FROM ind_bnc_dgcp WHERE anyo = $anyo  AND municipio = '$vars' GROUP BY sector_policial ";
   } elseif ($indicador == 6) {
     $sql = "SELECT id, COUNT(*) AS cantidad, sector_policial AS nombre FROM ind_bnc_delito WHERE delito LIKE '%FEMENICIDIO%' OR delito LIKE '%HOMICIDIO%' AND sector_policial != 'ND' AND  anyo = $anyo  AND municipio = '$vars' GROUP BY sector_policial;";
   } elseif ($indicador == 5) {
     $sql = "SELECT id, COUNT(*) AS cantidad, sector_policial AS nombre FROM ind_bnc_delito WHERE delito LIKE '%VIOLACION%' AND sector_policial != 'ND' AND  anyo = $anyo  AND municipio = '$vars' GROUP BY sector_policial;";
   } elseif ($indicador == 3) {
     $sql = "SELECT id, COUNT(*) AS cantidad, sector_policial AS nombre FROM ind_bnc_delito WHERE delito LIKE '%ROBO%' OR delito LIKE '%HURTO%' OR delito LIKE '%EXTORSION%' AND sector_policial != 'ND' AND  anyo = $anyo  AND municipio = '$vars' GROUP BY sector_policial;";
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
