<?php
/**
 * Plugin Name: indicadores-pais-El-Salvador-seguro
 * Plugin URI: http://wordpress.org/plugins/
 * Description: Administración de banco de datos del Sistema Integrado de Estadisticas (SIE), El SIE tiene como objetivo proporcionar información a las autoridades del MJSP para la definición de prioridades, diseño de estrategias, seguimiento a los resultados e impactos de la política del sector y la rendición de cuentas a la ciudadanía.
 * Author: PNUD - El Salvador
 * Version: 0.9
 * Author URI: http://www.seguridad.gob.sv/dia/
*/

function getHaving($wpdb, $vars){
  $having = "";
  if (is_numeric($vars)) {
    $municipios=$wpdb->get_results( "SELECT m.id AS id, d.nombre_departamento AS departamento, m.nombre_municipio AS municipio FROM ind_ctl_departamento AS d INNER JOIN ind_ctl_municipio AS m ON d.id = m.ctl_departamento_id WHERE m.id = $vars group by d.nombre_departamento, m.nombre_municipio" );
    foreach ($municipios as $l) {
      $having = " municipio = '".strtoupper($l->municipio)."'";
    }
  }
  return $having;
}

function getFiltroE($wpdb, $vars){
  $filtro = "";
  $filtro2 = "";
  $having = "";
  if (is_numeric($vars)) {
    $municipios=$wpdb->get_results( "SELECT m.id AS id, d.nombre_departamento AS departamento, m.nombre_municipio AS municipio FROM ind_ctl_departamento AS d INNER JOIN ind_ctl_municipio AS m ON d.id = m.ctl_departamento_id WHERE m.id = $vars group by d.nombre_departamento, m.nombre_municipio" );
    foreach ($municipios as $l) {
      $filtro = " nombre_municipio_ppd = '".strtoupper($l->municipio)."' AND nombre_departamento_ppd = '".strtoupper($l->departamento)."'";
      $filtro2 = " municipio = '".strtoupper($l->municipio)."' AND departamento = '".strtoupper($l->departamento)."'";
      $having = " municipio = '".strtoupper($l->municipio)."'";
    }
  }
  return $filtro2;
}

