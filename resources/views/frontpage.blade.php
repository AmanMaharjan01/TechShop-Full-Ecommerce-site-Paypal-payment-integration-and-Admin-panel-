<?php
// session_start();
// Session::put('this_will_be_unique_session_key_later_on','thisisrandomsessionvalue');
//Session::get('email');
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Tech</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>


    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <!-- <script src="js/jquery-3.3.1.min.js"></script>  -->
    <!-- <script src="js/jquery-ui.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="{{ asset('js/main.js') }}"></script> 
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" type="text/css">

    <link rel="stylesheet" href="/css/styles.css" type="text/css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                
                <div class="ht-right">
                    <div id="col1">
                      <i class="fas fa-phone-volume"></i> +977-9860462244
                   </div>   
                    <div class="top-social"  id="col2">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a href="#"><i class="ti-linkedin"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </div>
                     <div id="col3">
                       <!-- <span><i class="fas fa-user"></i> <b>Login</b></span> -->
                           <div class="content">
                               @guest
                                        
                                           <a href="{{ route('login') }}" id="login"><i class="fas fa-user"></i> <b>Login</b></a>
                                      
                                @if (Route::has('register'))
                                   
                                            <a href="{{ route('register') }}" id="signup"><span><i class="fas fa-sign-in-alt"></i> <b>Register</b></span></a>
                                        
                                @endif
                            @else
                                <li id="dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
    
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item text-dark" href="/myproduct/{{Auth::user()->id}}">
                                            <i class="fas fa-cart-arrow-down"></i> My Products
                                        </a>
                                        <a class="dropdown-item text-dark" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: ;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                           </div>
                    </div>
                </div>
               
            </div>
        </div>
        
            <div class="inner-header">
                <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3">
                        <div class="logo">
                            <a href="/">
                                <span id="e">Tech</span><span style="font-size:20px; opacity:0.7">Shop</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="advanced-search">
                     
                                <form action="/searched" method="GET" class="input-group">
                                @csrf
                                <input type="text" placeholder="What do you need?" name="product" id="product">
                                @guest
                                 <a href="/login"><button type="button"><i class="ti-search"></i></button></a>
                                 @else
                                 <button type="submit"><i class="ti-search"></i></button>
                                 @endguest
                                 </form>
                        

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3" id="col3" >  
                             <div class="cart">
                                @guest
                                <a href="/login"><img src="{{ asset('img/cart.png') }}" id="cart"/></a>
                                <a href="/login" ><img src="{{ asset('img/add.png') }}" id="add" /></a>
                                @else
                                <a href="/cart"><img src="{{ asset('img/cart.png') }}" id="cart"/></a>
                                <a href="/create"><img src="{{ asset('img/add.png') }}" id="add" /></a>
                                @endguest
                             </div>                                             
                            <ul class="shopnow">
                        <!-- Authentication Links -->
                                @guest
                                <li><a href="/login"><button id="btn"><i class="fas fa-shopping-cart"></i> <span>SHOP NOW</span></button></a></li>
                                @else
                                <li><a href="/shop"><button id="btn"><i class="fas fa-shopping-cart"></i> <span>SHOP NOW</span></button></a></li>
                                 @endguest
                           </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/img/img1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/img/img2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/img/img4.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!---category slider--->
 <div id="our-products" class="slider" data-aos="fade-left">
        <h2 id="tp" ><b>Categories</b></h2>
 </div>
<div class="products">
	<div id="container"> 
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="4000">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		       <div class="row" id="product-row">
		       	 <div class="col-md-3">
                    <img src="/img/phone.jpg" id="image"> 
                    @guest
                       <a href="/login"><button id="btn">Phone</button></a>
                    @else 
                       <a href="/category/search/4"><button id="btn">Phone</button></a>
                    @endguest   
                 </div>
		       	<div class="col-md-3">
                       <img src="/img/desktop.jpg" id="image">
                        @guest
                       <a href="/login"><button id="btn">Desktop</button></a>
                        @else 
                        <a href="/category/search/2"><button id="btn">Desktop</button></a>
                        @endguest
                </div>
		       	<div class="col-md-3">
                       <img src="/img/laptop.jpg" id="image"> 
                        @guest
                       <a href="/login"><button id="btn">Laptop</button></a>
                        @else 
                        <a href="/category/search/1"><button id="btn">Laptop</button></a>
                        @endguest                  
                   </div>
		       	<div class="col-md-3">
                       <img src="/img/tablet.jpg" id="image">
                        @guest
                       <a href="/login"><button id="btn">Tablet</button></a>
                        @else 
                        <a href="/category/search/3"><button id="btn">Tablet</button></a>
                        @endguest
                   </div>
		       </div>
		    </div>
		    <div class="carousel-item">
		       <div class="row" id="product-row">
		       	<div class="col-md-3">
                       <img src="/img/headphone.jpg" id="image"> 
                        @guest
                       <a href="/login"><button id="btn">Headphone</button></a>
                        @else 
                        <a href="/category/search/7"><button id="btn">Headphone</button></a>
                        @endguest
                   </div>
		       	<div class="col-md-3">
                       <img src="/img/camera.jpg" id="image"> 
                        @guest
                       <a href="/login"><button id="btn">Camera</button></a>
                        @else 
                        <a href="/category/search/8"><button id="btn">Camera</button></a>
                        @endguest

                   </div>
		       	<div class="col-md-3">
                       <img src="/img/watch.jpg" id="image">
                        @guest
                       <a href="/login"><button id="btn">Watch</button></a>
                        @else 
                        <a href="/category/search/5"><button id="btn">Watch</button></a>
                        @endguest

                   </div>
		       	<div class="col-md-3">
                       <img src="/img/speaker.jpg" id="image"> 
                        @guest
                       <a href="/login"><button id="btn">Speaker</button></a>
                        @else 
                        <a href="/category/search/6"><button id="btn">Speaker</button></a>
                        @endguest

                  </div>
		       </div>
		    </div>
		  </div>
		  <a class="carousel-control-prev" id="prev" href="#carouselExampleControls" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon text-dark" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" id="next" href="#carouselExampleControls" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
        </div>
        <hr>
	</div>
