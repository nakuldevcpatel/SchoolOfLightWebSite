@extends('home.layouts.master')

@section('content')

      <!-- ============================================================= SECTION – BLOG ============================================================= -->

      <section class='hero'>
        <div class='item img-bg-large-center dark-bg parallax' style="background-image: url('{{ URL::asset('img/banners/community.jpg') }}')">
          <div class='container'>
            <div class='caption vertical-center text-center'>
              <h1 class='light-color lowercase' style="font-size: 42px;">Ask questions, share your thoughts,<br> be part of the SoL Community</h1>
              <p class='light-color'>
                Community Forum
              </p>
            </div>
          </div>
        </div>
      </section>

    <section id="blog" class="light-bg">
        <div class="container inner-top-sm inner-bottom classic-blog sidebar-left">

          <div class="row">

            <div class="col-md-9 col-md-push-3 inner-left-sm">

              <div class="posts sidemeta">

                @foreach ($questions as $question)

                  <div class="post format-standard">

                    <div class="date-wrapper">
                      <div class="date">
                        <span class="day ">{{ date('d', strtotime($question->created_at)) }}</span>
                        <span class="month">{{ date('M', strtotime($question->created_at)) }}</span>
                      </div><!-- /.date -->
                    </div><!-- /.date-wrapper -->

                    <div class="format-wrapper">
                      <a href="#" data-filter=".format-standard"><i class="icon-edit"></i></a>
                    </div><!-- /.format-wrapper -->

                    <div class="post-content">

                      <h2 class="post-title">
                        <a href="{{ URL::to('question', $question->id) }}">{{ $question->question }}</a>
                      </h2>

                      <ul class="meta">
                        <li class="comments"><a href="{{ URL::to('question', $question->id) }}#disqus_thread"></a></li>
                      </ul><!-- /.meta -->

                      <p>{{ $question->description }}</p>

                      <a href="{{ URL::to('question', $question->id) }}" class="btn yellow">Read the answers</a>

                    </div><!-- /.post-content -->

                  </div><!-- /.post -->
                @endforeach

              </div><!-- /.posts -->

            </div><!-- /.col -->

            <aside class="col-md-3 col-md-pull-9" style="background-color: #efefef; padding: 20px;">

              <div class="sidebox widget">
                <h4>SoL Community</h4>
                <p>The School of Light Community is an HR hub for budding peers to come forth and ask questions pertaining to the field.</p>
              </div><!-- /.widget -->

              <div class="sidebox widget">
                <h4>Send in your question</h4>
                <form action="{{ URL::route('submitQuesiton') }}" method="POST">
                  <label for="#">Question</label>
                  <input type="text" name="question" style="background-color: #fff;"><br><br>
                  <label for="#">Description</label>
                  <textarea name="description" id="" cols="30" rows="2" style="background-color: #fff;"></textarea>
                  <input type="submit" value="Send" class="btn">
                </form>
              </div>

            </aside>

          </div><!-- /.row -->

        </div><!-- /.container -->
      </section>

      <script type="text/javascript">
      /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
      var disqus_shortname = 'schooloflight'; // required: replace example with your forum shortname

      /* * * DON'T EDIT BELOW THIS LINE * * */
      (function () {
      var s = document.createElement('script'); s.async = true;
      s.type = 'text/javascript';
      s.src = '//' + disqus_shortname + '.disqus.com/count.js';
      (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
      }());
      </script>


      <!-- ============================================================= SECTION – BLOG : END ============================================================= -->
@stop