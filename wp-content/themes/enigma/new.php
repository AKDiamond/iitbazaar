<?php
//include '/home/ajaymedaiims/public_html/wp-content/themes/enigma/functions.php; 
//    include '/home/ajaymedaiims/public_html/wp-includes/t.php'; 
// define variables and set to empty values
require_once(dirname(dirname(dirname(dirname( __FILE__ )))) . '/wp-load.php');
get_header();
include ABSPATH.'/wp-includes/t.php'; 

$name = $email = $gender = $comment = $website = "";


require_once( dirname(dirname(dirname(dirname( __FILE__ )))) . '/wp-config.php' );
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $name = test_input($_POST["name"]);
   $sp = test_input($_POST["sp"]);
   $cp = test_input($_POST["cp"]);
   $Discription = test_input($_POST["Discription"]);
  $category =$_POST["category"];
  
$user_ID = wp_get_current_user()->user_login;
$user_id=get_current_user_id();

$post_id = wp_insert_post(array (
'post_type' => 'product',
'post_title' => $name,
'post_content' => $Discription,
'post_status' => 'publish',
'comment_status' => 'closed',   // if you prefer
'ping_status' => 'closed',      // if you prefer

));

//set product category
$a='product_cat';
$term=get_terms('product_cat',array('search'=>$category ));
$parent=$term[0]->parent;
$parentname=get_term( $parent, 'product_cat')->name;
wp_set_object_terms( $post_id, array($category,$parentname),$a, false );


$old=get_user_meta($user_id,'_myprod',true);
//echo var_dump($old);
//echo "cool";
if (is_string($old)) {
$old=unserialize($old);
}
if (is_array($old)) {
array_push($old,$post_id);
}
else {
	$old=array();
	array_push($old,$post_id);
		}
//echo var_dump($old);
update_user_meta( $user_id, '_myprod', $old);


//set prices and featured on , set product attributes :Seller
 update_post_meta( $post_id, 'regular_price', $cp );
  update_post_meta( $post_id, 'sale_price', $sp );
  update_post_meta( $post_id, 'featured', '1' );  
 

require_once( ABSPATH . 'wp-admin/includes/image.php' );
	require_once( ABSPATH . 'wp-admin/includes/file.php' );
	require_once( ABSPATH . 'wp-admin/includes/media.php' );
	

for($x=1; $x<5; $x++){
 if ($_FILES["userfile".$x]['size']!=0){
$attachment_id = media_handle_upload( 'userfile'.$x, $post_id );
//echo $attachment_id->get_error_message();
$wp_upload_dir=wp_upload_dir();
$filename=  wp_get_attachment_url($attachment_id);
//echo $wp_upload_dir['path'] . '/' . basename( $filename );

$attachment = array(
  'guid'           => $wp_upload_dir['url'] . '/' . basename( $filename ), 
  
  'post_title'     => basename( $filename ),
  'post_content'   => '',
  'post_status'    => 'inherit'
//  'post_mime_type' => 'image/jpeg'
);

   wp_insert_attachment( $attachment, $wp_upload_dir['path'] . '/' . basename( $filename ), $post_id );

}
}
$attachment_id = media_handle_upload( 'userfile', $post_id ); //compulsory 
set_post_thumbnail( $post_id, $attachment_id );
//wp_redirect(site_url().'/message?id=1');
echo '<br style="color:blue;margin-left:30px;">Your product has been succesfully created. It will be up on the site within 24 hrs.<br>';
echo "Your product information is:<br>";
echo "product name= ".$name."<br>";
echo "Original price= ".$cp."<br>";
echo "Selling price= ".$sp."<br>";
echo "Discription:<br>		 ".$Discription."<br>";
echo "Category:	".$category."<br>";
echo '<a href="'.site_url().'/my-account">Click here to return to homepage</a>';
exit;
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}


?>