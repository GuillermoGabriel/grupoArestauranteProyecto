<!-- Modal -->
<div class="modal fade" id="modal-delete-{{$bebidacategorias->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">

  <form action="{{route('categoriabebida.destroy',$bebidacategorias->id)}}" method="post">
  @csrf
  @method('DELETE')
  

    <div class="modal-content">
      <div class="modal-header ">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Deseas eliminar la Categoria Bebida <h7><b class="text-uppercase text-danger"> {{$bebidacategorias->categoria_bebida}} </b></h7>
      </div>
      <div class="modal-footer h-5">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cerrar</button>

        <input type="submit" class="btn btn-danger btn-sm " value="eliminar">
  
      </div>
    </div>
</form>
  </div>
</div>