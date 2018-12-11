@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Profissional</title>
  </head>
  <body>
    <div class="container">
      <h2>Cadastre seus dados</h2><br/>
      <form method="post" action="{{url('profissional')}}">
        @csrf
         
         <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <input type="hidden" class="form-control" name="id_user" value="{{Auth::id()}}">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Nome">Nome:</label>
            <input type="text" class="form-control" name="nome" required="" value="{{Auth::user()->name}}" disabled="">
          </div>
        </div>


          <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Numero_conselho">Numero conselho:</label>
            <input type="text" class="form-control" name="numero_conselho" required="">
          </div>
        </div>
         
         <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Especializacao">Especialização:</label>
            <input type="text" class="form-control" name="especializacao" required="">
          </div>
        </div>

         <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <lable>Instituições</lable>
                <select name="instituicao">
                  <option value="10">Instituição</option>
                  @foreach($instituicaos as $instituicao)
                    <option value="10">{{$instituicao['nome']}}</option>
                  @endforeach
                </select>
            </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
      <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:-50px; margin-left:560px";>
            <a href="{{action('HomeController@index')}}"><button type="submit"  class="btn btn-danger">Cancelar</button></a>
          </div>
      </div>
    </div>
  
  </body>
</html>

@endsection













