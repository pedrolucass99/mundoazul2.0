<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstituicaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instituicao = \App\Instituicao::all();
        return view('instituicao/index', compact('instituicao'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('instituicao/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $instituicao = new \App\Instituicao;
        $instituicao->nome = $request->get('nome');
        $instituicao->cep = $request->get('cep');
        $instituicao->rua = $request->get('rua');
        $instituicao->bairro = $request->get('bairro');
        $instituicao->cidade = $request->get('cidade');
        $instituicao->uf = $request->get('uf');
        $instituicao->save();

        return redirect('instituicao');
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
        $instituicao = \App\Instituicao::find($id);
        return view('instituicao/edit', compact('instituicao', 'id'));
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
        $instituicao = \App\Instituicao::find($id);
        $instituicao->nome = $request->get('nome');
        $instituicao->cep = $request->get('cep');
        $instituicao->cep = $request->get('cidade');
        $instituicao->cep = $request->get('bairro');
        $instituicao->cep = $request->get('uf');
        $instituicao->save();

        return redirect('instituicao');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $instituicao = \App\Instituicao::find($id);
        $instituicao->delete();
        return redirect('instituicao')->with('success', 'Instituição Deletada');
    }
}
