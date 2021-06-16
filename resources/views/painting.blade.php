<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Painting | NeedRepair</title>

    <style>
    body {
      margin : 10px;
      padding: 0;
      background : #59C2AF;
      font-family : sans-serif;
    }
    .box {
      background : #185C61;
      position : absolute;
      border-radius : 20px;
      width: 280px;
      height: 280px;
      top : 180px;
      left : 80px;
    }
    .box2{
      background : #185C61;
      position : absolute;
      border-radius : 20px;
      width: 280px;
      height: 280px;
      top : 180px;
      left : 700px;
    }
    .tengah-box {
      margin-left : 32%;
      margin-top : 30%;
    }
    .table {
        position : absolute;
        background : #59C2AF;
        width : 280px;
        height : 300px;
        top : 180px;
        left : 380px;
    }
    .table2 {
        position : absolute;
        background : #59C2AF;
        width : 280px;
        height : 200px;
        top : 220px;
        left : 1020px;
        color : #59C2AF;
    }
    .dalam-table {
        background : white;
        width : 260px;
        height : 45px;
        border-radius: 20px;
        margin-top : 20px;
        margin-left : 20px;
        color : #59C2AF;
    }
    .next {
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
      <h2 style="color:white; font-size:28px; margin-left:110px;">Painting</h2>
    </header>
    <br><br><br><br><br>
    <!-- /Header -->
    <div class="box">
        <div class="tengah-box">
            <img src="img/cat.png" alt="">
        </div>
    </div>
    <h2 style="margin-top:320px; margin-left:150px; font-size:28px; color:white;">Painting</h2>
    <div class="table">
        <select  class="dalam-table" name="cat">
            <option value="" selected>Jenis cat :</option>
            <option value="1">1. Duco</option>
            <option value="2">2. Melamic</option>
            <option value="3">3. Staving</option>
            <option value="4">4. Alkyd Syntetic</option>
        </select>
        <select  class="dalam-table" name="warna">
            <option value="" selected>Warna :</option>
            <option value="1">1. Putih</option>
            <option value="2">2. Hijau</option>
            <option value="3">3. Biru</option>
            <option value="4">4. Kuning</option>
        </select>
        <select  class="dalam-table" name="merk_cat">
            <option value="" selected>Merk cat :</option>
            <option value="1">1. Dulux</option>
            <option value="2">2. Nippon Paint</option>
            <option value="3">3. Avitex</option>
            <option value="4">4. Jotun</option>
        </select>
        <select  class="dalam-table" name="berat">
            <option value="" selected>Berat :</option>
            <option value="1">1. 1kg</option>
            <option value="2">2. 5kg</option>
            <option value="3">3. 10kg</option>
            <option value="4">4. 18kg</option>
        </select>
    </div>
    <div class="box2">
        <div class="tengah-box">
            <img src="img/handyman.png" alt="">
        </div>
    </div>
    <h2 style="margin-top:-55px;margin-left:750px; font-size:28px; color:white;">Handyman</h2>
    <div class="table2">
        <div class="dalam-table">
            <h3 style="margin-left:20px; ">Nama : Mukhtar Fuadi</h3>
        </div>
        <div class="dalam-table">
            <h3 style="margin-left:20px;">Phone : 0812-6323-3686</h3>
        </div>
        <div class="dalam-table">
            <h3 style="margin-left:20px;">Grade : 6/10</h3>
        </div>
    </div>
    <button class=next style=""><a href="#" style="text-decoration:none; color:white; font-size:20px; font-weight:bold;">Next</a></button>
  </body>
</html>