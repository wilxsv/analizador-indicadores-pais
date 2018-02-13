<?php
/**
 * Plugin Name: indicadores-pais-El-Salvador-seguro
 * Plugin URI: http://wordpress.org/plugins/
 * Description: Administración de banco de datos del Sistema Integrado de Estadisticas (SIE), El SIE tiene como objetivo proporcionar información a las autoridades del MJSP para la definición de prioridades, diseño de estrategias, seguimiento a los resultados e impactos de la política del sector y la rendición de cuentas a la ciudadanía.
 * Author: PNUD - El Salvador
 * Version: 0.9
 * Author URI: http://pnud.org.sv/
*/

function getEstadisticaDelito($wpdb, $anyo, $vars){
  $table = '';
  $head = '<th>DELITOS</th><th>Frecuencia</th>';
  $table .= getTableX($head, '', uniqid());
  $head = '<th>DELITOS - SECTOR</th><th>Frecuencia</th>';
  $table .= getTableX($head, '', uniqid());
  $head = '<th>DELITOS</th><th>Rural</th><th>Urbano</th>';
  $table .= getTableX($head, '', uniqid());
  $head = '<th>DELITOS</th><th>BALDIO</th><th>CAMPO</th><th>CALLE</th><th>CAFETALES</th><th>BOSQUE</th><th>BASURERO</th><th>BARTOLINAS PNC</th>';
  $table .= getTableX($head, '', uniqid());
  $head = '<th>DELITOS</th><th>Enero</th><th>Febrero</th><th>Marzo</th><th>Abril</th><th>Mayo</th><th>Junio</th><th>Agosto</th><th>Septiembre</th><th>Octubre</th><th>Noviembre</th><th>Diciembre</th>';
  $table .= getTableX($head, '', uniqid());
  $head = '<th>DELITOS</th><th>D</th><th>L</th><th>M</th><th>M</th><th>J</th><th>V</th><th>S</th>';
  $table .= getTableX($head, '', uniqid());
  $head = '<th>Rango etario victima</th><th>H</th><th>M</th>';
  $table .= getTableX($head, '', uniqid());
  $head = '<th>Rango hora</th><th>Agrupaciones ilicitas</th><th>Extorsión</th><th>Robo</th><th>Homicidio</th><th>Feminicidio</th><th>Otros Delitos</th>';
  $table .= getTableX($head, '', uniqid());
  $head = '<th>DELITOS</th><th>ABOGADA</th><th>AGRICULTOR</th><th>ALBAÑIL</th><th>AMA DE CASA</th><th>CAM</th><th>CARPINTERO</th><th>COBRADOR</th><th>COMERCIANTE</th>';
  $table .= getTableX($head, '', uniqid());
  $head = '<th>DELITOS</th><th>AMIGOS</th><th>COMPAÑERO DE VIDA</th><th>CONOCIDOS</th><th>CUÑADO(A)</th><th>DESCONOCIDA</th><th>ESPOSO(A)</th><th>EX COMPAÑERO DE VIDA</th>';
  $table .= getTableX($head, '', uniqid());
  $head = '<th>DELITOS</th><th>ARMA BLANCA</th><th>ARMA DE FUEGO</th><th>CONTUNDENTE</th><th>FUERZA FISICA</th><th>LLAMADA - MENSAJES</th><th>ND</th><th>OTRAS</th>';
  $table .= getTableX($head, '', uniqid());
  $head = '<th>Sector policial</th><th>ARMA BLANCA</th><th>ARMA DE FUEGO</th><th>CONTUNDENTE</th><th>FUERZA FISICA</th><th>LLAMADA - MENSAJES</th><th>ND</th><th>OTRAS</th>';
  $table .= getTableX($head, '', uniqid());
  return $table;
}

