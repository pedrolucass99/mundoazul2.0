@extends('layouts.meulayout')

@section('content')
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
    .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 300px;
    margin: auto;
    text-align: center;
}

.title {
    color: grey;
    font-size: 18px;
}

button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
}

a {
    text-decoration: none;
    font-size: 22px;
    color: black;
}

button:hover, a:hover {
    opacity: 0.7;
}
#teste{
    width: 200px;
    height: 200px;
}
</style>
</head>
<div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-8" id="tudo">
            <div class="card">
                <div class="card-header">Seja Bem-vindo, {{ Auth::user()->name }}!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Auth::user()->tipo == 0)
                        <a href="{{url('responsavel/create')}}" class="btn btn-primary">Sou Responsável</a>
                        <a href="{{url('instituicao/create')}}" class="btn btn-primary" style="margin-left: 135px">Instituição</a>
                        <a href="{{url('profissional/create')}}" class="btn btn-success" style="margin-left: 150px">Sou Profissional</a>
                    @endif


                    @if(Auth::user()->tipo == 2)
                        <a href="{{url('responsavel')}}" class="btn btn-primary">Sou Profissional</a>
                    @endif

                    @if(Auth::user()->tipo == 3)
                        <a href="{{url('responsavel')}}" class="btn btn-primary">Instituição</a>
                    @endif
                    
                    

                </div>
            </div>
        </div>
                    @if(Auth::user()->tipo == 1)
                        
                        <div class="card" id="teste">
                          <div class="card-header">Seu perfil profissional, {{ Auth::user()->name }}</div>
                          <div class="card-body">
                            <p class="title"></p>
                            <a href="#"><i class="fa fa-dribbble"></i></a> 
                            <a href="#"><i class="fa fa-twitter"></i></a> 
                            <a href="#"><i class="fa fa-linkedin"></i></a> 
                            <a href="#"><i class="fa fa-facebook"></i></a> 
                            <p><button>Contact</button></p>
                          </div>
                        </div>

                    @endif
    </div>
</div>
@endsection
