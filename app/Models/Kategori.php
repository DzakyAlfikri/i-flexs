<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kategori extends Model
{
    protected $fillable = ['nama'];

    public function iphones(): HasMany
    {
        return $this->hasMany(Iphone::class);
    }
}