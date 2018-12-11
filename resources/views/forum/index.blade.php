@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Forum mundo azul</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <a href="{{url('forum/create')}}" class="btn btn-warning">Publicar</a>
    <a href="{{url('profissional')}}" class="btn btn-warning">Profissionais</a>
    <a href="{{url('responsavel')}}" class="btn btn-warning">Responsáveis</a>
    <a href="{{url('instituicao')}}" class="btn btn-warning">Instituições</a>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Publicação</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($forum as $forum)
      <tr>
        <td>{{$forum['nome']}}</td>
        <td> <a href="#">{{$forum['publicacao']}}</a></td>
        <td><a href="{{action('ForumController@edit', $forum['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('ForumController@destroy', $forum['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit" onclick="return confirm('Deseja excluir?')" >Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>
@endsection
