@extends('layout.core')

@section('content')

  


    <div class="content-wrapper">
          <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Nueva Categoria</h1>
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
         
      </div><!-- /.container-fluid -->
    </section>
    <div class="content">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Nueva Categoria Plato</h3>
              </div>
                <form action="{{route('categoria.store')}}" method="post" class="col-sm-12">

                <div class="col-sm-12">
                        @csrf
                    
                    <div class="form-group my-3">
                        <label for="nombre"><h5>Categoria</h5></label>
                        <input type="text" class="form-control" name="nombre" required maxlength="30">
                    </div>

                    <div class="form-group my-3">
                    <label for="nombre"><h5>Estado Categoria(*)</h5></label>
                        <select class="form-control" name="cbo_estado" required>
                                    <option value="">Seleccione</option>
                                    @foreach($estado as $estados)
                                    <option value="{{$estados->id}}">{{$estados->estado}}</option>

                                    @endforeach
                        </select>      
                    </div>

                    <div class="form-group my-3">
                        <label for="descripcion"><h5>Descripcion</h5></label>
                        <input type="text" class="form-control " name="descripcion" required maxlength="300">
                    </div>
                    <!-- <div class="form-group my-1">
                        <label for="estado">Estado</label>
                        <input type="text" class="form-control" name="estado"  required>
                    </div> -->
                    
                    <div class="form-group">

                    <a href="javascript:history.back()" class="btn btn-danger"> <i class="fas fa-reply"></i>  Cancelar</a>

                            <input type="submit" class="btn btn-success my-3" value="Guardar"> 
                        <!--  <input type="reset" class="btn btn-default" value="Cancelar"> -->
                          
                    </div>
                    </div>
                    </form>
            </div>
            <!-- /.card -->

           
          </div>

          </div>
          @endsection