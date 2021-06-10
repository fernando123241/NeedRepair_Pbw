<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Index</title>

    <style>
    #button {
      width : 240px;
      height : 70px;
      background-color : white;
      border-radius : 20px;
      margin-left : 540px;
    }
    #tengah {
      margin-left : 540px;
    }
    .tengah1 {
      font-family : sans-serif;
      font-size : 24px;
      color : white;
      margin-left : 515px;
      font-weight : bold;
    }
    .tengah2 {
      font-family : sans-serif;
      font-size : 18px;
      color : white;
      margin-left : 573px;
    }
    .footer{
      font-family : sans-serif;
      font-size : 18px;
      font-weight : bold;
      color : white;
      margin-left : 40px;
    }
    </style>

  </head>
  <body style="background : #59C2AF;">

    <!-- Header -->
    <header>
      <img src ="img/LogoNama.png" alt="" width="180" height="55" style="float:right; margin-right:50px;">
    </header>
    <!-- /Header -->

    <div id="tengah">
      <img src="img/LogoPolos.png" alt="" width="240" height="240" style="margin-top: 100px;">
    </div>
    <div class="tengah1">
      <p>WE REPAIR EVERYTHING</p>
    </div>
    <br>
    <button id="button" onclick="location.href='{{ url('login') }}'" style="font-family:sans-serif; font-weight:bold; font-size: 24px;">Login</button>
    <div class="tengah2">
      <p>Or <a href="{{ url('daftar') }}" style="color:white"> Create Acoounts</a>
    </div>

    <!-- Footer -->
    <div class="footer">
      <p>Follow us on :</p>
      <a href="https://web.facebook.com/profile.php?id=100005518775296"><img src="img/facebook.png" alt=""></a>
      <a href="https://www.instagram.com/fernandozhahirsyah/"><img src="img/instagram.png" alt="" style="margin-left:20px;"> </a>
    </div>
    <!-- /Footer -->

  </body>
</html>