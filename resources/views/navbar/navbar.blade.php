<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <Title>MASUKIN NAMA DISINI</Title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <section class="header">
        <nav>
            <div>
                @if (Route::has('login'))
                    <div class="nav-links-a hidden fixed top-0 left-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/cart') }}" class="text-gray-700 dark:text-gray-500">CART</a>
                            <a href="{{ url('/upload-produk') }}" class="text-gray-700 dark:text-gray-500">UPLOAD PRODUK</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-input class="text-gray-700 dark:text-gray-500 " type="submit" value="Logout" name="Logout" />
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="text-gray-700 dark:text-gray-500">LOG IN</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="text-gray-700 dark:text-gray-500">REGISTER</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
            <div class="nav-links-a hidden fixed top-0 right-0 px-6 py-4 sm:block">
                <ul>
                    <li><a href="{{ url('/home') }}" class=" text-gray-700 dark:text-gray-500">HOME</a></li>
                    <li><a href="{{ url('/produk') }}" class="text-gray-700 dark:text-gray-500">PRODUK</a></li>
                    <li><a href="{{ url('/tentang') }}" class="text-gray-700 dark:text-gray-500">TENTANG KAMI</a></li>
                    <li><a href="{{ url('/transaksi') }}" class="text-gray-700 dark:text-gray-500">PESANAN SAYA</a></li>
                </ul>
            </div>
        </nav>
        <div>
            @yield('content')
        </div>

    </section>
</body>
</html>
