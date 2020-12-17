<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" media="screen and (max-device-height: 799px)" href="http://foo.bar.com/short-styles.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <style>
    *{
      box-sizing: border-box;
    }
    .dummy{
      height: 100px;
    }
    body{
      height: device-height;
    }
    .container{
      padding-top: 25px;
      margin-top: 45px;
      display: block;
      max-width: 550px;
      height: 100%;
      position: relative;
      margin-right: auto;
      margin-left: auto;   
      position: relative;

      background: linear-gradient(180.65deg, #99400C 0.52%, rgba(255, 255, 255, 0) 99.44%), linear-gradient(180deg, #4D3625 0%, rgba(131, 77, 37, 0.706141) 29.39%, rgba(200, 93, 12, 0.532779) 46.72%, rgba(129, 72, 28, 0.417205) 58.28%, rgba(148, 75, 20, 0.282368) 71.76%, rgba(148, 81, 30, 0.186056) 81.39%, rgba(255, 255, 255, 0) 100%), radial-gradient(50% 24.84% at 100% 75.16%, #8C4B2C 0%, #BB5D26 64.58%, #FA8229 99.99%, #A55F2A 100%);
      mix-blend-mode: normal;   
    }
    .header{
      position: absolute;
      width: 100%;
      height: 45px;
      left: 0px;
      top: 0px;

      background: #C67F5D;
    }
    .form{
      /* display: none; */
      border-radius: 10px;
      position: relative;
      margin: auto;
      margin-top: 100px;
      width: 40%;
      height: fit-content;
      background: linear-gradient(138.8deg, #A55F2A 2%, rgba(207, 112, 24, 0.58) 95.24%);
      border: 1px solid #AF2121;
      box-sizing: border-box;
    }
    .form form{
      padding: 10px;
    }
    .tag{
      display: flex;
      position: relative;
      margin-right:auto;
      margin-left: auto;
      width: 95%;
      height: auto;
      background: #BB713A;
      border: 1px solid #CDA953;
      box-sizing: border-box;
    }
    .tag img{
      width: 15%;
      height: auto;
    }
    .img1{
      margin-left: 0.5%;
      margin-top: 0.5%;
      margin-bottom: 0.5%;
    }
    .img2{
      margin-right: 0.5%;
      margin-top: 0.5%;
      margin-bottom: 0.5%;
    }
    .tag h1{
      margin-top: auto;
      margin-bottom: auto;
      margin-right: auto;
      margin-left: auto;
      font-size: xx-large;
      text-align: center;
    }
    .header{
      position: absolute;
      width: 100%;
      height: 45px;
      left: 0px;
      top: 0px;

      background: #C67F5D;
    }
    .mainbutton{
      position: absolute;
      width: fit-content;
      height: 30px;
      top: 7px;
      left: auto;
      right: 7px;

      background: #C4C4C4;
      border-radius: 5px;
    }
    .nextbutton{
      /* top: 20px; */
      position: relative;
      width: fit-content;
      height: 30px;
      margin-top: 25px;
      margin-bottom: 50px;

      background: #C4C4C4;
      border-radius: 5px;
    }
    .panduan{
      width: 95%;
      height: auto;
      position: relative;
      margin: auto;
      border: 1px solid #000000;

      /* backdrop-filter: blur(4px); */

      /* Note: backdrop-filter has minimal browser support */
      /* transform: matrix(1, 0, 0, 1, 0, 0); */
    }
    .content{
      display: inline-flex;
      padding-top: 25px;
      position: relative;
      /* top: 50px; */
      width: 95%;
      height: auto;
    }
    .headline{
      padding-top: 25px;
      display: block;
    }
    .pkiri{
      position: relative;
      display: flex;
      width: 40%;
      margin-left: 0;
      margin-right: auto;
    }

    .pkanan{
      position: relative;
      display: flex;
      width: 40%;
      margin-left: auto;
      margin-right: 0;
    }
    .profil{
      width: fit-content;
      height: fit-content;
    }
    .profil img{
      box-sizing: content-box;
      border: #000000 1px solid;
      width: 200px;
    }
    .contentp{
      display: flex;
    }
    .vprofil{
      display: block;
      position: relative;
      margin: auto;
    }
    .vprofil img{
      box-sizing: content-box;
      border: #000000 1px solid;
      width: 95%;
    }
    .ccontent{
      display: flex;
      padding-top: 50px;
      position: relative;
      margin: auto;
      /* top: 50px; */
      width: 95%;
      height: auto;
    }
    /* .ccontent label{
      position:relative;
      margin-left: 0;
      margin-right: auto;
      left: 0;
      right: auto;
    } */
  </style>
  <title>@yield('title')</title>
</head>
<body>
  <div class="header">
      @if (!Auth::check())
        <button onclick="location.href='{{route('login')}}'"type="button" class="mainbutton">Login</button>
      @else 
        <button onclick="location.href='{{route('logout')}}'"type="button" class="mainbutton">Logout</button>
      @endif
    </div>
  <div class="container">
    <div class="tag">
      <img class="img1" src="{{asset('/img/pmk.jpeg')}}" alt="logo-pmk">
      {{-- <center> --}}
        <h1>Pemira PMK ITERA 2020</h1>
      {{-- </center> --}}
      <img class="img2" src="{{asset('/img/pemira.png')}}" alt="logo-pemira">
    </div>
    @yield('content')
    @if(Request::path() == '/profil')
    <center>
      <button onclick="location.href='{{route('profil')}}'"type="button" class="nextbutton">Selanjutnya</button>
    </center>
    @endif
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>