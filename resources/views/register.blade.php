@extends('master')
@section('content')
<style>
body {
  line-height: 1.6;
 
 
}

body, input {
  font-family: "Avenir Next", Avenir, "Segoe UI", Roboto, "Helvetica Neue", sans-serif;
}
.container{
  margin: 0 auto;
}
form {
 margin: 0 auto;
  width: 19em;
  text-align: center;
  position: relative;
  
 
}

.container {
    border-radius: 10px;
    width: 40%;
    background-color:aquamarine;
}
</style>
<meta name="description" content="register for you can create an account in our website and make a commands">
<div class="container">
<form action="register" class="user" method="POST">
    <h1>Sign up</h1><br/>
  @csrf
    <input type="text" id="name" name="name" 
    placeholder="Full name"/>
    @if ($errors->has('name'))
    <span class="error" role="alert">
        <strong>{{ $errors->first('name') }}</strong>
    </span>
    @endif
    <br><br>
    <input type="email" name="email" placeholder="Email address"/>
    @if($errors->has('email'))
    <span class="error" role="alert">
        <strong>{{ $errors->first('email') }}</strong>
    </span>
    @endif
   <br><br>
    <input type="password" name="password" id="password"
    placeholder="Password" title="Password min 8 characters. At least one UPPERCASE and one lowercase letter"  > 
    @if($errors->has('password'))
    <span class="error" role="alert">
        <strong>{{ $errors->first('password') }}</strong>
    </span>
    @endif
    <br><br>
    <b>create a new account</b>
    <button type="submit" value="Sign Up"  class="link" style="width:100px;margin:0 auto;"><span>Sign up</span></button>
  <br><br>
  &nbsp &nbsp<b>  Allready Has account !</b> <a  value="Login" href="{{url('/login')}}" class="link" style="width:100px;margin:0 auto;"><span>Login here</span></a>
  </form>
</div>
  @endsection