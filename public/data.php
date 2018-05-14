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
require_once( 'genera_estadistica.php' );
require_once( 'genera_tabla.php' );
global $wpdb;

$data = $anyo = $type = $centro = $code = $vars = FALSE;
if ( isset( $_GET['data'] ) ) $data = $_GET['data'];
if ( isset( $_GET['anyo'] ) && is_numeric($_GET['anyo']) ) $anyo = $_GET['anyo'];
if ( isset( $_GET['type'] ) ) $type = $_GET['type'];
if ( isset( $_GET['vars'] ) ) $vars = $_GET['vars'];
if ( isset( $_GET['code'] ) ) $code = $_GET['code'];

// Impresion de tablas en pagina
if ($data == 'table') {
  if ($anyo && $type == 'm') {
    echo getTable($vars, $anyo, $wpdb);
  }elseif ($code && $type == 'f') {
    echo getTablePrioridad($wpdb, $code);
  }elseif ($type == 'c') {
    echo getTableCentroEscolar($wpdb, $anyo, $code);
  }elseif ($data == 'table' && $type == 'e') {
    switch ($code) {
      case "r":
          echo getEstadisticaRetornados($wpdb, 2017, $vars);
          break;
      case "p":
          echo getEstadisticaPrivadosLibertad($wpdb, 2017, $vars);
          break;
      case "t":
          echo getEstadisticaTransito($wpdb, 2017, $vars);
          break;
      case "d":
          echo getEstadisticaDelito($wpdb, 2017, $vars);
          break;
    }
  }elseif ($type == 's') {
    if ($vars){
      echo getTableSiatuacional($wpdb, $anyo, $vars, $code);
    }
  }
  // Inicio de Impresion de tablas situacional
  elseif ($type == 'u') {
    switch ($code) {
      case 4:
          echo "<h6>CRUCES BANCO DE DATOS RETORNADOS </h6>".getEstadisticaRetornados($wpdb, $anyo, $vars);
          break;
      case 3:
          echo "<h6>CRUCES BANCO DE DATOS PERSONAS PRIVADAS DE LIBERTAD </h6>".getEstadisticaPrivadosLibertad($wpdb, $anyo, $vars);
          break;
      case 1:
          echo "<h6>CRUCES BANCO DE DATOS ACCIDENTES DE TRANSITO </h6>".getEstadisticaTransito($wpdb, $anyo, $vars);
          break;
      case 2:
          echo "<h6>CRUCES BANCO DE DATOS DE DELITOS </h6>".getEstadisticaDelito($wpdb, $anyo, $vars);
          break;
    }
    echo "";
  } // Fin de Impresion de tabla situacional
}
// Fin de Impresion de tablas
// Inicio de Impresion de mapas
elseif ($data == 'map') {
  if ($type == 'f' && $vars) {
    echo get_mapa_focalizacion( $vars, get_centro_municipio($wpdb, $vars), $wpdb );
  } elseif ($type == 'c' && $anyo) {
    echo get_mapa_centroescolar($wpdb, $code, get_centro_municipio($wpdb, $code), $anyo);
  } elseif ($anyo && $type == 'm') {
    echo get_mapa_municipal($wpdb, $anyo, $vars, get_centro($wpdb, $vars, TRUE));
  } elseif ($anyo && $type == 's') {
    if ($vars){
      echo get_mapa_analisis_situacional($wpdb, $anyo, $vars, $code, get_centro_municipio($wpdb, $vars));
    }
    else {
      echo 'alert("No a seleccionado un todas las variables requeridas!!");';
    }
  }
}// Fin de data == maps
// Fin de Impresion de mapas
else {
  echo "Petición no procesada";
}




/*
if ($data == 'map' && $anyo && $type != 'm') {
  if ($vars){ echo get_mapa($wpdb, $anyo, $vars, get_centro($wpdb, $vars, TRUE)); }
  else { echo get_mapa($wpdb, $anyo, NULL, get_centro($wpdb, NULL, FALSE)); }
}
else
if ($data == 'map' && $anyo && $type == 's') {
  if ($vars){
    echo get_mapa_situacional($wpdb, $anyo, $vars, $code, get_centro_municipio($wpdb, $vars));
  }
  else {
    echo 'alert("No a seleccionado un todas las variables requeridas!!");';
  }
}
*/