function getEstadisticaTransito($wpdb, $anyo, $vars){
  $max = 4;
  $table = '';
  $data .= getRetornadosPorSQL($wpdb, "SELECT municipio AS u, COUNT(IF(resultado = 'FALLECIDO',1,NULL)) d, COUNT(IF(resultado = 'LESIONADO',1,NULL)) t, COUNT(*) c FROM ind_bnc_accidente_transito WHERE anyo = $anyo AND municipio = '$vars' GROUP BY municipio ORDER BY 1", "<tr><td>Resultado de accidentes por rango de municipio</td><td>FALLECIDO</td><td>LESIONADO</td><td>TOTAL</td></tr>").getLinea($max);
  $data .= getRetornadosPorSQL($wpdb, "SELECT edad_rango AS u, COUNT(IF(resultado = 'FALLECIDO',1,NULL)) d, COUNT(IF(resultado = 'LESIONADO',1,NULL)) t, COUNT(*) c FROM ind_bnc_accidente_transito WHERE anyo = $anyo AND municipio = '$vars' GROUP BY edad_rango ORDER BY 1", "<tr><td>Resultado de accidentes por rango de edades</td><td>FALLECIDO</td><td>LESIONADO</td><td>TOTAL</td></tr>").getLinea($max);
  $data .= getRetornadosPorSQL($wpdb, "SELECT calidad AS u, COUNT(IF(resultado = 'FALLECIDO',1,NULL)) d, COUNT(IF(resultado = 'LESIONADO',1,NULL)) t, COUNT(*) c FROM ind_bnc_accidente_transito WHERE anyo = $anyo AND municipio = '$vars' GROUP BY calidad ORDER BY 1", "<tr><td>Resultado de accidentes por calidad</td><td>FALLECIDO</td><td>LESIONADO</td><td>TOTAL</td></tr>").getLinea($max);
  $data .= getRetornadosPorSQL($wpdb, "SELECT tipo_accidente AS u, COUNT(IF(resultado = 'FALLECIDO',1,NULL)) d, COUNT(IF(resultado = 'LESIONADO',1,NULL)) t, COUNT(*) c FROM ind_bnc_accidente_transito WHERE anyo = $anyo AND municipio = '$vars' GROUP BY tipo_accidente ORDER BY 1", "<tr><td>Resultado de accidentes por tipo de accidente</td><td>FALLECIDO</td><td>LESIONADO</td><td>TOTAL</td></tr>").getLinea($max);
  $data .= getRetornadosPorSQL($wpdb, "SELECT causa AS u, COUNT(IF(resultado = 'FALLECIDO',1,NULL)) d, COUNT(IF(resultado = 'LESIONADO',1,NULL)) t, COUNT(*) c FROM ind_bnc_accidente_transito WHERE anyo = $anyo AND municipio = '$vars' GROUP BY causa ORDER BY 1", "<tr><td>Resultado de accidentes por rango de causa</td><td>FALLECIDO</td><td>LESIONADO</td><td>TOTAL</td></tr>").getLinea($max);
  $data .= getRetornadosPorSQL($wpdb, "SELECT vehiculo AS u, COUNT(IF(resultado = 'FALLECIDO',1,NULL)) d, COUNT(IF(resultado = 'LESIONADO',1,NULL)) t, COUNT(*) c FROM ind_bnc_accidente_transito WHERE anyo = $anyo AND municipio = '$vars' GROUP BY vehiculo ORDER BY 1", "<tr><td>Resultado de accidentes por clase de vehiculo</td><td>FALLECIDO</td><td>LESIONADO</td><td>TOTAL</td></tr>").getLinea($max);
  $data .= getRetornadosPorSQL($wpdb, "SELECT mes AS u, COUNT(IF(resultado = 'FALLECIDO',1,NULL)) d, COUNT(IF(resultado = 'LESIONADO',1,NULL)) t, COUNT(*) c FROM ind_bnc_accidente_transito WHERE anyo = $anyo AND municipio = '$vars' GROUP BY mes ORDER BY 1", "<tr><td>Resultado de accidentes por meses</td><td>FALLECIDO</td><td>LESIONADO</td><td>TOTAL</td></tr>").getLinea($max);
  $data .= getRetornadosPorSQL($wpdb, "SELECT dia AS u, COUNT(IF(resultado = 'FALLECIDO',1,NULL)) d, COUNT(IF(resultado = 'LESIONADO',1,NULL)) t, COUNT(*) c FROM ind_bnc_accidente_transito WHERE anyo = $anyo AND municipio = '$vars' GROUP BY dia ORDER BY 1", "<tr><td>Resultado de accidentes por dias</td><td>FALLECIDO</td><td>LESIONADO</td><td>TOTAL</td></tr>").getLinea($max);
  $data .= getRetornadosPorSQL($wpdb, "SELECT hora_rango AS u, COUNT(IF(resultado = 'FALLECIDO',1,NULL)) d, COUNT(IF(resultado = 'LESIONADO',1,NULL)) t, COUNT(*) c FROM ind_bnc_accidente_transito WHERE anyo = $anyo AND municipio = '$vars' GROUP BY hora_rango ORDER BY 1", "<tr><td>Resultado de accidentes por rango de hora</td><td>FALLECIDO</td><td>LESIONADO</td><td>TOTAL</td></tr>").getLinea($max);
  $data .= getRetornadosPorSQL($wpdb, "SELECT resultado AS u, COUNT(IF(resultado = 'FALLECIDO',1,NULL)) d, COUNT(IF(resultado = 'LESIONADO',1,NULL)) t, COUNT(*) c FROM ind_bnc_accidente_transito WHERE anyo = $anyo AND municipio = '$vars' GROUP BY resultado ORDER BY 1", "<tr><td>Dirección</td><td>FALLECIDO</td><td>LESIONADO</td><td>TOTAL</td></tr>").getLinea($max);
  $head = '<tr><th>Cruce</th><th>.</th><th>.</th><th>.</th></tr>';
  $table .= getTableX($head, $data, uniqid());
  return $table;
}

