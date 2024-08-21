@extends('frontend.main_master')
@section('content')
@section('title')
Vogue Safety
@endsection
<div id="hero">
  <div class="image" style="height:650px;"> 
    <img 
      src="{!! asset('frontend/assets/img/home-hero.png') !!}"
      srcset="
          {{ asset('frontend/assets/img/home-hero.png') }} 320w,
          {{ asset('frontend/assets/img/home-hero.png') }} 480w,
          {{ asset('frontend/assets/img/home-hero.png') }} 800w,
          {{ asset('frontend/assets/img/home-hero.png') }} 1200w
      "
      sizes="(max-width: 320px) 320px, (max-width: 480px) 480px, (max-width: 800px) 800px, 100vw"
      style="z-index:1;width:100%;height:100%;object-fit:cover;"
      alt="vogue-safety-shoes"
      loading="lazy"
    >
    <div class="container-fluid" style="z-index:2;margin-top:-500px;">
      <div class="text-left">
        <h1 class="text-uppercase" style="color:white;">Vogue Safety</h1>
        <h1 class="big-text" style="line-height:inherit;letter-spacing:1px;">Our New Collections </h1>
        <h3 style="color:white;line-height:inherit;letter-spacing:1px;">Safety shoes give the wearer a genuine feeling of safety.</h3>
        <a href="">
          <img 
          src="{!! asset('frontend/assets/img/btn-shopnow.png') !!}"
          srcset="
              {{ asset('frontend/assets/img/btn-shopnow.png') }} 320w,
              {{ asset('frontend/assets/img/btn-shopnow.png') }} 480w,
              {{ asset('frontend/assets/img/btn-shopnow.png') }} 800w,
              {{ asset('frontend/assets/img/btn-shopnow.png') }} 1200w
          "
          style="padding:10px;width:300px;object-fit:contain;"
          alt="vogue-safety-shoes"
          loading="lazy"
          >
        </a>

      </div>
    </div>
  </div>
</div>

<!-- <div class="container-fluid" style="margin-top:-80px;">
  <section class="section wow new-arriavls" style="padding: 10px 10px; border-radius: 20px !important;background-color:#F1FBF8;">
    <div id="brands-carousel" class="logo-slider wow">
      <div class="logo-slider-inner">
        <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
          <div class="item m-t-15"> <a href="#" class="image"> <img data-echo="{{ asset('frontend/assets/img/partner/partner1.png') }}" src="{{ asset('frontend/assets/img/partner/partner1.png') }}" alt=""> </a> </div>
          <div class="item m-t-10"> <a href="#" class="image"> <img data-echo="{{ asset('frontend/assets/img/partner/partner2.png') }}" src="{{ asset('frontend/assets/img/partner/partner2.png') }}" alt=""> </a> </div>
          <div class="item"> <a href="#" class="image"> <img data-echo="{{ asset('frontend/assets/img/partner/partner3.png') }}" src="{{ asset('frontend/assets/img/partner/partner3.png') }}" alt=""> </a> </div>
          <div class="item"> <a href="#" class="image"> <img data-echo="{{ asset('frontend/assets/img/partner/partner4.png') }}" src="{{ asset('frontend/assets/img/partner/partner4.png') }}" alt=""> </a> </div>
          <div class="item"> <a href="#" class="image"> <img data-echo="{{ asset('frontend/assets/img/partner/partner5.png') }}" src="{{ asset('frontend/assets/img/partner/partner5.png') }}" alt=""> </a> </div>
          <div class="item"> <a href="#" class="image"> <img data-echo="{{ asset('frontend/assets/img/partner/partner6.png') }}" src="{{ asset('frontend/assets/img/partner/partner6.png') }}" alt=""> </a> </div>
          <div class="item"> <a href="#" class="image"> <img data-echo="{{ asset('frontend/assets/img/partner/partner7.png') }}" src="{{ asset('frontend/assets/img/partner/partner7.png') }}" alt=""> </a> </div>
          <div class="item"> <a href="#" class="image"> <img data-echo="{{ asset('frontend/assets/img/partner/partner8.png') }}" src="{{ asset('frontend/assets/img/partner/partner7.png') }}" alt=""> </a> </div>
        </div>
      </div>
    </div>
  </section>
</div> -->

