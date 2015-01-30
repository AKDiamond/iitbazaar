<?php 
require_once( dirname(dirname(dirname(dirname( __FILE__ )))) . '/wp-config.php' );
$post_id=$_GET['id'];
$en=$_GET['en'];
$post=get_post($post_id);
$user_id=get_current_user_id();
if($post->post_author==get_current_user_id()){

if($en==0){
//require_once( dirname(dirname(dirname(dirname( __FILE__ )))) . '/wp-load.php' );
get_header();
get_template('breadcrum');
include ABSPATH.'/wp-includes/t.php'; 
echo "Are you sure you want to delete this product?<br>";
echo do_shortcode('[product id='.$post_id.']');
echo '<a href="'.site_url().'/wp-content/themes/enigma/delete.php?id='.$post_id.'&en=1"><button type="button">Yes</button></a>';
$backurl=$_SERVER['HTTP_REFERER'];
echo '<a href="'.$backurl.'"><button type="button">No</button></a>';
}
else{
echo $post_id;
$args = array(
   'post_type' => 'attachment',
   'numberposts' => -1,
   'post_status' => null,
   'post_parent' => $post_id,
  // 'post_mime_type' => 'image/jpeg'
  );
  $attachments = get_posts( $args );
  
     if ( $attachments ) {
        foreach ( $attachments as $attachment ) {
           //echo '<li>';
		  
			wp_delete_attachment($attachment->ID);
			
			}

}

wp_delete_post($post_id);

$myprod=get_user_meta($user_id,'_myprod',true);

if(is_string($myprod)){$myprod=unserialize($myprod);}
foreach($myprod as $index=>$value){
if($value==$post_id){
unset($myprod[$index]);
break;}
}
update_user_meta($user_id,'_myprod',$myprod);
wp_redirect(site_url().'/my-account/?id=0');
exit;}}
?>

