<?php
ini_set('memory_limit', '256M');
/**
 * Plugin Name: indicadores-pais-El-Salvador-seguro
 * Plugin URI: http://wordpress.org/plugins/
 * Description: Administración de banco de datos del Sistema Integrado de Estadisticas (SIE), El SIE tiene como objetivo proporcionar información a las autoridades del MJSP para la definición de prioridades, diseño de estrategias, seguimiento a los resultados e impactos de la política del sector y la rendición de cuentas a la ciudadanía.
 * Author: PNUD - El Salvador
 * Version: 0.9
 * Author URI: http://pnud.org.sv/
*/


//require_once( ABSPATH . '/wp-config.php' );
require_once( '../../../../wp-load.php' );
require_once( 'genera_mapa.php' );
require_once( 'genera_tabla.php' );

global $wpdb;

$data = $anyo = $type = $centro = $code = $vars = FALSE;
if ( isset( $_GET['data'] ) ) $data = $_GET['data'];
if ( isset( $_GET['anyo'] ) && is_numeric($_GET['anyo']) ) $anyo = $_GET['anyo'];
if ( isset( $_GET['type'] ) ) $type = $_GET['type'];
if ( isset( $_GET['code'] ) ) $code = $_GET['code'];
if ( isset( $_GET['vars'] ) ) $vars = $_GET['vars'];
if ($data == 'table' && $anyo && $type == 'm') {
  echo getTable($_GET['type'], $_GET['anyo'], $wpdb);
}elseif ($data == 'table' && $code && $type == 'f') {
  echo getTablePrioridad($code, $wpdb);
}elseif ($data == 'table' && $type == 'c') {
  echo getTableCentroEscolar($wpdb, $code);
}
elseif ($data == 'map' && $anyo && $type == 'm') {
  echo get_mapa($type, $anyo, $wpdb, get_centro($wpdb, NULL));
}
elseif ($data == 'map' && $type == 'f') {
  if (!$vars) {
    $zoom = 9;
  } else {
    $zoom = 10;
  }
  echo get_sv($type, $vars, $wpdb, get_centro($wpdb, $vars), $zoom);
}
elseif ($data == 'map' && $type == 'c' && $anyo) {
  echo get_mapa_ce($wpdb, $vars, "13.79111, -89.00012", 9, $anyo);
}
else {
  echo "";
}
