@extends('layout.core')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Nuevo Cliente</h1>
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
                <h3 class="card-title">Nuevo Cliente</h3>
            </div>
            <form action="{{route('clientes.store')}}" method="post">
                <div class="col-sm-12">
                    <div class="col-sm-12">
                        @csrf

                        <div class="form-group my-3 ">

                            <label for="nombre">
                                <h5>Nombre</h5>
                            </label>
                            <input type="text" class="form-control" name="nombre" required>
                        </div>
                        <div class="form-group my-3 ">

                            <label for="apellidopat">
                                <h5>Apellido Paterno</h5>
                            </label>
                            <input type="text" class="form-control" name="apellidopat" required>
                        </div>
                        <div class="form-group my-3 ">

                            <label for="apellidomat">
                                <h5>Apellido Materno</h5>
                            </label>
                            <input type="text" class="form-control" name="apellidomat" required>
                        </div>
                        <div class="form-group my-1">

                            <label for="dni">
                                <h5>Dni</h5>
                            </label>
                            <input type="number" class="cliente form-control my-1"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                name="dni" required maxlength="8">
                        </div>
                        <div class="form-group my-3">

                            <label for="direccion">
                                <h5>Direccion</h5>
                            </label>

                            <input type="text" class="form-control my-1" name="direccion" required>

                        </div>
                        <div class="form-group my-3">

                            <label for="celular">
                                <h5>Celular</h5>
                            </label>

                            <input type="number" class="form-control my-1"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                name="celular" required maxlength="9">

                        </div>

                        <div class="form-group my-3">

                        <a href="javascript:history.back()" class="btn btn-danger"> <i class="fas fa-reply"></i>  Cancelar</a>

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