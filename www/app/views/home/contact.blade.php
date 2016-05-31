@extends('home.layouts.master')

@section('content')

<!-- ============================================================= MAIN ============================================================= -->

		<main>

			<!-- ============================================================= SECTION – CONTACT FORM ============================================================= -->

			<section id="contact-form">
				<div class="container inner">

					<div class="row">
						<div class="col-md-8 col-sm-9 center-block text-center">
							<header>
								<h1>Get in touch</h1>
								<p>Ask us questions, tell us your story, we would love to hear from you.</p>
								<p>
									@if($errors->has())
								   @foreach ($errors->all() as $error)
								      <div>{{ $error }}</div>
								  @endforeach
								@endif
								</p>
							</header>
						</div><!-- /.col -->
					</div><!-- /.row -->

					<div class="row">
						<div class="col-sm-12">
							<div class="row">

								<div class="col-sm-6 outer-top-md inner-right-sm">

									<h2>Leave a Message</h2>

									<form id="contact-form" class="forms" action="{{ URL::route('submit-contact') }}" method="post">

										<div class="row">
											<div class="col-sm-6">
												<input type="text" name="name" class="form-control" placeholder="Name (Required)" required>
											</div><!-- /.col -->
										</div><!-- /.row -->

										<div class="row">
											<div class="col-sm-6">
												<input type="email" name="email" class="form-control" placeholder="Email (Required)" required>
											</div><!-- /.col -->
										</div><!-- /.row -->

										<div class="row">
											<div class="col-sm-6">
												<input type="text" name="subject" class="form-control" placeholder="Subject">
											</div><!-- /.col -->
										</div><!-- /.row -->

										<div class="row">
											<div class="col-sm-12">
												<textarea name="message" class="form-control" placeholder="Enter your message ..." required></textarea>
											</div><!-- /.col -->
										</div><!-- /.row -->

										<button type="submit" class="btn btn-default btn-submit">Submit message</button>

									</form>

									<div id="response"></div>

								</div><!-- ./col -->

								<div class="col-sm-6 outer-top-md inner-left-sm border-left">

									<h2>Contacts</h2>
									<p>If you want us to help you out with any problems, do drop us a line.</p>

									<h3>School of Light</h3>
									<ul class="contacts">
										<li><i class="icon-location contact"></i> 4A, 43, Kalpatru Estate, JVLR, Andheri East, Mumbai - 400093</li>
										<li><i class="icon-mobile contact"></i> +91 9819221837</li>
										<li><a href="mailto:info@abc.com"><i class="icon-mail-1 contact"></i> connect&#64;schooloflight.in</a></li>
									</ul><!-- /.contacts -->

									<div class="social-network">
										<h3>Social</h3>
										<ul class="social">
											<li><a href="#"><i class="icon-s-facebook"></i></a></li>
											<li><a href="#"><i class="icon-s-linkedin"></i></a></li>
										</ul><!-- /.social -->
									</div><!-- /.social-network -->

								</div><!-- /.col -->

							</div><!-- /.row -->
						</div><!-- /.col -->
					</div><!-- /.row -->

				</div><!-- /.container -->
			</section>

			<!-- ============================================================= SECTION – CONTACT FORM : END ============================================================= -->


			<!-- ============================================================= SECTION – MAP ============================================================= -->

			<section id="map" class="height-sm"></section>

			<!-- ============================================================= SECTION – MAP : END ============================================================= -->

		</main>

		<!-- ============================================================= MAIN : END ============================================================= -->



@stop