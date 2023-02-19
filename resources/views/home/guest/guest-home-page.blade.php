@extends ('layout.main')


@section('css_links')
<link rel="stylesheet" href="{{asset('css/home/guest/guest-home-page.css')}}">
@endsection


@section('content')
<!-- User Home -->
<section class="user-home">
    <div class="user-home-upper-container">
        <div class="top-content">
            <h3>Selamat Datang di</h3>
            <div class="top-content-img-wrapper">
                <div class="top-content-img">
                    <img src="{{asset('images/logo-home-banner/logo-home-banner.png')}}" style="">
                </div>
            </div>

            <p>We are dedicated to helping you achieve a healthy, beautiful smile.</p>
        </div>
        <div class="home-banner">
            <img src="{{asset('images/logo-home-banner/main-banner.png')}}" alt="">
        </div>
    </div>
</section>
<!-- End Of User Home -->

<!-- User Home Promo -->
<section class="user-home-promo fade" id=promo>
    <div class="promo-heading">
        <img src="{{asset('images/asset-promo/buble.png')}}" alt="">
        <h3>Promo Yang Akan Datang</h3>
    </div>
    <div class="promo-content-wrapper">
        <div class="promo-content">
            <img src="{{asset('images/asset-promo/konsultasi-gigi.png')}}" alt="">
            <div class="promo-content-text">
                <h3 class="promo-title">Promo Konsultasi Gigi</h3>
                <p class="promo-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum eveniet
                    magni itaque alias eos est debitis saepe, vitae vel accusantium expedita, facilis vero, atque
                    aliquam ab veniam natus? Aliquam, ullam!</p>
                <a href="#selengkapnya" class="btn-selengkapnya">Selengkapnya</a>
            </div>
        </div>
        <div class="promo-content">
            <img src="{{asset('images/asset-promo/konsultasi-gigi.png')}}" alt="">
            <div class="promo-content-text">
                <h3 class="promo-title">Promo Konsultasi Gigi</h3>
                <p class="promo-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum eveniet
                    magni itaque alias eos est debitis saepe, vitae vel accusantium expedita, facilis vero, atque
                    aliquam ab veniam natus? Aliquam, ullam!</p>
                <a href="#selengkapnya" class="btn-selengkapnya">Selengkapnya</a>
            </div>
        </div>
        <div class="promo-content">
            <img src="{{asset('images/asset-promo/konsultasi-gigi.png')}}" alt="">
            <div class="promo-content-text">
                <h3 class="promo-title">Promo Konsultasi Gigi</h3>
                <p class="promo-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum eveniet
                    magni itaque alias eos est debitis saepe, vitae vel accusantium expedita, facilis vero, atque
                    aliquam ab veniam natus? Aliquam, ullam!</p>
                <a href="#selengkapnya" class="btn-selengkapnya">Selengkapnya</a>
            </div>
        </div>
    </div>
</section>
<!-- End Of User Home Promo -->

<!-- Mengapa Dental Section -->
<section class="mengapa-dental fade">
    <div class="mengapa-dental-heading">
        <img src="{{asset('images/asset-promo/buble-2.png')}}" alt="">
        <h3>Mengapa <span style="color:var(--blue2);margin:0 .7rem"> Fresh Dental Clinic</span> ?</h3>
    </div>
    <div class="mengapa-dental-content-wrapper">
        <div class="reason-content">
            <img src="#" alt="">
            <div class="reason-content-text">
                <h3 class="reason-title">
                    Profesionalitas
                </h3>
                <p class="reason-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae, similique
                    numquam voluptatem quisquam necessitatibus </p>
            </div>
        </div>
        <div class="reason-content">
            <img src="#" alt="">
            <div class="reason-content-text">
                <h3 class="reason-title">
                    Profesionalitas
                </h3>
                <p class="reason-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae, similique
                    numquam voluptatem quisquam necessitatibus </p>
            </div>
        </div>
        <div class="reason-content">
            <img src="#" alt="">
            <div class="reason-content-text">
                <h3 class="reason-title">
                    Services
                </h3>
                <p class="reason-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae, similique
                    numquam voluptatem quisquam necessitatibus </p>
            </div>
        </div>

    </div>