<div>




<!---product slider--->
<div class="slider">
    <div id="container">
    <div class="row">
        <div class="col-md-12">
            <h2 id="tp" data-aos="fade-left">Trending <b>Products</b></h2>
            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="5000"> 
            <!-- Wrapper for carousel items -->
            <div class="carousel-inner">
                <div class="item carousel-item active">
                    <div class="row">


       @foreach($items->take(4) as $item)
                    <!-- start here -->
                        <div class="col-sm-3" >
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="/uploads/profile/{{ $item->image}}" class="img-responsive img-fluid" alt="">
                                </div>
                                <div class="thumb-content" id="findclosest">
                                    <input type="text" value="{{$item->product_id}}" id="idpass" class="idofdata"  hidden>
                                    <h4>{{$item->name}}</h4>
                                    <p class="item-price"><strike>Rs {{$item->price+$item->price*0.2}}</strike> <span>Rs {{$item->price}}</span></p>
                                    
                                      @guest
                                    <a class="btn btn-primary" href="/login" id="addtocart">More details<</a>
                                    @else
                                    <a href="/products/details/{{$item->product_id}}" class="btn btn-primary">More details</a>
                                    @endguest
                                    
                                </div>                      
                            </div>
                        </div>
                     

                    <!-- card end here -->
                @endforeach
                    </div>
                </div>
                <div class="item carousel-item">
                    <div class="row">
                        
            @foreach($items->skip(4)->take(4) as $item)
                    <!-- start here -->
                        <div class="col-sm-3" >
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="/uploads/profile/{{ $item->image}}" class="img-responsive img-fluid" alt="">
                                </div>
                                <div class="thumb-content" id="findclosest">
                                    <input type="text" value="{{$item->product_id}}" id="idpass" class="idofdata"  hidden>
                                    <h4>{{$item->name}}</h4>
                                    <p class="item-price"><strike>Rs {{$item->price+$item->price*0.2}}</strike> <span>Rs {{$item->price}}</span></p>
                                     @guest
                                    <a class="btn btn-primary" href="/login" id="addtocart">More details<</a>
                                    @else
                                    <a href="/products/details/{{$item->product_id}}" class="btn btn-primary">More details</a>
                                    @endguest
                                </div>                      
                            </div>
                        </div>
                     
                    <!-- card end here -->
                @endforeach
                    </div>
                </div>
                <div class="item carousel-item">
                    <div class="row">
                          @foreach($items->skip(8)->take(4) as $item)
                    <!-- start here -->
                        <div class="col-sm-3" >
                            <div class="thumb-wrapper">
                                <div class="img-box">
                                    <img src="/uploads/profile/{{ $item->image}}" class="img-responsive img-fluid" alt="">
                                </div>
                                <div class="thumb-content" id="findclosest">
                                    <input type="text" value="{{$item->product_id}}" id="idpass" class="idofdata"  hidden>
                                    <h4>{{$item->name}}</h4>
                                    <p class="item-price"><strike>Rs {{$item->price+$item->price*0.2}}</strike> <span>Rs {{$item->price}}</span></p>
                                     @guest
                                    <a class="btn btn-primary" href="/login" id="addtocart">More details</a>
                                    @else
                                    <a href="/products/details/{{$item->product_id}}" class="btn btn-primary">More details</a>
                                    @endguest
                                </div>                      
                            </div>
                        </div>
                     
                    <!-- card end here -->
                @endforeach  
                    
                </div>
            </div>
            <!-- Carousel controls -->
            <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
        @guest
        <center><a href="/login"><button id="view-more">View more</button></a></center>
        @else
        <center><a href="/shop"><button id="view-more">View more</button></a></center>
      
        @endguest
        </div>
    </div>
    <hr>
</div>

<!---end of product slider--->

 <!-- Latest Blog Section Begin -->
        <div class="container">
            <div class="benefit-items">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="img/icon-1.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Free Shipping</h6>
                                <p>For all order over 99$</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="img/icon-2.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Delivery On Time</h6>
                                <p>If good have prolems</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="img/icon-1.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Secure Payment</h6>
                                <p>100% secure payment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>   
        <br>
        <br>



 <!-- Footer Section Begin -->
    <footer class="footer-section" style="width:100%">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="#"><img src="img/footer-logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: Panga-08, kirtipur</li>
                            <li>Phone: +977-9860462244</li>
                            <li>Email: tech.shop@gmail.com</li>
                        </ul>
                        <div class="footer-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Information</h5>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Services</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>My Account</h5>
                        <ul>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Shopping Cart</a></li>
                            <li><a href="#">Shop</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Join Our Newsletter Now</h5>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Enter Your Mail">
                            <button type="button">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                          <span>Copyright &copy;2021 All rights reserved |  TechShop</span>
                        </div>
                        <div class="payment-pic">
                            <img src="img/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript">
    AOS.init();
    </script>
      <!-- Bootstrap core JavaScript -->
  
    <!-- <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>  -->
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('js/jquery.dd.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script> 
    
</body>

</html>



