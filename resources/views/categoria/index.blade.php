@extends('layout.core')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Categorias Platos</h1>
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
               <a href="{{route('categoria.create')}}" class="btn btn-success">Nueva Categoria  <i class="fas fa-plus"></i></a>
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
                <h3 class="card-title ">Listado De Categorias de Platos</h3>
              </div>
              <div class="col-sm-12 my-1">
                            <form class="form-search">
                                <div class="input-group">
                                    <input class="form-control form-text my-1" placeholder="Buscar categoria" size="15" name="texto" velue="{{$texto}}">
                                    <span class="input-group-btn my-1"><button class="btn btn-primary" value="Buscar"><i class="my-1" aria-hidden="true">BUSCAR</i></button></span>
                                </div>
                            </form>
                        </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                        <thead class="table-dark">

                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Estado</th>
                                <th><center>Acciones</center></th>

                        </thead>
                 
                        <tbody>
                                @if(count($categoria)<=0)

                                <tr>
                                        <td colspan="8">No hay Resultados</td>
                                </tr>

                                @else
                                <!-- $categoria es del controller lo del compact ==2?"No Disponible":"Disponible"-->
                                @foreach($categoria as $categorias)
                                <tr>
                                    <td>{{$categorias->id}}</td>
                                    <td>{{$categorias->nombre}}</td>
                                    <td>{{$categorias->descripcion}}</td>
                                    <td>{{$categorias->estado}}</td>
                                    <td><center> <a href="{{route('categoria.edit',$categorias->id)}}" class="btn btn-outline-warning btn-sm" > <i class="fas fa-edit"></i> </a>
                                  
                                    <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#modal-delete-{{$categorias->id}}">
                                    <i class="fas fa-trash"></i>
                                    </button>
                                    </center>
                                    </td>
                                </tr>

                                @include('categoria.delete')

                                
                                @endforeach
                                @endif

                            </tbody>

                    </table>
                    {{$categoria->links()}}
                    
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