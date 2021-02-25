
@extends('master')
@section('content')
<meta name="description" content="login page">
<div class="container" style="" >
  <h1 style="font-family:sans-serif;text-align: center;">Login</h1>

        <div style="" >
        <div  style="margin: 0 auto;">
         <form action="login" method="Post">
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
          </div>
        </form>
        </div>
    </div>
</div>
<style>
 
  
 input {
    font-family: "Avenir Next", "Segoe UI", "Helvetica Neue", sans-serif;
   
  }

  form {
   margin: 0 auto;
    width: 22em;
   
  }
  .btn1{
    color:rgb(5, 3, 3);
    background-color:rgb(240, 240, 240);
    height:35px;
    width: 60px;
    border-radius: 3px;
    transition: 0.5s;
  }
  .btn1:hover{
background-color: rgb(37, 25, 143);
color:white;
  }
  label{
    font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  }
  .container {
    margin: 0 auto;
      border-radius: 10px;
      height: 300px;
      border-radius:10px;
      width: 30%;
      background-color:rgb(164, 193, 255);
  }
  </style>
@endsection