<?php
require_once(dirname(dirname(dirname(dirname( __FILE__ )))) . '/wp-load.php');

if (is_user_logged_in()){
$user_id=get_current_user_id();
$billing_address_1=get_user_meta($user_id,'billing_address_1',true);


		if (! $billing_address_1) {
wp_redirect(site_url().'/my-account/edit-address');
}
		else {
		
get_header();
get_template('breadcrum');
 include ABSPATH.'/wp-includes/t.php'; 
 if (isset($_GET['message'])) {

	echo "The seller has been notified about your interest in the product.<br>";
	echo "Seller and product information has been sent to your email id.";
}
$post_id=$_GET["id"];
echo $post_id;
$post=get_post( $post_id );
echo do_shortcode('[product id='.$post_id.']');
$seller_id=$post->post_author ;
$seller=get_user_meta( $seller_id );
$fname=$seller["billing_first_name"][0];
$lname=$seller["billing_last_name"][0];
$seller_address_1=$seller["billing_address_1"][0];
$seller_address_2=$seller["billing_address_2"][0];
$seller_email=$seller["billing_email"][0];
$seller_phone=$seller["billing_phone"][0];
echo '<h2>Seller Information</h2>';
echo 'Name:'.$fname.' '.$lname.'<br>';
echo 'Address:'.$seller_address_1.' ';
echo $seller_address_2.'<br>';
echo 'E-mail:'.$seller_email.'<br>';
echo 'Phone:'.$seller_phone.'<br>';
echo '<a href="'.site_url().'/wp-content/themes/enigma/mail.php?email='.$seller_email.'&id='.$post_id.'&sid='.$seller_id.' "> Notify Seller </a>';
echo 'an email will be sent giving your information to seller';



}
}

else{
wp_redirect(site_url().'/my-account');
}?>