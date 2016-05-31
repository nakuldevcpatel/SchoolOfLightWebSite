@extends('home.layouts.master')

@section('content')

      <!-- ============================================================= SECTION – BLOG ============================================================= -->
      <section class='hero'>
        <div class='item img-bg-large-center dark-bg parallax' style="background-image: url('{{ URL::asset('img/banners/blog.jpg') }}')">
          <div class='container'>
            <div class='caption vertical-center text-center'>
              <h1 class='light-color lowercase' style="font-size: 42px;">School of Thought.</h1>
              <p class='light-color'>
                Blog
              </p>
            </div>
          </div>
        </div>
      </section>

      <section id="blog" class="light-bg">
        <div class="container inner-top-sm inner-bottom classic-blog no-sidebar">

          <div class="row">
            <div class="col-md-9 center-block">

              <div class="posts sidemeta">

                @foreach ($articles as $article)
                  <div class="post format-standard">

                    <img src="{{ URL::asset($article->featured_img) }}" alt="" class="blog-img">

                    <div class="date-wrapper">
                      <div class="date">
                        <span class="day">{{ date('d', strtotime($article->created_at)) }}</span>
                        <span class="month">{{ date('M', strtotime($article->created_at)) }}</span>
                      </div><!-- /.date -->
                    </div><!-- /.date-wrapper -->

                    <div class="format-wrapper">
                      <a href="#" data-filter=".format-standard"><i class="icon-edit"></i></a>
                    </div><!-- /.format-wrapper -->

                    <div class="post-content">

                      <h2 class="post-title">
                        <a href="{{ URL::to('blog', $article->id) }}">{{ $article->title }}</a>
                      </h2>

                      <ul class="meta">
                        <li class="categories"><a href="#">{{ $article->category->name }}</a></li>
                      </ul><!-- /.meta -->

                      <p>{{ $article->excerpt }}</p>

                      <a href="{{ URL::to('blog', $article->id) }}" class="btn">Read more</a>

                    </div><!-- /.post-content -->

                  </div><!-- /.post -->
                @endforeach

              </div><!-- /.posts -->

            </div><!-- /.col -->
          </div><!-- /.row -->

        </div><!-- /.container -->
      </section>

      <!-- ============================================================= SECTION – BLOG : END ============================================================= -->
@stop