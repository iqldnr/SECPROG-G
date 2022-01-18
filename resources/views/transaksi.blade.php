@php
    use Illuminate\Support\Facades\Auth;
    use App\Models\items;
    use App\Models\transaksi;
    use App\Models\transakdetail;
    use Illuminate\Support\Facades\Redirect;


                $uid = Auth::user()->id;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaksi</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/stylewind.css">
</head>
<body class="body-transak" >
    @extends('navbar.navbar')
    @section('content')
        <h1>Transaksi</h1>
        <br>
        <div class="gap-4 flex-auto flex">
            @foreach ($transaksi as $transsaksi)
                @if($transsaksi['userid'] == $uid)
                <div class="border-amber-700 border-2 w-fit ">
                    <h3>Status Pengiriman: {{ $transsaksi['status'] }}</h3>
                    <h4>Alamat Pengiriman:  {{ $transsaksi['alamatkirim'] }} </h4>
                    <p></p>
                    <h3>Total Harga: {{ $transsaksi['total_harga'] }}</h3>
                </div>

                @endif
            @endforeach
        </div>



    @endsection
</body>
</html>
