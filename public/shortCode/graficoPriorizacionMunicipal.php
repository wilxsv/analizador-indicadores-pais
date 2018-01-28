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

 $deptos=$wpdb->get_results( "SELECT departamento FROM ind_municipio group by departamento order by departamento" );
 $query_anyo=$wpdb->get_results( "SELECT anyo FROM ind_municipio GROUP BY anyo" );

 $anyo_ultimo = NULL;
 foreach ($query_anyo as $l) {
  $anyo.= "<option value='$l->anyo'>$l->anyo</option>";
  $anyo_ultimo = $l->anyo;
 }
 foreach ($deptos as $l) {
   $categoria.= "<option value=\"$l->departamento\">$l->departamento</option>";
 }
 $categoria.= "<optgroup>";

 if ( $anyo_ultimo ):
?>
<div class="row"> <h5>Mapa interactivo</h5> </div>

<div class="row">
 <div class="pad group">
  <div class="grid one-fifth ">
   Año:<br/><select name="sanyo" id="sanyo" style="width: 90%;"><option value="0" selected>Seleccione el año</option><?php echo $anyo; ?></select>
  </div>
  <div class="grid one-fifth last">
   Departamento:<br/><select name="smunicipio" id="smunicipio" style="width:90%;"><option value="0" selected > Seleccione el departamento</option><?php echo $categoria; ?></select>
  </div>
  <div class="grid one-fifth last"><br/>
  </div>
  <div class="grid one-fifth last"><br/>
  </div>
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
  <div class="row" id="datatable">
  </div>
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
      $.post('<?php echo plugin_dir_url( __FILE__ ); ?>../data.php?data=table&type=m&anyo='+this.value, { data:'table' }, function(resp) {
          $('#datatable').html(resp);
      });
      $.post('<?php echo plugin_dir_url( __FILE__ ); ?>../data.php?data=map&type=m&anyo='+this.value, { data:'map' }, function(resp) {
          $('#macromap').html(resp);
      });
    }
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
      $.post('<?php echo plugin_dir_url( __FILE__ ); ?>../data.php?data=table&type=m&vars='+this.value+'&anyo='+anyo, { }, function(resp) {
          $('#datatable').html(resp);
      });
      $.post('<?php echo plugin_dir_url( __FILE__ ); ?>../data.php?data=map&type=m&vars='+this.value+'&anyo='+anyo, { data:'map' }, function(resp) {
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
  }(jQuery));
}
</script>

<?php else: ?>

Debes ingresar tus credenciales para acceder al contenido.

<?php endif ?>
