@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
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
    <a href="{{url('eventos/create')}}" class="btn btn-warning">Cadastrar Evento</a>
    <a href="{{url('responsavels')}}" class="btn btn-warning">Responsáveis</a>
    <a href="{{url('/')}}" class="btn btn-warning">Voltar</a>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Lugar</th>
        <th>Hora</th>
        <th>Quantidade de membros</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($eventos as $evento)
      <tr>
        <td>{{$evento['nome']}}</td>
        <td>{{$evento['local']}}</td>
        <td>{{$evento['hora']}}</td>
        <td>{{$evento['quantidade']}}</td>
        <td><a href="{{action('EventoController@edit', $evento['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('EventoController@destroy', $evento['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
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
