<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
    <link rel="stylesheet" href="../css/stylewind.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    @extends('navbar.navbar')

        @section('content')
            <h1>Keranjang</h1>
            
            <div class="detail">
                @foreach ($cart as $keranjang)
                    @if($keranjang['userid'] === "user1")
                        {{-- gw ga tau cara nyambungin item ID ke nama --}}
                        <h3>Nama Barang: {{ $keranjang['itemid'] }}</h3>
                        <h5>Jumlah: {{ $keranjang['jumlah'] }}</h5>
                        <br>
                    @endif
                @endforeach
            </div>
        @endsection
</body>
</html>