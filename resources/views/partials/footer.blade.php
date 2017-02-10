<footer id="contact-me">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-push-1">
				<hgroup class="section-header">
					<h3>Contact Me Anytime!</h3>
				</hgroup>
				<article>
					<p>
						If there's one thing that I like, it's a conversation! If you've got a question, don't hesitate to pick my brain about web design or web development at anytime. Feel free to contact me directly at my phone number or email address below, or fill out the form! <span class="fa fa-thumbs-up"></span>

						<ul>
							@foreach($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>

						@if (Session::has('message'))
							<div class="alert alert-info">
								{{  Session::get('message') }}
							</div>
						@endif
					</p>
				</article>

				<div class="row">
					<div class="col-md-4">
						<div class="contact-information" itemscope vocab="http://schema.org/" typeof="Organization">
							<span>
								<strong property="name">Mark Eccleston</strong>
								<div property="address" typeof="PostalAddress">
									<span property="streetAddress">16500 Golf Club Rd, Apt #313</span><br>
									<span property="addressLocality">Weston</span>, <span property="addressRegion">FL</span> <span property="postalCode">33326</span>
								</div>
							</span>
							<span>
								<span property="telephone">954.648.0019</span><br>
								<span property="email">m.ecstylez@gmail.com</span>
								
								<span itemscope typeof="WebSite">
									<meta property="url" href="http://mark-eccleston-software-engineer.com">
								</span>
							</span>
						</div>
					</div>
					<div class="col-md-8">
						{!! Form::open(array(
							'url'    => 'submit-form',
							'method' => 'POST',
						))!!}
							{!! Form::token() !!}
							<div class="form-group">
								{!! Form::label('name', 'Name') !!}
								{!! Form::text('name', '', array(
									'class'       => 'form-control',
									'placeholder' => "don't be shy, what's your name?"
								))!!}
							</div>
							<div class="form-group">
								{!! Form::label('email', 'Email Address') !!}
								{!! Form::text('email', '', array(
									'class'       => 'form-control',
									'placeholder' => "I need a way to contact you!"
								)) !!}
							</div>
							<div class="form-group">
								{!! Form::label('comments_and_questions', 'Comments and Questions') !!}
								{!! Form::textarea('comments_and_questions', '', array(
									'class' => 'form-control',
									'placeholder' => "don't be shy, what's your name?"
									)
								) !!}
							</div>
							<div class="text-right">
								{!! Form::submit('Submit Inquiry', array(
									'class' => 'btn',
								)) !!}
							</div>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>