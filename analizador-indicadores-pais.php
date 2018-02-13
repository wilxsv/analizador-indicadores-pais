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
add_action('admin_menu', 'setup_menu');
/* shortCode */
add_shortcode('generaCodigoSeguridad', 'generaCodigoSeguridad_shortcode' );
add_shortcode('agregaDatosMunicipalidad', 'agregaDatosMunicipio_shortcode' );
add_shortcode('agregaDatosMined', '' );
add_shortcode('agregaDatosPNC', '' );
add_shortcode('agregaDatosATransito', 'agregaDatosATransito_shortcode' );
add_shortcode('agregaDatosRetornados', '' );
add_shortcode('agregaDatosCentroPenal', 'agregaDatosCentroPenal_shortcode' );
add_shortcode('agregaIndCEscolar', '' );
add_shortcode('agregaIndMunicipios', '' );
/* Visualizadores */
add_shortcode('graficoPriorizacionMunicipal', 'graficoPriorizacionMunicipal_shortcode' );
add_shortcode('graficoAnalisisSituacional', 'graficoAnalisisSituacional_shortcode' );
add_shortcode('graficoFocalizacion', 'graficoFocalizacion_shortcode' );
add_shortcode('graficoCEscolar', 'graficoCEscolar_shortcode' );
add_shortcode('estadisticasBasicas', 'estadisticasBasicas_shortcode' );

if ( is_admin() ) {
	function createDB() {
		require_once( dirname( __FILE__ ) . '/admin/load.php' );
	}
}
function setup_menu(){
 add_menu_page('Modulo de estadisticas', 'Modulo de estadisticas', 'manage_options', 'diatools', 'configure_load', 'dashicons-location-alt');
}

//Configuraciones globales
function https_habilitado(){
	return FALSE;
}
//the_content
/**********************************************************************
 *  Views and Widgets
 * *******************************************************************/
 function get_plugin_path(){
	 return plugin_dir_path( __FILE__ );
 }
 function get_plugin_url(){
	 return plugins_url();
 }
 function configure_load()
 {
	require_once('view/configureLoad.php');
 }
/**********************************************************************
 *  Shortcode
 *********************************************************************/
/*  Agrega Registros a los bancos de datos
*/
function agregaDatosATransito_shortcode($atts, $mensaje = null) {
	require_once WP_PLUGIN_DIR."/analizador-indicadores-pais/public/shortCode/add/agregaDatosATransito.php";
}
function generaCodigoSeguridad_shortcode($atts, $mensaje = null) {
	require_once WP_PLUGIN_DIR."/analizador-indicadores-pais/public/shortCode/generaCodigoSeguridad.php";
}
function agregaDatosMunicipio_shortcode($atts, $mensaje = null) {
	require_once WP_PLUGIN_DIR."/analizador-indicadores-pais/public/shortCode/agregaDatosMunicipio.php";
}
function agregaDatosCentroPenal_shortcode($atts, $mensaje = null) {
	require_once WP_PLUGIN_DIR."/analizador-indicadores-pais/public/shortCode/agregaDatosCentroPenal.php";
}
function graficoPriorizacionMunicipal_shortcode($atts, $mensaje = null) {
	require_once WP_PLUGIN_DIR."/analizador-indicadores-pais/public/shortCode/graficoPriorizacionMunicipal.php";
}
function graficoAnalisisSituacional_shortcode($atts, $mensaje = null) {
	require_once WP_PLUGIN_DIR."/analizador-indicadores-pais/public/shortCode/graficoAnalisisSituacional.php";
}
function graficoFocalizacion_shortcode($atts, $mensaje = null) {
	require_once WP_PLUGIN_DIR."/analizador-indicadores-pais/public/shortCode/graficoFocalizacion.php";
}
function graficoCEscolar_shortcode($atts, $mensaje = null) {
	require_once WP_PLUGIN_DIR."/analizador-indicadores-pais/public/shortCode/graficoCEscolar.php";
}
function estadisticasBasicas_shortcode($atts, $mensaje = null) {
	require_once WP_PLUGIN_DIR."/analizador-indicadores-pais/public/shortCode/estadisticasBasicas.php";
}

/* Acciones */
function files_head_action() {
	$files = '<link href="'.plugin_dir_url( __FILE__ ).'public/js/leaflet/leaflet.css" rel="stylesheet" />';
	$files .= '<script src="'.plugin_dir_url( __FILE__ ).'public/js/leaflet/leaflet.js"></script>';
	$files .= '<style>#map { width: 100%; height: 900px; }</style>';
	$files .= '<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />';
	echo $files;
}
add_action('wp_head', 'files_head_action');

?>
