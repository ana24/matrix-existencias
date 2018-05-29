<nav class="sidebar">
  <div class="sidebar-sticky">
    <div class="margen-sup resp-elem" style="margin-right: 0.8rem;">
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
      <a href="#" class="marg-izq-elem fondo-negro"><i class="fas fa-sync-alt i-blanco"></i>
        <a href="" class="resp-elem actualizar">Actualizar</a>
      </a>
    </div>

    <div class="accordion" id="accordionExample">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
              <i class="fas fa-home i-blanco"></i> <span class="resp-elem tam-let">Dashboard</span>
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
            <a href="{{ asset('cargar-documento') }}">
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

    </div>


    <div class="container footer resp-elem">
      <h6 class="texto-blanco tam-let">
        Avance general del proyecto
            
          </h6>
            <label class="progress" style="background-color: #b7b7b7;">
              <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
            </label>                    
      </div>
  </div>
</nav>