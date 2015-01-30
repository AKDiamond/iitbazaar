<?php 

require_once(dirname(dirname(dirname(dirname( __FILE__ )))) . '/wp-load.php');
get_header();
    include ABSPATH.'wp-includes/t.php'; 

$category=$_GET["cat"];
echo do_shortcode('[jigoshop_category slug='.$category.' per_page="8" pagination="yes" columns="3"]');
