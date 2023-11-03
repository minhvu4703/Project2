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

</head>
<body>
<div id="intro" class="bg-image">
    <div class="mask">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom" style="background-color:green">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('customers.index') }}"><img
                        src="../../resources/Images/Vit.png" alt="" height=10% width=10%>SigmaDuck - Cho thuê Sân Bóng
                    đá</a>
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
                            <a class="nav-link active" href="#">Đặt sân</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('customers.history') }}">Lịch sử</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End navbar -->
        <!-- Main -->
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
            {{-- Main --}}
            <div class="row">
                <div class="row mt-2 mb-2 me-1" style="background-color: green">
                    <b class="text-white" style="font-size: x-large; text-align: center">ĐẶT SÂN</b>
                </div>
                <form class="needs-validation" action="{{route('orders.store')}}" method="post" novalidate>
                    @csrf
                    <div class="row py-2 me-5">
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingName{{ Session::get('customers')['id'] }}" placeholder="Họ tên"
                                       value="{{ Session::get('customers')['name'] }}" disabled required>
                                <label for="floatingName{{ Session::get('customers')['id'] }}" class="form-label">Họ và tên</label>
                                <div class="invalid-feedback">Ô này không được để trống</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingNumber"
                                       placeholder="Số điện thoại" value="{{ Session::get('customers')['phonenumber'] }}" disabled required>
                                <label for="floatingNumber" class="form-label">Số điện thoại</label>
                                <div class="invalid-feedback">Ô này không được để trống</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input placeholder="Select date" class="form-control" type="date" name="date" id="date" min="{{ $datenow }}" placeholder="Chọn ngày" required>
                                <label for="Date" class="form-label">Chọn ngày</label>
                                <div id="unvaliDATE"></div>
                                <div class="invalid-feedback">Ô này không được để trống</div>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" name="times" id="times" required>
                                </select>
                                <label for="TimeEnd">Chọn khung giờ</label>
                                <div class="invalid-feedback">Ô này không được để trống</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <select class="form-select" id="types" required>
                                    <option value="" selected>Chọn loại sân</option>
                                    @foreach($types as $items)
                                        <option id="type{{$items -> id}}"
                                                value="{{ $items -> id }}">{{ $items -> type }}</option>
                                    @endforeach
                                </select>
                                <label for="types">Loại sân</label>
                                <div class="invalid-feedback">Ô này không được để trống</div>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" name="fields" id="fields" required>
                                </select>
                                <label for="fields">Sân</label>
                                <div class="invalid-feedback">Ô này không được để trống</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" name="order_note" id="order_note" required>
                                <label for="order_note" class="form-label">Ghi chú</label>
                                <div class="invalid-feedback">Ô này không được để trống</div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Đặt sân</button>
                    </div>
                </form>
            </div>
            {{-- End Main --}}
        </div>
    </div>
</div>
<!--Footer-->
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="../../resources/js/order.js"></script>
<script src="../../resources/js/validate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
