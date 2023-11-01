<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    />
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css"
        rel="stylesheet"
    />
    <script src="https://kit.fontawesome.com/dfb2727f7d.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="../../resources/Images/Vit.png">
    <title>Trang quản trị - Quản lý sân</title>
    <link rel="stylesheet" href="../../resources/css/intro.css">
    <link rel="stylesheet" href="../../resources/css/sidebar.css">

</head>
<body>
<div id="intro" class="bg-image">
<div class="mask">
<div class="d-flex flex-nowrap">

    <!--Sidebar -->
    <div id="sidebar" class="d-flex flex-column flex-shrink-0 bg-success bg-opacity-75 bg-gradient border border-white border-1 ps-2">
        <a href="{{ route('dashboard.index') }}" class="link-dark border-bottom border-white border-5" style="width: 83px">
            <img src="../../resources/Images/admin.png" style="width: 100%">
        </a>
        <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
            <li class="nav-item " style="margin-bottom: 20px; margin-top: 20px">
                <a href="{{ route('dashboard.index') }}" class="" style="width: 83px">
                    <img src="../../resources/Images/analytics.png" style="width: 50px; height: 50px">
                </a>
            </li>
            <li class="nav-item bg-info border border-white border-1" style="margin-bottom: 20px; margin-top: 20px">
                <a href="#" class="" style="width: 83px">
                    <img src="../../resources/Images/pitch.png" style="width: 50px; height: 50px">
                </a>
            </li>
            <li class="nav-item" style="margin-bottom: 20px; margin-top: 20px">
                <a href="{{ route('dashboard.customers') }}" class="" style="width: 83px">
                    <img src="../../resources/Images/end-user.png" style="width: 50px; height: 50px">
                </a>
            </li>
            <li class="nav-item" style="margin-bottom: 20px; margin-top: 20px">
                <a href="#" class="" style="width: 83px">
                    <img src="../../resources/Images/clipboard.png" style="width: 50px; height: 50px">
                </a>
            </li>
        </ul>
        <div class="dropup border-top">
            <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="../../resources/Images/Vit.png" alt="Admin" width="42" height="42" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small shadow">
                <li>
                    <a class="dropdown-item" href="#" >Đăng xuất</a>
                </li>
            </ul>
        </div>
    </div>

    <!--Main -->
    <div class="col col-11 ps-3">

        <!--Bread crumb -->
        <div class="" style="background-color: white">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('customers.index') }}">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Quản lý sân</li>
            </ol>
        </nav>
        </div>

        <!--Title -->
        <div>
            <h1 class="text-white mt-4" style="font-family: 'system-ui'; font-size: xxx-large ; text-align: center">QUẢN LÝ SÂN</h1>
        </div>
        <div class="border-top border-4 my-4">

<!--Table -->
            <table class="table table-info table-striped" border="1px" cellpadding="0" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <a class="btn btn-success btn-lg my-2" href="#"><i class="fa-solid fa-circle-plus"></i></a> <!--{{ route('Fields.create') }} -->
                    <th scope="col">ID sân</th>
                    <th scope="col">Tên sân</th>
                    <th scope="col">Ảnh sân</th>
                    <th scope="col">Mô tả sân</th>
                    <th scope="col">Loại sân</th>
                    <th scope="col">Tuỳ chọn</th>
                </tr>
                </thead>

                <tbody>
                @foreach($fields as $item)
                <tr>
                    <th scope="row">{{ $item -> id }}</th>
                    <td>{{ $item -> name }}</td>
                    <td>
                        <img src="{{ asset(\Illuminate\Support\Facades\Storage::url('admin/img/').$item->image) }}" width="100px" height="100px">
                    </td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->types->type }}</td>

                    <td>
{{--                        <a class="btn btn-warning btn-lg my-1" href="#"><i class="fa-solid fa-pen-to-square"></i></a>    <!--{{ route('fields.edit', $item->id) }} -->--}}
{{--                        <button type="button" class="btn btn-danger btn-lg my-1" data-bs-toggle="modal" data-bs-target="#myModal{{ $item->id }}"><i class="fa-solid fa-trash-can"></i></button>--}}

                        <!--Mordal -->
                        <div class="modal fade" id="myModal{{ $item->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Xác nhận xóa</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        Bạn có chắc chắn muốn xóa mục này?
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <div class="modal-footer">
                                            <button class="btn btn-light" data-bs-dismiss="modal">Không</button>
                                            <form method="post" action="{{ route('Fields.destroy', $item->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger">Có</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            {{ $fields->links() }}
        </div>
    </div>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
