<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <Title>MASUKIN NAMA DISINI</Title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <section class="header">
        <nav>
{{--            <a href="{{ url('/home') }}"></href><img class="main-logo" src="../../public/images/mainlogo.svg"></a>--}}
            <div class ="object-left fixed">
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500">DASHBOARD</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500">LOG IN</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500">REGISTER</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
            <div class="nav-links-a">
                <ul>
                    <li><a href="{{ url('/home') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500">HOME</a></li>
                    <li><a href="{{ url('/produk') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500">PRODUK</a></li>
                    <li><a href="{{ url('/tentang') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500">TENTANG KAMI</a></li>
                </ul>
            </div>
        </nav>
    <div class="text-box">
        <h1>Biji Untuk Menghijaukan Nusantara</h1>
        <p>Sungguh Sangat Subur</p>
        <a href="tentang.html" class="hero-btn">Belajar Tentang Kami</a>
    </div>

    </section>
</body>
</html>
