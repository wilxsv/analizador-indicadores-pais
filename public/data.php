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
if ($_GET["data"] == 'table' && is_numeric($_GET['anyo']) && $_GET['type'] == 'm') {
  echo getTable($_GET['type'], $_GET['anyo'], $wpdb);
}
elseif ($_GET['data'] == 'map' && is_numeric($_GET['anyo']) && $_GET['type'] == 'm') {
  echo get_mapa($type, $anyo, $wpdb);
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
                       <th>viff</th>
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

function get_mapa($type, $anyo, $wpdb){
  return "

  		<script>
  		var map = L.map('map', {
  			zoomControl:true, maxZoom:19
  		}).fitBounds([[12.8611580377,-90.7549835047],[14.7543800977,-87.0070933707]]);
  		var hash = new L.Hash(map);
  		var additional_attrib = 'created w. <a href=\"https://github.com/geolicious/qgis2leaf\" target =\"_blank\">qgis2leaf</a> by <a href=\"http://www.geolicious.de\" target =\"_blank\">Geolicious</a> & contributors<br>';
  		var feature_group = new L.featureGroup([]);
  		var raster_group = new L.LayerGroup([]);

  		var basemap_0 =	L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
  		maxZoom: 19,
  		attribution: 'Map data &copy; <a href=\"http://openstreetmap.org\">OpenStreetMap</a> contributors, ' +
  			'<a href=\"http://creativecommons.org/licenses/by-sa/2.0/\">CC-BY-SA</a>, ' +
  			'Imagery © <a href=\"http://mapbox.com\">Mapbox</a>',
  		id: 'mapbox.light'
  	}).addTo(map);
  		/*
  		var basemap_0 = L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  			attribution: additional_attrib + '&copy; <a href=\"http://openstreetmap.org\">OpenStreetMap</a> contributors,<a href=\"http://creativecommons.org/licenses/by-sa/2.0/\">CC-BY-SA</a>'
  		});*/
  		basemap_0.addTo(map);
  		var layerOrder=new Array();
  		function pop_MUNICIPIOS(feature, layer) {
  			var popupContent = '<table><tr><th scope=\"row\">MPIO</th><td>' + Autolinker.link(String(feature.properties['MPIO'])) + '</td></tr></table>';
  			layer.bindPopup(popupContent);
  		}

  		function doStyleMUNICIPIOS(feature) {
  				return {
  					color: '#000000',
  					fillColor: '#d6cd68',
  					weight: 1.3,
  					dashArray: '',
  					opacity: 1.0,
  					fillOpacity: 1.0
  				};

  		}
  		var exp_MUNICIPIOSJSON = new L.geoJson(exp_MUNICIPIOS,{
  			onEachFeature: pop_MUNICIPIOS,
  			style: doStyleMUNICIPIOS
  		});
  		layerOrder[layerOrder.length] = exp_MUNICIPIOSJSON;
  		for (index = 0; index < layerOrder.length; index++) {
  			feature_group.removeLayer(layerOrder[index]);feature_group.addLayer(layerOrder[index]);
  		}
  		//add comment sign to hide this layer on the map in the initial view.
  		feature_group.addLayer(exp_MUNICIPIOSJSON);
  		function pop_IPN2014Municipiosshp(feature, layer) {
  			var popupContent = '<table><tr><th scope=\"row\">Municipio</th><td>' + Autolinker.link(String(feature.properties['MPIO'])) + '</td></tr><tr><th scope=\"row\">Departamento</th><td>' + Autolinker.link(String(feature.properties['Departamen'])) + '</td></tr><tr><th scope=\"row\">Homicidios Mujeres</th><td>' + Autolinker.link(String(feature.properties['HomM2014'])) + '</td></tr><tr><th scope=\"row\">Homicidios</th><td>' + Autolinker.link(String(feature.properties['Hom2014'])) + '</td></tr><tr><th scope=\"row\">Lesiones</th><td>' + Autolinker.link(String(feature.properties['Lesiones'])) + '</td></tr><tr><th scope=\"row\">Viol Intrafamiliar</th><td>' + Autolinker.link(String(feature.properties['VIF'])) + '</td></tr><tr><th scope=\"row\">Desaparecidos</th><td>' + Autolinker.link(String(feature.properties['Desapareci'])) + '</td></tr><tr><th scope=\"row\">Extorsiones</th><td>' + Autolinker.link(String(feature.properties['Extorsione'])) + '</td></tr><tr><th scope=\"row\">Robo</th><td>' + Autolinker.link(String(feature.properties['Robo'])) + '</td></tr><tr><th scope=\"row\">Hurto</th><td>' + Autolinker.link(String(feature.properties['Hurto'])) + '</td></tr><tr><th scope=\"row\">Robo Vehiculos</th><td>' + Autolinker.link(String(feature.properties['RoboVeh'])) + '</td></tr><tr><th scope=\"row\">Hurto Vehiculos</th><td>' + Autolinker.link(String(feature.properties['HurtoVeh'])) + '</td></tr><tr><th scope=\"row\">RV Mercaderia</th><td>' + Autolinker.link(String(feature.properties['RoboVehMer'])) + '</td></tr><tr><th scope=\"row\">Privados Libertad</th><td>' + Autolinker.link(String(feature.properties['Privados'])) + '</td></tr><tr><th scope=\"row\">% Urbano</th><td>' + Autolinker.link(String(feature.properties['pcturb'])) + '</td></tr><tr><th scope=\"row\">CE con Pandillas</th><td>' + Autolinker.link(String(feature.properties['EPP'])) + '</td></tr><tr><th scope=\"row\">Total RHV</th><td>' + Autolinker.link(String(feature.properties['Veh'])) + '</td></tr><tr><th scope=\"row\">IPN2014</th><td>' + Autolinker.link(String(feature.properties['IPN2014'])) + '</td></tr></table>';
  			layer.bindPopup(popupContent);
  		}

  		function doStyleIPN2014Municipiosshp(feature) {
  			if (feature.properties.IPN2014 >= 0.0533 && feature.properties.IPN2014 <= 0.18) {
  				return {
  					color: '#000000',
  					weight: '1.3',
  					fillColor: '#badd69',
  					opacity: '1.0',
  					fillOpacity: '1.0',
  				}
  			}
  			if (feature.properties.IPN2014 >= 0.18 && feature.properties.IPN2014 <= 0.31) {
  				return {
  					color: '#000000',
  					weight: '1.3',
  					fillColor: '#f1f4c7',
  					opacity: '1.0',
  					fillOpacity: '1.0',
  				}
  			}
  			if (feature.properties.IPN2014 >= 0.31 && feature.properties.IPN2014 <= 0.48) {
  				return {
  					color: '#000000',
  					weight: '1.3',
  					fillColor: '#fd9243',
  					opacity: '1.0',
  					fillOpacity: '1.0',
  				}
  			}
  			if (feature.properties.IPN2014 >= 0.48 && feature.properties.IPN2014 <= 0.68) {
  				return {
  					color: '#000000',
  					weight: '1.3',
  					fillColor: '#de4f05',
  					opacity: '1.0',
  					fillOpacity: '1.0',
  				}
  			}
  			if (feature.properties.IPN2014 >= 0.68 && feature.properties.IPN2014 <= 0.84866) {
  				return {
  					color: '#000000',
  					weight: '1.3',
  					fillColor: '#7f2704',
  					opacity: '1.0',
  					fillOpacity: '1.0',
  				}
  			}
  		}
  		var exp_IPN2014MunicipiosshpJSON = new L.geoJson(exp_IPN2014Municipiosshp,{
  			onEachFeature: pop_IPN2014Municipiosshp,
  			style: doStyleIPN2014Municipiosshp
  		});
  		//add comment sign to hide this layer on the map in the initial view.
  		feature_group.addLayer(exp_IPN2014MunicipiosshpJSON);
  		function pop_IPN2015Municipiosshpcopiar(feature, layer) {
  			var popupContent = '<table><tr><th scope=\"row\">Municipio</th><td>' + Autolinker.link(String(feature.properties['MPIO'])) + '</td></tr><tr><th scope=\"row\">Departamento</th><td>' + Autolinker.link(String(feature.properties['departamen'])) + '</td></tr><tr><th scope=\"row\">Homicidios</th><td>' + Autolinker.link(String(feature.properties['homicidios'])) + '</td></tr><tr><th scope=\"row\">Homicidios Mujeres</th><td>' + Autolinker.link(String(feature.properties['homicidio2'])) + '</td></tr><tr><th scope=\"row\">Desaparecidos</th><td>' + Autolinker.link(String(feature.properties['desapareci'])) + '</td></tr><tr><th scope=\"row\">Lesiones</th><td>' + Autolinker.link(String(feature.properties['lesiones'])) + '</td></tr><tr><th scope=\"row\">Viol Intrafamiliar</th><td>' + Autolinker.link(String(feature.properties['vif'])) + '</td></tr><tr><th scope=\"row\">Extorsiones</th><td>' + Autolinker.link(String(feature.properties['extorsione'])) + '</td></tr><tr><th scope=\"row\">Robos</th><td>' + Autolinker.link(String(feature.properties['robo'])) + '</td></tr><tr><th scope=\"row\">Hurtos</th><td>' + Autolinker.link(String(feature.properties['hurto'])) + '</td></tr><tr><th scope=\"row\">Robo Vehiculos</th><td>' + Autolinker.link(String(feature.properties['robodevehi'])) + '</td></tr><tr><th scope=\"row\">Hurto Vehiculos</th><td>' + Autolinker.link(String(feature.properties['hurtodeveh'])) + '</td></tr><tr><th scope=\"row\">RH con Mercaderia</th><td>' + Autolinker.link(String(feature.properties['r_h_conmer'])) + '</td></tr><tr><th scope=\"row\">Privados Libertad</th><td>' + Autolinker.link(String(feature.properties['ppl'])) + '</td></tr><tr><th scope=\"row\">% Urbano</th><td>' + Autolinker.link(String(feature.properties['ppurb'])) + '</td></tr><tr><th scope=\"row\">CE con Pandillas</th><td>' + Autolinker.link(String(feature.properties['epp'])) + '</td></tr><tr><th scope=\"row\">Total RHV</th><td>' + Autolinker.link(String(feature.properties['Veh'])) + '</td></tr><tr><th scope=\"row\">IPN2015</th><td>' + Autolinker.link(String(feature.properties['IPN2015'])) + '</td></tr></table>';
  			layer.bindPopup(popupContent);
  		}

  		function doStyleIPN2015Municipiosshpcopiar(feature) {
  			if (feature.properties.IPN2015 >= 0.0492 && feature.properties.IPN2015 <= 0.18) {
  				return {
  					color: '#000000',
  					weight: '1.3',
  					fillColor: '#badd69',
  					opacity: '1.0',
  					fillOpacity: '1.0',
  				}
  			}
  			if (feature.properties.IPN2015 >= 0.18 && feature.properties.IPN2015 <= 0.31) {
  				return {
  					color: '#000000',
  					weight: '1.3',
  					fillColor: '#f1f4c7',
  					opacity: '1.0',
  					fillOpacity: '1.0',
  				}
  			}
  			if (feature.properties.IPN2015 >= 0.31 && feature.properties.IPN2015 <= 0.48) {
  				return {
  					color: '#000000',
  					weight: '1.3',
  					fillColor: '#fd9243',
  					opacity: '1.0',
  					fillOpacity: '1.0',
  				}
  			}
  			if (feature.properties.IPN2015 >= 0.48 && feature.properties.IPN2015 <= 0.68) {
  				return {
  					color: '#000000',
  					weight: '1.3',
  					fillColor: '#de4f05',
  					opacity: '1.0',
  					fillOpacity: '1.0',
  				}
  			}
  			if (feature.properties.IPN2015 >= 0.68 && feature.properties.IPN2015 <= 0.8337) {
  				return {
  					color: '#000000',
  					weight: '1.3',
  					fillColor: '#7f2704',
  					opacity: '1.0',
  					fillOpacity: '1.0',
  				}
  			}
  		}
  		var exp_IPN2015MunicipiosshpcopiarJSON = new L.geoJson(exp_IPN2015Municipiosshpcopiar,{
  			onEachFeature: pop_IPN2015Municipiosshpcopiar,
  			style: doStyleIPN2015Municipiosshpcopiar
  		});
  		//add comment sign to hide this layer on the map in the initial view.
  		feature_group.addLayer(exp_IPN2015MunicipiosshpcopiarJSON);

  		feature_group.addTo(map);
  		var title = new L.Control();
  		title.onAdd = function (map) {
  			this._div = L.DomUtil.create('div', 'info'); // create a div with a class \"info\"
  			this.update();
  			return this._div;
  		};
  		title.update = function () {
  			this._div.innerHTML = ''
  		};
  		title.addTo(map);
  	var baseMaps = {
  		'OSM Standard': basemap_0
  	};
  		L.control.layers(baseMaps,{\"IPN2015 Municipios\": exp_IPN2015MunicipiosshpcopiarJSON,\"IPN2014 Municipios\": exp_IPN2014MunicipiosshpJSON,\"MUNICIPIOS\": exp_MUNICIPIOSJSON},{collapsed:false}).addTo(map);
  		L.control.scale({options: {position: 'bottomleft',maxWidth: 100,metric: true,imperial: false,updateWhenIdle: false}}).addTo(map);

  		var legend = L.control({position: 'bottomleft'});
  		legend.onAdd = function (map) {
  			var div = L.DomUtil.create('div', 'info legend');
  			div.innerHTML = \"<img src='<?php echo site_url(); ?>/mapas/2016/INP_2014_2015/pictures/ipn.png' width=200 height=200>\";

      		return div;
  		};
  		legend.addTo(map);


  	</script>";
}
