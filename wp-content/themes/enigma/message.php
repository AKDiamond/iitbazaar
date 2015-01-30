<?php
//require_once(dirname( __FILE__ ) . '/wp-load.php');
//get_header();
//include ABSPATH.'/wp-includes/t.php'; 

$tem=$_GET['id'];
//$tem=get_post($tem);
switch ($tem){
case 1:
	echo "Your product has been successfully added. It will up on iitbazaar within 24 hours.";
	//PRODUCT ADDED
	break;
case 2:
	echo "Your product has been successfully edited. You can view the changes here";
//EDIT PRODUCT. 
//GET PRODUCT ID And Redirection link
	break;

case 3:

	echo "Your profile has been successfully updated.";
	break;

case 4:

	echo "Your product has been successfully deleted.";
	break;

case 5:

	echo "The seller has been notified about your interest in the product.<br>";
	echo "Seller and product information has been sent to your email id.";
	break;
}

?>