@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Instituiçoẽs Mundo Azul</title>
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
        <th>Rua</th>
        <th>Bairro</th>
        <th>Cidade</th>
        <th>Quantidade de membros</th>
      </tr>
    </thead>
    <tbody>
      @foreach($instituicao as $instituicao)
      <tr>
        <td>{{$instituicao['nome']}}</td>
        <td>{{$instituicao['rua']}}</td>
        <td>{{$instituicao['bairro']}}</td>
        <td>{{$instituicao['cidade']}}</td>
        <td>{{$instituicao['quant_membros']}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>

@endsection