@section('login')
    
<div class="loginform" id="loginform">   
  <div class="overlay">
  </div>
  <form action="" class="form-container">
    <h1>Login</h1>
    
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
    
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    
    <button type="submit" class="btn">Login</button>
    <button type="button" class="btn cancel" onclick="closelogin()">Close</button>
  </form>
</div>
@endsection