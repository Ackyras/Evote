@extends('layout.loginmaster')
@section('title')
    Login
@endsection
@section('form')
  <div class="form">
    <center>
      <h1>login</h1>
    </center>
    <form method="POST" action="{{route('proseslogin')}}">
      @csrf
      <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="text" name="email" class="form-control" id="inputEmail3" >
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
          <input type="password" name="password" class="form-control" id="inputPassword3">
        </div>
      </div>
      <center>
        <button type="submit" class="loginbutton">Sign in</button>
      </center>
    </form>
  </div>

@endsection