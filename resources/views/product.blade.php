@extends('master')
@section('content')
<meta name="description" content=" all product that we have on our market place">
<h3 style=" margin:0 auto;text-align: center;" >List of all products</h3>

<div >
    <ul id="nav" >
    @foreach($products as $product)
    <li >
        <img src="{{$product->gallery}}" style="border-radius:20px;width:100px;margin:0 auto; height:100px;" title="{{$product->name}}" alt="{{$product->name}}">
        <div >
          <h5>{{$product->name}}</h5>
          <p >{{$product->description}}</p>
          <a href="detail/{{$product->id}}" class="link">details</a>
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

p{
  font-size:15px;
}
#nav li {
  transition: 0.7s;

  border:2px solid blue;
    padding: 10px;
    float: left;
    max-width:220px;
   
    margin:10px;
}

#nav li a {
    color: #2416ee;
    float:right;
   
    font-size:20px;
    height: 30px;
    padding: 1px;

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