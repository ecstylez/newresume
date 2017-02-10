<div class="resume-style">
	<div class="row">
		<div class="col-md-9">
			<hgroup>
				<h2>Mark Eccleston</h2>
			</hgroup>
			<article>
				<p property="description">
					My name is Mark Eccleston, a Web Developer and Designer. I’m on the hunt for a position to further my skills and re-ignite my fire. To obtain a position collaborating with a dynamic team in an environment that will enable me to put my skills to use, to help further myself and others.
				</p>
			</article>
		</div>
		<div class="col-md-3">
			<article>
				<p>
					16500 Golf Club Rd, Apt 313<br>
					Weston, FL 33326
				</p>
				<p class="phone-and-email">
					954.648.0019<br>
					m.ecstylez@gmail.com
				</p>
			</article>
		</div>
	</div>
	<div class="row">
		<div class="col-md-9">
			<div class="experience">
				<hgroup>
					<h3>Experience</h3>
				</hgroup>

				@foreach ($data['misc']['jobs'] as $job)
					<div class="job">
						<div class="heading">
							<strong>{{ $job['company'] }}</strong>, {{ $job['where'] }} - <em>{{ $job['title'] }}</em>
						</div>
						<div class="duration">
							{{ $job['years'] }}
						</div>
						<div class="description">
							<p>
								{!! nl2br(e($job['description'])) !!}
							</p>
						</div>
					</div>
				@endforeach
			</div>

			<div class="education">
				<hgroup>
					<h3>Education</h3>
				</hgroup>

				@foreach ($data['misc']['education'] as $education)
					<div class="school">
						<div class="heading">
							<strong>{{ $education['school'] }}</strong>, {{ $education['where'] }} - <em>{{ $education['degree'] }}</em>
						</div>
						<div class="duration">
							{{ $education['years'] }}
						</div>
					</div>
				@endforeach
			</div>

			<div class="projects">
				<hgroup>
					<h3>Projects</h3>
				</hgroup>

				@foreach ($data['misc']['projects'] as $project)
					<div class="project">
						<div class="heading">
							<strong>{{ $project['project_title'] }}</strong> - {{ $project['job'] }}
	</em>
						</div>
						<div class="description">
							<p>
								{{ $project['description'] }}
							</p>
						</div>
					</div>
				@endforeach
			</div>
		</div>
		<div class="col-md-3">
			<div class="misc">
				<hgroup>
					<h3>Skills</h3>
				</hgroup>
				<p>
					{{ implode(", ", $data['misc']['skills']) }}
				</p>

				<hgroup>
					<h3>Awards</h3>
				</hgroup>
				<p>
					{{ implode(", ", $data['misc']['awards']) }}
				</p>

				<hgroup>
					<h3>References</h3>
				</hgroup>
				<p>
					Available upon request
				</p>

				<hgroup>
					<h3>Download</h3>
				</hgroup>
				<p>
					<a href="https://drive.google.com/open?id=0B3X_H6ElAMlHb000OU5JcE5sOHM" target="_blank">
						<span class="fa fa-cloud-download"></span> Download my resume now!
					</a>
				</p>
			</div>
		</div>
	</div>
</div>