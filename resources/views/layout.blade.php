@extends('base')
	

	@section('esquema')
	<!--Header-->
	<nav class="navbar color-fondo fixed-top flex-md-nowrap">
		
		<div id="elem-izq">
			<button class="btn btn-nav" type="button" onclick="ocultar()">
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
				<input type="text" placeholder="Buscar" class="rounded buscar">
			</div>
			
			<div>
				
				<div class="dropdown elem-nav-pos">
				  	<button class="btn btn-sm btn-nav dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    Proyectos
				  	</button>
				  	<div class="dropdown-menu tam-let distancia" aria-labelledby="dropdownMenuButton">
				    	<a class="dropdown-item" href="#">Proyecto1</a>
				    	<a class="dropdown-item" href="#">Proyecto2</a>
				    	<a class="dropdown-item" href="#">Proyecto3</a>
					</div>
				</div>

				<div class="dropdown elem-nav-pos btn-plus">
				  	<button class="btn btn-sm btn-nav" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i title="Nuevo Proyecto" class="fas fa-plus-circle"></i>
				  	</button>
				  	
			    	<form class="dropdown-menu p-4 tam-let">
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
					    	<select value="Seleccione tipo" class="form-control-sm tam-let">
					    		<option class="form-control">Tipo 1</option>
					    		<option class="form-control">Tipo 2</option>
					    	</select>
					  	</div>
					  	<button type="submit" class="btn btn-primary btn-sm">Crear</button>
					</form>	

				</div>

				<form class="form-inline my-2 my-lg-0 elem-nav-pos">
			        <span class="badge badge-primary badge-pill">2</span>
			        <div class="btn-group">
						<button class="color-fondo nav-item control-formulario mr-sm-2 btn btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    Usuario 1				    
						</button>
						<div class="dropdown-menu tam-let distancia">
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
				  	
			    	<div class="dropdown-menu tam-let distancia" aria-labelledby="dropdownMenuButton">
				    	<a class="dropdown-item" href="#">Perfil</a>
				    	<a class="dropdown-item" href="#">Reconocimiento</a>
				    	<a class="dropdown-item" href="#"><i class="fas fa-power-off"></i> Cerrar sesión</a>
					</div>
				</div>			    

			</div>
		</div><!--end container-->
			
		<div id="elem-der">
			<button class="btn btn-nav" type="button">
				<i class="fas fa-user-friends" title="Chats"></i>
			</button>
		</div><!--end chat-->

	</nav>
	<!--Fin de header-->

	<!--Barra izquierda-->
	<nav class="sidebar">
	  	<div class="sidebar-sticky">
	    	<div class="margen-sup resp-elem marg-derecha">
	      		<span class="marg-izq-elem texto-blanco">MatrixConsulting</span>
	      		<a href="{{ asset('inicio') }}">
	          		<i class="fas fa-home marg-izq-elem i-blanco"></i>
	      		</a>
	      		<a href="#">
	        		<i class="far fa-envelope i-blanco"> 
	          			<span class="badge badge-primary badge-pill margen-izq">2</span>
	        		</i>
	      		</a>
	    	</div>

	    	<div class="margen-sup texto-blanco resp-elem">
	      		<a href="#" class="marg-izq-elem fondo-negro">
	      			<i class="fas fa-sync-alt i-blanco"></i>
	        		<a href="" class="resp-elem actualizar">Actualizar</a>
	      		</a>
	    	</div>
	    	<!--Clase acordion-->
		    <div class="accordion" id="accordionExample">
		    	<div class="card">
	        		<div class="card-header" id="headingOne">
	          			<h5 class="mb-0">
	            			<button class="btn" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
	              				<i class="fas fa-home i-blanco"></i>
	              				<span class="resp-elem tam-let">Dashboard</span>
	            			</button>
	          			</h5>
	        		</div>

			        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
			          	<div class="card-body">
			            	<a href="#">
			                	Notificaciones
			            	</a>
			            	<a href="#">
			              		Monitor del proyecto
			            	</a>  
			          	</div>
		        	</div>
		      	</div>

	      		<div class="card">
	        		<div class="card-header" id="headingTwo">
	          			<h5 class="mb-0">
	            			<button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
	              				<i class="fas fa-wrench i-blanco"></i>
	              				<span class="resp-elem tam-let">Parametros</span>
	            			</button>
	          			</h5>
	        		</div>
	        		<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
	          			<div class="card-body">
	            			<a href="#">
	              				<span>Carga de personal</span>
	            			</a>
	            			<a href="#">
	              				<span>Ubicaciones</span>
	            			</a>  
	          			</div>
	        		</div>
	      		</div>

	      		<div class="card">
	        		<div class="card-header" id="headingThree">
	          			<h5 class="mb-0">
	            			<button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
	              				<i class="fas fa-cogs i-blanco"></i>
	              				<span class="resp-elem tam-let">Operaciones</span>
	            			</button>
	          			</h5>
	        		</div>
		        	<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
			          	<div class="card-body">
				            <a href="{{ asset('cargar-documento') }}">
				                Carga de documentos
				            </a>
				            <a href="">
				              Conciliacion
				            </a>
				            <a href="">
				              Trazabilidad del inventario
				            </a>
				          </div>
				    </div>
		      	</div>

			    <div class="card">
			        <div class="card-header" id="headingFour">
			          	<h5 class="mb-0">
			            	<button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
			              		<i class="fas fa-users i-blanco"></i>
			                	<span class="resp-elem tam-let">Miembros </span>
			            	</button>
			          	</h5>
			        </div>
			        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
			          	<div class="card-body">
			            	<a href="">
			              		Carga de documentos
			            	</a>
			            	<a href="#">
			              		Registro de asistencia
			            	</a>
			            	<a href="">
			              		Rendimiento de personal
			            	</a>  
			          	</div>
			        </div>
			    </div>

			    <div class="card">
			        <div class="card-header" id="headingFive">
			          	<h5 class="mb-0">
			            	<button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
			              		<i class="fas fa-tablet-alt i-blanco"></i>
			              		<span class="resp-elem tam-let">Equipamiento</span>
			            	</button>
			          	</h5>
			        </div>
			        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
			          	<div class="card-body">
			            	<a href="#">
			                	PDA/Laptop
			            	</a>
			            	<a href="">
			              		EPP
			            	</a>
			            	<a href="">
			              		Rendimiento equipos
			            	</a>
			          	</div>
			        </div>
			    </div>

			</div><!--Fin de acordion-->


		    <div class="container footer resp-elem">
		      	<h6 class="texto-blanco tam-let">
		        	Avance general del proyecto
		        </h6>
		        <label class="progress">
		            <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
		            	25%
		            </div>
		        </label>                    
		    </div>
		</div>
	</nav>
	<!--fin de barra izquierda-->

	<!--Empieza el contenido-->
	<div class="container-fluid contenido">

		@yield('content')

	</div>
	<!--Termina el contenido-->
	@endsection
	