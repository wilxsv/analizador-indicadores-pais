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
 $file_name = "retornados.csv";
 $head = "<tr><th>Departamento</th><th>Municipio</th><th>Pais de Repatriación</th><th>Sexo</th><th>Año</th><th>Registro</th></tr>";
 $limit = 1000;
 $sql_grid = "SELECT departamento AS u, municipio AS d, pais_repatriacion AS t, sexo AS c, anyo AS i, registro AS s FROM ind_bnc_retornado ORDER BY registro DESC LIMIT $limit";
 $id = uniqid();

if(isset($_POST['importSubmit'])){
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
	if(!empty($_FILES['input-file-now']['name']) && in_array($_FILES['input-file-now']['type'],$csvMimes)){
		if(is_uploaded_file($_FILES['input-file-now']['tmp_name'])){
			$csvFile = fopen($_FILES['input-file-now']['tmp_name'], 'r');
			switch($_FILES['input-file-now']['name']){
				case "$file_name":
          $wpdb->query("START TRANSACTION;");
					while(($line = fgetcsv($csvFile)) !== FALSE){
            if ( is_numeric($line[0]) ) {
              $sql =  "INSERT INTO ind_bnc_retornado (anyo, departamento, municipio, mes, sexo, edad_rango, estado_civil, persona_dependiente, tiempo_fuera, pais_repatriacion, motivo, nivel_educativo, consulado, antecedentes_penales, tipo_antecedente, espectativa_migrante, registro, usuario, ip, hash) VALUES";
  						$sql .= "($line[0], '$line[1]', '$line[2]', '$line[3]', '$line[4]', '$line[5]', '$line[6]', '$line[7]', '$line[8]', '$line[9]', '$line[10]', '$line[11]', '$line[12]', '$line[13]', '$line[14]', '$line[15]', '$date', $user, '$ip', '$hash')";
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
            $wpdb->query("COMMIT;");
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


$acceso = acceso( $wpdb, "agregaIndMunicipios");
if ( $acceso === true ):

if(!empty($statusMsg)){
	echo '<div class="'.$statusMsgClass.'">'.$statusMsg.'</div>';
}
?>

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
 <table class="table table-bordered display" id="datosregistro<?php echo $id; ?>">
  <thead>
    <?php echo $head; ?>
  </thead>
  <tbody>
   <?php
 	 $hechos = $wpdb->get_results( $sql_grid );
	 foreach ($hechos as $key => $o) {
	   echo "<tr><td>$o->u</td><td>$o->d</td><td>$o->t</td><td>$o->c</td><td>$o->i</td><td>$o->s</td></tr>";
	 }
   ?>
  </tbody>
 </table>
</div>
<?php
 require_once( get_plugin_path()."includes/utils/footer.php" );
?>
<script type="text/javascript">
(function($){
	$.noConflict();
    $('#datosregistro<?php echo $id; ?>').DataTable({
         responsive: true,pageLength: 20, language: {url: '//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json'}, searching: false,dom: 'Bfrtip',buttons: ['copyHtml5','excelHtml5','csvHtml5','pdfHtml5']
    } );
}(jQuery));
</script>

<?php else: ?>

  <h5>Debes ingresar tus credenciales para acceder al contenido.</h5>
  <?php echo $acceso; ?>

<?php endif ?>
