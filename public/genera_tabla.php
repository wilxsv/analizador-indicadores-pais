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
    $titulo = "<th>DEPARTAMENTO</th><th>MUNICIPIO</th><th>FASE PESS</th><th>CODIGO</th><th>CENTRO ESCOLAR</th><th>SECTOR SPD</th>";
  } else {
    $sql = "SELECT * FROM ind_focalizacion WHERE municipio = '$code' OR sector_policial = '$code' OR nombre_ce = '$code' OR codigo_ce = '$code'";
    $titulo = "<th>MUNICIPIO</th><th>FASE PESS</th><th>CODIGO</th><th>CENTRO ESCOLAR</th><th>SECTOR SPD</th>";
  }
  $hechos = $wpdb->get_results( $sql);
  $table = '
  <table class="compact display" id="datosgrafico">
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
$table .="(function($){ $('#datosgrafico').DataTable({ responsive: true,pageLength: 20, language: {url: '//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json'}, /*searching: false,*/dom: 'Bfrtip',buttons: ['copyHtml5','excelHtml5','csvHtml5','pdfHtml5'] } ); }(jQuery));
</script>";
  return $table;
}

function getTableCentroEscolar($wpdb, $anyo, $code){
  $sql = "SELECT * FROM ind_centro_escolar";
  if ($code == 'all' ){
    $sql = "SELECT * FROM ind_centro_escolar";
    $titulo = "<th>AÑO</th><th>DEPARTAMENTO</th><th>MUNICIPIO</th><th>CODIGO</th><th>CENTRO ESCOLAR</th><th>SECTOR</th><th>PRESENCIA DE ARMAS</th><th>DROGAS</th><th>VIOLACIONES</th><th>PORTACION DE ARMA BLABCA Y FUEGO</th><th>ROBO Y HURTO</th><th>MATRICULA RELATIVA</th><th>INDICE</th>";
  } else {
    $sql = "SELECT * FROM ind_centro_escolar WHERE municipio = '$code' and anyo = $anyo";
    $titulo = "<th>AÑO</th><th>MUNICIPIO</th><th>CODIGO</th><th>CENTRO ESCOLAR</th><th>SECTOR SPD</th><th>PRESENCIA DE MARAS</th><th>DROGAS</th><th>VIOLACIONES</th><th>PORTACION DE ARMA BLANCA Y FUEGO</th><th>ROBO Y HURTO</th><th>MATRICULA RELATIVA</th><th>INDICE</th>";
  }
  $hechos = $wpdb->get_results( $sql);
  $table = '
  <table class="display compact" id="datosgrafico" cellspacing="0" width="100%">
   <thead><tr>'.$titulo.'</tr></thead>
   <tbody>';
   foreach ($hechos as $key => $object) {
   if ($code == 'all' ){
     $table.= "<tr><td>$object->anyo</td><td>$object->departamento</td><td>$object->municipio</td><td>$object->codigo</td><td>$object->nombre_ce</td><td>$object->sector</td><td>$object->presencia_mara</td><td>$object->drogas</td><td>$object->violacion</td><td>$object->armas</td><td>$object->robos</td><td>$object->matricula</td><td>".round($object->ipce,2)."</td></tr>";
    } else {
      $table.= "<tr><td>$object->anyo</td><td>$object->municipio</td><td>$object->codigo</td><td>$object->nombre_ce</td><td>$object->sector</td><td>$object->presencia_mara</td><td>$object->drogas</td><td>$object->violacion</td><td>$object->armas</td><td>$object->robos</td><td>$object->matricula</td><td>".round($object->ipce,2)."</td></tr>";
    }
 	 }
$table .='</tbody></table><script type="text/javascript">';
$table .="(function($){ $('#datosgrafico').DataTable({ responsive: true, responsive: true,/*searching: false,*/ pageLength: 20, language: {url: '//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json'}, dom: 'Bfrtip',buttons: ['copyHtml5','excelHtml5','csvHtml5','pdfHtml5'] } ); }(jQuery));</script>";
  return $table;
}

