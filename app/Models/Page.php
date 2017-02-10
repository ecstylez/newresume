<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
	/**
	 * build an array of past work 
	 * @return $work  formatted array of all past work.
	 */
	public function pastWork ()
	{
		$work = array();

		// resume
		$work[] = array(
			'title'       => 'Resume Site',
			'image_path'  => 'resume',
			'description' => 'This site! The most recent example of my work. Built on Laravel. Using Gulp to compile stylesheets and minify JS, deployed from local virtual box to Heroku.',
		);
		
		// you've been caught
		$work[] = array(
			'title'       => 'You\'ve been caught',
			'image_path'  => 'you-got-caught',
			'description' => 'A funny little project, that I was commissioned to create. Used as a redirect for when employees were attempting to visit blocked sites.',
		);

		// cp.com
		$work[] = array(
			'title'       => 'Cruise Planners redesign',
			'image_path'  => 'cpcom',
			'description' => 'A project that I took the lead on to redesign the main site for Cruise Planners.',
		);

		// data breach
		$work[] = array(
			'title'       => 'SEO Pages',
			'image_path'  => 'seo-pages',
			'description' => 'Built a handful of standard SEO websites for to increase search engine ranking.',
		);

		// trip summary
		$work[] = array(
			'title'       => 'Trip Summary',
			'image_path'  => 'trip-summary',
			'description' => 'Built an online itinerary template for American Express customers to view details about their upcoming trip(s)',
		);

		// vecto technology
		$work[] = array(
			'title'       => 'VECTO Technology',
			'image_path'  => 'vecto-technology',
			'description' => 'Designed and developed a site for VECTO Technology. Cruise Planners\' technology division.',
		);

		// adzuki
		$work[] = array(
			'title'       => 'Adzuki',
			'image_path'  => 'adzuki',
			'description' => 'The codename for Cruise Planners\' agent portal. designed and continuing development with a team to complete this project.',
		);

		// $work[] = array(
		// 	'title'       => '',
		// 	'image_path'  => '',
		// 	'description' => '',
		// );
		return $work;
	}

	/**
	 * build an array of resume details to be used on the resume page
	 * @return array return array details of every thing to be printed
	 *                      on the resume page
	 */
	public function resumeDetails ()
	{
		$resume = array();

		// jobs
		$resume['jobs'] = $this->getJobs();

		// schooling
		$resume['education'] = $this->getEducation();

		// projects
		$resume['projects'] = $this->getProjects();

		// skills
		$resume['skills'] = $this->getSkills();

		// awards
		$resume['awards'] = $this->getAwards();

		return $resume;
	}

	public function mySkillset ()
	{
		return $this->getSkills();
	}

	/**
	 * get array of past jobs
	 * @return [type] return array of past jobs
	 */
	private function getJobs()
	{
		$jobs   = array();
		$jobs[] = array(
			'company'     => 'Cruise Planners',
			'where'       => 'Coral Springs, FL',
			'title'       => 'Web Developer',
			'years'       => 'October 2011 - Present',
			'description' => 'Became a web developer at Cruise Planners at my request. Most projects were team collaborations, with a few that I took on myself : PTO Management Tool, IT Ticket Help Desk system, myTrips, Main site redesign with admin interface (still a w.i.p.), etc.

In recent years, the design skills were brought back into play to help with new projects: creating wireframes, and eventually designing mockups to be used for development work.'
		);

		$jobs[] = array(
			'company'     => 'Cruise Planners',
			'where'       => 'Coral Springs, FL',
			'title'       => 'Q.A. Specialist',
			'years'       => 'October 2010 - October 2011',
			'description' => 'Began at Cruise Planners as a QA specialist, crash testing projects created by the developers.'
		);

		$jobs[] = array(
			'company'     => 'Juicy Results',
			'where'       => 'Boca Raton, FL',
			'title'       => 'Web Developer',
			'years'       => 'March 2010 - October 2010',
			'description' => 'Contracted by Juicy Results to handle the backend development projects for their clients’ websites. Most of these clients’ sites were built on either WordPress or ExpressionEngine. Some of the projects included building custom WordPress apps to be used with the templates created by the design team.'
		);

		$jobs[] = array(
			'company'     => 'DataNet Pro',
			'where'       => 'Boca Raton, FL',
			'title'       => 'Web Developer',
			'years'       => 'June 2009 - December 2009',
			'description' => 'Was hired by Datanet Pro along with a team of developers to build dynamic sites and templates to be used across an array of payday loan sites. Other projects included building custom facebook apps using FBML.'
		);

		 $jobs[] = array(
			'company'     => 'Suncoast Marketing',
			'where'       => 'Davie, FL',
			'title'       => 'eCommerce Coordinator',
			'years'       => 'August 2008 - June 2009',
			'description' => 'Brought onto the team to bring a web design option to a graphic design  company. Built a system for the company to have the option to go completely paperless, created a dynamic site builder to quickly and efficiently create sites for their customers.'
		);

		$jobs[] = array(
			'company'     => 'AequiCap',
			'where'       => 'Fort Lauderdale, FL',
			'title'       => 'Jr. Web Designer / Developer',
			'years'       => 'November 2006 - February 2008',
			'description' => 'My first occupation in the field. Initially starting as a web designer, worked closely with the marketing department to design page promotions. Once promoted to web developer, I was able to further my knowledge as well as standardize the way I code.'
		);

		// $jobs[] = array(
		// 	'company'     => '',
		// 	'where'       => '',
		// 	'title'       => '',
		// 	'years'       => '',
		// 	'description' => ''
		// );

		return $jobs;
	}

	/**
	 * get array of past schools
	 * @return [type] return array of past schools
	 */
	private function getEducation()
	{
		$education   = array();
		$education[] = array(
			'school' => 'Keiser University',
			'where'  => 'Fort Lauderdale, FL',
			'degree' => 'Associates of Science in Computer Graphics and Design',
			'years'  => '2003 - 2005',
		);
		return $education;
	}

	/**
	 * get array of past projects
	 * @return [type] return array of past projects with descriptions
	 */
	private function getProjects()
	{
		$projects = array();
		$projects = array(
			array(
				'project_title' => 'PTO Manager',
				'job'           => 'Cruise Planners',
				'description'   => 'Built an internal system used by the Cruise Planners employees to track their time off. Managers were able to manage, approve or modify their employees time buckets.'
			),

			array(
				'project_title' => 'MyTrips',
				'job'           => 'Cruise Planners',
				'description'   => 'Designed and assisted in the development of a sub-site meant for Cruise Planners’ agents’ clients (phew). This tool was built so that the clients would be able to track future/past trips as well as manage a 1-to-1 relationship with their agent.'
			),

			array(
				'project_title' => 'CruisePlanners.com',
				'job'           => 'Cruise Planners',
				'description'   => 'Redesigned and built a more efficient version of CruisePlanners.com, meant to take advantage of the new SEO standards presented by Google, as well as to separate the company’s brand from their agents’ sites.'
			),

			array(
				'project_title' => 'Cruise Planners Mobile Apps',
				'job'           => 'Cruise Planners',
				'description'   => 'Designed and assisted in the development of the Cruise Planners mobile apps (now currently available in both the Apple & Play Store). These apps were created to allow clients to easily book trips from their mobile devices. There’s an alternate app built for the agents to track their transactions with their clients.'
			),

			// array(
			// 	'project_title' => '',
			// 	'job'           => '',
			// 	'description'   => ''
			// ),
		);


		return $projects;
	}

	/**
	 * get array of skills
	 * @return [type] return array of skills
	 */
	private function getSkills()
	{
		$skills = array();
		$skills[] = "LAMP Stack Developer (Linux, Apache, MySQL, PHP)";
		$skills[] = "HTML5";
		$skills[] = "CSS3";
		$skills[] = "jQuery";
		$skills[] = "Prototype";
		$skills[] = "MVC Frameworks (Laravel, CakePHP, hardCORE)";
		$skills[] = "Sass";
		$skills[] = "Gulp";
		$skills[] = "Adobe Photoshop";
		$skills[] = "WordPress";

		return $skills;
	}

	/**
	 * get array of awards
	 * @return [type] return array of awards
	 */
	private function getAwards()
	{
		$awards   = array();
		$awards[] = "Graduated with honors (Cum Laude) from Keiser College";
		return $awards;
	}
}
