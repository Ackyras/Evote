<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('css/master.css')}}">
  <title>@yield('title')</title>
</head>
<body>
  <div class="container">
    <div class="header">
      <div class="loginbutton"><button onclick="openlogin()">@yield('link')</button></div>
    </div>
    <div class="banner">
      <img class="img1" src="{{asset('img/babi.jpg')}}" alt="">
      <h1>Pemira PMK 2020</h1>
      <img class="img2" src="{{asset('img/manusia.jpeg')}}" alt="">
    </div>
    @yield('content')
    @yield('login')
  </div>
  <script>
    function openlogin(){
      document.getElementById("loginform").style.display = "block";
    }
    function closelogin(){
      document.getElementById("loginform").style.display = "none";
    }
  </script>
</body>
</html>