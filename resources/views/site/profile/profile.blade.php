@extends('site.layouts.master')

@section('title', 'Meu Perfil')

@section('content')

<h1>Meu Perfil</h1>

@include('includes.alerts')

<form class="form" method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">

    {{ csrf_field() }}

    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ auth()->user()->name }}" placeholder="Nome">
    </div> <!-- form-control -->

    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}" placeholder="E-mail">
    </div> <!-- form-control -->

    <div class="form-group">
        <label for="password">Senha</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Senha">
    </div> <!-- form-control -->

    <div class="form-group">
        @if (auth()->user()->image != null)
            <img src="{{ url('storage/users/'.auth()->user()->image) }}" alt="{{ auth()->user()->name }}" style="max-width: 50px; ">
        @endif

        <label for="image">Imagem:</label>
        <input type="file" class="form-control" id="image" name="image">
    </div> <!-- form-control -->

    <div class="form-group">
        <button type="submit" class="btn btn-info">Atualizar Perfil</button>
    </div> <!-- form-control --<


</form> <!-- form -->

@endsection