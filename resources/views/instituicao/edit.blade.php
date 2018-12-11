@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Editar dados</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script  data-src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
  </head>
  <body>
    <div class="container">
      <h2>Editar candidato</h2><br/>
      <form method="post" action="{{action('InstituicaoController@update', $id)}}">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Nome">Nome:</label>
            <input type="text" class="form-control" name="nome" value="{{$instituicao->nome}}">
          </div>
        </div>


          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Lugar">Cep:</label>
              <input type="text" class="form-control" name="lugar" required="" value="{{$instituicao->cep}}">
            </div>
          </div>

          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Cidade">Cidade:</label>
              <input type="text" class="form-control" name="cidade" required="" value="{{$instituicao->cidade}}">
            </div>
          </div>

          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Bairro">Bairro:</label>
              <input type="text" class="form-control" name="bairro" required="" value="{{$instituicao->bairro}}">
            </div>
          </div>

          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Uf">UF:</label>
              <input type="text" class="form-control" name="uf" required="" value="{{$instituicao->uf}}">
            </div>
          </div>


      
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
  
  </body>
</html>
@endsection