<div class='container-fluid'>
    <div class='row' style="margin-bottom: 15px;">
      <div class='col-md-3 sidebar'> 
        <div class="side-menu animate-dropdown outer-bottom-xs" style="border-radius: 15px;">
          <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Popular Categories</div>
          <nav class="yamm megamenu-horizontal">
            <ul class="nav">
              <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">BIOMEX DYNAMICS</a>
                <ul class="dropdown-menu mega-menu">
                  <li class="yamm-content">
                    <div class="row">
                      <div class="col-sm-12 col-md-3">
                        <ul class="links list-unstyled">
                          <li><a href="#">Dresses</a></li>
                          <li><a href="#">Shoes </a></li>
                          <li><a href="#">Jackets</a></li>
                          <li><a href="#">Sunglasses</a></li>
                          <li><a href="#">Sport Wear</a></li>
                          <li><a href="#">Blazers</a></li>
                          <li><a href="#">Shirts</a></li>
                          <li><a href="#">Shorts</a></li>
                        </ul>
                      </div>
                      
                      <div class="col-sm-12 col-md-3">
                        <ul class="links list-unstyled">
                          <li><a href="#">Handbags</a></li>
                          <li><a href="#">Jwellery</a></li>
                          <li><a href="#">Swimwear </a></li>
                          <li><a href="#">Tops</a></li>
                          <li><a href="#">Flats</a></li>
                          <li><a href="#">Shoes</a></li>
                          <li><a href="#">Winter Wear</a></li>
                          <li><a href="#">Night Suits</a></li>
                        </ul>
                      </div>
                      
                      <div class="col-sm-12 col-md-3">
                        <ul class="links list-unstyled">
                          <li><a href="#">Toys &amp; Games</a></li>
                          <li><a href="#">Jeans</a></li>
                          <li><a href="#">Shirts</a></li>
                          <li><a href="#">Shoes</a></li>
                          <li><a href="#">School Bags</a></li>
                          <li><a href="#">Lunch Box</a></li>
                          <li><a href="#">Footwear</a></li>
                          <li><a href="#">Wipes</a></li>
                        </ul>
                      </div>
                      
                      <div class="col-sm-12 col-md-3">
                        <ul class="links list-unstyled">
                          <li><a href="#">Sandals </a></li>
                          <li><a href="#">Shorts</a></li>
                          <li><a href="#">Dresses</a></li>
                          <li><a href="#">Jwellery</a></li>
                          <li><a href="#">Bags</a></li>
                          <li><a href="#">Night Dress</a></li>
                          <li><a href="#">Swim Wear</a></li>
                          <li><a href="#">Toys</a></li>
                        </ul>
                      </div>
                       
                    </div>
                    <!-- /.row --> 
                  </li>
                  
                </ul>
                <!-- /.dropdown-menu --> </li>
              <!-- /.menu-item -->
              
              <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">BAREFOOTERS</a> 
                <!-- ================================== MEGAMENU VERTICAL ================================== -->
                <ul class="dropdown-menu mega-menu">
                  <li class="yamm-content">
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-lg-4">
                        <ul>
                          <li><a href="#">Gaming</a></li>
                          <li><a href="#">Laptop Skins</a></li>
                          <li><a href="#">Apple</a></li>
                          <li><a href="#">Dell</a></li>
                          <li><a href="#">Lenovo</a></li>
                          <li><a href="#">Microsoft</a></li>
                          <li><a href="#">Asus</a></li>
                          <li><a href="#">Adapters</a></li>
                          <li><a href="#">Batteries</a></li>
                          <li><a href="#">Cooling Pads</a></li>
                        </ul>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-lg-4">
                        <ul>
                          <li><a href="#">Routers &amp; Modems</a></li>
                          <li><a href="#">CPUs, Processors</a></li>
                          <li><a href="#">PC Gaming Store</a></li>
                          <li><a href="#">Graphics Cards</a></li>
                          <li><a href="#">Components</a></li>
                          <li><a href="#">Webcam</a></li>
                          <li><a href="#">Memory (RAM)</a></li>
                          <li><a href="#">Motherboards</a></li>
                          <li><a href="#">Keyboards</a></li>
                          <li><a href="#">Headphones</a></li>
                        </ul>
                      </div>
                      <div class="dropdown-banner-holder"> <a href="#"><img alt="" src="" /></a> </div>
                    </div>
                    <!-- /.row --> 
                  </li>
                  
                </ul>
                <!-- /.dropdown-menu --> 
                <!-- ================================== MEGAMENU VERTICAL ================================== --> </li>
              <!-- /.menu-item -->
              
              <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">BIOMEX PROTECTION</a>
                <ul class="dropdown-menu mega-menu">
                  <li class="yamm-content">
                    <div class="row">
                      <div class="col-sm-12 col-md-3">
                        <ul class="links list-unstyled">
                          <li><a href="#">Dresses</a></li>
                          <li><a href="#">Shoes </a></li>
                          <li><a href="#">Jackets</a></li>
                          <li><a href="#">Sunglasses</a></li>
                          <li><a href="#">Sport Wear</a></li>
                          <li><a href="#">Blazers</a></li>
                          <li><a href="#">Shirts</a></li>
                          <li><a href="#">Shorts</a></li>
                        </ul>
                      </div>
                      
                      <div class="col-sm-12 col-md-3">
                        <ul class="links list-unstyled">
                          <li><a href="#">Handbags</a></li>
                          <li><a href="#">Jwellery</a></li>
                          <li><a href="#">Swimwear </a></li>
                          <li><a href="#">Tops</a></li>
                          <li><a href="#">Flats</a></li>
                          <li><a href="#">Shoes</a></li>
                          <li><a href="#">Winter Wear</a></li>
                          <li><a href="#">Night Suits</a></li>
                        </ul>
                      </div>
                      
                      <div class="col-sm-12 col-md-3">
                        <ul class="links list-unstyled">
                          <li><a href="#">Toys &amp; Games</a></li>
                          <li><a href="#">Jeans</a></li>
                          <li><a href="#">Shirts</a></li>
                          <li><a href="#">Shoes</a></li>
                          <li><a href="#">School Bags</a></li>
                          <li><a href="#">Lunch Box</a></li>
                          <li><a href="#">Footwear</a></li>
                          <li><a href="#">Wipes</a></li>
                        </ul>
                      </div>
                      
                      <div class="col-sm-12 col-md-3">
                        <ul class="links list-unstyled">
                          <li><a href="#">Sandals </a></li>
                          <li><a href="#">Shorts</a></li>
                          <li><a href="#">Dresses</a></li>
                          <li><a href="#">Jwellery</a></li>
                          <li><a href="#">Bags</a></li>
                          <li><a href="#">Night Dress</a></li>
                          <li><a href="#">Swim Wear</a></li>
                          <li><a href="#">Toys</a></li>
                        </ul>
                      </div>
                       
                    </div>
                    <!-- /.row --> 
                  </li>
                  
                </ul>
                <!-- /.dropdown-menu --> </li>
              <!-- /.menu-item -->
              
              <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">BUSINESS</a>
                <ul class="dropdown-menu mega-menu">
                  <li class="yamm-content">
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-lg-4">
                        <ul>
                          <li><a href="#">Gaming</a></li>
                          <li><a href="#">Laptop Skins</a></li>
                          <li><a href="#">Apple</a></li>
                          <li><a href="#">Dell</a></li>
                          <li><a href="#">Lenovo</a></li>
                          <li><a href="#">Microsoft</a></li>
                          <li><a href="#">Asus</a></li>
                          <li><a href="#">Adapters</a></li>
                          <li><a href="#">Batteries</a></li>
                          <li><a href="#">Cooling Pads</a></li>
                        </ul>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-lg-4">
                        <ul>
                          <li><a href="#">Routers &amp; Modems</a></li>
                          <li><a href="#">CPUs, Processors</a></li>
                          <li><a href="#">PC Gaming Store</a></li>
                          <li><a href="#">Graphics Cards</a></li>
                          <li><a href="#">Components</a></li>
                          <li><a href="#">Webcam</a></li>
                          <li><a href="#">Memory (RAM)</a></li>
                          <li><a href="#">Motherboards</a></li>
                          <li><a href="#">Keyboards</a></li>
                          <li><a href="#">Headphones</a></li>
                        </ul>
                      </div>
                      <div class="dropdown-banner-holder"> <a href="#"><img alt="" src="" /></a> </div>
                    </div>
                    <!-- /.row --> 
                  </li>
                  
                </ul>
                <!-- /.dropdown-menu --> </li>
              <!-- /.menu-item -->
              
              <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">DIMENSION PRO</a>
                <ul class="dropdown-menu mega-menu">
                  <li class="yamm-content">
                    <div class="row">
                      <div class="col-sm-12 col-md-3">
                        <ul class="links list-unstyled">
                          <li><a href="#">Dresses</a></li>
                          <li><a href="#">Shoes </a></li>
                          <li><a href="#">Jackets</a></li>
                          <li><a href="#">Sunglasses</a></li>
                          <li><a href="#">Sport Wear</a></li>
                          <li><a href="#">Blazers</a></li>
                          <li><a href="#">Shirts</a></li>
                          <li><a href="#">Shorts</a></li>
                        </ul>
                      </div>
                      
                      <div class="col-sm-12 col-md-3">
                        <ul class="links list-unstyled">
                          <li><a href="#">Handbags</a></li>
                          <li><a href="#">Jwellery</a></li>
                          <li><a href="#">Swimwear </a></li>
                          <li><a href="#">Tops</a></li>
                          <li><a href="#">Flats</a></li>
                          <li><a href="#">Shoes</a></li>
                          <li><a href="#">Winter Wear</a></li>
                          <li><a href="#">Night Suits</a></li>
                        </ul>
                      </div>
                      
                      <div class="col-sm-12 col-md-3">
                        <ul class="links list-unstyled">
                          <li><a href="#">Toys &amp; Games</a></li>
                          <li><a href="#">Jeans</a></li>
                          <li><a href="#">Shirts</a></li>
                          <li><a href="#">Shoes</a></li>
                          <li><a href="#">School Bags</a></li>
                          <li><a href="#">Lunch Box</a></li>
                          <li><a href="#">Footwear</a></li>
                          <li><a href="#">Wipes</a></li>
                        </ul>
                      </div>
                      
                      <div class="col-sm-12 col-md-3">
                        <ul class="links list-unstyled">
                          <li><a href="#">Sandals </a></li>
                          <li><a href="#">Shorts</a></li>
                          <li><a href="#">Dresses</a></li>
                          <li><a href="#">Jwellery</a></li>
                          <li><a href="#">Bags</a></li>
                          <li><a href="#">Night Dress</a></li>
                          <li><a href="#">Swim Wear</a></li>
                          <li><a href="#">Toys</a></li>
                        </ul>
                      </div>
                       
                    </div>
                    <!-- /.row --> 
                  </li>
                  
                </ul>
                <!-- /.dropdown-menu --> </li>
              <!-- /.menu-item -->
              
              <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">E-TRACK</a>
                <ul class="dropdown-menu mega-menu">
                  <li class="yamm-content">
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-lg-4">
                        <ul>
                          <li><a href="#">Gaming</a></li>
                          <li><a href="#">Laptop Skins</a></li>
                          <li><a href="#">Apple</a></li>
                          <li><a href="#">Dell</a></li>
                          <li><a href="#">Lenovo</a></li>
                          <li><a href="#">Microsoft</a></li>
                          <li><a href="#">Asus</a></li>
                          <li><a href="#">Adapters</a></li>
                          <li><a href="#">Batteries</a></li>
                          <li><a href="#">Cooling Pads</a></li>
                        </ul>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-lg-4">
                        <ul>
                          <li><a href="#">Routers &amp; Modems</a></li>
                          <li><a href="#">CPUs, Processors</a></li>
                          <li><a href="#">PC Gaming Store</a></li>
                          <li><a href="#">Graphics Cards</a></li>
                          <li><a href="#">Components</a></li>
                          <li><a href="#">Webcam</a></li>
                          <li><a href="#">Memory (RAM)</a></li>
                          <li><a href="#">Motherboards</a></li>
                          <li><a href="#">Keyboards</a></li>
                          <li><a href="#">Headphones</a></li>
                        </ul>
                      </div>
                      <div class="dropdown-banner-holder"> <a href="#"><img alt="" src="" /></a> </div>
                    </div>
                    <!-- /.row --> 
                  </li>
                  
                </ul>
                <!-- /.dropdown-menu --> </li>
              <!-- /.menu-item -->
              
              <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">ERGO-ACTIVE</a> 
                <!-- /.dropdown-menu --> </li>
              <!-- /.menu-item -->
              
              <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">FIREFIGHTER</a> 
                <!-- ================================== MEGAMENU VERTICAL ================================== --> 
                <!-- /.dropdown-menu --> 
                <!-- ================================== MEGAMENU VERTICAL ================================== --> </li>
              <!-- /.menu-item -->
              
              <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">JORI</a> 
                <!-- /.dropdown-menu --> </li>
              <!-- /.menu-item -->
              
            </ul>
          </nav>
        </div>
      </div>
      <div class='col-md-9'> 
        <div class="best-deal wow outer-bottom-xs" style="border-radius:15px;">
              <h2 class="section-title">Best seller</h2>
              <div class="sidebar-widget-body outer-top-xs">
                <div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
                  <div class="item">
                    <div class="products best-product">
                      <div class="product">
                        <div class="product-micro">
                          <div class="row product-micro-row">
                              <div class="product-info">
                                <div class="product-image">
                                  <div class="p-5"> 
                                    <a href="#"> 
                                      <img src="{!! asset('frontend/assets/img/Elten_769551_neu-300x300.jpg') !!}" alt=""> 
                                    </a> 
                                    <div class="px-3 pb-3">
                                      <h3 class="name pt-3"><a href="#">Floral Print Buttoned</a></h3>
                                      <div class="rating rateit-small"></div>
                                      <div class="product-price" style="display:flex;justify-content:space-between;align-items:center;"> 
                                      <span class="price" style="flex-grow: 1;"> $450.99 
                                        <span class="price-before-discount"> $ 800</span> 
                                        <span class="alert alert-danger" style="width:100px;padding:2px;border-radius:25px;"> 30 %</span>
                                      </span> 
                                      
                                      <img 
                                        src="{!! asset('frontend/assets/img/btn-addtocart.png') !!}"
                                        srcset="
                                            {{ asset('frontend/assets/img/btn-addtocart.png') }} 320w,
                                            {{ asset('frontend/assets/img/btn-addtocart.png') }} 480w,
                                            {{ asset('frontend/assets/img/btn-addtocart.png') }} 800w,
                                            {{ asset('frontend/assets/img/btn-addtocart.png') }} 1200w
                                        "
                                        style="margin-top:-5%;padding-right:0px;width:35px;object-fit:contain;"
                                        alt="vogue-safety-shoes"
                                        loading="lazy"
                                        >
                                      </div>
                                    </div>
                                  </div>
                                  <!-- /.image --> 
                                  
                                </div>
                                
                              </div>
                            
                          </div>
                          <!-- /.product-micro-row --> 
                        </div>
                        <!-- /.product-micro --> 
                        
                      </div>
                      <div class="product">
                        <div class="product-micro">
                          <div class="row product-micro-row">
                              <div class="product-info">
                                <div class="product-image">
                                  <div class="p-5"> 
                                    <a href="#"> 
                                      <img src="{!! asset('frontend/assets/img/Elten_769551_neu-300x300.jpg') !!}" alt=""> 
                                    </a> 
                                    <div class="px-3 pb-3">
                                      <h3 class="name pt-3"><a href="#">Floral Print Buttoned</a></h3>
                                      <div class="rating rateit-small"></div>
                                      <div class="product-price" style="display:flex;justify-content:space-between;align-items:center;"> 
                                      <span class="price" style="flex-grow: 1;"> $450.99 
                                        <span class="price-before-discount"> $ 800</span> 
                                        <span class="alert alert-danger" style="width:100px;padding:2px;border-radius:25px;"> 30 %</span>
                                      </span> 
                                      
                                      <img 
                                        src="{!! asset('frontend/assets/img/btn-addtocart.png') !!}"
                                        srcset="
                                            {{ asset('frontend/assets/img/btn-addtocart.png') }} 320w,
                                            {{ asset('frontend/assets/img/btn-addtocart.png') }} 480w,
                                            {{ asset('frontend/assets/img/btn-addtocart.png') }} 800w,
                                            {{ asset('frontend/assets/img/btn-addtocart.png') }} 1200w
                                        "
                                        style="margin-top:-5%;padding-right:0px;width:35px;object-fit:contain;"
                                        alt="vogue-safety-shoes"
                                        loading="lazy"
                                        >
                                      </div>
                                    </div>
                                  </div>
                                  <!-- /.image --> 
                                  
                                </div>
                                
                              </div>
                            
                          </div>
                          <!-- /.product-micro-row --> 
                        </div>
                        <!-- /.product-micro --> 
                        
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="products best-product">
                      <div class="product">
                        <div class="product-micro">
                          <div class="row product-micro-row">
                            <div class="col col-xs-5">
                              <div class="product-image">
                                <div class="image"> <a href="#"> <img src="https://voguesafety.com.sg/wp-content/uploads/2018/05/ELTEN_72151_neu-300x300.jpg" alt=""> </a> </div>
                                <!-- /.image --> 
                                
                              </div>
                              <!-- /.product-image --> 
                            </div>
                            
                            <div class="col2 col-xs-7">
                              <div class="product-info">
                                <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                                <div class="rating rateit-small"></div>
                                <div class="product-price"> <span class="price"> $450.99 </span> </div>
                                <!-- /.product-price --> 
                                
                              </div>
                            </div>
                            
                          </div>
                          <!-- /.product-micro-row --> 
                        </div>
                        <!-- /.product-micro --> 
                        
                      </div>
                      <div class="product">
                        <div class="product-micro">
                          <div class="row product-micro-row">
                            <div class="col col-xs-5">
                              <div class="product-image">
                                <div class="image"> <a href="#"> <img src="https://voguesafety.com.sg/wp-content/uploads/2018/08/ELTEN_76651_NEU.jpg" alt=""> </a> </div>
                                <!-- /.image --> 
                                
                              </div>
                              <!-- /.product-image --> 
                            </div>
                            
                            <div class="col2 col-xs-7">
                              <div class="product-info">
                                <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                                <div class="rating rateit-small"></div>
                                <div class="product-price"> <span class="price"> $450.99 </span> </div>
                                <!-- /.product-price --> 
                                
                              </div>
                            </div>
                            
                          </div>
                          <!-- /.product-micro-row --> 
                        </div>
                        <!-- /.product-micro --> 
                        
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="products best-product">
                      <div class="product">
                        <div class="product-micro">
                          <div class="row product-micro-row">
                            <div class="col col-xs-5">
                              <div class="product-image">
                                <div class="image"> <a href="#"> <img src="https://voguesafety.com.sg/wp-content/uploads/2018/08/ELTEN_76327_NEU-300x300.jpg" alt=""> </a> </div>
                                <!-- /.image --> 
                                
                              </div>
                              <!-- /.product-image --> 
                            </div>
                            
                            <div class="col2 col-xs-7">
                              <div class="product-info">
                                <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                                <div class="rating rateit-small"></div>
                                <div class="product-price"> <span class="price"> $450.99 </span> </div>
                                <!-- /.product-price --> 
                                
                              </div>
                            </div>
                            
                          </div>
                          <!-- /.product-micro-row --> 
                        </div>
                        <!-- /.product-micro --> 
                        
                      </div>
                      <div class="product">
                        <div class="product-micro">
                          <div class="row product-micro-row">
                            <div class="col col-xs-5">
                              <div class="product-image">
                                <div class="image"> <a href="#"> <img src="https://voguesafety.com.sg/wp-content/uploads/2018/05/ELTEN_763341_NEU-300x300.jpg" alt=""> </a> </div>
                                <!-- /.image --> 
                                
                              </div>
                              <!-- /.product-image --> 
                            </div>
                            
                            <div class="col2 col-xs-7">
                              <div class="product-info">
                                <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                                <div class="rating rateit-small"></div>
                                <div class="product-price"> <span class="price"> $450.99 </span> </div>
                                <!-- /.product-price --> 
                                
                              </div>
                            </div>
                            
                          </div>
                          <!-- /.product-micro-row --> 
                        </div>
                        <!-- /.product-micro --> 
                        
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="products best-product">
                      <div class="product">
                        <div class="product-micro">
                          <div class="row product-micro-row">
                            <div class="col col-xs-5">
                              <div class="product-image">
                                <div class="image"> <a href="#"> <img src="https://voguesafety.com.sg/wp-content/uploads/2018/05/ELTEN_767541_neu-300x300.jpg" alt=""> </a> </div>
                                <!-- /.image --> 
                                
                              </div>
                              <!-- /.product-image --> 
                            </div>
                            
                            <div class="col2 col-xs-7">
                              <div class="product-info">
                                <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                                <div class="rating rateit-small"></div>
                                <div class="product-price"> <span class="price"> $450.99 </span> </div>
                                <!-- /.product-price --> 
                                
                              </div>
                            </div>
                            
                          </div>
                          <!-- /.product-micro-row --> 
                        </div>
                        <!-- /.product-micro --> 
                        
                      </div>
                      <div class="product">
                        <div class="product-micro">
                          <div class="row product-micro-row">
                            <div class="col col-xs-5">
                              <div class="product-image">
                                <div class="image"> <a href="#"> <img src="https://voguesafety.com.sg/wp-content/uploads/2018/04/Elten_74761_neu-300x300.jpg" alt=""> </a> </div>
                                <!-- /.image --> 
                                
                              </div>
                              <!-- /.product-image --> 
                            </div>
                            
                            <div class="col2 col-xs-7">
                              <div class="product-info">
                                <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                                <div class="rating rateit-small"></div>
                                <div class="product-price"> <span class="price"> $450.99 </span> </div>
                                <!-- /.product-price --> 
                                
                              </div>
                            </div>
                            
                          </div>
                          <!-- /.product-micro-row --> 
                        </div>
                        <!-- /.product-micro --> 
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.sidebar-widget-body --> 
            </div>
          </div>
          
        </div>
    </div>
