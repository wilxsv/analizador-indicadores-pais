<?php
/**
 * Plugin Name: indicadores-pais-El-Salvador-seguro
 * Plugin URI: http://wordpress.org/plugins/
 * Description: Administración de banco de datos del Sistema Integrado de Estadisticas (SIE), El SIE tiene como objetivo proporcionar información a las autoridades del MJSP para la definición de prioridades, diseño de estrategias, seguimiento a los resultados e impactos de la política del sector y la rendición de cuentas a la ciudadanía.
 * Author: PNUD - El Salvador
 * Version: 0.9
 * Author URI: http://pnud.org.sv/
*/


 function acceso( $wpdb, $idx ){
  //Verificacion de uso de protocolo seguro
  if ( !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443 ) {
    return "No esta usando un protocolo seguro";
  } elseif ( $_SESSION['user_name'] != NULL || isset($_SESSION['user_name']) || isset($_SESSION['type'])  ) {
    return TRUE;
    return generateLoginForm();
  } elseif ($_POST['subject']) {
    $pass = hash('sha512', $_POST['subject']);
    $mail = $_POST["mail"];
    $sql = "SELECT * FROM ind_seg_usuario WHERE email = '%s' AND password = '%s' AND active =1";
    $id=$wpdb->get_results( $wpdb->prepare( $sql, array($mail , $pass) ) );
    $result = FALSE;
    foreach ($id as $l) {
      session_name('wp-settings-old');
      $_SESSION['user_name'] = $l->email;
      $_SESSION['type'] = $l->rol_id;
      $result = TRUE;
    }
    if ($result){
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
