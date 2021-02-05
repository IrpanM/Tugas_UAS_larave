<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
     integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link rel="stylesheet" href="{{url('css/gallery.css')}}">
    <link rel="stylesheet" href="myProjects/webProject/icofont/css/icofont.min.css">
    <script src="https://kit.fontawesome.com/1e09bce9fd.js" crossorigin="anonymous"></script>
    <title>UAS Laravel</title>
</head>

<body>
    <header>
        <div class="atas p-2" style="background: #21252b; color: #858d91;">
            <div class="container ">
                <div class="d-flex flex-row ">
                    <div class="kiri d-flex   mr-auto">
                        <div class="call d-flex mr-3">
                            <p class="my-auto">Call Us: <b class="text-white"> (0266) 532510 </b></p>
                        </div>
                        <div class="email d-flex  ">
                            <p class="my-auto">Email:  <a href="" style="color:  turquoise;">smkn1_cibadak@yahoo.co.id</a></p>
                        </div>
                    </div>
                    <div class="kanan d-flex  ">
                        <p class="my-auto mr-3">Follow Us:</p>
                        <i class="fab fa-facebook-square p-2"></i>
                        <i class="fab fa-twitter-square p-2"></i>
                    </div>
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="my-auto mr-3 btn btn-primary" style="text-decoration: none;" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a class="my-auto btn btn-primary" style="text-decoration: none;" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            </div>
        </div>
    </header>

    <section class="sticky-top bg-white">
        <div class="bawah ">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="#"><img class="w-25" src="img/logo.png" alt="">SMKN 1 Cibadak</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active mr-3 active mr-3">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active mr-3 dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Program Studi
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Pengawasan Mutu Hasil Pertanian</a>
                                    <a class="dropdown-item" href="#">Agribisnis Hasil Pertanian Dan Perikanan</a>
                                    <a class="dropdown-item" href="#">Agribisnis Tanaman Pangan dan Holtikultura</a>
                                    <a class="dropdown-item" href="#">Agribisnis Ternak Ruminansia</a>
                                    <a class="dropdown-item" href="#">Agribisnis Ternak Unggas</a>
                                    <a class="dropdown-item" href="#">Budidaya Ikan</a>
                                    <a class="dropdown-item" href="#">Multimedia</a>
                                </div>
                            </li>
                            <li class="nav-item active mr-3 dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Data Siswa
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">1. Pengawasan Mutu Hasil Pertanian</a>
                                    <a class="dropdown-item" href="#">2. Agribisnis Hasil Pertanian Dan Perikanan</a>
                                    <a class="dropdown-item" href="#">3. Agribisnis Tanaman Pangan dan Holtikultura</a>
                                    <a class="dropdown-item" href="#">4. Agribisnis Ternak Ruminansia</a>
                                    <a class="dropdown-item" href="#">5. Agribisnis Ternak Unggas</a>
                                    <a class="dropdown-item" href="#">6. Budidaya Ikan</a>
                                    <a class="dropdown-item" href="#">7. Multimedia</a>
                                </div>
                            </li>
                            <li class="nav-item active mr-3 dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Organisasi
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">1. Dewan Guru</a>
                                    <a class="dropdown-item" href="#">2. Staf Tata Administrasi Sekolah</a>
                                </div>
                            </li>
                            <li class="nav-item active mr-3">
                                <a class="nav-link" href="#">Info</a>
                            </li>
                            <li class="nav-item active mr-3">
                                <a class="nav-link" href="#">Berita</a>
                            </li>
                            <li class="nav-item active mr-3">
                                <a class="nav-link" href="#">Tentang</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Kontak</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </section>

    <section class="slide">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/header-10.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/header-11.gif" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/header-14.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <section class="tiga p-4 mb-5">
        <div class="container">
            <h4 class="text-center">
                Pengumuman
            </h4>
            <p class="text-center">
                Selamat kepada team LKS SMKN 1 CIBADAK yang telah meraih Juara I Bidang Fishery dan Juara Har. II Bidang
                Post Harvest Technology pada LKS Tingkat Nasional di Malang tahun 2016
            </p>
        </div>
    </section>

    <section class="empat">
        <div class="container">
            <h4 class="pl-3 mb-4">VIDEO TERBARU</h4>
            <div class="row mx-auto">
            @foreach($video as $item)
                <div class="col">
                    <div class="card" style="border: none;">
                        <img src="{{Storage::url($item->image)}}" alt="">
                        <div class="card-body pl-0">
                            <a href="">{{$item->title}}</a>
                            <blockquote class="blockquote mb-0">
                                <footer class="blockquote-footer" style="font-size: 11px;">{{$item->date}}</footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            @endforeach
                <!-- <div class="col">
                    <div class="card" style="border: none;">
                        <img src="img/juara.gif" alt="">
                        <div class="card-body pl-0">
                            <a href="">PERAYAAN HUT RI KE 70 DI SMKN 1 CIBADAK</a>
                            <blockquote class="blockquote mb-0">
                                <footer class="blockquote-footer" style="font-size: 11px;">MINGGU, 20 DESEMBER 2015
                                    12:59 WIB</footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="border: none;">
                        <img src="img/juara3.png" alt="">
                        <div class="card-body pl-0">
                            <a href="">PROFIL SMKN 1 CIBADAK</a>
                            <blockquote class="blockquote mb-0">
                                <footer class="blockquote-footer" style="font-size: 11px;">MINGGU, 20 DESEMBER 2015
                                    12:59 WIB</footer>
                            </blockquote>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>      
    </section>
