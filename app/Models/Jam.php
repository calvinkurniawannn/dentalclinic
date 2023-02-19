<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jam extends Model
{

    protected $fillable = [
        'pukul'
    ];
    use HasFactory;

    public function hari()
    {
        return $this->hasMany(Hari::class);
    }
}