@extends('layout.core')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Nuevo Menu</h1>
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
                <h3 class="card-title">Nuevo Menu</h3>
            </div>
            <form action="{{route('menu.store')}}" method="post">
                <div class="col-sm-12">
                    <div class="col-sm-12">
                        @csrf


                        <div class="form-group my-2">
                            <label class="my-2" for="nombre">
                                <h5>Plato (*)</h5>
                            </label>
                            <select class="form-control custom-select" name="cbo_plato" required>
                                <option value="">Seleccione</option>
                                @foreach($plato as $platos)
                                <option value="{{$platos->id}}">{{$platos->plato}}</option>

                                @endforeach
                            </select>

                        </div>


                        <div class="form-group my-3 ">

                            <label for="cantidad">
                                <h5>Cantidad Inicial</h5>
                            </label>
                            <input type="number" class="form-control" name="cantidad" required>
                        </div>
                        <div class="form-group my-3 ">

                            <label for="stock">
                                <h5>Stock</h5>
                            </label>
                            <input type="number" class="form-control" name="stock" required>
                        </div>


                        <div class="form-group my-3">

                            <a href="javascript:history.back()" class="btn btn-danger"> <i class="fas fa-reply"></i>
                                Cancelar</a>
                            <input type="submit" class="btn btn-success" value="Guardar">


                            <!-- <div class="input-group mb-3">
                                    <div class="input-group mb-3"> -->



                        </div>
            </form>
        </div>
        <!-- /.card -->


    </div>

</div>
@endsection