<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dental Clinic</title>

    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Lato:wght@100;300;400;700;900&display=swap"
        rel="stylesheet">
    <!-- GOOGLE FONT -->

    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- FONTAWESOME -->

    <link href="{{ asset('css/layout/main.css') }}" rel="stylesheet">



    @if (Auth::check())
    @if (Auth::user()->role =='user')
    <link rel="stylesheet" href="{{asset('css/navigation/user-navigation.css')}}">
    @elseif (Auth::user()->role =='admin')
    <link rel="stylesheet" href="{{asset('css/navigation/admin-navigation.css')}}">
    @endif

    @else
    <link rel="stylesheet" href="{{asset('css/navigation/guest-navigation.css')}}">
    @endif

    @yield('css_links')
    <title>Dental Clinic</title>
</head>

<body>
    @if (Auth::check())
    @if (Auth::user()->role =='user') @include('navigation.user-navigation')
    @elseif(Auth::user()->role =='admin') @include('navigation.admin-navigation')
    @endif

    @else @include('navigation.guest-navigation')
    @endif


    @yield('content')

    <footer>
        <div class="logo-footer-wrapper">
            <a href="#">
                <img src="{{asset('images/logo-navigation/logo-navigation.png')}}" alt="">
            </a>
        </div>
        <div class=" bottom-text-wrapper">
            <p>&copy; 2023 Fresh Dental Clinic All Rights Reserved</p>
        </div>
    </footer>

</body>




</html>