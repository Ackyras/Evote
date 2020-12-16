<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form method="POST" action="{{route('vote', $data)}}">
    @csrf
    <input type="hidden" name="vote" value="{{$data}}" id="">
    <button type="submnit">Vote</button>
  </form>
</body>
</html>