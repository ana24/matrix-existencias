/*
Mostrar solo los iconos de los elementos de la barra izquierda
*/

function ocultar() {
	if($('.resp-elem').hasClass("oculto")){
		$('.resp-elem').removeClass("oculto");
		resp_contenido();
	}
	else
	{
		$('.resp-elem').addClass("oculto");
		resp_contenido();
	}

}

function resp_contenido(){
	if($('.container-fluid').hasClass("contenido")){
		$('.container-fluid').removeClass("contenido");
		$('.container-fluid').addClass("reub-contenedor");
	}
	else
	{
		$('.container-fluid').removeClass("reub-contenedor");
		$('.container-fluid').addClass("contenido");
	}
}
