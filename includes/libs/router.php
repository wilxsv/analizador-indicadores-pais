<?php
/**
 * Plugin Name: indicadores-pais-El-Salvador-seguro
 * Plugin URI: http://wordpress.org/plugins/
 * Description: Administración de banco de datos del Sistema Integrado de Estadisticas (SIE), El SIE tiene como objetivo proporcionar información a las autoridades del MJSP para la definición de prioridades, diseño de estrategias, seguimiento a los resultados e impactos de la política del sector y la rendición de cuentas a la ciudadanía.
 * Author: PNUD - El Salvador
 * Author URI: http://www.seguridad.gob.sv/dia/
*/

/*
  Gestiona los accesos al modulo, retorna verdadero solo si cumple con lo que se requiere
*/
 function acceso( $wpdb, $idx ){
  //Verificacion de uso de protocolo seguro
  if (false){//( https_habilitado() || !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] != 443 ) {
    return "No esta usando un protocolo seguro";
  } elseif ( $_SESSION['user_name'] != NULL || isset($_SESSION['user_name']) || isset($_SESSION['type'])  ) {
    //si ya posee sesion abierta
    if ( strpos($_SESSION['type'], $idx) !== FALSE ) {
      //echo $_SESSION['type']." - ".$idx;
      return TRUE;
    } else {
      return generateLoginForm();
      //return "<h4> Sabemos que eres usuario pero por el momento no podemos mostrar este contenido, ...</h4>";
    }
    //return generateLoginForm();
  } elseif ($_POST['subject']) {
    $pass = hash('sha512', $_POST['subject']);
    $mail = $_POST["mail"];
    $sql = "SELECT U.id, U.email, R.nombre_rol, H.nombre_herramienta
      FROM ind_seg_usuario AS U, ind_seg_rol AS R, ind_seg_permiso AS P, ind_seg_herramienta AS H
      WHERE U.rol_id = R.id AND R.id = P.role_id AND P.herramienta_id = H.id
	       AND U.active = 1 AND H.enabled = 1 AND U.email = '%s' AND U.password = '%s'";
    $id=$wpdb->get_results( $wpdb->prepare( $sql, array($mail , $pass) ) );
    $result = FALSE;
    $_SESSION['type'] = "";
    $user = '';
    foreach ($id as $l) {
      $sql = "INSERT INTO ind_seg_acceso (,ip,user,login) VALUES";
      $sql .= "(CURRENT_TIMESTAMP,$l->email,$l->id, 1)";
      $_SESSION['user_name'] = $l->email;
      $_SESSION['user_rol'] = $l->nombre_rol;
      $_SESSION['type'] .= "$l->nombre_herramienta / ";
      $_SESSION['user_id'] = $l->id;
      $result = TRUE;
      $user = $l->id;
    }
    if ($result){
      $hoy = date("Y-m-d H:i:s");
      $sql = "UPDATE ind_seg_usuario SET last_access = '$hoy' WHERE id = $user";
      $wpdb->query($sql);
      $wpdb->insert("ind_seg_acceso", array('fecha' => date('Y-m-d H:i:s'),'user' => $user,'login' => 1, 'ip' => get_client_ip_server()), array( '%s', '%d', '%d', '%s' ));
      if ( strpos($_SESSION['type'], $idx) !== FALSE ) {
        return TRUE;
      } else {
        return generateLoginForm();
        return "<h4> Sabemos que eres usuario pero por el momento no podemos mostrar este contenido, ...</h4>";
      }
      return TRUE;
    } else {
      return generateLoginForm();
    }
  }
  return generateLoginForm();
 }

 function generateLoginForm(){
   echo '<form action="' . esc_url( $_SERVER['REQUEST_URI'] ) . '" method="post">';
    echo '<p>';
    echo 'correo (requerido) <br />';
    echo '<input type="email" name="mail" value="' . ( isset( $_POST["mail"] ) ? esc_attr( $_POST["cf-name"] ) : '' ) . '" size="40" required />';
    echo '</p>';
    echo '<p>';
    echo 'clave (requerido) <br />';
    echo '<input type="password" name="subject" size="40" />';
    echo '</p>';
    echo '<p><input type="submit" name="submitted" value="Autenticarme"/></p>';
    echo '</form>';
 }

 function get_client_ip_server() {
     $ipaddress = '';
     if ($_SERVER['HTTP_CLIENT_IP'])
         $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
     else if($_SERVER['HTTP_X_FORWARDED_FOR'])
         $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
     else if($_SERVER['HTTP_X_FORWARDED'])
         $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
     else if($_SERVER['HTTP_FORWARDED_FOR'])
         $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
     else if($_SERVER['HTTP_FORWARDED'])
         $ipaddress = $_SERVER['HTTP_FORWARDED'];
     else if($_SERVER['REMOTE_ADDR'])
         $ipaddress = $_SERVER['REMOTE_ADDR'];
     else
         $ipaddress = 'UNKNOWN';

     return $ipaddress;
 }

 function get_client_ip_env() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';

    return $ipaddress;
}
