<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Carbon\Carbon;

class Historic extends Model
{
    protected $fillable = [
        'type', 'amount', 'total_before', 'total_after', 'user_id_transaction', 'date'
    ];

    public function type($type = null)
    {
        $types = [
            'I' => 'Entrada',
            'O' => 'Saque',
            'T' => 'Transferência',
        ];

        if (!$type)
            return $types;

        if ($this->user_id_transaction != null && $type = 'I')
            return 'Recebido';

        return $types[$type];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function userSender()
    {
        return $this->belongsTo(User::class, 'user_id_transaction');
    }

    public function getDateAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y');
    }

    public function search(Array $data, $totalPage)
    {
        $historics = $this->where(function($query) use ($data) {
            if (isset($data['id']))
                $query->where('id', $data['id']);

            if (isset($data['date']))
                $query->where('date', $data['date']);

            if (isset($data['type']))
                $query->where('type', $data['type']);
        })//->toSql(); dd($historics);
        ->paginate($totalPage);

        return $historics;
    }
}
