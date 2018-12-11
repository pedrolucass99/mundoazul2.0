<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forum = \App\Forum::all();
        return view('forum/index', compact('forum'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forum/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $forum = new \App\Forum;
        $forum->nome = $request->get('nome');
        $forum->publicacao = $request->get('publicacao');
        $forum->descricao = $request->get('descricao');
        $forum->save();

        return redirect('forum')->with('success', 'Publicacao Cadastrada');
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
        $forum = \App\Forum::find($id);
        return view('forum/edit', compact('forum', 'id'));
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
        $forum = \App\Forum::find($id);
        $forum->nome = $request->get('nome');
        $forum->publicacao = $request->get('publicacao');
        $forum->descricao = $request->get('descricao');
        $forum->save();

        return redirect('forum');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $forum = \App\Forum::find($id);
        $forum->delete();
        return redirect('forum');
    }
}
