<div class="w3-sidebar w3-bar-block w3-card w3-animate-left"id="mySidebar" style="background-color: lightgray;">
  			<!--<button class="w3-bar-item w3-button w3-large">Close &times;</button>-->
  			
        	<ul class="barra-izq" style="margin: 0px; padding: 3px;">
        		<li>
        			MatrixConsulting
        			<a href="">
            			<i class="fas fa-home"></i>
        			</a>
        			<a href="">
        				<i class="far fa-envelope">	
        					<span class="badge badge-primary badge-pill i-sidebar">2</span>
        				</i>
        			</a>
        		</li>
          		<li class="nav-item color-texto bordes-items-izq margen-sup">
              			<i class="fas fa-sync-alt"></i> Actualizar
          		</li>

          		<li class="nav-item color-texto bordes-items-izq">
          			<details>
          				<summary>
          					<i class="fas fa-home"></i> Dashboard
          				</summary>
          				<a class="nav-link" href="#">
	                  		Opcion1
	                	</a>
	                	<a class="nav-link" href="">
	                		Opcion2
	                	</a>	
          			</details>
	            </li>

	            <li class="nav-item color-texto bordes-items-izq">
          			<details>
          				<summary>
          					<i class="fas fa-wrench"></i> Parametros
          				</summary>
          				<a class="nav-link" href="#">
	                  		Opcion1
	                	</a>
	                	<a class="nav-link" href="">
	                		Opcion2
	                	</a>	
          			</details>
	            </li>

	            <li class="nav-item color-texto bordes-items-izq">
          			<details>
          				<summary>
          					<i class="fas fa-cogs"></i> Operaciones
          				</summary>
          				<a class="nav-link" href="#">
	                  		Opcion1
	                	</a>
	                	<a class="nav-link" href="">
	                		Opcion2
	                	</a>	
          			</details>
	            </li>

	            <li class="nav-item color-texto bordes-items-izq">
          			<details>
          				<summary>
          					<i class="fas fa-users"></i> Miembros
          				</summary>
          				<a class="nav-link" href="#">
	                  		Opcion1
	                	</a>
	                	<a class="nav-link" href="">
	                		Opcion2
	                	</a>	
          			</details>
	            </li>

	            <li class="nav-item color-texto bordes-items-izq">
          			<details>
          				<summary>
          					<i class="fas fa-tablet-alt"></i> Equipamiento
          				</summary>
          				<a class="nav-link" href="#">
	                  		Opcion1
	                	</a>
	                	<a class="nav-link" href="">
	                		Opcion2
	                	</a>	
          			</details>
	            </li>

	            <li class="footer">
	           		<div class="container" style="width: 80%;">
	           			<h6>
			              	Avance general del proyecto
			              	<a href="">
				            	<i class="fas fa-power-off" title="cerrar sesion"></i>
				            </a>	
			            </h6>

	           			<label class="progress" style="background-color: #b7b7b7;">
	           				<div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
	           			</label>          			
	           		</div>
	            </li>

        	</ul>

		</div>

    <script>
  function w3_open() {
    document.getElementById("main").style.marginLeft = "25%";
    document.getElementById("mySidebar").style.width = "30%";
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("openNav").style.display = 'inline-block';
  }
  function w3_close() {
    document.getElementById("main").style.marginLeft = "10%";
    document.getElementById("mySidebar").style.width = "10%";
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("openNav").style.display = "inline-block";
  }
  </script>


  /*
 * Sidebar
 */

.barra-izq{
  list-style: none;
}

.margen-sup {
  margin-top: 8px;
}

.color-texto:hover{
  color: blue;
}

details a:visited {
  color: black;
}

details a:hover{
  background-color: #fffcfc;
  border-radius: 8px;
  text-decoration: none;
  padding-left: 5px;
}

details {
  margin: .5rem;
}

li details a {
  margin: 0px;
  padding: 0px;
  font-size: .8rem;
  display: block;
}

ul li a{
  padding: 1px;
  margin: 1px;
}

ul li a:visited {
  color: black;
}

.actualizar:hover{
  text-decoration: none;
  color: blue;
}

.actualizar{
  text-decoration: none;
}


.pos-opc {
  z-index: inherit;
}

.i-sidebar {
  margin-left: -.8rem;
}