<?php
/**
 * Plugin Name: indicadores-pais-El-Salvador-seguro
 * Plugin URI: http://wordpress.org/plugins/
 * Description: Administración de banco de datos del Sistema Integrado de Estadisticas (SIE), El SIE tiene como objetivo proporcionar información a las autoridades del MJSP para la definición de prioridades, diseño de estrategias, seguimiento a los resultados e impactos de la política del sector y la rendición de cuentas a la ciudadanía.
 * Author: PNUD - El Salvador
 * Version: 0.9
 * Author URI: http://pnud.org.sv/
*/
register_activation_hook( __FILE__, 'createDB' );
/* shortCode */
add_shortcode('generaCodigoSeguridad', 'generaCodigoSeguridad_shortcode' );
add_shortcode('agregaDatosMunicipalidad', 'agregaDatosMunicipio_shortcode' );
add_shortcode('agregaDatosMined', '' );
add_shortcode('agregaDatos911', '' );
add_shortcode('agregaDatosATransito', '' );
add_shortcode('agregaDatosRetornados', '' );
add_shortcode('agregaDatosCentroPenal', '' );
add_shortcode('agregaDatosCEscolar', '' );
/* Visualizadores */
add_shortcode('graficoPriorizacionMunicipal', 'graficoPriorizacionMunicipal_shortcode' );
add_shortcode('graficoAnalisisSituacional', 'graficoAnalisisSituacional_shortcode' );
add_shortcode('graficoFocalizacion', 'graficoFocalizacion_shortcode' );
add_shortcode('graficoCEscolar', 'graficoCEscolar_shortcode' );

if ( is_admin() ) {
	function createDB() {
		require_once( dirname( __FILE__ ) . '/admin/load.php' );
	}
}


//the_content
/**********************************************************************
 *  Views and Widgets
 * *******************************************************************/
/**********************************************************************
 *  Shortcode
 * *******************************************************************/

function generaCodigoSeguridad_shortcode($atts, $mensaje = null) {
	include WP_PLUGIN_DIR."/analizador-indicadores-pais/public/shortCode/generaCodigoSeguridad.php";
}
function agregaDatosMunicipio_shortcode($atts, $mensaje = null) {
	//require_once( dirname( __FILE__ ) . '/admin/load.php' );
	include WP_PLUGIN_DIR."/analizador-indicadores-pais/public/shortCode/agregaDatosMunicipio.php";
}
function graficoPriorizacionMunicipal_shortcode($atts, $mensaje = null) {
	include WP_PLUGIN_DIR."/analizador-indicadores-pais/public/shortCode/graficoPriorizacionMunicipal.php";
}
function graficoAnalisisSituacional_shortcode($atts, $mensaje = null) {
	include WP_PLUGIN_DIR."/analizador-indicadores-pais/public/shortCode/graficoAnalisisSituacional.php";
}
function graficoFocalizacion_shortcode($atts, $mensaje = null) {
	include WP_PLUGIN_DIR."/analizador-indicadores-pais/public/shortCode/graficoFocalizacion.php";
}
function graficoCEscolar_shortcode($atts, $mensaje = null) {
	include WP_PLUGIN_DIR."/analizador-indicadores-pais/public/shortCode/graficoCEscolar.php";
}

/* Acciones */
function files_head_action() {
	$files = '';
	$files .= '<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />';
	$files .= '<link href="'.plugin_dir_url( __FILE__ ).'public/js/leaflet/leaflet.css" rel="stylesheet" />';
	$files .= '<script src="'.plugin_dir_url( __FILE__ ).'public/js/leaflet/leaflet.js"></script>';
	$files .= '<style>#map { width: 100%; height: 500px; }
.info { padding: 6px 8px; font: 10px/12px Arial, Helvetica, sans-serif; background: white; background: rgba(255,255,255,0.8); box-shadow: 0 0 14px rgba(0,0,0,0.2); border-radius: 5px; } .info h4 { margin: 0 0 5px; color: #777; }
.legend { text-align: left; line-height: 15px; color: #555; } .legend i { width: 15px; height: 15px; float: left; margin-right: 8px; opacity: 0.7; }</style>
</head>';
	$files .= '';
	echo $files;
}
add_action('wp_head', 'files_head_action');

?>
