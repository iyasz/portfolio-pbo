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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/2.10.4/simple-lightbox.css">
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

    .overflow-projects {
        background-color: #eaeaea;
        height: 230px;
        overflow-x: auto;
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
        font-size: 12px;
        box-shadow: 0px 0px 9px rgba(0, 0, 0, 0.04);
    }

    .nav-pills .nav-item .nav-link {
        color: black;
    }

    .nav-pills .nav-link.active {
        background: none;
        color: #03b0fd;
    }

    .project .img-project {
        object-fit: cover;
    }

    /* end project  */


    .reveal {
        position: relative;
        transform: translateY(150px);
        opacity: 5%;
        transition: all 1s ease;
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

    <section class="projects reveal" id="projects mt-5">
        <div class="container  mt-5">
            <div class="row ">
                <div class="col-12 ">
                    <h2 class="fw-600 my-3 all-title position-relative rounded-4">My Projects</h2>
                </div>
            </div>
            <div class="mt-3">
                <p class="fw-200 "> These are some of the projects I've made from the start of programming until now.</p>
            </div>
            <div class="row mt-4 justify-content-center">
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
                    <div class="tab-content mt-4 pb-5" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                            <div class="row justify-content-center gallery">
                                <div class="col-lg-4 col-md-6 col-12 gy-4">
                                    <div class="project ">
                                        <a href="https://kickflip.digital/wp-content/uploads/2018/12/perpetto-redesign.png">
                                            <img src="https://kickflip.digital/wp-content/uploads/2018/12/perpetto-redesign.png" class="img-project w-100" alt="">
                                        </a>
                                        <div class="content">
                                            <a href=""></a>
                                            <a href=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 gy-4">
                                    <div class="project ">
                                        <a href="https://kickflip.digital/wp-content/uploads/2018/12/perpetto-redesign.png">
                                            <img src="https://kickflip.digital/wp-content/uploads/2018/12/perpetto-redesign.png" class="img-project w-100" alt="">
                                        </a>
                                        <div class="content">
                                            <a href=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">web</div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">design</div>
                        <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">dekstop</div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/2.10.4/simple-lightbox.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script src="main.js"></script>


</body>

</html>