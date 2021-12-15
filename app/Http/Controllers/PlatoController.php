<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plato;
use App\Models\categoria;
use Illuminate\Support\Facades\DB;
class PlatoController extends Controller
{
  
    public function index(Request $request)
    {
        $textos=trim($request->get('textos'));
        $platos=DB::table('platos as pl')
                 ->select('pl.id','ca.nombre','pl.plato','pl.descripcion','pl.precio')
                 ->join('categorias as ca','ca.id','=','pl.id_categoria')
                 ->where('pl.plato','LIKE','%'.$textos.'%')
                 ->orWhere('ca.nombre','LIKE','%'.$textos.'%')
                ->paginate(5);
        return view('plato.index',compact('platos','textos'));
    }

 
    public function create()
    {
        $categorias=Categoria::get();
        return view('plato.create',compact('categorias'));
    }

    public function store(Request $request)
    {
        $platos = new Plato; 

        $platos->id_categoria=$request->cbo_categoria;
        $platos->plato=$request->input('plato');
        $platos->descripcion=$request->input('descripcion');
        $platos->precio=$request->input('precio');

        $platos->save();
      
        return redirect()->route('platos.index')->with('mensaje','Plato Registrado correctamente');

    }
   

 
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $plato=Plato::findOrFail($id);
        $categorias=Categoria::get();
        // return $plato;
        return view('plato.edit',compact('plato','categorias'));
    }

    
    public function update(Request $request, $id)
    {
        $plato=Plato::findOrFail($id);
        $plato->id_categoria=$request->cbo_categoria;
        $plato->plato=$request->input('plato');
        $plato->descripcion=$request->input('descripcion');
        $plato->precio=$request->input('precio');

        $plato->save();

        return redirect()->route('platos.index')->with('mensaje','Plato Editado correctamente');
    }

    public function destroy($id)
    {
        $plato=Plato::findOrFail($id);

        $plato->delete();
        
        return redirect()->route('platos.index')->with('mensaje','Plato eliminado correctamente');
        

    }
}
