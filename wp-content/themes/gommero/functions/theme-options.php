<?php

add_action('init', 'of_options');

if (!function_exists('of_options')) {

    function of_options() {
        // VARIABLES
        $themename = function_exists('wp_get_theme') ? wp_get_theme() : get_current_theme();
        $themename = $themename['Name'];
        $shortname = "of";
        //Front page on/off
        $file_rename = array("on" => "On", "off" => "Off");
        // Test data
        $test_array = array("one" => "One", "two" => "Two", "three" => "Three", "four" => "Four", "five" => "Five");

        // Multicheck Array
        $multicheck_array = array("one" => "French Toast", "two" => "Pancake", "three" => "Omelette", "four" => "Crepe", "five" => "Waffle");

        // Multicheck Defaults
        $multicheck_defaults = array("one" => "1", "five" => "1");

        // Background Defaults

        $background_defaults = array('color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll');


        // Pull all the categories into an array
        $options_categories = array();
        $options_categories_obj = get_categories();
        foreach ($options_categories_obj as $category) {
            $options_categories[$category->cat_ID] = $category->cat_name;
        }

        // Pull all the pages into an array
        $options_pages = array();
        $options_pages_obj = get_pages('sort_column=post_parent,menu_order');
        $options_pages[''] = 'Select a page:';
        foreach ($options_pages_obj as $page) {
            $options_pages[$page->ID] = $page->post_title;
        }

        // If using image radio buttons, define a directory path
        $imagepath = get_template_directory_uri() . '/images/';

        $options = array(
            array("name" => "General Settings",
                "type" => "heading"),
            array("name" => "Custom Logo",
                "desc" => "Choose your own logo. Optimal Size: 170px Wide by 30px Height",
                "id" => "gommero_logo",
                "type" => "upload"),
            array("name" => "Custom Favicon",
                "desc" => "Specify a 16px x 16px image that will represent your website's favicon.",
                "id" => "gommero_favicon",
                "type" => "upload"),
            array("name" => "Enable Custom Front Page",
                "desc" => "Overrides the WordPress <a href='".admin_url('/options-reading.php')."'>front page option</a>",
                "id" => "re_nm",
                "std" => "on",
                "type" => "radio",
                "options" => $file_rename),           
//****=============================================================================****//
//****-----------This code is used for creating slider settings--------------------****//							
//****=============================================================================****//						
            array("name" => "Home Page Image Settings",
                "type" => "heading"),
            array("name" => "Home Page Image",
                "desc" => "Choose Image for your Home Page Image. Optimal Size: 900px x 350px",
                "id" => "gommero_slideimage1",
                "std" => "",
                "type" => "upload"),
            array("name" => "Home Page Image Link",
                "desc" => "Enter your link url for Home Page Image",
                "id" => "gommero_slidelink1",
                "std" => "",
                "type" => "text"),
//****=============================================================================****//
//****-----------This code is used for creating home page feature content----------****//							
//****=============================================================================****//	
            array("name" => "Home Page Settings",
                "type" => "heading"),
            array("name" => "Home Page Intro",
                "desc" => "Enter your heading text for home page",
                "id" => "gommero_mainheading",
                "std" => "",
                "type" => "textarea"),
            //***Code for first column***//
            array("name" => "First Feature Image",
                "desc" => "Choose image for your feature column first. Optimal size 198px x 115px",
                "id" => "gommero_fimg1",
                "std" => "",
                "type" => "upload"),
            array("name" => "First Feature Heading",
                "desc" => "Enter your heading line for first column",
                "id" => "gommero_headline1",
                "std" => "",
                "type" => "textarea"),
            array("name" => "First Feature Link",
                "desc" => "Enter your link for feature column first",
                "id" => "gommero_link1",
                "std" => "",
                "type" => "text"),
            array("name" => "First Feature Content",
                "desc" => "Enter your feature content for column first",
                "id" => "gommero_feature1",
                "std" => "",
                "type" => "textarea"),
            //***Code for second column***//	
            array("name" => "Second Feature Image",
                "desc" => "Choose image for your feature column second. Optimal size 198px x 115px",
                "id" => "gommero_fimg2",
                "std" => "",
                "type" => "upload"),
            array("name" => "Second Feature Heading",
                "desc" => "Enter your heading line for second column",
                "id" => "gommero_headline2",
                "std" => "",
                "type" => "textarea"),
            array("name" => "Second Feature Link",
                "desc" => "Enter your link for feature column second",
                "id" => "gommero_link2",
                "std" => "",
                "type" => "text"),
            array("name" => "Second Feature Content",
                "desc" => "Enter your feature content for column second",
                "id" => "gommero_feature2",
                "std" => "",
                "type" => "textarea"),
            //***Code for third column***//	
            array("name" => "Third Feature Image",
                "desc" => "Choose image for your feature column thrid. Optimal size 198px x 115px",
                "id" => "gommero_fimg3",
                "std" => "",
                "type" => "upload"),
            array("name" => "Third Feature Heading",
                "desc" => "Enter your heading line for third column",
                "id" => "gommero_headline3",
                "std" => "",
                "type" => "textarea"),
            array("name" => "Third Feature Link",
                "desc" => "Enter your link for feature column third",
                "id" => "gommero_link3",
                "std" => "",
                "type" => "text"),
            array("name" => "Third Feature Content",
                "desc" => "Enter your feature content for third column",
                "id" => "gommero_feature3",
                "std" => "",
                "type" => "textarea"),
            array("name" => "Posts On Front Page",
                "desc" => "Check if you want to show latest posts on front page.",
                "id" => "gommero_post_front",
                "std" => "1",
                "type" => "checkbox"),
//****=============================================================================****//
//****-----------This code is used for creating custom css options----------****//							
//****=============================================================================****//				
            array("name" => "Styling Options",
                "type" => "heading"),
            array("name" => "Custom CSS",
                "desc" => "Quickly add some CSS to your theme by adding it to this block.",
                "id" => "gommero_customcss",
                "std" => "",
                "type" => "textarea"),
//****=============================================================================****//
//****-----------This code is used for creating Social Options--------------****//							
//****=============================================================================****//
            array("name" => "Social Network Icons",
                "type" => "heading"),
            array("name" => "Facebook URL",
                "desc" => "Enter your Facebook URL if you have one",
                "id" => "gommero_facebook",
                "std" => "",
                "type" => "text"),
            array("name" => "Twitter URL",
                "desc" => "Enter your Twitter URL if you have one",
                "id" => "gommero_twitter",
                "std" => "",
                "type" => "text"),
            array("name" => "RSS URL",
                "desc" => "Enter your RSS Feed URL if you have one",
                "id" => "gommero_rss",
                "std" => "",
                "type" => "text"));

        gommero_update_option('of_template', $options);
        gommero_update_option('of_themename', $themename);
        gommero_update_option('of_shortname', $shortname);
    }

}
?>
