<?php

namespace App\Http\Controllers;

use Auth;
use Instituicao;

use Illuminate\Http\Request;

class ProfissionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profissional = \App\Profissional::all();
        return view('profissional/index', compact('profissional'));
    }

    public function forum($id){
        $profissional = \App\Profissional::find($id);
        return view('forum', compact('profissional','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $instituicaos = \App\Instituicao::all();
        return view('profissional/create', compact('instituicaos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $user = \App\User::find(Auth::id());
        $user->tipo = 1;
        $user->save();

        $profissional = new \App\Profissional;
        $profissional->id_user = $request->get('id_user');
        $profissional->numero_conselho = $request->get('numero_conselho');
        $profissional->especializacao = $request->get('especializacao');
        $profissional->instituicao = $request->get('instituicao');
        $profissional->save();

        return redirect('profissional')->with('success', 'Profissional Cadastrado');
    }

    /**
     * Display the specified resource.
     *
     * @param  
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profissional = \App\Profissional::find($id);
        return view('profissional/edit', compact('profissional', 'id'));
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
        $profissional = \App\Profissional::find($id);
        $profissional->id_user = $request->get('id_user');
        $profissional->nome = $request->get('nome');
        $profissional->numero_conselho = $request->get('numero_conselho');
        $profissional->especializacao = $request->get('especializacao');
        $profissional->instituicao = $request->get('instituicao');
        $profissional->save();

        return redirect('profissional');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profissional = \App\Profissional::find($id);
        $profissional->delete();
        return redirect('profissional')->with('success', 'Profissional Apagado');
    }

}
