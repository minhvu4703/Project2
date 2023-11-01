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
    <link rel="icon" type="image/x-icon" href="../../resources/Images/Vit.png">
    <link rel="stylesheet" href="../../resources/css/intro.css">
    <title>Trang quản trị - Quản lý đặt sân</title>
</head>
<body>
<div id="intro" class="bg-image">
    <div class="d-flex flex-nowrap">
        {{-- SideBar --}}
        <div
            class="d-flex flex-column flex-shrink-0 bg-success bg-gradient bg-opacity-75 border-end border-black border-1 ps-2">
            <a href="{{ route('customers.index') }}" class="link-dark border-bottom border-white border-1"
               style="width: 83px">
                <img src="../../resources/Images/admin.png" style="width: 100%">
            </a>
            <ul class=" nav nav-pills nav-flush flex-column mb-auto text-center">
                <li class="nav-item" style="margin-bottom: 20px; margin-top: 20px">
                    <a href="{{ route('dashboard.index') }}" class=""
                       style="width: 83px">
                        <img src="../../resources/Images/analytics.png" style="width: 50px; height: 50px">
                    </a>
                </li>
                <li class="nav-item" style="margin-bottom: 20px; margin-top: 20px">
                    <a href="{{ route('Fields.index') }}" class=""
                       style="width: 83px">
                        <img src="../../resources/Images/pitch.png" style="width: 50px; height: 50px">
                    </a>
                </li>
                <li class="nav-item" style="margin-bottom: 20px; margin-top: 20px">
                    {{--  --}}
                    <a href="{{ route('field_types.index') }}" class=""
                       style="width: 83px">
                        <img src="../../resources/Images/lineup.png" style="width: 50px; height: 50px">
                    </a>
                </li>
                <li class="nav-item" style="margin-bottom: 20px; margin-top: 20px">
                    <a href="{{ route('dashboard.customers') }}"
                       class="" style="width: 83px">
                        <img src="../../resources/Images/user.png" style="width: 50px; height: 50px">
                    </a>
                </li>
                <li class="nav-item  bg-info border border-white border-1"
                    style="margin-bottom: 20px; margin-top: 20px">
                    <a href="{{ route('dashboard.orders') }}" class=""
                       style="width: 83px">
                        <img src="../../resources/Images/clipboard.png" style="width: 50px; height: 50px">
                    </a>
                </li>
                <li class="nav-item" style="margin-bottom: 20px; margin-top: 20px">
                    {{-- {{ route('times.index') }} --}}
                    <a href="{{ route('times.index') }}" class=""
                       style="width: 83px">
                        <img src="../../resources/Images/timetable.png" style="width: 50px; height: 50px">
                    </a>
                </li>
                <li class="nav-item" style="margin-bottom: 20px; margin-top: 20px">
                    <a href="{{ route('admin.index') }}" class=""
                       style="width: 83px">
                        <img src="../../resources/Images/controller.png" style="width: 50px; height: 50px">
                    </a>
                </li>
            </ul>
            <div class="dropup border-top">
                <a href="#"
                   class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle"
                   data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="../../resources/Images/Vit.png" alt="Admin" width="42" height="42" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small shadow">
                    <li>
                        <a class="dropdown-item" href="#">Đăng xuất</a>
                    </li>
                </ul>
            </div>
        </div>
        {{-- End SideBar --}}
        <div class="col col-11 ps-3">
            <div style="background-color: white">
            <p><a href="{{route('customers.index')}}" class="link-primary">Trang chủ</a> / <a href="#"
                                                                                              class="link-secondary"
                                                                                              aria-disabled="true">Quản lý đặt sân</a></p>
            </div>
            <div>
                <h1 class="text-white mt-4 border-bottom border-white border-4 my-4"
                    style="font-family: 'system-ui'; font-size: xxx-large; text-align: center">QUẢN LÝ ĐẶT SÂN</h1>
            </div>
            <div class="">
                {{-- Table --}}
                <table class="table table-light table-striped mt-4" border="1px" cellpadding="0" cellspacing="0"
                       width="100%">
                    <thead>
                    <tr>
                        <th scope="col">ID đơn</th>
                        <th scope="col">Khách hàng</th>
                        <th scope="col">Người quản lý</th>
                        <th scope="col">Sân</th>
                        <th scope="col">Thời gian</th>
                        <th scope="col">Thành tiền</th>
                        <th scope="col">Trạng thái</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $item)
                        <tr>
                            <th scope="row">{{ $item -> id }}</th>
                            <td>{{ $item -> customers -> name }}</td>
                            <td>{{ $item -> admins -> name }}</td>
                            <td>{{ $item -> fields -> name }}</td>
                            <td>
                                {{ $item -> times -> timeStart }} - {{ $item -> times -> timeEnd }}<br>
                                {{ $item -> times -> date }}
                            </td>
                            <td>{{ $item -> total }}</td>
                            <td>{{ $item -> statuses -> status }}</td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
                {{ $orders->links() }}
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
