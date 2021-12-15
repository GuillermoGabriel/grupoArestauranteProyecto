<?php

namespace App\Http\Controllers;

use App\Models\CategoriaBebida;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriBebidaController extends Controller
{
   
    public function index(Request $request)
    {
        $texto=trim($request->get('texto'));
        $bebidacategoria=DB::table('categoria_bebida as cb')
                 ->select('cb.id','cb.categoria_bebida')

                 ->where('cb.categoria_bebida','LIKE','%'.$texto.'%')
                 
                 ->paginate(10);
  

        return view('categoriabebida.index',compact('bebidacategoria','texto'));
    }

  
    public function create()
    {
        return view('categoriabebida.create');
    }

   
    public function store(Request $request)
    {
        $categoriabebida=new CategoriaBebida;
        $categoriabebida->categoria_bebida=$request->input('categoriabebida');
        
     
        $categoriabebida->save();
        return redirect()->route('categoriabebida.index')->with('mensaje','Categoria Bebida creada correctamente');
    }

    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        $categoriabebida=CategoriaBebida::findOrFail($id);
        return view('categoriabebida.edit',compact('categoriabebida'));
    }

  
    public function update(Request $request, $id)
    {
        
        $categoriabebida=CategoriaBebida::findOrFail($id);
        $categoriabebida->categoria_bebida=$request->input('categoriabebida');
        
        $categoriabebida->save();
        return redirect()->route('categoriabebida.index')->with('mensaje','Categoria Bebida Editada correctamente');

    }

  
    public function destroy($id)
    {
        $categoriabebida=CategoriaBebida::findOrFail($id);
        $categoriabebida->delete();
        return redirect()->route('categoriabebida.index')->with('mensaje','Categoria Bebida Eliminada correctamente');;
    }
}
