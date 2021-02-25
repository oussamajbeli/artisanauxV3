<?php 
  use App\Http\Controllers\ProductsController;
  $total=0;
  if(Session::has('user')){
   $total=ProductsController::cartItem() ;
  }
 ?>

<meta name="description" content="pages that you can access on our website">
<div class="header">
  <a href="{{url('/')}}" class="logo">ARTISANAUX</a>
  @if(Session::has('user'))
  <div class="header-right">
    <a  href="{{url('/product')}}">Products
      <img src="../img/icons/prod.webp" style="width: 20px; height:20px;" title="products" alt="products"></a></li>

    </a>
    <a href="/categories">Categories
      <img src="../img/icons/prod.webp" style="width: 20px; height:20px;" title="categories" alt="categories"></a></li>

    </a>
    <a href="/cartlist">Cart({{$total}})
      <img src="../img/icons/cart.png" style="width: 20px; height:20px;" title="cart" alt="cart">  </a></li>

    </a>
    <a href="/myorders">Orders
      <img src="../img/icons/check.png" style="width: 20px; height:20px;" alt="order" title="order">

    </a>
    <a href="{{url('logout')}}">Logout</a>
    <a class="active" style="font-size: 20px;">{{Session::get('user')['name']}}
      <img src="../img/icons/acount.webp" style="width: 20px; height:20px;" alt="login" title="login">

    </a>
    @else
    <a href="{{url('register')}}">Register
      <img src="img/icons/register.webp" style="width: 20px; height:20px;" title="register" alt="register">

    </a>
    <a  class="active" href="{{url('login')}}">Login
      <img src="img/icons/login.png" style="width: 20px; height:20px;" alt="login" title="login"> 

    </a>
  @endif
  </div>

</div>

<div style="text-align:center;">
  <form action="/search"  >
    <input  name="query" type="text" placeholder="Search" >

    <button class="submit" type="search">Search</button>
  </form>
</div>
  <style>


form {
  width:400px;
  margin: auto;
  margin-top: 30px;
  }
  input{
  padding:4px 10px;
  border:0;
  font-size:16px;
  background-color:aliceblue;
  }
 
  .submit{
  width: 90px;
  height:30px;
  background-color: #1c87c9;
  color:#ffffff;
  }
.submit:hoover{
  background-color:rgb(76, 76, 253);
}




.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

/* Style the header links */
.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
}

/* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

/* Change the background color on mouse-over */
.header a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the active/current link*/
.header a.active {
  background-color: dodgerblue;
  color: white;
}

/* Float the link section to the right */
.header-right {
  float: right;
}

/* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}
 

  </style>