@php
use Carbon\Carbon;
setlocale(LC_TIME, 'id');
@endphp


@extends ('layout.main')
@section('css_links')
<link rel="stylesheet" href="{{asset('css/reservasi/reservasi.css')}}">
@endsection


@section('content')
<section class="reservasi">
    <div class="reservasi-heading">
        <img src="{{asset('images/asset-promo/buble.png')}}" alt="">
        <h3>Reservasi</h3>
    </div>

    <div class="reservasi-form-wrapper">
        <form action=" {{route('reservasi')}}" class="reservasi-form" id="reservasi-form" method="POST"
            enctype="multipart/form-data">
            @csrf
            @if(session()->has('message'))
            <div class="success" style="">
                {{session()->get('message')}}
            </div>
            @endif
            <div class="input-select-control">
                <label for="TanggalReservasi">Tanggal Reservasi</label>
                <select name="tanggal_reservasi" id="TanggalReservasi">
                    @foreach ($hari as $item)


                    @if($item->status != 2)
                    <option value="{{$item->id}}">
                        {{$item->tanggal }}
                        | <span style="color:var(--blue4);">{{$item->jam->pukul}}</span>
                    </option>
                    @endif
                    @endforeach
                </select>
            </div>
            <div class="input-select-control">
                <label for="Layanan">Layanan</label>
                <select name="layanan" id="Layanan">
                    @foreach($layanan as $layanan)
                    <option value="{{$layanan->id}}">{{$layanan->jenis}}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-textarea-control">
                <label for="Keterangan">Keterangan</label>
                <textarea name="keterangan" id="Keterangan" placeholder="Keterangan">
                </textarea>
                @error('keterangan')
                {{$message}}
                @enderror
            </div>
            <button class="reservasi-btn" type="submit">
                Reservasi
            </button>
        </form>

    </div>
</section>

@endsection