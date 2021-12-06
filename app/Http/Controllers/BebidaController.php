<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bebida;
use App\Models\CategoriaBebida;
use Illuminate\Support\Facades\DB;
class BebidaController extends Controller
{
   
    public function index(Request $request)
    {
        $texto=trim($request->get('texto'));
        $bebida=DB::table('bebidas as be')
                 ->select('be.id','cb.categoria_bebida','be.bebida','be.descripcion','be.precio')
                 ->join('categoria_bebida as cb','cb.id','=','be.categoria_bebida')
                 ->where('cb.categoria_bebida','LIKE','%'.$texto.'%')
                 ->orWhere('be.bebida','LIKE','%'.$texto.'%')
                 ->orderby('be.id','asc')
                 ->paginate(6);

                 

        return view('bebida.index',compact('bebida','texto'));
   
    }

    public function create()
    {
        $categoriabebida=CategoriaBebida::get();
        return view('bebida.create',compact('categoriabebida'));
    }

  
    public function store(Request $request)
    {
        $bebida = new Bebida; 

        $bebida->categoria_bebida=$request->cbo_Bebida;
        $bebida->bebida=$request->input('bebida');
        $bebida->descripcion=$request->input('descripcion');
        $bebida->precio=$request->input('precio');

        $bebida->save();
      
        return redirect()->route('bebidas.index')->with('mensaje','Bebida Registrada correctamente');
    }

   
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        $bebida=Bebida::findOrFail($id);
        $categoriabebida=CategoriaBebida::get();
       
        return view('bebida.edit',compact('bebida','categoriabebida'));
    }

  
    public function update(Request $request, $id)
    {
        $bebida=Bebida::findOrFail($id);
        $bebida->categoria_bebida=$request->cbo_Bebida;
        $bebida->bebida=$request->input('bebida');
        $bebida->descripcion=$request->input('descripcion');
        $bebida->precio=$request->input('precio');

        $bebida->save();

        return redirect()->route('bebidas.index')->with('mensaje','Bebida Editado correctamente');
    }

    public function destroy($id)
    {
        $bebida=Bebida::findOrFail($id);
        $bebida->delete();
        return redirect()->route('bebidas.index')->with('mensaje','Bebida eliminada correctamente');
    }
}
