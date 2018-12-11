<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponsavelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $responsavel = \App\Responsavel::all();
        return view('responsavel/index', compact('responsavel'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('responsavel/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $responsavel = new \App\Responsavel;
        $responsavel->nome = $request->get('nome');
        $responsavel->cpf = $request->get('cpf');
        $responsavel->idade = $request->get('idade');
        $responsavel->save();

        return redirect('responsavel')->with('success','Responsavel Cadastrado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $responsavel = \App\Responsavel::find($id);
        return view('responsavel/edit', compact('responsavel', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $responsavel = \App\Responsavel::find($id);
        $responsavel->nome = $request->get('nome');
        $responsavel->cpf = $request->get('cpf');
        $responsavel->idade = $request->get('idade');
        $responsavel->save();

        return redirect('responsavel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $responsavel = \App\Responsavel::find($id);
        $responsavel->delete();
        return redirect('responsavel')->with('success', 'Responsavel Deletado');
    }
}
