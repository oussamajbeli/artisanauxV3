
@extends('master')
@section('content')

<div style="padding-top: 50px;">
  <h2  style="text-align:center;padding-top: 10px;width: 30%;height:71px;background-color:rgb(226, 231, 235);margin: 0 auto;">Artisanaux Nabeul</h1>
</div>
<meta name="description" content="login page">
<div class="login-page" style="" >

        
        <div  style="margin: 0 auto;">
         <form action="login" method="Post" class="form">
          <h1 style="font-family:sans-serif;text-align: center;">Login</h1>

          <div > 
            @csrf
            <div >
          <label >Email address</label>
          <input type="email" name="email"  id="exampleInputEmail1" >
          <p style="color: rgb(35, 94, 40);">We'll save your email .</p>
           </div>
           <br>
           <div >
           <label  >Password</label>
           &nbsp &nbsp &nbsp &nbsp<input type="password" name="password"  >
           </div>
          <br>
          <button class="btn1"type="submit" style="margin: 0 auto;">Login</button>
          <p class="message">Not registered? <a href="{{url('register')}}">Create an account</a></p>
          </div>
        </form>
        </div>
    
</div>


<style type="text/css">
  
.login-page {
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
  background: #c3ecc4;
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
  background: #70d675;
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
  background: #cbf8b3; /* fallback for old browsers */
 
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}
</style>


@endsection



