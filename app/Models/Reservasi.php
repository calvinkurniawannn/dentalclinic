<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'status'
    // ];

    // protected $guarded = ['id','user_id','layanan_id','hari_id', 'created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function layanan()
    {
        return $this->belongsTo(Layanan::class);
    }
    public function hari()
    {
        return $this->belongsTo(Hari::class);
    }
}