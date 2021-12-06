@extends('layout.core')

@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Editar Menu</h1>
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
                <h3 class="card-title">Editar Menu</h3>
            </div>
            <form action="{{route('menu.update',$menu->id)}}" method="post">
                @method('PUT')
                <div class="col-sm-12">
                <div class="col-sm-12">
                @csrf
                <!-- <div class="for-group">

                            <label for="categoria">Categoria</label>
                            <input type="text" class="form-control" name="categoria" required >
                        </div> -->

                <div class="form-group my-2">
                    <label class="my-2" for="nombre">
                        <h5>Plato (*)</h5>
                    </label>
                    <select class="form-control custom-select" name="cbo_plato" required value="{{$menu->plato}}">
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
                    <input type="number" class="form-control" name="cantidad" required
                        value="{{$menu->cantidadinicial}}">
                </div>
                <div class="form-group my-3 ">

                    <label for="stock">
                        <h5>Stock</h5>
                    </label>
                    <input type="number" class="form-control" name="stock" required value="{{$menu->stock}}">
                </div>


                <div class="form-group my-3">
                    <input type="submit" class="btn btn-success" value="Guardar">

                    <a href="javascript:history.back()" class="btn btn-primary">Lista Menu</a>
                    <!-- <div class="input-group mb-3">
                                    <div class="input-group mb-3"> -->

            </form>
        </div>
        <!-- /.card -->


    </div>

</div>
@endsection