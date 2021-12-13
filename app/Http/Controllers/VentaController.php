<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plato;
use App\Models\menu;
use App\Models\venta;
use App\Models\Bebida;
use App\Models\cliente;
use Illuminate\Support\Facades\DB;

class VentaController extends Controller
{

    public function index(Request $request)
    {
            $texto=trim($request->get('texto'));
            $venta=DB::table('venta as ve')
                     ->select('ve.id','cl.nombre','pl.plato','pl.precio','ve.cantidad_menu','me.stock','be.bebida','be.precio_bebida','ve.cantidad_bebida','ve.pago','fecharegistro')
                     ->join('cliente as cl','cl.id','=','ve.cliente')
                     ->join('menu as me','me.id','=','ve.menu')
                     ->join('platos as pl','pl.id','=','me.plato')
                    //  ->join('categorias as ca','ca.id','=','pl.id_categoria')
                     ->leftjoin('bebidas as be','be.id','=','ve.bebida')

                     ->where('me.plato','LIKE','%'.$texto.'%')
                     ->orwhere('cl.nombre','LIKE','%'.$texto.'%')
                     ->orwhere('be.bebida','LIKE','%'.$texto.'%')
                     ->orderby('ve.id','desc')
                     ->paginate(5);

            
                            
                           
            return view('venta.index',compact('venta','texto'));
        
    }

    public function create()
    {
    
        $bebida=bebida::get();
        $menu=menu::get();
        $cliente=cliente::get();
    


    

        return view('venta.create',compact('bebida','menu','cliente'));
    }

    
    public function store(Request $request)
    {
        $venta = new Venta; 
      
        $venta->cliente=$request->cbo_cliente;
        $venta->menu=$request->cbo_menu;
        $venta->bebida=$request->cbo_bebida;

        $venta->cantidad_bebida=$request->input('cantidadbebida');
        $venta->cantidad_menu=$request->input('cantidadmenu');
        $venta->pago=$request->input('paga');

        $venta->fecharegistro=$request->input('fecha');


        

        $venta->save();
      
        return redirect()->route('registrarventa.index')->with('mensaje','venta Registrado correctamente');
    }
   
    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $venta=Venta::findOrFail($id);
        $bebida=bebida::get();
        $menu=menu::get();
        $cliente=cliente::get();
       
        return view('venta.edit',compact('venta','bebida','menu','cliente'));
    }

    public function update(Request $request, $id)
    {
        $venta=Venta::findOrFail($id);

        
        $venta->cliente=$request->cbo_cliente;
        $venta->menu=$request->cbo_menu;
        $venta->bebida=$request->cbo_bebida;

        $venta->cantidad_bebida=$request->input('cantidadbebida');
        $venta->cantidad_menu=$request->input('cantidadmenu');
        $venta->pago=$request->input('paga');

        $venta->fecharegistro=$request->input('fecha');

        $venta->save();
      
        return redirect()->route('registrarventa.index')->with('mensaje','venta Editada correctamente');
    }

    
    public function destroy($id)
    {
        $venta=Venta::findOrFail($id);
        $venta->delete();
        return redirect()->route('registrarventa.index')->with('mensaje','Venta eliminada correctamente');
    }
}
