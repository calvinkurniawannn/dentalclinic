@extends('layout.main')

@section('css_links')
<link rel="stylesheet" href="{{asset('css/auth/login.css')}}">
@endsection


@section('content')

<section class="login">
    <div class="login-container">
        @if(session()->has('message'))
        <div class="success" style="position:absolute;left:0;top:-10%;">
            {{session()->get('message')}}
        </div>
        @endif
        @if($errors->any())
        <h4 class="danger" style="position:absolute;left:0;top:-10%;">{{$errors->first()}}</h4>
        @endif
        <div class="upper-content">
            <img src="{{URL::asset('images/logo-login/logo-login.png')}}" alt="">
            <h3>Selamat Datang</h3>
        </div>
        <div class="middle-content">
            <form action="/login" class="login-form" id="login-form" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-control">
                    <input type="email" id="email" name="email" placeholder="Alamat Email" required>
                </div>
                @error('email')
                <div class="danger">
                    {{$message}}
                </div>
                @enderror
                <div class="input-control">
                    <input type="password" id="password" name="password" placeholder="Kata Sandi" required>
                </div>
                @error('password')
                <div class="danger">
                    {{$message}}
                </div>
                @enderror
                <a href="#lupakatasandi" class="forgetPassword">Lupa kata sandi?</a>
            </form>
            <button class="login-btn" type="submit" form="login-form">
                Masuk
            </button>
        </div>
        <div class="bottom-content">
            <h3>Belum memiliki akun? <a href="/view/signup-page">Daftar Sekarang</a></h3>
        </div>

    </div>
</section>


@endsection