@extends('home.layouts.master')

@section('content')

  <main>
    <section id="blog-post" class="light-bg">
      <div class="container no-table inner-top-sm inner-bottom classic-blog no-sidebar">
        <div class="row">
          <div class="col-md-9 center-block">
            <div class="sidemeta">

              <div class="post format-gallery">

                <img src="{{ URL::asset($article->featured_img) }}" alt="" class="blog-img">

                <div class="date-wrapper">
                  <div class="date">
                    <span class="day">{{ date('d', strtotime($article->created_at)) }}</span>
                    <span class="month">{{ date('M', strtotime($article->created_at)) }}</span>
                  </div><!-- /.date -->
                </div><!-- /.date-wrapper -->

                <div class="format-wrapper">
                  <a href="#"><i class="icon-picture"></i></a>
                </div><!-- /.format-wrapper -->

                <div class="post-content">

                  <h1 class="post-title">{{ $article->title }}</h1>

                  <p>
                    {{ $article->content }}
                  </p>

                </div><!-- /.post-content -->

              </div><!-- /.post -->

              {{-- <div class="post-author">
                <figure>

                  <div class="author-image icon-overlay icn-link">
                    <a href="#"><img src="assets/images/art/human01.jpg" alt=""></a>
                  </div>

                  <figcaption class="author-details">
                    <h3>About the author</h3>
                    <p><a href="#">Amber Jones</a> quiae sitiorem rest non restibusaes es core posaemni volor remped modis volor. Doloreiur qui commolupte patus dolupta oreprerum aut tibusam inisita posae lomne.</p>
                    <ul class="social">
                      <li><a href="#"><i class="icon-s-facebook"></i></a></li>
                      <li><a href="#"><i class="icon-s-gplus"></i></a></li>
                      <li><a href="#"><i class="icon-s-twitter"></i></a></li>
                    </ul><!-- /.social -->
                  </figcaption>

                </figure>
              </div><!-- /.post-author --> --}}

              @if(count($related_articles))
                <div class="panel panel-default">

                  <div class="panel-heading">
                    <h2 class="panel-title">
                      <a class="panel-toggle" data-toggle="collapse" data-parent="#accordion-related-posts" href="#content-related-posts">
                        <span>Related posts</span>
                      </a>
                    </h2>
                  </div><!-- /.panel-heading -->

                  <div id="content-related-posts" class="panel-collapse collapse in">
                    <div class="panel-body">
                      <div id="owl-related-posts" class="owl-carousel owl-item-gap">

                        @foreach($related_articles as $art)
                          <div class="item">
                            <figure>

                              <div class="icon-overlay icn-link">
                                <a href="{{ URL::to('blog', $art->id)}}"><img src="{{ URL::asset($art->featured_img)}}" alt=""></a>
                              </div><!-- /.icon-overlay -->

                              <figcaption class="bordered no-top-border">
                                <div class="info">
                                  <h4><a href="{{ URL::to('blog', $art->id)}}">{{ $art->title }}</a></h4>
                                  <p>{{ $art->category->name }}</p>
                                </div><!-- /.info -->
                              </figcaption>

                            </figure>
                          </div><!-- /.item -->
                        @endforeach


                      </div><!-- /.owl-carousel -->
                    </div><!-- /.panel-body -->
                  </div><!-- /.content -->
                </div><!-- /.panel -->
              @endif

            </div><!-- /.sidemeta -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>

  </main>
@stop