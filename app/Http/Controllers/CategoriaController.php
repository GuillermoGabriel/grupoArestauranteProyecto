<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoria;

use App\Models\estado;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{
  
    public function index(Request $request)
    {
        $texto=trim($request->get('texto'));
        $categoria=DB::table('categorias as ca')
                    ->select('ca.id','ca.nombre','ca.descripcion','es.estado')
                    ->join('estado as es','es.id','=','ca.estado')
                    ->where('ca.nombre','LIKE','%'.$texto.'%')
                    // ->orderBy('ca.nombre','asc')

                

                    ->paginate(5);
                    
        return view('categoria.index',compact('categoria','texto'));
        
    }

   
    public function create()
    {
        $estado=estado::get();
            
        return view('categoria.create',compact('estado'));
    }

    
    public function store(Request $request)
    {
       
        $categoria=new categoria;
        $categoria->nombre=$request->input('nombre');
        
        $categoria->descripcion=$request->input('descripcion');

        $categoria->estado=$request->cbo_estado;
        // $categoria->estado=$request->input('estado');
        $categoria->save();
        return redirect()->route('categoria.index')->with('mensaje','Categoria creada correctamente');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $estado=estado::get();
        $categoria=categoria::findOrFail($id);
        return view('categoria.edit',compact('categoria','estado'));
    }

    public function update(Request $request, $id)
    {
        $categoria=categoria::findOrFail($id);
        $categoria->nombre=$request->input('nombre');
        $categoria->descripcion=$request->input('descripcion');
        // $categoria->estado=$request->input('estado');   
        $categoria->estado=$request->cbo_estado;
        $categoria->save();
        return redirect()->route('categoria.index')->with('mensaje','Categoria Editada correctamente');
    }

     

  
    public function destroy($id)
    {
        $categoria=categoria::findOrFail($id);
        $categoria->delete();
        return redirect()->route('categoria.index')->with('mensaje','Categoria Eliminada correctamente');;
    }
}
  