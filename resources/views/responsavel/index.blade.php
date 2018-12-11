@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mundo Azul</title>
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
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Nome</th>
        <th>CPF</th>
        <th>idade</th>
      </tr>
    </thead>
    <tbody>
      @foreach($responsavel as $responsavel)
      <tr>
        <td>{{$responsavel['nome']}}</td>
        <td>{{$responsavel['cpf']}}</td>
        <td>{{$responsavel['idade']}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>
@endsection
