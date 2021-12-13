@extends('layout.core')

@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Editar Registro</h1>
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
                <h3 class="card-title">Editar Registro</h3>
            </div>
            <form action="{{route('registrarventa.update',$venta->id)}}" method="post">
                @method('PUT')
                <div class="col-sm-12">
                <div class="col-sm-12">
                @csrf
                <div class="form-group my-2">
                            <label class="my-2" for="nombre">
                                <h5>Cliente (*)</h5>
                            </label>
                            <select class="form-control custom-select" name="cbo_cliente" id="cliente" onchange="seleccionar();" required value="{{$venta->nombre}}">
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
                            <select class="form-control custom-select" name="cbo_menu" id="menu" onchange="seleccionar();" required value="{{$venta->menu}}">
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
                            <input type="number" class="form-control" name="cantidadmenu" id="canMenu" required value="{{$venta->cantidad_menu}}">
                        </div>

                        <div class="form-group my-2">
                            <label class="my-2" for="nombre">
                                <h5>Bebida (*)</h5>
                            </label>
                            <select class="form-control custom-select" name="cbo_bebida" id="bebida" onchange="seleccionar();" value="{{$venta->bebida}}">
                                <option value="input">Seleccione</option>
                                @foreach($bebida as $bebidas)
                                <option value="{{$bebidas->id}}">{{$bebidas->bebida}}</option>

                                @endforeach
                            </select>
                        </div>
                        <div class="form-group my-2">
                            <label for="cantidadbebida" class="my-2">
                                <h5>Cantidad Bebida</h5>
                            </label>
                            <input type="number" class="form-control my-2" name="cantidadbebida" id="canBebida" value="{{$venta->cantidad_bebida}}">
                        </div>

                        <div class="row mb-2">
                            <div class=" col-sm-6 form-group my-2">
                                <label for="paga" class="my-2">
                                    <h5>Paga Con</h5>
                                </label>
                                <input type="number" class="form-control" name="paga" required value="{{$venta->pago}}">
                            </div>

                            <div class=" col-sm-6 form-group my-2">
                                <label for="fecha" class="my-2">
                                    <h5>Fecha</h5>
                                </label>
                                <input type="date" class="form-control" name="fecha" required value="{{$venta->fecharegistro}}">
                            </div>
                        </div>
                    </div>


                <div class="form-group my-3">
                    <input type="submit" class="btn btn-success" value="Guardar">

                    <a href="javascript:history.back()" class="btn btn-primary">Lista Ventas</a>
                    <!-- <div class="input-group mb-3">
                                    <div class="input-group mb-3"> -->

            </form>
        </div>
        <!-- /.card -->


    </div>

</div>
@endsection