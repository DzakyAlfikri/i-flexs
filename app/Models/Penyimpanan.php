<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Penyimpanan extends Model
{
    protected $fillable = ['kapasitas'];

    public function variasiIphones(): HasMany
    {
        return $this->hasMany(VariasiIphone::class);
    }
}