@extends('adminlte::page')

@section('title', 'Confirmar Transferência Saldo')

@section('content_header')
    <h1>Confirmar Transferência</h1>

    <div class="breadcrumb">
        <li><a href="">Dashboard</a></li>
        <li><a href="">Saldo</a></li>
        <li><a href="">Transferir</a></li>
        <li><a class="active"><li><a class="active">Confirmação</a></li></a></li>
    </div>
@stop

@section('content')
    <div class="box">

        <div class="box-header">
            <h3>Confirmar Transferência Saldo</h3>
        </div> <!-- box-header -->

        <div class="box-body">

            @include('admin.includes.alerts')

            <p><strong>Recebedor: </strong>{{ $sender->name }}</p>
            <p><strong>Seu Saldo Atual: </strong>R${{ number_format($balance->amount, 2, ',', '') }}</p>

            <form class="form" method="POST" action="{{ route('transfer.store') }}">

                {!! csrf_field() !!}

                <input type="hidden" class="form-control" name="sender_id" value="{{ $sender->id }}">

                <div class="form-group">
                    <input type="text" class="form-control" name="value" placeholder="Valor:">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Transferir</button>
                </div>

            </form> <!-- form -->

        </div> <!-- box-body -->

    </div> <!-- box -->
@stop