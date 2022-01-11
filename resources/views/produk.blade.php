<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <Title>MASUKIN NAMA DISINI</Title>
    <link rel="stylesheet" href="../css/stylewind.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

    <section class="header" style="padding: 3rem;">
        @extends('navbar.navbar')

        @section('content')
            <div class="text-box-produk text-center kartu">
                <h1 >Produk-Produk Kami</h1>
                <p>Benih-Benih terbaik</p>
            </div>
            <div class="container-produk grid-cols-4 grid gap-4">
            @foreach ($produk as $barang)
                <div class="card justify-center" style="width: 18rem; padding: 3rem; display:flex;">
                    <div class="card-body">
                        <h3 class="card-title">{{ $barang["name"] }}</h3>
                        <h5>{{ $barang["uploader"] }}</h5>
                        <img class="card-img-top" src="../../public/images/produk.jpg" alt="Card image cap">

                        <p class="card-text">{{ $barang["description"] }}</p>
                        <p>Stock: {{ $barang["stock"] }}</p>
                        <h6>{{ $barang["price"] }}</h6>
                    </div>
                    <div class="card-body">
                        <a href="#" class="card-link">BELI</a>
                    </div>
                </div>
            @endforeach
            </div>
        @endsection

    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