function getEstadisticaDelito($wpdb, $anyo, $vars){
  $filtro = getFiltroE($wpdb, $vars);
  $max = 14;
  $table = '';
  $head = '<tr><th>Cruce</th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th></tr>';
  $data .= getDelitosPorSQL($wpdb, "SELECT delito a, COUNT(*) b, '' c, '' d, '' e, '' f, '' g, '' h, '' i, '' j, '' k, '' l, '' m FROM ind_bnc_delito WHERE anyo = $anyo AND $filtro GROUP BY delito ORDER BY 1", "<tr><td>DELITO</td><td>FRECUENCIA</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>").getLinea($max);
  $data .= getDelitosPorSQL($wpdb, "SELECT sector_policial a, COUNT(IF(delito = 'AMENAZAS',1,NULL)) b, COUNT(IF(delito = 'DISPARO DE ARMA DE FUEGO',1,NULL)) c, COUNT(IF(delito = 'EXPRESIONES DE VIOLENCIA CONTRA LA MUJER',1,NULL)) d, COUNT(IF(delito = 'EXTORSION',1,NULL)) e, COUNT(IF(delito = 'HOMICIDIO',1,NULL)) f, COUNT(IF(delito = 'HURTO',1,NULL)) g, COUNT(IF(delito = 'HURTO DE VEHICULOS',1,NULL)) h, COUNT(IF(delito = 'HURTO Y ROBO VEH/CM',1,NULL)) i, COUNT(IF(delito = 'LESIONES',1,NULL)) j, COUNT(IF(delito = 'ROBO',1,NULL)) k, COUNT(IF(delito = 'ROBO DE VEHICULOS',1,NULL)) l, COUNT(IF(delito = 'VIOLACION',1,NULL)) m, COUNT(IF(delito = 'VIOLENCIA INTRAFAMILIAR',1,NULL)) n FROM ind_bnc_delito WHERE anyo = $anyo AND municipio = '$vars' GROUP BY sector_policial  ORDER BY 1", "<tr><td>SECTOR POLICIAL</td><td>AMENAZAS</td><td>DISPARO DE ARMA DE FUEGO</td><td>EXPRESIONES DE VIOLENCIA CONTRA LA MUJER</td><td>EXTORSION</td><td>HOMICIDIO</td><td>HURTO</td><td>HURTO DE VEHICULOS</td><td>HURTO Y ROBO VEH/CM</td><td>LESIONES</td><td>ROBO</td><td>ROBO DE VEHICULOS</td><td>VIOLACION</td><td>VIOLENCIA INTRAFAMILIAR</td></tr>").getLinea($max);
  $data .= getDelitosPorSQL($wpdb, "SELECT delito a, COUNT(IF(area = 'URBANA',1,NULL)) b, COUNT(IF(area = 'RURAL',1,NULL)) c, '' d, '' e, '' f, '' g, '' h, '' i, '' j, '' k, '' l, '' m FROM ind_bnc_delito WHERE anyo = $anyo AND $filtro GROUP BY delito ORDER BY 1", "<tr><td>DELITO SEGUN AREA</td><td>URBANA</td><td>RURAL</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>").getLinea($max);
  $data .= getDelitosPorSQL($wpdb, "SELECT delito a, COUNT(IF(espacio = 'BAR',1,NULL)) b, COUNT(IF(espacio = 'CALLE',1,NULL)) c, COUNT(IF(espacio = 'CALLE',1,NULL)) d, COUNT(IF(espacio = 'CAMPO',1,NULL)) e, COUNT(IF(espacio = 'CASA',1,NULL)) f, COUNT(IF(espacio = 'LOCAL',1,NULL)) g, COUNT(IF(espacio = 'MOTEL',1,NULL)) h, COUNT(IF(espacio = 'PARQUEO',1,NULL)) i, COUNT(*) j, '' k, '' l, '' m FROM ind_bnc_delito WHERE anyo = $anyo AND $filtro GROUP BY delito ORDER BY 1", "<tr><td>DELITO SEGUN ESPACIO</td><td>BAR</td><td>CALLE</td><td>CAMPO</td><td>CASA</td><td>LOCAL</td><td>MOTEL</td><td>PARQUEO</td><td>TRANS PUB</td><td>TODOS</td><td></td><td></td><td></td><td></td></tr>").getLinea($max);
  $data .= getDelitosPorSQL($wpdb, "SELECT delito a, COUNT(IF(mes = 'ENE',1,NULL)) b, COUNT(IF(mes = 'FEB',1,NULL)) c, COUNT(IF(mes = 'MAR',1,NULL)) d, COUNT(IF(mes = 'ABR',1,NULL)) e, COUNT(IF(mes = 'MAY',1,NULL)) f, COUNT(IF(mes = 'JUN',1,NULL)) g, COUNT(IF(mes = 'JUL',1,NULL)) h, COUNT(IF(mes = 'AGO',1,NULL)) i, COUNT(IF(mes = 'SEP',1,NULL)) j, COUNT(IF(mes = 'OCT',1,NULL)) k, COUNT(IF(mes = 'NOV',1,NULL)) l, COUNT(IF(mes = 'DIC',1,NULL)) m FROM ind_bnc_delito WHERE anyo = $anyo AND $filtro GROUP BY delito ORDER BY 1", "<tr><td>DELITO SEGUN MES</td><td>ENE</td><td>FEB</td><td>MAR</td><td>ABR</td><td>MAY</td><td>JUN</td><td>JUL</td><td>AGO</td><td>SEP</td><td>OCT</td><td>NOV</td><td>DIC</td><td></td></tr>").getLinea($max);
  $data .= getDelitosPorSQL($wpdb, "SELECT delito a, COUNT(IF(dia = 'LU',1,NULL)) b, COUNT(IF(dia = 'MA',1,NULL)) c, COUNT(IF(dia = 'MI',1,NULL)) d, COUNT(IF(dia = 'JU',1,NULL)) e, COUNT(IF(dia = 'VI',1,NULL)) f, COUNT(IF(dia = 'SA',1,NULL)) g, COUNT(IF(dia = 'DO',1,NULL)) h, '' i, '' j, '' k, '' l, '' m FROM ind_bnc_delito WHERE anyo = $anyo AND $filtro GROUP BY delito ORDER BY 1", "<tr><td>DELITO SEGUN DIA  DEL HECHO</td><td>LU</td><td>MA</td><td>MI</td><td>JU</td><td>VI</td><td>SA</td><td>DO</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>").getLinea($max);
  $data .= getDelitosPorSQL($wpdb, "SELECT delito a, COUNT(IF(victima_sexo = 'MASCULINO',1,NULL)) b, COUNT(IF(victima_sexo = 'FEMENINO',1,NULL)) c, COUNT(IF(victima_sexo = 'ND',1,NULL)) d, '' e, '' f, '' g, '' h, '' i, '' j, '' k, '' l, '' m FROM ind_bnc_delito WHERE anyo = $anyo AND $filtro GROUP BY delito ORDER BY 1", "<tr><td>DELITO SEGUN SEXO VICTIMA</td><td>MASCULINO</td><td>FEMENINO</td><td>ND</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>").getLinea($max);
  $data .= getDelitosPorSQL($wpdb, "SELECT hora_rango a, COUNT(IF(delito = 'AMENAZAS',1,NULL)) b, COUNT(IF(delito = 'DISPARO DE ARMA DE FUEGO',1,NULL)) c, COUNT(IF(delito = 'EXPRESIONES DE VIOLENCIA CONTRA LA MUJER',1,NULL)) d, COUNT(IF(delito = 'EXTORSION',1,NULL)) e, COUNT(IF(delito = 'HOMICIDIO',1,NULL)) f, COUNT(IF(delito = 'HURTO',1,NULL)) g, COUNT(IF(delito = 'HURTO DE VEHICULOS',1,NULL)) h, COUNT(IF(delito = 'HURTO Y ROBO VEH/CM',1,NULL)) i, COUNT(IF(delito = 'LESIONES',1,NULL)) j, COUNT(IF(delito = 'ROBO',1,NULL)) k, COUNT(IF(delito = 'ROBO DE VEHICULOS',1,NULL)) l, COUNT(IF(delito = 'VIOLACION',1,NULL)) m, COUNT(IF(delito = 'VIOLENCIA INTRAFAMILIAR',1,NULL)) n FROM ind_bnc_delito WHERE anyo = $anyo AND municipio = '$vars' GROUP BY hora_rango ORDER BY 1", "<tr><td>DELITO SEGUN RANGO DE HORA</td><td>AMENAZAS</td><td>DISPARO DE ARMA DE FUEGO</td><td>EXPRESIONES DE VIOLENCIA CONTRA LA MUJER</td><td>EXTORSION</td><td>HOMICIDIO</td><td>HURTO</td><td>HURTO DE VEHICULOS</td><td>HURTO Y ROBO VEH/CM</td><td>LESIONES</td><td>ROBO</td><td>ROBO DE VEHICULOS</td><td>VIOLACION</td><td>VIOLENCIA INTRAFAMILIAR</td></tr>").getLinea($max);
  $data .= getDelitosPorSQL($wpdb, "SELECT victima_ocupacion a, COUNT(IF(delito = 'AMENAZAS',1,NULL)) b, COUNT(IF(delito = 'DISPARO DE ARMA DE FUEGO',1,NULL)) c, COUNT(IF(delito = 'EXPRESIONES DE VIOLENCIA CONTRA LA MUJER',1,NULL)) d, COUNT(IF(delito = 'EXTORSION',1,NULL)) e, COUNT(IF(delito = 'HOMICIDIO',1,NULL)) f, COUNT(IF(delito = 'HURTO',1,NULL)) g, COUNT(IF(delito = 'HURTO DE VEHICULOS',1,NULL)) h, COUNT(IF(delito = 'HURTO Y ROBO VEH/CM',1,NULL)) i, COUNT(IF(delito = 'LESIONES',1,NULL)) j, COUNT(IF(delito = 'ROBO',1,NULL)) k, COUNT(IF(delito = 'ROBO DE VEHICULOS',1,NULL)) l, COUNT(IF(delito = 'VIOLACION',1,NULL)) m, COUNT(IF(delito = 'VIOLENCIA INTRAFAMILIAR',1,NULL)) n FROM ind_bnc_delito WHERE anyo = $anyo AND municipio = '$vars' GROUP BY victima_ocupacion ORDER BY 1", "<tr><td>DELITO SEGUN OCUPACION</td><td>AMENAZAS</td><td>DISPARO DE ARMA DE FUEGO</td><td>EXPRESIONES DE VIOLENCIA CONTRA LA MUJER</td><td>EXTORSION</td><td>HOMICIDIO</td><td>HURTO</td><td>HURTO DE VEHICULOS</td><td>HURTO Y ROBO VEH/CM</td><td>LESIONES</td><td>ROBO</td><td>ROBO DE VEHICULOS</td><td>VIOLACION</td><td>VIOLENCIA INTRAFAMILIAR</td></tr>").getLinea($max);
  $data .= getDelitosPorSQL($wpdb, "SELECT delito a, COUNT(IF(agresor_tipo_arma = 'ARMA BLANCA',1,NULL)) b, COUNT(IF(agresor_tipo_arma = 'ARMA DE FUEGO',1,NULL)) c, COUNT(IF(agresor_tipo_arma = 'CONTUNDENTE',1,NULL)) d, COUNT(IF(agresor_tipo_arma = 'FUERZA FISICA',1,NULL)) e, COUNT(IF(agresor_tipo_arma = 'LLAMADA - MENSAJES',1,NULL)) f, COUNT(IF(agresor_tipo_arma = 'ND',1,NULL)) g, COUNT(IF(agresor_tipo_arma = 'OTRAS',1,NULL)) h, '' i, '' j, '' k, '' l, '' m FROM ind_bnc_delito WHERE anyo = $anyo AND $filtro GROUP BY delito ORDER BY 1", "<tr><td>DELITO SEGUN ARMA</td><td>ARMA BLANCA</td><td>ARMA DE FUEGO</td><td>CONTUNDENTE</td><td>FUERZA FISICA</td><td>LLAMADA - MENSAJES</td><td>ND</td><td>OTRAS</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>").getLinea($max);
  $data .= getDelitosPorSQL($wpdb, "SELECT sector_policial a, COUNT(IF(agresor_tipo_arma = 'ARMA BLANCA',1,NULL)) b, COUNT(IF(agresor_tipo_arma = 'ARMA DE FUEGO',1,NULL)) c, COUNT(IF(agresor_tipo_arma = 'CONTUNDENTE',1,NULL)) d, COUNT(IF(agresor_tipo_arma = 'FUERZA FISICA',1,NULL)) e, COUNT(IF(agresor_tipo_arma = 'LLAMADA - MENSAJES',1,NULL)) f, COUNT(IF(agresor_tipo_arma = 'ND',1,NULL)) g, COUNT(IF(agresor_tipo_arma = 'OTRAS',1,NULL)) h, '' i, '' j, '' k, '' l, '' m FROM ind_bnc_delito WHERE anyo = $anyo AND municipio = '$vars' GROUP BY sector_policial ORDER BY 1", "<tr><td>SECTOR POLICIAL SEGUN ARMA</td><td>ARMA BLANCA</td><td>ARMA DE FUEGO</td><td>CONTUNDENTE</td><td>FUERZA FISICA</td><td>LLAMADA - MENSAJES</td><td>ND</td><td>OTRAS</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>").getLinea($max);
/*    $data .= getPersonasPrivadasLibertadPorSQL($wpdb, "SELECT municipio AS a, COUNT(IF(organizacion_delictiva = 'MARA 18',1,NULL)) b, COUNT(IF(organizacion_delictiva = 'MARA 18 R',1,NULL)) c, COUNT(IF(organizacion_delictiva = 'MARA 18 S',1,NULL)) d, COUNT(IF(organizacion_delictiva = 'MAO MAO',1,NULL)) e, COUNT(IF(organizacion_delictiva = 'MD',1,NULL)) f, COUNT(IF(organizacion_delictiva = 'MIRADA LOCA',1,NULL)) g, COUNT(IF(organizacion_delictiva = 'MS13',1,NULL)) h, COUNT(IF(organizacion_delictiva = 'NINGUNO',1,NULL)) i FROM ind_bnc_dgcp WHERE anyo = $anyo AND municipio = '$vars' GROUP BY municipio ORDER BY 1", "<tr><td>MUNICIPIO</td><td>MARA 18 R</td><td>MARA 18 R R</td><td>MARA 18 R S</td><td>MAO MAO</td><td>MD</td><td>MIRADA LOCA</td><td>MS13</td><td>NINGUNO</td></tr>").getLinea($max);
  $data .= getDelitosPorSQL($wpdb, "SELECT municipio AS a, COUNT(IF(sexo = 'MASCULINO',1,NULL)) b, COUNT(IF(sexo = 'FEMENINO',1,NULL)) c, '' d, '' e, '' f, '' g, '' h, '' i FROM ind_bnc_dgcp WHERE anyo = $anyo AND municipio = '$vars' GROUP BY municipio ORDER BY 1", "<tr><td>Segun rango etareo</td><td>MASCULINO</td><td>FEMENINO</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>").getLinea($max);*/
  $table .= getTableX($head, $data, uniqid());
  return $table;
}

