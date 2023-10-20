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
    <link rel="icon" type="image/x-icon" href="../../resources/Images/ava-web.png">
    <title>Trang quản trị - Quản lý đặt sân</title>
</head>
<body style="background-color: whitesmoke">
<div class="d-flex flex-nowrap">
    <div class="d-flex flex-column flex-shrink-0 bg-success bg-gradient border-end border-black border-1 ps-2">
        <a href="{{ route('customers.index') }}" class="link-dark" style="width: 83px">
            <img src="../../resources/Images/ava-web.png" style="width: 100%">
        </a>
        <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
            <li class="nav-item">
                <a href="{{ route('admin.index') }}" class="nav-link py-3 border-bottom border-black border-2" style="width: 83px">
                    <img src="../../resources/Images/bar-chart.png" style="width: 24px; height: 24px">
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('fields.index') }}" class="nav-link py-3 border-bottom border-black border-2" style="width: 83px">
                    <img src="../../resources/Images/football-field.png" style="width: 24px; height: 24px">
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link py-3 border-bottom border-black border-2" style="width: 83px">
                    <img src="../../resources/Images/customer.png" style="width: 24px; height: 24px">
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link py-3 bg-warning border-bottom border-black border-2" style="width: 83px">
                    <img src="../../resources/Images/clipboard.png" style="width: 24px; height: 24px">
                </a>
            </li>
        </ul>
        <div class="dropup border-top">
            <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="../../resources/Images/ava-web.png" alt="Admin" width="42" height="42" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small shadow">
                <li>
                    <a class="dropdown-item" href="#" >Đăng xuất</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col col-11 ps-3">
        <p><a href="{{ route('customers.index') }}" class="link-primary">Trang chủ</a> / <a href="#" class="link-secondary" aria-disabled="true">Quản lý đặt sân</a></p>
        <div>
            <h1 class="text-success mt-4" style="font-family: 'Segoe UI Black'; font-size: xxx-large">QUẢN LÝ ĐẶT SÂN</h1>
        </div>
        <div class="border-top border-success border-4 my-4">
            {{--            Table--}}
            <table class="table table-success table-striped mt-4" border="1px" cellpadding="0" cellspacing="0" width="100%">
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
<!--                                                <td>-->
<!--                                                    <a class="btn" href="{{ route('customers.edit', $item->id) }}">Sửa</a>-->
<!--                                                    <button type="button" class="btn btn-danger btn-lg my-1" data-bs-toggle="modal" data-bs-target="#myModal{{ $item->id }}"><i class="fa-solid fa-dumpster fa-shake"></i></button>-->

<!--                                                    Modal-->
<!--                                                    <div class="modal fade" id="myModal{{ $item->id }}">-->
<!--                                                        <div class="modal-dialog">-->
<!--                                                            <div class="modal-content">-->
                                                                <!-- Modal Header -->
<!--                                                                <div class="modal-header">-->
<!--                                                                    <h4 class="modal-title">Xác nhận xóa</h4>-->
<!--                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>-->
<!--                                                                </div>-->

                                                                <!-- Modal body -->
<!--                                                                <div class="modal-body">-->
<!--                                                                    Bạn có chắc chắn muốn xóa mục này?-->
<!--                                                                </div>-->

                                                                <!-- Modal footer -->
<!--                                                                <div class="modal-footer">-->
<!--                                                                    <div class="modal-footer">-->
<!--                                                                        <button class="btn btn-light" data-bs-dismiss="modal">Không</button>-->
<!--                                                                        <form method="post" action="{{ route('customers.destroy', $item->id) }}">-->
<!--                                                                            @csrf-->
<!--                                                                            @method('DELETE')-->
<!--                                                                            <button class="btn">Xoá</button>-->
<!--                                                                        </form>-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </td>-->
                    </tr>
                @endforeach
                </tbody>

            </table>
            {{ $orders->links() }}
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
