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
    <title>Login function test</title>
</head>
<body>
<div id="intro" class="bg-image">

        <div class="container text-center">
            <div class="row" style="height: 750px">
                <div class="col align-self-center">
                    <form class="" method="post" action="{{ route('dashboard.loginProcess') }}" style="color: black" >
                        <label style="font-size: 50px; color: white">SigmaDuck</label><br>
                        @csrf
                        <p class="">Email:</p>    <input type="email" name="email"><br>
                        <p class="mt-3">Password:</p> <input type="password" name="password"><br>
                        <button class="btn btn-success mt-3" >Đăng nhập với tư cách quản trị viên</button>
                        <a href="{{ route('Customer.login') }}" class="btn btn-white">Đăng nhập với tư cách khách</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