function getEstadisticaTransito($wpdb, $anyo, $vars){
  $filtro = getFiltroE($wpdb, $vars);
  $max = 4;
  $table = '';
  $data .= getRetornadosPorSQL($wpdb, "SELECT sexo AS u, COUNT(IF(resultado = 'FALLECIDO',1,NULL)) d, COUNT(IF(resultado = 'LESIONADO',1,NULL)) t, COUNT(*) c FROM ind_bnc_accidente_transito WHERE anyo = $anyo AND $filtro GROUP BY sexo ORDER BY 1", "<tr><td>RESULTADO DE ACCIDENTES POR SEXO</td><td>FALLECIDO</td><td>LESIONADO</td><td>TOTAL</td></tr>").getLinea($max);
  $data .= getRetornadosPorSQL($wpdb, "SELECT edad_rango AS u, COUNT(IF(resultado = 'FALLECIDO',1,NULL)) d, COUNT(IF(resultado = 'LESIONADO',1,NULL)) t, COUNT(*) c FROM ind_bnc_accidente_transito WHERE anyo = $anyo AND $filtro GROUP BY edad_rango ORDER BY 1", "<tr><td>RESULTADO DE ACCIDENTES POR RANGO DE EDADES</td><td>FALLECIDO</td><td>LESIONADO</td><td>TOTAL</td></tr>").getLinea($max);
  $data .= getRetornadosPorSQL($wpdb, "SELECT calidad AS u, COUNT(IF(resultado = 'FALLECIDO',1,NULL)) d, COUNT(IF(resultado = 'LESIONADO',1,NULL)) t, COUNT(*) c FROM ind_bnc_accidente_transito WHERE anyo = $anyo AND $filtro GROUP BY calidad ORDER BY 1", "<tr><td>RESULTADO DE ACCIDENTES POR CALIDAD</td><td>FALLECIDO</td><td>LESIONADO</td><td>TOTAL</td></tr>").getLinea($max);
  $data .= getRetornadosPorSQL($wpdb, "SELECT tipo_accidente AS u, COUNT(IF(resultado = 'FALLECIDO',1,NULL)) d, COUNT(IF(resultado = 'LESIONADO',1,NULL)) t, COUNT(*) c FROM ind_bnc_accidente_transito WHERE anyo = $anyo AND $filtro GROUP BY tipo_accidente ORDER BY 1", "<tr><td>RESULTADO DE ACCIDENTES POR TIPO DE ACCIDENTE</td><td>FALLECIDO</td><td>LESIONADO</td><td>TOTAL</td></tr>").getLinea($max);
  $data .= getRetornadosPorSQL($wpdb, "SELECT causa AS u, COUNT(IF(resultado = 'FALLECIDO',1,NULL)) d, COUNT(IF(resultado = 'LESIONADO',1,NULL)) t, COUNT(*) c FROM ind_bnc_accidente_transito WHERE anyo = $anyo AND $filtro GROUP BY causa ORDER BY 1", "<tr><td>RESULTADO DE ACCIDENTES POR CAUSA</td><td>FALLECIDO</td><td>LESIONADO</td><td>TOTAL</td></tr>").getLinea($max);
  $data .= getRetornadosPorSQL($wpdb, "SELECT vehiculo AS u, COUNT(IF(resultado = 'FALLECIDO',1,NULL)) d, COUNT(IF(resultado = 'LESIONADO',1,NULL)) t, COUNT(*) c FROM ind_bnc_accidente_transito WHERE anyo = $anyo AND $filtro GROUP BY vehiculo ORDER BY 1", "<tr><td>RESULTADO DE ACCIDENTES POR CLASE DE VEHICULO</td><td>FALLECIDO</td><td>LESIONADO</td><td>TOTAL</td></tr>").getLinea($max);
  $data .= getRetornadosPorSQL($wpdb, "SELECT mes AS u, COUNT(IF(resultado = 'FALLECIDO',1,NULL)) d, COUNT(IF(resultado = 'LESIONADO',1,NULL)) t, COUNT(*) c FROM ind_bnc_accidente_transito WHERE anyo = $anyo AND $filtro GROUP BY mes ORDER BY 1", "<tr><td>RESULTADO DE ACCIDENTES POR MES</td><td>FALLECIDO</td><td>LESIONADO</td><td>TOTAL</td></tr>").getLinea($max);
  $data .= getRetornadosPorSQL($wpdb, "SELECT dia AS u, COUNT(IF(resultado = 'FALLECIDO',1,NULL)) d, COUNT(IF(resultado = 'LESIONADO',1,NULL)) t, COUNT(*) c FROM ind_bnc_accidente_transito WHERE anyo = $anyo AND $filtro GROUP BY dia ORDER BY 1", "<tr><td>RESULTADO DE ACCIDENTES POR DIAS</td><td>FALLECIDO</td><td>LESIONADO</td><td>TOTAL</td></tr>").getLinea($max);
  $data .= getRetornadosPorSQL($wpdb, "SELECT hora_rango AS u, COUNT(IF(resultado = 'FALLECIDO',1,NULL)) d, COUNT(IF(resultado = 'LESIONADO',1,NULL)) t, COUNT(*) c FROM ind_bnc_accidente_transito WHERE anyo = $anyo AND $filtro GROUP BY hora_rango ORDER BY 1", "<tr><td>RESULTADO DE ACCIDENTES POR RANGO DE HORA</td><td>FALLECIDO</td><td>LESIONADO</td><td>TOTAL</td></tr>").getLinea($max);
  $data .= getRetornadosPorSQL($wpdb, "SELECT direccion AS u, COUNT(IF(resultado = 'FALLECIDO',1,NULL)) d, COUNT(IF(resultado = 'LESIONADO',1,NULL)) t, COUNT(*) c FROM ind_bnc_accidente_transito WHERE anyo = $anyo AND $filtro GROUP BY direccion ORDER BY 1", "<tr><td>RESULTADO DE ACCIDENTES POR DIRECCION</td><td>FALLECIDO</td><td>LESIONADO</td><td>TOTAL</td></tr>").getLinea($max);
  $head = '<tr><th>Cruce</th><th>.</th><th>.</th><th>.</th></tr>';
  $table .= getTableX($head, $data, uniqid());
  return $table;
}

