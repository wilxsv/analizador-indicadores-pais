<?php
/**
 * Plugin Name: indicadores-pais-El-Salvador-seguro
 * Plugin URI: http://wordpress.org/plugins/
 * Description: Administración de banco de datos del Sistema Integrado de Estadisticas (SIE), El SIE tiene como objetivo proporcionar información a las autoridades del MJSP para la definición de prioridades, diseño de estrategias, seguimiento a los resultados e impactos de la política del sector y la rendición de cuentas a la ciudadanía.
 * Author: PNUD - El Salvador
 * Version: 0.9
 * Author URI: http://pnud.org.sv/
*/


global $wpdb;

$status = false;
$total = 0;

if ( ! empty( $_SERVER['HTTP_CLIENT_IP'] ) ) {
	$ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif ( ! empty( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ) {
	$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
	$ip = $_SERVER['REMOTE_ADDR'];
}
$hash = md5( rand() );
$user = get_current_user_id();

#require_once plugin_dir_url( __FILE__ )."../../includes/GoogleAuthenticator-master/PHPGangsta/GoogleAuthenticator.php";
require_once WP_PLUGIN_DIR."/analizador-indicadores-pais/includes/GoogleAuthenticator-master/PHPGangsta/GoogleAuthenticator.php";
$ga = new PHPGangsta_GoogleAuthenticator();
$secret = '3MLFYYMVH6HTFAQ4';
$qrCodeUrl = $ga->getQRCodeGoogleUrl('Estadisticas - DIA', $secret);
?>


<div class="row">
	<h4>Por favor escanee el siguiente codigo para poder acceder al sitio de estadisticas</h4>
	<div class="text-center">
		<img class="rounded" src="<?php echo $qrCodeUrl; ?>" >
	</div>
</div>
