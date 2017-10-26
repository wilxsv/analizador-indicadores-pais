<?php
/**
 * Plugin Name: indicadores-pais-El-Salvador-seguro
 * Plugin URI: http://wordpress.org/plugins/
 * Description: Administración de banco de datos del Sistema Integrado de Estadisticas (SIE), El SIE tiene como objetivo proporcionar información a las autoridades del MJSP para la definición de prioridades, diseño de estrategias, seguimiento a los resultados e impactos de la política del sector y la rendición de cuentas a la ciudadanía.
 * Author: PNUD - El Salvador
 * Version: 0.9
 * Author URI: http://pnud.org.sv/
*/


 global $wpdb;

 $url = 'https://www.gnu.org/software/make/manual/make.pdf';

 $municipios = "SELECT departamento, municipio FROM `ind_municipio` group by departamento, municipio order by departamento, municipio";
 
 $qArma=$wpdb->get_results( $municipios );
 
 foreach ($qArma as $l) {
  $categoria.= "<option value=''>$l->departamento - $l->municipio</option>";
 }
 
 $site = site_url();
?>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" integrity="sha512-M2wvCLH6DSRazYeZRIm1JnYyh22purTM+FDB5CsyxtQJYeKq83arPe5wgbNmcFXGqiSH2XR8dT/fJISVA1r/zQ==" crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js" integrity="sha512-lInM/apFSqyy1o6s89K4iQUKg6ppXEgsVxT35HbzUupEVRh2Eu9Wdl4tHj7dZO0s1uvplcYGmt3498TtHq+log==" crossorigin=""></script>

<style>
#map {
	width: 600px;
	height: 400px;
}
</style>
<div class="row">
	<div class="alert alert-info">
		<strong>Conozca la metodología!</strong>
		 <a href="<?php echo $url; ?>">
			<img src="<?php echo plugin_dir_url( __FILE__ ); ?>../images/pdf-24x24.png" alt="Documento metodologico" width="" height="">
		 </a> 
	</div>
</div>
	
<div class="row">
	<div class="pad group">
		<div class="grid one-third ">
			  <p>Municipio:
				<select name="smunicipio" id="smunicipio"><?php echo $categoria; ?>
				</select> 
			  </p>
			  </p>
			  <p>Valor del indice entre:
				Min: <input id="min" type="number" min="0" max="1"><br/>
				Max: <input id="max" type="number" min="0" max="1"><br/>  
			  </p>
		</div>
		<div class="grid one-third last">
			<div id='map'></div>	
		</div>
	</div>
</div>

<div class="row">
 <div class="col-md-12">

 </div>
</div>


<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.3/leaflet.css" />
<link rel="stylesheet" type="text/css" href="css/own_style.css">
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.3/leaflet.js"></script>
<script src="<?php echo site_url(); ?>/mapas/2016/INP_2014_2015/js/leaflet-hash.js"></script>
<script src="<?php echo site_url(); ?>/mapas/2016/INP_2014_2015/js/Autolinker.min.js"></script>



<div class="row">
 <table class="table table-bordered display" id="datosgrafico">
  <thead>
                    <tr>
                      <th>Departamento</th>
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
  <tbody>
   <?php
     $sql = "SELECT * FROM ind_municipio ORDER BY registro DESC";//LIMIT 3
 	 $hechos = $wpdb->get_results( $sql);
	 foreach ($hechos as $key => $object) { 
	   echo "<tr>
	     <td>$object->departamento</td>
	     <td>$object->municipio</td>
	     <td>$object->homicidio</td>
	     <td>$object->total_homicidio_mujer</td>
	     <td>$object->desaparecidos</td> 
	     <td>$object->lesiones</td>
	     <td>$object->vif</td>
	     <td>$object->extorciones</td>
	     <td>$object->robo</td>
	     <td>$object->hurto</td> 
	     <td>$object->robo_vehiculo</td>
	     <td>$object->hurto_vehiculo</td>
	     <td>$object->r_h_conmercio</td>
	     <td>$object->ppl</td>
	     <td>$object->ppurb</td> 
	     <td>$object->epp</td>
	     <td>$object->veh</td>
	     <td>$object->ipn</td>
	    </tr>";
	 }
   ?>
  </tbody>
 </table>