</section>
<!-- End Of Mengapa Dental Section -->

<!-- Layanan Kami Section -->
<section class="layanan-kami fade" id=layanan-kami>
    <div class="layanan-kami-heading">
        <img src="{{asset('images/asset-promo/buble-3.png')}}" alt="">
        <h3>Layanan Kami</h3>
    </div>
    <div class="layanan-kami-content-wrapper">
        <div class="layanan-content">
            <div class="layanan-content-image">
                <img src="{{asset('images/asset-layanan/tooth.png')}}" alt="">
            </div>
            <div class="layanan-content-text">
                <h3 class="layanan-title">
                    Perawatan Gigi Anak
                </h3>
            </div>
        </div>
        <div class="layanan-content">
            <div class="layanan-content-image">
                <img src="{{asset('images/asset-layanan/konsultasi-gigi.png')}}" alt="">
            </div>
            <div class="layanan-content-text">
                <h3 class="layanan-title">
                    Konsultasi Gigi
                </h3>
            </div>
        </div>
        <div class="layanan-content">
            <div class="layanan-content-image">
                <img src="{{asset('images/asset-layanan/prostetik.png')}}" alt="">
            </div>
            <div class="layanan-content-text">
                <h3 class="layanan-title">
                    Prostetik
                </h3>
            </div>
        </div>
        <div class="layanan-content">
            <div class="layanan-content-image">
                <img src="{{asset('images/asset-layanan/pencabutan-gigi.png')}}" alt="">
            </div>
            <div class="layanan-content-text">
                <h3 class="layanan-title">
                    Pencabutan Gigi
                </h3>
            </div>
        </div>
        <div class="layanan-content">
            <div class="layanan-content-image">
                <img src="{{asset('images/asset-layanan/pembehelan.png')}}" alt="">
            </div>
            <div class="layanan-content-text">
                <h3 class="layanan-title">
                    Pembehelan
                </h3>
            </div>
        </div>
        <div class="layanan-content">
            <div class="layanan-content-image">
                <img src="{{asset('images/asset-layanan/preventif.png')}}" alt="">
            </div>
            <div class="layanan-content-text">
                <h3 class="layanan-title">
                    Preventif
                </h3>
            </div>
        </div>
        <div class="layanan-content">
            <div class="layanan-content-image">
                <img src="{{asset('images/asset-layanan/periodontal.png')}}" alt="">
            </div>
            <div class="layanan-content-text">
                <h3 class="layanan-title">
                    Periodontal
                </h3>
            </div>
        </div>
        <div class="layanan-content">
            <div class="layanan-content-image">
                <img src="{{asset('images/asset-layanan/prostetik.png')}}" alt="">
            </div>
            <div class="layanan-content-text">
                <h3 class="layanan-title">
                    Prostetik
                </h3>
            </div>
        </div>
    </div>
</section>
<!-- End Of Layanan Kami Section -->
<!-- Reservasi -->
<section class="reservasi fade" id=>
    <div class="reservasi-heading">
        <img src="{{asset('images/asset-promo/buble-2.png')}}" alt="">
        <h3>Reservasi</h3>
    </div>
    <div class="reservasi-content-wrapper">
        <h3>Buatlah jadwal konsultasi bersama kami.
            <br>Mempermudah dan membantu anda dalam memenuhi kebutuhan anda.
        </h3>
        <a href="/view/login-page" class="reservasi-btn">
            Reservasi Sekarang
        </a>
    </div>
</section>
<!-- End Of Reservasi -->


<script>
window.addEventListener('load', function() {
    document.querySelector('.user-home').classList.add('active');
});

const sections = document.querySelectorAll('.fade');

sections.forEach(section => {
    section.classList.add('fade-out');
    window.addEventListener('scroll', () => {
        const sectionPosition = section.getBoundingClientRect().top;
        const screenHeight = window.innerHeight;
        if (sectionPosition - screenHeight <= 0) {
            section.classList.add('fade-in');
            section.classList.remove('fade-out');
        } else {
            section.classList.remove('fade-in');
            section.classList.add('fade-out');
        }
    });
});
</script>
@endsection