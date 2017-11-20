<?php
/**
 * Plugin Name: indicadores-pais-El-Salvador-seguro
 * Plugin URI: http://wordpress.org/plugins/
 * Description: Administración de banco de datos del Sistema Integrado de Estadisticas (SIE), El SIE tiene como objetivo proporcionar información a las autoridades del MJSP para la definición de prioridades, diseño de estrategias, seguimiento a los resultados e impactos de la política del sector y la rendición de cuentas a la ciudadanía.
 * Author: PNUD - El Salvador
 * Version: 0.9
 * Author URI: http://pnud.org.sv/
*/


//require_once( ABSPATH . '/wp-config.php' );
require_once( '../../../../wp-load.php' );
global $wpdb;
$data = $anyo = $type = $centro = FALSE;
if ( isset( $_GET['data'] ) ) $data = $_GET['data'];
if ( isset( $_GET['anyo'] ) && is_numeric($_GET['anyo']) ) $anyo = $_GET['anyo'];
if ( isset( $_GET['type'] ) ) $type = $_GET['type'];
if ( isset( $_GET['centro'] ) ) $centro = $_GET['centro'];
else $centro = "13.69111, -89.19112";

if ($data == 'table' && $anyo && $type == 'm') {
  echo getTable($_GET['type'], $_GET['anyo'], $wpdb);
}
elseif ($data == 'map' && $anyo && $type == 'm') {
  echo get_mapa($type, $anyo, $wpdb, $centro);
}
else {
  echo "";
}

function getTable($type, $anyo, $wpdb){
  if ($type == 'm' && $anyo >= 2014 ){
    $sql = "SELECT * FROM ind_municipio WHERE anyo=$anyo";
    $hechos = $wpdb->get_results( $sql);
  }
  $table = '
  <table class="table table-bordered display" id="datosgrafico">
   <thead><tr><th>Departamento</th>
                       <th>Municipio</th>
                       <th>Homocidio</th>
                       <th>Homicidios mujeres</th>
                       <th>Desaparecidos</th>
                       <th>Lesiones</th>
                       <th>VIF</th>
                       <th>extorciones</th>
                       <th>robo</th>
                       <th>hurto</th>
                       <th>Robo de vehiculos</th>
                       <th>Hurto vehiculos</th>
                       <th>r_h_conmercio</th>
                       <th>ppl</th>
                       <th>ppurb</th>
                       <th>epp</th>
                       <th>Desaparecidos</th>
                       <th>ipn</th>
                     </tr>
   </thead>
   <tbody>';
   foreach ($hechos as $key => $object) {
 	   $table.= "<tr><td>$object->departamento</td><td>$object->municipio</td><td>$object->homicidio</td><td>$object->total_homicidio_mujer</td><td>$object->desaparecidos</td><td>$object->lesiones</td><td>$object->vif</td><td>$object->extorciones</td><td>$object->robo</td><td>$object->hurto</td><td>$object->robo_vehiculo</td><td>$object->hurto_vehiculo</td><td>$object->r_h_conmercio</td><td>$object->ppl</td><td>$object->ppurb</td><td>$object->epp</td><td>$object->veh</td><td>$object->ipn</td></tr>";
 	 }
$table .='</tbody></table><script type="text/javascript">';
$table .="(function($){ $('#datosgrafico').DataTable({ dom: 'Bfrtip',buttons: ['copyHtml5','excelHtml5','csvHtml5','pdfHtml5'] } ); }(jQuery));
</script>";
return $table;
}

function get_mapa($type, $anyo, $wpdb, $centro){
  if ($type == 'm' && $anyo >= 2014 ){
    $sql = "SELECT i.id AS id, i.municipio AS municipio , i.ipn AS indice, m.geojson_municipio AS coordenada FROM ind_municipio i, ind_ctl_departamento d, ind_ctl_municipio m WHERE i.departamento = d.nombre_departamento AND d.id = m.ctl_departamento_id AND i.municipio = m.nombre_municipio AND i.anyo = $anyo ";
    $hechos = $wpdb->get_results( $sql);
  }
  $json = NULL;
  foreach ($hechos as $key => $object) {
    if ($json != NULL){
      $json.= ",";
    }
    $json.= "{\"type\":\"Feature\",\"id\":\"$object->id\",\"properties\":{\"name\":\"$object->municipio\",\"indice\":$object->indice },\"geometry\":{\"type\":\"MultiPolygon\",\"coordinates\":[[[$object->coordenada]]]}}";
  }
  ;
  $datos = "<script type=\"text/javascript\">var municipiosData = {\"type\":\"FeatureCollection\",\"features\":[$json]};</script>";
  return "$datos
<script type=\"text/javascript\">	var map = L.map('map').setView([$centro], 9);
	L.tileLayer('', {
		maxZoom: 18,minZoom: 9,
    attribution: 'Dirección de Información y Análisis',
		id: 'mapbox.light'
	}).addTo(map);
	// control that shows state info on hover
	var info = L.control();
	info.onAdd = function (map) {
		this._div = L.DomUtil.create('div', 'info');
		this.update();
		return this._div;
	};
	info.update = function (props) {
		this._div.innerHTML = '<h4>Municipios</h4>' +  (props ?
			'<b>' + props.name + '</b><br />' + props.indice + ' Índice de priorización<sup></sup>'
			: 'Pase el cursor sobre un municipio');
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
			grades = [0, 0.2, 0.4, 0.6, 0.8],
			labels = [],
			from, to;
		for (var i = 0; i < grades.length; i++) {
			from = grades[i];
			to = grades[i + 1];
			labels.push(
				'<i style=\"background:' + getColor(from + 0.05) + '\"></i> ' +
				from + (to ? '&ndash;' + to : '+'));
		}
		div.innerHTML = labels.join('<br>');
		return div;
	};
	legend.addTo(map);
</script>";
}
