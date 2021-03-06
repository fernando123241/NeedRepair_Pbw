<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Payment | NeedRepair</title>

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
      width: 180px;
      height: 180px;
      top : 300px;
      left : 400px;
      
    }
    .box2{
      background : #185C61;
      position : absolute;
      border-radius : 20px;
      width: 180px;
      height: 180px;
      top : 300px;
      left : 800px;
    
    }
    .box3{
        background: #FFFFFF;
        position: absolute;
        border-radius: 10px;
        width: 260px;
        height: 50px;
        left: 110px;
        top: 200px;
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
      <h2 style="color:white; font-size:28px; margin-left:110px;">Payment</h2>
    </header>
    <br><br>
    <!-- /Header -->

    <h2 style="color:white; font-size:28px; margin-left:110px;">Jumlah Yang Harus Anda Bayar</h2>
    <div class="box3">
        <h4 style="margin-top: 15px;margin-left:40px; font-size:18px; color:black;">TOTAL : Rp 150.000</h4>
        <h4 style="margin-top: 15px;margin-left:20px; font-size:13px; color:white;">*Nb : harga sudah termasuk ongkos tukang</h4>
    </div>
    
    <div class="box">
        <div class="tengah-box">
            <img src="img/cash.png" alt="" width="77" height="66">
        </div>
    </div>
    <h2 class="link active" style="margin-top:220px; margin-left:450px; margin-top: 320px; font-size:28px; color:white;">Cash</h2>
   
    <div class="box2">
        <div class="tengah-box">
            <img src="img/wallet.png" alt="color=white" width="77" height="66">
        </div>
    </div>
    <h2 style="margin-top:-55px;margin-left:830px; font-size:28px; color:white;">E-wallet</h2>
    
    <button class=next><a href="/popuppayment" style="text-decoration:none; color:white; font-size:20px; font-weight:bold;">Confirm</a></button>
  </body>
</html>