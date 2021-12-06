@extends('layout.core')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Bebidas</h1>
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
                <a href="{{route('bebidas.create')}}" class="btn btn-success">Nuevo Bebida <i
                        class="fas fa-plus"></i></a>
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
                            <h3 class="card-title ">Listado De Bebidas</h3>
                        </div>
                        <div class="col-sm-12 my-1">
                            <form class="form-search">
                                <div class="input-group">
                                    <input class="form-control form-text my-2" placeholder="Buscar Bebida" size="15"
                                        name="texto" velue="{{$texto}}">
                                    <span class="input-group-btn my-2"><button class="btn btn-primary" value="Buscar"><i
                                                class="my-1" aria-hidden="true">BUSCAR</i></button></span>
                                </div>
                            </form>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead class="table-dark">

                                    <th>Id</th>
                                    <th>Categoria</th>
                                    <th>Bebida</th>
                                    <th>Descripcion</th>
                                    <th>Precio</th>
                                    <th>
                                        <center>Acciones</center>
                                    </th>

                                </thead>
                                <tbody>
                                    @if(count($bebida)<=0) <tr>
                                        <td colspan="6">No hay resultados</td>
                                        </tr>
                                        @else
                                        <!-- $BEBIDA es del controller lo del compact ==2?"No Disponible":"Disponible"-->
                                        @foreach($bebida as $bebidas)
                                        <tr>
                                            <td>{{$bebidas->id}}</td>
                                            <td>{{$bebidas->categoria_bebida}}</td>
                                            <td>{{$bebidas->bebida}}</td>
                                            <td>{{$bebidas->descripcion}}</td>
                                            <td>S/.{{$bebidas->precio}}</td>
                                            <td>
                                                <center><a href="{{route('bebidas.edit',$bebidas->id)}}"
                                                        class="btn btn-outline-warning btn-sm"> <i class="fas fa-edit"></i> </a>
                                                    <button type="button" class="btn btn-outline-danger btn-sm"
                                                        data-toggle="modal"
                                                        data-target="#modal-delete-{{$bebidas->id}}">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </center>
                                            </td>

                                        </tr>
                                        @include('bebida.delete')
                                        @endforeach
                                        @endif


                                </tbody>

                            </table>
                            {{$bebida->links()}}





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