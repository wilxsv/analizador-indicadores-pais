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

 $municipios=$wpdb->get_results( "SELECT departamento, municipio FROM `ind_municipio` group by departamento, municipio order by departamento, municipio" );
 $query_anyo=$wpdb->get_results( "SELECT anyo FROM ind_municipio GROUP BY anyo" );

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

 if ( $anyo_ultimo ):
?>

<div class="row">
 <div class="pad group">
  <div class="grid one-third ">
   Año:<br/><select name="sanyo" id="sanyo"><?php echo $anyo; ?></select>
  </div>
  <div class="grid one-third last">
   Municipio:<br/><select name="smunicipio" id="smunicipio" ><?php echo $categoria; ?></select>
  </div>
  <div class="grid one-third last">
  </div>
 </div>
</div>

<div class="row">
 <div class="col-md-12">
   <div id='map'></div>
   <div id='macromap'></div>
 </div>
</div>


<div class="row">
	<div class="pad group">
		<div class="grid one-third ">

			  <!--<p>Departamento:
				<select name="sdepartamento" id="sdepartamento"><?php echo $depto; ?>
				</select>
      </p>-->
			  <!--<p>Valor del indice entre:
				Min: <input id="min" type="number" min="0" max="1"><br/>
				Max: <input id="max" type="number" min="0" max="1"><br/>
      </p>-->
		</div>
		<div class="grid one-third last">
    </div>
	</div>
</div>

<div class="row">
 <div class="col-md-12">
 </div>
</div>
<div class="row" id="datatable">
</div>
<?php
 include(plugin_dir_path( __FILE__ )."../footer_public.php");
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>

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
    $.post('<?php echo plugin_dir_url( __FILE__ ); ?>../data.php?data=table&type=m&anyo='+this.value, { data:'table' }, function(resp) {
        $('#datatable').html(resp);
    });
    //datosgrafico_filterdocument.getElementById('map').innerHTML = "<div id='map' style='width: 100%; height: 100%;'></div>";
    map.off();
    map.remove();
    $.post('<?php echo plugin_dir_url( __FILE__ ); ?>../data.php?data=map&vars=0&type=m&anyo='+this.value, { data:'map' }, function(resp) {
        $('#macromap').html(resp);
    });
	});
	$('#smunicipio').on('change', function() {
    //document.getElementById('datosgrafico_filter').innerHTML = "<label>Buscar:<input value=\""+this.value+"\" aria-controls=\"datosgrafico\" type=\"search\"></label>";
	});
}(jQuery));
$.post('<?php echo plugin_dir_url( __FILE__ ); ?>../data.php?data=table&code=all&type=m&anyo=<?php echo $anyo_ultimo; ?>', { data:'table' }, function(resp) {
    //console.log(resp);
    $('#datatable').html(resp);
});
$.post('<?php echo plugin_dir_url( __FILE__ ); ?>../data.php?data=map&vars=0&type=m&anyo=<?php echo $anyo_ultimo; ?>', { data:'table' }, function(resp) {
    //console.log(resp);
    $('#macromap').html(resp);
});
</script>

<?php else: ?>

No hay años para mostrar en este momento.

<?php endif ?>
