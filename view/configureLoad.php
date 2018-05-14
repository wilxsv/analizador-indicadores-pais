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

 if ( isset( $_POST['change'] ) && is_numeric($_POST['change']) ) $change = $_POST['change'];
 if ( isset( $_POST['disable'] ) && is_numeric($_POST['disable']) ) $disable = $_POST['disable'];
 if ( isset( $_POST['disable2'] ) && is_numeric($_POST['disable2']) ) $remove = $_POST['disable2'];
 if ( isset( $_POST['subject2'] ) && strlen($_POST['subject2']) > 6 ) $subject2 = $_POST['subject2'];
 if ( isset( $_POST['tupla'] ) && strlen($_POST['id']) > 0 ) $tupla = $_POST['tupla'];

 function generateUserForm( $wpdb ){
  echo '<form action="' . esc_url( $_SERVER['REQUEST_URI'] ) . '" method="post" id="importFrm">';
  echo '<p>username (requerido)<br /><input type="text" name="username" size="40" required /></p>';
  echo '<p>correo (requerido)<br /><input type="email" name="mail" size="40" required /></p>';
  echo '<p>clave (requerido)<br /><input type="password" name="subject" size="40" /></p>';
  echo "<p>Rol (requerido) <br />".getSelectRol( $wpdb )."</select></p>";
  echo '<p><input type="submit" class="btn btn-primary" name="importSubmit" value="Agregar"></p>';
  echo '</form>';
 }
 function getSelectEnable($idx){
   $si="";
   $no="";
   if ( strcmp($idx, 's') !== 0){
     $no = 'selected = "selected"';
     $si = '';
   } else {
     $si = 'selected = "selected"';
     $no = '';
   }
   $select = "<select class=\"form-control\" name=\"change\" id=\"change\">
    <option value=\"1\" $si >Si</option>
    <option value=\"0\" $no >No</option></select>";
   return $select;
 }
 function getSelectRol( $wpdb ){
   $option = '';
   $query=$wpdb->get_results( "SELECT * FROM ind_seg_rol ORDER BY nombre_rol" );
   foreach ($query as $l) {
    $option.= "<option value='$l->id'>$l->nombre_rol</option>";
   }
   $select = '<select name="rol" id="rol">'.$option.'<option value="0" selected>Seleccione un rol</option></select>';
   return $select;
 }

$status = false;
$total = 0;

if ( isset($tupla) ) {
  if ( $_POST['id'] == 0  ){
    $sql = "DELETE FROM ind_centro_escolar WHERE ((hash = '$tupla'));";
  }elseif ( $_POST['id'] == 1 ) {
    $sql = "DELETE FROM ind_municipio WHERE ((hash = '$tupla'));";
  }else {
    $sql = FALSE;
  }
  if ($sql) {
    $wpdb->query($sql);
    if($wpdb->last_error !== ''){
      $status = 'err';
    } else {
      $status = 'succ';
    }
  }
}

if ( isset($disable) ) {
  if ( $change >= 0 && $change <= 1 ){
    $sql = "UPDATE ind_seg_usuario SET active = $change WHERE id = $disable ;";
    $wpdb->query($sql);
    if($wpdb->last_error !== ''){
      $status = 'err';
    } else {
      $status = 'succ';
    }
  }
  if ( strlen($subject2) >= 6 ) {
    $sql = "UPDATE ind_seg_usuario SET password = '".hash('sha512', $subject2 )."' WHERE id = $disable ;";
    $wpdb->query($sql);
    if($wpdb->last_error !== ''){
      $status = 'err';
    } else {
      $status = 'succ';
    }
  }
}
if ( isset($remove) ) {
  if ( $remove > 0 ){
    $sql = "DELETE FROM ind_seg_usuario WHERE id = $remove; ";
    $wpdb->query($sql);
    if($wpdb->last_error !== ''){
      $status = 'err';
    } else {
      $status = 'succ';
    }
  }
}

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

