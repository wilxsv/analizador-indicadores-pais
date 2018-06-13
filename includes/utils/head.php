<style>
	@import url('//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
.isa_info, .isa_success, .isa_warning, .isa_error {
margin: 0px 0px;
padding:0px;

}
.isa_info {
    color: #00529B;
    background-color: #BDE5F8;
}
.isa_success {
    color: #4F8A10;
    background-color: #DFF2BF;
}
.isa_warning {
    color: #9F6000;
    background-color: #FEEFB3;
}
.isa_error {
    color: #D8000C;
    background-color: #FFD2D2;
}
.isa_info i, .isa_success i, .isa_warning i, .isa_error i {
    margin:10px 22px;
    font-size:2em;
    vertical-align:middle;
}
</style>
<link rel="stylesheet" href="<?php echo get_plugin_url(); ?>public/js/dropify/css/dropify.min.css"  type="text/css" />
<script src="<?php echo get_plugin_url(); ?>public/plugins/bower_components/jquery/dist/jquery.min.js"></script>

<?php
 function getFormSelectDepartamento( $wpdb, $name ){
	$deptos=$wpdb->get_results( "SELECT departamento FROM ind_municipio group by departamento order by departamento" );
	$form = "";
  foreach ($deptos as $l) {
    $form.= "<option value=\"$l->departamento\">$l->departamento</option>";
  }
	return '<select name="'.$name.'" id="'.$name.'" style="width:90%;"><option value="0" selected > Seleccione el departamento</option>'.$form.'</select>';
 }

 function getFormSelectMunicipio( $wpdb, $name ){
	 //$municipios=$wpdb->get_results("SELECT m.id AS id, departamento, municipio FROM `ind_focalizacion` group by departamento, municipio order by departamento, municipio");
	 $municipios=$wpdb->get_results( "SELECT m.id AS id, d.nombre_departamento AS departamento, m.nombre_municipio AS municipio FROM ind_ctl_departamento AS d INNER JOIN ind_ctl_municipio AS m ON d.id = m.ctl_departamento_id group by d.nombre_departamento, m.nombre_municipio" );
	 $dep = NULL;
	 $categoria="";
	 foreach ($municipios as $l) {
	     if ($dep == NULL){
	       $categoria.= "<optgroup label=\"$l->departamento\">";
	       $categoria.= "<option value=\"$l->id\">".ucfirst(strtolower($l->municipio))."</option>";
	     } elseif ($dep != $l->departamento) {
	       $categoria.= "<optgroup>";
	       $categoria.= "<optgroup label=\"$l->departamento\">";
	       $categoria.= "<option value=\"$l->id\">".ucfirst(strtolower($l->municipio))."</option>";
	     }else {
	       $categoria.= "<option value=\"$l->id\">".ucfirst(strtolower($l->municipio))."</option>";
	     }
	     $dep = $l->departamento;
	 }
	 return '<select name="'.$name.'" id="'.$name.'" style="width:90%;"><option value="0" selected > Seleccione el municipio</option>'.$categoria.'</select>';
 }
?>
