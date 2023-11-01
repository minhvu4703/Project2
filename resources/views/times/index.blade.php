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
    <link rel="stylesheet" href="../../resources/css/intro.css">
    <title>Trang quản trị - Quản lý sân</title>

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
                {{-- Thống kê --}}
                <li class="nav-item" style="margin-bottom: 20px; margin-top: 20px">
                    <a href="{{ route('dashboard.index') }}" class=""
                       style="width: 83px">
                        <img src="../../resources/Images/analytics.png" style="width: 50px; height: 50px">
                    </a>
                </li>
                {{-- Sân --}}
                <li class="nav-item" style="margin-bottom: 20px; margin-top: 20px">
                    <a href="{{ route('Fields.index') }}" class=""
                       style="width: 83px">
                        <img src="../../resources/Images/pitch.png" style="width: 50px; height: 50px">
                    </a>
                </li>
                {{-- loại sân --}}
                <li class="nav-item" style="margin-bottom: 20px; margin-top: 20px">
                    {{-- {{ route('Field_types.index') }} --}}
                    <a href="{{ route('field_types.index') }}" class=""
                       style="width: 83px">
                        <img src="../../resources/Images/lineup.png" style="width: 50px; height: 50px">
                    </a>
                </li>
                {{-- QL khách --}}
                <li class="nav-item" style="margin-bottom: 20px; margin-top: 20px">
                    <a href="{{ route('dashboard.customers') }}"
                       class="" style="width: 83px">
                        <img src="../../resources/Images/user.png" style="width: 50px; height: 50px">
                    </a>
                </li>
                {{-- Clipboard --}}
                <li class="nav-item" style="margin-bottom: 20px; margin-top: 20px">
                    <a href="{{ route('dashboard.orders') }}" class=""
                       style="width: 83px">
                        <img src="../../resources/Images/clipboard.png" style="width: 50px; height: 50px">
                    </a>
                </li>
                {{-- Khung giờ --}}
                <li class="nav-item bg-info border border-white border-1" style="margin-bottom: 20px; margin-top: 20px">
                    <a href="{{ route('times.index') }}" class=""
                       style="width: 83px">
                        <img src="../../resources/Images/timetable.png" style="width: 50px; height: 50px">
                    </a>
                </li>
                {{-- QL --}}
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
        {{--Main--}}
        <div class="col col-11 ps-3">

            {{--Breadcrumb--}}
            <nav aria-label="breadcrumb">
                <div style="background-color: white">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('customers.index') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Quản lý khung giờ</li>
                    </ol>
                </div>
            </nav>

            {{--Title--}}
            <div>
                <h1 class="text-white mt-4 border-bottom border-white border-4 my-4"
                    style="font-family: 'system-ui'; font-size: xxx-large; text-align: center">QUẢN LÝ KHUNG
                    GIỜ</h1>
            </div>
            <div class="">
                {{--Table--}}
                <table class="table table-light table-striped mt-3" border="1px" cellpadding="0" cellspacing="0"
                       width="100%">
                    <thead>
                    <tr>
                        {{--                    <a class="btn btn-success btn-lg my-2" href="{{ route('fields.create') }}"><i class="fa-regular fa-square-plus fa-lg fa-bounce"></i></a>--}}
                        <th scope="col">Khung giờ</th>
                        {{--                    <th scope="col">Tuỳ chọn</th>--}}
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($times as $item)
                        <tr>
                            <td>{{ $item -> timeStart }} - {{ $item -> timeEnd }}</td>
                            {{--                        <td>--}}
                            {{--                            <a class="btn btn-warning btn-lg my-1" href="{{ route('fields.edit', $item->id) }}"><i class="fa-regular fa-pen-to-square fa-shake"></i></a>--}}
                            {{--                            <button type="button" class="btn btn-danger btn-lg my-1" data-bs-toggle="modal" data-bs-target="#myModal{{ $item->id }}"><i class="fa-solid fa-dumpster fa-shake"></i></button>--}}

                            {{--                            --}}{{--Modal--}}
                            {{--                            <div class="modal fade" id="myModal{{ $item->id }}">--}}
                            {{--                                <div class="modal-dialog">--}}
                            {{--                                    <div class="modal-content">--}}
                            {{--                                        <!-- Modal Header -->--}}
                            {{--                                        <div class="modal-header">--}}
                            {{--                                            <h4 class="modal-title">Xác nhận xóa</h4>--}}
                            {{--                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>--}}
                            {{--                                        </div>--}}

                            {{--                                        <!-- Modal body -->--}}
                            {{--                                        <div class="modal-body">--}}
                            {{--                                            Bạn có chắc chắn muốn xóa mục này?--}}
                            {{--                                        </div>--}}

                            {{--                                        <!-- Modal footer -->--}}
                            {{--                                        <div class="modal-footer">--}}
                            {{--                                            <div class="modal-footer">--}}
                            {{--                                                <button class="btn btn-light" data-bs-dismiss="modal">Không</button>--}}
                            {{--                                                <form method="post" action="{{ route('fields.destroy', $item->id) }}">--}}
                            {{--                                                    @csrf--}}
                            {{--                                                    @method('DELETE')--}}
                            {{--                                                    <button class="btn btn-danger">Có</button>--}}
                            {{--                                                </form>--}}
                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                        </td>--}}
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $times->links() }}
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