function getEstadisticaRetornados($wpdb, $anyo, $vars){
  $filtro = getFiltroE($wpdb, $vars);
  $max = 4;
  $table = '';
  $head = '<tr><th>Cruce</th><th>.</th><th>.</th><th>.</th></tr>';
  $data .= getRetornadosPorSQL($wpdb, "SELECT 'Retornados por sexo' AS u, COUNT(IF(sexo = 'MASCULINO',1,NULL)) d, COUNT(IF(sexo = 'FEMENINO',1,NULL)) t, COUNT(IF(sexo = 'ND',1,NULL)) c FROM ind_bnc_retornado WHERE anyo = $anyo AND $filtro GROUP BY municipio ORDER BY 1", "<tr><td>Municipio</td><td>MASCULINO</td><td>FEMENINO</td><td>ND</td></tr>").getLinea($max);
  $data .= getRetornadosPorSQL($wpdb, "SELECT pais_repatriacion AS u, COUNT(*) AS d, '' AS t, '' AS c FROM ind_bnc_retornado WHERE anyo = $anyo AND $filtro GROUP BY pais_repatriacion ORDER BY 1", "<tr><td>Pais de Repatriación</td><td>Frecuencia</td><td></td><td></td></tr>").getLinea($max);
  $data .= getRetornadosPorSQL($wpdb, "SELECT mes AS u, COUNT(*) AS d, '' AS t, '' AS c FROM ind_bnc_retornado WHERE anyo = $anyo AND $filtro GROUP BY mes ORDER BY 1", "<tr><td>Retornados a $vars por mes</td><td>Frecuencia</td><td></td><td></td></tr>").getLinea($max);
  $data .= getRetornadosPorSQL($wpdb, "SELECT consulado AS u, COUNT(*) AS d, '' AS t, '' AS c FROM ind_bnc_retornado WHERE anyo = $anyo AND $filtro GROUP BY consulado ORDER BY 1", "<tr><td>Retornados a $vars por consulado</td><td>Frecuencia</td><td></td><td></td><td></td></tr>").getLinea($max);
  $data .= getRetornadosPorSQL($wpdb, "SELECT estado_civil AS u, COUNT(IF(sexo = 'MASCULINO',1,NULL)) d, COUNT(IF(sexo = 'FEMENINO',1,NULL)) t, COUNT(IF(sexo = 'ND',1,NULL)) c FROM ind_bnc_retornado WHERE anyo = $anyo AND $filtro GROUP BY estado_civil ORDER BY 1", "<tr><td>'Retornados por estado civil en $vars'</td><td>MASCULINO</td><td>FEMENINO</td><td>ND</td></tr>").getLinea($max);
  $data .= getRetornadosPorSQL($wpdb, "SELECT persona_dependiente AS u, COUNT(IF(sexo = 'MASCULINO',1,NULL)) d, COUNT(IF(sexo = 'FEMENINO',1,NULL)) t, COUNT(IF(sexo = 'ND',1,NULL)) c FROM ind_bnc_retornado WHERE anyo = $anyo AND $filtro GROUP BY persona_dependiente ORDER BY 1", "<tr><td>'Retornados por personas dependientes en $vars'</td><td>MASCULINO</td><td>FEMENINO</td><td>ND</td></tr>").getLinea($max);
  $data .= getRetornadosPorSQL($wpdb, "SELECT motivo AS u, COUNT(IF(sexo = 'MASCULINO',1,NULL)) d, COUNT(IF(sexo = 'FEMENINO',1,NULL)) t, COUNT(IF(sexo = 'ND',1,NULL)) c FROM ind_bnc_retornado WHERE anyo = $anyo AND $filtro GROUP BY motivo ORDER BY 1", "<tr><td>'Retornados por motivo de migración en $vars'</td><td>MASCULINO</td><td>FEMENINO</td><td>ND</td></tr>").getLinea($max);
  $data .= getRetornadosPorSQL($wpdb, "SELECT nivel_educativo AS u, COUNT(IF(sexo = 'MASCULINO',1,NULL)) d, COUNT(IF(sexo = 'FEMENINO',1,NULL)) t, COUNT(IF(sexo = 'ND',1,NULL)) c FROM ind_bnc_retornado WHERE anyo = $anyo AND $filtro GROUP BY nivel_educativo ORDER BY 1", "<tr><td>'Retornados segun nivel nivel_educativo en $vars'</td><td>MASCULINO</td><td>FEMENINO</td><td>ND</td></tr>").getLinea($max);
  $data .= getRetornadosPorSQL($wpdb, "SELECT antecedentes_penales AS u, COUNT(IF(sexo = 'MASCULINO',1,NULL)) d, COUNT(IF(sexo = 'FEMENINO',1,NULL)) t, COUNT(IF(sexo = 'ND',1,NULL)) c FROM ind_bnc_retornado WHERE anyo = $anyo AND $filtro GROUP BY antecedentes_penales ORDER BY 1", "<tr><td>'Retornados segun antecedentes penales'</td><td>MASCULINO</td><td>FEMENINO</td><td>ND</td></tr>").getLinea($max);
  $data .= getRetornadosPorSQL($wpdb, "SELECT tiempo_fuera AS u, COUNT(IF(sexo = 'MASCULINO',1,NULL)) d, COUNT(IF(sexo = 'FEMENINO',1,NULL)) t, COUNT(IF(sexo = 'ND',1,NULL)) c FROM ind_bnc_retornado WHERE anyo = $anyo AND $filtro GROUP BY tiempo_fuera ORDER BY 1", "<tr><td>'Tiempo de residir fuera de ES'</td><td>MASCULINO</td><td>FEMENINO</td><td>ND</td></tr>").getLinea($max);
  $data .= getRetornadosPorSQL($wpdb, "SELECT espectativa_migrante AS u, COUNT(IF(sexo = 'MASCULINO',1,NULL)) d, COUNT(IF(sexo = 'FEMENINO',1,NULL)) t, COUNT(IF(sexo = 'ND',1,NULL)) c FROM ind_bnc_retornado WHERE anyo = $anyo AND $filtro GROUP BY espectativa_migrante ORDER BY 1", "<tr><td>'Retornados segun espectativas de vida en $vars'</td><td>MASCULINO</td><td>FEMENINO</td><td>ND</td></tr>").getLinea($max);
  $table .= getTableX($head, $data, uniqid());
  return $table;
}

