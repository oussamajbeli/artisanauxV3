@extends('master')
@section('content')
<meta name="description" content="order commandation contains your wished products">
<div  style="margin:0 auto;padding:20px;">

        <h2 style=" margin : 0 auto;">My orders :  </h2>


        <table class="table"> 
          <thead> 
          <tr> 
              <th>Product Name</th> 
              <th>Delivery status</th> 
              <th>Email</th> 
              <th>Payment Status</th> 
              <th>Payment Method</th> 
              <th>Gallery</th>
          </tr> 
          </thead> 
          <tbody> 
            @foreach($orders as $order)
          <tr> 
              <td>{{$order->name}}</td> 
              <td>{{$order->status}}</td> 
              <td>{{$order->email}}</td> 
              <td>{{$order->payment_status}}</td> 
              <td>{{$order->payment_method}}</td> 
              <td><img src="{{$order->gallery}}" style="border-radius:20px;width:100px;margin:0 auto; height:100px;"></td> 
          </tr> 
          @endforeach
     
        
          </tbody> 
          </table> 
    
   
       
            
  
    </div>
            
  </div>
 <style>

body {
  font: normal medium/1.4 sans-serif;
}
table {
  border-collapse: collapse;
  width: 100%;
}
th, td {
  padding: 0.25rem;
  text-align: left;
  border: 1px solid #ccc;
}
tbody tr:nth-child(odd) {
  background: #eee;
}
 </style>

  
@endsection