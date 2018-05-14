<?php
/**
 * Plugin Name: indicadores-pais-El-Salvador-seguro
 * Plugin URI: http://wordpress.org/plugins/
 * Description: Administración de banco de datos del Sistema Integrado de Estadisticas (SIE), El SIE tiene como objetivo proporcionar información a las autoridades del MJSP para la definición de prioridades, diseño de estrategias, seguimiento a los resultados e impactos de la política del sector y la rendición de cuentas a la ciudadanía.
 * Author: PNUD - El Salvador
 * Version: 0.9
 * Author URI: http://www.seguridad.gob.sv/dia/
*/

 global $wpdb;
 require_once( get_plugin_path()."includes/utils/head.php" );
  require_once( get_plugin_path()."includes/libs/sessions.php" );

 $municipios=$wpdb->get_results( "SELECT d.nombre_departamento AS departamento, m.nombre_municipio AS municipio FROM ind_ctl_departamento AS d INNER JOIN ind_ctl_municipio AS m ON d.id = m.ctl_departamento_id group by d.nombre_departamento, m.nombre_municipio" );
 $query_anyo=$wpdb->get_results( "SELECT anyo FROM ind_bnc_dgcp GROUP BY anyo" );
 $data_path = get_plugin_url()."public/data.php";

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

 $acceso = acceso( $wpdb, "graficoAnalisisSituacional");
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
   <p>Año: <br /><select name="sanyo" id="sanyo" style="width: 90%;"><?php echo $anyo; ?><option value="0" selected>Seleccione el año</option></select></p>
  </div>
  <div class="grid one-fifth last">
   <p>Municipio: <br /><select name="smunicipio" id="smunicipio"  style="width: 90%;"><?php echo $categoria; ?><option value="0" selected>Seleccione el municipio</option></select></p>
  </div>
  <div class="grid one-fifth last">Indicador: <br />
	<select name="variable" id="variable"  style="width: 90%;" >
		<option value="0" >Amenaza</option>
		<option value="1" disabled>Exclusión  social</option>
		<option value="2" >Lesiones</option>
		<option value="3" >Patrimonio</option>
		<option value="4" >Personas privadas de libertad</option>
		<option value="5" >Sexual</option>
		<option value="6" >Vida</option>
    <option selected value="9">Seleccione el indicador</option>
	</select>
  </div>
  <div class="grid one-fifth last">
    <p>Banco de datos: <br />
      <select name="banco" id="banco"  style="width: 90%;" disabled="disabled" onchange="generar_estadistica(value)">
        <option value="1">Banco de accidentes de transito</option>
        <option value="2">Banco de delitos</option>
        <option value="3">Banco de personas privadas de libertad</option>
        <option value="4">Banco de retornados</option>
        <option selected value="0">Seleccione el banco de datos</option>
      </select>
    </p>
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
  <div class="row" id="datatable">
  </div>
 </div>
</div>

<div class="row">
 <div class="col-md-12">
  <hr><hr>
 </div>
</div>

<div class="row"> <h5>Estadisticas</h5> </div>
<div class="row">
 <div class="col-md-12">
  <div class="row" id="more">
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
  $('#banco').select2({
    language: {
      noResults: function (params) {
        return "Sin registros para ese termino.";
      }
    }
  });
	$('#sanyo').on('change', function() {
    document.getElementById("sanyo").disabled = true;
	});
	$('#smunicipio').on('change', function() {
    if (this.value !== '0'){
      //Verificacion de año seleccionado
      var selects = document.getElementById("sanyo");
      var variable = selects.options[selects.selectedIndex].value;
      if (variable >= 2014 && variable <= <?php echo date("Y"); ?>){
        document.getElementById("smunicipio").disabled = true;
      } else {
         alert("Variable año sin seleccionar!!");
      }
    }
	});
  $('#banc').on('change', function() {
    //alert("generado!!");
    document.getElementById('more').scrollIntoView();
  });
	$('#variable').on('change', function() {
    if (this.value !== '9'){
      //Verificacion de municipio seleccionado
      var selects = document.getElementById("smunicipio");
      var variable = selects.options[selects.selectedIndex].value;
      if (variable.length > 3 && variable !== 'Seleccione el municipio'){
        document.getElementById("banco").disabled = false;
        var selects = document.getElementById("sanyo");
        var anyo = selects.options[selects.selectedIndex].value;
        $.post('<?php echo $data_path; ?>?data=map&vars='+variable+'&type=s&anyo='+anyo+'&code='+this.value, { data:'' }, function(resp) {
           $('#macromap').html(resp);
        });
        $.post('<?php echo $data_path; ?>?data=table&vars='+variable+'&type=s&anyo='+anyo+'&code='+this.value, { data:'' }, function(resp) {
            $('#datatable').html(resp);
        });
      } else {
         alert("No a seleccionado un municipio!!");
      }
    }
	});
}(jQuery));
//funcion para restablecer al mapa y tabla inicial
function restabecer() {
  (function($){
  	$.noConflict();
    $('#sanyo').select2('val', '0');
    $('#smunicipio').select2('val', '0');
    $('#variable').select2('val', '9');
    $('#banco').select2('val', '0');
    $('#datatable').html('');
    $('#macromap').html('');
    $('#more').html('');
    document.getElementById("sanyo").disabled = false;
    document.getElementById("smunicipio").disabled = false;
    document.getElementById("banco").disabled = true;
  }(jQuery));
}
//funcion para generar la Estadisticas del indicador seleccionado
function generar_estadistica( $value ) {
  //alert("generado!!");
  var selects = document.getElementById("smunicipio");
  var variable = selects.options[selects.selectedIndex].value;
  var selects = document.getElementById("sanyo");
  var anyo = selects.options[selects.selectedIndex].value;
  $.post('<?php echo $data_path; ?>?data=table&vars='+variable+'&type=u&anyo='+anyo+'&code='+$value, { data:'' }, function(resp) {
      $('#more').html(resp);
  });
  document.getElementById('copyright').scrollIntoView();
}
</script>

<?php else: ?>
  <h5>Debes ingresar tus credenciales para acceder al contenido.</h5>
  <?php echo $acceso; ?>
<?php endif ?>
