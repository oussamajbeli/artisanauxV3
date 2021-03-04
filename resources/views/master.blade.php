<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>artisanaux</title>  
 
    <meta name="description" content="main page that contains all website contents">
 
    <style>

body{
  background-image: url("img/arte.jpg") ;
  background-repeat: no-repeat;
  background-size: 50%;
  background-position: 350px 100px; 
}
    </style>
</head>
<body >
    {{view('header')}}
   <div style="height: 100%; whidth: 100%;">
    @include('layout')
  
</div>
<div style="padding-top:200px;">
    @yield('content')
</div>
    <div style="float:inline-end;padding-top: 240px;">
    {{view('footer')}}
<div>
</body>
</html> 