function getEstadisticaPrivadosLibertad($wpdb, $anyo, $vars){
  $filtro = getFiltroE($wpdb, $vars);
  $max = 9;
  $table = '';
  $head = '<tr><th>Cruce</th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th></tr>';
  $data .= getPersonasPrivadasLibertadPorSQL($wpdb, "SELECT municipio AS a, COUNT(IF(organizacion_delictiva = 'MARA 18',1,NULL)) b, COUNT(IF(organizacion_delictiva = 'MARA 18 R',1,NULL)) c, COUNT(IF(organizacion_delictiva = 'MARA 18 S',1,NULL)) d, COUNT(IF(organizacion_delictiva = 'MAO MAO',1,NULL)) e, COUNT(IF(organizacion_delictiva = 'MD',1,NULL)) f, COUNT(IF(organizacion_delictiva = 'MIRADA LOCA',1,NULL)) g, COUNT(IF(organizacion_delictiva = 'MS13',1,NULL)) h, COUNT(IF(organizacion_delictiva = 'NINGUNO',1,NULL)) i FROM ind_bnc_dgcp WHERE anyo = $anyo AND $filtro GROUP BY municipio ORDER BY 1", "<tr><td>MUNICIPIO</td><td>MARA 18 R</td><td>MARA 18 R R</td><td>MARA 18 R S</td><td>MAO MAO</td><td>MD</td><td>MIRADA LOCA</td><td>MS13</td><td>NINGUNO</td></tr>").getLinea($max);
  $data .= getPersonasPrivadasLibertadPorSQL($wpdb, "SELECT rango_edad AS a, COUNT(IF(sexo = 'MASCULINO',1,NULL)) b, COUNT(IF(sexo = 'FEMENINO',1,NULL)) c, '' d, '' e, '' f, '' g, '' h, '' i FROM ind_bnc_dgcp WHERE anyo = $anyo AND $filtro GROUP BY rango_edad ORDER BY 1", "<tr><td>Segun rango etareo</td><td>MASCULINO</td><td>FEMENINO</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>").getLinea($max);
  $data .= getPersonasPrivadasLibertadPorSQL($wpdb, "SELECT sector_policial AS a, COUNT(IF(organizacion_delictiva = 'MARA 18',1,NULL)) b, COUNT(IF(organizacion_delictiva = 'MARA 18 R',1,NULL)) c, COUNT(IF(organizacion_delictiva = 'MARA 18 S',1,NULL)) d, COUNT(IF(organizacion_delictiva = 'MAO MAO',1,NULL)) e, COUNT(IF(organizacion_delictiva = 'MD',1,NULL)) f, COUNT(IF(organizacion_delictiva = 'MIRADA LOCA',1,NULL)) g, COUNT(IF(organizacion_delictiva = 'MS13',1,NULL)) h, COUNT(IF(organizacion_delictiva = 'NINGUNO',1,NULL)) i FROM ind_bnc_dgcp WHERE anyo = $anyo AND $filtro GROUP BY sector_policial ORDER BY 1", "<tr><td>SECTOR POLICIAL</td><td>MARA 18 R</td><td>MARA 18 R R</td><td>MARA 18 R S</td><td>MAO MAO</td><td>MD</td><td>MIRADA LOCA</td><td>MS13</td><td>NINGUNO</td></tr>").getLinea($max);
  $data .= getPersonasPrivadasLibertadPorSQL($wpdb, "SELECT rango_edad AS a, COUNT(IF(nivel_educativo = 'ANALFABETA',1,NULL)) b, COUNT(IF(nivel_educativo = 'BACHILLERATO',1,NULL)) c, COUNT(IF(nivel_educativo = 'PRIMARIA',1,NULL)) d, COUNT(IF(nivel_educativo = 'SECUNDARIA',1,NULL)) e, COUNT(IF(nivel_educativo = 'SIN ESPECIFICAR',1,NULL)) f, COUNT(IF(nivel_educativo = 'TECNICOS',1,NULL)) g, COUNT(IF(nivel_educativo = 'UNIVERSITARIA',1,NULL)) h, '' i FROM ind_bnc_dgcp WHERE anyo = $anyo AND $filtro AND sexo = 'MASCULINO' GROUP BY rango_edad ORDER BY 1", "<tr><td>RANGO DE EDADES [MASCULINO]</td><td>ANALFABETA</td><td>BACHILLERATO</td><td>PRIMARIA</td><td>SECUNDARIA</td><td>SIN ESPECIFICAR</td><td>TECNICOS</td><td>UNIVERSITARIA</td><td></td></tr>").getLinea($max);
  $data .= getPersonasPrivadasLibertadPorSQL($wpdb, "SELECT rango_edad AS a, COUNT(IF(nivel_educativo = 'ANALFABETA',1,NULL)) b, COUNT(IF(nivel_educativo = 'BACHILLERATO',1,NULL)) c, COUNT(IF(nivel_educativo = 'PRIMARIA',1,NULL)) d, COUNT(IF(nivel_educativo = 'SECUNDARIA',1,NULL)) e, COUNT(IF(nivel_educativo = 'SIN ESPECIFICAR',1,NULL)) f, COUNT(IF(nivel_educativo = 'TECNICOS',1,NULL)) g, COUNT(IF(nivel_educativo = 'UNIVERSITARIA',1,NULL)) h, '' i FROM ind_bnc_dgcp WHERE anyo = $anyo AND $filtro AND sexo = 'FEMENINO' GROUP BY rango_edad ORDER BY 1", "<tr><td>RANGO DE EDADES [FEMENINO]</td><td>ANALFABETA</td><td>BACHILLERATO</td><td>PRIMARIA</td><td>SECUNDARIA</td><td>SIN ESPECIFICAR</td><td>TECNICOS</td><td>UNIVERSITARIA</td><td></td></tr>").getLinea($max);
  $data .= getPersonasPrivadasLibertadPorSQL($wpdb, "SELECT rango_edad AS a, COUNT(IF(nivel_educativo = 'ANALFABETA',1,NULL)) b, COUNT(IF(nivel_educativo = 'BACHILLERATO',1,NULL)) c, COUNT(IF(nivel_educativo = 'PRIMARIA',1,NULL)) d, COUNT(IF(nivel_educativo = 'SECUNDARIA',1,NULL)) e, COUNT(IF(nivel_educativo = 'SIN ESPECIFICAR',1,NULL)) f, COUNT(IF(nivel_educativo = 'TECNICOS',1,NULL)) g, COUNT(IF(nivel_educativo = 'UNIVERSITARIA',1,NULL)) h, '' i FROM ind_bnc_dgcp WHERE anyo = $anyo AND $filtro GROUP BY rango_edad ORDER BY 1", "<tr><td>RANGO DE EDADES [AMBOS SEXOS]</td><td>ANALFABETA</td><td>BACHILLERATO</td><td>PRIMARIA</td><td>SECUNDARIA</td><td>SIN ESPECIFICAR</td><td>TECNICOS</td><td>UNIVERSITARIA</td><td></td></tr>").getLinea($max);
  $data .= getPersonasPrivadasLibertadPorSQL($wpdb, "SELECT rango_edad AS a, COUNT(IF(estado_civil = 'ACOMPAÑADO(A)',1,NULL)) b, COUNT(IF(estado_civil = 'CASADO(A)',1,NULL)) c, COUNT(IF(estado_civil = 'DIVORCIADO(A)',1,NULL)) d, COUNT(IF(estado_civil = 'SIN ESPECIFICAR',1,NULL)) e, COUNT(IF(estado_civil = 'SOLTERO(A)',1,NULL)) f, COUNT(IF(estado_civil = 'VIUDO(A)',1,NULL)) g, '' h, '' i FROM ind_bnc_dgcp WHERE anyo = $anyo AND $filtro AND sexo = 'MASCULINO' GROUP BY rango_edad ORDER BY 1", "<tr><td>SEGUN ESTADO CIVIL [MASCULINO]</td><td>ACOMPAÑADO(A)</td><td>CASADO(A)</td><td>DIVORCIADO(A)</td><td>SIN ESPECIFICAR</td><td>SOLTERO(A)</td><td>VIUDO(A)</td><td></td><td></td></tr>").getLinea($max);
  $data .= getPersonasPrivadasLibertadPorSQL($wpdb, "SELECT rango_edad AS a, COUNT(IF(estado_civil = 'ACOMPAÑADO(A)',1,NULL)) b, COUNT(IF(estado_civil = 'CASADO(A)',1,NULL)) c, COUNT(IF(estado_civil = 'DIVORCIADO(A)',1,NULL)) d, COUNT(IF(estado_civil = 'SIN ESPECIFICAR',1,NULL)) e, COUNT(IF(estado_civil = 'SOLTERO(A)',1,NULL)) f, COUNT(IF(estado_civil = 'VIUDO(A)',1,NULL)) g, '' h, '' i FROM ind_bnc_dgcp WHERE anyo = $anyo AND $filtro AND sexo = 'FEMENINO' GROUP BY rango_edad ORDER BY 1", "<tr><td>SEGUN ESTADO CIVIL [FEMENINO]</td><td>ACOMPAÑADO(A)</td><td>CASADO(A)</td><td>DIVORCIADO(A)</td><td>SIN ESPECIFICAR</td><td>SOLTERO(A)</td><td>VIUDO(A)</td><td></td><td></td></tr>").getLinea($max);
  $data .= getPersonasPrivadasLibertadPorSQL($wpdb, "SELECT rango_edad AS a, COUNT(IF(delito = 'AGRUPACIONES ILICITAS',1,NULL)) b, COUNT(IF(delito = 'EXTORSION',1,NULL)) c, COUNT(IF(delito = 'FEMINICIDIO',1,NULL)) d, COUNT(IF(delito = 'HOMICIDIO',1,NULL)) e, COUNT(IF(delito = 'ROBO',1,NULL)) f, COUNT(IF(delito = 'OTROS DELITOS',1,NULL)) g, COUNT(IF(delito = 'TRAFICO O TRATA DE PERSONAS',1,NULL)) h, COUNT(*) i FROM ind_bnc_dgcp WHERE anyo = $anyo AND $filtro AND sexo = 'MASCULINO' GROUP BY rango_edad ORDER BY 1", "<tr><td>SEGUN DELITO [MASCULINO]</td><td>AGRUPACIONES ILICITAS</td><td>EXTORSION</td><td>FEMINICIDIO</td><td>HOMICIDIO</td><td>ROBO</td><td>OTROS DELITOS</td><td>TRAFICO O TRATA DE PERSONAS</td><td>TODOS</td></tr>").getLinea($max);
  $data .= getPersonasPrivadasLibertadPorSQL($wpdb, "SELECT rango_edad AS a, COUNT(IF(delito = 'AGRUPACIONES ILICITAS',1,NULL)) b, COUNT(IF(delito = 'EXTORSION',1,NULL)) c, COUNT(IF(delito = 'FEMINICIDIO',1,NULL)) d, COUNT(IF(delito = 'HOMICIDIO',1,NULL)) e, COUNT(IF(delito = 'ROBO',1,NULL)) f, COUNT(IF(delito = 'OTROS DELITOS',1,NULL)) g, COUNT(IF(delito = 'TRAFICO O TRATA DE PERSONAS',1,NULL)) h, COUNT(*) i FROM ind_bnc_dgcp WHERE anyo = $anyo AND $filtro AND sexo = 'FEMENINO' GROUP BY rango_edad ORDER BY 1", "<tr><td>SEGUN DELITO [FEMENINO]</td><td>AGRUPACIONES ILICITAS</td><td>EXTORSION</td><td>FEMINICIDIO</td><td>HOMICIDIO</td><td>ROBO</td><td>OTROS DELITOS</td><td>TRAFICO O TRATA DE PERSONAS</td><td>TODOS</td></tr>").getLinea($max);
  $table .= getTableX($head, $data, uniqid());
  return $table;
}