<hr>
    <section class="news">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                <h4>Berita Terbaru</h4>
                @foreach($news as $item)
                <div class="article py-5">
                    <div class="row">
                        <div class="col-sm-3">
                        <img src="{{Storage::url($item->image)}}" alt="image" class="img-thumbnail" />
                        </div>
                        <div class="col-sm-9">
                        <h5>{{$item->title}}</h5>
                        <h6>{{$item->date}} oleh {{$item->author}}</h6>
                        <p>{{$item->text}}</p>
                        <a href="" class="btn btn-primary">Readmore</a>
                        </div>
                    </div>
                </div>
                @endforeach

               
                </div>
                <div class="col-sm-4">
                <h4>Info Terbaru</h4>
                @foreach($info as $item)
                <div class="article py-5">
                    <div class="row"> 
                        <div class="col-sm-12">
                        <h5>{{$item->title}}</h5>
                        <h6>{{$item->kategori}}</h6>
                        <h6>{{$item->date}} oleh {{$item->author}}</h6>
                        <p>{{$item->text}}</p>
                        <a href="" class="btn btn-primary">Readmore</a>
                        </div>
                    </div>
                </div>
                @endforeach
                </div>
            </div>
            

        </div>
    </section>

    <section class="quote" style="background: url(img/hexagon.jpg) repeat;">
        <div class="color" style="background: turquoise; opacity: 0.8;">
            <div class="container text-center p-5">
                <h3 class="text-white my-auto pb-4">Satu-satunya cara untuk melakukan pekerjaan hebat adalah CINTAI apa yang anda lakukan</h3>
                <p class="my-auto" style="font-weight: 500; color: rgb(52, 52, 116);"><b>STEVE JOBS</b></p>
                <p class="text-white my-auto pi-italic" ><i>Mantan CEO Apple Inc</i></p>
            </div>
        </div>
    </section>

    <section>
    
  <div class="container" id="galeri">
  <h2 class="text-center">Gallery</h2>
    <div class="item red">
      <img src="./img/bg2.jpg" />
      <i class="fa fa-camera"></i>
    </div>

    <div class="item blue">
      <img src="./img/bg1.jpg" />
      <i class="fa fa-paw"></i>
    </div>

    <div class="item green">
      <img src="./img/bg3.jpg" />
      <i class="fa fa-cloud"></i>
    </div>
  </div>
  <div class="container">
    <div class="item red">
      <img src="./img/bg4.jpg" />
      <i class="fa fa-camera"></i>
    </div>

    <div class="item blue">
      <img src="./img/bg6.jpg" />
      <i class="fa fa-paw"></i>
    </div>

    <div class="item green">
      <img src="./img/header-14.jpg" />
      <i class="fa fa-cloud"></i>
    </div>
  </div>
  </section>
    <section class="partner  mb-5">
        <div class="container">
            <h4 class="mb-4">PARTNER</h4>
            <div class="row d-flex ">
                <div class="col">
                    <img src="img/cisco.png" alt="">
                </div>
                <div class="col">
                    <img src="img/iso9100.png" alt="">
                </div>
                <div class="col">
                    <img src="img/bogasari.png" alt="">
                </div>
                <div class="col">
                    <img src="img/cisco.png" alt="">
                </div>
                <div class="col">
                    <img src="img/iso9100.png" alt="">
                </div>
                <div class="col">
                    <img src="img/bogasari.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <footer style="
    background-color: #21252b;">
        <div class="atas pb-5  p-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h6><b>NAVIGASI</b></h6>
                        <a href="">Home</a>
                        <br>
                        <a href="">Info</a>
                        <br>
                        <a href="">Berita</a>
                        <br>
                        <a href="">Tentang Kami</a>
                        <br>
                        <a href="">Kontak</a>
                    </div>
                  
                    <div class="col">
                        <h6><b>PROGRAM STUDI</b></h6>
                        <a href="">Pengawasan Mutu Hasil Pertanian</a>
                        <br>
                        <a href="">Agribisnis Hasil Pertanian Dan Perikanan</a>
                        <br>
                        <a href="">Agribisnis Tanaman Pangan dan Holtikultura</a>
                        <br>
                        <a href="">Agribisnis Ternak Ruminansia</a>
                        <br>
                        <a href="">Agribisnis Ternak Unggas</a>
                        <br>
                        <a href="">Budidaya Ikan</a>
                        <br>
                        <a href="">Multimedia</a>
                    </div>

                    <div class="col">
                        <h6><b>KONTAK</b></h6>
                        <p>Jl. Al-Muwahhiddin, Karangtengah, Cibadak, Kab. Sukabumi.
                            Sukabumi 43351</p>
                        <p>(0266) 532510</p>
                        <a href="" style="color:  turquoise;">smkn1_cibadak@yahoo.co.id</a>
                    </div>
                    <div class="col">
                        <h6><b>LIKE US ON FACEBOOK</b></h6>
                        <img src="img/smk.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="down">
            <div class="container p-4">
                <div class="d-flex flex-row">
                    <p class="mr-auto my-auto" style="color: #858d91;">Copyright © <a href=""
                            style="color:  turquoise;">SMK
                            Negeri 1 Cibadak</a></p>
                    <p class="my-auto" style="color:#858d91;">Powered by <a href=""
                            style="color:  turquoise;">Multimedia</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>