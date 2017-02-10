<!DOCTYPE html>
<html lang="en">
@include('partials.head')

<body>
	@include('partials.menu')
	<div class="canvas">
		<div class="background-wrapper gradient-bg">
			@include('partials.top-bar')
		</div>

		<div class="container interior-content">
			@include('partials.flash-messages')
			<div class="row" vocab="http://schema.org/" typeof="WebPage">
				<meta property="url" href="http://mark-eccleston-software-engineer.com/{{ $data['slug'] }}">
				<div class="col-md-10 col-md-push-1">
					@include('partials.breadcrumbs')
					<hgroup class="section-header">
						<h3 property="name"> @yield('page_title') </h3>
					</hgroup>
					<article>
						@yield('page_content')
					</article>
				</div>
			</div>
		</div>

		@include('partials.footer')
	</div>

	@include('partials.js')
	
	@include('partials.modal')
</body>
</html>