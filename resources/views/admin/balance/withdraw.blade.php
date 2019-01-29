@extends('adminlte::page')

@section('title', 'Retirada')

@section('content_header')
    <h1>Fazer Retirada</h1>

    <div class="breadcrumb">
        <li><a href="">Dashboard</a></li>
        <li><a href="">Saldo</a></li>
        <li><a class="active">Retirada</a></li>
    </div>
@stop

@section('content')
    <div class="box">

        <div class="box-header">
            <h3>Fazer Retirada</h3>
        </div> <!-- box-header -->

        <div class="box-body">

            @include('admin.includes.alerts')

            <form class="form" method="POST" action="{{ route('withdraw.store') }}">

                {!! csrf_field() !!}

                <div class="form-group">
                    <input type="text" class="form-control" name="value" placeholder="Valor Retirada">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Sacar</button>
                </div>

            </form> <!-- form -->

        </div> <!-- box-body -->

    </div> <!-- box -->
@stop