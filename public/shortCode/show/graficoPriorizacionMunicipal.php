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

 require_once( get_plugin_path()."includes/utils/head.php" );
 require_once( get_plugin_path()."includes/libs/sessions.php" );

 $query_anyo=$wpdb->get_results( "SELECT anyo FROM ind_municipio GROUP BY anyo" );
 $data_path = get_plugin_url()."public/data.php";

 $anyo_ultimo = NULL;
 foreach ($query_anyo as $l) {
  $anyo.= "<option value='$l->anyo'>$l->anyo</option>";
  $anyo_ultimo = $l->anyo;
 }

 $acceso = acceso( $wpdb, "graficoPriorizacionMunicipal");
 if ( $acceso === true ):
?>

<div class="row">
 <div class="pad group">
  <div class="grid one-fifth "><h5>Mapa interactivo</h5> </div>
  <div class="grid one-fifth last"><br/></div>
  <div class="grid one-fifth last"><br/></div>
  <div class="grid one-fifth last" ><br/></div>
  <div class="grid one-fifth last" style="text-align:right">
    <form action="<?php echo esc_url( $_SERVER['REQUEST_URI'] ); ?> " method="post">
      <input type="hidden" name="disable" value="TRUE">
      Cerrar sesión <button type="submit" class="btn btn-info btn-xs"><i class="fas fa-sign-out-alt"></i></button>
    </form>
  </div>
 </div>
</div>

<div class="row">
 <div class="pad group">
  <div class="grid one-fifth ">
   Año:<br/><select name="sanyo" id="sanyo" style="width: 90%;"><option value="0" selected>Seleccione el año</option><?php echo $anyo; ?></select>
  </div>
  <div class="grid one-fifth last">
   Departamento:<br/><?php echo getFormSelectDepartamento($wpdb, 'smunicipio'); ?>
  </div>
  <div class="grid one-fifth last"><br/>
  </div>
  <div class="grid one-fifth last"><br/>
  </div>
  <div class="grid one-fifth last">
    <p id="restabecer" onclick="restabecer()"  style="text-align:right">
      Restabecer <br/><input type=image src="<?php echo get_plugin_url(); ?>public/images/restore.png" width="25" height="25">
    </p>
  </div>
 </div>
</div>

<div class="row">
 <div class="col-md-12">
   <div id='macromap'></div>
 </div>
</div>

<div class="row">
 <div class="col-md-12">
  <hr><hr>
 </div>
</div>

<div class="row"> <h5>Tabla de despliegue de datos</h5> </div>

<div class="row">
 <div class="col-md-12">
  <div class="row" id="datatable" style="width:100%">
  </div>
 </div>
</div>
<?php
require_once( get_plugin_path()."includes/utils/footer.php" );
?>

<script type="text/javascript">
(function($){
	$.noConflict();
  $('#smunicipio').select2({
		language: {
			noResults: function (params) {
				return "Sin registros para ese termino.";
			}
		}
	});
  $('#sanyo').select2({
		language: {
			noResults: function (params) {
				return "Sin registros para ese termino.";
			}
		}
	});
	$('#sanyo').on('change', function() {
    if (this.value !== '0'){
      $.post('<?php echo $data_path; ?>?data=table&type=m&anyo='+this.value, { data:'table' }, function(resp) {
          $('#datatable').html(resp);
      });
      $.post('<?php echo $data_path; ?>?data=map&type=m&anyo='+this.value, { data:'map' }, function(resp) {
          $('#macromap').html(resp);
      });
    }
    document.getElementById("sanyo").disabled = true;
	});
	$('#smunicipio').on('change', function() {
    if (this.value !== '0'){
      var selects = document.getElementById("sanyo");
      var anyo = selects.options[selects.selectedIndex].value;
      if (anyo >= 0){
        anyo = anyo;
      } else {
        anyo = <?php echo $anyo_ultimo; ?>;
      }
      $.post('<?php echo $data_path; ?>?data=table&type=m&vars='+this.value+'&anyo='+anyo, { }, function(resp) {
          $('#datatable').html(resp);
      });
      $.post('<?php echo $data_path; ?>?data=map&type=m&vars='+this.value+'&anyo='+anyo, { data:'map' }, function(resp) {
          $('#macromap').html(resp);
      });
    }
	});
}(jQuery));
function restabecer() {
  (function($){
  	$.noConflict();
    $('#datatable').html('');
    $('#macromap').html('');
    $('#sanyo').select2('val', '0');
    $('#smunicipio').select2('val', '0');
    document.getElementById("sanyo").disabled = false;
  }(jQuery));
}
</script>
<?php else: ?>
  <h5>Debes ingresar tus credenciales para acceder al contenido.</h5>
  <?php echo $acceso; ?>
<?php endif ?>
