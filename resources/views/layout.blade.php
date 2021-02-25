<div style="padding-top: 50px;">
    <h2  style="text-align:center;padding-top: 10px;border-top-left-radius: 30px;width: 30%;height:71px;background-color:rgb(154, 202, 247);border-bottom-right-radius: 50px;margin: 0 auto;">Artisanaux Nabeul</h1>
</div>


<div style="text-align:center;">
<label for="menu-toggle" class="lab"> OTHER</label>
<input type="checkbox" id="menu-toggle"/>
<ul id="menu">
  <li><a href="{{url('/services')}}" class="menu__link r-link">Services</a>
  </li>
  <hr>
  <li><a  href="{{url('/contacts')}}" class="menu__link r-link">Contacts</a>
  </li>
  
</ul>
</div>

  <style>
a{
  text-decoration: none;
  font-size: 30px;
  font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Verdana, sans-serif;
}
.lab {
  background-color: #11cccc;
  cursor: pointer;
  margin: 0 auto;
  text-align:center;
 font-family: sans-serif;
}
#content {
  background-color: #9acd32;
 
 
}
.lab, #content {
  height: 20px;

  margin: 0 auto;
  margin-bottom: 5px;
  border: 1px solid #fff;
  display: inline-block;
}
#menu-toggle {
  display: none;
}
#menu {
  background-color: #5a84fa;
  width: 130px;
  overflow: hidden;
  max-height: 0;
  padding: 0;
  border-radius: 5px;
 margin: 0 auto;
  -webkit-transition: all 0.3s ease;
}
#menu-toggle:checked + #menu {
  max-height: 100px;
}
  </style>