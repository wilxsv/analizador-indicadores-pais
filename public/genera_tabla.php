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
$table .="(function($){ $('#datosgrafico').DataTable({pageLength: 20, language: {url: '//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json'}, /*searching: false,*/dom: 'Bfrtip',buttons: ['copyHtml5','excelHtml5','csvHtml5','pdfHtml5'] } ); }(jQuery));
</script>";
  return $table;
}

function getTableCentroEscolar($wpdb, $anyo, $code){
  $sql = "SELECT * FROM ind_centro_escolar";
  if ($code == 'all' ){
    $sql = "SELECT * FROM ind_centro_escolar";
    $titulo = "<th>Año</th><th>Departamento</th><th>Municipio</th><th>Codigo</th><th>Centro Escolar</th><th>Sector</th><th>Presencia de maras</th><th>Drogas</th><th>Violaciones</th><th>Portacion de armas blancas y fuego</th><th>Robos y hurtos</th><th>Matricula relativa</th><th>Indice</th>";
  } else {
    $sql = "SELECT * FROM ind_centro_escolar WHERE municipio = '$code' and anyo = $anyo";
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
$table .="(function($){ $('#datosgrafico').DataTable({ /*searching: false,*/ pageLength: 20, language: {url: '//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json'}, dom: 'Bfrtip',buttons: ['copyHtml5','excelHtml5','csvHtml5','pdfHtml5'] } ); }(jQuery));</script>";
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

function getTableSiatuacional($wpdb, $anyo, $vars, $code){
  $sql = "SELECT * FROM ind_focalizacion";
  if ($code == 'all' ){
    $sql = "SELECT * FROM ind_focalizacion";
    $titulo = "<th>Departamento</th><th>Municipio</th><th>Fases PESS</th><th>Codigo</th><th>Centro Escolar</th><th>Sector SPD</th>";
  } else {
    $sql = "SELECT * FROM ind_focalizacion WHERE municipio = '$code' OR sector_policial = '$code' OR nombre_ce = '$code' OR codigo_ce = '$code'";
    $titulo = "<th>Municipio</th><th>Fases PESS</th><th>Codigo</th><th>Centro Escolar</th><th>Sector SPD</th>";
  }
  $hechos = $wpdb->get_results( $sql);
  $titulo = '<th>SECTOR POLICIAL</th>';
  $titulo .= '<th class="vTH"><p>HOMICIDIO</p></th><th class="vTH"><p>FEMENICIDIO</p></th><th class="vTH"><p>VIDA</p></th>';
  $titulo .= '<th class="vTH"><p>VIOLACION</p></th><th class="vTH"><p>SEXUAL</p></th>';
  $titulo .= '<th class="vTH"><p>LESIONES</p></th><th class="vTH"><p>INTEGRIDAD</p></th>';
  $titulo .= '<th class="vTH"><p>ROBO</p></th><th class="vTH"><p>ROBO DE VEHICULOS</p></th><th class="vTH"><p>HURTO Y ROBO VEH/CM</p></th><th class="vTH"><p>HURTO DE VEHICULOS</p></th><th class="vTH"><p>HURTO</p></th><th class="vTH"><p>EXTORSION</p></th><th class="vTH"><p>PATRIMONIO</p></th>';
  $titulo .= '<th class="vTH"><p>AMENASAS</p></th><th class="vTH"><p>AUTONOMIA</p></th>';
  $titulo .= '<th class="vTH"><p>EXPRESIONES DE VIOLENCIA CONTRA LA MUJER</p></th><th class="vTH"><p>VIOLENCIA INTRAFAMILIAR</p></th><th class="vTH"><p>MALTRATO INFANTIL</p></th><th class="vTH"><p>DELITOS COMETIDOS CON ARMAS DE FUEGO</p></th><th class="vTH"><p>DISPARO DE ARMA DE FUEGO</p></th><th class="vTH"><p>PROBLEMAS ARMAS/FUEGO</p></th><th class="vTH"><p>PUNTO DE ASALTO</p></th><th class="vTH"><p>PRESENCIA DE MARAS</p></th><th class="vTH"><p>PROBLEMA DE DROGAS</p></th><th class="vTH"><p>CONFLITOS INTERPERSONALES</p></th><th class="vTH"><p>MARA 18 R</p></th><th class="vTH"><p>MARA 18 S</p></th><th class="vTH"><p>MARA 18</p></th><th class="vTH"><p>MAO MAO</p></th><th class="vTH"><p>MD</p></th><th class="vTH"><p>MIRADA LOCA</p></th><th class="vTH"><p>BANDA LA RAZA</p></th><th class="vTH"><p>MS13</p></th><th class="vTH"><p>MAQUINA</p></th><th class="vTH"><p>OTRAS BANDAS</p></th><th class="vTH"><p>NINGUNO</p></th><th class="vTH"><p>SIN ESPECIFICAR</p></th><th class="vTH"><p>PERSONAS PRIVADAS DE LIBERTAD</p></th>';
  $table = '
  <style>
  .vTH {
   text-align:center;
   white-space:nowrap;
   g-origin:50% 50%;
   -webkit-transform: rotate(90deg);
   -moz-transform: rotate(90deg);
   -ms-transform: rotate(90deg);
   -o-transform: rotate(90deg);
   transform: rotate(90deg);
    }
.vTH p {
   margin:0 -100% ;
   display:inline-block;
}
.vTH p:before{
   content:\'\';
   width:0;
   padding-top:110%;/* takes width as reference, + 10% for faking some extra padding */
   display:inline-block;
   vertical-align:middle;
}
table {
   text-align:center;
   table-layout : fixed;
}
  </style>
  <table border="1" class="table table-bordered display" id="datosgrafic">
   <thead><tr>'.$titulo.'</tr></thead>
   <tbody>';
   /*
   foreach ($hechos as $key => $object) {
     if ($code == 'all' ){
       $table.= "<tr><td>$object->departamento</td><td>$object->municipio</td><td>$object->fase_pess</td><td>$object->codigo_ce</td><td>$object->nombre_ce</td><td>$object->sector_policial</td></tr>";
     } else {
       $table.= "<tr><td>$object->municipio</td><td>$object->fase_pess</td><td>$object->codigo_ce</td><td>$object->nombre_ce</td><td>$object->sector_policial</td></tr>";
     }
 	 }*/
$table .='</tbody></table><script type="text/javascript">';
$table .="(function($){ $('#datosgrafico').DataTable({pageLength: 20, language: {url: '//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json'}, /*searching: false,*/dom: 'Bfrtip',buttons: ['copyHtml5','excelHtml5','csvHtml5','pdfHtml5'] } ); }(jQuery));
</script>";
  return $table;
}
