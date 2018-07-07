<?php

 function map_load()
 {
	 $id = 4;
	 switch ($id) {
    case 0:
        return "";
        break;
    case 7:
        return "_7";
        break;
    case 4:
        return "_4";
        break;
	 }
 }
/* Retorna e imprime el geojson */
function get_geojson_municipio($wpdb, $nombre, $sector, $nombreVar){
  if ($sector) {
    $sql = "SELECT id, nombre_municipio AS nombre, geojson_municipio AS coordenada FROM ind_ctl_municipio WHERE nombre_municipio = '$nombre'";
  } else {
    $sql = "SELECT id, nombre_municipio AS nombre, geojson_municipio AS coordenada FROM ind_ctl_municipio WHERE nombre_municipio = '$nombre'";
  }
  $hechos = $wpdb->get_results( $sql);
  $json = NULL;
  foreach ($hechos as $key => $object) {
    if ($json != NULL){
      $json.= ",";
    }
  }
  $json.= '{"type":"Feature","id":"'.$object->id.'","properties":{"name":"'.$object->nombre.'"},"geometry":'.$object->coordenada.'}';
 return "<script type=\"text/javascript\">var $nombreVar = {\"type\":\"FeatureCollection\",\"features\":[$json]};</script>";
}

/* Retorna una cadena con la definición de leyenda para ser agregada a un js */
function get_leyenda($wpdb, $nombre, $sector, $nombreVar){
  if ($sector) {
    $sql = "SELECT id, nombre_municipio AS nombre, geojson_municipio AS coordenada FROM ind_ctl_municipio WHERE nombre_municipio = '$filtro'";
  } else {
    $sql = "SELECT id, nombre_municipio AS nombre, geojson_municipio AS coordenada FROM ind_ctl_municipio WHERE nombre_municipio = '$nombre'";
  }
  $hechos = $wpdb->get_results( $sql);
  $json = NULL;
  foreach ($hechos as $key => $object) {
    if ($json != NULL){
      $json.= ",";
    }
  }
  $json.= "{\"type\":\"Feature\",\"id\":\"$object->id\",\"properties\":{\"name\":\"$object->nombre\"},\"geometry\":{\"type\":\"MultiPolygon\",\"coordinates\":[[[$object->coordenada]]]}}";
 return "<script type=\"text/javascript\">var $nombreVar = {\"type\":\"FeatureCollection\",\"features\":[$json]};</script>";
}

/* Retorna una cadena con la definición de leyenda para ser agregada a un js */
function get_leyenda_municipio($wpdb, $anyo, $vars, $filtro){
   $max = 0;
   if ($filtro == 6 | $filtro == 5  | $filtro == 3  | $filtro == 2  | $filtro == 0){
     $max = get_max_delito($wpdb, $anyo, $vars, $filtro);
   } elseif ($filtro == 4){
     $max = get_max_dgcp($wpdb, $anyo, $vars, $filtro);
   } elseif ($filtro == -1){
     $max = 100;
   }
   $l0 = intval($max*0.2);
   $l1 = intval($max*0.4);
   $l2 = intval($max*0.6);
   $l3 = intval($max*0.8);
   $l01 = $l0+1;
   $l11 = $l1+1;
   $l21 = $l2+1;
   $l31 = $l3+1;
   return "
   var legend = L.control({position: 'bottomright'});
   legend.onAdd = function (map) {
   	var div = L.DomUtil.create('div', 'info legend'),
   		grades = [],
   		labels = [],
   		from, to;
   	labels.push('<i style=\"background:#009FE3\"></i> Inseguridad muy baja (00 &ndash; $l0)');
   	labels.push('<i style=\"background:#94C11F\"></i> Inseguridad baja     ($l01 &ndash; $l1)');
   	labels.push('<i style=\"background:#FCEA12\"></i> Inseguridad media    ($l11 &ndash; $l2)');
   	labels.push('<i style=\"background:#F39200\"></i> Inseguridad alta     ($l21 &ndash; $l3)');
   	labels.push('<i style=\"background:#E94190\"></i> Inseguridad muy alta ($l31 &ndash; $max)');
   	div.innerHTML = labels.join('<br>');
   	return div;
   };
   legend.addTo(map);";
 }

 function get_max_dgcp($wpdb, $anyo, $vars){
   $filtroLocalidad = getFiltroE($wpdb, $vars);
   $sql = "SELECT count(*) AS total FROM ind_bnc_dgcp WHERE sector_policial != 'ND' AND anyo = $anyo AND $filtroLocalidad GROUP BY sector_policial ORDER BY total DESC LIMIT 1" ;
   $query=$wpdb->get_results( $sql );
   foreach ($query as $l) {
     if ($l->total < 5)
            return 10;
         else
            return $l->total;
    }
  }

  function get_max_delito($wpdb, $anyo, $vars, $filtro){
    $filtroLocalidad = getFiltroE($wpdb, $vars);
    $having = getHaving($wpdb, $vars);
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
    $query=$wpdb->get_results( "SELECT count(*) AS total, municipio FROM ind_bnc_delito WHERE $where anyo = $anyo AND sector_policial != 'ND' AND $filtroLocalidad GROUP BY sector_policial HAVING $having ORDER BY total DESC LIMIT 1" );
    foreach ($query as $l) {
      if ($l->total < 5)
         return 10;
      else
         return $l->total;
    }
    return 0;
   }

