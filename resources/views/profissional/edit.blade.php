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
      <form method="post" action="{{action('ProfissionalController@update', $id)}}">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Nome">Nome:</label>
            <input type="text" class="form-control" name="nome" required="" value="{{Auth::name}}">
          </div>
        </div>

         <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <input type="hidden" class="form-control" name="id_user" value="{{Auth::id()}}">
          </div>
        </div>

          <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Numero_conselho">Numero conselho:</label>
            <input type="text" class="form-control" name="numero_conselho"  value="{{$profissional->numero_conselho}}">
          </div>
        </div>
         
         <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Especializacao">Especialização:</label>
            <input type="text" class="form-control" name="especializacao" value="{{$profissional->especializacao}}">
          </div>
        </div>

         <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Instituicao">Instituição:</label>
            <input type="text" class="form-control" name="instituicao" value="{{$profissional->instituicao}}">
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