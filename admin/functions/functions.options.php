<?php

add_action('init','of_options');

if (!function_exists('of_options'))
{
	function of_options()
	{
		//Access the WordPress Categories via an Array
		$of_categories 		= array();
		$of_categories_obj 	= get_categories('hide_empty=0');
		foreach ($of_categories_obj as $of_cat) {
		    $of_categories[$of_cat->cat_ID] = $of_cat->cat_name;}
		$categories_tmp 	= array_unshift($of_categories, "Select a category:");

		//Access the WordPress Pages via an Array
		$of_pages 			= array();
		$of_pages_obj 		= get_pages('sort_column=post_parent,menu_order');
		foreach ($of_pages_obj as $of_page) {
		    $of_pages[$of_page->ID] = $of_page->post_name; }
		$of_pages_tmp 		= array_unshift($of_pages, "Select a page:");

		//Testing
		$of_options_select 	= array("one","two","three","four","five");
		$of_options_radio 	= array("one" => "One","two" => "Two","three" => "Three","four" => "Four","five" => "Five");

		//Sample Homepage blocks for the layout manager (sorter)
		$of_options_homepage_blocks = array
		(
			"disabled" => array (
				"placebo" 		=> "placebo", //REQUIRED!
				"block_one"		=> "Block One",
				"block_two"		=> "Block Two",
				"block_three"	=> "Block Three",
			),
			"enabled" => array (
				"placebo" 		=> "placebo", //REQUIRED!
				"block_four"	=> "Block Four",
			),
		);


		//Stylesheets Reader
		$alt_stylesheet_path = LAYOUT_PATH;
		$alt_stylesheets = array();

		if ( is_dir($alt_stylesheet_path) )
		{
		    if ($alt_stylesheet_dir = opendir($alt_stylesheet_path) )
		    {
		        while ( ($alt_stylesheet_file = readdir($alt_stylesheet_dir)) !== false )
		        {
		            if(stristr($alt_stylesheet_file, ".css") !== false)
		            {
		                $alt_stylesheets[] = $alt_stylesheet_file;
		            }
		        }
		    }
		}


		//Background Images Reader
		$bg_images_path = get_stylesheet_directory(). '/images/bg/'; // change this to where you store your bg images
		$bg_images_url = get_template_directory_uri().'/images/bg/'; // change this to where you store your bg images
		$bg_images = array();

		if ( is_dir($bg_images_path) ) {
		    if ($bg_images_dir = opendir($bg_images_path) ) {
		        while ( ($bg_images_file = readdir($bg_images_dir)) !== false ) {
		            if(stristr($bg_images_file, ".png") !== false || stristr($bg_images_file, ".jpg") !== false) {
		            	natsort($bg_images); //Sorts the array into a natural order
		                $bg_images[] = $bg_images_url . $bg_images_file;
		            }
		        }
		    }
		}


		/*-----------------------------------------------------------------------------------*/
		/* TO DO: Add options/functions that use these */
		/*-----------------------------------------------------------------------------------*/

		//More Options
		$uploads_arr 		= wp_upload_dir();
		$all_uploads_path 	= $uploads_arr['path'];
		$all_uploads 		= get_option('of_uploads');
		$other_entries 		= array("Select a number:","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19");
		$body_repeat 		= array("no-repeat","repeat-x","repeat-y","repeat");
		$body_pos 			= array("top left","top center","top right","center left","center center","center right","bottom left","bottom center","bottom right");

		// Image Alignment radio box
		$of_options_thumb_align = array("alignleft" => "Left","alignright" => "Right","aligncenter" => "Center");

		// Image Links to Options
		$of_options_image_link_to = array("image" => "The Image","post" => "The Post");


/*-----------------------------------------------------------------------------------*/
/* The Options Array */
/*-----------------------------------------------------------------------------------*/

// Set the Options Array
global $of_options;
$of_options = array();

				$of_options[] = array( 	"name" 		=> __('1 -Header options', 'myblog'),
						"type" 		=> "heading"
				);

				$of_options[] = array( 	"name" 		=> __('Attention', 'myblog'),
						"desc" 		=> "",
						"id" 		=> "attention",
						"std" 		=> __('Go to the <b>Themes > Customize </b> to adjust the header background, Favicon and header text color.', 'myblog'),
						"icon" 		=> true,
						"type" 		=> "info"
				);

				$of_options[] = array( 	"name" 		=> __(' Main title', 'myblog'),
						"desc" 		=> "",
						"id" 		=> "head_h1",
						"std" 		=> "",
						"type" 		=> "text"
				);

				$of_options[] = array( 	"name" 		=> __('Website logo', 'myblog'),
						"desc" 		=> "",
						"id" 		=> "nav_logo",
						"std" 		=> "",
						"type" 		=> "upload"
				);

				$of_options[] = array( 	"name" 		=> __('Header image', 'myblog'),
						"desc" 		=> "",
						"id" 		=> "head_logo",
						"std" 		=> "",
						"type" 		=> "upload"
				);

				$of_options[] = array( 	"name" 		=> __('Is the image to be round?', 'myblog'),
						"desc" 		=> "",
						"id" 		=> "head_logo_avatar_check",
						"std" 		=> 1,
						"on" 		=> __('Yes', 'myblog'),
						"off" 		=> __('No', 'myblog'),
						"type" 		=> "switch"
				);

				$of_options[] = array( 	"name" 		=> __('Short Description', 'myblog'),
						"desc" 		=> "",
						"id" 		=> "head_description",
						"std" 		=> "",
						"type" 		=> "textarea"
				);

				/* Option Page 2 - Show Articles */
				$of_options[] = array( 	"name" 		=> __('2 - Show Articles', 'myblog'),
						"type" 		=> "heading"
				);

				$project_column_array = array(2, 3, 4, 6);
				$of_options[] = array( 	"name" 		=> __('Projects archive', 'myblog'),
						"desc" 		=> __('Count of project to show', 'myblog'),
						"id" 		=> "project_column",
						"std" 		=> "2",
						"type" 		=> "select",
						"options" 	=> $project_column_array
				);

				$url =  get_stylesheet_directory_uri(). '/assets/images/';
				$of_options[] = array( 	"name" 		=> __('Theme color', 'myblog'),
						"desc" 		=> __('Select your theme color', 'myblog'),
						"id" 		=> "theme_color",
						"std" 		=> "main",
						"type" 		=> "images",
						"options" 	=> array(
							'main' => $url . 'main.png',
							'blue' => $url . 'blue.png',
							'green' => $url . 'green.png',
							'orange' => $url . 'orange.png',
							'flamingo' => $url . 'flamingo.png',
							'magenta' => $url . 'magenta.png'
						)
				);

				/* Option Page 3 - social networks */
				$of_options[] = array( 	"name" 		=> __('3 - Social networks', 'myblog'),
						"type" 		=> "heading"
				);

				$of_options[] = array( 	"name" 		=> __('Show on footer?', 'myblog'),
						"desc" 		=> "",
						"id" 		=> "foot_social_check",
						"std" 		=> 1,
						"on" 		=> __('Yes', 'myblog'),
						"off" 		=> __('No', 'myblog'),
						"type" 		=> "switch"
				);

				$of_options[] = array( 	"name" 		=> __('Google', 'myblog'),
						"id" 		=> "google",
						"std" 		=> "",
						"type" 		=> "text"
				);

				$of_options[] = array( 	"name" 		=> __('Facebook', 'myblog'),
						"id" 		=> "facebook",
						"std" 		=> "",
						"type" 		=> "text"
				);

				$of_options[] = array( 	"name" 		=> __('Instagram', 'myblog'),
						"id" 		=> "instagram",
						"std" 		=> "",
						"type" 		=> "text"
				);

				$of_options[] = array( 	"name" 		=> __('Twitter', 'myblog'),
						"id" 		=> "twitter",
						"std" 		=> "",
						"type" 		=> "text"
				);

				$of_options[] = array( 	"name" 		=> __('Youtube', 'myblog'),
						"id" 		=> "youtube",
						"std" 		=> "",
						"type" 		=> "text"
				);

				$of_options[] = array( 	"name" 		=> __('Flickr', 'myblog'),
						"id" 		=> "flickr",
						"std" 		=> "",
						"type" 		=> "text"
				);

				$of_options[] = array( 	"name" 		=> __('GitHub', 'myblog'),
						"id" 		=> "github",
						"std" 		=> "",
						"type" 		=> "text"
				);

				$of_options[] = array( 	"name" 		=> __('Linkedin', 'myblog'),
						"id" 		=> "linkedin",
						"std" 		=> "",
						"type" 		=> "text"
				);

				$of_options[] = array( 	"name" 		=> __('Stackoverflow', 'myblog'),
						"id" 		=> "stackoverflow",
						"std" 		=> "",
						"type" 		=> "text"
				);

				$of_options[] = array( 	"name" 		=> __('Pinterest', 'myblog'),
						"id" 		=> "pinterest",
						"std" 		=> "",
						"type" 		=> "text"
				);

				$of_options[] = array( 	"name" 		=> __('Feed', 'myblog'),
						"id" 		=> "feed",
						"std" 		=> "",
						"type" 		=> "text"
				);

				/* Option Page 4 - Footer footer */
				$of_options[] = array( 	"name" 		=> __('4 - Footer options', 'myblog'),
						"type" 		=> "heading"
				);

				$of_options[] = array( 	"name" 		=> __('Copyright text', 'myblog'),
						"id" 		=> "copyright_txt",
						"std" 		=> "",
						"type" 		=> "text"
				);

				$of_options[] = array( 	"name" 		=> __('Custom CSS style', 'myblog'),
						"desc" 		=> "",
						"id" 		=> "footer_style",
						"std" 		=> "",
						"type" 		=> "textarea"
				);

				$of_options[] = array( 	"name" 		=> __('Custom script', 'myblog'),
						"desc" 		=> "",
						"id" 		=> "footer_script",
						"std" 		=> "",
						"type" 		=> "textarea"
				);

				// Backup Options
				/*
				$of_options[] = array( 	"name" 		=> "Backup Options",
						"type" 		=> "heading",
						"icon"		=> ADMIN_IMAGES . "icon-slider.png"
				);

				$of_options[] = array( 	"name" 		=> "Backup and Restore Options",
						"id" 		=> "of_backup",
						"std" 		=> "",
						"type" 		=> "backup",
						"desc" 		=> 'You can use the two buttons below to backup your current options, and then restore it back at a later time. This is useful if you want to experiment on the options but would like to keep the old settings in case you need it back.',
				);

				$of_options[] = array( 	"name" 		=> "Transfer Theme Options Data",
						"id" 		=> "of_transfer",
						"std" 		=> "",
						"type" 		=> "transfer",
						"desc" 		=> 'You can tranfer the saved options data between different installs by copying the text inside the text box. To import data from another install, replace the data in the text box with the one from another install and click "Import Options".',
				);
				*/

	}//End function: of_options()
}//End chack if function exists: of_options()
?>
