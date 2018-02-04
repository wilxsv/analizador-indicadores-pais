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

 include(plugin_dir_path( __FILE__ )."../head_public.php");
 include(plugin_dir_path( __FILE__ )."../router.php");

 $municipios=$wpdb->get_results("SELECT departamento, municipio FROM `ind_focalizacion` group by departamento, municipio order by departamento, municipio");
 $fase = $wpdb->get_results("SELECT fase_pess FROM `ind_focalizacion` WHERE sector IS NOT NULL group by fase_pess");
 $centro = $wpdb->get_results("SELECT municipio, nombre_ce, codigo_ce FROM `ind_focalizacion` WHERE codigo_ce > 0 group by municipio, codigo_ce");

 $dep = NULL;
 foreach ($municipios as $l) {
     if ($dep == NULL){
       $categoria.= "<optgroup label=\"$l->departamento\">";
       $categoria.= "<option value=\"$l->municipio\">".ucfirst(strtolower($l->municipio))."</option>";
     } elseif ($dep != $l->departamento) {
       $categoria.= "<optgroup>";
       $categoria.= "<optgroup label=\"$l->departamento\">";
       $categoria.= "<option value=\"$l->municipio\">".ucfirst(strtolower($l->municipio))."</option>";
     }else {
       $categoria.= "<option value=\"$l->municipio\">".ucfirst(strtolower($l->municipio))."</option>";
     }
     $dep = $l->departamento;
 }
 $categoria.= "<optgroup>";
 $policial = NULL;
 foreach ($fase as $l) {
   $policial.= "<option value=\"$l->fase_pess\">$l->fase_pess</option>";
 }
 $dep = NULL;
 $ce = NULL;
 $cod = NULL;
 foreach ($centro as $l) {
     if ($dep == NULL){
       $ce.= "<optgroup label=\"$l->municipio\">";
       $ce.= "<option value=\"$l->nombre_ce\">$l->nombre_ce</option>";
       $cod.= "<optgroup label=\"$l->municipio\">";
       $cod.= "<option value=\"$l->codigo_ce\">$l->codigo_ce</option>";
     } elseif ($dep != $l->municipio) {
       $ce.= "<optgroup>";
       $ce.= "<optgroup label=\"$l->municipio\">";
       $ce.= "<option value=\"$l->nombre_ce\">$l->nombre_ce</option>";
       $cod.= "<optgroup>";
       $cod.= "<optgroup label=\"$l->municipio\">";
       $cod.= "<option value=\"$l->codigo_ce\">$l->codigo_ce</option>";
     }else {
       $ce.= "<option value=\"$l->nombre_ce\">$l->nombre_ce</option>";
       $cod.= "<option value=\"$l->codigo_ce\">$l->codigo_ce</option>";
     }
     $dep = $l->municipio;
 }
 $ce.= "<optgroup>";
 $cod.= "<optgroup>";

 $acceso = acceso( $wpdb, "graficoFocalizacion");
 if ( $acceso === true ):
?>
<div class="row">
 <div class="pad group">
  <div class="grid one-fifth ">
	 Municipio:<br/><select name="smunicipio" id="smunicipio" style="width: 90%;"><?php echo $categoria; ?><option value="0" selected >Seleccione el municipio</option></select>
  </div>
  <div class="grid one-fifth last"><br/></div>
  <div class="grid one-fifth last"><br/></div>
  <div class="grid one-fifth last"><br/></div>
  <div class="grid one-fifth last">
    <p id="restabecer" onclick="restabecer()"  style="text-align:right">
      Restabecer <br/><input type=image src="<?php echo plugin_dir_url( __FILE__ ); ?>../images/restore.png" width="25" height="25">
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
   <div class="row" id="datatable"></div>
 </div>
</div>
<?php
 include(plugin_dir_path( __FILE__ )."../footer_public.php");
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>

<script type="text/javascript">
(function($){
	$.noConflict();
  $('#smunicipio').select2({
		language: { noResults: function (params) { return "Sin registros para ese municipio."; } }
	});
  $('#fase').select2({
		language: { noResults: function (params) { return "Sin registros para esa fase."; } }
	});
  $('#codigo').select2({
		language: { noResults: function (params) { return "Sin registros para ese centro escolar."; } }
	});
  $('#ce').select2({
		language: { noResults: function (params) { return "Sin registros para ese centro escolar."; } }
	});
	$('#smunicipio').on('change', function() {
    if (this.value !== '0'){
      $.post('<?php echo plugin_dir_url( __FILE__ ); ?>../data.php?data=table&type=f&code='+this.value, { }, function(resp) {
          $('#datatable').html(resp);
      });
      $.post('<?php echo plugin_dir_url( __FILE__ ); ?>../data.php?data=map&type=f&vars='+this.value, { }, function(resp) {
          $('#macromap').html(resp);
      });
    }
	});
	$('#policial').on('change', function() {
		$.post('<?php echo plugin_dir_url( __FILE__ ); ?>../data.php?data=table&type=f&code='+this.value, { }, function(resp) {
			$('#datatable').html(resp);
		});
    map.off();
    map.remove();
    $.post('<?php echo plugin_dir_url( __FILE__ ); ?>../data.php?data=map&type=f&vars='+this.value, { }, function(resp) {
        $('#macromap').html(resp);
    });
	});
  $('#codigo').on('change', function() {
		$.post('<?php echo plugin_dir_url( __FILE__ ); ?>../data.php?data=table&type=f&code='+this.value, { }, function(resp) {
			$('#datatable').html(resp);
		});
	});
  $('#ce').on('change', function() {
		$.post('<?php echo plugin_dir_url( __FILE__ ); ?>../data.php?data=table&type=f&code='+this.value, { }, function(resp) {
			$('#datatable').html(resp);
		});
	});
}(jQuery));
function restabecer() {
  (function($){
  	$.noConflict();
    $('#smunicipio').select2('val', '0');
    $('#datatable').html('');
    $('#macromap').html('');
  }(jQuery));
}
</script>


<?php else: ?>
  <h5>Debes ingresar tus credenciales para acceder al contenido.</h5>
  <?php echo $acceso; ?>
<?php endif ?>
