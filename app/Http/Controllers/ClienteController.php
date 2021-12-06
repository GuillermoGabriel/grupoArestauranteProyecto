<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    public function index(Request $request)
    {
        $texto=trim($request->get('texto'));
        $cliente=DB::table('cliente as cl')
                 ->select('cl.id','cl.nombre','cl.apellido_pat','cl.apellido_mat','cl.dni','cl.direccion','cl.celular')
                 ->where('cl.nombre','LIKE','%'.$texto.'%')
                 ->orWhere('cl.apellido_pat','LIKE','%'.$texto.'%')
                 ->orWhere('cl.dni','LIKE','%'.$texto.'%')
                 ->paginate(10);

                 

        return view('cliente.index',compact('cliente','texto'));
    }

    public function create()
    {
        $cliente=Cliente::get();
        return view('cliente.create',compact('cliente'));
    }

    public function store(Request $request)
    {
        $cliente = new Cliente; 
        $cliente->nombre=$request->input('nombre');
        $cliente->apellido_pat=$request->input('apellidopat');
        $cliente->apellido_mat=$request->input('apellidomat');
        $cliente->dni=$request->input('dni');
        $cliente->direccion=$request->input('direccion');
        $cliente->celular=$request->input('celular');

        $cliente->save();
      
        return redirect()->route('clientes.index')->with('mensaje','Cliente Registrado correctamente');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $cliente=Cliente::findOrFail($id);
        
        return view('cliente.edit',compact('cliente'));
    }

    public function update(Request $request, $id)
    {
        $cliente=Cliente::findOrFail($id);
        $cliente->nombre=$request->input('nombre');
        $cliente->apellido_pat=$request->input('apellidopat');
        $cliente->apellido_mat=$request->input('apellidomat');
        $cliente->dni=$request->input('dni');
        $cliente->direccion=$request->input('direccion');
        $cliente->celular=$request->input('celular');

        $cliente->save();
      
        return redirect()->route('clientes.index')->with('mensaje','Cliente Editado correctamente');
    }

    public function destroy($id)
    {
        $clientes=Cliente::findOrFail($id);
        $clientes->delete();
        return redirect()->route('clientes.index')->with('mensaje','Cliente eliminado correctamente');
    }
}
