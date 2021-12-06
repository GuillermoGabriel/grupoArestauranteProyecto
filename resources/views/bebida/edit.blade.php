@extends('layout.core')

@section('content')


    <div class="content-wrapper">
          <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Editar Bebida</h1>
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
                <h3 class="card-title">Editar Bebida</h3>
              </div>
              <form action="{{route('bebidas.update',$bebida->id)}}" method="post">
                    @method('PUT')
                    <div class="col-sm-12">
                    <div class="col-sm-12">
                    @csrf
                        <!-- <div class="for-group">

                            <label for="categoria">Categoria</label>
                            <input type="text" class="form-control" name="categoria" required >
                        </div> -->
                        <div class="form-group my-2">
                                <label class="my-2" for="nombre"><h5>Categoria Bebida (*)</h5></label>
                                    <select class="form-control custom-select" name="cbo_Bebida" value="{{$bebida->categoria_bebida}}" required>
                                                <option value=" " >Seleccione</option>
                                                @foreach($categoriabebida as $categoriabebidas)
                                                <option value="{{$categoriabebidas->id}}">{{$categoriabebidas->categoria_bebida}}</option>

                                                @endforeach
                                    </select>
                                
                            </div>
                            <div class="form-group my-3">

                                <label for="bebida"><h5>Bebida</h5></label>
                                <input type="text" class="form-control" name="bebida" required value="{{$bebida->bebida}}">
                            </div>
                            <div class="form-group my-3">

                                <label for="descripcion"><h5>Descripcion</h5></label>
                                <input type="text" class="form-control" name="descripcion" required value="{{$bebida->descripcion}}">
                            </div>
                            <div class="form-group my-3">

                                <label for="precio"><h5>Precio</h5></label>
                                <input type="text" class="form-control" name="precio" required value="{{$bebida->precio}}">
                            </div>
                            <div class="form-group my-3">
                                    <input type="submit" class="btn btn-success" value="Guardar">
                                
                                    <a href="javascript:history.back()" class="btn btn-primary">Ir al listado Plato</a>


                            </div>
                </form>
            </div>
            <!-- /.card -->

           
          </div>

          </div>
          @endsection