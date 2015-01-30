<?php get_header(); 
        include ABSPATH.'wp-includes/t.php'; 
	require_once(dirname(dirname(dirname(dirname( __FILE__ )))) . '/wp-load.php');
 
 if (isset($_GET['id']) && !is_user_logged_in()) {
	if ($_GET['id']==1){
	echo "You have to create the account first to add the product. Please login/register<br>";
	}
	}
	

 if (isset($_GET['id']) && is_user_logged_in()) {
 if ($_GET['id']==1){
 wp_redirect(site_url().'/addproduct');
 }
 }
 
echo do_shortcode( '[wppb-login]' );
if(!is_user_logged_in()){
	
	echo do_shortcode( '[wppb-recover-password]');
	echo '<br><br>';
	echo do_shortcode( '[wppb-register]' );
	
}
else
{
if(isset($_GET['id'])){
if($_GET['id']==0)
{
echo "Your Product Has Been Successfully Deleted.";
}
}

$user_id=get_current_user_id();
$user=get_userdata($user_id );
$imageurl=get_user_meta($user_id,'_photo',true);
if($imageurl==''){

$imageurl=site_url()."/wp-content/uploads/2014/12/avtar12.png";
update_user_meta($user_id,'_photo',$imageurl);
}
$first_name=$user->first_name;
$login=$user->user_login;
if(!$first_name==""){
 echo "<h2>Hi! ".$first_name."</h2>";}
else{echo "<h2>Hi! ".$login."</h2>";}


echo '<img src="'.$imageurl.'" height="100" width="80">';
echo "<br>";
echo "<a href=".site_url()."/my-account/edit-profile>Edit your Profile</a>";
echo "<h3>Notifications</h3>";
	 
$notifications=(get_user_meta($user_id,'_notifications',true ));
if (is_string($notifications)) {
$notifications=unserialize($notifications);
}

//echo var_dump($notifications);
if($notifications){
foreach($notifications as $id=>$arrpost){
foreach($arrpost as $notes) 
{
$buyer=get_userdata($id);
$buyername=$buyer->first_name;
$product=get_post($notes);
$pdt_name=$product->post_title;
$link=get_permalink($notes);
$message='<a href="'.site_url().'/wp-content/themes/enigma/viewprofile.php?id='.$id.' ">'.$buyername.'</a> wants to buy your product <a href="'.$link.'">'.$pdt_name.'</a>';
echo $message.' ';
echo '<a href="'.site_url().'/wp-content/themes/enigma/deletenotes.php?id='.$user_id.'&bid='.$id.'&pid='.$notes.'" ><button type="button">Delete Notification</button></a><br>';

}
}
}
else {
echo "No notifications";
}
$products=get_user_meta($user_id,'_myprod',true);
if (is_string($products)) {
$products=unserialize($products);
}

echo "<h3>My Products</h3>";
//echo var_dump($products);
if(! is_array($products)){echo "You haven't added any products yet";}
else{
$str = implode (", ", $products);	
//echo var_dump($str);
//echo sizeof($products);
/*if (sizeof($products)==1) {
echo do_shortcode('[product id='.$products[0].']');
}
else {
echo do_shortcode('[products ids="'.$str.'"]');
}*/
for ($i=0;$i<sizeof($products);$i++) {
echo do_shortcode('[product id='.$products[$i].']');
}


}
/*
echo "<h3>My Bought Products</h3>";
//echo var_dump($products);
//$products1=get_user_meta($user_id,'_myboughtprod',true);
//echo var_dump($products1);


echo var_dump($products1);
if(!is_array($products1)){echo "You haven't bought any products yet";}
else{
$str1 = implode (", ", $products1);	
echo do_shortcode('[products ids="'.$str1.'"]');}
*/



}

get_footer();

?> 
</body>
</html>