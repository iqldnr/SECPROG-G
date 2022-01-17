
    @php
        use Illuminate\Support\Facades\Auth;
        use App\Models\items;
        use App\Models\cart;

        $uid = Auth::user()->id;
    @endphp



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
            <h1 class="text-center">Keranjang</h1>

            <div class="detail grid grid-cols-4 left-auto right-auto">
                @foreach ($cart as $keranjang)
                    @if($keranjang['userid'] == $uid  )
                        <div class="container w-3">
                            @php
                                $item = items::find($keranjang->itemid);
                            @endphp
                            <h3>{{ $item->id}}</h3>
                            <h5>Jumlah: {{$keranjang['jumlah']}}</h5>
                            <br>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="container">
                <form method="post" action="/transak">
                    @csrf
                    <div class="grid grid-flow-col-dense text-left ">
                        <h2>Alamat : </h2>
                        <x-input id="Alamat" class="w-full" type="text" name="alamat" :value="old('alamat')" required autofocus />
                    </div>
                    <div class="">
                        <x-input class="w-full text-center backdrop-sepia border-8" type="submit" value="Beli" name="beli" />
                    </div>

                </form>
            </div>
        @endsection
</body>
</html>
