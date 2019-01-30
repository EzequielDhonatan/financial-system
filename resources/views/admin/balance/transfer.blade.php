@extends('adminlte::page')

@section('title', 'Nova Transferirência')

@section('content_header')
    <h1>Transferir</h1>

    <div class="breadcrumb">
        <li><a href="">Dashboard</a></li>
        <li><a href="">Saldo</a></li>
        <li><a class="active">Transferir</a></li>
    </div>
@stop

@section('content')
    <div class="box">

        <div class="box-header">
            <h3>Transferir Saldo (Informe o Recebedor)</h3>
        </div> <!-- box-header -->

        <div class="box-body">

            @include('admin.includes.alerts')

            <form class="form" method="POST" action="{{ route('confirm.transfer') }}">

                {!! csrf_field() !!}

                <div class="form-group">
                    <input type="text" class="form-control" name="sender" placeholder="Informações de quem vai receber o saque (Nome ou E-mail)">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Próxima etapa</button>
                </div>

            </form> <!-- form -->

        </div> <!-- box-body -->

    </div> <!-- box -->
@stop