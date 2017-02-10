<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

// model(s)
use App\Models\Page;

class PageController extends Controller
{
    public function getPage ($slug = "")
    {
        $page       = new Page;
        $page_title = "Home";
        $misc       = "";

    	switch ($slug) {
    		case "about-me":
    			$page_title = "About Me";
                $misc       = $page->mySkillset();
    			break;

    		case "past-work":
                $page_title = "Past Work";
                $misc       = $page->pastWork();
    			break;
    			
    		case "resume":
                $page_title = "Resume";
                $misc       = $page->resumeDetails();

                // dd($misc);
    			break;
    	}

    	$page_data = array(
			'page_name' => $page_title,
			'slug'      => $slug,
            'misc'      => $misc,
    	);
    	return view('interior')->with('data', $page_data);
    }

    public function loadImages ($dir = "")
    {

        $path     = public_path();
        $images   = array();
        $dont_add = array(".", "..");

        if ($handle = opendir($path . '/images/past-work/' . $dir)) {
            while (false !== ($entry = readdir($handle))) {
                if(!in_array($entry, $dont_add)) {
                    $images[] = $entry;
                }
            }
        }

        $images = $images;
        return $images;
    }
}
