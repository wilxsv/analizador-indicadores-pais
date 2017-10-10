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
				case 'municipal.csv':
					while(($line = fgetcsv($csvFile)) !== FALSE){
						$sql = "INSERT INTO `ind_municipio` (`codigo`,`departamento`, `municipio`, `homicidio`, `total_homicidio_hombre`, `total_homicidio_mujer`, `suicidio`, `accidentes_transito`, `sin_cobertura_primaria`, `pobresa`, `desagrega`, `anyo`, `hash`, `ip`, `usuario`) VALUES ('$line[0]', '$line[1]', '$line[2]', $line[3], $line[4], $line[5], $line[6], $line[7], $line[8], $line[9], $line[10], 2017, '$hash', '$ip', $user)";
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
