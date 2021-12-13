@extends('layout.core')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Realizar Venta</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Categorias</li>
                    </ol>
                </div>
            </div>

            @if(Session::has('mensaje'))
            <div class="alert alert-success alert-dismissible my-2" role="alert">
                {{Session::get('mensaje')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            <div class="col-auto my-1">
                <a href="{{route('registrarventa.create')}}" class="btn btn-success">Nuevo venta <i class="fas fa-cart-plus"></i></a>
            </div>

        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-blue">
                            <h3 class="card-title ">Ventas Del Dia</h3>
                        </div>
                        <div class="col-sm-12 my-1">
                            <form class="form-search">
                                <div class="input-group">
                                    <input class="form-control form-text my-2" placeholder="Buscar menu" size="15"
                                        name="texto" velue="{{$texto}}">
                                    <span class="input-group-btn my-2"><button class="btn btn-primary" value="Buscar"><i
                                                class="my-1" aria-hidden="true">BUSCAR</i></button></span>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead class="table-warning">

                                    <th>Id</th>
                                    <th>Cliente</th>
                                    <th>Menu</th>
                                    
                                    <th>Cantidad</th>
                                     <th>stock</th>
                                    <th>Bebida</th>
                                    <!-- <th>Precio</th> -->
                                    <th>Cantidad</th>
                                    <th>Total</th>
                                    <th>Pago</th>
                                    <th>Vuelto</th>
                                    <th>fecha</th>

                                    <th>
                                        <center>Acciones</center>
                                    </th>

                                </thead>
                                <tbody>
                                    @if(count($venta)<=0) <tr>
                                        <td colspan="5">No hay resultados</td>
                                        </tr>
                                        @else
                                        <!-- $categoria es del controller lo del compact// ==2?"No Disponible":"Disponible"-->
                                        @foreach($venta as $ventas)
                                        <tr>
                                            <td>{{$ventas->id}}</td>
                                            <td>{{$ventas->nombre}}</td>
                                            <td>{{$ventas->plato}}</td>
                                           
                                            <td>{{$ventas->cantidad_menu}}</td>
                                            <td>{{$ventas->stock-$ventas->cantidad_menu}}</td>


                                            <td>{{$ventas->bebida}}</td>
                                            {{--<td>S/.{{$ventas->precio_bebida}}</td>--}}
                                            <td>{{$ventas->cantidad_bebida}}</td>
                                            <td>S/.{{$ventas->precio*$ventas->cantidad_menu + $ventas->precio_bebida*$ventas->cantidad_bebida}}</td> -->
                                            <td>S/.{{$ventas->pago}}</td>
                                            <td>S/.{{ $ventas->pago-$ventas->precio*$ventas->cantidad_menu + $ventas->precio_bebida*$ventas->cantidad_bebida}}</td>
                                            <td>{{$ventas->fecharegistro}}</td>
                                            <td>
                                            <center><a href="{{route('registrarventa.edit',$ventas->id)}}"
                                                        class="btn btn-outline-warning btn-sm"> <i class="fas fa-edit"></i>  </a>
                                                        <button type="button" class="btn btn-outline-danger btn-sm"
                                                        data-toggle="modal" data-target="#modal-delete-{{$ventas->id}}">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </center>

                                            </td>

                                        </tr>
                                    
@include('venta.delete')
                                        @endforeach
                                        @endif


                                </tbody>

                            </table>
                           {{$venta->links()}}


                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->


                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>


@endsection




