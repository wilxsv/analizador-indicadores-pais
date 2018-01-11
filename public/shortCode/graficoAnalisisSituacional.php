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

 $municipios=$wpdb->get_results( "SELECT d.nombre_departamento AS departamento, m.nombre_municipio AS municipio FROM ind_ctl_departamento AS d INNER JOIN ind_ctl_municipio AS m ON d.id = m.ctl_departamento_id group by d.nombre_departamento, m.nombre_municipio" );
 $query_anyo=$wpdb->get_results( "SELECT anyo FROM ind_bnc_dgcp GROUP BY anyo" );

 $anyo_ultimo = NULL;
 foreach ($query_anyo as $l) {
  $anyo.= "<option value='$l->anyo'>$l->anyo</option>";
  $anyo_ultimo = $l->anyo;
 }


 $dep = NULL;
 $aleatorio = rand(1, 262);
 $idx = 1;
 foreach ($municipios as $l) {
   //Creacion de opciones para select de municipios
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
   if ( (is_numeric($aleatorio)) && ($idx == $aleatorio) ){
     $aleatorio = $l->municipio;
   }
   $idx++;
 }
 $categoria.= "<optgroup>";

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
<div class="row"> <h5>Mapa interactivo</h5> </div>

<div class="row">
 <div class="pad group">
  <div class="grid one-fifth ">
   <p>Año: <br /><select name="sanyo" id="sanyo" style="width: 90%;"><?php echo $anyo; ?><option selected>Seleccione el año</option></select></p>
  </div>
  <div class="grid one-fifth last">
   <p>Municipio: <br /><select name="smunicipio" id="smunicipio"  style="width: 90%;"><?php echo $categoria; ?><option selected>Seleccione el municipio</option></select></p>
  </div>
  <div class="grid one-fifth last">Indicador: <br />
	<select name="variable" id="variable"  style="width: 90%;">
		<option value="0" >Amenaza</option>
		<option value="1" disabled>Exclusión  social</option>
		<option value="2" >Lesiones</option>
		<option value="3" >Patrimonio</option>
		<option value="4" >Personas privadas de libertad</option>
		<option value="5" >Sexual</option>
		<option value="6" >Vida</option>
    <option selected>Seleccione el indicador</option>
	</select>
  </div>
  <div class="grid one-fifth last">
    <p id="estadistica" onclick="generar_estadistica()"  style="text-align:right">
      Generar Estadisticas del indicador seleccionado
    </p>
  </div>
  <div class="grid one-fifth last">
    <!--<p id="restabecer" onclick="restabecer()"  style="text-align:right">
      Restabecer <br/><input type=image src="<?php echo plugin_dir_url( __FILE__ ); ?>../images/restore.png" width="25" height="25">
    </p>-->
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
  $('#variable').select2({
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
	$('#smunicipio').on('change', function() {
    //Verificacion de año seleccionado
    var selects = document.getElementById("sanyo");
    var variable = selects.options[selects.selectedIndex].value;
    if (variable >= 2014 && variable <= <?php echo date("Y"); ?>){
    } else {
       alert("Variable año sin seleccionar!!");
    }
	});
	$('#variable').on('change', function() {
    //Verificacion de municipio seleccionado
    var selects = document.getElementById("smunicipio");
    var variable = selects.options[selects.selectedIndex].value;
    if (variable.length > 3 && variable !== 'Seleccione el municipio'){
      var selects = document.getElementById("sanyo");
      var anyo = selects.options[selects.selectedIndex].value;
      $.post('<?php echo plugin_dir_url( __FILE__ ); ?>../data.php?data=map&vars='+variable+'&type=s&anyo='+anyo+'&code='+this.value, { data:'' }, function(resp) {
         $('#macromap').html(resp);
      });
      $.post('<?php echo plugin_dir_url( __FILE__ ); ?>../data.php?data=table&vars='+variable+'&type=s&anyo='+anyo+'&code='+this.value, { data:'' }, function(resp) {
          $('#datatable').html(resp);
      });
    } else {
       alert("No a seleccionado un municipio!!");
    }
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

<?php else: ?>

No hay información para mostrar en este momento.

<?php endif ?>
