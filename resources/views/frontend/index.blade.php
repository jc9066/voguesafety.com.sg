@extends('frontend.main_master')
@section('content')
@section('title')
Home Easy Online Shop
@endsection

<div id="hero">
  <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm" style="height:600px;">
    <div class="item" style="height:650px;background-image: url('https://voguesafety.com.sg/wp-content/uploads/2021/06/12851_JO_SLIM_LIME_LOW_ESD_S3_03-18.jpg');">
      <div class="container-fluid">
        <div class="caption bg-color vertical-center text-left">
          <div class="slider-header fadeInDown-1">Top Brands</div>
          <div class="big-text fadeInDown-1"> New Collections </div>
          <div class="excerpt fadeInDown-2 hidden-xs"> <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span> </div>
          <div class="button-holder fadeInDown-3"> <a href="index.php?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div>
        </div>
      </div>
    </div>
    <div class="item" style="height:650px;background-image: url('https://voguesafety.com.sg/wp-content/uploads/2021/06/89611_CRUZ_GTX_F2A_06-29.jpg');">
      <div class="container-fluid">
        <div class="caption bg-color vertical-center text-left">
          <div class="slider-header fadeInDown-1">Spring 2016</div>
          <div class="big-text fadeInDown-1"> Women <span class="highlight">Fashion</span> </div>
          <div class="excerpt fadeInDown-2 hidden-xs"> <span>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</span> </div>
          <div class="button-holder fadeInDown-3"> <a href="index.php?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid" style="margin-top:-50px;">
  <section class="section wow fadeInUp new-arriavls" style="padding: 10px 10px; border-radius: 20px !important;">
    <div id="brands-carousel" class="logo-slider wow fadeInUp">
      <div class="logo-slider-inner">
        <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
          <div class="item m-t-15"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <div class="item m-t-10"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt=""> </a> </div>
          <div class="item"> <a href="#" class="image"> <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt=""> </a> </div>
        </div>
      </div>
    </div>
  </section>
</div>

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
        <div class="best-deal wow fadeInUp outer-bottom-xs" style="border-radius:15px;">
              <h2 class="section-title">Best seller</h2>
              <div class="sidebar-widget-body outer-top-xs">
                <div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
                  <div class="item">
                    <div class="products best-product">
                      <div class="product">
                        <div class="product-micro">
                          <div class="row product-micro-row">
                            <div class="col col-xs-5">
                              <div class="product-image">
                                <div class="image"> <a href="#"> <img src="https://voguesafety.com.sg/wp-content/uploads/2018/07/Elten_769551_neu-300x300.jpg" alt=""> </a> </div>
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
                                <div class="image"> <a href="#"> <img src="https://voguesafety.com.sg/wp-content/uploads/2023/01/t-66A7384892E7D27446F342CE476B79EF-300x300.jpg" alt=""> </a> </div>
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
  <img src="assets/images/banners/banner1.png" style="width:100%;object-fit:fill;margin-bottom:15px;border-radius:5px;">
</div>

