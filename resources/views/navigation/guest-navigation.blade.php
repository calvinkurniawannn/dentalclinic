<nav class="navigation">
    <div class="navigation-container" id="navigation-container">
        <div class="logo-nav-wrapper">
            <div class="logo-nav">
                <a href="/">
                    <img src="{{URL::asset('images/logo-navigation/logo-navigation.png')}}" alt="">
                </a>
            </div>
            <!-- <button class="ham-btn" onclick="navToggle()">
                <svg viewBox="0 0 100 80" width="20" height="20">
                    <rect width="100" height="10"></rect>
                    <rect y="30" width="100" height="10"></rect>
                    <rect y="60" width="100" height="10"></rect>
                </svg>
            </button> -->
            <div class="ham-btn" id="ham-btn">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div class="navigation-links-wrapper" id="navbar">
            <ul>
                <li><a href="#">Tentang Kami</a></li>
                <li><a href="#layanan-kami">Layanan</a></li>
                <li><a href="/view/login-page">Reservasi</a></li>
                <li><a href="#promo">Promo</a></li>
                <li class="right">
                    <img src="{{URL::asset('images/assets/logo-account.png')}}" alt="" class="logo-account">
                    <div class="auth-wrapper">
                        <a href="{{route('login_page')}}">Masuk</a>
                        <a href="{{route('signup_page')}}">Daftar</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>



<script>
var ham_btn = document.getElementById("ham-btn");
var nav_con = document.getElementById("navigation-container");
ham_btn.addEventListener("click", () => {
    ham_btn.classList.toggle("change");
    nav_con.classList.toggle("active");
});
</script>