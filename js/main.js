<script>

$(document).ready(function(){

//Al hacer clic en cualquier img ejecutamos la acción
$('.content img').click(function() {
	//Capturamos el src de la img
	var postimg= $(this).attr('src');
	//Agregamos el src a una href simbólico
	$('#verimagenes').attr('href',postimg);
	//Hacemos clic en el enlace para activar el visor
	$('#verimagenes').click();
});

});
</script>