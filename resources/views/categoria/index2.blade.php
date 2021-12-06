<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>




    <div class="container">
        <div class="alert alert-success shadow p-3 mb-3  rounded "   role="alert">
            <h4> <p> Categorias Menu</p></h4>
        </div>
     
        
@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible my-2" role="alert">
{{Session::get('mensaje')}}
<button type="button" class="close" data-dismiss="alert" aria-label="close">
    <span aria-hidden="true">&times;</span>
</button>
</div>
@endif

        <div class="row">
    
            <div class="col-xl-12">
                <form action="{{route('categoria.index')}}" method="get">
                    <div class="form-row">
                        <!-- <div class="col-sm-4 my-1">
                            
                            <input type="text" class="form-control" name="texto" velue="{{$texto}}">
                            
                        </div>
                        
                        <div class="col-auto my-1 ">

                            <input type="submit" class="btn btn-primary" value="Buscar">

                        </div> -->
                        <div class="col-sm-12 my-1">
                            <form class="form-search">
                                <div class="input-group">
                                    <input class="form-control form-text my-1" placeholder="Buscar categoria" size="15" name="texto" velue="{{$texto}}">
                                    <span class="input-group-btn my-1"><button class="btn btn-primary" value="Buscar"><i class="my-1" aria-hidden="true">BUSCAR</i></button></span>
                                </div>
                            </form>
                        </div>
                        <div class="col-auto my-1">
                        <a href="{{route('categoria.create')}}" class="btn btn-success">Nueva Categoria</a>
                        </div>
                    </div>
                        
                    </div>
                </form>
                

            <div class="col-xl-12">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered my-4 ">
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
                                    

                                    
                                
                                    
                                    
                                    <td><center> <a href="{{route('categoria.edit',$categorias->id)}}" class="btn btn-outline-warning btn-sm" > Editar </a>
                                  
                                    <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#modal-delete-{{$categorias->id}}">
                                        Eliminar
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
                    
                    <a href="{{route('platos.index')}}" class="btn btn-primary btn-sm" > PLATOS </a>
                    <a href="{{route('bebidas.index')}}" class="btn btn-primary btn-sm" > BEBIDAS </a>
                    <a href="{{route('clientes.index')}}" class="btn btn-primary btn-sm" > Clientes </a>
                                  
            

                </div>


            </div>

        </di>


    </div>

    
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
</html>