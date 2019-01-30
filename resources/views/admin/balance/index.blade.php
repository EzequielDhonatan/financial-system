@extends('adminlte::page')

@section('title', 'Saldo')

@section('content_header')
    <h1>Saldo</h1>

    <div class="breadcrumb">
        <li><a href="">Dashboard</a></li>
        <li><a href="">Saldo</a></li>
    </div>
@stop

@section('content')
    <div class="box">

        <div class="box-header">
                
            <a href="{{ route('balance.deposit') }}" class="btn btn-success">
                <i class="fa fa-cart-plus" aria-hidden="true">
                    Recarregar
                </i>
            </a>

            @if ($amout > 0)
                <a href="{{ route('balance.withdraw') }}" class="btn btn-danger">
                    <i class="fa fa-cart-arrow-down" aria-hidden="true">
                        Sacar
                    </i>
                </a>

                <a href="{{ route('balance.transfer') }}" class="btn btn-info">
                    <i class="fa fa-exchange" aria-hidden="true">
                        Transferir
                    </i>
                </a>
            @endif

        </div> <!-- box-header -->

        <div class="box-body">

            @include('admin.includes.alerts')

            <div class="small-box bg-green">

                <div class="inner">
                    <h3>R${{ number_format($amout, 2, ',', '.') }}</h3>
                </div>

                <div class="icon">
                    <i class="ion ion-cash"></i>
                </div>

                <a href="#" class="small-box-footer">Histórico<i class="fa fa-arrow-circle-right"></i></a>

            </div> <!-- small-box bg-green -->
            
        </div> <!-- box-body -->

    </div> <!-- box -->
@stop