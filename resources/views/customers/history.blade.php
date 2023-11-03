<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/dfb2727f7d.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="../../resources/Images/Vit.png">
    <title>Trang chủ - SigmaDuck</title>
    <link rel="stylesheet" href="../../resources/css/intro.css">
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />
</head>
<body>
<!-- Navbar -->
<div id="intro" class="bg-image">
    <div class="mask">
        <nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom" style="background-color:green">
            <div class="container-fluid ">
                <a class="navbar-brand " href="{{ route('customers.index') }}"><img src="../../resources/Images/Vit.png"
                                                                                    alt="" height=10% width=10%>SigmaDuck
                    - Cho thuê Sân Bóng đá</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offset-md-5 collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-2">
                        <li class="nav-item">
                            <a class="nav-link text-white" aria-current="page" href="{{ route('customers.index') }}">Trang
                                chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Lịch sử</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('customers.logout') }}">Đăng xuất</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End navbar -->
        <div class=" border-bottom" style="background-color: green; color: white">
            <marquee behavior="" direction="left" scrollamount="15">Trang web cho thuê sân bóng đá hàng đầu Việt Nam
            </marquee>
        </div>
        <div class="col">
            <div class="col-5 col-md-8 offset-md-2">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img height="300" src="../../resources/Images/san.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img height="300"
                                 src="https://dxbhsrqyrr690.cloudfront.net/sidearm.nextgen.sites/ung.sidearmsports.com/images/2023/3/28/IMG_8243_F57vK.jpg"
                                 class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img height="300" src="../../resources/Images/san1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img height="300"
                                 src="https://patch.com/img/cdn20/users/103600/20210910/073254/styles/patch_image/public/turf-field-opens-goal-___10185029396.jpg"
                                 class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!--         Main           -->
            <div class="row">
                <div class="row mt-1" style="margin-bottom: 50px; margin-top: 50px">
                    <b class="text-white bg-success" style="font-size: x-large; text-align: center">LỊCH SỬ ĐẶT SÂN</b>
                </div>
                <div class="d-flex d-flex justify-content-evenly my-2" style="align-content: center">
                </div>
            </div>
            {{--         End Main           --}}
        </div>
        {{--    Messi    --}}
        {{--        <div class="row mt-2">--}}
        {{--            <marquee behavior="" direction="right" scrollamount="30"> <img src="../../resources/Images/mesi.png" height= 7% width= 7%></marquee>--}}
        {{--        </div>--}}
    </div>
</div>
<footer class="d-flex flex-warp justify-content-between align-items-center py-1"
        style="background-color: green">
    <div class="col-md-4 align-items-center text-white ms-3" style="--bs-text-opacity: .75;">© 2023 SigmaDuck
        Copyright.
    </div>
    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex me-3">
        <li class="ms-3" style="font-size: 25px">
            <a href="https://twitter.com" class="text-white" style="--bs-text-opacity: .75;"><i
                    class="fa-brands fa-twitter"></i></a>
        </li>
        <li class="ms-3" style="font-size: 25px">
            <a href="https://www.facebook.com" class="text-white" style="--bs-text-opacity: .75;"><i
                    class="fa-brands fa-facebook"></i></a>
        </li>
        <li class="ms-3" style="font-size: 25px">
            <a href="https://github.com/SaikiroMurphy/Project2Frontend" class="text-white"
               style="--bs-text-opacity: .75;"><i class="fa-brands fa-github"></i></a>
        </li>
    </ul>
</footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>
</html>
