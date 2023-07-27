<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keranjangs extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function products()
    {
        return $this->belongsTo(Products::class);
    }

    public function pesanans()
    {
        return $this->hasMany(Pesanans::class);
    }
}
