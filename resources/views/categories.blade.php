@extends('master')
@section('content')

<style>


.lab1 {
  background-color: #21b140;
  cursor: pointer;
  margin: 0 auto;
  text-align:center;
 font-family: sans-serif;
}
#content1 {
  background-color: #9acd32;
 
 
}
.lab1, #content1 {
  height: 20px;

  margin: 0 auto;
  margin-bottom: 5px;
  border: 1px solid #fff;
  display: inline-block;
}
#menu-toggle1 {
  display: none;
}
#menu1 {
  background-color: #5afa62;
  width: 160px;
  overflow: hidden;
  max-height: 0;
  padding: 0;
  border-radius: 5px;
 margin: 0 auto;
  -webkit-transition: all 0.3s ease;
}
#menu-toggle1:checked + #menu1 {
  max-height: 200px;
}
</style>


<meta name="description" content="A list of product categories">

<div style="text-align:center;padding: 110px;height:20px;">
    <label for="menu-toggle1" class="lab1"> CATEGORIES</label>
    <input type="checkbox" id="menu-toggle1"/>
    <ul id="menu1">
        @foreach($categories as $category)
        <li><a  href="categorydetail/{{$category->name}}">{{$category->name}}</a>
        </li> 
        <hr>
        @endforeach
      
    </ul>
    </div>


@endsection