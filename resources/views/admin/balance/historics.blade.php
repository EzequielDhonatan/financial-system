@extends('adminlte::page')

@section('title', 'Histórico de Movimentações')

@section('content_header')
    <h1>Histórico de Movimentações</h1>

    <div class="breadcrumb">
        <li><a href="">Dashboard</a></li>
        <li><a href="">Saldo</a></li>
        <li><a class="active">Histórico</a></li>
    </div>
@stop

@section('content')
    <div class="box">

        <div class="box-header">

        </div> <!-- box-header -->

        <div class="box-body">
            
            <table class="table table-bordered table-hover">

                <thead>
                    <tr>
                        <th>#</th>
                        <th>Valor</th>
                        <th>Tipo</th>
                        <th>Data</th>
                        <th>?Sender?</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($historics as $historic)
                        <tr>
                            <td>{{ $historic->id }}</td>
                            <td>R${{ number_format($historic->amount, 2, ',', '.') }}</td>
                            <td>{{ $historic->type }}</td>
                            <td>{{ $historic->date }}</td>
                            <td>{{ $historic->user_id_transaction }}</td>
                        </tr>
                        @empty
                        
                    @endforelse

                </tbody>

            </table> <! table -->

        </div> <!-- box-body -->

    </div> <!-- box -->
@stop