<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plato;
use App\Models\menu;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    
    public function index(Request $request)
    {
        $texto=trim($request->get('texto'));
        $menu=DB::table('menu as me')
                 ->select('me.id','ca.nombre','pl.plato','pl.precio','me.cantidadinicial','me.stock')
                 ->join('platos as pl','pl.id','=','me.plato')
                 ->join('categorias as ca','ca.id','=','pl.id_categoria')
                 ->where('pl.plato','LIKE','%'.$texto.'%')
                 ->orWhere('pl.precio','LIKE','%'.$texto.'%')
                ->paginate(7);
        return view('menu.index',compact('menu','texto'));
    }

    
    public function create()
    {
        $plato=Plato::get();
        return view('menu.create',compact('plato'));
    }

   
    public function store(Request $request)
    {
        $menu = new menu; 

        $menu->plato=$request->cbo_plato;
        $menu->cantidadinicial=$request->input('cantidad');
        $menu->stock=$request->input('stock');
       

        $menu->save();
      
        return redirect()->route('menu.index')->with('mensaje','Menu Registrado correctamente');
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $menu=menu::findOrFail($id);
        $plato=Plato::get();
        // return $plato;
        return view('menu.edit',compact('menu','plato'));
    }

    
    public function update(Request $request, $id)
    {
        $menu=menu::findOrFail($id);
        $menu->plato=$request->cbo_plato;
        $menu->cantidadinicial=$request->input('cantidad');
        $menu->stock=$request->input('stock');
      

        $menu->save();

        return redirect()->route('menu.index')->with('mensaje','Menu Editado correctamente');
    }

   
    public function destroy($id)
    {
        $menu=menu::findOrFail($id);
        $menu->delete();
        return redirect()->route('menu.index')->with('mensaje','Menu eliminado correctamente');
        
    }
}
