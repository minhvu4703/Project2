<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../../resources/Images/Vit.png">
    <link rel="stylesheet" href="../../resources/css/intro.css">
    <title>== Customer Register Function ==</title>
</head>
<body>
<div id="intro" class="bg-image">
    <div class="container text-center">
        <div class="row d-flex align-items-center justify-content-center" style="height: 750px">
            <div class="col align-self-center">
                <form class="" method="post" action="{{ route('Customer.store') }}" style="color: white">
                    <label class="text-white" style="font-size: 50px">SigmaDuck</label><br>
                    @csrf
                    <p>Email:</p><input type="email" name="email"><br>
                    <p>Địa chỉ:</p><input type="text" name="address"><br>
                    <p>Số điện thoại:</p><input type="text" name="phonenumber"><br>
                    <p>Họ và tên</p><input type="text" name="name"><br>
                    <p>Mật khẩu:</p><input type="password" name="password"><br>
                    <a href="{{ route('Customer.login') }}" class="btn btn-warning mt-3">Quay lại</a>
                    <button class="btn btn-warning mt-3">Đăng ký</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
