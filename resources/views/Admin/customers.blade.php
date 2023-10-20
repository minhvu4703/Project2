<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    >
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css"
        rel="stylesheet"
    />
    <script src="https://kit.fontawesome.com/dfb2727f7d.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="../../Images/Vit.png">
    <title>Trang quản trị - Quản lý người dùng</title>
    <link rel="stylesheet" href="../../css/intro.css">
</head>
<body>
<div id="intro" class="bg-image">
    <div class="mask">
<div class="d-flex flex-nowrap">
    <div class="d-flex flex-column flex-shrink-0 bg-success bg-gradient border-end border-black border-1 ps-2">
        <a href="{{ route('customers.index') }}" class="link-dark" style="width: 83px">
            <img src="../../Images/Vit.png" style="width: 100%">
        </a>
        <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
            <li class="nav-item">
                <a href="{{ route('admin.index') }}" class="nav-link py-3 border-bottom border-black border-2" style="width: 83px">
                    <img src="../../Images/bar-graph.png" style="width: 24px; height: 24px">
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('fields.index') }}" class="nav-link py-3 border-bottom border-black border-2" style="width: 83px">
                    <img src="../../Images/72.png" style="width: 24px; height: 24px">
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link py-3 bg-warning border-bottom border-black border-2" style="width: 83px">
                    <img src="../../Images/end-user.png" style="width: 24px; height: 24px">
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link py-3 border-bottom border-black border-2" style="width: 83px">
                    <img src="../../Images/clipboard.png" style="width: 24px; height: 24px">
                </a>
            </li>
        </ul>
        <div class="dropup border-top">
            <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="../../Images/Vit.png" alt="Admin" width="42" height="42" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small shadow">
                <li>
                    <a class="dropdown-item" href="#" >Đăng xuất</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col col-11 ps-3">
        <p><a href="{{ route('customers.index') }}" class="link-primary">Trang chủ</a> / <a href="#" class="link-secondary" aria-disabled="true">Quản lý người dùng</a></p>
        <div>
            <h1 class="text-white" style="font-family: 'Segoe UI Black'; font-size: xxx-large">QUẢN LÝ NGƯỜI DÙNG</h1>
        </div>
        <div class="border-top border-4 my-4">
<!--            Table-->
            <table class="table table-success table-striped mt-4" border="1px" cellpadding="0" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th scope="col">ID người dùng</th>
                    <th scope="col">Họ và tên</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mật khẩu</th>
                </tr>
                </thead>
                <tbody>
                @foreach($customers as $item)
                    <tr>
                        <th scope="row">{{ $item -> id }}</th>
                        <td>{{ $item -> name }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->phonenumber }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->password }}</td>
<!--
                    </tr>
                @endforeach
                </tbody>

            </table>
            {{ $customers->links() }}
        </div>
    </div>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>