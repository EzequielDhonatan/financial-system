@extends('adminlte::page')

@section('title', 'Saldo')

@section('content_header')
    <h1>Fazer Recarga</h1>

    <div class="breadcrumb">
        <li><a href="">Dashboard</a></li>
        <li><a href="">Saldo</a></li>
        <li><a class="active">Depositar</a></li>
    </div>
@stop

@section('content')
    <div class="box">

        <div class="box-header">
            <h3>Fazer Recarga</h3>
        </div> <!-- box-header -->

        <div class="box-body">

            @include('admin.includes.alerts')

            <form class="form" method="POST" action="{{ route('deposit.store') }}">

                {!! csrf_field() !!}

                <div class="form-group">
                    <input type="text" class="form-control" name="value" placeholder="Valor Recarga">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Recarregar</button>
                </div>

            </form> <!-- form -->

        </div> <!-- box-body -->

    </div> <!-- box -->
@stop