function get_style_maps(){
   	echo "\n<style>
   				.mapDiv { width: 100%; height: 900px; }
   			  .info { padding: 6px 8px; font: 13px/15px Arial, Helvetica, sans-serif; background: white; background: rgba(255,255,255,0.8); box-shadow: 0 0 14px rgba(0,0,0,0.2); border-radius: 5px; }
   				.info h4 { margin: 0 0 12px; color: #777; }
   			  .legend { text-align: left; line-height: 16px; color: #555; }
   				.legend i { width: 16px; height: 16px; float: left; margin-right: 10px; opacity: 0.7; }
   			 </style>\n";
}

function get_info_leyenda($str, $str1, $str2, $str3, $str4){
  return "\n
  var legend = L.control({position: 'bottomright'});
  legend.onAdd = function (map) {
   var div = L.DomUtil.create('div', 'info legend'),
     grades = [],
     labels = [],
     from, to;
   labels.push('$str');
   labels.push('$str1');
   labels.push('$str2');
   labels.push('$str3');
   labels.push('$str4');
   div.innerHTML = labels.join('<br/>');
   return div;
  };
  legend.addTo(map);\n";

}

function get_sector_ppd($wpdb, $sector, $nombreVar, $priorizado){
  $coordenada = "geojson_ppd".map_load();
  $filtro = getFiltro($wpdb, $sector);
  if ($priorizado) {
    $sql = "SELECT s.id, s.dsc_ppd AS nombre, s.$coordenada AS coordenada FROM ind_ctl_sector_ppd AS s, ind_focalizacion as f WHERE s.dsc_ppd = f.sector_policial AND $filtro";
  } else {
    $sql = "SELECT id, dsc_ppd AS nombre, $coordenada AS coordenada FROM ind_ctl_sector_ppd WHERE $filtro";
  }

  $sppd = $wpdb->get_results( $sql);
  $in = FALSE;
  $json = '';
  foreach ($sppd as $key => $object) {
    if ($in) {
      $json.= ",{\"type\":\"Feature\",\"id\":$object->id,\"properties\":{\"name\":\"$object->nombre\"},\"geometry\":$object->coordenada}";
    } else {
      $json.= "{\"type\":\"Feature\",\"id\":$object->id,\"properties\":{\"name\":\"$object->nombre\"},\"geometry\":$object->coordenada}";
      $in = TRUE;
    }
  }
  return "\n<script type=\"text/javascript\">var $nombreVar = {\"type\":\"FeatureCollection\",\"features\":[$json]};</script>\n";
}

function add_sector_leaflet($nombreVar, $id, $fondo, $borde){
  return "\n
    function style$id(feature) {
        return {
            weight: 2,
            opacity: 1,
            color: '$borde',
            dashArray: '3',
            fillOpacity: 0.7,
            fillColor: '$fondo'
        }
    }
    L.geoJson($nombreVar, { style: style$id } ).addTo(map);\n";
}

function add_leyenda_geojson_leaflet($nombreVar, $color, $elemento){
  return "  legend.addTo(map);L.geoJson($nombreVar, {
       onEachFeature: function(feature, layer) {
         var label = L.marker(layer.getBounds().getCenter(), { icon: L.divIcon({className: 'label',html: '<font color=\"$color\">'+$elemento+'</font>' }) }).addTo(map);
       }
      });";
}

