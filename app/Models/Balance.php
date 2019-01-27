<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Balance extends Model
{
    // private $table = 'balance';
    public $timestamps = false;

    public function deposit(float $value) : Array
    {
        $this->amount += number_format($value, 2, '.', '');
        $deposit = $this->save();

        if ($deposit)
            return [
                'success' => true,
                'message' => 'Sucesso ao recarregar'
            ];

        return [
            'success' => false,
            'message' => 'Falha ao carregar'
        ];
    }
}
