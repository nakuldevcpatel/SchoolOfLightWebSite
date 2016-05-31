@extends('home.layouts.master')

@section('content')

<main>

  <!-- ============================================================= SECTION – HERO ============================================================= -->

  <section id="hero">
    <div id="owl-main" class="owl-carousel">
      <div class="item" style="background-image: url({{ URL::asset('img/banners/home-page-slider-1.jpg') }});">
        <div class="container">
          <div class="caption vertical-center text-center">

            <h1 class="fadeInDown-1 light-color" style="opacity: 0; top: -15px;">&#8203;"Some promises have to <br> outlive the constancy of change"</h1>
            <p class="fadeInDown-2 light-color" style="opacity: 0; top: -15px;">School Of Light Annual Consulting Engagement (SOL ACE)&#8203;</p>
            <div class="fadeInDown-3" style="opacity: 0; top: -15px;">
              <a href="#" class="btn btn-large red">Get started now</a>
            </div><!-- /.fadeIn -->

          </div><!-- /.caption -->
        </div><!-- /.container -->
      </div>
      <div class="item" style="background-image: url({{ URL::asset('img/banners/home-page-slider-2.jpg') }});">
        <div class="container">
          <div class="caption vertical-center text-center">

            <h1 class="fadeInDown-1 light-color" style="opacity: 1; top: 0px;">"If work could happen at <br> click of a button, fingers would replace minds!"</h1>
            <p class="fadeInDown-2 light-color" style="opacity: 1; top: 0px;">SoLVE – School of Light Virtual Engagement</p>
            <div class="fadeInDown-3" style="opacity: 1; top: 0px;">
              <a href="#" class="btn btn-large red">Get started now</a>
            </div><!-- /.fadeIn -->

          </div><!-- /.caption -->
        </div><!-- /.container -->
      </div>
      <div class="item" style="background-image: url({{ URL::asset('img/banners/home-page-slider-3.jpg') }});">
        <div class="container">
          <div class="caption vertical-center text-center">

            <h1 class="fadeInDown-1 dark-bg light-color" style="opacity: 0; top: -15px;">"If you find an attractive mould &amp; stuff behaviors into it, you still have the same old behaviors in a deceptively new form"</h1>
            <p class="fadeInDown-2 light-color" style="opacity: 0; top: -15px;">SoLMATE – School of Light Mentoring and Transition Engagement</p>
            <div class="fadeInDown-3" style="opacity: 0; top: -15px;">
              <a href="#" class="btn btn-large red">Get started now</a>
            </div><!-- /.fadeIn -->

          </div><!-- /.caption -->
        </div><!-- /.container -->
      </div>
      <div class="item" style="background-image: url({{ URL::asset('img/banners/home-page-slider-4.jpg') }});">
        <div class="container">
          <div class="caption vertical-center text-center">

            <h1 class="fadeInDown-1 dark-bg light-color" style="opacity: 0; top: -15px;">"If people work for you, you have to find something that works for people!"</h1>
            <p class="fadeInDown-2 light-color" style="opacity: 0; top: -15px;">SoLAR – School of Light Advisory and Research</p>
            <div class="fadeInDown-3" style="opacity: 0; top: -15px;">
              <a href="#" class="btn btn-large red">Get started now</a>
            </div><!-- /.fadeIn -->

          </div><!-- /.caption -->
        </div><!-- /.container -->
      </div>
    </div>
  </section>

