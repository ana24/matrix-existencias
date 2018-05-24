@include('header')

<div>
	<div class="container margen-sup">
		@include('barr-izq')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10">
        	<h5>Carga de documentos</h5>
			<ul class="nav nav-tabs rounded" style="background-color: lightgray;">
			  <li class="nav-item">
			    <a class="nav-link" href="{{ asset('archivo-maestro') }}">Archivo Maestro</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="{{ asset('stock-inventario') }}">Stock de inventario</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="{{ asset('validador') }}">Validador</a>
			  </li>
			</ul>

		
			
        </main>
	</div>
</div>	

@include('footer')