</div>
<?php
 include(plugin_dir_path( __FILE__ )."../footer_public.php");
?>
<link rel="stylesheet" type="text/css" href="<?php echo plugin_dir_url( __FILE__ ); ?>../plugins/bower_components/datatables/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.4.2/css/buttons.dataTables.min.css"> 
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="//code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" charset="utf8" src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" charset="utf8" src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script type="text/javascript" charset="utf8" src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>

<script type="text/javascript">
(function($){
	$.noConflict();
    $('#datosgrafico').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
    $('#smunicipio').select2({
		language: {
			noResults: function (params) {
				return "Sin registros para ese termino.";
			}
		}
	});
}(jQuery));
</script>
<script src="<?php echo site_url(); ?>/mapas/2016/INP_2014_2015/data/exp_IPN2015Municipiosshpcopiar.js"></script>
<script src="<?php echo site_url(); ?>/mapas/2016/INP_2014_2015/data/exp_IPN2014Municipiosshp.js"></script>
<script src="<?php echo site_url(); ?>/mapas/2016/INP_2014_2015/data/exp_MUNICIPIOS.js"></script>
		<script>
		var map = L.map('map', {
			zoomControl:true, maxZoom:19
		}).fitBounds([[12.8611580377,-90.7549835047],[14.7543800977,-87.0070933707]]);
		var hash = new L.Hash(map);
		var additional_attrib = 'created w. <a href="https://github.com/geolicious/qgis2leaf" target ="_blank">qgis2leaf</a> by <a href="http://www.geolicious.de" target ="_blank">Geolicious</a> & contributors<br>';
		var feature_group = new L.featureGroup([]);
		var raster_group = new L.LayerGroup([]);
		
		var basemap_0 =	L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 19,
		attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
			'<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="http://mapbox.com">Mapbox</a>',
		id: 'mapbox.light'
	}).addTo(map);
		/*
		var basemap_0 = L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', { 
			attribution: additional_attrib + '&copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors,<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>'
		});*/	
		basemap_0.addTo(map);	
		var layerOrder=new Array();
		function pop_MUNICIPIOS(feature, layer) {					
			var popupContent = '<table><tr><th scope="row">MPIO</th><td>' + Autolinker.link(String(feature.properties['MPIO'])) + '</td></tr></table>';
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
			var popupContent = '<table><tr><th scope="row">Municipio</th><td>' + Autolinker.link(String(feature.properties['MPIO'])) + '</td></tr><tr><th scope="row">Departamento</th><td>' + Autolinker.link(String(feature.properties['Departamen'])) + '</td></tr><tr><th scope="row">Homicidios Mujeres</th><td>' + Autolinker.link(String(feature.properties['HomM2014'])) + '</td></tr><tr><th scope="row">Homicidios</th><td>' + Autolinker.link(String(feature.properties['Hom2014'])) + '</td></tr><tr><th scope="row">Lesiones</th><td>' + Autolinker.link(String(feature.properties['Lesiones'])) + '</td></tr><tr><th scope="row">Viol Intrafamiliar</th><td>' + Autolinker.link(String(feature.properties['VIF'])) + '</td></tr><tr><th scope="row">Desaparecidos</th><td>' + Autolinker.link(String(feature.properties['Desapareci'])) + '</td></tr><tr><th scope="row">Extorsiones</th><td>' + Autolinker.link(String(feature.properties['Extorsione'])) + '</td></tr><tr><th scope="row">Robo</th><td>' + Autolinker.link(String(feature.properties['Robo'])) + '</td></tr><tr><th scope="row">Hurto</th><td>' + Autolinker.link(String(feature.properties['Hurto'])) + '</td></tr><tr><th scope="row">Robo Vehiculos</th><td>' + Autolinker.link(String(feature.properties['RoboVeh'])) + '</td></tr><tr><th scope="row">Hurto Vehiculos</th><td>' + Autolinker.link(String(feature.properties['HurtoVeh'])) + '</td></tr><tr><th scope="row">RV Mercaderia</th><td>' + Autolinker.link(String(feature.properties['RoboVehMer'])) + '</td></tr><tr><th scope="row">Privados Libertad</th><td>' + Autolinker.link(String(feature.properties['Privados'])) + '</td></tr><tr><th scope="row">% Urbano</th><td>' + Autolinker.link(String(feature.properties['pcturb'])) + '</td></tr><tr><th scope="row">CE con Pandillas</th><td>' + Autolinker.link(String(feature.properties['EPP'])) + '</td></tr><tr><th scope="row">Total RHV</th><td>' + Autolinker.link(String(feature.properties['Veh'])) + '</td></tr><tr><th scope="row">IPN2014</th><td>' + Autolinker.link(String(feature.properties['IPN2014'])) + '</td></tr></table>';
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
			var popupContent = '<table><tr><th scope="row">Municipio</th><td>' + Autolinker.link(String(feature.properties['MPIO'])) + '</td></tr><tr><th scope="row">Departamento</th><td>' + Autolinker.link(String(feature.properties['departamen'])) + '</td></tr><tr><th scope="row">Homicidios</th><td>' + Autolinker.link(String(feature.properties['homicidios'])) + '</td></tr><tr><th scope="row">Homicidios Mujeres</th><td>' + Autolinker.link(String(feature.properties['homicidio2'])) + '</td></tr><tr><th scope="row">Desaparecidos</th><td>' + Autolinker.link(String(feature.properties['desapareci'])) + '</td></tr><tr><th scope="row">Lesiones</th><td>' + Autolinker.link(String(feature.properties['lesiones'])) + '</td></tr><tr><th scope="row">Viol Intrafamiliar</th><td>' + Autolinker.link(String(feature.properties['vif'])) + '</td></tr><tr><th scope="row">Extorsiones</th><td>' + Autolinker.link(String(feature.properties['extorsione'])) + '</td></tr><tr><th scope="row">Robos</th><td>' + Autolinker.link(String(feature.properties['robo'])) + '</td></tr><tr><th scope="row">Hurtos</th><td>' + Autolinker.link(String(feature.properties['hurto'])) + '</td></tr><tr><th scope="row">Robo Vehiculos</th><td>' + Autolinker.link(String(feature.properties['robodevehi'])) + '</td></tr><tr><th scope="row">Hurto Vehiculos</th><td>' + Autolinker.link(String(feature.properties['hurtodeveh'])) + '</td></tr><tr><th scope="row">RH con Mercaderia</th><td>' + Autolinker.link(String(feature.properties['r_h_conmer'])) + '</td></tr><tr><th scope="row">Privados Libertad</th><td>' + Autolinker.link(String(feature.properties['ppl'])) + '</td></tr><tr><th scope="row">% Urbano</th><td>' + Autolinker.link(String(feature.properties['ppurb'])) + '</td></tr><tr><th scope="row">CE con Pandillas</th><td>' + Autolinker.link(String(feature.properties['epp'])) + '</td></tr><tr><th scope="row">Total RHV</th><td>' + Autolinker.link(String(feature.properties['Veh'])) + '</td></tr><tr><th scope="row">IPN2015</th><td>' + Autolinker.link(String(feature.properties['IPN2015'])) + '</td></tr></table>';
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
			this._div = L.DomUtil.create('div', 'info'); // create a div with a class "info"
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
		L.control.layers(baseMaps,{"IPN2015 Municipios": exp_IPN2015MunicipiosshpcopiarJSON,"IPN2014 Municipios": exp_IPN2014MunicipiosshpJSON,"MUNICIPIOS": exp_MUNICIPIOSJSON},{collapsed:false}).addTo(map);
		L.control.scale({options: {position: 'bottomleft',maxWidth: 100,metric: true,imperial: false,updateWhenIdle: false}}).addTo(map);
		
		var legend = L.control({position: 'bottomleft'});
		legend.onAdd = function (map) {
			var div = L.DomUtil.create('div', 'info legend'); 
			div.innerHTML = "<img src='<?php echo site_url(); ?>/mapas/2016/INP_2014_2015/pictures/ipn.png' width=200 height=200>";
			
    		return div;
		};
		legend.addTo(map);
		
		
	</script>
