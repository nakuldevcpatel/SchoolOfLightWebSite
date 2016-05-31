@extends('home.layouts.master')

@section('content')

<section class='hero'>
  <div class='item img-bg-large-center dark-bg parallax' style="background-image: url('{{ URL::asset('img/banners/join-us.jpg') }}')">
    <div class='container'>
      <div class='caption vertical-center text-center'>
        <h1 class='light-color lowercase' style="font-size: 42px;">Reach out, with substantive, <br>nurturing, fulfilling ideas and action.</h1>
        <p class='light-color'>
          What we do
        </p>
      </div>
    </div>
  </div>
</section>




<!-- Sub head start -->

<section id="who-we-are">
  <div class="container inner-top inner-bottom-sm">

    <div class="row">
      <div class="col-md-10 col-sm-9 center-block text-center animated">
        <header>
          <h1>In specific… our perceptible endeavor</h1>
        </header>
        <div class="col-md-4" style="margin-top:0 !important;">
          <p class="text-small">Support companies shape people strategies rooted in their specific aspirations and realities</p>
        </div>
        <div class="col-md-4">
          <p class="text-small">Create meaningful, yet  simplified Human resources programs</p>
        </div>
        <div class="col-md-4">
          <p class="text-small">Collaborate with organizations to build on their HR practice</p>
        </div>
      </div><!-- /.col -->
    </div><!-- /.row -->


  </div><!-- /.container -->
</section>






<!--==== Extra Section  start=====-->
 <section id="services">
    <div class="container inner-top inner-bottom-sm" style="padding-top:50px;">

      <div class="row">
        <div class="col-md-10 col-sm-9 center-block text-center" style="opacity: 0;">
          <header>
            <h1>Our beliefs</h1>
          </header>
        </div><!-- /.col -->
      </div><!-- /.row -->

      <div class="row inner-top-sm text-center">

        <div class="col-sm-4 inner-bottom-xs" style="opacity: 0;">
          <div class="icon">
            <a href="#"><img src="{{ URL::asset('img/SOL-11-05.png') }}" alt="" class="img img-responsive"></a>
          </div><!-- /.icon -->
          <h2>Inclusive growth</h2>
          <p class="text-small">Long term growth is usually a sum total of thoughts that account for and actions that care for the interests of all stakeholders.  Sustainability is fundamentally and outcome of inclusion. All one needs is a shared belief stronger than the impatience of balance sheets. </p>
        </div><!-- /.col -->

        <div class="col-sm-4 inner-bottom-xs" style="opacity: 0;">
          <div class="icon">
            <a href="#"><img src="{{ URL::asset('img/SOL-11-07.png') }}" alt="" class="img img-responsive"></a>
          </div>
          <h2>Simplicity  </h2>
          <p class="text-small">Simplicity is creating growth that at best is joyful and at the very least is anxiety free. Cultivating an ability to look at things as they are, without judgment or illusion, and creating a solution that can be commonly understood, accepted and implemented.</p>
        </div><!-- /.col -->

        <div class="col-sm-4 inner-bottom-xs" style="opacity: 0;">
          <div class="icon">
            <a href="#"><img src="{{ URL::asset('img/SOL-11-10.png') }}" alt="" class="img img-responsive"></a>
          </div><!-- /.icon -->
          <h2>Integrity</h2>
          <p class="text-small">To us, integrity simply means oneness of thought, speech and action. It builds clarity, trust and reliability in everything we do.</p>
        </div><!-- /.col -->

      </div><!-- /.row -->
    </div><!-- /.container -->
  </section>




<!--======= Extra Section end =======-->


<!-- ============================================================= SECTION – FEATURES -->
<section class='diagonal-heading-container'>
  <div class='diagonal-heading'>
    <div class="col-md-10 center-block">
      <h1 class='content-title' style="margin-bottom: 0;">Why should I work here
</h1>
  </div>
</section>
<section class='hero work-here'>
  <div class='item img-bg-large-center' id='reason-bg'>
    <div class='caption vertical-center text-center'>
      <ul class='' id='owl-career'>
        <li>
          <div class='reasons-icon'><img src="{{ URL::asset('img/future.png') }}" alt=""></div>
          <h1 class='light-color'>Agents of future</h1>
          <p class='light-color about-us-p'>
           We are creating great futuristic things. Join us, shape us, shape it with us.
          </p>
        </li>
        <li>
          <div class='reasons-icon'><img src="{{ URL::asset('img/musk.png') }}" alt=""></div>
          <h1 class='light-color'>Musketeer motto</h1>
          <p class='light-color about-us-p'>
            One for all, all for one. Share brains, limbs, stories, miseries….no not desserts.
          </p>
        </li>
        <li>
          <div class='reasons-icon'><img src="{{ URL::asset('img/foot.png') }}" alt=""></div>
          <h1 class='light-color'>Career on steroids</h1>
          <p class='light-color about-us-p'>
           Take ownership, rock at your job, forge your path. We are not fussy about months at level type of thing.
          </p>
        </li>
        <li>
          <div class='reasons-icon'><img src="{{ URL::asset('img/smile.png') }}" alt=""></div>
          <h1 class='light-color'>If you want to be happy, BE</h1>
          <p class='light-color about-us-p'>
           We are generally a joyful bunch deadlines, tempers and wicked humor notwithstanding! <br>Leaves are never denied…like ever.
          </p>
        </li>
        <li>
          <div class='reasons-icon'><img src="{{ URL::asset('img/heart.png') }}" alt=""></div>
          <h1 class='light-color'>Love on a plate</h1>
          <p class='light-color about-us-p'>
           Food is the central theme of our jokes, cuss words and celebrations. <br>The salivating discussions are matched only by copious consumption.
          </p>
        </li>
       </ul>
       <a href="javascript:void(0);" id="nextReason"><img src="{{ URL::asset('img/refresh-icon.png') }}" alt=""><br>Give me another reason</a>
    </div>
  </div>
</section>
<!-- ============================================================= SECTION – CIRCLE TABS ============================================================= -->


<!--==================== POSTINGS  ==================-->
<section>
  <div class='container'>
    <div class='row'>
      <div class='col-md-10 center-block inner-sm'>
        <div class='row'>
          <div class='col-md-8 col-sm-9 center-block text-center'>
            <header>
              <h1>Find your niche. Openings are below.</h1>
            </header>
          </div>
        </div>
        <div class='row postings'>
          <div class="col-md-12">
            <div class="grid-blog col-3 no-sidebar">
              <div class="posts">
                @foreach($postings as $posting)
                <div class="post format-standard" data-industry="{{ $posting->industry }}">

                  <div class="post-content">

                    <h2 class="post-title">{{ $posting->title }}</h2>

                    <ul class="meta">
                      <li class="categories"><a href="#">{{ $posting->industry }}</a></li>
                    </ul><!-- /.meta -->

                    <p>{{ $posting->description }}</p>

                    <a href="{{ URL::to('careers', $posting->id) }}" class="btn yellow">Apply</a>

                  </div><!-- /.post-content -->

                </div><!-- /.post -->
                @endforeach
              </div><!-- /.posts -->
            </div><!-- /.grid-blog -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@stop