@extends('frontend.main_master')
@section('content')
@section('title')
Vogue Safety
@endsection
<style>
    .line-with-text {
        display: flex;
        align-items: center;
        text-align: center;
        margin: 20px 0;
    }

    .line-with-text::before,
    .line-with-text::after {
        content: '';
        flex: 1;
        border-bottom: 1px solid lightgrey;
    }

    .line-with-text::before {
        margin-right: 10px;
    }

    .line-with-text::after {
        margin-left: 10px;
    }
</style>
<div id="hero" style="position:relative;min-height:500px;padding:100px 10px;">
    <img 
      src="{!! asset('frontend/assets/img/safety-hero.png') !!}"
      srcset="
          {{ asset('frontend/assets/img/safety-hero.png') }} 320w,
          {{ asset('frontend/assets/img/safety-hero.png') }} 480w,
          {{ asset('frontend/assets/img/safety-hero.png') }} 800w,
          {{ asset('frontend/assets/img/safety-hero.png') }} 1200w
      "
      sizes="(max-width: 320px) 320px, (max-width: 480px) 480px, (max-width: 800px) 800px, 100vw"
      style="z-index:1;width:100%;height: calc(100% - 80px);min-height:500px;object-fit:cover;position: absolute;top:0;left:0;"
      alt="vogue-safety-shoes"
      loading="lazy"
    >
    <div class="container-fluid" style="position: relative; z-index: 2; padding-top: 20px;">
      <div class="text-center">
        <h1 class="text-uppercase" style="color:white;">Vogue Safety</h1>
        <h1 class="big-text" style="line-height:inherit;">WHY WE MANUFACTURE SHOES</h1>
      </div>
      <div class="container py-5" style="opacity:0.5;">
        <h5 style="line-height:inherit;letter-spacing:1px;color:white;">
        Tradition and progress are the basis of ELTEN GmbH, which has been manufacturing shoes in the Lower Rhine region for more than 100 years. The company was established in 1910 in Uedem on the Lower Rhine, and today the family business is one of Europe’s leading safety shoe manufacturers. ELTEN is now managed in the fourth generation, by the cousins Heiner and Jörg van Elten.
        <br/><br/>
        The company has built up its reputation through highest quality standards and innovative foot protection technologies. Cooperations with leading scientific institutions and use of state-of-the-art soling systems have also been contributory factors in this content.
        </h5>
      </div>
    </div>
    <br/>
</div>

