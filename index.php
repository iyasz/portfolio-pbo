<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;600&display=swap" rel="stylesheet">
</head>

<style>
    body {
        height: 1700px;
    }

    @media (min-width: 576px) and (max-width: 767px) {
        .title-name {
            font-size: 44px !important;
        }

        .title-say {
            font-size: 35px !important;
        }

        .title-say img {
            width: 45px;
        }

        .title-profile p {
            font-size: 18px !important;
        }

        .title-say span {
            top: 8px !important;
        }
    }

    @media (min-width: 0px) and (max-width: 575px) {
        .title-name {
            font-size: 33px !important;
        }

        .title-say {
            font-size: 34px !important;
        }

        .title-say img {
            width: 65px !important;
        }

        .title-say span {
            top: 13px !important;
        }

        .title-profile p {
            font-size: 15.5px !important;
        }
    }

    .btn .fw-600 {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
    }

    .fw-300 {
        font-family: 'Poppins', sans-serif;
        font-weight: 300;
    }

    .fw-200 {
        font-family: 'Poppins', sans-serif;
        font-weight: 200;
    }

    .title-say {
        font-size: 45px;
    }

    .title-say span {
        position: relative;
        top: 7px;
    }

    .title-name {
        font-size: 60px;
        letter-spacing: 1.5px;
    }

    .bg-first {
        background-color: #FFE593;
    }

    .bg-last {
        background-color: #96E5CC;
    }

    .btn-profile {
        background-color: transparent;
        border-radius: 0;
        border: 1px solid #707d9d;
    }

    .btn-profile:hover {
        background: transparent !important;
        border: 1px solid #707d9d;
        box-shadow: 5px 5px 0 #707d9d;
    }

    .btn-profile:focus {
        border: 1px solid #707d9d !important;
    }

    /* .animate {
        animation-name: ghost;
    } */

    .animate .img-animate {
        position: relative;
        animation: ghost 13s infinite;
    }

    .animate .img-animate2 {
        position: relative;
        animation: ghost 15s infinite;
        animation-delay: 0.4s;
    }

    @keyframes ghost {
        0% {
            left: 0%;
        }

        50% {
            left: 90%;
            --webkit-transform: scaleX(-1);
            transform: scaleX(-1);
        }

        100% {
            left: 0%;
        }

    }


    .reveal {
        position: relative;
        transform: translateY(150px);
        opacity: 5%;
        transition: all 1.4s ease;
    }

    .reveal.active {
        transform: translateY(0px);
        opacity: 100%;
    }
</style>

<body>

    <!-- dekstop view  -->

    <nav class="navbar navbar-expand-sm bg-transparent d-lg-block d-md-block d-none py-4">
        <div class="container">
            <a class="navbar-brand fw-600" href="#">Yasz!</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">Projects</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-dark bg-dark d-lg-none d-md-none d-block">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Offcanvas dark navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-5 ">
        <div class="row">
            <div class="col-7">
                <p class="title-say fw-300 "><img src="https://static.wixstatic.com/media/269653_f8294923a5304079bed95d039fa9a193~mv2.gif" alt="bandar" width="60px" class="rounded-circle "> <span class=""> , I'm</span></p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10">
                <div class="">
                    <h1 class="title-name fw-600"><span class="bg-first"> Muhammad</span> <span class="bg-last">Ilyasa</span></h1>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-10">
                <div class="title-profile">
                    <p class="fw-200 fs-5">
                        I am a student from Bina mandiri multimedia High School. I like design elements and challenging logic. I also like to join free bootcamps to improve my soft skills and I'm currently learning about Laravel. </p>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-9">
                <div class="">
                    <a href="" class="btn btn-info btn-profile px-5 py-2 fw-300">Github</a>
                    <a href="" class="btn btn-info btn-profile px-5 py-2 ms-1 fw-300">Resume</a>
                </div>
            </div>
        </div>
        <div class="row mt-5 d-none d-lg-block d-md-block">
            <div class="col-lg-12">
                <div class="animate">
                    <img class="img-animate" width="70px" src="https://ryanharveyauthor.files.wordpress.com/2018/09/clydeeghost.png" alt="">
                    <img class="img-animate2" width="77px" src="https://www.pngmart.com/files/2/Pac-Man-Ghost-PNG-Image.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- mobile view  -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="main.js"></script>


</body>

</html>