@extends('home.layouts.master')

@section('content')

  <main>
    <div class="service-banner"
      style="background-size: cover; background-image: url(
        @if($content->id == 6)
          {{ URL::asset('img/banners/solace-banner.jpg') }}
        @endif
        @if($content->id == 2)
          {{ URL::asset('img/banners/solar-banner.jpg') }}
        @endif
        @if($content->id == 3)
          {{ URL::asset('img/banners/solmate-banner.jpg') }}
        @endif
        @if($content->id == 4)
          {{ URL::asset('img/banners/solsearch-banner.jpg') }}
        @endif
        @if($content->id == 5)
          {{ URL::asset('img/banners/solve-banner.jpg') }}
        @endif
        @if($content->id == 7)
          {{ URL::asset('img/banners/code-hr.jpg') }}
        @endif
        );"
    >
      <div class="content-icon"><img src="{{ URL::asset($content->icon_img) }}" class="img"></div>
    </div>
    <section id="blog-post" class="light-bg" >
      <img src="" alt="" class="blog-img">
        <div class="col-md-12 center-block">
          <div class="post-content">
            <h1 class="content-title">{{ $content->title }}</h1>
            <div class="row">
              <div class="col-md-6">
                <p>
                  {{ html_entity_decode($content->content) }}
                </p>
              </div>
              @if($content->id == 6)
                @include('home.solace')
              @endif
              @if($content->id == 2)
                @include('home.solar')
              @endif
              @if($content->id == 3)
                @include('home.solmate')
              @endif
              @if($content->id == 4)
                @include('home.solsearch')
              @endif
              @if($content->id == 5)
                @include('home.solve')
              @endif
               @if($content->id == 7)
                @include('home.codehr')
              @endif
            </div>
          </div><!-- /.post-content -->
        </div><!-- /.col -->
    </section>
  </main>
@stop