function getTableX($head, $data, $idx){
  $t = '<table class="compact display" id="'.$idx.'"><thead>'.$head.'</thead><tbody>';
  $t .= $data;
  $t .='</tbody></table><script type="text/javascript">';
  $t .="(function($){ $('#".$idx."').DataTable({ ordering: false, pageLength: 20, language: {url: '//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json'}, dom: 'Bfrtip',buttons: ['copyHtml5','excelHtml5','csvHtml5','pdfHtml5'] } ); }(jQuery));
  </script>";
  return $t;
}
/* ############################# Generadores de cruces */
function getRetornadosPorSQL($wpdb, $sql, $titulo){
 $data = "";
 $query = $wpdb->get_results( $sql);
 foreach ($query as $key => $ob) {
   $data .= "<tr><td>$ob->u</td><td>$ob->d</td><td>$ob->t</td><td>$ob->c</td></tr>";
  }
 return "$titulo $data";
}

function getPersonasPrivadasLibertadPorSQL($wpdb, $sql, $titulo){
 $data = "";
 $query = $wpdb->get_results( $sql);
 foreach ($query as $key => $o) {
   $data .= "<tr><td>$o->a</td><td>$o->b</td><td>$o->c</td><td>$o->d</td>";
   $data .= "<td>$o->e</td><td>$o->f</td><td>$o->g</td><td>$o->h</td><td>$o->i</td></tr>";
  }
 return "$titulo $data";
}

 function getDelitosPorSQL($wpdb, $sql, $titulo){
  $data = "";
  $query = $wpdb->get_results( $sql);
  foreach ($query as $key => $o) {
   $data .= "<tr><td>$o->a</td><td>$o->b</td><td>$o->c</td><td>$o->d</td>";
   $data .= "<td>$o->e</td><td>$o->f</td><td>$o->g</td><td>$o->h</td>";
   $data .= "<td>$o->i</td><td>$o->j</td><td>$o->k</td><td>$o->l</td><td>$o->m</td><td>$o->n</td></tr>";
  }
  return "$titulo $data";
 }

 function getLinea($max){
   $tr = '<tr>';
   if ($max > 0){
     for ($i = 1; $i <= $max; $i++) {
       $tr .= "<td></td>";
     }
   }
   return "$tr</tr>";
 }