<div class='container-fluid'>
    <div class='row' style="margin-bottom:15px;">
      <!-- <div class='col-md-12'> 
        <div class="sidebar-widget newsletter wow fadeInUp outer-bottom-small" style="border-radius:15px;">

        </div>
      </div> -->
      <div class='col-md-12'> 
        <div id="product-tabs-slider" class="scroll-tabs wow fadeInUp" style="border-radius:15px;">
            <div class="more-info-tab clearfix ">
              <h3 class="new-product-title pull-left">Popular List</h3>
              <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
                <!-- <li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab"><b>Popular List</b></a></li> -->
                <!-- <li><a data-transition-type="backSlide" href="#smartphone" data-toggle="tab"></a></li> -->
                <!-- <li><a data-transition-type="backSlide" href="#laptop" data-toggle="tab">Barefooters</a></li>
                <li><a data-transition-type="backSlide" href="#apple" data-toggle="tab">E-Track</a></li> -->
              </ul>
              <!-- /.nav-tabs --> 
            </div>
            <div class="tab-content outer-top-xs">
              <div class="tab-pane in active" id="all">
                <div class="product-slider">
                  <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="5">
                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image"> <a href="detail.html"><img  src="https://voguesafety.com.sg/wp-content/uploads/2018/07/Elten_769551_neu-300x300.jpg" alt=""></a> </div>
                            <!-- /.image -->
                            
                            <div class="tag hot"><span>Hot</span></div>
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
                                  <button data-toggle="tooltip" class="btn btn-primary icon" type="button" title="Add Cart"> <i class="fa fa-shopping-cart"></i> </button>
                                  <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                </li>
                                <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
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
                            <div class="image"> <a href="detail.html"><img  src="https://voguesafety.com.sg/wp-content/uploads/2023/01/t-66A7384892E7D27446F342CE476B79EF-300x300.jpg" alt=""></a> </div>
                            <!-- /.image -->
                            
                            <div class="tag sale"><span>Sales</span></div>
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
                            <div class="image"> <a href="detail.html"><img  src="https://voguesafety.com.sg/wp-content/uploads/2018/05/ELTEN_72151_neu-300x300.jpg" alt=""></a> </div>
                            <!-- /.image -->
                            
                            <!-- <div class="tag sale"><span>sale</span></div> -->
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
                            <div class="image"> <a href="detail.html"><img  src="https://voguesafety.com.sg/wp-content/uploads/2018/08/ELTEN_76651_NEU.jpg" alt=""></a> </div>
                            <!-- /.image -->
                            
                            <!-- <div class="tag sale"><span>sale</span></div> -->
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
                            
                            <!-- <div class="tag hot"><span>hot</span></div> -->
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
                            <div class="image"> <a href="detail.html"><img  src="https://voguesafety.com.sg/wp-content/uploads/2021/02/92260_KIOWA_BOA-300x300.jpg" alt=""></a> </div>
                            <!-- /.image -->
                            
                            <!-- <div class="tag new"><span>new</span></div> -->
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
                            <div class="image"> <a href="detail.html"><img  src="https://voguesafety.com.sg/wp-content/uploads/2018/06/ELTEN_76628_NEU-300x300.jpg" alt=""></a> </div>
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
                            <div class="image"> <a href="detail.html"><img  src="https://voguesafety.com.sg/wp-content/uploads/2018/06/ELTEN_76628_NEU-300x300.jpg" alt=""></a> </div>
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
                            <div class="image"> <a href="detail.html"><img  src="https://voguesafety.com.sg/wp-content/uploads/2018/05/ELTEN_767541_neu-300x300.jpg" alt=""></a> </div>
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
                            <div class="image"> <a href="detail.html"><img  src="https://voguesafety.com.sg/wp-content/uploads/2018/08/ELTEN_76327_NEU-300x300.jpg" alt=""></a> </div>
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
                  </div>
                  <!-- /.home-owl-carousel --> 
                </div>
                <!-- /.product-slider --> 
              </div>
              <!-- /.tab-pane --> 
              
            </div>
            <!-- /.tab-content --> 
          </div>
        </div>
      </div>
    </div>
</div>

<div class="container-fluid">
  <img src="assets/images/banners/banner2.png" style="width:100%;object-fit:fill;margin-bottom:15px;border-radius:5px;">
</div>

<div class="container-fluid py-5">
  <div class="py-md-5 text-center">  
    <h1><b>Latest Form Blog</b></h1>
    <h3>ckjdscnvdsklc</h3>
  </div>
  <section class="section latest-blog outer-bottom-vs wow fadeInUp" style="border-radius:15px;">
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
  <section class="section wow fadeInUp" style="padding: 20px 20px;">
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
  <section class="section wow fadeInUp new-arriavls" style="border-radius:15px;">
    <div class="sidebar-widget  wow fadeInUp" style="border-radius:15px;">
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
      <!-- /.owl-carousel --> 
    </div>  
    <!-- /.home-owl-carousel --> 
  </section>
</div>
@endsection