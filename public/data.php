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
  echo getTable($vars, $anyo, $wpdb);
}elseif ($data == 'table' && $code && $type == 'f') {
  echo getTablePrioridad($code, $wpdb);
}elseif ($data == 'table' && $type == 'c') {
  echo getTableCentroEscolar($wpdb, $anyo);
}
elseif ($data == 'map' && $anyo && $type == 'm') {
  if ($vars){ echo get_mapa($wpdb, $anyo, $vars, get_centro($wpdb, $vars, TRUE)); }
  else { echo get_mapa($wpdb, $anyo, NULL, get_centro($wpdb, NULL, FALSE)); }
}
elseif ($data == 'map' && $type == 'f') {
  if (!$vars) {
    $zoom = 9;
    $centro = get_centro($wpdb, NULL, FALSE);
  }
  elseif (1 === preg_match('~[0-9]~', $vars)) {
    $zoom = 10;
    $centro = get_centro_sector($wpdb, $vars);
  } else {
    $zoom = 10;
    $centro = get_centro_municipio($wpdb, $vars);
  }
  echo get_sv($type, $vars, $wpdb, $centro, $zoom);
}
elseif ($data == 'map' && $type == 'c' && $anyo) {
  if ($code){
    $zoom = 12;
  }else {
    $zoom = 9;
  }
  echo get_mapa_ce($wpdb, $code, get_centro_municipio($wpdb, $code), $zoom, $anyo);
}
else {
  echo "";
}
