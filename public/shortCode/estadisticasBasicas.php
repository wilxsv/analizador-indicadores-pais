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
 $depto = $_GET["depto"];
 $deptos=$wpdb->get_results( "SELECT departamento FROM ind_municipio group by departamento order by departamento" );

 foreach ($deptos as $l) {
   $categoria.= "<option value=\"$l->departamento\">$l->departamento</option>";
 }

?>
<div class="row">
 <div class="pad group">
  <div class="grid one-fifth ">
    <p>Departamento: <br /><select name="departamento" id="departamento"  style="width: 90%;"><?php echo $categoria; ?><option selected>Seleccione el departamento</option></select></p>
  </div>
  <div class="grid one-fifth last">
  </div>
  <div class="grid one-fifth last">
  </div>
  <div class="grid one-fifth last">
  </div>
  <div class="grid one-fifth last">
  </div>
 </div>
</div>

<div class="row"> <h5>Banco de retornados</h5> <hr></div>
<div class="row">
 <div class="col-md-12"> <div class="row" id="datatabler"></div>
</div>

<div class="row"> <h5>Banco de personas libradas de libertad</h5> <hr></div>
<div class="row">
 <div class="col-md-12"> <div class="row" id="datatablep"></div> </div>
</div>

<div class="row"> <h5>Banco de accidentes de transito</h5> <hr></div>
<div class="row">
 <div class="col-md-12"> <div class="row" id="datatablet"></div></div>
</div>

<div class="row"> <h5>Banco de delitos</h5> <hr></div>
<div class="row">
 <div class="col-md-12"> <div class="row" id="datatabled"></div> </div>
</div>

<?php
 include(plugin_dir_path( __FILE__ )."../footer_public.php");
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>

<script type="text/javascript">
(function($){
	$.noConflict();
  $('#departamento').select2({
		language: {
			noResults: function (params) {
				return "Sin registros para ese termino.";
			}
		}
	});
	$('#departamento').on('change', function() {
    $.post('<?php echo plugin_dir_url( __FILE__ ); ?>../data.php?data=table&type=e&code=t&vars='+this.value, { data:'' }, function(resp) {
        $('#datatablet').html(resp);
    });
    $.post('<?php echo plugin_dir_url( __FILE__ ); ?>../data.php?data=table&type=e&code=p&vars='+this.value, { data:'' }, function(resp) {
        $('#datatablep').html(resp);
    });
    $.post('<?php echo plugin_dir_url( __FILE__ ); ?>../data.php?data=table&type=e&code=r&vars='+this.value, { data:'' }, function(resp) {
        $('#datatabler').html(resp);
    });
    $.post('<?php echo plugin_dir_url( __FILE__ ); ?>../data.php?data=table&type=e&code=d&vars='+this.value, { data:'' }, function(resp) {
        $('#datatabled').html(resp);
    });
	});
}(jQuery));
//funcion para restablecer al mapa y tabla inicial
function restabecer() {
  $.post('<?php echo plugin_dir_url( __FILE__ ); ?>../data.php?data=table&vars=0&type=m&anyo=<?php echo $anyo_ultimo; ?>', { data:'table' }, function(resp) {
      $('#datatable').html(resp);
  });
  map.remove();
  $.post('<?php echo plugin_dir_url( __FILE__ ); ?>../data.php?data=map&vars=0&type=s&anyo=<?php echo $anyo_ultimo; ?>', { data:'table' }, function(resp) {
      $('#macromap').html(resp);
  });
}
//funcion para generar la Estadisticas del indicador seleccionado
function generar_estadistica() {
  var selects = document.getElementById("variable");
  var variable = selects.options[selects.selectedIndex].value;
  if (variable >= 0 && variable <= 6){
     alert("Generando estadistica para : "+selects.options[selects.selectedIndex].text);
  } else {
     alert("No a seleccionado un indicador!!");
  }
}
</script>
