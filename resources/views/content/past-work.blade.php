<div class="row">
	<div class="col-md-12">
		<article>
			<p property="description">
				Below is a list of some the projects that I've either spearheaded, or have been a part of.
			</p>
		</article>
	</div>
	<div class="col-md-12">
		<div class="row">
			@foreach ($data['misc'] as $work)
				<div class="col-md-6">
					<div class="work" data-project="{{ $work['image_path'] }}">
						<a href="#">
							<div class="title">{{ $work['title'] }}</div>
							<div class="description">
								{{ $work['description'] }}
							</div>
							<div class="bg-image" style="background-image: url(/images/past-work/{{ $work['image_path']  }}/001.jpg);"></div>
						</a>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</div>