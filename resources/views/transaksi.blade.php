@php
    use Illuminate\Support\Facades\Auth;
    use App\Models\items;
    use App\Models\transaksi;
    use App\Models\transakdetail;

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
</head>
<body>
    @extends('navbar.navbar')
    @section('content')
        <h1>Transaksi</h1>
        <br>
        <div>
            @foreach ($transaksi as $transaksi)
                @if($transaksi['userid'] === $uid)
                <div>
                    <h3>Status Pengiriman: {{ $transaksi['status'] }}</h3>
                    <h4>Alamat Pengiriman:</h4>
                    <p> {{ $transaksi['alamatkirim'] }} </p>
                </div>
                <div>
                    @php
                        $item = items::find($transaksidetail->itemid);
                    @endphp
                    <h3>{{ $item->name}}</h3>
                    <p>Jumlah: {{$transaksidetail['jumlah']}}</p>
                </div>
                <div>
                    <h3>Total Harga: {{ $transaksi['total_harga'] }}</h3>
                </div>
                    
                @endif
            @endforeach
        </div>
        


    @endsection
</body>
</html>