{{--   <section id="who-we-are">
    <div class="container inner-top inner-bottom-sm">

      <div class="row">
        <div class="col-md-8 col-sm-9 center-block text-center" style="opacity: 0;">
          <header>
            <h1>Who We Are</h1>
            <p><em>We are a India focused, innovative  organisation supporting all aspirations towards building great Strategy and Human Resource practices. Through our comprehensive suite of products and services, we build future ready and integrated HR models that are growth focused and inclusive at once.</em></p>
          </header>
        </div><!-- /.col -->
      </div><!-- /.row -->

      <div class="row inner-top-sm">

        <div class="col-md-1" style="opacity: 0;">
          <div class="pull-right">
            <img src="{{ URL::asset('img/SOL-01.png') }}" alt="" class="img img-responsive">
          </div><!-- /.icon -->
        </div><!-- /.col -->

        <div class="col-md-3 inner-bottom-xs" style="opacity: 0;">
          <h2>Simplicity</h2>
          <p class="text-small">Simplicity means creating growth that at best is joyful and at least is anxiety free. Cultivating an ability to look at things as they are, without judgment or illusion, and creating a solution that can be commonly understood and implemented.</p>
        </div><!-- /.col -->

        <div class="col-md-1" style="opacity: 0;">
          <div class="pull-right">
            <img src="{{ URL::asset('img/SOL-02.png') }}" alt="" class="img img-responsive">
          </div><!-- /.icon -->
        </div><!-- /.col -->

        <div class="col-md-3 inner-bottom-xs" style="opacity: 0;">
          <h2>Integrity</h2>
          <p class="text-small">To us, integrity simply means oneness of thought, speech and action. It helps us build clarity, trust and reliability in everything we do.</p>
        </div><!-- /.col -->

        <div class="col-md-1" style="opacity: 0;">
          <div class="pull-right">
            <img src="{{ URL::asset('img/SOL-03.png') }}" alt="" class="img img-responsive">
          </div><!-- /.icon -->
        </div><!-- /.col -->

        <div class="col-md-3 inner-bottom-xs" style="opacity: 0;">
          <h2>Inclusive Growth</h2>
          <p class="text-small">Long term growth is usually a sum total of thoughts that account for and actions that care for the interests of all stakeholders. Sustainability is fundamentally an outcome of inclusion. All one needs is a shared belief stronger than the impatience of balance sheets.
        </p></div><!-- /.col -->

      </div><!-- /.row -->

    </div><!-- /.container -->
  </section>

  <section id="large-quote">
    <div class="container-fluid">

      <div class="row" id="quote-section" style="background-image: url({{ URL::asset('img/art/slider01.jpg') }});">
        <div class="col-md-8 col-sm-9 center-block text-center" style="opacity: 0;">
          <h3 style="color:white; padding:30px; margin-bottom: 0;">"In times of change, learners inherit the earth, while the learned find themselves beautifully equipped to deal with a world that no longer exists."&#8203;</h3>
          <h4 style="color:white; margin-bottom: 25px;">-Eric Hoffer</h4>
        </div>
      </div>

    </div>
  </section>
 --}}
  <section id="services">
    <div class="container inner-top inner-bottom-sm">

      <div class="row">
        <div class="col-md-10 col-sm-9 center-block text-center" style="opacity: 0;">
          <header>
            <h1>Our Services &amp; Products</h1>
          </header>
        </div><!-- /.col -->
      </div><!-- /.row -->

      <div class="row inner-top-sm text-center">

        <div class="col-sm-4 inner-bottom-xs" style="opacity: 0;">
          <div class="icon">
            <a href="{{ URL::to('products/solace') }}"><img src="{{ URL::asset('img/SOL-11-05.png') }}" alt="" class="img img-responsive"></a>
          </div><!-- /.icon -->
          <a href="{{ URL::to('products/solace') }}"><h2>SoL ACE</h2></a>
          <p class="text-small">With SOL ACE (School Of Light Annual Consulting Engagement) we offer clients an integrated Retainer. HR model wherein long term HR support is provided through a combination of onsite support, central excellence teams and cutting edge technology.</p>
        </div><!-- /.col -->

        <div class="col-sm-4 inner-bottom-xs" style="opacity: 0;">
          <div class="icon">
            <a href="#"><img src="{{ URL::asset('img/SOL-11-07.png') }}" alt="" class="img img-responsive"></a>
          </div><!-- /.icon -->
          <h2>Code HR</h2>
          <p class="text-small">With CodeHR, we offer our clients a comprehensive work flow based HRMS which lends itself to defining organizational processes clearly, adapting to changes and shepherding adherence from users.</p>
        </div><!-- /.col -->

        <div class="col-sm-4 inner-bottom-xs" style="opacity: 0;">
          <div class="icon">
            <a href="{{ URL::to('products/solar') }}"><img src="{{ URL::asset('img/SOL-11-10.png') }}" alt="" class="img img-responsive"></a>
          </div><!-- /.icon -->
          <a href="{{ URL::to('products/solar') }}"><h2>SoL AR</h2></a>
          <p class="text-small">With SOL AR (School of Light Advisory and Research),  we support clients identify and create HR programs, get a buy-in from all stakeholders and  manage implementation towards desired outcomes.</p>
        </div><!-- /.col -->

      </div><!-- /.row -->

      <div class="row text-center">

        <div class="col-sm-4 inner-bottom-xs" style="opacity: 0;">
          <div class="icon">
            <a href="{{ URL::to('products/solmate') }}"><img src="{{ URL::asset('img/SOL-11-08.png') }}" alt="" class="img img-responsive"></a>
          </div><!-- /.icon -->
          <a href="{{ URL::to('products/solmate') }}"><h2>SoL MATE</h2></a>
          <p class="text-small">With SOL MATE(School Of Light Mentoring And Transition Engagement) we offer our clients an approach to translate aspirations into competency goals as well as support them through inspiring training methodologies such as theatre and game based training.</p>
        </div><!-- /.col -->

        <div class="col-sm-4 inner-bottom-xs" style="opacity: 0;">
          <div class="icon">
            <a href="{{ URL::to('products/sol-search') }}"><img src="{{ URL::asset('img/SOL-11-06.png') }}" alt="" class="img img-responsive"></a>
          </div><!-- /.icon -->
          <a href="{{ URL::to('products/sol-search') }}"><h2>SoL Search</h2></a>
          <p class="text-small">With SOL Search we offer our clients a unified approach to talent acquisition which may well begin at defining the job role sharply and go upto ensuring the selected candidate settle in their new workspace.</p>
        </div><!-- /.col -->

        <div class="col-sm-4 inner-bottom-xs" style="opacity: 0;">
          <div class="icon">
            <a href="{{ URL::to('products/solve') }}"><img src="{{ URL::asset('img/SOL-11-04.png') }}" alt="" class="img img-responsive"></a>
          </div><!-- /.icon -->
          <a href="{{ URL::to('products/solve') }}"><h2>SoL VE</h2></a>
          <p class="text-small">With SOL VE we support our clients in seeking innovative training solutions, far reaching communication programs, real time data and analytics or meeting a technology expectation for their dear money.</p>
        </div><!-- /.col -->

      </div><!-- /.row -->

    </div><!-- /.container -->
  </section>

  {{-- <section id="blog-post" >
    <div class="col-md-10 center-block">
      <div class="post-content">
        <h1 class="content-title">Our differentiators</h1>

        <div class="row">
          <div class="col-md-6">
            <h2>Business thinking</h2>
            <p class="text-small">Either we already understand your sector or have the will and wherewithal to rapidly understand it. Not just the analytical reports full of numbers but your specific position within the sector, the impact of demographics and most importantly, levers of change. Just like you, we see our functional expertise as a tool and not a goal in itself. </p>
          </div>
          <div class="col-md-6">
            <h2>Participative change </h2>
            <p class="text-small">People programs are not ‘for the people’ unless they are ‘by the people’ too. Our approach is to take HR programs where they belong, amongst the employees and stakeholders, for both innovation and ownership. If you believe your people are indeed your differentiator, then they should be encouraged to do things differently. The strengths of this approach outdo what may be seem as drawbacks by a substantive and nurturing margin!
Reasons to join us</p>
          </div>
        </div>
      </div><!-- /.post-content -->
    </div><!-- /.col -->
  </section> --}}

  <section id="blog-post" >
    <div class="col-md-10 center-block">
      <div class="post-content">
        <h1 class="content-title">90% of our clients reengage with us</h1>

        <div class="row">
          <div class="col-md-6">
            <h2>Varun Vohra - Founder, Genii</h2>
            <p class="text-small">Either we already understand your sector or have the will and wherewithal to rapidly understand it. Not just the analytical reports full of numbers but your specific position within the sector, the impact of demographics and most importantly, levers of change. Just like you, we see our functional expertise as a tool and not a goal in itself. </p>
          </div>
          <div class="col-md-6">
            <h2>Varun Vohra - Founder, Genii</h2>
            <p class="text-small">People programs are not ‘for the people’ unless they are ‘by the people’ too. Our approach is to take HR programs where they belong, amongst the employees and stakeholders, for both innovation and ownership. If you believe your people are indeed your differentiator, then they should be encouraged to do things differently. The strengths of this approach outdo what may be seem as drawbacks by a substantive and nurturing margin!
