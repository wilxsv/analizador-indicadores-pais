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

 $municipios = "SELECT departamento, municipio FROM `ind_centro_escolar` group by departamento, municipio order by departamento, municipio";
 $municipios=$wpdb->get_results("$municipios");
 $codigo = $wpdb->get_results("SELECT municipio, codigo FROM `ind_centro_escolar`group by municipio, codigo");
 $centro = $wpdb->get_results("SELECT municipio, nombre_ce FROM `ind_centro_escolar` group by municipio, nombre_ce");
 $query_anyo=$wpdb->get_results( "SELECT anyo FROM ind_centro_escolar GROUP BY anyo" );

 $anyo_ultimo = NULL;
 foreach ($query_anyo as $l) {
  $anyo.= "<option value='$l->anyo'>$l->anyo</option>";
  $anyo_ultimo = $l->anyo;
 }
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
 $codigos = NULL;
 foreach ($codigo as $l) {
     if ($dep == NULL){
       $codigos.= "<optgroup label=\"$l->municipio\">";
       $codigos.= "<option value=\"$l->codigo\">$l->codigo</option>";
     } elseif ($dep != $l->municipio) {
       $codigos.= "<optgroup>";
       $codigos.= "<optgroup label=\"$l->municipio\">";
       $codigos.= "<option value=\"$l->codigo\">$l->codigo</option>";
     }else {
       $codigos.= "<option value=\"$l->codigo\">$l->codigo</option>";
     }
     $dep = $l->municipio;
 }
 $codigos.= "<optgroup>";
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
  <div class="grid one-fifth">
   Año:<br/><select name="sanyo" id="sanyo"><?php echo $anyo; ?></select>
  </div>
  <div class="grid one-fifth last">
  Municipio:<br/><select name="smunicipio" id="smunicipio"><?php echo $categoria; ?></select>
  </div>
  <div class="grid one-fifth last">
   Codigo de Centro:<br/><select name="codigo" id="codigo"><?php echo $codigos; ?></select>
  </div>
  <div class="grid one-fifth last">
   Centro Educativo:<br/><select name="ce" id="ce"><?php echo $ce; ?></select>
  </div>
  <div class="grid one-fifth last">
    <p id="restabecer" onclick="restabecer()"  style="text-align:right">
      Restabecer <input type=image src="<?php echo plugin_dir_url( __FILE__ ); ?>../images/restore.png" width="25" height="25">
    </p>
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
  $('#codigo').select2({
		language: { noResults: function (params) { return "Sin registros para ese sector."; } }
	});
  $('#ce').select2({
		language: { noResults: function (params) { return "Sin registros para ese centro escolar."; } }
	});
  $('#sanyo').select2({
		language: { noResults: function (params) { return "Sin registros para ese centro escolar."; } }
	});
	$('#sanyo').on('change', function() {
    $.post('<?php echo plugin_dir_url( __FILE__ ); ?>../data.php?data=table&type=c&code='+this.value, { }, function(resp) {
        $('#datatable').html(resp);
    });
    map.off();
    map.remove();
    $.post('<?php echo plugin_dir_url( __FILE__ ); ?>../data.php?data=map&type=c&code='+this.value, { }, function(resp) {
        $('#macromap').html(resp);
    });
	});
	$('#smunicipio').on('change', function() {
    $.post('<?php echo plugin_dir_url( __FILE__ ); ?>../data.php?data=table&type=c&code='+this.value, { }, function(resp) {
        $('#datatable').html(resp);
    });
    map.off();
    map.remove();
    $.post('<?php echo plugin_dir_url( __FILE__ ); ?>../data.php?data=map&type=c&vars='+this.value, { }, function(resp) {
        $('#macromap').html(resp);
    });
	});
	$('#codigo').on('change', function() {
		$.post('<?php echo plugin_dir_url( __FILE__ ); ?>../data.php?data=table&type=c&code='+this.value, { }, function(resp) {
			$('#datatable').html(resp);
		});
    map.off();
    map.remove();
    $.post('<?php echo plugin_dir_url( __FILE__ ); ?>../data.php?data=map&type=c&vars='+this.value, { }, function(resp) {
        $('#macromap').html(resp);
    });
	});
	$('#ce').on('change', function() {
		$.post('<?php echo plugin_dir_url( __FILE__ ); ?>../data.php?data=table&type=c&code='+this.value, { }, function(resp) {
			$('#datatable').html(resp);
		});
	});
}(jQuery));
$.post('<?php echo plugin_dir_url( __FILE__ ); ?>../data.php?data=table&code=<?php echo $anyo_ultimo; ?>&type=c', { }, function(resp) {
    $('#datatable').html(resp);
});
$.post('<?php echo plugin_dir_url( __FILE__ ); ?>../data.php?data=map&anyo=<?php echo $anyo_ultimo; ?>&type=c', { }, function(resp) {
    $('#macromap').html(resp);
});
function restabecer() {
  $.post('<?php echo plugin_dir_url( __FILE__ ); ?>../data.php?data=table&code=<?php echo $anyo_ultimo; ?>&type=c', { }, function(resp) {
    $('#datatable').html(resp);
  });
  map.off();
  map.remove();
  $.post('<?php echo plugin_dir_url( __FILE__ ); ?>../data.php?data=map&anyo=<?php echo $anyo_ultimo; ?>&type=c', { }, function(resp) {
    $('#macromap').html(resp);
  });
}
</script>
<?php else: ?>

No hay datos para mostrar en este momento.

<?php endif ?>
