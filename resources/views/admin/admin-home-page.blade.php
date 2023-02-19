@php
use Carbon\Carbon;
setlocale(LC_TIME, 'id');
@endphp
@extends ('layout.main')
@section('css_links')
<link rel="stylesheet" href="{{asset('css/admin/admin-home-page.css')}}">
@endsection

@section('content')
<section class="admin-home-page">
    <div class="admin-home-page-heading">
        <img src="{{asset('images/asset-promo/buble.png')}}" alt="">
        <h3>Validasi Reservasi</h3>
    </div>
    <div class="search-bar">
        <form action="/search" id="form-search" class="form-search-bar" method="get">
            <input type="search" name="keyword" placeholder="Cari nama">
            <button class="btn-search" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
    </div>
    <div class="admin-home-page-wrapper">
        @if(session()->has('message'))
        <div class="success" style="position:absolute;left:13%;top:-25%;">
            {{session()->get('message')}}
        </div>
        @endif

        @if(count($reservasi) == 0)
        <div class="warn">
            Data reservasi belum ada.
        </div>
        @else

        @foreach($reservasi as $rsv)
        <div class="data-reservasi">
            <div class="data-control-1">
                <div class="data-control">
                    <h3>
                        Reservasi ID
                    </h3>
                    <p>
                        {{$rsv->id }}
                    </p>
                </div>
                <div class="data-control">
                    <h3>
                        Nama Pasien
                    </h3>
                    <p>
                        {{$rsv->user->name }}
                    </p>
                </div>
                <div class="data-control">
                    <h3>
                        Tanggal Reservasi
                    </h3>
                    <p>

                        {{$rsv->hari->tanggal }}
                    </p>
                </div>
            </div>
            <div class="data-control-2">
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
            </div>
            <div class="data-control-3">
                <div class="data-control">
                    <h3>
                        Status
                    </h3>
                    @if($rsv->status == 0)

                    <p>Sedang diproses</p>

                    @elseif($rsv->status == 1)
                    <p style="color:red">Reservasi Ulang</p>

                    @else
                    <p style="color:#BFDB38">Reservasi Berhasil</p>

                    @endif

                </div>
                <div class="data-control">
                    <h3>
                        Created At
                    </h3>
                    <p class="content-keterangan">
                        {{$rsv->created_at}}
                    </p>
                </div>
                <div class="data-control" id="data-control-3">
                    <div class="button-control">
                        <a href="/update/{{$rsv->id}}">Update</a>
                    </div>
                    <div class="button-control">
                        <a href="/delete/{{$rsv->id}}">Delete</a>
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