<?php
require_once(dirname(dirname(dirname(dirname( __FILE__ )))) . '/wp-load.php');
$seller_email=$_GET['email'];
$user_id=get_current_user_id();
$user=get_user_meta($user_id);
$user_email=$user['billing_email'][0];
$post_id=$_GET['id'];
$post=get_post($post_id);
$sid=$_GET['sid'];
$seller=get_user_meta($_GET['sid']);

$notifyold=unserialize($seller['_notifications'][0]);
echo var_dump($notifyold);
if (!is_array($notifyold)) {
$notifyold=array();
$notifyold[$user_id]=array();
echo var_dump($notifyold);
}
array_push($notifyold[$user_id],$post_id);
//$notifyold[$user_id]=$post_id;
echo var_dump($notifyold);

update_user_meta($sid,'_notifications',$notifyold);
/*$myboughtproducts=$user["_myboughtprod"][0];
echo var_dump($myboughtproducts);
echo "Fvg";
if (!is_array($myboughtproducts)) {
$myboughtproducts=array();
}
array_push($myboughtproducts,$post_id);
update_user_meta($user_id,'_myboughtprod',$myboughtproducts);
*/

$fname=$seller["billing_first_name"][0];
$lname=$seller["billing_last_name"][0];
$seller_address_1=$seller["billing_address_1"][0];
$seller_address_2=$seller["billing_address_2"][0];
$seller_email=$seller["billing_email"][0];
$seller_phone=$seller["billing_phone"][0];

$fname1=$user["billing_first_name"][0];
$lname1=$user["billing_last_name"][0];
$user_address_1=$user["billing_address_1"][0];
$user_address_2=$user["billing_address_2"][0];
$user_email=$user["billing_email"][0];
$user_phone=$user["billing_phone"][0];

$header_seller=array('Content-type: text/html','From: iitbazaar <admin@iitbazaar.com>');
$header_user=array('Content-type: text/html','From: iitbazaar <admin@iitbazaar.com>');


$productinfo=do_shortcode('[product id ="$post_id"]');
//product information 
$subject_seller="Demand for your product";
$subject_user="Awaiting for your reply";
$Messagetobuyer='<html><head></head><body>Product Information:<br>'.$productinfo.'<br><h2>Seller Information</h2>Name:'.$fname.' '.$lname.'<br>Address:'.$seller_address_1.' '.$seller_address_2.'<br>
 E-mail:'.$seller_email.'<br>Phone:'.$seller_phone.'<br></body></html>';
$Messagetoseller='<html><head></head><body>Buyer Need Attention<br>.Product Information:<br>'.$productinfo.'<br><h2>Buyer Information</h2>Name:'.$fname1.' '.$lname1.'<br>Address:'.$user_address_1.' '.$user_address_2.'<br>
 E-mail:'.$user_email.'<br>Phone:'.$user_phone.'<br></body></html>';
//wp_mail(to,subjedct,msg, heaDER,attac)
echo wp_mail($seller_email,$subject_seller,$Messagetoseller,$header_seller);
echo wp_mail($user_email,$subject_user,$Messagetobuyer,$header_user);
$prod_name=get_the_title( $post_id );

wp_redirect(site_url().'/wp-content/themes/enigma/buy.php?id="'.$post_id.'"&message="5"');
?>


