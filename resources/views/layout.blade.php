<div style="float: left;height: 37px;">
<label for="menu-toggle" class="lab"> OTHER</label>
<input type="checkbox" id="menu-toggle"/>
<ul id="menu">
  <li><a href="{{url('/services')}}" >Services</a>
  </li>
  <hr>
  <li><a  href="{{url('/contacts')}}" >Contacts</a>
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
  background-color: #15e25a;
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
  background-color: #47d672;
  width: 130px;
  overflow: hidden;

  max-height: 0px;
  padding: 0;
  border-radius: 2px;
  margin: 0 auto;
  -webkit-transition: all 0.2s ease;
}
#menu-toggle:checked + #menu {
  max-height: 100px;
}

  </style>