function getEstadisticaRetornados($wpdb, $anyo, $vars){
  $max = 4;
  $table = '';
  $head = '<tr><th>Cruce</th><th>.</th><th>.</th><th>.</th></tr>';
  $data .= getRetornadosPorSQL($wpdb, "SELECT 'Retornados por sexo en $vars' AS u, COUNT(IF(sexo = 'MASCULINO',1,NULL)) d, COUNT(IF(sexo = 'FEMENINO',1,NULL)) t, COUNT(IF(sexo = 'ND',1,NULL)) c FROM ind_bnc_retornado WHERE anyo = $anyo AND municipio = '$vars' GROUP BY municipio ORDER BY 1", "<tr><td>Municipio</td><td>MASCULINO</td><td>FEMENINO</td><td>ND</td></tr>").getLinea($max);
  $data .= getRetornadosPorSQL($wpdb, "SELECT pais_repatriacion AS u, COUNT(*) AS d, '' AS t, '' AS c FROM ind_bnc_retornado WHERE anyo = $anyo AND municipio = '$vars' GROUP BY pais_repatriacion ORDER BY 1", "<tr><td>Pais de Repatriación</td><td>Frecuencia</td><td></td><td></td></tr>").getLinea($max);
  $data .= getRetornadosPorSQL($wpdb, "SELECT mes AS u, COUNT(*) AS d, '' AS t, '' AS c FROM ind_bnc_retornado WHERE anyo = $anyo AND municipio = '$vars' GROUP BY mes ORDER BY 1", "<tr><td>Retornados a $vars por mes</td><td>Frecuencia</td><td></td><td></td></tr>").getLinea($max);
  $data .= getRetornadosPorSQL($wpdb, "SELECT consulado AS u, COUNT(*) AS d, '' AS t, '' AS c FROM ind_bnc_retornado WHERE anyo = $anyo AND municipio = '$vars' GROUP BY consulado ORDER BY 1", "<tr><td>Retornados a $vars por consulado</td><td>Frecuencia</td><td></td><td></td><td></td></tr>").getLinea($max);
  $data .= getRetornadosPorSQL($wpdb, "SELECT estado_civil AS u, COUNT(IF(sexo = 'MASCULINO',1,NULL)) d, COUNT(IF(sexo = 'FEMENINO',1,NULL)) t, COUNT(IF(sexo = 'ND',1,NULL)) c FROM ind_bnc_retornado WHERE anyo = $anyo AND municipio = '$vars' GROUP BY estado_civil ORDER BY 1", "<tr><td>'Retornados por estado civil en $vars'</td><td>MASCULINO</td><td>FEMENINO</td><td>ND</td></tr>").getLinea($max);
  $data .= getRetornadosPorSQL($wpdb, "SELECT persona_dependiente AS u, COUNT(IF(sexo = 'MASCULINO',1,NULL)) d, COUNT(IF(sexo = 'FEMENINO',1,NULL)) t, COUNT(IF(sexo = 'ND',1,NULL)) c FROM ind_bnc_retornado WHERE anyo = $anyo AND municipio = '$vars' GROUP BY persona_dependiente ORDER BY 1", "<tr><td>'Retornados por personas dependientes en $vars'</td><td>MASCULINO</td><td>FEMENINO</td><td>ND</td></tr>").getLinea($max);
  $data .= getRetornadosPorSQL($wpdb, "SELECT motivo AS u, COUNT(IF(sexo = 'MASCULINO',1,NULL)) d, COUNT(IF(sexo = 'FEMENINO',1,NULL)) t, COUNT(IF(sexo = 'ND',1,NULL)) c FROM ind_bnc_retornado WHERE anyo = $anyo AND municipio = '$vars' GROUP BY motivo ORDER BY 1", "<tr><td>'Retornados por motivo de migración en $vars'</td><td>MASCULINO</td><td>FEMENINO</td><td>ND</td></tr>").getLinea($max);
  $data .= getRetornadosPorSQL($wpdb, "SELECT nivel_educativo AS u, COUNT(IF(sexo = 'MASCULINO',1,NULL)) d, COUNT(IF(sexo = 'FEMENINO',1,NULL)) t, COUNT(IF(sexo = 'ND',1,NULL)) c FROM ind_bnc_retornado WHERE anyo = $anyo AND municipio = '$vars' GROUP BY nivel_educativo ORDER BY 1", "<tr><td>'Retornados segun nivel nivel_educativo en $vars'</td><td>MASCULINO</td><td>FEMENINO</td><td>ND</td></tr>").getLinea($max);
  $data .= getRetornadosPorSQL($wpdb, "SELECT antecedentes_penales AS u, COUNT(IF(sexo = 'MASCULINO',1,NULL)) d, COUNT(IF(sexo = 'FEMENINO',1,NULL)) t, COUNT(IF(sexo = 'ND',1,NULL)) c FROM ind_bnc_retornado WHERE anyo = $anyo AND municipio = '$vars' GROUP BY antecedentes_penales ORDER BY 1", "<tr><td>'Retornados segun antecedentes penales'</td><td>MASCULINO</td><td>FEMENINO</td><td>ND</td></tr>").getLinea($max);
  $data .= getRetornadosPorSQL($wpdb, "SELECT tiempo_fuera AS u, COUNT(IF(sexo = 'MASCULINO',1,NULL)) d, COUNT(IF(sexo = 'FEMENINO',1,NULL)) t, COUNT(IF(sexo = 'ND',1,NULL)) c FROM ind_bnc_retornado WHERE anyo = $anyo AND municipio = '$vars' GROUP BY tiempo_fuera ORDER BY 1", "<tr><td>'Tiempo de residir fuera de ES'</td><td>MASCULINO</td><td>FEMENINO</td><td>ND</td></tr>").getLinea($max);
  $data .= getRetornadosPorSQL($wpdb, "SELECT espectativa_migrante AS u, COUNT(IF(sexo = 'MASCULINO',1,NULL)) d, COUNT(IF(sexo = 'FEMENINO',1,NULL)) t, COUNT(IF(sexo = 'ND',1,NULL)) c FROM ind_bnc_retornado WHERE anyo = $anyo AND municipio = '$vars' GROUP BY espectativa_migrante ORDER BY 1", "<tr><td>'Retornados segun espectativas de vida en $vars'</td><td>MASCULINO</td><td>FEMENINO</td><td>ND</td></tr>").getLinea($max);
  $table .= getTableX($head, $data, uniqid());
  return $table;
}

