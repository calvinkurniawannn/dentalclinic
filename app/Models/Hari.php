<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hari extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal',
        'jam_id'
    ];

    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }

    public function jam()
    {
        return $this->belongsTo(Jam::class);
    }
}