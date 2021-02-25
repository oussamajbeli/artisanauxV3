@extends('master')
@section('content')
<meta name="description" content="list of all products that you want to buy">
<div  style="width:60%;margin:0 auto;padding:20px;">
    <h1 style="color: green; text-align: center; ">Order List</h1>
    <br>
    <table class="table">
        <thead>
          <tr>
           
            <th scope="col">Price</th>
            <th scope="col">Delivery</th>
            <th scope="col">Tax</th>
            <th scope="col">Total Ammount</th>
          </tr>
        </thead>
        <tbody>
          <tr >
            
          
            
            <td style="border:2px solid green;">$ {{$total}}</td>
            <td style="border:2px solid green;">$ 10</td>
            <td style="border:2px solid green;">$ 0</td>
            <td style="border:2px solid green;">$ {{$total+10}}</td>
           

          </tr>
         
        </tbody>
      </table>
            
  </div>
  <br>
 <div  style="width:40%;margin:0 auto; border: 2px solid rgb(119, 231, 119);border-radius: 5px;"> 
    <form action="orderplace" method="Post">
        @csrf
        <fieldset style="padding: 10px;">
          <legend style="font-size: 30px;text-align:center;color:rgb(66, 212, 66)">Payment protocol</legend>
          <div >
            <label  > address</label>
            <input type="text" name="address"  placeholder=" enter your address">
          </div>
          <div >
            <br>
            <br>
            <label  >payment method</label>
            <br>
            <br>
            <div >
           
              <input type="radio" value="Qr Code" name="payment"> <span>online</span><br><br>
              <input type="radio" value="Bank" name="payment"><span> EMI</span><br><br>
              <input type="radio" value="cash" name="payment"><span> on delivery</span><br><br>            </div>
          </div>
          
          <button  type="submit" class="link3">ORDER</button>

          <a href="{{url('/cartlist')}}" class="link" style="width:100px;">Cart List</a>
        </fieldset>
      </form>
 </div>

  <style>
    .table{
      background-color:gray;
      margin: 0 auto;
      border:2px solid black;
      padding: 10px;
    }
    .table tr >td{
      background-color:rgb(190, 190, 190);
      text-align:center;
    }

    .link3{
  
  margin-top:5px;
  margin-right:10px;
  padding: 2px;
  display: flex;
  transition-duration: 0.4s;
  border:2px solid rgb(203, 212, 203);
  background-color:#96f883;
  border-radius: 3px;
  color: black;
  text-decoration: none;
  font-size: 20px;
  
}

.link3:hover {
  background-color: #1dec2e; 
  color: white;
}
  </style>
@endsection