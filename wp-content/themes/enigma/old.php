<?php
//include '/home/ajaymedaiims/public_html/wp-content/themes/enigma/functions.php; 
//    include '/home/ajaymedaiims/public_html/wp-includes/t.php'; 
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";


require_once( dirname(dirname(dirname(dirname( __FILE__ )))) . '/wp-config.php' );
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $name = test_input($_POST["name"]);
   $sp = test_input($_POST["sp"]);
   $cp = test_input($_POST["cp"]);
   $Discription = test_input($_POST["Discription"]);
  $category =$_POST["category"];
  
$user_ID = wp_get_current_user()->user_login;
$post_id=$_GET["id"];
echo $post_id;
$postnew=array (
'ID' => $post_id,
'post_type' => 'product',
'post_title' => $name,
'post_content' => $Discription,
'post_status' => 'publish',
'comment_status' => 'closed',   // if you prefer
'ping_status' => 'closed',      // if you prefer

);
wp_update_post($postnew);


//set product category
$a='product_cat';
wp_set_object_terms( $post_id, $category,$a, false );


//set prices and featured on , set product attributes :Seller
 update_post_meta( $post_id, 'regular_price', $cp );
  update_post_meta( $post_id, 'sale_price', $sp );
 
require_once( ABSPATH . 'wp-admin/includes/image.php' );
	require_once( ABSPATH . 'wp-admin/includes/file.php' );
	require_once( ABSPATH . 'wp-admin/includes/media.php' );
	

 $args = array(
   'post_type' => 'attachment',
   'numberposts' => -1,
   'post_status' => null,
   'post_parent' => $post_id,
   'post_mime_type' => 'image/jpeg'
  );
  $attachments = get_posts( $args );
  
     if ( $attachments ) {
	$x=0;

        foreach ( $attachments as $attachment ) {
           //echo '<li>';
		  
		   //echo $attachment->post_mime_type;
        if ($_FILES['userfile'.$x]['size']!=0) {
			wp_delete_attachment($attachment->ID);
			 echo $x;
			}$x++;}
			
			}
	
	
	
	
for($x=1; $x<5; $x++){
 if ($_FILES["userfile".$x]['size']!=0) {
$attachment_id = media_handle_upload( 'userfile'.$x, $post_id );
//echo $attachment_id->get_error_message();
$wp_upload_dir=wp_upload_dir();

echo var_dump($attachment_id);
$filename= wp_get_attachment_url($attachment_id);
echo $filename;


//echo $wp_upload_dir['path'] . '/' . basename( $filename );

$attachment = array(
  'guid'           => $wp_upload_dir['url'] . '/' . basename( $filename ), 
  'post_title'     => basename( $filename ),
  'post_content'   => '',
  'post_status'    => 'inherit'
);

   wp_insert_attachment( $attachment, $wp_upload_dir['path'] . '/' . basename( $filename ), $post_id );


}}
if ($_FILES["userfile0"]['size']!=0) {
$attachment_id = media_handle_upload( 'userfile0', $post_id );//REQUIRED !!!
set_post_thumbnail( $post_id, $attachment_id );}
//wp_redirect(site_url());
//exit;
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

$prod_name= get_the_title( $post_id );
wp_redirect(site_url().'/product/'.$prod_name.'/');
?>