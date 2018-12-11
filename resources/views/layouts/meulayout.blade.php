<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Medilab Free Bootstrap HTML5 Template</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="{{url('/home')}}">Mundo Azul</a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
              <ul class="nav navbar-nav">
              @auth
                            <li><a title="team" href="#about">Forum</a></li>
                            <li><a title="services" href="#services">Serviços</a></li>
                            <li><a href="{{url('instituicao')}}">Instituições</a></li>
                            <li> <a href="{{url('profissional')}}">Profissionais</a></li>
                            <li> <a href="{{url('responsavel')}}">Responsáveis</a></li>
                            <li> <a href="{{url('/home')}}">{{ Auth::user()->name }}</a></li>


                            @else
                            <li><a title="team" href="#about">Forum</a></li>
                            <li><a title="services" href="#services">Serviços</a></li>
                            <li><a href="{{url('instituicao')}}">Instituições</a></li>
                            <li> <a href="{{url('/profissional')}}">Profissionais</a></li>
                            <li> <a href="{{url('/responsavel')}}">Responsáveis</a></li>
                             <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Cadastre-se') }}</a>
                                @endif
                            </li>
                            @endauth
              </ul>
            </div>
          </div>
        </div>
      </nav>

  

          <main class="py-4">
            @yield('content')
        </main>