<div class="container-fluid p-2">
  <div class="row px-5">
      <div class="col-md-4 col-xs-12 col-sm-12">
        <img 
          src="{!! asset('frontend/assets/img/safety-img1.png') !!}"
          srcset="
              {{ asset('frontend/assets/img/safety-img1.png') }} 320w,
              {{ asset('frontend/assets/img/safety-img1.png') }} 480w,
              {{ asset('frontend/assets/img/safety-img1.png') }} 800w,
              {{ asset('frontend/assets/img/safety-img1.png') }} 1200w
          "
          sizes="(max-width: 320px) 320px, (max-width: 480px) 480px, (max-width: 800px) 800px, 100vw"
          style="width:100%;object-fit:contain;max-height:250px;"
          alt="vogue-safety-shoes"
          loading="lazy"
        >
      </div>
      <div class="col-md-8 col-xs-12 col-sm-12 d-flex align-items-center">
        <div class="p-3">
          <h4 class="text-uppercases" style="line-height:inherit;"><b>MATURED KNOW-HOW AND CONSTANT FURTHER DEVELOPMENT</b></h4>
          <h5 style="line-height: inherit; letter-spacing: 1px;">
            Some of ELTEN’s 280 employees have been associated with the company for generations. Consequently, proven know-how remains on site. To this day the finishing of safety shoes is still performed at the Lower Rhine location. ELTEN’s safety shoes are shipped from the Uedem logistics centre to customers throughout Germany and the rest of the world.
          </h5>
        </div>
      </div>
  </div>
  <div class="container">
    <hr style="color:lightgrey;">
  </div>
  <div class="row px-5">
      <div class="col-md-8 col-xs-12 col-sm-12 d-flex align-items-center">
        <div class="p-3">
          <h4 class="text-uppercases" style="line-height:inherit;"><b>EVERYTHING AT A GLANCE: SAFETY AT WORK, ENVIRONMENTAL PROTECTION ...</b></h4>
          <h5 style="line-height: inherit; letter-spacing: 1px;">
          All ELTEN products are of course provided with a CE label and are certified in accordance with EN ISO 20345. This binding standard specifies the requirements for protective footwear on a European scale. Many safety shoes made in Uedem are manufactured in Germany with carbon-neutral leathers completely produced under environmentally friendly conditions. And this in turn is an active contribution to the reduction of CO2 emissions. In this context, ELTEN cooperates with the only leather factory still tanning in Germany. The high quality Terracare leather is made from local and Dutch cattle, using a clearly reduced quantity of chemicals – thus protecting the environment and the health of the wearer.
           </h5>
        </div>
      </div>
      <div class="col-md-4 col-xs-12 col-sm-12 py-5 px-5">
        <img 
          src="{!! asset('frontend/assets/img/safety-img2.png') !!}"
          srcset="
              {{ asset('frontend/assets/img/safety-img2.png') }} 320w,
              {{ asset('frontend/assets/img/safety-img2.png') }} 480w,
              {{ asset('frontend/assets/img/safety-img2.png') }} 800w,
              {{ asset('frontend/assets/img/safety-img2.png') }} 1200w
          "
          sizes="(max-width: 320px) 320px, (max-width: 480px) 480px, (max-width: 800px) 800px, 100vw"
          style="width:100%;object-fit:contain;"
          alt="vogue-safety-shoes"
          loading="lazy"
        >
      </div>
  </div>
  <div class="container">
    <hr style="color:lightgrey;">
  </div>
  <div class="row px-5">
      <div class="col-md-4 col-xs-12 col-sm-12 py-5 px-5">
        <img 
          src="{!! asset('frontend/assets/img/safety-img3.png') !!}"
          srcset="
              {{ asset('frontend/assets/img/safety-img3.png') }} 320w,
              {{ asset('frontend/assets/img/safety-img3.png') }} 480w,
              {{ asset('frontend/assets/img/safety-img3.png') }} 800w,
              {{ asset('frontend/assets/img/safety-img3.png') }} 1200w
          "
          sizes="(max-width: 320px) 320px, (max-width: 480px) 480px, (max-width: 800px) 800px, 100vw"
          style="width:100%;object-fit:contain;"
          alt="vogue-safety-shoes"
          loading="lazy"
        >
      </div>
      <div class="col-md-8 col-xs-12 col-sm-12 d-flex align-items-center">
        <div class="p-3">
          <h4 class="text-uppercases" style="line-height:inherit;"><b>... AND PEOPLE</b></h4>
          <h5 style="line-height: inherit; letter-spacing: 1px;">
          ELTEN’s focus is on people. An innovative concept for simple and safe orthopaedic modifications of many models while keeping the regulations of the German DGUV 112-191 follows this principle just as much as semi-orthopaedic SensiCare inlay soles that offer relief to varying arches of the foot. And intensive customer-oriented consultation, of course, is also part of the service.        </h5>
          </h5>
        </div>
      </div>
  </div>
</div>

<div class="text-center py-5" style="width:100%;background-color:#f3fffa;">
  <div style="max-width:100%;max-height:100%;display:inline-block;">
    <img 
      src="{!! asset('frontend/assets/img/safety-class.png') !!}"
      style="max-width: 100%; max-height: 100%; object-fit: contain;"
      alt="vogue-safety-shoes"
      loading="lazy"
    >
  </div>
</div>

<div class="container-fluid p-5">
  <div class="text-center py-5">  
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
<br/>
@endsection