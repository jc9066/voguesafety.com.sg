@extends('frontend.main_master')
@section('content')
@section('title')
Vogue Safety
@endsection
<div id="hero">
  <div> 
    <img 
      src="{!! asset('frontend/assets/img/about-hero.png') !!}"
      srcset="
          {{ asset('frontend/assets/img/about-hero.png') }} 320w,
          {{ asset('frontend/assets/img/about-hero.png') }} 480w,
          {{ asset('frontend/assets/img/about-hero.png') }} 800w,
          {{ asset('frontend/assets/img/about-hero.png') }} 1200w
      "
      sizes="(max-width: 320px) 320px, (max-width: 480px) 480px, (max-width: 800px) 800px, 100vw"
      style="z-index:1;width:100%;height:auto;min-height:500px;object-fit:cover;"
      alt="vogue-safety-shoes"
      loading="lazy"
    >
  </div>
</div>
<div class="container-fluid py-5">
  <div class="row py-3">
    <div class="col-md-5 col-xs-12 col-sm-12 px-5">
      <img 
        src="{!! asset('frontend/assets/img/about-img0.png') !!}"
        srcset="
            {{ asset('frontend/assets/img/about-img0.png') }} 320w,
            {{ asset('frontend/assets/img/about-img0.png') }} 480w,
            {{ asset('frontend/assets/img/about-img0.png') }} 800w,
            {{ asset('frontend/assets/img/about-img0.png') }} 1200w
        "
        sizes="(max-width: 320px) 320px, (max-width: 480px) 480px, (max-width: 800px) 800px, 100vw"
        style="width:100%;object-fit:contain;"
        alt="vogue-safety-shoes"
        loading="lazy"
      >
    </div>
    <div class="col-md-7 col-xs-12 col-sm-12 p-5">
      <img 
        src="{!! asset('frontend/assets/img/about-label.png') !!}"
        srcset="
            {{ asset('frontend/assets/img/about-label.png') }} 320w,
            {{ asset('frontend/assets/img/about-label.png') }} 480w,
            {{ asset('frontend/assets/img/about-label.png') }} 800w,
            {{ asset('frontend/assets/img/about-label.png') }} 1200w
        "
        sizes="(max-width: 320px) 320px, (max-width: 480px) 480px, (max-width: 800px) 800px, 100vw"
        style="width:70%;height:auto;object-fit:contain;"
        alt="vogue-safety-shoes"
        loading="lazy"
      >
      <h3 class="text-uppercase" style="color:#00E525;">Our Company Overview</h3><br/>
      <h4 class="text-capitalize"><b>philosophy</b></h4>
      <h5 style="line-height:inherit;letter-spacing:1px;">
          ELTEN safety shoes give the wearer a genuine feeling of safety. And it’s an impression that is not misplaced: ELTEN footwear is not only made without compromise to the highest levels of quality, it is also designed to specifications, some of which go far beyond what is required by current standards regulations. Perhaps it’s this consistently people-centred approach that makes our employees that bit more motivated, our manner that bit friendlier, our decision- making process that bit faster and our working methods that bit more flexible. It’s certainly one of the reasons why ELTEN customers are that little bit happier with us. And we intend to use all our energies and all our personality to make sure it stays that way. The management Heiner van Elten and Jörg van Elten
      </h5>
      <div class="container">
        <hr style="color:lightgrey;">
      </div>
      <h4 class="text-capitalize"><b>history</b></h4>
      <h5 style="line-height:inherit;letter-spacing:1px;">
      Made with passion In 1910, the vision of our founder Johann van Elten brought a breakthrough for safety footwear as we know it today: the first ELTEN safety shoe made of leather instead of wood. Today we are one of Europe’s leading manufacturers of quality safety and work shoes. With more than 310 employees, we produce approximately 2.3 million pairs of shoes each year. This tradition, together with the personal dedication of every single employee, underpins our commitment to the protection and safety of the individual.
      </h5>
    </div>
  </div>
</div>
<div> 
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
<div class="container-fluid py-5">
  <div class="row py-3">
    <div class="col-md-6 col-xs-12 col-sm-12 py-5 px-5">
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
    <div class="col-md-6 col-xs-12 col-sm-12 p-5">
      <img 
        src="{!! asset('frontend/assets/img/about-label2.png') !!}"
        srcset="
            {{ asset('frontend/assets/img/about-label2.png') }} 320w,
            {{ asset('frontend/assets/img/about-label2.png') }} 480w,
            {{ asset('frontend/assets/img/about-label2.png') }} 800w,
            {{ asset('frontend/assets/img/about-label2.png') }} 1200w
        "
        sizes="(max-width: 320px) 320px, (max-width: 480px) 480px, (max-width: 800px) 800px, 100vw"
        style="width:70%;height:auto;object-fit:contain;"
        alt="vogue-safety-shoes"
        loading="lazy"
      >
      <h3 class="text-uppercase"><b>Frequently Asked Questions (FAQs)</b></h3><br/>
      <div class="row px-3">
          <hr style="width:98%;color:black;">
          <div class="col-10 p-1 mx-2">
              <h6>EN ISO standard 20345:2022WHAT EXACTLY IS CHANGING?</h6>
          </div>
          <div class="col pt-3 text-right">
              <img class="chckfaQAnswer" for="faq-2222" src="{!! asset('frontend/assets/img/btn-arrow.png') !!}" style="width:28px;" alt="unlimited-travel-data-eSIM-faq">
          </div>
      </div>
      <div class="row px-3 faqAnswer faq-2222" style="display:none;">
          <div class="col py-5">
              <h6 style="letter-spacing: 2px;">The new EN ISO 20345:2022 standard for safety footwear was published in June 2022. It replaces the previous EN ISO 20345:2011 standard and contains some important changes. The standard specifies basic requirements for safety footwear that apply to all types of workplaces. It also contains additional requirements that apply to certain workplaces or activities. The publication of this standard is accompanied by a number of important updates designed to improve the protection of wearers. These include new test procedures, new additional requirements and improved labelling.
