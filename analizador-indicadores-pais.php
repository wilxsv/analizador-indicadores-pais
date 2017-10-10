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
add_shortcode('graficoAnalisisSituacional', '' );
add_shortcode('graficoFocalizacion', '' );
add_shortcode('graficoCEscolar', '' );

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

?>
