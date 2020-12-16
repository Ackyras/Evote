<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <style>
    *{
      box-sizing: border-box;
    }
    .container{
      width: 50%;
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
    .mainbutton{
      position: absolute;
      width: 65px;
      height: 30px;
      left: 285px;
      top: 7px;

      background: #C4C4C4;
      border-radius: 5px;
    }
    .form{
      position: relative;
      margin: auto;
      width: 50%;
      height: fit-content;
      background: linear-gradient(138.8deg, #A55F2A 2%, rgba(207, 112, 24, 0.58) 95.24%);
      border: 1px solid #AF2121;
      box-sizing: border-box;
    }
  </style>
  <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="header">

    </div>
    @yield('form')
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>