function getEstadisticaPrivadosLibertad($wpdb, $anyo, $vars){
  $max = 9;
  $table = '';
  $head = '<tr><th>Cruce</th><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th></tr>';
  $data .= getPersonasPrivadasLibertadPorSQL($wpdb, "SELECT municipio AS a, COUNT(IF(organizacion_delictiva = 'MARA 18',1,NULL)) b, COUNT(IF(organizacion_delictiva = 'MARA 18 R',1,NULL)) c, COUNT(IF(organizacion_delictiva = 'MARA 18 S',1,NULL)) d, COUNT(IF(organizacion_delictiva = 'MAO MAO',1,NULL)) e, COUNT(IF(organizacion_delictiva = 'MD',1,NULL)) f, COUNT(IF(organizacion_delictiva = 'MIRADA LOCA',1,NULL)) g, COUNT(IF(organizacion_delictiva = 'MS13',1,NULL)) h, COUNT(IF(organizacion_delictiva = 'NINGUNO',1,NULL)) i FROM ind_bnc_dgcp WHERE anyo = $anyo AND municipio = '$vars' GROUP BY municipio ORDER BY 1", "<tr><td>MUNICIPIO</td><td>BR18</td><td>BR18 R</td><td>BR18 S</td><td>MAO MAO</td><td>MD</td><td>MIRADA LOCA</td><td>MS13</td><td>NINGUNO</td></tr>").getLinea($max);
  $data .= getPersonasPrivadasLibertadPorSQL($wpdb, "SELECT municipio AS a, COUNT(IF(sexo = 'MASCULINO',1,NULL)) b, COUNT(IF(sexo = 'FEMENINO',1,NULL)) c, '' d, '' e, '' f, '' g, '' h, '' i FROM ind_bnc_dgcp WHERE anyo = $anyo AND municipio = '$vars' GROUP BY municipio ORDER BY 1", "<tr><td>Segun rango etareo</td><td>MASCULINO</td><td>FEMENINO</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>").getLinea($max);
  $data .= getPersonasPrivadasLibertadPorSQL($wpdb, "SELECT sector_policial AS a, COUNT(IF(organizacion_delictiva = 'MARA 18',1,NULL)) b, COUNT(IF(organizacion_delictiva = 'MARA 18 R',1,NULL)) c, COUNT(IF(organizacion_delictiva = 'MARA 18 S',1,NULL)) d, COUNT(IF(organizacion_delictiva = 'MAO MAO',1,NULL)) e, COUNT(IF(organizacion_delictiva = 'MD',1,NULL)) f, COUNT(IF(organizacion_delictiva = 'MIRADA LOCA',1,NULL)) g, COUNT(IF(organizacion_delictiva = 'MS13',1,NULL)) h, COUNT(IF(organizacion_delictiva = 'NINGUNO',1,NULL)) i FROM ind_bnc_dgcp WHERE anyo = $anyo AND municipio = '$vars' GROUP BY sector_policial ORDER BY 1", "<tr><td>SECTOR POLICIAL</td><td>BR18</td><td>BR18 R</td><td>BR18 S</td><td>MAO MAO</td><td>MD</td><td>MIRADA LOCA</td><td>MS13</td><td>NINGUNO</td></tr>").getLinea($max);
  $data .= getPersonasPrivadasLibertadPorSQL($wpdb, "SELECT rango_edad AS a, COUNT(IF(nivel_educativo = 'ANALFABETA',1,NULL)) b, COUNT(IF(nivel_educativo = 'BACHILLERATO',1,NULL)) c, COUNT(IF(nivel_educativo = 'PRIMARIA',1,NULL)) d, COUNT(IF(nivel_educativo = 'SECUNDARIA',1,NULL)) e, COUNT(IF(nivel_educativo = 'SIN ESPECIFICAR',1,NULL)) f, COUNT(IF(nivel_educativo = 'TECNICOS',1,NULL)) g, COUNT(IF(nivel_educativo = 'UNIVERSITARIA',1,NULL)) h, '' i FROM ind_bnc_dgcp WHERE anyo = $anyo AND municipio = '$vars' AND sexo = 'MASCULINO' GROUP BY rango_edad ORDER BY 1", "<tr><td>RANGO DE EDADES [MASCULINO]</td><td>ANALFABETA</td><td>BACHILLERATO</td><td>PRIMARIA</td><td>SECUNDARIA</td><td>SIN ESPECIFICAR</td><td>TECNICOS</td><td>UNIVERSITARIA</td><td></td></tr>").getLinea($max);
  $data .= getPersonasPrivadasLibertadPorSQL($wpdb, "SELECT rango_edad AS a, COUNT(IF(nivel_educativo = 'ANALFABETA',1,NULL)) b, COUNT(IF(nivel_educativo = 'BACHILLERATO',1,NULL)) c, COUNT(IF(nivel_educativo = 'PRIMARIA',1,NULL)) d, COUNT(IF(nivel_educativo = 'SECUNDARIA',1,NULL)) e, COUNT(IF(nivel_educativo = 'SIN ESPECIFICAR',1,NULL)) f, COUNT(IF(nivel_educativo = 'TECNICOS',1,NULL)) g, COUNT(IF(nivel_educativo = 'UNIVERSITARIA',1,NULL)) h, '' i FROM ind_bnc_dgcp WHERE anyo = $anyo AND municipio = '$vars' AND sexo = 'FEMENINO' GROUP BY rango_edad ORDER BY 1", "<tr><td>RANGO DE EDADES [FEMENINO]</td><td>ANALFABETA</td><td>BACHILLERATO</td><td>PRIMARIA</td><td>SECUNDARIA</td><td>SIN ESPECIFICAR</td><td>TECNICOS</td><td>UNIVERSITARIA</td><td></td></tr>").getLinea($max);
  $data .= getPersonasPrivadasLibertadPorSQL($wpdb, "SELECT rango_edad AS a, COUNT(IF(nivel_educativo = 'ANALFABETA',1,NULL)) b, COUNT(IF(nivel_educativo = 'BACHILLERATO',1,NULL)) c, COUNT(IF(nivel_educativo = 'PRIMARIA',1,NULL)) d, COUNT(IF(nivel_educativo = 'SECUNDARIA',1,NULL)) e, COUNT(IF(nivel_educativo = 'SIN ESPECIFICAR',1,NULL)) f, COUNT(IF(nivel_educativo = 'TECNICOS',1,NULL)) g, COUNT(IF(nivel_educativo = 'UNIVERSITARIA',1,NULL)) h, '' i FROM ind_bnc_dgcp WHERE anyo = $anyo AND municipio = '$vars' GROUP BY rango_edad ORDER BY 1", "<tr><td>RANGO DE EDADES [AMBOS SEXOS]</td><td>ANALFABETA</td><td>BACHILLERATO</td><td>PRIMARIA</td><td>SECUNDARIA</td><td>SIN ESPECIFICAR</td><td>TECNICOS</td><td>UNIVERSITARIA</td><td></td></tr>").getLinea($max);
  $data .= getPersonasPrivadasLibertadPorSQL($wpdb, "SELECT rango_edad AS a, COUNT(IF(estado_civil = 'ACOMPAÑADO(A)',1,NULL)) b, COUNT(IF(estado_civil = 'CASADO(A)',1,NULL)) c, COUNT(IF(estado_civil = 'DIVORCIADO(A)',1,NULL)) d, COUNT(IF(estado_civil = 'SIN ESPECIFICAR',1,NULL)) e, COUNT(IF(estado_civil = 'SOLTERO(A)',1,NULL)) f, COUNT(IF(estado_civil = 'VIUDO(A)',1,NULL)) g, '' h, '' i FROM ind_bnc_dgcp WHERE anyo = $anyo AND municipio = '$vars' AND sexo = 'MASCULINO' GROUP BY rango_edad ORDER BY 1", "<tr><td>SEGUN ESTADO CIVIL [MASCULINO]</td><td>ACOMPAÑADO(A)</td><td>CASADO(A)</td><td>DIVORCIADO(A)</td><td>SIN ESPECIFICAR</td><td>SOLTERO(A)</td><td>VIUDO(A)</td><td></td><td></td></tr>").getLinea($max);
  $data .= getPersonasPrivadasLibertadPorSQL($wpdb, "SELECT rango_edad AS a, COUNT(IF(estado_civil = 'ACOMPAÑADO(A)',1,NULL)) b, COUNT(IF(estado_civil = 'CASADO(A)',1,NULL)) c, COUNT(IF(estado_civil = 'DIVORCIADO(A)',1,NULL)) d, COUNT(IF(estado_civil = 'SIN ESPECIFICAR',1,NULL)) e, COUNT(IF(estado_civil = 'SOLTERO(A)',1,NULL)) f, COUNT(IF(estado_civil = 'VIUDO(A)',1,NULL)) g, '' h, '' i FROM ind_bnc_dgcp WHERE anyo = $anyo AND municipio = '$vars' AND sexo = 'FEMENINO' GROUP BY rango_edad ORDER BY 1", "<tr><td>SEGUN ESTADO CIVIL [FEMENINO]</td><td>ACOMPAÑADO(A)</td><td>CASADO(A)</td><td>DIVORCIADO(A)</td><td>SIN ESPECIFICAR</td><td>SOLTERO(A)</td><td>VIUDO(A)</td><td></td><td></td></tr>").getLinea($max);
  $data .= getPersonasPrivadasLibertadPorSQL($wpdb, "SELECT rango_edad AS a, COUNT(IF(delito = 'AGRUPACIONES ILICITAS',1,NULL)) b, COUNT(IF(delito = 'EXTORSION',1,NULL)) c, COUNT(IF(delito = 'FEMINICIDIO',1,NULL)) d, COUNT(IF(delito = 'HOMICIDIO',1,NULL)) e, COUNT(IF(delito = 'ROBO',1,NULL)) f, COUNT(IF(delito = 'OTROS DELITOS',1,NULL)) g, COUNT(IF(delito = 'TRAFICO O TRATA DE PERSONAS',1,NULL)) h, COUNT(*) i FROM ind_bnc_dgcp WHERE anyo = $anyo AND municipio = '$vars' AND sexo = 'MASCULINO' GROUP BY rango_edad ORDER BY 1", "<tr><td>SEGUN DELITO [MASCULINO]</td><td>AGRUPACIONES ILICITAS</td><td>EXTORSION</td><td>FEMINICIDIO</td><td>HOMICIDIO</td><td>ROBO</td><td>OTROS DELITOS</td><td>TRAFICO O TRATA DE PERSONAS</td><td>TODOS</td></tr>").getLinea($max);
  $data .= getPersonasPrivadasLibertadPorSQL($wpdb, "SELECT rango_edad AS a, COUNT(IF(delito = 'AGRUPACIONES ILICITAS',1,NULL)) b, COUNT(IF(delito = 'EXTORSION',1,NULL)) c, COUNT(IF(delito = 'FEMINICIDIO',1,NULL)) d, COUNT(IF(delito = 'HOMICIDIO',1,NULL)) e, COUNT(IF(delito = 'ROBO',1,NULL)) f, COUNT(IF(delito = 'OTROS DELITOS',1,NULL)) g, COUNT(IF(delito = 'TRAFICO O TRATA DE PERSONAS',1,NULL)) h, COUNT(*) i FROM ind_bnc_dgcp WHERE anyo = $anyo AND municipio = '$vars' AND sexo = 'FEMENINO' GROUP BY rango_edad ORDER BY 1", "<tr><td>SEGUN DELITO [FEMENINO]</td><td>AGRUPACIONES ILICITAS</td><td>EXTORSION</td><td>FEMINICIDIO</td><td>HOMICIDIO</td><td>ROBO</td><td>OTROS DELITOS</td><td>TRAFICO O TRATA DE PERSONAS</td><td>TODOS</td></tr>").getLinea($max);
  $table .= getTableX($head, $data, uniqid());
  return $table;
}

function getTableX($head, $data, $idx){
  $t = '<table class="table table-bordered display" id="'.$idx.'"><thead>'.$head.'</thead><tbody>';
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

 function getLinea($max){
   $tr = '<tr>';
   if ($max > 0){
     for ($i = 1; $i <= $max; $i++) {
       $tr .= "<td></td>";
     }
   }
   return "$tr</tr>";
 }
