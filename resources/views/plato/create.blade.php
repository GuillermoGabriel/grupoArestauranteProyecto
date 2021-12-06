@extends('layout.core')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Nuevo Plato</h1>
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
                <h3 class="card-title">Nuevo Plato</h3>
            </div>
            <form action="{{route('platos.store')}}" method="post">

                @csrf
                <div class="col-sm-12">
                    <div class="col-sm-12">
                        <!-- <div class="for-group">

                            <label for="categoria">Categoria</label>
                            <input type="text" class="form-control" name="categoria" required >
                        </div> -->
                        <div class="form-group my-2">
                            <label class="my-2" for="nombre">
                                <h5>Categoria Plato (*)</h5>
                            </label>
                            <select class="form-control custom-select" name="cbo_categoria" required>
                                <option value="">Seleccione</option>
                                @foreach($categorias as $categoria)
                                <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>

                                @endforeach
                            </select>

                        </div>
                        <div class="form-group my-3 ">

                            <label for="plato">
                                <h5>Plato</h5>
                            </label>
                            <input type="text" class="form-control" name="plato" required>
                        </div>
                        <div class="form-group my-1">

                            <label for="descripcion">
                                <h5>Descripcion</h5>
                            </label>
                            <input type="text" class="form-control my-1" name="descripcion" required>
                        </div>
                        <div class="form-group my-3">

                            <label for="precio">
                                <h5>Precio</h5>
                            </label>

                            <input type="text" class="form-control my-1" name="precio" required>

                        </div>

                        <div class="form-group my-3">

                            <a href="javascript:history.back()" class="btn btn-danger"><i class="fas fa-reply"></i>
                                Cancelar</a>
                            <input  type="submit" class="btn btn-success" value="Guardar"> 


                            <!-- <div class="input-group mb-3">
                                    <div class="input-group mb-3"> -->



                        </div>
            </form>
        </div>
        <!-- /.card -->


    </div>

</div>
@endsection