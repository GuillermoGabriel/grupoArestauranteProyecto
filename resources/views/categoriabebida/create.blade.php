@extends('layout.core')

@section('content')

    <div class="content-wrapper">
          <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Nueva Categoria Bebida</h1>
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
                <h3 class="card-title">Nueva Categoria Bebida</h3>
              </div>

              <!-- aca lo enviamos al store porque ahi se encargara de guardar los datos -->
                <form action="{{route('categoriabebida.store')}}" method="post" class="col-sm-12">

                <div class="col-sm-12">
                        @csrf
                    
                    <div class="form-group my-3">
                        <label for="nombre"><h5>Categoria Bebida</h5></label>
                        <input type="text" class="form-control" name="categoriabebida" required maxlength="30">
                    </div>

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