<?php
/**
 * Plugin Name: indicadores-pais-El-Salvador-seguro
 * Plugin URI: http://wordpress.org/plugins/
 * Description: Administración de banco de datos del Sistema Integrado de Estadisticas (SIE), El SIE tiene como objetivo proporcionar información a las autoridades del MJSP para la definición de prioridades, diseño de estrategias, seguimiento a los resultados e impactos de la política del sector y la rendición de cuentas a la ciudadanía.
 * Author: PNUD - El Salvador
 * Version: 0.9
 * Author URI: http://pnud.org.sv/
*/

function getTablePrioridad($wpdb, $code){
  $sql = "SELECT * FROM ind_focalizacion";
  if ($code == 'all' ){
    $sql = "SELECT * FROM ind_focalizacion";
    $titulo = "<th>Departamento</th><th>Municipio</th><th>Fases PESS</th><th>Codigo</th><th>Centro Escolar</th><th>Sector SPD</th>";
  } else {
    $sql = "SELECT * FROM ind_focalizacion WHERE municipio = '$code' OR sector_policial = '$code' OR nombre_ce = '$code' OR codigo_ce = '$code'";
    $titulo = "<th>Municipio</th><th>Fases PESS</th><th>Codigo</th><th>Centro Escolar</th><th>Sector SPD</th>";
  }
  $hechos = $wpdb->get_results( $sql);
  $table = '
  <table class="table table-bordered display" id="datosgrafico">
   <thead><tr>'.$titulo.'</tr></thead>
   <tbody>';
   foreach ($hechos as $key => $object) {
     if ($code == 'all' ){
       $table.= "<tr><td>$object->departamento</td><td>$object->municipio</td><td>$object->fase_pess</td><td>$object->codigo_ce</td><td>$object->nombre_ce</td><td>$object->sector_policial</td></tr>";
     } else {
       $table.= "<tr><td>$object->municipio</td><td>$object->fase_pess</td><td>$object->codigo_ce</td><td>$object->nombre_ce</td><td>$object->sector_policial</td></tr>";
     }
 	 }
$table .='</tbody></table><script type="text/javascript">';
$table .="(function($){ $('#datosgrafico').DataTable({pageLength: 4, language: {url: '//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json'}, /*searching: false,*/dom: 'Bfrtip',buttons: ['copyHtml5','excelHtml5','csvHtml5','pdfHtml5'] } ); }(jQuery));
</script>";
  return $table;
}

function getTableCentroEscolar($wpdb, $code){
  $sql = "SELECT * FROM ind_centro_escolar";
  if ($code == 'all' ){
    $sql = "SELECT * FROM ind_centro_escolar";
    $titulo = "<th>Año</th><th>Departamento</th><th>Municipio</th><th>Codigo</th><th>Centro Escolar</th><th>Sector</th><th>Presencia de maras</th><th>Drogas</th><th>Violaciones</th><th>Portacion de armas blancas y fuego</th><th>Robos y hurtos</th><th>Matricula relativa</th><th>Indice</th>";
  } else {
    $sql = "SELECT * FROM ind_centro_escolar WHERE municipio = '$code' OR codigo = '$code' OR nombre_ce = '$code' OR anyo = '$code'";
    $titulo = "<th>Año</th><th>Municipio</th><th>Codigo</th><th>Centro Escolar</th><th>Sector</th><th>Presencia de maras</th><th>Drogas</th><th>Violaciones</th><th>Portacion de armas blancas y fuego</th><th>Robos y hurtos</th><th>Matricula relativa</th><th>Indice</th>";
  }
  $hechos = $wpdb->get_results( $sql);
  $table = '
  <table class="table table-bordered display" id="datosgrafico">
   <thead><tr>'.$titulo.'</tr></thead>
   <tbody>';
   foreach ($hechos as $key => $object) {
   if ($code == 'all' ){
     $table.= "<tr><td>$object->anyo</td><td>$object->departamento</td><td>$object->municipio</td><td>$object->codigo</td><td>$object->nombre_ce</td><td>$object->sector</td><td>$object->presencia_mara</td><td>$object->drogas</td><td>$object->violacion</td><td>$object->armas</td><td>$object->robos</td><td>$object->matricula</td><td>$object->ipce</td></tr>";
    } else {
      $table.= "<tr><td>$object->anyo</td><td>$object->municipio</td><td>$object->codigo</td><td>$object->nombre_ce</td><td>$object->sector</td><td>$object->presencia_mara</td><td>$object->drogas</td><td>$object->violacion</td><td>$object->armas</td><td>$object->robos</td><td>$object->matricula</td><td>$object->ipce</td></tr>";
    }
 	 }
$table .='</tbody></table><script type="text/javascript">';
$table .="(function($){ $('#datosgrafico').DataTable({ /*searching: false,*/ pageLength: 4, language: {url: '//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json'}, dom: 'Bfrtip',buttons: ['copyHtml5','excelHtml5','csvHtml5','pdfHtml5'] } ); }(jQuery));</script>";
  return $table;
}

