<?php
require_once(dirname(dirname(dirname(dirname( __FILE__ )))) . '/wp-load.php');
get_header(); 
//get_template_part('breadcrums'); 
include ABSPATH.'wp-includes/t.php'; 
	
$user_id=$_GET['id'];
$imageurl=get_user_meta($user_id,'_photo',true);
$userclass=get_user_by('id',$user_id);
//echo var_dump($imageurl);
$first_name=$userclass->first_name;
$login=$userclass->user_login;
if(!$first_name==""){
 echo "<h2>".$first_name."</h2>";}
else{echo "<h2> ".$login."</h2>";}

echo '<img src="'.$imageurl.'" height="100" width="80">';
echo "<br>";
echo "Buyer's Information:<br>";
$user=get_user_meta( $user_id );
$fname=$user["billing_first_name"][0];
$lname=$user["billing_last_name"][0];
$user_address_1=$user["billing_address_1"][0];
$user_address_2=$user["billing_address_2"][0];
$user_email=$user["billing_email"][0];
$user_phone=$user["billing_phone"][0];	

echo 'Name:'.$fname.' '.$lname.'<br>';
echo 'Address:'.$user_address_1.' ';
echo $user_address_2.'<br>';
echo 'E-mail:'.$user_email.'<br>';
echo 'Phone:'.$user_phone.'<br>';
 