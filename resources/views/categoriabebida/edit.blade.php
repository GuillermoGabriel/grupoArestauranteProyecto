@extends('layout.core')

@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Editar Categoria Bebida</h1>
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
                <h3 class="card-title">Editar Categoria Bebida</h3>
            </div>
            <!-- mandamos la informacion al update -->
            <form action="{{route('categoriabebida.update',$categoriabebida->id)}}" method="post">
                <div class="col-sm-12">
                    <div class="col-sm-12">
                        @csrf
                        @method('PUT')



                        <div class="form-group my-3">
                            <label for="nombre">
                                <h5>Categoria Bebida</h5>
                            </label>
                            <input type="text" class="form-control my-2 " name="categoriabebida" required maxlength="30"
                          
                                value="{{$categoriabebida->categoria_bebida}}">
                                  <!-- obtenemos el valor que tiene ese registro  -->
                        </div>




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