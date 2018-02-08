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
  return "$table";
}

function getEstadisticaRetornados($wpdb, $anyo, $vars){
  $table = '';
  //$head = '<tr><th>Cruce</th><th colspan="4">Variables</th></tr>';
  $head = '<tr><th>Cruce</th><th>.</th><th>.</th><th>.</th><th>.</th></tr>';
  $data = getRetornadosPorMunicipioSexo($wpdb, $anyo, $vars);
  $table .= getTableX($head, $data, uniqid());
  return $table;
}

function getEstadisticaPrivadosLibertad($wpdb, $anyo, $vars){
  $table = '';
  $head = '<th>Municipios</th><th>B18</th><th>B18R</th><th>B18S</th><th>MAO MAO</th><th>MD</th><th>ML</th><th>MS13</th><th>NINGUNO</th>';
  $table .= getTableX($head, '', uniqid());
  $head = '<th>Municipio</th><th>Masculino</th><th>Femenino</th>';
  $table .= getTableX($head, '', uniqid());
  $head = '<th>Sector policial</th><th>B18</th><th>B18R</th><th>B18S</th><th>MAO MAO</th><th>MD</th><th>ML</th><th>MS13</th><th>NINGUNO</th>';
  $table .= getTableX($head, '', uniqid());//Femenino
  $head = '<th>Rango de edades</th><th>ANALFABETA</th><th>BACHILLERATO</th><th>PRIMARIA</th><th>SECUNDARIA</th><th>TÉCNICO</th><th>UNIVERSIDAD</th>';
  $table .= getTableX($head, '', uniqid());//Masculino
  $head = '<th>Rango de edades</th><th>ANALFABETA</th><th>BACHILLERATO</th><th>PRIMARIA</th><th>SECUNDARIA</th><th>TÉCNICO</th><th>UNIVERSIDAD</th>';
  $table .= getTableX($head, '', uniqid());//Femenino
  $head = '<th>Rango de edades</th><th>ACOMPAÑADO(A)</th><th>CASADO(A)</th><th>DIVORCIADO(A)</th><th>SIN ESPECIFICAR</th><th>SOLTERO(A)</th><th>VIUDO(A)</th>';
  $table .= getTableX($head, '', uniqid());//Masculino
  $head = '<th>Rango de edades</th><th>ACOMPAÑADO(A)</th><th>CASADO(A)</th><th>DIVORCIADO(A)</th><th>SIN ESPECIFICAR</th><th>SOLTERO(A)</th><th>VIUDO(A)</th>';
  $table .= getTableX($head, '', uniqid());//Femenino
  $head = '<th>Rango de edades</th><th>Agrupaciones ilicitas</th><th>Extorsión</th><th>Robo</th><th>Homicidio</th><th>Feminicidio</th><th>Otros Delitos</th>';
  $table .= getTableX($head, '', uniqid());//Masculino
  $head = '<th>Rango de edades</th><th>Agrupaciones ilicitas</th><th>Extorsión</th><th>Robo</th><th>Homicidio</th><th>Feminicidio</th><th>Otros Delitos</th>';
  $table .= getTableX($head, '', uniqid());
  $head = '<th>Rango de edades</th><th>Agrupaciones ilicitas</th><th>Extorsión</th><th>Robo</th><th>Homicidio</th><th>Feminicidio</th><th>Otros Delitos</th>';
  $table .= getTableX($head, '', uniqid());
  $head = '<th>Rango de edades</th><th>Agrupaciones ilicitas</th><th>Extorsión</th><th>Robo</th><th>Homicidio</th><th>Feminicidio</th><th>Otros Delitos</th>';
  $table .= getTableX($head, '', uniqid());
  $head = '<th>Rango de edades</th><th>Agrupaciones ilicitas</th><th>Extorsión</th><th>Robo</th><th>Homicidio</th><th>Feminicidio</th><th>Otros Delitos</th>';
  $table .= getTableX($head, '', uniqid());
  return $table;
  /*select rango_edad, IF(delito = 'EXTORSION', COUNT(*) ,'0') AS E,  IF(delito = 'ROBO', COUNT(*) ,'0') AS R,  IF(delito = 'HOMICIDIO', COUNT(*) ,'0') AS H,  IF(delito = 'FEMINICIDIO', COUNT(*) ,'0') AS F,  IF(delito = 'OTROS DELITOS', COUNT(*) ,'0') AS O
from ind_bnc_dgcp group by rango_edad;*/
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
 function getRetornadosPorMunicipioSexo($wpdb, $anyo, $vars){
   $data = "";
   $sql = "select 'Retornados por sexo' AS u, IF(sexo = 'MASCULINO', COUNT(*) ,'0') AS d, IF(sexo = 'FEMENINO', COUNT(*) ,'0') AS t, IF(sexo = 'ND', COUNT(*) ,'0') AS c, '' AS i from ind_bnc_retornado where anyo = $anyo and municipio = '$vars' group by municipio";
   $query = $wpdb->get_results( $sql);
   foreach ($query as $key => $ob) {
     $data = "<tr><td>$ob->u</td><td>$ob->d</td><td>$ob->t</td><td>$ob->c</td><td>$ob->i</td></tr>";
 	 }
   return $data;
 }
