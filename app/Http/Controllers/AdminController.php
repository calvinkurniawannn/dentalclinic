<?php

namespace App\Http\Controllers;
setlocale(LC_TIME, 'id');

use Carbon\Carbon;
use App\Models\Jam;
use App\Models\Hari;
use App\Models\Reservasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function admin_home_page()
    {

        $carbonDate = new Carbon();
        $reservasi = Reservasi::latest()->orderBy('created_at','desc');

        return view('admin.admin-home-page',
        [
            "reservasi" => $reservasi->paginate(10)
        ]
        ,compact('reservasi','carbonDate'));
    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;

        // $reservasi = DB::table('reservasis')
        // ->join('users','reservasis.user_id' ,'=','users.id')
        // ->join('haris','reservasis.hari_id','=','haris.id')
        // ->where('users.name','LIKE' ,'%'.$keyword.'%' )
        // ->where('haris.tanggal','LIKE' ,'%'.$keyword.'%')
        // ->paginate(10)
        // ->appends(['keyword' => $keyword]);

        $reservasi = Reservasi::
        join('users','reservasis.user_id' ,'=','users.id')
        ->join('haris','reservasis.hari_id','=','haris.id')
        ->where('users.name','LIKE' ,'%'.$keyword.'%')
        ->orWhere('reservasis.keterangan','LIKE' ,'%'.$keyword.'%')
        ->orWhere('haris.tanggal','LIKE' ,'%'.$keyword.'%')
        ->paginate(10)
        ->appends(['keyword' => $keyword]); 

        return view('admin.admin-home-page',compact('reservasi'));
    }

    public function update_page($id)
    {
        $reservasi = Reservasi::find($id);

        return view('admin.update-status-reservasi',compact('reservasi'));
    }

    public function update_status_reservasi(Request $request)
    {
        $reservasi = Reservasi::find($request->reservasi_id);

        $reservasi->status = $request->statusInput;

        if($request->statusInput == 2)
        {
            $reservasi->hari->status = 2;
            $reservasi->hari->save();
        }

        $reservasi->save();

        return redirect()->back()
        ->with('message','Status Reservasi telah berubah');
    }

    public function delete_reservasi($id)
    {
        $reservasi = Reservasi::find($id);
        $reservasi->delete();

        return redirect()->back()
        ->with('message','Reservasi telah dihapus');
    }

    public function tambah_jadwal_reservasi()
    {
        $dataTanggal = Hari::orderBy('created_at','desc')
        ->paginate(10);

        $jam = Jam::all();

        return view('admin.tambah-jadwal-reservasi',compact('dataTanggal','jam'));
    }

    public function tambah_tanggal(Request $request)
    {
        $rules = [
            'tanggal_baru' => 'required',
            'jam_id' => 'required',
        ];
        $validator = Validator::make($request->all(),$rules);

        if($validator -> fails())
        {
            return back()->withErrors($validator);
        }



        $dataExists = Hari::where('tanggal', $request->tanggal_baru)
        ->where('jam_id', $request->jam_id)
        ->exists();

        if ($dataExists) {
            // Return an error response if the user with the same name and email already exists
            return redirect()->back()
            ->with('error','Tanggal yang dipilih sudah ada. Silahkan tambah tanggal lain');
        }
        else{
            Carbon::setLocale('id');
            $date = Carbon::createFromFormat('Y-m-d', $request->input('tanggal_baru'));
            
            $formattedDate = $date->isoFormat('dddd, DD MMMM YYYY');
            // isoFormat('dddd, DD MMMM YYYY')

            Hari::create([
                'tanggal' => $formattedDate,
                'jam_id' => $request->jam_id,
            ]);

        }

        return redirect()->back()
        ->with('message','Tanggal baru berhasil ditambahkan');

    }
    public function tambah_jam(Request $request)
    {
        $rules = [
            'pukul_baru' => 'required|unique:jams,pukul'
        ];

        $validator = Validator::make($request->all(),$rules);

        if($validator -> fails())
        {
            return back()->withErrors($validator);
        }

        Jam::create([
            'pukul' => $request->pukul_baru
        ]);

        return redirect()->back()
        ->with('message','Waktu baru berhasil ditambahkan');

    }

    public function hapus_tanggal($id)
    {
        $tanggal = Hari::find($id);
        $tanggal->delete();

        $carbonDate = new Carbon();

        return redirect()->back()
        ->with('message','Tanggal telah dihapus'
        ,compact('carbonDate'));
    }



}