<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar | NeedRepair</title>
    <style>
    body {
        padding: 0;
        background : #59C2AF;
        font-family : sans-serif;
    }
    .box h1{
        color: white;
        font-weight: bold;
        font-size : 23px;
    }
    .box {
        width: 300px;
        padding: 10px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background : #59C2AF;;
        text-align: center;
    }
    .box input[type="text"], .box input[type="password"], .box input[type="email"]{
        border: 0;
        background : white;
        display: block;
        margin: 20px auto;
        text-align: left;
        padding: 14px 10px;
        width: 250px;
        height : 20px;
        color: black;
        border-radius: 10px;
    }
    .box button{
        border: 0;
        background: #5F5F5F;;
        display: block;
        margin: 20px auto;
        text-align: center;
        border: 2px solid #5F5F5F;
        width: 120px;
        height : 40px;
        color: white;
        border-radius: 10px;
        cursor: pointer;
        font-size: 20px;
        font-weight: bold;
    }
    </style>
</head>
<body>
    <nav class="navbar fixed-top navbar-light bg-light">
        <div class="container-fluid">
            <a href="{{ url('welcome') }}"><img src="img/back.png" alt="" style="width: 55px; margin-top: 5px; margin-left: 5px;"></a>
            <img src ="img/LogoNama.png" alt="" width="180" height="55" style="float:right; margin-right:50px;">
        </div>
    </nav>
    <div class="box">
        <img src="img/profil_putih.png" alt="" style="width: 85px; height: 85px;"><br><br>
        <h1>Create Account</h1>
        <input type="text" name="" placeholder="Name">
        <input type="email" name="" placeholder="Email">
        <input type="password" name="" placeholder="Password">
        <button onclick="location.href='{{ url('login') }}'">Create</button>
    </div>
    
</body>
</html>