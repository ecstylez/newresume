<div class="row" property="description">
	<div class="col-md-9">
		<hgroup>
			<h4>Early Life</h4>
		</hgroup>
		<p>
			Growing up, I was one of those kids always fascinated by technology. From gameboys, to cameras, to computers, I had to get my hands on them. Not just to use them, but to truly understand them, inside and out. Web design &amp; development came the same way. <br><br>

			It all started one day when a certain fan site caught my eye. I wanted to replicate it. Over time I learned to build my own site from scratch, from the design phase, through development all the way to a production deployment.
		</p>

		<hgroup>
			<h4>Work Environment</h4>
		</hgroup>
		<p>
			Once, I got into a career-like work environment, these skills that I honed as an adolescent truly came into play. I understood the importance of working as a part of a cohesive team. To reach the end goal, we all had to do our part and do it well.<br><br>

			Being well rounded in many aspects of design and development, it wasn't too difficult to be thrown into a random spot, given the wheel and being told to "drive to the finish line". It allowed me to further solidify my skills, bounce ideas and inquiries off of my colleagues' brains, and allow us all to efficiently complete our tasks.
		</p>

		<hgroup>
			<h4>What makes me stand out?</h4>
		</hgroup>
		<p>
			What makes me stand out? <strong>Pride and Perseverance</strong>. If I'm put into a position to either be a helping hand in a project, or to even spearhead a project on my own, I do what needs to get done. If time affords it, I do even more.<br><br>

			When the job is done, it's done with the utmost attention to detail and efficiency. We don't half-ass around here! <span class="fa fa-smile-o"></span>
		</p>
	</div>
	<div class="col-md-3">
		<div class="about-me-photo">
			<div class="curiousity">
				<span>Curious</span>
				<span>Aren't you?</span>
			</div>
		</div>
		
		<div class="about-me-skills">
			<hgroup>
				<h4>Proficiencies</h4>
			</hgroup>

			<ul style="padding-left:15px;">
				@foreach($data['misc'] as $skill)
					<li>{{ $skill }}</li>
				@endforeach
			</ul>
		</div>
	</div>
</div>