@php
use Carbon\Carbon;
use App\Models\Reservasi;
setlocale(LC_TIME, 'id');
@endphp

@extends ('layout.main')
@section('css_links')
<link rel="stylesheet" href="{{asset('css/reservasi/jadwal-reservasi.css')}}">
@endsection


@section('content')
<section class="jadwal-reservasi">
    <div class="jadwal-reservasi-heading">
        <img src="{{asset('images/asset-promo/buble.png')}}" alt="">
        <h3>Jadwal Reservasi Saya</h3>
    </div>
    <div class="reservasi-saya-wrapper">

        @if(count($reservasi) == 0)
        <div class="warn">
            Kamu belum membuat jadwal reservasi. Silahkan buat terlebih dahulu.
        </div>
        @else
        @foreach($reservasi as $rsv)
        <div class="jadwal-reservasi-saya">
            @if($rsv->status == 2)
            <div class="check">
                <i class="fa-regular fa-circle-check"></i>
                <p class="announce">Reservasi anda berhasil diterima. Mohon datang sesuai waktu yang sudah disepakati.
                </p>
            </div>
            @endif
            <div class="data-control-wrapper">
                <div class="data-control-1">
                    <div class="data-control">
                        <h3>
                            Tanggal Reservasi
                        </h3>
                        <p>
                            {{$rsv->hari->tanggal}}
                        </p>
                    </div>
                    <div class="data-control">
                        <h3>
                            Pukul
                        </h3>
                        <p>
                            {{$rsv->hari->jam->pukul}}
                        </p>
                    </div>
                    <div class="data-control">
                        <h3>
                            Layanan
                        </h3>
                        <p>
                            {{$rsv->layanan->jenis}}
                        </p>
                    </div>
                </div>
                <div class="data-control-2">
                    <div class="data-control">
                        <h3>
                            Keterangan
                        </h3>
                        @if($rsv->keterangan == null)
                        <p class="content-keterangan">
                            -
                        </p>
                        @else
                        <p class="content-keterangan">
                            {{$rsv->keterangan}}
                        </p>
                        @endif
                    </div>
                    <div class="data-control">
                        <h3>
                            Status
                        </h3>
                        @if($rsv->status == 0)
                        <p>
                            Sedang diproses
                        </p>
                        @elseif($rsv->status == 1)
                        <p style="color:red;">
                            Silahkan reservasi ulang
                        </p>
                        @else
                        <p style="color:#BFDB38">
                            Reservasi Berhasil
                        </p>
                        @endif
                    </div>
                </div>
                <div class="data-control-3">
                    <div class="data-control">
                        <h3>Created At</h3>
                        <p>
                            {{$rsv->created_at}}
                        </p>
                    </div>
                </div>
            </div>


        </div>
        @endforeach
        @endif



        {{ $reservasi->links('vendor.pagination.default') }}


    </div>
</section>


@endsection