</div>

<div class="container-fluid">
  <img 
    src="{!! asset('frontend/assets/img/home-banner2.0.png') !!}"
    srcset="
        {{ asset('frontend/assets/img/home-banner2.0.png') }} 320w,
        {{ asset('frontend/assets/img/home-banner2.0.png') }} 480w,
        {{ asset('frontend/assets/img/home-banner2.0.png') }} 800w,
        {{ asset('frontend/assets/img/home-banner2.0.png') }} 1200w
    "
    sizes="(max-width: 320px) 320px, (max-width: 480px) 480px, (max-width: 800px) 800px, 100vw"
    style="width: 100%; height:100%;object-fit:cover; z-index: 1;"
    alt="vogue-safety-shoes"
    loading="lazy"
  >
  <img 
    src="{!! asset('frontend/assets/img/home-banner-text2.0.png') !!}"
    srcset="
        {{ asset('frontend/assets/img/home-banner-text2.0.png') }} 320w,
        {{ asset('frontend/assets/img/home-banner-text2.0.png') }} 480w,
        {{ asset('frontend/assets/img/home-banner-text2.0.png') }} 800w,
        {{ asset('frontend/assets/img/home-banner-text2.0.png') }} 1200w
    "
    sizes="(max-width: 320px) 320px, (max-width: 480px) 480px, (max-width: 800px) 800px, 100vw"
    style="width:40%;object-fit: contain; z-index: 2; margin-top: -50%; margin-left:50px;"
    alt="vogue-safety-shoes-2"
    loading="lazy"
  >
