<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Reservasi;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

setlocale(LC_TIME, 'id');

class UserController extends Controller
{
    public function user_home_page()
    {
        return view('home.user.user-home-page');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login_page');
    }

    public function reservasi_saya($id) 
    {
        $user = User::find($id);

        $reservasi = Reservasi::latest()->where('user_id',$user->id)
        ->orderBy('created_at','desc');
        // ->get();


        // dd($reservasi);


        $carbonDate = new Carbon();

        // $formattedDates = collect($paginatedReservasi)->map(function ($item) 
        // {
        //     $date = Carbon::parse($item->hari->tanggal);
        //     $formattedDate = $date->format('l, d F Y');
        //     $item->tanggal = $formattedDate;
        //     return $item;
        // });
            // $createdAt = Carbon::parse($reservasi->created_at)->format('l, d F Y');


        return view('reservasi.jadwal-reservasi',
        [
            "reservasi" => $reservasi->paginate(2)
        ], compact('user','reservasi','carbonDate'));
    }




}