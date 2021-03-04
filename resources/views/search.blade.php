@extends('master')
@section('content')
<meta name="description" content="search a wished product here">
<div  style="margin:0 auto;padding:20px;">

        <h2 style="text-align: center">Result for product search :</h2>
  <ul id="nav">
    @foreach($products as $product)
    <li >
    
        <img src="{{$product->gallery}}" style="border-radius:20px;width:100px;margin:0 auto; height:100px;" title="{{$product->name}}" alt="{{$product->name}}">
        <div>
          <h5 >{{$product->name}}</h5>
          <b >{{$product->description}}</b>
          <a href="detail/{{$product->id}}" >details</a>
        </div>
     
    </li>
    @endforeach
  </ul>
       
  </div>


  <style>
    #nav,#nav ul {
    list-style: none ;
    margin: 0;
    padding: 0;
}

h5{
  font-size: 30px;
}
#nav {
    border-radius: 10px ;
    font-size: 12px;
    height: 100px;
    padding: 5% 0 0 10%;
   
  
}
b{
  font-size:15px;
}
#nav li {
 
  border:2px solid blue;
    padding: 10px;
    float: left;
    max-width:200px;
   transition: 0.7s;
    margin:10px;
}

#nav li a {
    color: #2e21e7;
    float:right;
   
    font-size:20px;
    height: 30px;
    padding: 5px;

    position: relative;
    text-decoration: none;
    text-shadow: 1px 1px 1px #480af1;
}


#nav li:hover, #nav a:focus, #nav a:active {
    background: none repeat scroll 0 0 #97c5fa;
    outline: 0 none;
}

</style>
@endsection