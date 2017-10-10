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
 <div class="col-md-12">
  <p>
	  Municipio: 
	   <select>
  <option value="volvo">Choloma</option>
  <option value="saab">La Ceiba</option>
  <option value="mercedes">Distrito Central</option>
  <option value="audi">Siguatepeque</option>
</select> 
  </p>
 </div>
 <div class="col-md-4">
	 <div class="col-md-6">Estadisticas</div>
	 <div class="col-md-6">Mapas</div>
 </div>
 <div class="col-md-8">
	 <div id='map'></div>
 </div>
</div>
<script>
	var cities = L.layerGroup();

	L.marker([39.61, -105.02]).bindPopup('This is Littleton, CO.').addTo(cities),
	L.marker([39.74, -104.99]).bindPopup('This is Denver, CO.').addTo(cities),
	L.marker([39.73, -104.8]).bindPopup('This is Aurora, CO.').addTo(cities),
	L.marker([39.77, -105.23]).bindPopup('This is Golden, CO.').addTo(cities);


	var mbAttr = 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
			'<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="http://mapbox.com">Mapbox</a>',
		mbUrl = 'https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';

	var grayscale   = L.tileLayer(mbUrl, {id: 'mapbox.light', attribution: mbAttr}),
		streets  = L.tileLayer(mbUrl, {id: 'mapbox.streets',   attribution: mbAttr});

	var map = L.map('map', {
		center: [39.73, -104.99],
		zoom: 10,
		layers: [grayscale, cities]
	});

	var baseLayers = {
		"Grayscale": grayscale,
		"Streets": streets
	};

	var overlays = {
		"Cities": cities
	};

	L.control.layers(baseLayers, overlays).addTo(map);
</script>

<div class="row">
 <table class="table table-bordered">
  <thead>
                    <tr>
                      <th>Departamento</th>
                      <th>Municipio</th>
                      <th>Homocidio</th>
                      <th>Suicidio</th>
                      <th>A. Transito</th>
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
	     <td>$object->suicidio</td>
	     <td>$object->accidentes_transito</td> 
	    </tr>";
	 }
   ?>
  </tbody>
 </table>
</div>
<?php
 include(plugin_dir_path( __FILE__ )."../footer_public.php");
?>
