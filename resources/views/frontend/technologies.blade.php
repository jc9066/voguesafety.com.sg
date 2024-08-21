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
<div id="hero">
  <div style="height:520px;"> 
    <img 
      src="{!! asset('frontend/assets/img/about-hero.png') !!}"
      srcset="
          {{ asset('frontend/assets/img/about-hero.png') }} 320w,
          {{ asset('frontend/assets/img/about-hero.png') }} 480w,
          {{ asset('frontend/assets/img/about-hero.png') }} 800w,
          {{ asset('frontend/assets/img/about-hero.png') }} 1200w
      "
      sizes="(max-width: 320px) 320px, (max-width: 480px) 480px, (max-width: 800px) 800px, 100vw"
      style="z-index:1;width: 100%; height:100%;object-fit:cover;"
      alt="vogue-safety-shoes"
      loading="lazy"
    >
  </div>
</div>
<div class="container-fluid py-5">
  <div class="row py-3">
    <div class="col-5 col-md-5 col-xs-12 col-sm-12 py-5 px-5">
      <img 
        src="{!! asset('frontend/assets/img/about-img1.png') !!}"
        srcset="
            {{ asset('frontend/assets/img/about-img1.png') }} 320w,
            {{ asset('frontend/assets/img/about-img1.png') }} 480w,
            {{ asset('frontend/assets/img/about-img1.png') }} 800w,
            {{ asset('frontend/assets/img/about-img1.png') }} 1200w
        "
        sizes="(max-width: 320px) 320px, (max-width: 480px) 480px, (max-width: 800px) 800px, 100vw"
        style="width:100%;object-fit:contain;"
        alt="vogue-safety-shoes"
        loading="lazy"
      >
    </div>
    <div class="col-7 col-md-7 col-xs-12 col-sm-12 py-5">
      <img 
        src="{!! asset('frontend/assets/img/about-label.png') !!}"
        srcset="
            {{ asset('frontend/assets/img/about-label.png') }} 320w,
            {{ asset('frontend/assets/img/about-label.png') }} 480w,
            {{ asset('frontend/assets/img/about-label.png') }} 800w,
            {{ asset('frontend/assets/img/about-label.png') }} 1200w
        "
        sizes="(max-width: 320px) 320px, (max-width: 480px) 480px, (max-width: 800px) 800px, 100vw"
        style="width:100%;height:auto;object-fit:contain;"
        alt="vogue-safety-shoes"
        loading="lazy"
      >
      <h3 class="text-uppercase" style="color:#00E525;">Our Company Overview</h3><br/>
      <h4 class="text-capitalize"><b>philosophy</b></h4>
      <h5 style="line-height:inherit;letter-spacing:normal;">
          ELTEN safety shoes give the wearer a genuine feeling of safety. And it’s an impression that is not misplaced: ELTEN footwear is not only made without compromise to the highest levels of quality, it is also designed to specifications, some of which go far beyond what is required by current standards regulations. Perhaps it’s this consistently people-centred approach that makes our employees that bit more motivated, our manner that bit friendlier, our decision- making process that bit faster and our working methods that bit more flexible. It’s certainly one of the reasons why ELTEN customers are that little bit happier with us. And we intend to use all our energies and all our personality to make sure it stays that way. The management Heiner van Elten and Jörg van Elten
      </h5>
      <div class="container">
        <hr style="color:lightgrey;">
      </div>
      <h4 class="text-capitalize"><b>history</b></h4>
      <h5 style="line-height:inherit;letter-spacing:normal;">
      Made with passion In 1910, the vision of our founder Johann van Elten brought a breakthrough for safety footwear as we know it today: the first ELTEN safety shoe made of leather instead of wood. Today we are one of Europe’s leading manufacturers of quality safety and work shoes. With more than 310 employees, we produce approximately 2.3 million pairs of shoes each year. This tradition, together with the personal dedication of every single employee, underpins our commitment to the protection and safety of the individual.
      </h5>
    </div>
  </div>
</div>
<div style="height:400px;"> 
  <img 
    src="{!! asset('frontend/assets/img/about-feature.jpg') !!}"
    srcset="
        {{ asset('frontend/assets/img/about-feature.jpg') }} 320w,
        {{ asset('frontend/assets/img/about-feature.jpg') }} 480w,
        {{ asset('frontend/assets/img/about-feature.jpg') }} 800w,
        {{ asset('frontend/assets/img/about-feature.jpg') }} 1200w
    "
    sizes="(max-width: 320px) 320px, (max-width: 480px) 480px, (max-width: 800px) 800px, 100vw"
    style="width:100%;height:100%;object-fit:contain;"
    alt="vogue-safety-shoes"
    loading="lazy"
  >
</div>
<div class="container-fluid">
  <div class="text-left">  
    <h3 class="text-capitalize"><b>catalogues</b></h3>
  </div>
  <div class="w-100 d-flex flex-wrap" style="text-align:center; justify-content:center; gap:20px;">
    <img src="{!! asset('frontend/assets/img/catalogue/catalogue1.png') !!}" alt="" style="max-height:450px; height:400px; padding:10px; object-fit:contain;"/> 
    <img src="{!! asset('frontend/assets/img/catalogue/catalogue2.png') !!}" alt="" style="max-height:450px; height:400px; padding:10px; object-fit:contain;"/> 
    <img src="{!! asset('frontend/assets/img/catalogue/catalogue3.png') !!}" alt="" style="max-height:450px; height:400px; padding:10px; object-fit:contain;"/> 
    <img src="{!! asset('frontend/assets/img/catalogue/catalogue4.png') !!}" alt="" style="max-height:450px; height:400px; padding:10px; object-fit:contain;"/> 
    <img src="{!! asset('frontend/assets/img/catalogue/catalogue5.png') !!}" alt="" style="max-height:450px; height:400px; padding:10px; object-fit:contain;"/> 
    <img src="{!! asset('frontend/assets/img/catalogue/catalogue6.png') !!}" alt="" style="max-height:450px; height:400px; padding:10px; object-fit:contain;"/> 
    <img src="{!! asset('frontend/assets/img/catalogue/catalogue7.png') !!}" alt="" style="max-height:450px; height:400px; padding:10px; object-fit:contain;"/> 
    <img src="{!! asset('frontend/assets/img/catalogue/catalogue8.png') !!}" alt="" style="max-height:450px; height:400px; padding:10px; object-fit:contain;"/> 
  </div>
  <div class="text-right pr-10">
    <a href="https://elten.com/en/about-us/downloadcenter/">
      <img 
      src="{!! asset('frontend/assets/img/btn-viewmore.png') !!}"
      srcset="
          {{ asset('frontend/assets/img/btn-viewmore.png') }} 320w,
          {{ asset('frontend/assets/img/btn-viewmore.png') }} 480w,
          {{ asset('frontend/assets/img/btn-viewmore.png') }} 800w,
          {{ asset('frontend/assets/img/btn-viewmore.png') }} 1200w
      "
      style="padding:10px;width:200px;object-fit:contain;"
      alt="vogue-safety-shoes"
      loading="lazy"
      >
    </a>
  </div>
</div>

<div class="container py-5">
  <div class="line-with-text" style="color: lightgrey;">Vogue Safety Partners</div>
</div>
<div class="container-fluid pb-5">
  <section class="section wow fadeInUp new-arriavls">
    <div id="brands-carousel" class="logo-slider wow fadeInUp">
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
</div>
@endsection