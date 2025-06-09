<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class VariasiIphone extends Model
{
    protected $fillable = [
        'iphone_id',
        'warna_id',
        'penyimpanan_id',
        'harga_sewa_per_hari',
        'stok',
        'tersedia'
    ];

    protected $casts = [
        'harga_sewa_per_hari' => 'decimal:2',
        'tersedia' => 'boolean'
    ];

    public function iphone(): BelongsTo
    {
        return $this->belongsTo(Iphone::class);
    }

    public function warna(): BelongsTo
    {
        return $this->belongsTo(Warna::class);
    }

    public function penyimpanan(): BelongsTo
    {
        return $this->belongsTo(Penyimpanan::class);
    }

    public function transaksis(): HasMany
    {
        return $this->hasMany(Transaksi::class);
    }
}