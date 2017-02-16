<!DOCTYPE html>
<html lang="en">
@include('partials.head')

<body>
	@include('partials.menu')
	<div class="canvas">
		<div class="background-wrapper gradient-bg">
			@include('partials.top-bar')
			@include('partials.homepage-hero')
		</div>

		<div class="container interior-content">
			@include('partials.flash-messages')
			<div class="row">
				<div class="col-md-10 col-md-push-1">
					<hgroup class="section-header">
						<h3>About Me</h3>
					</hgroup>
					<article>
						<p>
							My name is Mark Eccleston, and I am a software engineer. PHP Development and Web Design have been an essential part of my life for the past 15+ years. I've worked with many types of companies, from startups, to full fledged organizations; From being a one man army to being a part of an expansive development team; From being solely a web designer to being a full on software developer. Being a part of something big and learning as I go has always been what intrigues me most. Over time, I've established core skills in HTML, CSS3, Sass, Javascript (jQuery, Prototype), SQL, and more, working under Agile development environments. I'm currently based in the Fort Lauderdale, FL area. <a href="/about-me" title="Find out more about Mark Eccleston, the PHP Developer">Would you like to know more?</a>
						</p>
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