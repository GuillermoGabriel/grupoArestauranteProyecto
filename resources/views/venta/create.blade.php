@extends('layout.core')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Nueva Venta</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Categorias</li>
                    </ol>
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <div class="content">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Nueva Venta</h3>
            </div>
            <form action="{{route('registrarventa.store')}}" method="post">
                <div class="col-sm-12">
                    <div class="col-sm-12">

                        @csrf

                        <div class="form-group my-2">
                            <label class="my-2" for="nombre">
                                <h5>Cliente (*)</h5>
                            </label>
                            <select class="form-control custom-select" name="cbo_cliente" id="cliente"
                                onchange="seleccionar();" required>
                                <option value="input">Seleccione</option>
                                @foreach($cliente as $clientes)
                                <option value="{{$clientes->id}}">{{$clientes->nombre}}</option>

                                @endforeach
                            </select>
                        </div>

                        <div class="form-group my-2">
                            <label class="my-2" for="nombre">
                                <h5>Menu (*)</h5>
                            </label>
                            <select class="form-control custom-select" name="cbo_menu" id="menu"
                                onchange="seleccionar();" required>
                                <option value="input">Seleccione</option>
                                @foreach($menu as $menus)
                                <option value="{{$menus->id}}">{{$menus->plato}}</option>

                                @endforeach
                            </select>
                        </div>

                        <div class="form-group my-2">

                            <label for="cantidadmenu">
                                <h5>Cantidad Menu</h5>
                            </label>
                            <input type="number" class="form-control" name="cantidadmenu" id="canMenu" required>
                        </div>

                        <div class="form-group my-2">
                            <label class="my-2" for="nombre">
                                <h5>Bebida (*)</h5>
                            </label>
                            <select class="form-control custom-select" name="cbo_bebida">
                                <option value="">Seleccione</option>
                                @foreach($bebida as $bebidas)
                                <option value="{{$bebidas->id}}">{{$bebidas->bebida}}</option>

                                @endforeach
                            </select>
                        </div>

                        <div class="form-group my-2">
                            <label for="cantidadbebida" class="my-2">
                                <h5>Cantidad Bebida</h5>
                            </label>
                            <input type="number" class="form-control my-2" name="cantidadbebida" >
                        </div>


                        <!-- <div class="row mb-2">
                            <div class=" col-sm-1 form-group my-4">
                                <button class="btn btn-primary" id="calcular">Calcular</button>
                            </div>

                            <div class=" col-sm-11 form-group my-2">
                                <label for="fecha" class="my-2">
                                    <h5>total</h5>
                                </label>
                                <input type="number" class="form-control" name="total" id="respuesta">
                            </div>
                        </div>
                    </div> -->



                        <div class="row mb-2">
                            <div class=" col-sm-6 form-group my-2">
                                <label for="paga" class="my-2">
                                    <h5>Paga Con</h5>
                                </label>
                                <input type="number" class="form-control" name="paga" >
                            </div>

                            <div class=" col-sm-6 form-group my-2">
                                <label for="fecha" class="my-2">
                                    <h5>Fecha</h5>
                                </label>
                                <input type="date" class="form-control" name="fecha">
                            </div>
                        </div>
                    </div>





                    <div class="form-group my-3">

                        <a href="javascript:history.back()" class="btn btn-danger"> <i class="fas fa-reply"></i>
                            Cancelar</a>
                        <input type="submit" class="btn btn-success" value="Guardar">


                        <!-- <div class="input-group mb-3">
                                    <div class="input-group mb-3"> -->



                    </div>
            </form>
        </div>
        <!-- /.card -->


    </div>

</div>
@endsection