</div>

<div class='container-fluid pt-3'>
  <div class="row">
    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
      <div id="product-tabs-slider" class="scroll-tabs wow" style="border-radius:15px;">
          <div class="more-info-tab clearfix ">
            <h3 class="new-product-title pull-left">Popular List</h3>
            <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
              <!-- <li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab"><b>Popular List</b></a></li> -->
              <li class="active"><a data-transition-type="backSlide" href="#smartphone" data-toggle="tab"></a></li>
              <!-- <li><a data-transition-type="backSlide" href="#laptop" data-toggle="tab">Barefooters</a></li>
              <li><a data-transition-type="backSlide" href="#apple" data-toggle="tab">E-Track</a></li> -->
            </ul>
            <!-- /.nav-tabs --> 
          </div>
          <div class="tab-content outer-top-xs">
            <div class="tab-pane in active" id="all">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="5">
                  <div class="item">
                    <div class="products">
                      <div class="product py-5">
                        <div class="product-image">
                          <div class="image p-5"> 
                            <a href="detail.html">
                              <img  src="{!! asset('frontend/assets/img/Elten_769551_neu-300x300.jpg') !!}" alt="">
                            </a> 
                          </div>
                          <!-- /.image -->
                          
                          <!-- <div class="tag hot"><span>Hot</span></div> -->
                        </div>
                        <!-- /.product-image -->
                        <hr class="pt-3" style="color:black;">
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                          <!-- <div class="rating rateit-small"></div> -->
                          <div class="description"></div>
                          <div class="product-price"> 
                            <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> 
                          </div>
                          <div style="text-align:right;padding:5px;margin-top:-25%">                              
                            <img 
                              class="pr-0"
                              src="{!! asset('frontend/assets/img/btn-addtocart.png') !!}"
                              srcset="
                                  {{ asset('frontend/assets/img/btn-addtocart.png') }} 320w,
                                  {{ asset('frontend/assets/img/btn-addtocart.png') }} 480w,
                                  {{ asset('frontend/assets/img/btn-addtocart.png') }} 800w,
                                  {{ asset('frontend/assets/img/btn-addtocart.png') }} 1200w
                              "
                              
                              style="width:35px;object-fit:contain;"
                              alt="vogue-safety-shoes"
                              loading="lazy"
                            >
                          </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action text-center">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button data-toggle="tooltip" class="btn btn-primary icon" type="button" title="Add Cart"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <!-- <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Compare"> 
                                <i class="fa fa-signal" aria-hidden="true"></i> </a> </li> -->
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="https://voguesafety.com.sg/wp-content/uploads/2023/01/t-66A7384892E7D27446F342CE476B79EF-300x300.jpg" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <!-- <div class="tag sale"><span>Sales</span></div> -->
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                          <!-- <div class="rating rateit-small"></div> -->
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <!-- <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li> -->
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="https://voguesafety.com.sg/wp-content/uploads/2018/05/ELTEN_72151_neu-300x300.jpg" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <!-- <div class="tag sale"><span>sale</span></div> -->
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                          <!-- <div class="rating rateit-small"></div> -->
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <!-- <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li> -->
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="https://voguesafety.com.sg/wp-content/uploads/2018/08/ELTEN_76651_NEU.jpg" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <!-- <div class="tag sale"><span>sale</span></div> -->
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                          <!-- <div class="rating rateit-small"></div> -->
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <!-- <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li> -->
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="https://voguesafety.com.sg/wp-content/uploads/2018/04/Elten_74761_neu-300x300.jpg" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <!-- <div class="tag hot"><span>hot</span></div> -->
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                          <!-- <div class="rating rateit-small"></div> -->
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <!-- <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li> -->
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="https://voguesafety.com.sg/wp-content/uploads/2021/02/92260_KIOWA_BOA-300x300.jpg" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <!-- <div class="tag new"><span>new</span></div> -->
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                          <!-- <div class="rating rateit-small"></div> -->
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <!-- <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li> -->
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item --> 
                </div>
                <!-- /.home-owl-carousel --> 
              </div>
              <!-- /.product-slider --> 
            </div>
            <!-- /.tab-pane -->
            
            <div class="tab-pane" id="smartphone">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="https://voguesafety.com.sg/wp-content/uploads/2018/07/elten_729671-300x300.jpg" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                          <!-- <div class="rating rateit-small"></div> -->
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <!-- <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li> -->
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="https://voguesafety.com.sg/wp-content/uploads/2018/06/ELTEN_76628_NEU-300x300.jpg" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                          <!-- <div class="rating rateit-small"></div> -->
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <!-- <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li> -->
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="https://voguesafety.com.sg/wp-content/uploads/2018/06/ELTEN_76628_NEU-300x300.jpg" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                          <!-- <div class="rating rateit-small"></div> -->
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <!-- <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li> -->
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="https://voguesafety.com.sg/wp-content/uploads/2018/05/ELTEN_767541_neu-300x300.jpg" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                          <!-- <div class="rating rateit-small"></div> -->
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <!-- <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li> -->
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="https://voguesafety.com.sg/wp-content/uploads/2018/05/ELTEN_767541_neu-300x300.jpg" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                          <!-- <div class="rating rateit-small"></div> -->
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <!-- <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li> -->
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="https://voguesafety.com.sg/wp-content/uploads/2018/08/ELTEN_76327_NEU-300x300.jpg" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                          <!-- <div class="rating rateit-small"></div> -->
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <!-- <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li> -->
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item --> 
                </div>
                <!-- /.home-owl-carousel --> 
              </div>
              <!-- /.product-slider --> 
            </div>
            <!-- /.tab-pane -->
            
            <div class="tab-pane" id="laptop">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="https://voguesafety.com.sg/wp-content/uploads/2018/04/Elten_74761_neu-300x300.jpg" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                          <!-- <div class="rating rateit-small"></div> -->
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <!-- <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li> -->
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="https://voguesafety.com.sg/wp-content/uploads/2018/05/ELTEN_763341_NEU-300x300.jpg" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="https://voguesafety.com.sg/wp-content/uploads/2018/04/Elten_74761_neu-300x300.jpg" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img src="https://voguesafety.com.sg/wp-content/uploads/2018/07/elten_729671-300x300.jpg" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="https://voguesafety.com.sg/wp-content/uploads/2018/08/ELTEN_76651_NEU.jpg" alt="image"></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <!-- <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li> -->
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img src="https://voguesafety.com.sg/wp-content/uploads/2023/01/t-66A7384892E7D27446F342CE476B79EF-300x300.jpg" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Apple Iphone 5s 32GB</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <!-- <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li> -->
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item --> 
                </div>
                <!-- /.home-owl-carousel --> 
              </div>
              <!-- /.product-slider --> 
            </div>
            <!-- /.tab-pane -->
            
            <div class="tab-pane" id="apple">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img src="https://voguesafety.com.sg/wp-content/uploads/2018/05/ELTEN_72151_neu-300x300.jpg" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <!-- <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li> -->
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="https://voguesafety.com.sg/wp-content/uploads/2018/05/ELTEN_767541_neu-300x300.jpg" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <!-- <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li> -->
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="https://voguesafety.com.sg/wp-content/uploads/2018/05/ELTEN_767541_neu-300x300.jpg" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <!-- <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li> -->
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="https://voguesafety.com.sg/wp-content/uploads/2018/05/ELTEN_763341_NEU-300x300.jpg" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <!-- <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li> -->
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="assets/images/products/p13.jpg" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <!-- <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li> -->
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="detail.html"><img  src="assets/images/products/p14.jpg" alt=""></a> </div>
                          <!-- /.image -->
                          
                          <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.html">Samsung Galaxy S4</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> $450.99 </span> <span class="price-before-discount">$ 800</span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <!-- <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li> -->
                            </ul>
                          </div>
                          <!-- /.action --> 
                        </div>
                        <!-- /.cart --> 
                      </div>
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item --> 
                </div>
                <!-- /.home-owl-carousel --> 
              </div>
              <!-- /.product-slider --> 
            </div>
            <!-- /.tab-pane --> 
            
          </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 px-4">
        <div class="text-uppercase p-2" style="background-size:cover;background-repeat:no-repeat;background-image:url('frontend/assets/img/home-banner1.1.png');width:100%;min-height:120px;height:auto;display:flex;align-items:center;color:#fff;">
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>  
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <h4>Browse Best Rated Items</h4>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <img 
              src="{!! asset('frontend/assets/img/btn-addtocart.png') !!}"
              srcset="
                  {{ asset('frontend/assets/img/btn-addtocart.png') }} 320w,
                  {{ asset('frontend/assets/img/btn-addtocart.png') }} 480w,
                  {{ asset('frontend/assets/img/btn-addtocart.png') }} 800w,
                  {{ asset('frontend/assets/img/btn-addtocart.png') }} 1200w
              "
              style="object-fit:contain;width:35px;"
              alt="vogue-safety-shoes"
              loading="lazy"
            >
          </div>
        </div>
        <div class="text-uppercase p-2" style="background-size:cover;background-repeat:no-repeat;background-image:url('frontend/assets/img/home-banner1.2.png');width:100%;min-height:120px;height:auto;display:flex;align-items:center;color:#fff;">
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>  
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <h4>discover best selling items</h4>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <img 
              src="{!! asset('frontend/assets/img/btn-addtocart.png') !!}"
              srcset="
                  {{ asset('frontend/assets/img/btn-addtocart.png') }} 320w,
                  {{ asset('frontend/assets/img/btn-addtocart.png') }} 480w,
                  {{ asset('frontend/assets/img/btn-addtocart.png') }} 800w,
                  {{ asset('frontend/assets/img/btn-addtocart.png') }} 1200w
              "
              style="object-fit:contain;width:35px;"
              alt="vogue-safety-shoes"
              loading="lazy"
            >
          </div>
        </div>

    </div>
  </div>
