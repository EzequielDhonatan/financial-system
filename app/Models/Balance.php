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
        $totalBefore = $this->amount ? $this->amount : 0;
        $this->amount += number_format($value, 2, '.', '');
        $deposit = $this->save();

        $historic = auth()->user()->historics()->create([
            'type'                      => 'I',
            'amount'                    => $value,
            'total_before'              => $totalBefore,
            'total_after'               => $this->amount,
            'date'                      => date('Ymd'),
        ]);

        if ($deposit && $historic)
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
