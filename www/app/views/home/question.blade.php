@extends('home.layouts.master')

@section('content')

  <main>
    <section id="blog-post" class="light-bg">
      <div class="container inner-top-sm classic-blog no-sidebar">
        <div class="row">
          <div class="col-md-9 center-block">
            <div class="sidemeta">

              <div class="post format-gallery">

                <div class="date-wrapper">
                  <div class="date">
                    <span class="day">{{ date('d', strtotime($question->created_at)) }}</span>
                    <span class="month">{{ date('M', strtotime($question->created_at)) }}</span>
                  </div><!-- /.date -->
                </div><!-- /.date-wrapper -->

                <div class="format-wrapper">
                  <a href="#"><i class="icon-picture"></i></a>
                </div><!-- /.format-wrapper -->

                <div class="post-content">

                  <h1 class="post-title">{{ $question->question }}</h1>

                  <p>
                    {{ $question->description }}
                  </p>

                </div><!-- /.post-content -->

              </div><!-- /.post -->
            </div>
          </div>
        </div>
      </div><!-- /.container -->
    </section>

    <section class="dark-bg inner">
      <div class="container">
        <div class="row">
          <div class="col-md-8 center-block">
            <div id="disqus_thread"></div>
            <script type="text/javascript">
                /* * * CONFIGURATION VARIABLES * * */
                var disqus_shortname = 'schooloflight';

                /* * * DON'T EDIT BELOW THIS LINE * * */
                (function() {
                    var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                    dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
          </div>
        </div>
      </div>
    </section>
    <section class="light-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 center-block"><a href="{{ URL::to('community') }}" class="questions-btn">Back to all questions</a></div>
        </div>
      </div>
    </section>

  </main>
@stop