Reasons to join us</p>
          </div>
        </div>
      </div><!-- /.post-content -->
    </div><!-- /.col -->
  </section>

 {{--  <footer class="light-bg">
    <div class="container inner">
      <div class="row" >

        <div class="col-md-6 col-sm-12 inner">
          <h4>Contact Us</h4>
          <form id="contact_form">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" placeholder="Enter name">
            </div>
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" id="email" placeholder="Enter Email">
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea name="textarea" id="message" style="min-height: none;"></textarea>
            </div>
            <button type="submit" class="btn btn-default yellow">Submit</button>
          </form>
        </div><!-- /.col -->

        <div class="col-md-6 col-sm-12 inner">
          <div class="row">
            <div class="container-fluid" id="mapbox" style="width: 100%;">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d942.3307326004254!2d72.86831269999998!3d19.137336600000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b7dbecd22a57%3A0x71e6f147ca50a152!2s4B%2F53%2C+Poonam+Nagar%2C+Jogeshwari+East%2C+Mumbai%2C+Maharashtra+400093%2C+India!5e0!3m2!1sen!2s!4v1436343141532" width="100%" height="650px" frameborder="0" style="border:0; margin-top: -150px;" allowfullscreen></iframe>
            </div>
          </div>
        </div><!-- /.col -->

      </div><!-- /.row -->
    </div><!-- .container -->
  </footer> --}}


@stop