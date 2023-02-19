@php
use Carbon\Carbon;
setlocale(LC_TIME, 'id');
@endphp

@extends('layout.main')

@section('css_links')
<link rel="stylesheet" href="{{asset('css/admin/tambah-jadwal-reservasi.css')}}">
@endsection

@section('content')
<section class="tambah-jadwal-reservasi">
    <div class="tambah-jadwal-reservasi-heading">
        <img src="{{asset('images/asset-promo/buble-2.png')}}" alt="">
        <h3>Tambah Jadwal Reservasi</h3>
    </div>
    @if(session()->has('message'))
    <div class="success">
        {{session()->get('message')}}
    </div>
    @endif
    @if(session()->has('error'))
    <div class="danger" style="margin-bottom:2rem;">
        {{session()->get('error')}}
    </div>
    @endif
    <div class="tambah-jadwal-reservasi-wrapper">
        <div class="tambah-tanggal-wrapper">
            <form action="/tambah-tanggal" method="post" enctype="multipart/form-data" class="tambah-jadwal-form">
                @csrf
                <div class="input-date-control">
                    <label for="pilihTanggal">Pilih Tanggal</label>
                    <input type="date" name="tanggal_baru" id="pilihTanggal">
                </div>
                @error('tanggal_baru')
                <p class="danger">
                    {{$message}}
                </p>
                @enderror
                <div class="input-jam-control">
                    <label for="">Pilih Jam</label>
                    @foreach($jam as $jam)
                    <div class="input-radio">
                        <input type="radio" name="jam_id" id="{{$jam->id}}" value="{{$jam->id}}">
                        <label for="{{$jam->id}}">{{ $jam->pukul }}</label>
                    </div>
                    @endforeach
                </div>
                @error('jam_id')
                <p class="danger">
                    {{$message}}
                </p>
                @enderror
                <button type="submit">
                    Tambah Tanggal Baru
                </button>
            </form>

            <form action="/tambah-jam" method="post" enctype="multipart/form-data" class="tambah-waktu-form">
                @csrf
                <div class="input-date-control">
                    <label for="inputWaktu">Masukan Waktu</label>
                    <input type="text" name="pukul_baru" id="inputWaktu" placeholder="contoh: 09:00 - 10:00"
                        pattern="^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9] - (0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$">
                </div>
                @error('pukul_baru')
                <p class="danger">
                    {{$message}}
                </p>
                @enderror
                <button type="submit">
                    Tambah Waktu Baru
                </button>
            </form>
        </div>

        <div class="table-content">
            <table>
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dataTanggal as $dt)
                    <tr>

                        <td>{{$dt->tanggal}}</td>
                        <td>{{$dt->jam->pukul}}</td>
                        <td>
                            @if($dt->status == 0)
                            Tersedia
                            @elseif($dt->status == 1)
                            Tersedia
                            @else
                            <p style="color:green">
                                Sudah dibooking
                            </p>

                            @endif
                        </td>
                        <td>
                            <div class="action-control">
                                <a href="/delete-tanggal/{{$dt->id}}">Hapus</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</section>
@endsection