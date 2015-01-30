<?php 
require_once(dirname(dirname(dirname(dirname( __FILE__ )))) . '/wp-load.php');
$user_id=$_GET['id'];
$buyer_id=$_GET['bid'];
$prod_id=$_GET['pid'];
$products=unserialize(get_user_meta($user_id)['_notifications'][0]);
$prods=$products[$buyer_id];
echo var_dump($products);
foreach ($prods as $index=>$value) {
if ($value==$prod_id) {
unset($prods[$index]);
}
}
$products[$buyer_id]=$prods;
update_user_meta($user_id,'_notifications',$products);
wp_redirect(site_url().'/my-account');
?>