To mention just one new feature: footwear that meets the additional requirement of waterproofness of the entire shoe (WR) has now been defined in two new classes: S2 WR (=S6) and S3 WR (=S7).
The new EN ISO 20345:2022 standard is an important step towards improving occupational health and safety. This is because it contains stricter requirements and new test procedures designed to increase the safety of safety footwear. At ELTEN, all newly produced safety shoes are already tested and certified according to the new standard. In our shoe tutorial, we go through all the important changes for you.</h6>
          </div>
      </div>
      <div class="row px-3">
          <hr style="width:98%;color:black;">
          <div class="col-10 p-1 mx-2">
              <h6>HOW TO FIND SAFETY SHOES IN THE RIGHT SIZE?</h6>
          </div>
          <div class="col pt-3 text-right">
              <img class="chckfaQAnswer" for="faq-3333" src="{!! asset('frontend/assets/img/btn-arrow.png') !!}" style="width:28px;" alt="unlimited-travel-data-eSIM-faq">
          </div>
      </div>
      <div class="row px-5 faqAnswer faq-3333" style="display:none;">
          <div class="col py-5">
              <h6 style="letter-spacing: 2px;">No shoes are worn so long and frequently as safety shoes. In industry, trade or on the building site, safety shoes are worn constantly for several hours every day. The main thing for safety shoes that are worn for several hours every day is: a proper fit! This is because if they chafe or pinch, people don’t like to wear them or don’t wear them at all – meaning no more protection. If blisters, inflammations and chronic pressure points develop, this also has a negative effect on the well-being. The sufferer is less productive and has difficulty concentrating at work. This increases the error rate and the risk of accidents. Conversely, a better fit and greater comfort always translates into greater safety, because people are happy to wear comfortable shoes, and will wear them on a regular basis.

When trying on safety shoes, it becomes clear very quickly whether or not they feel right. However, this does not mean that the size of the selected safety shoes is the right one. Many people make the mistake of always choosing the same size, although this can vary depending on the manufacturer. As a result, many people in industry or trade wear shoes that are too small or too large – and have become accustomed to this. Reliable information about the size of safety shoes can be obtained by measuring the foot and providing information about foot length and width, – and in some cases about any incorrect foot positions.</h6>
          </div>
      </div>
      <div class="row px-3">
          <hr style="width:98%;color:black;">
          <div class="col-10 p-1 mx-2">
              <h6>WHAT YOU SHOULD LOOK FOR WHEN BUYING THE RIGHT SHOE?</h6>
          </div>
          <div class="col pt-3 text-right">
              <img class="chckfaQAnswer" for="faq-4444" src="{!! asset('frontend/assets/img/btn-arrow.png') !!}" style="width:28px;" alt="unlimited-travel-data-eSIM-faq">
          </div>
      </div>
      <div class="row px-3 faqAnswer faq-4444" style="display:none;">
          <div class="col py-5">
              <h6 style="letter-spacing: 2px;">People’s feet are as different as they are. With our Ergo-Active technology, everyone can find the right safety shoe for them. Three foot types, three outsoles, two cap widths. Whether you have wide feet with short toes and a wide ball and heel width or narrow feet with medium-length toes and a narrow ball and heel width: there is something for everyone. Different sized toe caps provide the space needed for each foot. The special feature: Ergo-Active adapts to the expansion of the foot as it moves. Ergo-Active also has suitable solutions for mostly narrower women’s feet. More choice makes for more security. Therefore, there are three different non-slip sole profiles: indoor with an innovative pivot sole and outdoor with two different tread heights. Ergo-Active optimises the wearing comfort. Also, the risk of foot complaints and accidents is significantly reduced.</div>
      </div>
      <!-- @isset($webcontentList) 
        @if(count($webcontentList)>=1) 
            @foreach($webcontentList as $webcontentList)
            <div class="row px-5">
                <hr style="width:98%;color:black;">
                <div class="col-10 p-1 mx-2">
                    <h6>{{ $webcontentList->title }}</h6>
                </div>
                <div class="col pt-3 text-right">
                    <img class="chckfaQAnswer" for="faq-{{ $webcontentList->id }}" src="{!! asset('img/arrow_down.png/') !!}" style="width:28px;" alt="unlimited-travel-data-eSIM-faq">
                </div>
            </div>
            <div class="row px-5 faqAnswer faq-{{ $webcontentList->id }}" style="display:none;">
                <div class="col py-5">
                    <h6 style="letter-spacing: 2px;">{{ $webcontentList->description1 }}</h6>
                </div>
            </div>
            @endforeach
        @endif
    @endisset -->

    </div>
  </div>
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
@endsection