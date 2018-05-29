@include('header')

<div>
	@include('barra-izq')

    <div class="container" style="margin-top: 4rem; margin-left: 13rem;">
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

    </div>
</div>	

@include('footer')