</div>

<div class="container-fluid p-3">
  <div class="text-center py-2">  
    <h1><b>Prodoct Lines</b></h1>
  </div>
  <div class="w-100 d-flex flex-wrap" style="max-width:1600px;justify-content:center;gap:10px;margin: 0 auto;">
    <div style="flex: 0 0 255px; height: 270px; background-size: contain ; background-position: top center; background-repeat: no-repeat; background-image: url('frontend/assets/img/home-product-frame.png');padding:25px 10px;">
      <a href="#" class="p-5"> 
        <img src="{!! asset('frontend/assets/img/Elten_769551_neu-300x300.jpg') !!}" alt="" class="p-2" style="height:55%;object-fit:contain;"/> 
      </a> 
      <div class="px-5">
        <hr class="p-2" style="color:black;">
        <h3 class="pt-3 pb-3 price text-uppercase"><a href="#"><b>Biomex Dynamics</b></a></h3>
        <div class="product-price" style="display: flex; justify-content: space-between; align-items: center;"> 
          <span style="flex-grow: 1;"> 5 Products</span> 
          <img 
            src="{!! asset('frontend/assets/img/btn-addtocart.png') !!}"
            srcset="
                {{ asset('frontend/assets/img/btn-addtocart.png') }} 320w,
                {{ asset('frontend/assets/img/btn-addtocart.png') }} 480w,
                {{ asset('frontend/assets/img/btn-addtocart.png') }} 800w,
                {{ asset('frontend/assets/img/btn-addtocart.png') }} 1200w
            "
            style="margin-top: -5%; padding-right: 0px; width: 35px; object-fit: contain;"
            alt="vogue-safety-shoes"
            loading="lazy"
          />
        </div>
      </div>
    </div>
    <div style="flex: 0 0 255px; height: 270px; background-size: contain ; background-position: top center; background-repeat: no-repeat; background-image: url('frontend/assets/img/home-product-frame.png');padding:25px 10px;">
      <a href="#" class="p-5"> 
        <img src="{!! asset('frontend/assets/img/Elten_769551_neu-300x300.jpg') !!}" alt="" class="p-2" style="height:55%;object-fit:contain;"/> 
      </a> 
      <div class="px-5">
        <hr class="p-2" style="color:black;">
        <h3 class="pt-3 pb-3 price text-uppercase"><a href="#"><b>Biomex Dynamics</b></a></h3>
        <div class="product-price" style="display: flex; justify-content: space-between; align-items: center;"> 
          <span style="flex-grow: 1;"> 5 Products</span> 
          <img 
            src="{!! asset('frontend/assets/img/btn-addtocart.png') !!}"
            srcset="
                {{ asset('frontend/assets/img/btn-addtocart.png') }} 320w,
                {{ asset('frontend/assets/img/btn-addtocart.png') }} 480w,
                {{ asset('frontend/assets/img/btn-addtocart.png') }} 800w,
                {{ asset('frontend/assets/img/btn-addtocart.png') }} 1200w
            "
            style="margin-top: -5%; padding-right: 0px; width: 35px; object-fit: contain;"
            alt="vogue-safety-shoes"
            loading="lazy"
          />
        </div>
      </div>
    </div>
    <div style="flex: 0 0 255px; height: 270px; background-size: contain ; background-position: top center; background-repeat: no-repeat; background-image: url('frontend/assets/img/home-product-frame.png');padding:25px 10px;">
      <a href="#" class="p-5"> 
        <img src="{!! asset('frontend/assets/img/Elten_769551_neu-300x300.jpg') !!}" alt="" class="p-2" style="height:55%;object-fit:contain;"/> 
      </a> 
      <div class="px-5">
        <hr class="p-2" style="color:black;">
        <h3 class="pt-3 pb-3 price text-uppercase"><a href="#"><b>Biomex Dynamics</b></a></h3>
        <div class="product-price" style="display: flex; justify-content: space-between; align-items: center;"> 
          <span style="flex-grow: 1;"> 5 Products</span> 
          <img 
            src="{!! asset('frontend/assets/img/btn-addtocart.png') !!}"
            srcset="
                {{ asset('frontend/assets/img/btn-addtocart.png') }} 320w,
                {{ asset('frontend/assets/img/btn-addtocart.png') }} 480w,
                {{ asset('frontend/assets/img/btn-addtocart.png') }} 800w,
                {{ asset('frontend/assets/img/btn-addtocart.png') }} 1200w
            "
            style="margin-top: -5%; padding-right: 0px; width: 35px; object-fit: contain;"
            alt="vogue-safety-shoes"
            loading="lazy"
          />
        </div>
      </div>
    </div>
    <div style="flex: 0 0 255px; height: 270px; background-size: contain ; background-position: top center; background-repeat: no-repeat; background-image: url('frontend/assets/img/home-product-frame.png');padding:25px 10px;">
      <a href="#" class="p-5"> 
        <img src="{!! asset('frontend/assets/img/Elten_769551_neu-300x300.jpg') !!}" alt="" class="p-2" style="height:55%;object-fit:contain;"/> 
      </a> 
      <div class="px-5">
        <hr class="p-2" style="color:black;">
        <h3 class="pt-3 pb-3 price text-uppercase"><a href="#"><b>Biomex Dynamics</b></a></h3>
        <div class="product-price" style="display: flex; justify-content: space-between; align-items: center;"> 
          <span style="flex-grow: 1;"> 5 Products</span> 
          <img 
            src="{!! asset('frontend/assets/img/btn-addtocart.png') !!}"
            srcset="
                {{ asset('frontend/assets/img/btn-addtocart.png') }} 320w,
                {{ asset('frontend/assets/img/btn-addtocart.png') }} 480w,
                {{ asset('frontend/assets/img/btn-addtocart.png') }} 800w,
                {{ asset('frontend/assets/img/btn-addtocart.png') }} 1200w
            "
            style="margin-top: -5%; padding-right: 0px; width: 35px; object-fit: contain;"
            alt="vogue-safety-shoes"
            loading="lazy"
          />
        </div>
      </div>
    </div>
    <div style="flex: 0 0 255px; height: 270px; background-size: contain ; background-position: top center; background-repeat: no-repeat; background-image: url('frontend/assets/img/home-product-frame.png');padding:25px 10px;">
      <a href="#" class="p-5"> 
        <img src="{!! asset('frontend/assets/img/Elten_769551_neu-300x300.jpg') !!}" alt="" class="p-2" style="height:55%;object-fit:contain;"/> 
      </a> 
      <div class="px-5">
        <hr class="p-2" style="color:black;">
        <h3 class="pt-3 pb-3 price text-uppercase"><a href="#"><b>Biomex Dynamics</b></a></h3>
        <div class="product-price" style="display: flex; justify-content: space-between; align-items: center;"> 
          <span style="flex-grow: 1;"> 5 Products</span> 
          <img 
            src="{!! asset('frontend/assets/img/btn-addtocart.png') !!}"
            srcset="
                {{ asset('frontend/assets/img/btn-addtocart.png') }} 320w,
                {{ asset('frontend/assets/img/btn-addtocart.png') }} 480w,
                {{ asset('frontend/assets/img/btn-addtocart.png') }} 800w,
                {{ asset('frontend/assets/img/btn-addtocart.png') }} 1200w
            "
            style="margin-top: -5%; padding-right: 0px; width: 35px; object-fit: contain;"
            alt="vogue-safety-shoes"
            loading="lazy"
          />
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid py-5">
  <div class="py-md-5 text-center">  
    <h1><b>Latest Form Blog</b></h1>
    <!-- <h3></h3> -->
  </div>
  <section class="section latest-blog outer-bottom-vs wow" style="border-radius:15px;">
      <div class="blog-slider-container outer-top-xs">
        <div class="owl-carousel blog-slider custom-carousel">
          <div class="item">
            <div class="blog-post">
              <div class="blog-post-image">
                <div class="image"> <a href="blog.html"><img src="https://voguesafety.com.sg/wp-content/uploads/2021/06/974610_LANA_BLACK_RED_LOW_ESD_O1_15-23.jpg" alt=""></a> </div>
              </div>
              <!-- /.blog-post-image -->
              
              <div class="blog-post-info text-left">
                <h3 class="name"><a href="#">Voluptatem accusantium doloremque laudantium</a></h3>
                <span class="info">By Jone Doe &nbsp;|&nbsp; 21 March 2016 </span>
                <p class="text">Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                <a href="#" class="lnk btn btn-primary">Read more</a> </div>
              <!-- /.blog-post-info --> 
              
            </div>
            <!-- /.blog-post --> 
          </div>
          <!-- /.item -->
          
          <div class="item">
            <div class="blog-post">
              <div class="blog-post-image">
                <div class="image"> <a href="blog.html"><img src="https://voguesafety.com.sg/wp-content/uploads/2023/01/74831_IMPULSE_LADY_BOA_AQUA_LOW_ESD_S1P_13-17.jpg" alt=""></a> </div>
              </div>
              <!-- /.blog-post-image -->
              
              <div class="blog-post-info text-left">
                <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                <p class="text">Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                <a href="#" class="lnk btn btn-primary">Read more</a> </div>
              <!-- /.blog-post-info --> 
              
            </div>
            <!-- /.blog-post --> 
          </div>
          <!-- /.item --> 
          
          <!-- /.item -->
          
          <div class="item">
            <div class="blog-post">
              <div class="blog-post-image">
                <div class="image"> <a href="blog.html"><img src="https://voguesafety.com.sg/wp-content/uploads/2021/07/728101_LARKIN_XXSPORTS_BLUE_-LOW_ESD_S1P_12-21.jpg" alt=""></a> </div>
              </div>
              <!-- /.blog-post-image -->
              
              <div class="blog-post-info text-left">
                <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                <a href="#" class="lnk btn btn-primary">Read more</a> </div>
              <!-- /.blog-post-info --> 
              
            </div>
            <!-- /.blog-post --> 
          </div>
          <!-- /.item -->
          
          <div class="item">
            <div class="blog-post">
              <div class="blog-post-image">
                <div class="image"> <a href="blog.html"><img src="https://voguesafety.com.sg/wp-content/uploads/2023/01/12841_JO_SLIM_DARKBLUE_LOW_ESD_S3_01-19.jpg" alt=""></a> </div>
              </div>
              <!-- /.blog-post-image -->
              
              <div class="blog-post-info text-left">
                <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                <a href="#" class="lnk btn btn-primary">Read more</a> </div>
              <!-- /.blog-post-info --> 
              
            </div>
            <!-- /.blog-post --> 
          </div>
          <!-- /.item -->
          
          <div class="item">
            <div class="blog-post">
              <div class="blog-post-image">
                <div class="image"> <a href="blog.html"><img src="https://voguesafety.com.sg/wp-content/uploads/2021/02/929652_MADDOX_BLACK_RED_LOW_O2_01-52.jpg" alt=""></a> </div>
              </div>
              <!-- /.blog-post-image -->
              
              <div class="blog-post-info text-left">
                <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                <a href="#" class="lnk btn btn-primary">Read more</a> </div>
              <!-- /.blog-post-info --> 
              
            </div>
            <!-- /.blog-post --> 
          </div>
          <!-- /.item --> 
          
        </div>
        <!-- /.owl-carousel --> 
      </div>
      <!-- /.blog-slider-container --> 
  </section>
