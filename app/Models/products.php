<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function keranjangs()
    {
        return $this->belongsTo(Keranjangs::class);
    }
}
