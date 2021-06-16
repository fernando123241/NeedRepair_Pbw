<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard | NeedRepair</title>

    <style>
    body {
      margin : 10px;
      padding: 0;
      background : #59C2AF;
      font-family : sans-serif;
    }
    .about {
      margin-left : 80px;
      color : white;
      font-style : italic;
    }
    .box {
      background : #185C61;
      position : absolute;
      border-radius : 20px;
      width: 300px;
      height: 400px;
      top : 180px;
      left : 30px;
    }
    .box2 {
      background : #185C61;
      position : absolute;
      border-radius : 20px;
      width: 300px;
      height: 400px;
      left: 360px;
      top: 180px;
    }
    .box3 {
      background : #185C61;
      position : absolute;
      border-radius : 20px;
      width: 300px;
      height: 400px;
      left: 690px;
      top: 180px;
    }
    .box4 {
      background : #185C61;
      position : absolute;
      border-radius : 20px;
      width: 300px;
      height: 400px;
      left: 1020px;
      top: 180px;
    } 
    .tengah-box {
      margin-left : 30%;
      margin-top : 40%;
    }
    .tombol {
      width : 240px;
      height : 40px;
      border-radius : 20px;
      margin-left : 30px;
      font-weight : bold;
      font-size : 20px;
      cursor : pointer;
    }
    .logout{
      width: 140px;
	    height: 45px;
	    background: #5F5F5F;
	    position: fixed;
      border-radius : 20px;
	    top: 89%;
	    left: 45%;
      color : white;
      cursor : pointer;
    }
    </style>

  </head>
  <body">

    <!-- Header -->
    <header>
      <img src ="img/profil_black.png" href="{{ url('welcome') }}" alt="" width="55" height="55" style="float:left; margin-left:20px; margin-top:5px;">
      <img src ="img/LogoNama.png" alt="" width="180" height="55" style="float:right; margin-right:50px; margin-top:px;">
    </header>
    <br><br><br><br><br>
    <!-- /Header -->
    <div class="about">
      <h1>Need Repair?</h1>
    </div>
    <div class="box">
      <div class="tengah-box">
        <img src="img/rumah.png" alt="">
      </div>
      <button class=tombol style="margin-top:110px;"><a href="/home" style="text-decoration:none; color:#185C61;">Home</a></button>
    </div>
    <div class="box2">
      <div class="tengah-box">
        <img src="img/toko.png" alt="">
      </div>
      <button class=tombol style="margin-top:105px;"><a href="/store" style="text-decoration:none; color:#185C61;">Store</a></button>
    </div>
    <div class="box3">
      <div class="tengah-box">
        <img src="img/cat.png" alt="">
      </div>
      <button class=tombol style="margin-top:100px;"><a href="/painting" style="text-decoration:none; color:#185C61;">Painting</a></button>
    </div>
    <div class="box4">
      <div class="tengah-box">
        <img src="img/desain.png" alt="">
      </div>
      <button class=tombol style="margin-top:120px;"><a href="/design" style="text-decoration:none; color:#185C61;">Design</a></button>
    </div>
    <button class=logout style=""><a href="/welcome" style="text-decoration:none; color:white; font-size:20px; font-weight:bold;">Log Out</a></button>
  </body>
</html>