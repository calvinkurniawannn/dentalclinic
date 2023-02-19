    @extends('layout.main')

    @section('css_links')
    <link rel="stylesheet" href="{{asset('css/auth/signup.css')}}">

    @endsection

    @section('content')
    <section class="signup">
        <div class="signup-container">
            <div class="upper-content">
                <h3>Silahkan Bergabung</h3>
            </div>

            <form action="{{route('signup_submit')}}" class="signup_form" id="signup_form" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="input-control">
                    <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" required>
                </div>
                @error('nama_lengkap')
                <div class="danger">
                    {{$message}}
                </div>
                @enderror
                <div class="input-date-control">
                    <label for="TanggalLahir">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" id="TanggalLahir" required>
                </div>
                @error('tanggal_lahir')
                <div class="danger">
                    {{$message}}
                </div>
                @enderror
                <div class="input-gender-control">
                    <label for="JenisKelamin">Jenis Kelamin</label>
                    <div class="radio-gender-control">
                        <div class="radio-gender">
                            <input type="radio" name="jenis_kelamin" value="Laki-Laki" id="LakiLaki">
                            <label for="LakiLaki">Laki-laki</label>
                        </div>
                        <div class="radio-gender">
                            <input type="radio" name="jenis_kelamin" value="Perempuan" id="Perempuan">
                            <label for="Perempuan">Perempuan</label>
                        </div>
                    </div>
                </div>
                @error('jenis_kelamin')
                <div class="danger">
                    {{$message}}
                </div>
                @enderror

                <div class="input-control">
                    <input type="tel" name="nomor_telepon" id="phone" placeholder="Nomor Telepon" required>
                </div>
                @error('nomor_telepon')
                <div class="danger">
                    {{$message}}
                </div>
                @enderror
                <div class="input-control">
                    <input type="email" name="email" placeholder="Alamat Email" required>
                </div>
                @error('email')
                <div class="danger">
                    {{$message}}
                </div>
                @enderror
                <div class="input-control" id="input-control-password">
                    <input type="password" name="password" placeholder="Kata Sandi" id="password" required>
                    <i class="fa-sharp fa-regular fa-eye-slash" id="eyeP" onclick="myPassword()"></i>
                </div>
                @error('password')
                <div class="danger">
                    {{$message}}
                </div>
                @enderror
                <div class="input-control" id="input-control-password">
                    <input type="password" name="repeat_password" placeholder="Ulangi Kata Sandi" id="rpassword"
                        required>
                    <i class="fa-sharp fa-regular fa-eye-slash" id="eyeRP" onclick="myRPassword()"></i>
                </div>
                @error('repeat_password')
                <div class="danger">
                    {{$message}}
                </div>
                @enderror
            </form>

            <button class="signup-btn" type="submit" form="signup_form">
                Daftar
            </button>

        </div>


    </section>


    @endsection

    <script>
function myPassword() {

    var password = document.getElementById("password");
    var eye = document.getElementById("eyeP");
    if (password.type === "password") {
        password.type = "text";
        eye.className = "fa-sharp fa-regular fa-eye";
    } else {
        password.type = "password";
        eye.className = "fa-sharp fa-regular fa-eye-slash";
    }
}

function myRPassword() {

    var password = document.getElementById("rpassword");
    var eye = document.getElementById("eyeRP");
    if (password.type === "password") {
        password.type = "text";
        eye.className = "fa-sharp fa-regular fa-eye";
    } else {
        password.type = "password";
        eye.className = "fa-sharp fa-regular fa-eye-slash";
    }
}
    </script>