<?php
/** 
 * Plugin Name: indicadores-pais-El-Salvador-seguro
 * Plugin URI: http://wordpress.org/plugins/
 * Description: Administración de banco de datos del Sistema Integrado de Estadisticas (SIE), El SIE tiene como objetivo proporcionar información a las autoridades del MJSP para la definición de prioridades, diseño de estrategias, seguimiento a los resultados e impactos de la política del sector y la rendición de cuentas a la ciudadanía.
 * Author: Dirección de Información y Análisis / PNUD - El Salvador
 * Version: 1.0
 * Author URI: http://www.seguridad.gob.sv/dia/
*/
require_once( get_plugin_path()."includes/libs/router.php" );

register_activation_hook( __FILE__, 'createDB' );
add_action('admin_menu', 'setup_menu');
/* shortCode */
add_shortcode('generaCodigoSeguridad', 'generaCodigoSeguridad_shortcode' );
add_shortcode('agregaDatosDelito', 'agregaDatosDelito_shortcode' );
add_shortcode('agregaDatosATransito', 'agregaDatosATransito_shortcode' );
add_shortcode('agregaDatosRetornados', 'agregaDatosRetornados_shortcode' );
add_shortcode('agregaDatosCentroPenal', 'agregaDatosCentroPenal_shortcode' );
add_shortcode('agregaIndCEscolar', 'agregaIndCEscolar_shortcode' );
add_shortcode('agregaIndMunicipios', 'agregaIndMunicipios_shortcode' );
/* Visualizadores */
add_shortcode('graficoPriorizacionMunicipal', 'graficoPriorizacionMunicipal_shortcode' );
add_shortcode('graficoAnalisisSituacional', 'graficoAnalisisSituacional_shortcode' );
add_shortcode('graficoFocalizacion', 'graficoFocalizacion_shortcode' );
add_shortcode('graficoCEscolar', 'graficoCEscolar_shortcode' );
//add_shortcode('estadisticasBasicas', 'estadisticasBasicas_shortcode' );

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
	 return plugin_dir_url( __FILE__ );
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
function agregaDatosDelito_shortcode($atts, $mensaje = null) {
	require_once get_plugin_path()."public/shortCode/add/agregaDatosDelito.php";
}
function agregaDatosATransito_shortcode($atts, $mensaje = null) {
	require_once get_plugin_path()."public/shortCode/add/agregaDatosATransito.php";
}
function agregaDatosCentroPenal_shortcode($atts, $mensaje = null) {
	require_once get_plugin_path()."public/shortCode/add/agregaDatosCentroPenal.php";
}
function agregaDatosRetornados_shortcode($atts, $mensaje = null) {
	require_once get_plugin_path()."public/shortCode/add/agregaDatosRetornados.php";
}
function agregaIndCEscolar_shortcode($atts, $mensaje = null) {
	require_once get_plugin_path()."public/shortCode/add/agregaIndCEscolar.php";
}
function agregaIndMunicipios_shortcode($atts, $mensaje = null) {
	require_once get_plugin_path()."public/shortCode/add/agregaIndMunicipios.php";
}

function generaCodigoSeguridad_shortcode($atts, $mensaje = null) {
	require_once get_plugin_path()."public/shortCode/generaCodigoSeguridad.php";
}
function agregaDatosMunicipio_shortcode($atts, $mensaje = null) {
	require_once get_plugin_path()."public/shortCode/add/agregaDatosMunicipio.php";
}
/*  Visualizadores de indices en mapas de calor
*/
function graficoAnalisisSituacional_shortcode($atts, $mensaje = null) {
	require_once get_plugin_path()."public/shortCode/show/graficoAnalisisSituacional.php";
}
function graficoPriorizacionMunicipal_shortcode($atts, $mensaje = null) {
	require_once get_plugin_path()."public/shortCode/show/graficoPriorizacionMunicipal.php";
}
function graficoCEscolar_shortcode($atts, $mensaje = null) {
	require_once get_plugin_path()."public/shortCode/show/graficoCEscolar.php";
}
function graficoFocalizacion_shortcode($atts, $mensaje = null) {
	require_once get_plugin_path()."public/shortCode/show/graficoFocalizacion.php";
}

function estadisticasBasicas_shortcode($atts, $mensaje = null) {
	require_once get_plugin_path()."public/shortCode/estadisticasBasicas.php";
}

/* Acciones */
function files_head_action() {
	$files = '<script type="text/javascript" charset="utf8" src="//code.jquery.com/jquery-1.12.4.js"></script>';
  $files = '<link href="'.plugin_dir_url( __FILE__ ).'public/js/leaflet/leaflet.css" rel="stylesheet" />';
	$files .= '<script src="'.plugin_dir_url( __FILE__ ).'public/js/leaflet/leaflet.js"></script>';
	$files .= '<style>#map { width: 100%; height: 900px; }</style>';
	$files .= '<style>#map { width: 100%; height: 900px; }</style>';
	$files .= '<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />';
	$files .= '<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>';
	$files .= '<link rel="stylesheet" href="'.get_plugin_url().'public/plugins/bower_components/dropify/dist/css/dropify.min.css">';
	echo $files;
}
add_action('wp_head', 'files_head_action');

?>
