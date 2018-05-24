<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>
		MatrixConsulting
	</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">

	<!-- Custom styles for this template -->
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
</head>
<body>
	
	<nav class="navbar color-fondo fixed-top flex-md-nowrap">
		
		<div id="elem-izq">
			<button class="btn btn-nav" type="button">
				<i class="fas fa-align-justify" title="Menu"></i>
			</button>
		</div>

		<div class="container" id="elem-center">

			<div>
				<button class="btn btn-nav" type="button">
						<i class="fas fa-redo"></i>
				</button>

				<button class="btn btn-nav" type="button">
						<i class="fas fa-th-large"></i>
				</button>

				<button class="btn btn-nav" type="button">
						<i class="fas fa-search"></i>
				</button>
				<input type="text" placeholder="Buscar" class="rounded">	
			</div>
			
			<div>
				
				<div class="dropdown elem-nav-pos" style="margin-right: 5px;">
				  	<button class="btn btn-sm btn-nav dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
				    Proyectos
				  	</button>
				  	<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				    	<a class="dropdown-item" href="#">Proyecto1</a>
				    	<a class="dropdown-item" href="#">Proyecto2</a>
				    	<a class="dropdown-item" href="#">Proyecto3</a>
					</div>
				</div>

				<div class="dropdown elem-nav-pos" style="margin-right: 2rem;">
				  	<button class="btn btn-sm btn-nav" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i title="Nuevo Proyecto" class="fas fa-plus-circle"></i>
				  	</button>
				  	
			    	<form class="dropdown-menu p-4" style="font-size: .8rem;">
					  	<div class="form-group">
					    	<label for="exampleDropdownNombreProyecto">Nombre del proyecto</label>
					    	<input type="text" class="form-control-sm">
					  	</div>
					  	<div class="form-group">
					    	<label for="exampleDropdownFormCliente">Cliente</label>
					    	<input type="text" class="form-control-sm">
					  	</div>
					  	<div class="form-group">
					    	<label for="exampleDropdownFormResponsable">Responsable</label>
					    	<input type="text" class="form-control-sm">
					  	</div>
					  	<div class="form-group">
					    	<label for="exampleDropdownFormSelect">Tipo de proyecto</label>
					    	<select value="Seleccione tipo" class="form-control-sm">
					    		<option class="form-control">Tipo 1</option>
					    		<option class="form-control">Tipo 2</option>
					    	</select>
					  	</div>
					  	<button type="submit" class="btn btn-primary btn-sm">Aceptar</button>
					</form>	

				</div>

				<form class="form-inline my-2 my-lg-0 elem-nav-pos">
			        <span class="badge badge-primary badge-pill num-mens">2</span>
			        <div class="btn-group">
						<button class="color-fondo nav-item control-formulario mr-sm-2 btn btn-sm dropdown-toggle texto-blanco" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    Usuario 1				    
						</button>
						<div class="dropdown-menu">
						    <a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</div>
					<img class="img-user" src="img/user.png">
			    </form>

				<div class="dropdown elem-nav-pos">
				  	<button class="btn btn-sm btn-nav" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i title="Configuraciones" class="fas fa-cog"></i>
				  	</button>
				  	
			    	<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				    	<a class="dropdown-item" href="#">Perfil</a>
				    	<a class="dropdown-item" href="#">Reconocimiento</a>
				    	<a class="dropdown-item" href="#"><i class="fas fa-power-off fondo-negro"></i> Cerrar sesión</a>
					</div>
				</div>			    

			</div><!--end container-->
		</div>
			
		<div id="elem-der">
			<button class="btn btn-nav" type="button">
				<i class="fas fa-user-friends" title="Chats"></i>
			</button>
		</div><!--end chat-->

	</nav>
	