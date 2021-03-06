@extends('layout.core')

@section('content')


    <div class="content-wrapper">
          <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Editar Categoria</h1>
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
                <h3 class="card-title">Editar Categoria</h3>
              </div>
              <form action="{{route('categoria.update',$categoria->id)}}" method="post">
              <div class="col-sm-12">
              <div class="col-sm-12">
                    @csrf
                    @method('PUT')
                <div class="form-group my-3">
                    <label for="nombre"><h5>Categoria</h5></label>
                    <input type="text" class="form-control my-2 " name="nombre" required maxlength="30" value="{{$categoria->nombre}}">
                </div>
                <div class="form-group my-3">
                    <label for="descripcion"><h5>Descripcion</h5></label>
                    <input type="text" class="form-control my-2" name="descripcion" required maxlength="300" value="{{$categoria->descripcion}}">
                </div>
                <!-- <div class="form-group my-2">
                    <label for="estado">Estado</label>
                    <input type="text" class="form-control my-1" name="estado"  required value="{{$categoria->estado}}">
                </div>
                 -->
                   <div class="form-group my-3">
                <label for="nombre"><h5>Nuevo Estado Categoria(*)</h5></label>
                    <select class="form-control my-1" name="cbo_estado" required>
                                <option value="">Seleccione</option>
                                @foreach($estado as $estados)
                                <option value="{{$estados->id}}">{{$estados->estado}}</option>

                                @endforeach
                    </select>
                  
                </div>
                <div class="form-group my-3">
                        <input type="submit" class="btn btn-success" value="Guardar"> 
                        <!-- <input type="reset" class="btn btn-default" value="Cancelar">  -->
                        <a href="javascript:history.back()" class="btn btn-danger">Ir al listado</a>

                </div>
                </form>
            </div>
            <!-- /.card -->

           
          </div>

          </div>
          @endsection