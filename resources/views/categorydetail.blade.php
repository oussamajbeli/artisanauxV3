
@extends('master')
@section('content')
<meta name="description" content="the product list related on category">
<br>

<div style="text-align:center;">
<h3 style="text-align: center; margin : 0 auto;"> List of {{$name}} Products:</h2><br>
  <a href="/categories" class="link" style="width: 80px;margin: 0 auto;">get back</a>

</div>

<br><br>


       <ul id="nav">
        @foreach($products as $product)

        <li>

        <div >
        <img src="../{{$product->gallery}}" style="border-radius:20px;width:100px;margin:0 auto; height:100px;" title="{{$product->name}}" alt="{{$product->name}}">
        <div class="card-body">
          <h5 >{{$product->name}}</h5>
        
          <p>Price : $ {{$product->price}}</p>
          <div style="float:left;display:flex;margin-left: 20px;">
          <a href="/detail/{{$product->id}}" class="link">details</a>
            &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp
          </div>
        </div>
        </div>
      </li>
   
    @endforeach
  </ul>
    
  
  

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
      
    }
    
    .link:hover {
      background-color: #94b1ff; 
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