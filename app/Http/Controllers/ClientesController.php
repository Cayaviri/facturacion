<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use App\Models\Documentos;
use App\Models\Estadocivil;
use App\Models\Sexo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientesController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('clientes.clientes_index', ["clientes" => Clientes::all()->take(20)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.clientes_create', ["documentos" => Documentos::all(), "estadosciviles" => Estadocivil::all(), "sexos" => Sexo::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request["cliUsuario"] = Auth::user()->id;


        Clientes::create($request->all());
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('clientes.clientes_edit', ["cliente" => Clientes::find($id), "documentos" => Documentos::all(), "estadosciviles" => Estadocivil::all(), "sexos" => Sexo::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request["cliUsuario"] = Auth::user()->id;

        $cliente = Clientes::find($id);
        $cliente->update($request->all());
        return $this->index();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Clientes::find($id);
        $cliente->delete();
        return $this->index();
    }
}
