<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BalanceController extends Controller
{
    public function index()
    {
        $balance = auth()->user()->balance; # RECEBE O SALDO
        $amout = $balance ? $balance->amount : 0; # VERIFICA O SALDO

        return view('admin.balance.index', compact('amout'));
    }
}
