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

 $municipios = "SELECT departamento, municipio FROM `ind_centro_escolar` group by departamento, municipio order by departamento, municipio";
 $municipios=$wpdb->get_results("$municipios");
 $codigo = $wpdb->get_results("SELECT municipio, codigo FROM `ind_centro_escolar`group by municipio, codigo");
 $centro = $wpdb->get_results("SELECT municipio, nombre_ce FROM `ind_centro_escolar` group by municipio, nombre_ce");
 $query_anyo=$wpdb->get_results( "SELECT anyo FROM ind_centro_escolar GROUP BY anyo" );
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


  $acceso = acceso( $wpdb, "graficoCEscolar");
  if ( $acceso === true ):
?>
<div class="row"> <h5>Mapa interactivo</h5> </div>

<div class="row">
 <div class="pad group">
  <div class="grid one-fifth">
   Año:<br/><select name="sanyo" id="sanyo" style="width: 90%;"><?php echo $anyo; ?><option value="0" selected>Seleccione el año</option></select>
  </div>
  <div class="grid one-fifth last">
  Municipio:<br/><select name="smunicipio" id="smunicipio" style="width: 90%;"><?php echo $categoria; ?><option value="0" selected>Seleccione el municipio</option></select>
  </div>
  <div class="grid one-fifth last"><br/></div>
  <div class="grid one-fifth last"><br/></div>
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
   <div class="row" id="datatable"></div>
 </div>
</div>
<?php
 require_once( get_plugin_path()."includes/utils/footer.php" );
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
    document.getElementById("sanyo").disabled = true;
	});
	$('#smunicipio').on('change', function() {
    if (this.value !== '0'){
      var selects = document.getElementById("sanyo");
      var anyo = selects.options[selects.selectedIndex].value;
      if (anyo > 0){
        $.post('<?php echo $data_path; ?>?data=table&type=c&code='+this.value+'&anyo='+anyo, { }, function(resp) {
          $('#datatable').html(resp);
        });
        $.post('<?php echo $data_path; ?>?data=map&type=c&code='+this.value+'&anyo='+anyo, { }, function(resp) {
          $('#macromap').html(resp);
        });
      }
      else {
        alert("Variable año sin seleccionar!!");
        document.getElementById("sanyo").disabled = false;
      }
    }
	});
}(jQuery));
function restabecer() {
  document.getElementById("sanyo").disabled = false;
  (function($){
  	$.noConflict();
    $('#smunicipio').select2('val', '0');
    $('#sanyo').select2('val', '0');
    $('#datatable').html('');
    $('#macromap').html('');
    document.getElementById("sanyo").disabled = false;
  }(jQuery));
}
</script>
<?php else: ?>

  Debes ingresar tus credenciales para acceder al contenido.

<?php endif ?>
