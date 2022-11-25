<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio - iyasz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/2.10.4/simple-lightbox.min.css"> -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

    <link rel="stylesheet" href="assets/vendor/lightbox/dist/simple-lightbox.css">
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

    .fw-600 {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
    }

    .fw-500 {
        font-family: 'Poppins', sans-serif;
        font-weight: 500;
    }

    .fw-400 {
        font-family: 'Poppins', sans-serif;
        font-weight: 400;
    }

    .fw-300 {
        font-family: 'Poppins', sans-serif;
        font-weight: 300;
    }

    .fw-200 {
        font-family: 'Poppins', sans-serif;
        font-weight: 200;
    }

    .navbar-dekstop .nav-link {
        font-size: 15px;
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
            left: 96%;
            --webkit-transform: scaleX(-1);
            transform: scaleX(-1);
        }

        100% {
            left: 0%;
        }

    }

    /* end profil  */

    /* project  */

    .projects {
        background-color: #F5F8FD;
        width: 100%;
    }

    .project:hover::before {
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        opacity: 1;
    }

    .project::before {
        content: '';
        position: absolute;
        background: rgba(255, 255, 255, 0.4);
        z-index: 2;
        opacity: 0;
        transition: all ease-in-out 0.3s;
    }

    .all-title {
        color: #1E3B6C;
    }

    .all-title::before {
        content: '';
        position: absolute;
        background-color: #707d9d;
        width: 70px;
        height: 3px;
        bottom: -13px;
    }

    .nav.nav-pills {
        width: max-content;
        display: flex;
        background: white;
        font-size: 13px;
        box-shadow: 0px 0px 9px rgba(0, 0, 0, 0.04);
    }

    .nav-pills .nav-item .nav-link {
        color: black;
    }

    .nav-pills .nav-link.active {
        background: none;
        color: #03b0fd;
    }

    .project {
        overflow: hidden;
        position: relative;
        transition: 0.3s;
    }

    .project .img-project {
        width: 100%;
        height: 180px;
        object-fit: cover;
    }

    .project:hover .content {
        bottom: 0 !important;
        opacity: 100%;
    }

    /* .project:hover+.project .content {
        display: flex;
        transition: 1s;
    } */

    /* .project .img-project a:hover+.bookmark,
    .plus {
        opacity: 100% !important;
        transition: 2s;
    } */

    .project .content {
        display: flex;
        justify-content: center;
        position: absolute !important;
        bottom: -30px !important;
        transition: all ease-in-out 0.3s;
        z-index: 3;
    }

    .content .bookmark,
    .plus {
        background: #03b0fd;
        width: 100%;
        display: flex;
        justify-content: center;
        font-size: 20px;
        opacity: 50% !important;
        color: white;
        transition: 0.5s;

    }

    .bookmark:hover,
    .plus:hover {
        opacity: 100% !important;
        transition: 0.5s;
        color: white;
    }

    /* end project  */

    /* game  */


    .judul {
        margin-top: 100px;
        width: 70%;
    }

    #point {
        font-size: 5rem;
        color: #1E3B6C;
    }

    .kana {
        width: 400px;
        -webkit-user-select: none;
        box-shadow: 8px 8px 0 #264653;
    }

    .content-game .btn-game {
        position: absolute;
        right: 0;
        top: 0;
        left: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0);
    }

    .move {
        /* animation: shake .5s cubic-bezier(.36, .07, .19, .97) both;
        transform: translate3d(0, 0, 0);
        perspective: 1000px; */
    }

    @keyframes shake {

        10%,
        90% {
            transform: translate3d(-10px, 10px, 0);
        }

        20%,
        80% {
            transform: translate3d(20px, 5px, 0);
        }

        30%,
        50%,
        70% {
            transform: translate3d(-14px, -10px, 0);
        }

        40%,
        60% {
            transform: translate3d(14px, -5px, 0);
        }
    }




    @media screen and (max-width: 480px) {
        .kana {
            width: 300px;
            height: 300px;
        }

        #point {
            font-size: 50px;
        }
    }

    /* end game  */

    /* about  */

    /* .shadow-inner {
        box-shadow: inset 3px 3px 0px rgba(0, 0, 0, 0.9);
        width: 200px;
        background: transparent;
        background-image: url("https://i.ibb.co/CvmTTWC/aj.jpg");
        background-size: cover;
    } */


    .img-about {
        border: 7px solid white;
        box-shadow: 0px 0px 15px 1px rgba(0, 0, 0, 0.3);
        position: relative;
    }

    .img-about::after {
        content: '';
        position: absolute;
        border: 5px solid red;
        width: 100%;
        background-color: red;
        z-index: 9994;
        top: 0;
        left: 0;
        bottom: 0;
        height: 100%;
        right: 12px;
    }

    .title-about {
        font-size: 44px;
    }

    @media (min-width: 576px) and (max-width: 767px) {
        .title-about {
            font-size: 30px !important;
        }
    }

    @media (min-width: 0px) and (max-width: 575px) {
        .title-about {
            font-size: 32px !important;
        }
    }

    /* end about  */

    /* contact  */

    .swiper {
        width: 100%;
        height: 100%;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .contact-card {
        background-color: #F5F8FD;
        width: 100%;
        height: 100%;
        border-radius: 9px;
    }

    .contact-card p {
        font-size: 14px;
        letter-spacing: 0.6px;
    }

    /* end contact  */


    .reveal {
        position: relative;
        transform: translateY(100px);
        opacity: 0%;
        transition: all 0.8s ease;
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
                <ul class="navbar-nav navbar-dekstop mx-auto fw-400">
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- mobile view  -->

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

    <section id="home">
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
                        <a href="https://github.com/iyasz" class="btn btn-info btn-profile px-5 py-2 fw-300">Github</a>
                        <a href="" class="btn btn-info btn-profile px-5 py-2 ms-1 fw-300">Resume</a>
                    </div>
                </div>
            </div>
            <div class="row mt-5 d-none d-lg-block d-md-block">
                <div class="col-lg-12">
                    <div class="animate">
                        <img class="img-animate" width="70px" src="https://ryanharveyauthor.files.wordpress.com/2018/09/clydeeghost.png" alt="">
                        <img class="img-animate2" width="70px" src="https://www.pngmart.com/files/2/Pac-Man-Ghost-PNG-Image.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>

    <section class="projects mt-5" id="projects">
        <div class="container  mt-5">
            <div class="row ">
                <div class="col-12 ">
                    <h2 class="fw-600 my-3 all-title position-relative rounded-4">My Projects</h2>
                </div>
            </div>
            <div class="mt-3">
                <p class="fw-200 "> These are some of the projects I've made from the start of programming until now.</p>
            </div>
            <div class="row mt-4 justify-content-center ">
                <div class="col-lg-12 justify-content-center">
                    <ul class="nav nav-pills mb-3 mx-auto rounded-pill fw-300" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">All</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Web</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Design</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false">Dekstop</button>
                        </li>
                    </ul>
                    <div class="tab-content mt-4 pb-5 reveal" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                            <div class="row justify-content-center gallery">
                                <div class="col-lg-4 col-md-6 col-12 gy-4 ">
                                    <div class="project position-relative ">
                                        <img src="https://i.ibb.co/pbfgkGw/web2.png" class="img-project w-100" alt="">
                                        <div class="content position-absolute bottom-0 w-100 ">
                                            <a href="https://i.ibb.co/pbfgkGw/web2.png" class="plus"><i class="bi bi-plus-lg"></i></a>
                                            <a href="bookmark" class="bookmark "><i class="bi bi-bookmark"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 gy-4 ">
                                    <div class="project position-relative ">
                                        <img src="https://i.ibb.co/W0yg5kF/web4.png" class="img-project w-100" alt="">
                                        <div class="content position-absolute bottom-0 w-100 ">
                                            <a href="https://i.ibb.co/W0yg5kF/web4.png" class="plus"><i class="bi bi-plus-lg"></i></a>
                                            <a download="https://i.ibb.co/W0yg5kF/web4.png" href="bookmark" class="bookmark "><i class="bi bi-bookmark"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 gy-4 ">
                                    <div class="project position-relative ">
                                        <img src="https://i.ibb.co/vL5QRpn/web5.png" class="img-project w-100" alt="">
                                        <div class="content position-absolute bottom-0 w-100 ">
                                            <a href="https://i.ibb.co/vL5QRpn/web5.png" class="plus"><i class="bi bi-plus-lg"></i></a>
                                            <a href="bookmark" class="bookmark "><i class="bi bi-bookmark"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 gy-4 ">
                                    <div class="project position-relative ">
                                        <img src="https://i.ibb.co/xCPk22P/web6.png" class="img-project w-100" alt="">
                                        <div class="content position-absolute bottom-0 w-100 ">
                                            <a href="https://i.ibb.co/xCPk22P/web6.png" class="plus"><i class="bi bi-plus-lg"></i></a>
                                            <a href="bookmark" class="bookmark "><i class="bi bi-bookmark"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 gy-4 ">
                                    <div class="project position-relative ">
                                        <img src="https://i.ibb.co/rQH70jJ/web7.png" class="img-project w-100" alt="">
                                        <div class="content position-absolute bottom-0 w-100 ">
                                            <a href="https://i.ibb.co/rQH70jJ/web7.png" class="plus"><i class="bi bi-plus-lg"></i></a>
                                            <a href="bookmark" class="bookmark "><i class="bi bi-bookmark"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                            <div class="row justify-content-center gallery2">
                                <div class="col-lg-4 col-md-6 col-12 gy-4 ">
                                    <div class="project position-relative ">
                                        <img src="https://i.ibb.co/0ZFRnt9/web8.png" class="img-project w-100" alt="">
                                        <div class="content position-absolute bottom-0 w-100 ">
                                            <a href="https://i.ibb.co/0ZFRnt9/web8.png" class="plus"><i class="bi bi-plus-lg"></i></a>
                                            <a href="bookmark" class="bookmark "><i class="bi bi-bookmark"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 gy-4 ">
                                    <div class="project position-relative ">
                                        <img src="https://i.ibb.co/93RwSv1/web9.png" class="img-project w-100" alt="">
                                        <div class="content position-absolute bottom-0 w-100 ">
                                            <a href="https://i.ibb.co/93RwSv1/web9.png" class="plus"><i class="bi bi-plus-lg"></i></a>
                                            <a href="bookmark" class="bookmark "><i class="bi bi-bookmark"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                            <div class="row justify-content-center gallery3">
                                <div class="col-lg-4 col-md-6 col-12 gy-4 ">
                                    <div class="project position-relative ">
                                        <img src="https://i.ibb.co/Ypjk7H2/web10.png" class="img-project w-100" alt="">
                                        <div class="content position-absolute bottom-0 w-100 ">
                                            <a href="https://i.ibb.co/Ypjk7H2/web10.png" class="plus"><i class="bi bi-plus-lg"></i></a>
                                            <a href="bookmark" class="bookmark "><i class="bi bi-bookmark"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 gy-4 ">
                                    <div class="project position-relative ">
                                        <img src="https://i.ibb.co/71vN1dn/web11.png" class="img-project w-100" alt="">
                                        <div class="content position-absolute bottom-0 w-100 ">
                                            <a href="https://i.ibb.co/71vN1dn/web11.png" class="plus"><i class="bi bi-plus-lg"></i></a>
                                            <a href="bookmark" class="bookmark "><i class="bi bi-bookmark"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">
                            <div class="row justify-content-center gallery4">
                                <div class="col-lg-4 col-md-6 col-12 gy-4 ">
                                    <div class="project position-relative ">
                                        <img src="https://i.ibb.co/rvw62NM/New-Project-46-FE17-AD8.png" class="img-project w-100" alt="">
                                        <div class="content position-absolute bottom-0 w-100 ">
                                            <a href="https://i.ibb.co/rvw62NM/New-Project-46-FE17-AD8.png" class="plus"><i class="bi bi-plus-lg"></i></a>
                                            <a href="bookmark" class="bookmark "><i class="bi bi-bookmark"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="game">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 ">
                    <h2 class="fw-600 my-3 all-title position-relative rounded-4">Playing Game</h2>
                </div>
            </div>
            <div class="row text-center justify-content-center reveal mt-3">
                <div class="col-lg-12 position-relative">
                    <div class="content-game ">
                        <h5 class="">Click Or Touch</h5>
                        <!-- <img src="img/popcat.svg" class="judul" alt="" /> -->
                        <h1 id="point">0</h1>
                        <h5 id="info-game"></h5>
                        <img src="https://i.ibb.co/zr547QB/New-Project-39-059-A32-A.png" class="kana mt-4" />
                        <div class="btn-game"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="projects mt-5" id="about">
        <div class="container mt-5 ">
            <div class="row">
                <div class="col-12 ">
                    <h2 class="fw-600 my-3 all-title position-relative rounded-4">Biodata</h2>
                </div>
            </div>
            <div class="row justify-content-center mt-4 reveal pb-4">
                <div class="col-lg-4 col-md-6 col-8">
                    <div class="">
                        <img src="https://i.ibb.co/CvmTTWC/aj.jpg" class="rounded-circle mt-2 img-about" width="300px" alt="">
                    </div>
                </div>
                <div class="col-lg-8 mt-4 mt-lg-0 mt-md-3 overflow-hidden">
                    <p class="mb-0 fw-300">Hi everyone!</p>
                    <h1 class="title-about fw-600">Muhammad Ilyasa :3 </h1>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12 ">
                    <h2 class="fw-600 my-3 all-title position-relative rounded-4">Contact</h2>
                </div>
            </div>
            <div class="swiper mySwiper mt-5 ">
                <div class="swiper-wrapper ">
                    <div class="swiper-slide">
                        <div class="contact-card">
                            <h1><i class="bi bi-github"></i></h1>
                            <div class="">
                                <h3>GitHub</h3>
                                <p class="opacity-75 fw-300">@iyasz</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="contact-card">
                            <h1><i class="bi bi-facebook"></i></h1>
                            <div class="">
                                <h3>Facebook</h3>
                                <p class="opacity-75 fw-300">@Mhmmad ILyasa</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="contact-card">
                            <h1><i class="bi bi-linkedin"></i></h1>
                            <div class="">
                                <h3>LinkedIn</h3>
                                <p class="opacity-75 fw-300">@yaszavellia</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="contact-card">
                            <h1><i class="bi bi-instagram"></i></h1>
                            <div class="">
                                <h3>Instagram</h3>
                                <p class="opacity-75 fw-300">@yaszavellia</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="contact-card">
                            <h1><i class="bi bi-telegram"></i></h1>
                            <div class="">
                                <h3>Telegram</h3>
                                <p class="opacity-75 fw-300">@Yaszavellia</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-12 text-lg-end text-md-end text-center">
                    <a class="text-dark mx-3" href="https://github.com/iyasz"><i class="bi bi-github"></i></a>
                    <p class="d-inline fw-300 opacity-75">GitHub</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/2.10.4/simple-lightbox.min.js"></script> -->

    <script src="assets/vendor/lightbox/dist/simple-lightbox.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script src="main.js"></script>


</body>

</html>