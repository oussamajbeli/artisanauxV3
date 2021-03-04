@extends('master')
@section('content')



<meta name="description" content="register for you can create an account in our website and make a commands">


<div style="padding-top: 50px;">
  <h2  style="text-align:center;padding-top: 10px;width: 30%;height:71px;background-color:rgb(226, 231, 235);margin: 0 auto;">Artisanaux Nabeul</h1>
</div>

<div class="register-page">
  <form action="register" class="form" method="POST">
    <div class="container">
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
    <button type="submit" value="Sign Up"  style="width:100px;margin:0 auto;"><span>Sign up</span></button>
  <br><br>
  &nbsp &nbsp<b>  Allready Has account !</b> <a  value="Login" href="{{url('/login')}}" class="link" style="width:100px;margin:0 auto;"><span>Login</span></a>
</div> 
</form>
</div>





<style type="text/css">
  
  .register-page {
    width: 360px;
    padding: 8% 0 0;
    margin: auto;
  }
  .form {
    position: relative;
    z-index: 1;
    background: #FFFFFF;
    max-width: 360px;
    margin: 0 auto 100px;
    padding: 45px;
    text-align: center;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  }
  .form input {
    font-family: "Roboto", sans-serif;
    outline: 0;
    background: #f2f2f2;
    width: 100%;
    border: 0;
    margin: 0 0 15px;
    padding: 15px;
    box-sizing: border-box;
    font-size: 14px;
  }
  .form button {
    font-family: "Roboto", sans-serif;
    text-transform: uppercase;
    outline: 0;
    background: #4CAF50;
    width: 100%;
    border: 0;
    padding: 15px;
    color: #FFFFFF;
    font-size: 14px;
    -webkit-transition: all 0.3 ease;
    transition: all 0.3 ease;
    cursor: pointer;
  }
  .form button:hover,.form button:active,.form button:focus {
    background: #43A047;
  }
  .form .message {
    margin: 15px 0 0;
    color: #b3b3b3;
    font-size: 12px;
  }
  .form .message a {
    color: #4CAF50;
    text-decoration: none;
  }
 
  .container {
    position: relative;
    z-index: 1;
    max-width: 300px;
    margin: 0 auto;
  }
  .container:before, .container:after {
    content: "";
    display: block;
    clear: both;
  }
  .container .info {
    margin: 50px auto;
    text-align: center;
  }
  .container .info h1 {
    margin: 0 0 15px;
    padding: 0;
    font-size: 36px;
    font-weight: 300;
    color: #1a1a1a;
  }
  .container .info span {
    color: #4d4d4d;
    font-size: 12px;
  }
  .container .info span a {
    color: #000000;
    text-decoration: none;
  }
  .container .info span .fa {
    color: #EF3B3A;
  }
  body {
    background: #d2ffb9; /* fallback for old browsers */
 
    font-family: "Roboto", sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;      
  }
  </style>
  @endsection