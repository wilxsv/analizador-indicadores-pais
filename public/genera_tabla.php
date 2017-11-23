<?php
/**
 * Plugin Name: indicadores-pais-El-Salvador-seguro
 * Plugin URI: http://wordpress.org/plugins/
 * Description: Administración de banco de datos del Sistema Integrado de Estadisticas (SIE), El SIE tiene como objetivo proporcionar información a las autoridades del MJSP para la definición de prioridades, diseño de estrategias, seguimiento a los resultados e impactos de la política del sector y la rendición de cuentas a la ciudadanía.
 * Author: PNUD - El Salvador
 * Version: 0.9
 * Author URI: http://pnud.org.sv/
*/

function getTablePrioridad($code, $wpdb){
  $sql = "SELECT * FROM ind_focalizacion";
  if ($code == 'all' ){
    $sql = "SELECT * FROM ind_focalizacion";
  } else {
    $sql = "SELECT * FROM ind_focalizacion WHERE municipio = '$code' OR sector_policial = '$code' OR nombre_ce = '$code'";
  }
  $hechos = $wpdb->get_results( $sql);
  $table = '
  <table class="table table-bordered display" id="datosgrafico">
   <thead>
    <tr>
     <th>Departamento</th>
     <th>Municipio</th>
     <th>Fases PESS</th>
     <th>Codigo</th>
     <th>Centro Escolar</th>
     <th>Sector SPD</th>
    </tr>
   </thead>
   <tbody>';
   foreach ($hechos as $key => $object) {
 	   $table.= "<tr><td>$object->departamento</td><td>$object->municipio</td><td>$object->fase_pess</td><td>$object->codigo_ce</td><td>$object->nombre_ce</td><td>$object->sector_policial</td></tr>";
 	 }
$table .='</tbody></table><script type="text/javascript">';
$table .="(function($){ $('#datosgrafico').DataTable({pageLength: 4, language: {url: '//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json'}, dom: 'Bfrtip',buttons: ['copyHtml5','excelHtml5','csvHtml5','pdfHtml5'] } ); }(jQuery));
</script>";
  return $table;
}
function getTable($type, $anyo, $wpdb){
  if ($type == 'm' && $anyo >= 2014 ){
    $sql = "SELECT * FROM ind_municipio WHERE anyo=$anyo";
    $hechos = $wpdb->get_results( $sql);
  }
  $table = '
  <table class="table table-bordered display" id="datosgrafico">
   <thead><tr><th>Departamento</th>
                       <th>Municipio</th>
                       <th>Homocidio</th>
                       <th>Homicidios mujeres</th>
                       <th>Desaparecidos</th>
                       <th>Lesiones</th>
                       <th>VIF</th>
                       <th>extorciones</th>
                       <th>robo</th>
                       <th>hurto</th>
                       <th>Robo de vehiculos</th>
                       <th>Hurto vehiculos</th>
                       <th>r_h_conmercio</th>
                       <th>ppl</th>
                       <th>ppurb</th>
                       <th>epp</th>
                       <th>Desaparecidos</th>
                       <th>ipn</th>
                     </tr>
   </thead>
   <tbody>';
   foreach ($hechos as $key => $object) {
 	   $table.= "<tr><td>$object->departamento</td><td>$object->municipio</td><td>$object->homicidio</td><td>$object->total_homicidio_mujer</td><td>$object->desaparecidos</td><td>$object->lesiones</td><td>$object->vif</td><td>$object->extorciones</td><td>$object->robo</td><td>$object->hurto</td><td>$object->robo_vehiculo</td><td>$object->hurto_vehiculo</td><td>$object->r_h_conmercio</td><td>$object->ppl</td><td>$object->ppurb</td><td>$object->epp</td><td>$object->veh</td><td>$object->ipn</td></tr>";
 	 }
$table .='</tbody></table><script type="text/javascript">';
$table .="(function($){ $('#datosgrafico').DataTable({pageLength: 4, language: {url: '//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json'}, dom: 'Bfrtip',buttons: ['copyHtml5','excelHtml5','csvHtml5','pdfHtml5'] } ); }(jQuery));
</script>";
return $table;
}
