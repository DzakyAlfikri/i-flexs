<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Iphone extends Model
{
    protected $fillable = [
        'kategori_id',
        'nama',
        'deskripsi',
        'gambar'
    ];

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class);
    }

    public function variasiIphones(): HasMany
    {
        return $this->hasMany(VariasiIphone::class);
    }
}