function getTable($vars, $anyo, $wpdb ){
  if (!$vars && $anyo >= 2014 ){
    $sql = "SELECT * FROM ind_municipio WHERE anyo=$anyo";
    $titulo = "<tr><th>Departamento</th><th>Municipio</th><th>Homicidios Totales</th><th>Homicidios Mujeres</th><th>Desaparecidos</th><th>Lesiones</th><th>VIF</th><th>Extorsiones</th><th>Robos</th><th>Hurtos</th><th>Robos de Vehículos</th><th>Hurtos Vehículos</th><th>R/H Vehículos con Mercaderia</th><th>Pob. Privada Libertad</th><th>Proporción Pob. Urbana</th><th>Escuela con Amenaza Pandilla</th><th>Indice IPM</th></tr>";
  }elseif ($vars && $anyo >= 2014 ){
    $sql = "SELECT * FROM ind_municipio WHERE anyo=$anyo AND departamento = '$vars'";
    $titulo = "<tr><th>Municipio</th><th>Homicidios Totales</th><th>Homicidios Mujeres</th><th>Desaparecidos</th><th>Lesiones</th><th>VIF</th><th>Extorsiones</th><th>Robos</th><th>Hurtos</th><th>Robos de Vehículos</th><th>Hurtos Vehículos</th><th>R/H Vehículos con Mercaderia</th><th>Pob. Privada Libertad</th><th>Proporción Pob. Urbana</th><th>Escuela con Amenaza Pandilla</th><th>Indice IPM</th></tr>";
  }else { return ""; }
  $hechos = $wpdb->get_results( $sql);
  $table = '
  <table class="table table-bordered display" id="datosgrafico">
   <thead>'.$titulo.'</thead>
   <tbody>';
   foreach ($hechos as $key => $object) {
    if ($vars && $anyo >= 2014){
     $table.="<tr><td>$object->municipio</td><td>$object->homicidio</td><td>$object->total_homicidio_mujer</td><td>$object->desaparecidos</td><td>$object->lesiones</td><td>$object->vif</td><td>$object->extorciones</td><td>$object->robo</td><td>$object->hurto</td><td>$object->robo_vehiculo</td><td>$object->hurto_vehiculo</td><td>$object->r_h_conmercio</td><td>$object->ppl</td><td>$object->ppurb</td><td>$object->epp</td><td>$object->ipn</td></tr>";
    } else {
     $table.="<tr><td>$object->departamento</td><td>$object->municipio</td><td>$object->homicidio</td><td>$object->total_homicidio_mujer</td><td>$object->desaparecidos</td><td>$object->lesiones</td><td>$object->vif</td><td>$object->extorciones</td><td>$object->robo</td><td>$object->hurto</td><td>$object->robo_vehiculo</td><td>$object->hurto_vehiculo</td><td>$object->r_h_conmercio</td><td>$object->ppl</td><td>$object->ppurb</td><td>$object->epp</td><td>$object->ipn</td></tr>";
    }
 	 }
$table .='</tbody></table><script type="text/javascript">';
$table .="(function($){ $('#datosgrafico').DataTable({ /*searching: false,*/ pageLength: 20, language: {url: '//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json'}, dom: 'Bfrtip',buttons: ['copyHtml5','excelHtml5','csvHtml5','pdfHtml5'] } ); }(jQuery));
</script>";
return $table;
}
