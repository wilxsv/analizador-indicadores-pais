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

 $municipios = "SELECT departamento, municipio FROM `ind_focalizacion` group by departamento, municipio order by departamento, municipio";
 $municipios=$wpdb->get_results("$municipios");
 $sector = $wpdb->get_results("SELECT municipio, sector AS sector_policial FROM `ind_focalizacion` WHERE sector IS NOT NULL group by municipio, sector");
 $centro = $wpdb->get_results("SELECT municipio, nombre_ce FROM `ind_focalizacion` WHERE codigo_ce > 0 group by municipio, codigo_ce");

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
 $dep = NULL;
 $policial = NULL;
 foreach ($sector as $l) {
     if ($dep == NULL){
       $policial.= "<optgroup label=\"$l->municipio\">";
       $policial.= "<option value=\"$l->sector_policial\">$l->sector_policial</option>";
     } elseif ($dep != $l->municipio) {
       $policial.= "<optgroup>";
       $policial.= "<optgroup label=\"$l->municipio\">";
       $policial.= "<option value=\"$l->sector_policial\">$l->sector_policial</option>";
     }else {
       $policial.= "<option value=\"$l->sector_policial\">$l->sector_policial</option>";
     }
     $dep = $l->municipio;
 }
 $policial.= "<optgroup>";
 $dep = NULL;
 $ce = NULL;
 foreach ($centro as $l) {
     if ($dep == NULL){
       $ce.= "<optgroup label=\"$l->municipio\">";
       $ce.= "<option value=\"$l->nombre_ce\">$l->nombre_ce</option>";
     } elseif ($dep != $l->municipio) {
       $ce.= "<optgroup>";
       $ce.= "<optgroup label=\"$l->municipio\">";
       $ce.= "<option value=\"$l->nombre_ce\">$l->nombre_ce</option>";
     }else {
       $ce.= "<option value=\"$l->nombre_ce\">$l->nombre_ce</option>";
     }
     $dep = $l->municipio;
 }
 $ce.= "<optgroup>";

 if ( $dep ):
?>
<div class="row">
 <div class="pad group">
  <div class="grid one-third ">
	 Municipio:<br/><select name="smunicipio" id="smunicipio" style="width: 100%;"><?php echo $categoria; ?></select>
  </div>
  <div class="grid one-third last">
   N° Sector Policial:<br/><select name="policial" id="policial" style="width: 100%;"><?php echo $policial; ?></select>
  </div>
  <div class="grid one-third last">
   Centros Escolares:<br/><select name="ce" id="ce" style="width: 100%;"><?php echo $ce; ?></select>
  </div>
 </div>
</div>

<div class="row">
 <div class="col-md-12">
   <div id="map"></div>
   <div id='macromap'></div>
 </div>
</div>

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
  $('#policial').select2({
		language: { noResults: function (params) { return "Sin registros para ese sector."; } }
	});
  $('#ce').select2({
		language: { noResults: function (params) { return "Sin registros para ese centro escolar."; } }
	});
	$('#smunicipio').on('change', function() {
    $.post('<?php echo plugin_dir_url( __FILE__ ); ?>../data.php?data=table&type=f&code='+this.value, { }, function(resp) {
        $('#datatable').html(resp);
    });
    map.off();
    map.remove();
    $.post('<?php echo plugin_dir_url( __FILE__ ); ?>../data.php?data=map&type=f&vars='+this.value, { }, function(resp) {
        $('#macromap').html(resp);
    });
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
	$('#ce').on('change', function() {
		$.post('<?php echo plugin_dir_url( __FILE__ ); ?>../data.php?data=table&type=f&code='+this.value, { }, function(resp) {
			$('#datatable').html(resp);
		});
	});
}(jQuery));
$.post('<?php echo plugin_dir_url( __FILE__ ); ?>../data.php?data=table&code=all&type=f', {  }, function(resp) {
    $('#datatable').html(resp);
});
$.post('<?php echo plugin_dir_url( __FILE__ ); ?>../data.php?data=map&vars=0&type=f', { data:'table' }, function(resp) {
    $('#macromap').html(resp);
});
</script>

<?php else: ?>

No hay datos para mostrar en este momento.

<?php endif ?>