function getTable($vars, $anyo, $wpdb ){
  if (!$vars && $anyo >= 2014 ){
    $sql = "SELECT * FROM ind_municipio WHERE anyo=$anyo";
    $titulo = "<tr><th>DEPARTAMENTO</th><th>MUNICIPIO</th><th>HOMICIDIOS TOTAL</th><th>HOMICIDIOS MUJERES</th><th>DESAPARECIDOS</th><th>LESIONES</th><th>VIF</th><th>EXTORCIONES</th><th>ROBOS</th><th>HURTOS</th><th>ROBOS DE VEHICULOS</th><th>HURTO DE VEHICULOS</th><th>R/H VEHICULOS CON MERCADERIA</th><th>POB. PRIVADA DE LIBERTAD</th><th>PRO. PROBLACION URBANA</th><th>ESCUELA CON AMENAZA DE PANDILLAS</th><th>INDICE IPM</th></tr>";
  }elseif ($vars && $anyo >= 2014 ){
    $sql = "SELECT * FROM ind_municipio WHERE anyo=$anyo AND departamento = '$vars'";
    $titulo = "<tr><th>MUNICIPIO</th><th>HOMICIDIOS TOTAL</th><th>FEMENICIDIOS</th><th>DESAPARECIDOS</th><th>LESION</th><th>VIF</th><th>EXTORCION</th><th>ROBO</th><th>HURTO</th><th>ROBO DE VEHICULO</th><th>HURTO DE VEHICULO</th><th>R/H VEHICULO CON MERCADERIA</th><th>POB. PRIVADA DE LIBERTAD</th><th>PRO. PROBLACION URBANA</th><th>ESCUELA CON AMENAZA DE PANDILLAS</th><th>INDICE IPM</th></tr>";
  }else { return ""; }
  $hechos = $wpdb->get_results( $sql);
  $table = '
  <table class="display compact" id="datosgrafico" cellspacing="0" width="100%">
   <thead>'.$titulo.'</thead>
   <tbody>';
   foreach ($hechos as $key => $object) {
    if ($vars && $anyo >= 2014){
     $table.="<tr><td>$object->municipio</td><td>$object->homicidio</td><td>$object->total_homicidio_mujer</td><td>$object->desaparecidos</td><td>$object->lesiones</td><td>$object->vif</td><td>$object->extorciones</td><td>$object->robo</td><td>$object->hurto</td><td>$object->robo_vehiculo</td><td>$object->hurto_vehiculo</td><td>$object->r_h_conmercio</td><td>$object->ppl</td><td>$object->ppurb</td><td>$object->epp</td><td>".round($object->ipn*100)."</td></tr>";
    } else {
     $table.="<tr><td>$object->departamento</td><td>$object->municipio</td><td>$object->homicidio</td><td>$object->total_homicidio_mujer</td><td>$object->desaparecidos</td><td>$object->lesiones</td><td>$object->vif</td><td>$object->extorciones</td><td>$object->robo</td><td>$object->hurto</td><td>$object->robo_vehiculo</td><td>$object->hurto_vehiculo</td><td>$object->r_h_conmercio</td><td>$object->ppl</td><td>$object->ppurb</td><td>$object->epp</td><td>".round($object->ipn*100)."</td></tr>";
    }
 	 }
$table .='</tbody></table><script type="text/javascript">';
$table .="(function($){ $('#datosgrafico').DataTable({ responsive: true, responsive: true, /*searching: false,*/ pageLength: 20, language: {url: '//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json'}, dom: 'Bfrtip',buttons: ['copyHtml5','excelHtml5','csvHtml5','pdfHtml5'] } ); }(jQuery));
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
  $sql = "SELECT * FROM ind_ctl_sector_ppd WHERE nombre_municipio_ppd = '$vars'";
  $ppd = $wpdb->get_results( $sql);
  $data = '';
  foreach ($ppd as $key => $object) {
    $data.= "<tr><td>$object->dsc_ppd</td></tr>";
  }
  $titulo = '<th>SECTOR POLICIAL</th>';
  if ($code == 0) {
    $titulo .= '<th class="vTH"><p>AMENAZAS</p></th><th class="vTH"><p>AUTONOMIA</p></th>';
    $sql = "SELECT id, COUNT(*) AS cantidad, sector_policial AS dsc_ppd FROM ind_bnc_delito WHERE delito LIKE '%AMENAZAS%' AND sector_policial != 'ND' AND  anyo = $anyo  AND municipio = '$vars' GROUP BY sector_policial;";
    $ppd = $wpdb->get_results( $sql);
    $data = '';
    foreach ($ppd as $key => $object) {
      $data.= "<tr><td>$object->dsc_ppd</td><td>$object->cantidad</td><td>$object->cantidad</td></tr>";
    }
  }elseif ($code == 1) {
  }elseif ($code == 2) {
    $titulo .= '<th class="vTH"><p>LESIONES</p></th><th class="vTH"><p>INTEGRIDAD</p></th>';
    $sql = "SELECT id, COUNT(*) AS cantidad, sector_policial AS dsc_ppd FROM ind_bnc_delito WHERE delito LIKE '%LESIONES%' AND sector_policial != 'ND' AND  anyo = $anyo  AND municipio = '$vars' GROUP BY sector_policial;";
    $ppd = $wpdb->get_results( $sql);
    $data = '';
    foreach ($ppd as $key => $object) {
      $data.= "<tr><td>$object->dsc_ppd</td><td>$object->cantidad</td><td>$object->cantidad</td></tr>";
    }
  }elseif ($code == 3) {
    $titulo .= '<th class="vTH"><p>ROBO</p></th><th class="vTH"><p>ROBO DE VEHICULOS</p></th><th class="vTH"><p>HURTO Y ROBO VEH/CM</p></th><th class="vTH"><p>HURTO DE VEHICULOS</p></th><th class="vTH"><p>HURTO</p></th><th class="vTH"><p>EXTORSION</p></th><th class="vTH"><p>PATRIMONIO</p></th>';
    $sql = "SELECT id, COUNT(*) AS cantidad, sector_policial AS dsc_ppd, municipio, IF(delito = 'ROBO', COUNT(*) ,'0') AS R, IF(delito = 'ROBO DE VEHICULOS', COUNT(*) ,'0') AS RV, IF(delito = 'HURTO Y ROBO VEH/CM', COUNT(*) ,'0') AS RH, IF(delito = 'HURTO DE VEHICULOS', COUNT(*) ,'0') AS HV, IF(delito = 'HURTO', COUNT(*) ,'0') AS H, IF(delito = 'EXTORSION', COUNT(*) ,'0') AS E FROM ind_bnc_delito WHERE anyo = $anyo AND municipio = '$vars' AND delito LIKE '%ROBO%' OR delito LIKE '%HURTO%' OR delito LIKE '%EXTORSION%' AND sector_policial != 'ND' GROUP BY sector_policial HAVING municipio = '$vars';";
    $ppd = $wpdb->get_results( $sql);
    $data = '';
    foreach ($ppd as $key => $object) {
      $data.= "<tr><td>$object->dsc_ppd</td><td>$object->R</td><td>$object->RV</td><td>$object->RH</td><td>$object->HV</td><td>$object->H</td><td>$object->E</td><td>$object->cantidad</td></tr>";
    }
  }elseif ($code == 4) {
    $titulo .= '<th class="vTH"><p>MARA 18 R</p></th><th class="vTH"><p>MARA 18 S</p></th><th class="vTH"><p>MARA 18</p></th><th class="vTH"><p>MAO MAO</p></th><th class="vTH"><p>MD</p></th><th class="vTH"><p>MIRADA LOCA</p></th><th class="vTH"><p>BANDA LA RAZA</p></th><th class="vTH"><p>MS13</p></th><th class="vTH"><p>MAQUINA</p></th><th class="vTH"><p>OTRAS BANDAS</p></th><th class="vTH"><p>NINGUNO</p></th><th class="vTH"><p>SIN ESPECIFICAR</p></th><th class="vTH"><p>PERSONAS PRIVADAS DE LIBERTAD</p></th>';
    $sql = "SELECT id, COUNT(*) AS cantidad, sector_policial AS dsc_ppd, municipio, IF(organizacion_delictiva = 'BANDA LA RAZA', COUNT(*) ,'0') AS BR, IF(organizacion_delictiva = 'MAO MAO', COUNT(*) ,'0') AS MM, IF(organizacion_delictiva = 'MAQUINA', COUNT(*) ,'0') AS BM, IF(organizacion_delictiva = 'MARA 18', COUNT(*) ,'0') AS MN, IF(organizacion_delictiva = 'MARA 18 R', COUNT(*) ,'0') AS MNR, IF(organizacion_delictiva = 'MARA 18 S', COUNT(*) ,'0') AS MNS, IF(organizacion_delictiva = 'MD', COUNT(*) ,'0') AS MD, IF(organizacion_delictiva = 'MIRADA LOCA', COUNT(*) ,'0') AS ML, IF(organizacion_delictiva = 'MS13', COUNT(*) ,'0') AS MS, IF(organizacion_delictiva = 'NINGUNO', COUNT(*) ,'0') AS NO, IF(organizacion_delictiva = 'OTRAS BANDAS', COUNT(*) ,'0') AS OB, IF(organizacion_delictiva = 'SIN ESPECIFICAR', COUNT(*) ,'0') AS SE FROM ind_bnc_dgcp WHERE anyo = $anyo  AND municipio = '$vars' AND sector_policial != 'ND' GROUP BY sector_policial HAVING municipio = '$vars';";
    $ppd = $wpdb->get_results( $sql);
    $data = '';
    foreach ($ppd as $key => $object) {
      $data.= "<tr><td>$object->dsc_ppd</td><td>$object->MNR</td><td>$object->MNS</td><td>$object->MN</td><td>$object->MM</td><td>$object->MD</td><td>$object->ML</td><td>$object->BR</td><td>$object->MS</td><td>$object->BM</td><td>$object->OB</td><td>$object->NO</td><td>$object->SE</td><td>$object->cantidad</td></tr>";
    }
  }elseif ($code == 5) {
    $titulo .= '<th class="vTH"><p>VIOLACION</p></th><th class="vTH"><p>SEXUAL</p></th>';
    $sql = "SELECT id, COUNT(*) AS cantidad, sector_policial AS dsc_ppd FROM ind_bnc_delito WHERE delito LIKE '%VIOLACION%' AND sector_policial != 'ND' AND  anyo = $anyo  AND municipio = '$vars' GROUP BY sector_policial;";
    $ppd = $wpdb->get_results( $sql);
    $data = '';
    foreach ($ppd as $key => $object) {
      $data.= "<tr><td>$object->dsc_ppd</td><td>$object->cantidad</td><td>$object->cantidad</td></tr>";
    }
  }elseif ($code == 6) {
    $titulo .= '<th class="vTH"><p>HOMICIDIO</p></th><th class="vTH"><p>FEMENICIDIO</p></th><th class="vTH"><p>VIDA</p></th>';
    $sql = "SELECT id, IF(delito = 'FEMENICIDIO', COUNT(*) ,'0') AS F, IF(delito = 'HOMICIDIO', COUNT(*) ,'0') AS H, COUNT(*) AS cantidad, sector_policial AS dsc_ppd FROM ind_bnc_delito WHERE delito LIKE '%FEMENICIDIO%' OR delito LIKE '%HOMICIDIO%' AND sector_policial != 'ND' AND  anyo = $anyo  AND municipio = '$vars' GROUP BY sector_policial;";
    $ppd = $wpdb->get_results( $sql);
    $data = '';
    foreach ($ppd as $key => $object) {
      $data.= "<tr><td>$object->dsc_ppd</td><td>$object->H</td><td>$object->F</td><td>$object->cantidad</td></tr>";
    }
  }
  $table = '
  <style>
  table thead the {
      transform: rotate(-90deg);
    }
  </style>
  <table border="1" class="compact display" id="datosgrafico">
   <thead><tr>'.$titulo.'</tr></thead>'.$data.'
   <tbody>';
$table .='</tbody></table><script type="text/javascript">';
$table .="(function($){ $('#datosgrafico').DataTable({ responsive: true,pageLength: 20, language: {url: '//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json'}, searching: false,dom: 'Bfrtip',buttons: ['copyHtml5','excelHtml5','csvHtml5','pdfHtml5',
    {
     text: 'información sobre formatos de exportación', action: function ( e, dt, node, config ) {
       window.open('https://es.wikipedia.org/wiki/Exportaci%C3%B3n_(inform%C3%A1tica)');
       //document.getElementById('more').scrollIntoView();
      }
    }
] } ); }(jQuery));
</script>";
  return $table;
}
