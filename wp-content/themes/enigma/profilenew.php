<?php 
require_once( dirname(dirname(dirname(dirname( __FILE__ )))) . '/wp-config.php' );
$en=$_GET['id'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
require_once( ABSPATH . 'wp-admin/includes/image.php' );
	require_once( ABSPATH . 'wp-admin/includes/file.php' );
	require_once( ABSPATH . 'wp-admin/includes/media.php' );
$fname=$_POST['fname'];
$hostel=$_POST['hostel'];
$room=$_POST['room'];
$phone=$_POST['phone'];
$user_id=get_current_user_id();
update_user_meta($user_id,'billing_first_name',$fname);
update_user_meta($user_id,'billing_address_1',$hostel);
update_user_meta($user_id,'billing_address_2',$room);
update_user_meta($user_id,'billing_phone',$phone);
	
$attachment_id = media_handle_upload( 'image',0 );

$imageurl= wp_get_attachment_url( $attachment_id );
echo $imageurl;
update_user_meta( $user_id, '_photo', $imageurl);
if ($en==0) {
wp_redirect(site_url()."/my-account/");
}
else {
wp_redirect(site_url()."/addproduct");
}
exit;
}
?>