<div class="row">
	<div class="col-md-12">
		@if(Session::has('success'))
			<div class="alert alert-success" role="alert">
				<span class="fa fa-check-circle"></span> {{ Session::get('success') }}
			</div>
		@endif

		@if(count($errors) > 0)
			<div class="alert alert-danger" role="alert">
				<span class="fa fa-exclamation-triangle"></span> Uh oh! Looks like we had some issues when you submitted the form! Here's what happened...
				<ul>
					@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
	</div>
</div>