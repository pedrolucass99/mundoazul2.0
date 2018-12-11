@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mundo Azul</title>
    <script type="text/javascript">
      function _cpf(cpf) {
    cpf = cpf.replace(/[^\d]+/g, '');
    if (cpf == '') return false;
    if (cpf.length != 11 ||
        cpf == "00000000000" ||
        cpf == "11111111111" ||
        cpf == "22222222222" ||
        cpf == "33333333333" ||
        cpf == "44444444444" ||
        cpf == "55555555555" ||
        cpf == "66666666666" ||
        cpf == "77777777777" ||
        cpf == "88888888888" ||
        cpf == "99999999999")
        return false;
    add = 0;
    for (i = 0; i < 9; i++)
        add += parseInt(cpf.charAt(i)) * (10 - i);
    rev = 11 - (add % 11);
    if (rev == 10 || rev == 11)
        rev = 0;
    if (rev != parseInt(cpf.charAt(9)))
        return false;
    add = 0;
    for (i = 0; i < 10; i++)
        add += parseInt(cpf.charAt(i)) * (11 - i);
    rev = 11 - (add % 11);
    if (rev == 10 || rev == 11)
        rev = 0;
    if (rev != parseInt(cpf.charAt(10)))
        return false;
    return true;
}

  function mask(e, id, mask){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>47 && tecla<58)){
        mascara(id, mask);
        return true;
    } 
    else{
        if (tecla==11 || tecla==0){
            mascara(id, mask);
            return true;
        } 
        else  return false;
    }
}
function mascara(id, mask){
    var i = id.value.length;
    var carac = mask.substring(i, i+1);
    var prox_char = mask.substring(i+1, i+2);
    if(i == 0 && carac != '#'){
        insereCaracter(id, carac);
        if(prox_char != '#')insereCaracter(id, prox_char);
    }
    else if(carac != '#'){
        insereCaracter(id, carac);
        if(prox_char != '#')insereCaracter(id, prox_char);
    }
    function insereCaracter(id, char){
        id.value += char;
    }
}



      function validarCPF(el){
      console.log(el.value);
      if( !_cpf(el.value) && el.value != ""){     
        alert("CPF "+ el.value+" inválido!");
     
        // apaga o valor
        el.value = "";
      }
    }  

  function validar(dom,tipo){
    switch(tipo){
        case'num':var regex=/[A-Za-z]/g;break;
        case'text':var regex=/\d/g;break;
    }
    dom.value=dom.value.replace(regex,'');
}
    </script>
  </head>
  <body>
    <div class="container">
      <h2>Criar Responsável</h2><br/>
      <form method="post" action="{{url('responsavel')}}">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Nome">Nome:</label>
            <input type="text" class="form-control" name="nome" required="">
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Cpf">CPF</label>
              <input id="cpf" type="text" class="form-control{{ $errors->has('cpf') ? ' is-invalid' : '' }}" name="cpf" value="{{ old('cpf') }}" onblur="validarCPF(this)" onkeypress="return mask(event,this,'###.###.###-##')" maxlength="14"required autofocus>

                @if ($errors->has('cpf'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('cpf') }}</strong>
                  </span>
                @endif
            </div>
          </div>

          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Idade">Idade</label>
              <input type="text" class="form-control" name="idade" required="">
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










