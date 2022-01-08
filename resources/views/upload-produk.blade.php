<!doctype html>
<html lang="en" class="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/stylewind.css">
    <title>Document</title>
</head>
<body class="place-content-center">
    <section class="header">
        @extends('navbar.navbar')

        @section('content')
            <div class="container upload-produk text-center">
                <div class="isian">
                    <x-label for="gambar" :value="__('Gambar Produk')" />

                </div>
                <form method="POST"  action="{{ route('login') }}">
                @csrf
                    <div class="isian">
                        <x-label for="nama" :value="__('Product Name')" />

                        <x-input id="name" class="" type="text" name="name" :value="old('name')" required autofocus />
                    </div>

                    <div class="isian">
                        <x-label for="price" :value="__('Price')" />

                        <x-input id="price" class="" type="number" name="price" :value="old('price')" required autofocus />
                    </div>
                    <div class="isian">
                        <x-label for="description" :value="__('Description')" />
                        
                        <x-input id="description" class="" type="text" name="description" :value="old('description')" required autofocus />
                    </div>

                    <div class="isian">
                    <x-label for="gambar" :value="__('Gambar Produk')" />
                    <x-input type="file" name="files[]" id="image" class="" :value="old('image')" />
                    </div>

                    <x-input class="" type="submit" value="Upload" name="submit" />

                </div>

                </form>
            </div>
        @endsection
    </section>
</body>
</html>
