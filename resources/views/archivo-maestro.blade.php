@include('header')

<div>
    <div class="contenedor">
        @include('barra-izq')

        <div >
            <h5>Carga de documentos</h5>
            <ul class="nav nav-tabs rounded" style="background-color: lightgray; z-index: 1;">
              <li class="nav-item">
                <a class="nav-link active" href="{{ asset('archivo-maestro') }}">Archivo Maestro</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ asset('stock-inventario') }}">Stock de inventario</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ asset('validador') }}">Validador</a>
              </li>
            </ul>

            <div class="row elem-carga-doc">
                <div class="col col-sm-6 col-md-6 col-lg-6" style="border:solid;background: white;height: 15em">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div style="position: relative;top:15px">
                            <input type="file" name="archivo_maestro" id="archivo_maestro" class="input-large form-control">
                            <div style="position: relative; left: 145px;top:20px;">
                                <div style="position:relative;align-items: center">
                                    <button type="submit" name="" class="">Cargar</button>
                                </div>
                                <div>
                                    <input type="hidden" id="" name="" value="">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col col-sm-6 col-md-6 col-lg-6" style="border:solid;background: white;height: 15em;">
                    <div style="position: relative; left: 10px; top:10px; font-size: small">
                        <p style="alignment:center; color: black; font-weight: bold;font-size: medium">
                            <p>Archivo:
                                <span style="alignment:center;color: #4F8A10;font-weight: bold;font-size: medium">
                                    
                                </span>
                            </p>
                        </p>
                        <p>Cantidad de registros leídos:
                            <span style="alignment:center;color: #4F8A10;font-weight: bold;font-size: medium">
                                0
                            </span>
                        </p>
                        <p>Registros cargados en maestro:
                            <span style="alignment:center;color: #4F8A10;font-weight: bold;font-size: medium">
                                0
                            </span>
                        </p>
                    </div>
                </div>
            </div><!--end row-->
            
        </div>
    </div>
</div>  

@include('footer')


