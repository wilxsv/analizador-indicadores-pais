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

$municipios = "SELECT departamento, municipio FROM `ind_municipio` group by departamento, municipio order by departamento, municipio";
 
 $qArma=$wpdb->get_results( $municipios );
 
 $series = '';
 $series.= "{ name:'$delito', type:'pie', radius : '55%', center: ['50%', '60%'], data:[";
 foreach ($qArma as $l) {
  $categoria.= "<option value=''>$l->departamento - $l->municipio</option>";
 }
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
	<div class="pad group">
		<div class="grid one-third ">
			  <p>Municipio:
				<select><?php echo $categoria; ?>
				</select> 
			  </p>
			  <p>Fase del PESS:
				<select>
				</select> 
			  </p>
			  <p>Valor del indice entre:
				Min: <input id="min" type="number"><br/>
				Max: <input id="min" type="number"><br/>  
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
}(jQuery));
</script>
