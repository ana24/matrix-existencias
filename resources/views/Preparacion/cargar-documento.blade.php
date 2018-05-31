@extends('layout')

@section('content')
    <div class="container-fluid contenido">

        <h5>Carga de documentos</h5>
       
        <ul class="nav nav-tabs rounded cargar-documento margen-sup" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="maestro-tab" data-toggle="tab" href="#maestro" role="tab" aria-controls="maestro" aria-selected="true">Maestro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="stock-tab" data-toggle="tab" href="#stock" role="tab" aria-controls="stock" aria-selected="false">Stock</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="otro-tab" data-toggle="tab" href="#otro" role="tab" aria-controls="otro" aria-selected="false">Otro</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <!--Archivo maestro-->
            <div class="tab-pane fade show active" id="maestro" role="tabpanel" aria-labelledby="maestro-tab">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6 carga-archivo">

                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="sel-archivo">
                                <label>Seleccione el archivo maestro.</label>
                                <input type="file" name="archivo_maestro" id="archivo_maestro" class="input-large form-control">
                                <div class="margen-sup">
                                    <button type="submit" name="cargar">Cargar</button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 carga-archivo info_archivo">
                        <div class="margen-sup">
                            <p>Archivo:
                                <span>
                                    File name
                                </span>
                            </p>
                            <p>Cantidad de registros leídos:
                                <span>
                                    0
                                </span>
                            </p>
                            <p>Registros cargados en maestro:
                                <span style>
                                    0
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--Fin de archivo maestro-->
            
            <!--Stock-->
            <div class="tab-pane fade" id="stock" role="tabpanel" aria-labelledby="stock-tab">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6 carga-archivo">

                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="sel-archivo">
                                <label>Seleccione el archivo stock de inventario.</label>
                                <input type="file" name="stock-inventario" id="archivo_stock" class="input-large form-control">
                                <div class="margen-sup">
                                    <button type="submit" name="cargar_stock" class="">Cargar</button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 carga-archivo info_archivo">
                        <div class="margen-sup">
                            <p>Archivo:
                                <span>
                                    File name
                                </span>
                            </p>
                            <p>Cantidad de registros leídos:
                                <span>
                                    0
                                </span>
                            </p>
                            <p>Registros cargados en maestro:
                                <span style>
                                    0
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--Fin de stock-->
            
            <!--Otro archivo-->
            <div class="tab-pane fade" id="otro" role="tabpanel" aria-labelledby="otro-tab">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6 carga-archivo">

                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="sel-archivo">
                                <label>Seleccione otro archivo.</label>
                                <input type="file" name="stock-inventario" id="archivo_stock" class="input-large form-control">
                                <div class="margen-sup">
                                    <button type="submit" name="cargar_stock" class="">Cargar</button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 carga-archivo info_archivo">
                        <div class="margen-sup">
                            <p>Archivo:
                                <span>
                                    File name
                                </span>
                            </p>
                            <p>Cantidad de registros leídos:
                                <span>
                                    0
                                </span>
                            </p>
                            <p>Registros cargados en maestro:
                                <span style>
                                    0
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--Fin de otro archivo-->
        
        </div>
        
    </div>
@endsection
