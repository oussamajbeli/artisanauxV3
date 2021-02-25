@extends('master')
@section('content')

<meta name="description" content="the cart list of products that you have chosen">

<div >
     <h2 style="text-align: center; margin : 0 auto;"> Cart :</h2>
      <ul id="nav" >
      
      @foreach($products as $product )
  
      <li>
        <img src="{{$product->gallery}}" style="border-radius:20px;width:100px;margin:0 auto; height:100px;" alt="{{$product->name}}" title="{{$product->name}}">
        <div >
          <h5 >{{$product->name}}</h5>
          <p>Category:  {{$product->category}}</p>
          <p>Price : $ {{$product->price}}</p>
          @foreach($cart as $c)
          @if($c->product_id == $product->id)
          <p>Quantity :  {{$c->prod_qty}}</p>
          @endif
          @endforeach 
          <a href="remove/{{$product->cart_id}}" class="link2">Rmove</a>
          <a href="detail/{{$product->id}}"  style="text-align:center;"class="link">details</a>
        
         
        </div>
        
       
      </li>   
        
    @endforeach
   
  </ul>
</div>
   
    <a style="float: right;" class="link" href="order" >order now</a>
    <br><br>
    <a href="/categories" style="float: right;" class="link">get back</a>

    <style>

p{
  font-size:15px;
}
.link {
  
  margin-top:5px;
  margin-right:10px;
  padding: 2px;
  display: flex;
  transition-duration: 0.4s;
  border:2px solid rgb(203, 212, 203);
  background-color:#b6c8fa;
  border-radius: 5px;
  color: black;
  text-decoration: none;
  font-size: 20px;
  width: 100px;
  float: right;
}

.link:hover {
  background-color: #94b1ff; 
  color: white;
}


.link2 {
  width: 100px;
  margin-top:5px;
  margin-right:10px;
  padding: 2px;
  display: flex;
  transition-duration: 0.4s;
  border:2px solid rgb(203, 212, 203);
  background-color:#f0643a;
  border-radius: 5px;
  color: black;
  text-decoration: none;
  font-size: 20px;
  float:right;
}

.link2:hover {
  background-color: #e92525; 
  color: white;
}


#nav,#nav ul {
    list-style: none ;
    margin: 20px;
    padding: 0;
}

h5{
  font-size: 30px;
}
#nav {
 
    border-radius: 10px ;
    font-size: 12px;
    
    padding: 5% 0 0 10%;
   
  
}

#nav li {
  border-radius: 10px;
  border:2px solid blue;
    padding: 10px;
    float: left;
    width:300px;
  
    margin:10px;
}




#nav li:hover, #nav a:focus, #nav a:active {
    background: none repeat scroll 0 0 #97c5fa;
    outline: 0 none;
}
  
  </style>
  
@endsection