function get_centros_escolares($wpdb, $centro, $indice, $anyo = 0){
  $filtro = "";
  if (is_numeric($centro)) {
    $municipios=$wpdb->get_results( "SELECT m.id AS id, d.nombre_departamento AS departamento, m.nombre_municipio AS municipio FROM ind_ctl_departamento AS d INNER JOIN ind_ctl_municipio AS m ON d.id = m.ctl_departamento_id WHERE m.id = $centro group by d.nombre_departamento, m.nombre_municipio" );
    foreach ($municipios as $l) {
      $filtro = " municipio = '".strtoupper($l->municipio)."' AND departamento = '".strtoupper($l->departamento)."'";
    }
  }
  if (!$centro AND !$indice){
    $sql = "SELECT nombre_ce AS nombre, lon, lat FROM ind_focalizacion WHERE lon IS NOT NULL AND lat IS NOT NULL";
  }  elseif (1 === preg_match('~[0-9]~', $centro) AND !$indice) {
    $sql = "SELECT nombre_ce AS nombre, lon, lat FROM ind_focalizacion WHERE lon IS NOT NULL AND lat IS NOT NULL AND $filtro";
  } elseif (!$indice){
    $sql = "SELECT nombre_ce AS nombre, lon, lat FROM ind_focalizacion WHERE lon IS NOT NULL AND lat IS NOT NULL AND $filtro";
  } elseif (!$centro AND $indice){
    $sql = "SELECT nombre_ce AS nombre, lon, lat, FORMAT(ipce, 2) AS ipce FROM ind_centro_escolar WHERE anyo = $anyo AND lon IS NOT NULL AND lat IS NOT NULL";
  } else {
    $sql = "SELECT nombre_ce AS nombre, lon, lat, FORMAT(ipce, 2) AS ipce FROM ind_centro_escolar WHERE $filtro AND anyo = $anyo";
  }
  $ce = $wpdb->get_results( $sql);
  $escuelas = "";
  $style = "";
  if ($indice) {
    $style  = "var amarilloIcon = L.icon({ iconUrl: '".get_plugin_url()."/public/images/punto_amarillo.png' });\n";
    $style .= "var verdeIcon = L.icon({ iconUrl: '".get_plugin_url()."/public/images/punto_verde.png' });\n";
    $style .= "var azulIcon = L.icon({ iconUrl: '".get_plugin_url()."/public/images/punto_azul.png' });\n";
    $style .= "var naranjaIcon = L.icon({ iconUrl: '".get_plugin_url()."/public/images/punto_naranja.png' });\n";
    $style .= "var rosaIcon = L.icon({ iconUrl: '".get_plugin_url()."/public/images/punto_rosa.png' });\n";
    foreach ($ce as $key => $object) {
      if ( $object->ipce <= 0.2 ){
        $escuelas .= "L.marker([$object->lat, $object->lon], {icon: azulIcon}).addTo(map).bindPopup(\"<b>$object->nombre</b><br/>$object->ipce\").bindTooltip(\"<b>$object->nombre</b><br/>$object->ipce\");\n";
      }
      elseif ( $object->ipce <= 0.4 ) {
        $escuelas .= "L.marker([$object->lat, $object->lon], {icon: verdeIcon}).addTo(map).bindPopup(\"<b>$object->nombre</b><br/>$object->ipce\").bindTooltip(\"<b>$object->nombre</b><br/>$object->ipce\");\n";
      }
      elseif ( $object->ipce <= 0.6 ) {
        $escuelas .= "L.marker([$object->lat, $object->lon], {icon: amarilloIcon}).addTo(map).bindPopup(\"<b>$object->nombre</b><br/>$object->ipce\").bindTooltip(\"<b>$object->nombre</b><br/>$object->ipce\");\n";
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
  return "\n$style\n$escuelas\n";
}

function get_mapa_interactivo($titulo, $var, $cantidad, $msg, $c1, $c2, $c3, $c4, $feature, $nombreVar){
  return "\n
	var info = L.control();
	info.onAdd = function (map) {
		this._div = L.DomUtil.create('div', 'info');
    L.DomEvent.disableClickPropagation(this._div);
		this.update();
		return this._div;
	};
	info.update = function (props) {
		this._div.innerHTML = '$titulo' +  (props ?
			'<b>' + props.$var + '</b><br />' + $cantidad : '$msg');
	};
	info.addTo(map);
	function getColor(d) {
		return d > $c4 ? '#E94190' :
				d > $c3  ? '#F39200' :
				d >= $c2  ? '#FCEA12' :
				d >= $c1   ? '#94C11F' : '#009FE3';
	}
	function style(feature) {
		return { weight: 2, opacity: 1, color: 'white', dashArray: '3', fillOpacity: 0.7, fillColor: getColor($feature) };
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
	geojson = L.geoJson($nombreVar, {	style: style,	onEachFeature: onEachFeature	}).addTo(map);
  \n";
}

function get_geojson_indice_municipio($wpdb, $filtro, $anyo, $nombreVar){
  $coordenada = "m.geojson_municipio".map_load();
  if( (strlen($filtro) > 0) && !(1 === preg_match('~[0-9]~', $filtro)) ){
    $filtro = " AND i.departamento = '$filtro' ";
  } else {
    $filtro = "";
  }
  if ( $anyo >= 2014 ){
    $anyo = " AND i.anyo = $anyo ";
  } else {
    $anyo = " AND i.anyo = 2015 ";
  }
  $sql = "SELECT i.id AS id, i.municipio AS municipio , i.ipn AS indice, $coordenada AS coordenada FROM ind_municipio i, ind_ctl_departamento d, ind_ctl_municipio m WHERE i.departamento = d.nombre_departamento AND d.id = m.ctl_departamento_id AND i.municipio = m.nombre_municipio $anyo $filtro";
  $hechos = $wpdb->get_results( $sql);
  $json = NULL;
  foreach ($hechos as $key => $object) {
    if ($json != NULL){
      $json.= ",";
    }
    $json.= "{\"type\":\"Feature\",\"id\":\"$object->id\",\"properties\":{\"name\":\"$object->municipio\",\"indice\":$object->indice },\"geometry\":".$object->coordenada."}";
  }

  return "\n<script type=\"text/javascript\">var $nombreVar = {\"type\":\"FeatureCollection\",\"features\":[$json]};</script>\n";
}

function getFiltro($wpdb, $vars){

  $filtro = "";
  if (is_numeric($vars)) {
    $municipios=$wpdb->get_results( "SELECT m.id AS id, d.nombre_departamento AS departamento, m.nombre_municipio AS municipio FROM ind_ctl_departamento AS d INNER JOIN ind_ctl_municipio AS m ON d.id = m.ctl_departamento_id WHERE m.id = $vars group by d.nombre_departamento, m.nombre_municipio" );
    foreach ($municipios as $l) {
      $filtro = " nombre_municipio_ppd = '".strtoupper($l->municipio)."' AND nombre_departamento_ppd = '".strtoupper($l->departamento)."'";
    }
  }
  return $filtro;
}
