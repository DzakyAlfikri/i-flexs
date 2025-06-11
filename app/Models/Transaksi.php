<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaksi extends Model
{
    protected $fillable = [
        'user_id',
        'variasi_iphone_id',
        'tanggal_mulai',
        'durasi_hari',
        'total_harga',
        'status',
        'jaminan',
        'metode_pengambilan'
    ];

    protected $casts = [
        'tanggal_mulai' => 'date',
        'total_harga' => 'decimal:2'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function variasiIphone(): BelongsTo
    {
        return $this->belongsTo(VariasiIphone::class);
    }
}