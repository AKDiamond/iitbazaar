

<?php 
$post_id=$_GET['id'];
echo $post_id;
wp_delete_post($post_id);
wp_redirect('http://iitbazaar.com/shop/');
?>

