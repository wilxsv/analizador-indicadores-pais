<?php
/**
 * Plugin Name: indicadores-pais-El-Salvador-seguro
 * Plugin URI: http://wordpress.org/plugins/
 * Description: Administración de banco de datos del Sistema Integrado de Estadisticas (SIE), El SIE tiene como objetivo proporcionar información a las autoridades del MJSP para la definición de prioridades, diseño de estrategias, seguimiento a los resultados e impactos de la política del sector y la rendición de cuentas a la ciudadanía.
 * Author: PNUD - El Salvador
 * Version: 0.9
 * Author URI: http://pnud.org.sv/
*/


 function acceso( $user = "", $pass = "" ){
  //Verificacion de uso de protocolo seguro
  if ( !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443 ) {
    return "No esta usando un protocolo seguro";
  } elseif ( $_SESSION['user_name'] == NULL || isset($_SESSION['user_name'] ) ) {
    return generateLoginForm();
  }
  return TRUE;
 }

 function generateLoginForm(){
   echo '<form action="' . esc_url( $_SERVER['REQUEST_URI'] ) . '" method="post">';
    echo '<p>';
    echo 'correo (requerido) <br />';
    echo '<input type="email" name="mail" pattern="[a-zA-Z0-9 ]+" value="' . ( isset( $_POST["cf-name"] ) ? esc_attr( $_POST["cf-name"] ) : '' ) . '" size="40" required />';
    echo '</p>';
    echo '<p>';
    echo 'clave (requerido) <br />';
    echo '<input type="text" name="cf-subject" pattern="[a-zA-Z ]+" value="' . ( isset( $_POST["cf-subject"] ) ? esc_attr( $_POST["cf-subject"] ) : '' ) . '" size="40" />';
    echo '</p>';
    echo '<p><input type="submit" name="submitted" value="Autenticarme"/></p>';
    echo '</form>';
 }
