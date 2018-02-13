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

<?php
 $labels_municipios = "
var legend = L.control({position: 'bottomright'});
legend.onAdd = function (map) {
	var div = L.DomUtil.create('div', 'info legend'),
		grades = [],
		labels = [],
		from, to;
	labels.push('<i style=\"background:#009FE3\"></i> Inseguridad muy baja (00 &ndash; 18)');
	labels.push('<i style=\"background:#94C11F\"></i> Inseguridad baja     (18 &ndash; 31)');
	labels.push('<i style=\"background:#FCEA12\"></i> Inseguridad media    (31 &ndash; 48)');
	labels.push('<i style=\"background:#F39200\"></i> Inseguridad alta     (48 &ndash; 68)');
	labels.push('<i style=\"background:#E94190\"></i> Inseguridad muy alta (68 &ndash; 100)');
	div.innerHTML = labels.join('<br>');
	return div;
};
legend.addTo(map);";