</div>

<div class="container-fluid" >
  <section class="section wow" style="padding: 20px 20px;">
    <div class="row" style="height:100%;max-height:650px;background-color:black;border-radius: 15px !important;">
      <div class='col-md-6 col-xs-12' border:1px solid red;>
        <div class="video-container">
          <iframe src="https://www.youtube.com/embed/5X0SdLifKug" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      <div class='col-md-6 col-xs-12'>
        <div class="row">
          <div class='col-md-6 col-xs-12'>
            <div class="video-container">
              <iframe src="https://www.youtube.com/embed/VGlB5bSDPTQ" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
          <div class='col-md-6 col-xs-12'>
            <div class="video-container">
              <iframe src="https://www.youtube.com/embed/lg5CgJqql5U" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="row">
          <div class='col-md-6 col-xs-12'>
            <div class="video-container">
              <iframe src="https://www.youtube.com/embed/X0-Ls20wfik" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
          <div class='col-md-6 col-xs-12'>
            <div class="video-container">
              <iframe src="https://www.youtube.com/embed/binKkJrfO4M" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<div class="container-fluid py-md-5">
  <div class="py-md-5 text-center">  
    <h1><b>What People Say About Us</b></h1>
    <h4>TESTIMONIALS</h4>
  </div>
  <div id="advertisement" class="advertisement">
        <div class="item">
          <div class="avatar"><img src="assets/images/testimonials/member1.png" alt="Image"></div>
          <div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
          <div class="clients_author">John Doe <span>Abc Company</span> </div>
          <!-- /.container-fluid --> 
        </div>
        <!-- /.item -->
        
        <div class="item">
          <div class="avatar"><img src="assets/images/testimonials/member3.png" alt="Image"></div>
          <div class="testimonials"><em>"</em>Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
          <div class="clients_author">Stephen Doe <span>Xperia Designs</span> </div>
        </div>
        <!-- /.item -->
        
        <div class="item">
          <div class="avatar"><img src="assets/images/testimonials/member2.png" alt="Image"></div>
          <div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
          <div class="clients_author">Saraha Smith <span>Datsun &amp; Co</span> </div>
          <!-- /.container-fluid --> 
        </div>
        <!-- /.item --> 
        
      </div>
</div>
@endsection