?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
<style type="text/css">
 .panel-heading a{float: right;}
 #importFrm{margin-bottom: 20px;display: none;}
 #importFrm input[type=file] {display: inline;}
 /*****************************************************************************/
 .nav-tabs { border-bottom: 2px solid #DDD; }
    .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover { border-width: 0; }
    .nav-tabs > li > a { border: none; color: #666; }
        .nav-tabs > li.active > a, .nav-tabs > li > a:hover { border: none; color: #4285F4 !important; background: transparent; }
        .nav-tabs > li > a::after { content: ""; background: #4285F4; height: 2px; position: absolute; width: 100%; left: 0px; bottom: -1px; transition: all 250ms ease 0s; transform: scale(0); }
    .nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after { transform: scale(1); }
 .tab-nav > li > a::after { background: #21527d none repeat scroll 0% 0%; color: #fff; }
 .card {background: #FFF none repeat scroll 0% 0%; box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3); }
</style>
<div class="container">
 <div class="row"> <h3>Modulo de Estadisticas.</h3> </div>
</div>

<?php if(!empty($statusMsg)){
    echo '<div class="container"><div class="row">'.'<div class="alert '.$statusMsgClass.'">'.$statusMsg.'</div>'.'</div></div>';
} ?>

<div class="container">
 <div class="row">
  <div class="col-md-12">
   <div class="cards">
    <ul class="nav nav-tabs" role="tablist">
     <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Registros de acceso</a></li>
     <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Perfiles</a></li>
     <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Roles y permisos</a></li>
     <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Configuraciones</a></li>
    </ul>
    <div class="tab-content">
     <div role="tabpanel" class="tab-pane active" id="home">
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
     </div>
     <div role="tabpanel" class="tab-pane" id="settings">
        <h3>Bancos de datos.</h3>
        <table class="table table-bordered display" id="acceso">
          <thead><tr><th>Categoria</th><th>Fecha</th><th>Hora</th><th>HASH</th><th>Operaciones</th></tr></thead>
          <tbody>
            <?php
            $form = '<form action="' . esc_url( $_SERVER['REQUEST_URI'] ) . '" method="post">';
            $sql = "SELECT * FROM ind_centro_escolar GROUP BY hash" ;
            $hechos = $wpdb->get_results( $sql);
            foreach ($hechos as $key => $o) {
              $date=date_create($o->registro);
              $tag = $form.'<input type="hidden" name="tupla" value="'.$o->hash.'"><input type="hidden" name="id" value="0">'.'<button type="submit" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i> Eliminar carga de datos</button></form>';
              echo "<tr><td>Indice de seguridad de Centros escolares</td><td>".date_format($date,"Y - m - d")."</td><td>".date_format($date,'H:i:s')."</td><td>$o->hash</td><td>$tag</td></tr>";
            }
            $sql = "SELECT * FROM ind_municipio GROUP BY hash" ;
            $hechos = $wpdb->get_results( $sql);
            foreach ($hechos as $key => $o) {
              $date=date_create($o->registro);
              $tag = $form.'<input type="hidden" name="tupla" value="'.$o->hash.'"><input type="hidden" name="id" value="1">'.'<button type="submit" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i> Eliminar carga de datos</button></form>';
              echo "<tr><td>Indice de seguridad de Municipios</td><td>".date_format($date,"Y - m - d")."</td><td>".date_format($date,'H:i:s')."</td><td>$o->hash</td><td>$tag</td></tr>";
            }
            ?>
          </tbody>
        </table>
     </div>
     <div role="tabpanel" class="tab-pane" id="profile">
       <h3>Usuarios del modulo de estadistica.</h3>
       <div class="panel panel-default">
           <div class="panel-heading">
               Usuarios
               <a href="javascript:void(0);" onclick="$('#importFrm').slideToggle();">Registrar a una persona como usuaria</a>
           </div>
           <div class="panel-body">
             <?php echo generateUserForm( $wpdb ); ?>
               <table class="table table-bordered display" id="users">
                   <thead>
                       <tr>
                         <th>Nombre de Usuario</th>
                         <th>Ingreso</th>
                         <th>Ultimo acceso</th>
                         <th>Habilitado</th>
                         <th>Rol</th>
                         <th>Clave</th>
                         <th colspan="2">Acciones</th>
                       </tr>
                   </thead>
                   <tbody>
            <?php
            $sql = "SELECT id, username, create_at, last_access, IF(active = 1, 's' ,'n') AS active, IF(rol_id = 2, 'Analista' ,'Técnico de registro') AS rol_id FROM ind_seg_usuario";
            $hechos = $wpdb->get_results( $sql);
            foreach ($hechos as $key => $object) {
             $var = '<input type="hidden" name="disable" value="'.$object->id.'">';
             $form = '<form action="' . esc_url( $_SERVER['REQUEST_URI'] ) . '" method="post">';
             echo $form;
             echo $var;
             echo "<tr><td>$object->username</td><td>$object->create_at</td><td>$object->last_access</td>";
             echo '<td> '.getSelectEnable( $object->active ).'</td>';
             echo "<td>$object->rol_id</td>";
             echo '<td> <input id="subject2" value="" name="subject2" list="subject2_datalist" placeholder="Actualizar" size="10" oninvalid="this.setCustomValidity(\'Su clave debe poseer: 12 caracteres como minimo, simbolos, mayusculas y minusculas.\')"
 type="password"></td>';
             echo '<td><button type="submit" class="btn btn-info btn-xs"><i class="fas fa-redo" title="Actualizar"></i></button></form></td>';
             echo '<td>'.$form.'<input type="hidden" name="disable2" value="'.$object->id.'">'.'<button type="submit" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i></button></form></td></tr>';
            }
             ?>
               </tbody>
               </table>
     </div></div></div>
     <div role="tabpanel" class="tab-pane" id="messages">
       <h3>Roles y permisos.</h3>
       <table class="table table-bordered display" id="acceso">
         <thead><tr><th>Rol</th><th>Herramienta</th></tr></thead>
         <tbody>
           <?php
           $sql = "SELECT R.nombre_rol AS rr, H.nombre_herramienta AS hh FROM ind_seg_rol AS R, ind_seg_permiso AS P, ind_seg_herramienta AS H WHERE R.id = P.role_id AND P.herramienta_id = H.id" ;
           $hechos = $wpdb->get_results( $sql);
           foreach ($hechos as $key => $o) {
             echo "<tr><td>$o->rr</td><td>$o->hh</td></tr>";
           }
           ?>
         </tbody>
       </table>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>

  <script type="text/javascript">
   (function($){
     $('#acceso').DataTable({pageLength: 20, language: {url: '//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json'}, searching: false,dom: 'Bfrtip',buttons: ['copyHtml5','excelHtml5','csvHtml5','pdfHtml5'] } );
   }(jQuery));
  </script>
