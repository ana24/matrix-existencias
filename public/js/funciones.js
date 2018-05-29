/*
Mostrar solo los iconos de los elementos de la barra izquierda
*/

function ocultar() {
	if($('.resp-elem').hasClass("menu")){
		$('.resp-elem').removeClass("menu");
		resp_contenido();
	}
	else
	{
		$('.resp-elem').addClass("menu");
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
		$('.container-fluid').addClass("contenido");
		$('.container-fluid').removeClass("reub-contenedor");
	}
}