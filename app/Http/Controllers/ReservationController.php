<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Hari;
use App\Models\Layanan;
use App\Models\Reservasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ReservationController extends Controller
{
    public function reservasi_page()
    {
        $layanan = Layanan::orderBy('jenis', 'asc')->get();


        // $tanggal = Hari::orderBy('tanggal','asc')->get()->toArray();
        // $hari = DB::table('haris')->get()->toArray();

        // $formattedDates = collect($hari)->map(function ($item) 
        // {
        //     $date = Carbon::parse($item->tanggal);
        //     $formattedDate = $date->format('l, d F Y');
        //     $item->tanggal = $formattedDate;
        //     return $item;
        // });

        $hari = Hari::orderBy('tanggal','asc')->get();

        $carbonDate = new Carbon();
    
        return view('reservasi.reservasi', compact('layanan','hari','carbonDate'));

    }

    public function reservasi(Request $request)
    {
        $rules =
        [
            'tanggal_reservasi' => 'required',
            'layanan' => 'required',
            'keterangan' => 'max:150',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $reservasi = new Reservasi();
        $reservasi->user_id = Auth::user()->id;
        $reservasi->layanan_id = $request->layanan;
        $reservasi->hari_id = $request->tanggal_reservasi;
        $reservasi->keterangan = $request->keterangan;
        $reservasi->status = 0;

        $reservasi->save();


        return redirect()->back()
        ->with('message','Reservasi mu sudah terkirim. Mohon menunggu 1 x 24 jam untuk hasil reservasinya.');

    }
}