<?php
/**
 * Plugin Name: indicadores-pais-El-Salvador-seguro
 * Plugin URI: http://wordpress.org/plugins/
 * Description: Administración de banco de datos del Sistema Integrado de Estadisticas (SIE), El SIE tiene como objetivo proporcionar información a las autoridades del MJSP para la definición de prioridades, diseño de estrategias, seguimiento a los resultados e impactos de la política del sector y la rendición de cuentas a la ciudadanía.
 * Author: PNUD - El Salvador
 * Author URI: http://www.seguridad.gob.sv/dia/
*/

 global $wpdb;

 require_once( get_plugin_path()."includes/utils/head.php" );

 $status = false;
 $total = 0;
 $linea = 0;
 $statusMsg = '';
 $idDiv = uniqid();
 $ip = get_client_ip_server();
 $hash = md5( rand() );
 $user = $_SESSION['user_id'];
 $date = date('Y-m-d H:i:s');
 $file_name = "focalizacion.csv";
 $anyo = 0;

if(isset($_POST['importSubmitFO'])){
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
	if(!empty($_FILES['input-file-now']['name']) && in_array($_FILES['input-file-now']['type'],$csvMimes)){
		if(is_uploaded_file($_FILES['input-file-now']['tmp_name'])){
			$csvFile = fopen($_FILES['input-file-now']['tmp_name'], 'r');
			switch($_FILES['input-file-now']['name']){
				case "$file_name":
          $wpdb->query("START TRANSACTION;");
					while(($line = fgetcsv($csvFile)) !== FALSE){
            if ( is_numeric($line[4]) && is_numeric($line[6]) && is_numeric($line[7]) ) {
              $sql =  "(departamento, municipio, fase_pess, sector_policial, codigo_ce, nombre_ce, lon, lat, sector, registro, usuario, ip, hash)
VALUES";
  						$sql .= "('$line[0]', '$line[1]', '$line[2]', '$line[3]', $line[4], '$line[5]', $line[6], $line[7], '$line[8]', '$date', $user, '$ip', '$hash')";
              $wpdb->query($sql);
              if($wpdb->last_error == ''){
                $total+=1;
                $linea+=1;
              }
            } else {
              $linea+=1;
            }
					}
          if ( $linea == $total ){
            $status = 'succ';
          } else {
            $status = 'err';
            $total = $linea - $total;
            $statusMsg = " [ $total ] filas no poseen en formato requerido por tanto se proceso pero no se grabaron los registros";
            $wpdb->query("ROLLBACK");
          }
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
            $statusMsgClass = 'isa_success';
            $statusMsg .= 'Datos actualizados. '."[ $total ]";
            break;
        case 'err':
            $statusMsgClass = 'isa_error';
            $statusMsg .= 'Se encontraron problemas en el archivo.';
            break;
        case 'invalid_file':
            $statusMsgClass = 'isa_warning';
            $statusMsg .= 'Formato no compatible.';
            break;
        default:
            $statusMsgClass = 'isa_info';
            $statusMsg .= '';
    }
}

$acceso = acceso( $wpdb, "agregaIndFocalizacion");
if ( $acceso === true ):

if(!empty($statusMsg)){
	echo '<div class="'.$statusMsgClass.'">'.$statusMsg.'</div>';
}
?>

<div class="row">
	<div class="col-md-4 col-xs-12">
    <h2>Registro de Focalizacion</h2>
	</div>
	<div class="col-md-8 ol-md-6 col-xs-12">
		<form  method="post" enctype="multipart/form-data" id="importFrm">
			<label for="input-file-now">Subir el archivo en formato csv</label>
			<input type="file" name="input-file-now" id="input-file-now" class="dropify"/>
            <input type="submit" class="btn btn-primary" name="importSubmitFO" value="Importar archivo">
        </form>
	</div>
</div>

<?php
 require_once( get_plugin_path()."includes/utils/footer.php" );
?>
<?php else: ?>
  <h5>Debes ingresar tus credenciales para acceder al contenido.</h5>
  <?php echo $acceso; ?>
<?php endif ?>
