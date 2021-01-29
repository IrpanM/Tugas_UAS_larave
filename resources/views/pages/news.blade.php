<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesi 11</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

</head>

<body>
    <section class="satu mb-5">
        <div class="header-background">
            <div class="container">
                <header class="header">
                    <nav class="navbar navbar-expand-lg navbar-dark">
                        <div class="container-fluid">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <a class="navbar-brand" href="{{url('/')}}"><img
                                    src="assets/img/HomeKeeper_Logo_InCloud.png" alt=""></a>
                            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="{{url('/news')}}">BLOG</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            TOUR
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">FEATURES</a></li>
                                            <li><a class="dropdown-item" href="#">SCREEN SHOTS</a></li>
                                            <li><a class="dropdown-item" href="#">TAKE A TOUR</a></li>
                                            <li><a class="dropdown-item" href="#">TAKE A TEST DRIVE</a></li>
                                            <li><a class="dropdown-item" href="#">FAQ</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item active dropdown">
                                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            WHY HOMEKEEPER
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">PEOPLE LOVE US</a></li>
                                            <li><a class="dropdown-item" href="#">HOUSING COUNSELING</a></li>
                                            <li><a class="dropdown-item" href="#">IMPACT MEASUREMENT</a></li>
                                            <li><a class="dropdown-item" href="#">ONLINE PROGRAM FORMS</a></li>
                                            <li><a class="dropdown-item" href="#">AWESOME SUPPORT</a></li>
                                            <li><a class="dropdown-item" href="#">POWERED BY SALESFORCE</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active active" aria-current="page" href="#">PRICING</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            ABOUT US
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">OUR HISTORY</a></li>
                                            <li><a class="dropdown-item" href="#">OUR PARTICIPATING ORGANIZATIONS</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#">OUR TEAM</a></li>
                                            <li><a class="dropdown-item" href="#">OUR VIDEOS</a></li>
                                            <li><a class="dropdown-item" href="#">OUR LATEST NEWS</a></li>
                                            <li><a class="dropdown-item" href="#">CONTACT US</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link active dropdown-toggle signup" href="#"
                                            id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            SIGN UP
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">BECOME A HOMEKEEPER ORGANIZATION</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#">PRICING - 2020 HOMEKEEPER FEE
                                                    SCHEDULE</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#">2020 TRAINING AND SUPPORT SCHEDULE
                                                </a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <i class="fa fa-search"></i>
                            </div>
                        </div>
                    </nav>
                    <div class="caption">
                        <h1>We make your job easier and your programs better</h1>
                        <a href="#" class="button">TAKE A TOUR</a>
                    </div>
                </header>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <h1 class="text-center pb-5">Keeping Up with HomeKeeper</h1>
            @foreach ($items as $item)
            <div class="content ">
                <h4 class="text-primary">{{$item->title}}</h4>
                <img src="{{Storage::url($item->image)}}" alt="image" style="width: 150px" class="img-thumbnail mb-3" />
                <p class="fst-italic">{{$item->text}}</p>
                <p class="fst-italic">Categories : {{$item->categories}}</p>
                <p class="fst-italic pb-3">Posted : {{$item->date}} By {{$item->author}}</p>
                <hr>
            </div>

            @endforeach

        </div>
    </section>
    <section class="enam">
        <p class="text-center">cant wait one of our fublic demos? contacs us a custom demo for your organization</p>
        <div class="container">
            <main class="enam">
                <div class="img">
                    <img src="assets/img/HomeKeeper_Logo_InCloud.png" alt="logo">
                </div>
                <div class="content">

                    <ul class="menu-footer">
                        <li>BLOG</li>
                        <li>
                            <a href="">TOUR</a>
                            <ul>
                                <li>Features</li>
                                <li>Screen Shoots</li>
                                <li>Take a tour</li>
                                <li>Take a test drive</li>
                                <li>FAQ</li>
                            </ul>
                        </li>
                        <li>
                            <a href="">My Homekeeper </a>
                            <ul>
                                <li>People love us</li>
                                <li>Housing counseling</li>
                                <li>Impact measurement</li>
                                <li>Online programs form</li>
                                <li>Awesome support</li>
                            </ul>
                        </li>
                        <li>
                            <a href="">About us</a>
                            <ul>
                                <li>Our Team</li>
                                <li>Our Patnership</li>
                                <li>Our History</li>
                                <li>Our Philosopy</li>
                                <li>Our Lates news</li>
                            </ul>
                        </li>
                        <li>
                            <a href="">Sign Up</a>
                            <ul>
                                <li>Become a Homekeeper</li>
                                <li>Organization</li>
                                <li>Training and Support</li>
                                <li>Schedule</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </main>


        </div>
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <img src="assets/img/grounded-solution.png" alt="logo" class="img-footer w-50">
                    </div>
                    <div class="col-sm">
                        <p>&copy;2020 Homekeeper, a program of grounded solutions network </p>
                        <p>website design indi tech solution | term of us</p>
                    </div>
                    <div class="col-sm">
                        <img src="assets/img/salesforce.png" alt="logo w-50">
                        <p>Available On</p>
                        <p>Sales Force App Exchange</p>
                    </div>

                </div>
            </div>

        </footer>
    </section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>
