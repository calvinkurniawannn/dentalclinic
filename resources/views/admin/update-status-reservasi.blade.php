@extends ('layout.main')

@section('css_links')
<link rel="stylesheet" href="{{asset('css/admin/update-status-reservasi.css')}}">
@endsection

@section('content')
<section class="update-status-reservasi">
    <div class="update-status-reservasi-heading">
        <img src="{{asset('images/asset-promo/buble.png')}}" alt="">
        <h3>Validasi Reservasi - Update Status</h3>
    </div>
    <div class="update-status-reservasi-wrapper">
        <div class="data-reservasi">
            @if(session()->has('message'))
            <div class="success" style="position:absolute;left:0;top:-35%;">
                {{session()->get('message')}}
            </div>
            @endif

            <form action="/update-status" id="form-status" class="form-status" method="post"
                enctype="multipart/form-data">
                @method('put')
                @csrf
                <input type="text" name="reservasi_id" value="{{$reservasi->id}}" hidden>
                <div class="data-control">
                    <label for="statusInput">Status Reservasi</label>
                    <select name="statusInput" id="statusInput">
                        <option selected hidden>
                            @if($reservasi->status == 0)
                            <p>Sedang diproses</p>
                            @elseif($reservasi->status == 1)
                            <p style="color:red;">Reservasi Ulang</p>
                            @else
                            <p style="color:#23c552;">
                                Reservasi Berhasil
                            </p>
                            @endif
                        </option>
                        <option value="0">Sedang Diproses</option>
                        <option value="1">Reservasi Ulang</option>
                        <option value="2">Reservasi Berhasil</option>
                    </select>
                </div>
                <button type="submit">Update</button>
            </form>
        </div>
        <div class="kembali">
            <a href="/admin_home">
                Kembali
            </a>
        </div>
    </div>

</section>

@endsection