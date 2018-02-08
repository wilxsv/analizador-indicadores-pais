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

 function generateUserForm(){
  echo '<form action="' . esc_url( $_SERVER['REQUEST_URI'] ) . '" method="post" id="importFrm">';
  echo '<p>username (requerido)<br /><input type="text" name="username" size="40" required /></p>';
  echo '<p>correo (requerido)<br /><input type="email" name="mail" size="40" required /></p>';
  echo '<p>clave (requerido)<br /><input type="password" name="subject" size="40" /></p>';
  echo '<p>Rol (requerido) <br /><select name="rol" id="rol"><option value="2">Analista</option><option value="1" selected>Carga de datos</option></select></p>';
  echo '<p><input type="submit" class="btn btn-primary" name="importSubmit" value="Agregar"></p>';
  echo '</form>';
 }

$status = false;
$total = 0;

if ( isset($_POST['importSubmit']) ) {
  if(isset($_POST['username']) && isset($_POST['mail']) && isset($_POST['subject']) && isset($_POST['rol']) ){
    $sql = "INSERT INTO ind_seg_usuario (username, email, salt, password, active, rol_id, create_at) VALUES ";
    $sql .= "('".$_POST['username']."','".$_POST['mail']."','".uniqid()."','".hash('sha512', $_POST['subject'])."',1,".$_POST['rol'].",'".date('Y-m-d H:i:s')."' )";
    $wpdb->query($sql);
    if($wpdb->last_error !== ''){
      $status = 'err';
    } else {
      $status = 'succ';
    }
  } else {
    $status = 'err';
  }
}

if(!empty($status)){
    switch($status){
        case 'succ':
            $statusMsgClass = 'alert-success';
            $statusMsg = 'Banco de datos actualizado. ';
            break;
        case 'err':
            $statusMsgClass = 'alert-danger';
            $statusMsg = 'Se encontraron problemas en los campos.';
            break;
        default:
            $statusMsgClass = '';
            $statusMsg = '';
    }
}

include(plugin_dir_path( __FILE__ )."../public/head_public.php");
include(plugin_dir_path( __FILE__ )."../public/footer_public.php");
?>


<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
 .panel-heading a{float: right;}
 #importFrm{margin-bottom: 20px;display: none;}
 #importFrm input[type=file] {display: inline;}
</style>
<div class="container">
	<h3>Usuarios del modulo de estadistica.</h3>
</div>
<div class="container">
    <?php if(!empty($statusMsg)){
        echo '<div class="alert '.$statusMsgClass.'">'.$statusMsg.'</div>';
    } ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            Usuarios
            <a href="javascript:void(0);" onclick="$('#importFrm').slideToggle();">Registrar a una persona como usuaria</a>
        </div>
        <div class="panel-body">
          <?php echo generateUserForm(); ?>
            <table class="table table-bordered display" id="users">
                <thead>
                    <tr>
                      <th>Nombre de Usuario</th>
                      <th>Ingreso</th>
                      <th>Ultimo acceso</th>
                      <th>Habilitado</th>
                      <th>Rol</th>
                      <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
					<?php
					$sql = "SELECT id, username, create_at, last_access, IF(active = 1, 'Si' ,'NO') AS active, IF(rol_id = 2, 'Analista' ,'Técnico de registro') AS rol_id FROM ind_seg_usuario";
					$hechos = $wpdb->get_results( $sql);
					foreach ($hechos as $key => $object) {
          echo '<form action="' . esc_url( $_SERVER['REQUEST_URI'] ) . '" method="post">';
          echo '<input type="hidden" name="disable" value="'.$object->id.'">';
    			echo "<tr><td>$object->username</td><td>$object->create_at</td><td>$object->last_access</td>";
          echo ''."<td>$object->active</td>";
          echo "<td>$object->rol_id</td>";
          echo '<td><input type="submit" class="btn btn-primary btn-xs" value="Actualizar"></td></tr>';
          echo '</form>';
					}
					 ?>
            </tbody>
            </table>
        </div>
    </div>
</div>
<div class="container">
  <h3>Accesos al modulo.</h3>
  <table class="table table-bordered display" id="acceso">
    <thead><tr><th>Fecha</th><th>Correo</th><th>IP</th><th>Resultado</th></tr></thead>
    <tbody>
      <?php
      $sql = "SELECT A.fecha, A.ip, U.username AS user, IF(login = 1, 'Si' ,'NO') AS login FROM ind_seg_usuario AS U, ind_seg_acceso AS A WHERE U.id = A.user" ;
      $hechos = $wpdb->get_results( $sql);
      foreach ($hechos as $key => $o) {
        echo "<tr><td>$o->fecha</td><td>$o->user</td><td>$o->ip</td><td>$o->login</td></tr>";
      }
      ?>
    </tbody>
  </table>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>

  <script type="text/javascript">
   (function($){
     $('#users').DataTable({pageLength: 2, language: {url: '//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json'}, searching: false,dom: 'Bfrtip',buttons: ['copyHtml5','excelHtml5','csvHtml5','pdfHtml5'] } );
     $('#acceso').DataTable({pageLength: 20, language: {url: '//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json'}, searching: false,dom: 'Bfrtip',buttons: ['copyHtml5','excelHtml5','csvHtml5','pdfHtml5'] } );
   }(jQuery));
  </script>
</div>
