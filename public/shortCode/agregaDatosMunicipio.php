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

 require_once(plugin_dir_path( __FILE__ )."../head_public.php");

$status = false;
$total = 0;

if ( ! empty( $_SERVER['HTTP_CLIENT_IP'] ) ) {
	$ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif ( ! empty( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ) {
	$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
	$ip = $_SERVER['REMOTE_ADDR'];
}
$hash = md5( rand() );
$user = get_current_user_id();

if(isset($_POST['importSubmit'])){
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
	if(!empty($_FILES['input-file-now']['name']) && in_array($_FILES['input-file-now']['type'],$csvMimes)){
		if(is_uploaded_file($_FILES['input-file-now']['tmp_name'])){
			$csvFile = fopen($_FILES['input-file-now']['tmp_name'], 'r');
            fgetcsv($csvFile);
			switch($_FILES['input-file-now']['name']){
				case 'municipio.csv':
					while(($line = fgetcsv($csvFile)) !== FALSE){
						//$sql = "INSERT INTO `ind_municipio` (`codigo`,`departamento`, `municipio`, `homicidio`, `total_homicidio_hombre`, `total_homicidio_mujer`, `suicidio`, `accidentes_transito`, `sin_cobertura_primaria`, `pobresa`, `desagrega`, `anyo`, `hash`, `ip`, `usuario`) VALUES ('$line[0]', '$line[1]', '$line[2]', $line[3], $line[4], $line[5], $line[6], $line[7], $line[8], $line[9], $line[10], 2017, '$hash', '$ip', $user)";
						$sql =  "INSERT INTO `ind_municipio` (`departamento`,`municipio`,`homicidio`,`total_homicidio_mujer`,`desaparecidos`,`lesiones`,`vif`,`extorciones`,`robo`,`hurto`,`robo_vehiculo`,`hurto_vehiculo`,`r_h_conmercio`,`ppl`,`ppurb`,`epp`,`veh`,`anyo`,`usuario`,`ip`,`hash`) VALUES ";
						$sql .= "('$line[0]', '$line[1]', $line[2], $line[3], $line[4], $line[5], $line[6], $line[7], $line[8], $line[9], $line[10], $line[11], $line[12], $line[13], $line[14], $line[15], $line[16], $line[17], $user, '$ip', '$hash')";
						$wpdb->query($sql);
						$total+=1;
					}
					$status = 'succ';
					break;
				default:
					$status = 'err';
			}
			fclose($csvFile);
		}
		else
		{
			$status = 'err';
		}
	}
	else
	{
		$status = 'invalid_file';
	}


}

if(!empty($status)){
    switch($status){
        case 'succ':
            $statusMsgClass = 'alert-success';
            $statusMsg = 'Datos actualizados. '."[ $total ]";
            break;
        case 'err':
            $statusMsgClass = 'alert-danger';
            $statusMsg = 'Se encontraron problemas en el archivo.';
            break;
        case 'invalid_file':
            $statusMsgClass = 'alert-danger';
            $statusMsg = 'Formato no compatible.';
            break;
        default:
            $statusMsgClass = '';
            $statusMsg = '';
    }
}


$acceso = acceso( $wpdb, "agregaDatosMunicipalidad");
if ( $acceso === true ):

if(!empty($statusMsg)){
	echo '<div class="alert '.$statusMsgClass.'">'.$statusMsg.'</div>';
}
?>

<?php if ( is_author(  ) or is_admin(  ) ): ?>
autor
<?php endif; ?>

<link rel="stylesheet" href="<?php echo plugin_dir_url( __FILE__ ); ?>../plugins/bower_components/dropify/dist/css/dropify.min.css">
<div class="row">
	<div class="col-md-4 col-xs-12">
	</div>
	<div class="col-md-8 ol-md-6 col-xs-12">
		<form  method="post" enctype="multipart/form-data" id="importFrm">
			<label for="input-file-now">Subir el archivo en formato csv</label>
			<input type="file" name="input-file-now" id="input-file-now" class="dropify"/>
            <input type="submit" class="btn btn-primary" name="importSubmit" value="Importar archivo">
        </form>
	</div>
</div>
<div class="row">
 <table class="table table-bordered display" id="datosregistro">
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
    $('#datosregistro').DataTable({
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

<?php else: ?>

  <h5>Debes ingresar tus credenciales para acceder al contenido.</h5>
  <?php echo $acceso; ?>



<?php endif ?>
