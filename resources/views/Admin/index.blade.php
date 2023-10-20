<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"/>
    <script src="https://kit.fontawesome.com/dfb2727f7d.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="../resources/Images/Vit.png">
    <title>Trang quản trị</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
    <link rel="stylesheet" href="../resources/css/intro.css">
</head>
<body id="intro" class="bg-image">
<div class="mask">
<div class="container-fluid pt-1">
    <div class="row">
        <div class="col col-1 bg-success bg-opacity-75 bg-gradient border border-white border-1 justify-content-between">
            <a href="" class="link-dark">
                <img src="../resources/Images/Vit.png" style="width: 100%">
            </a>
            <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
                <li class="nav-item">
                    <a href="#" class="nav-link bg-info py-3 border-bottom border-black border-2">
                        <img src="../resources/Images/bar-graph.png" style="width: 80%">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('fields.index') }}" class="nav-link py-3 border-bottom border-black border-2">
                        <img src="../resources/Images/72.png" style="width: 80%">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('Admin.customers') }}" class="nav-link py-3 border-bottom border-black border-2">
                        <img src="../resources/Images/end-user.png" style="width: 80%">
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link py-3 border-bottom border-black border-2">
                        <img src="../resources/Images/clipboard.png" style="width: 80%">
                    </a>
                </li>
            </ul>
            <div class="dropdown border-top">
                <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="../resources/Images/Vit.png" alt="" width="50" height="50" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small shadow">
                    <li>
                        <a class="dropdown-item" href="#" >Đăng xuất</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col col-11">
            <div class="" style="background-color: #e0e0e0">
                <p><a href="{{route('Customer.index')}}" class="link-primary">Trang chủ</a> / <a href="#" class="link-secondary" aria-disabled="true">Thống kê</a></p>
            </div>
            <div>
                <h1 class="text-white mt-4" style="font-family: 'Segoe UI Black'; font-size: xxx-large">THỐNG KÊ</h1>
            </div>
            <ul class="list-group list-group-flush border-top border-4 my-4">
                <li class="list-group-item d-flex justify-content-between align-items-start mt-4">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Sân 7</div>
                        Số lượng sân 7
                    </div>
                    <span class="fs-1">{{$count7}}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start mt-4">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Sân 11</div>
                        Số lượng sân 11
                    </div>
                    <span class="fs-1">{{$count11}}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start mt-4">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Người dùng</div>
                        Số lượng người dùng đã đăng ký
                    </div>
                    <span class="fs-1">{{$custCount}}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start mt-4">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Nhân viên</div>
                        Số lượng nhân viên
                    </div>
                    <span class="fs-1">{{ $adCount }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start mt-4">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Đặt sân</div>
                        Số lượng đơn đặt sân
                    </div>
                    <span class="fs-1">{{ $ordCount }}</span>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
