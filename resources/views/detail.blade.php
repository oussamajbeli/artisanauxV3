@extends('master')
@section('content')

<meta name="description" content="product details and action that you can make on it">
<a href="{{url('product')}}" class="link" style="width: 80px; margin: 0 auto;" >Go Back</a>

<div style="float: right;">
    
    <div >
      <img  src="../{{$product->gallery}}"  style="width:240px;height:240px;" title="{{$product->name}}" alt="{{$product->name}}"> 
        <br><br>
        <br><br>
    </div>
    <div class="col-sm-6">
        
        <h4>Name : {{$product->name}}</h4>
        
        <p>Category : {{$product->category}}</p>
        <p>Details : {{$product->description}}</p>
        <p>Price : $ {{$product->price}}</p>
       
      
      <?php
      $var=0;?>
     @if(($product['qty'] == $var))
      <p style="opacity: 0.4;color:rgb(235, 95, 95);">Out of stock</p>
      <p style="opacity: 0.4;color:rgb(235, 95, 95);">this product has been bought.</p>
        <p>quantity: 0</p>
       @else
          
       <p style="opacity: 0.4;color:green;">Instock</p>
       <p>quantity: {{$product->qty}}</p> 
     
      
       
      <form action="/add_to_cart" method="Post">
          @csrf
        
        <input type="hidden" name="product_id" value="{{$product->id}}">
        @if(Session::has('user'))
        <input id="quantity" name="quantity" type="number" value="1" min="1">
        <label for="quantity">Quantité</label>
       
        <button class="link">add to card</button>
        @else
        <b style="font-size: 20px; color:red;"> create an account or login in order to buy this product</b>
        <a href="{{url('login')}}" class="link" style="width:100px;">Login</a>
        <a href="{{url('register')}}" class="link" style="width:100px;">Register</a>
        @endif
      </form>
      @endif
      <br>

    </div>

</div>

@endsection