<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Be Ask Different!!</title>
    <link rel="stylesheet" href="{{ asset('assets/login.css') }}">
</head>

<body>
    <div class="container">
        <div class="login">
            <form action="">
                <h1>Login</h1>
                <hr>
                <p>SMK Taruna Bhakti Depok</p>
                <label for="">Email</label>
                <input type="text" placeholder="example@gmail.com">
                <label for="">Password</label>
                <input type="password" placeholder="Password">
                <button>Login</button>
                <p>
                    <a href="#">Forgot Password?</a>
                </p>
            </form>
        </div>
        <div class="right">
            <img src="{{ asset('assets/maskot1.png') }}" alt="">
        </div>
    </div>
</body>

</html>