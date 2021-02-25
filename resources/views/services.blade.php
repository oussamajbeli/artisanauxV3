    @extends('master')
    @section('content')
    
   <meta name="description" content="services that we provide for you ">

    <section class="container">
        <div>
            <ol class="list">
                <li ></li>
                <li ></li>
                <li ></li>
            </ol>

            <div>
                <div >
                    <div >
                        <div>
                            <div >
                                <div >
                                    <h1 >Business is Now Digital</h1>
                                    <p >this platform is made by responsible developper that presents to you a pack of existing products that you can check and buy .</p>
                                    <ul class="list">
                                        <li><a  style="width: 120px;margin: 0 auto;" class="link"  href="{{url('/')}}">GET STARTED</a></li>
                                      
                                    </ul>
                                </div>
                            </div>
                        </div> 
                    </div> 
                    <div >
                        <div>
                            <img src="img/deigit.png" style="height:200px;width: 400px;border-radius:10px;" title="digital" alt="digital">
                        </div> 
                    </div> 
                </div> 

                <div >
                    <div >
                        <div >
                            <div >
                                <div >
                                    <h1 >Quick Delivery </h1>
                                    <p >we own a large circuit that can deliver your packet at a maximum period that lasts 3 days .</p>
                                    <ul class="list" >
                                        <li><a  style="width: 120px;margin: 0 auto;" class="link" href="{{url('/')}}">GET STARTED</a></li>
                                       
                                    </ul>
                                </div> 
                            </div>
                        </div> 
                    </div> 
                    <div >
                        <div >
                            <img src="img/deliver.jpg" style="height:200px;width: 400px;border-radius:10px;" title="delivery" alt="delivery">
                        </div> 
                    </div> 
                </div> 

                <div >
                    <div >
                        <div >
                            <div >
                                <div >
                                    <h1 >Get Money Back Garantied</h1>
                                    <p >We blend insights and strategy get your money back if you are unsatisfied with our products.</p>
                                    <ul class="list" >
                                        <li><a style="width: 120px;margin: 0 auto;" class="link" href="{{url('/')}}">GET STARTED</a></li>
                                       
                                    </ul>
                                </div> 
                            </div>
                        </div> 
                    </div> 
                    <div >
                        <div >
                            <img src="img/maney.jpg" style="height:200px;width: 400px;border-radius:10px;" alt="money back" title="money back">
                        </div> 
                    </div> 
                </div>
            </div>

        </div>
    </section>

    <style>
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

.container{
   
    
    margin: 0 auto;
    text-align: center;
   
}

.list{
    list-style:none;
   
}


    </style>
    @endsection