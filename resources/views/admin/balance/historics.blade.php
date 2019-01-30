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
            
            <form class="form form-inline" method="POST" action="{{ route('historic.search') }}">

                {!! csrf_field() !!}

                <input type="text" class="form-control" name="id" placeholder="ID">
                <input type="date" class="form-control" name="date">

                <select name="type" class="form-control">
                    <option value="">-- Selecione o Tipo --</option>
                    @foreach ($types as $key => $type)
                        <option value="{{ $key }}">{{ $type }}</option>
                    @endforeach
                </select>

                <button type="submit" class="btn btn-primary">Pesquisar</button>
            </form> <!-- form form-inline -->

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
                            <td>{{ $historic->type($historic->type) }}</td>
                            <td>{{ $historic->date }}</td>
                            <td>
                                @if ($historic->user_id_transaction)
                                    {{ $historic->userSender->name }}
                                @else
                                    -
                                @endif
                            </td>
                        </tr>
                        @empty
                        
                    @endforelse

                </tbody>

            </table> <! table -->

            {!! $historics->links() !!}

        </div> <!-- box-body -->

    </div> <!-- box -->
@stop