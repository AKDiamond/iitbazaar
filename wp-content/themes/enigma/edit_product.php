<!DOCTYPE HTML> 
<html>
<head>
<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<meta charset=utf-8 />

</head>
<body> 
<script> 	

function readURL(input , x ,y) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
				document.getElementById(x).style="display:none";
			   reader.onload = function (e) {
                    $(y)
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }}
			</script>


<?php
require_once(dirname(dirname(dirname(dirname( __FILE__ )))) . '/wp-load.php');
get_header();
get_template('breadcrum');
 include ABSPATH.'/wp-includes/t.php'; 
$post_id=$_GET["id"];
//echo $post_id;
//echo site_url();
$post=get_post($post_id);
$cuser=get_current_user_id();
$post_meta=get_post_meta( $post_id );
$flag=1;
if ($post->post_author==$cuser){
//echo var_dump($post_meta);
//echo var_dump(get_post_custom_values('regular_price_price', $post_id));
//echo var_dump(get_post_custom_values('sale_price', $post_id));
 

 $args = array(
   'post_type' => 'attachment',
   'numberposts' => -1,
   'post_status' => null,
   'post_parent' => $post_id
  );
$arr= array_fill(0, 5, NULL);
$i=0;
  $attachments = get_posts( $args );
     if ( $attachments ) {
	
	//echo var_dump($attachments);
        foreach ( $attachments as $attachment ) {
           //echo '<li>';
		   //echo $attachment->post_mime_type;
          if($attachment->post_mime_type=='image/jpeg'){
		  
		  $arr[$i]=wp_get_attachment_image( $attachment->ID, 'thumbnail' );
		  $i=$i+1;
		  //echo $i;
		//echo wp_get_attachment_image( $attachment->ID, 'thumbnail' );
          // echo '<p>';
          //echo apply_filters( 'the_title', $attachment->post_title );
          // echo '</p></li>';
          }}
     }
//ECHO $arr[0];
//ECHO $arr[1];
 }
 else{
 wp_redirect(site_url());
 }
 ?>

<h2>EDIT YOUR PRODUCT</h2>
<form enctype="multipart/form-data" method="post" action="<?php $a=site_url();
echo $a;?>/wp-content/themes/enigma/old.php?id=<?php echo $post_id ;?>"> 

   Product-Name: <input type="text" name="name" value="<?php echo $post->post_title;?>">
   <br><br>
   Discription: <textarea name="Discription" rows="5" cols="40" placeholder="<?php echo $post->post_content;?>"></textarea>
   <br><br>
   Original-Price(₹): <input type="number" name="cp" value="<?php echo $post_meta['regular_price'][0];?>">
   <br><br>
   Selling-Price(₹): <input type="number" name="sp" value="<?php echo $post_meta['sale_price'][0];?>">
   <br><br>
   <input type="file" name="userfile0" id="userfile0" onchange="readURL(this,'xyz0','#blah0');"/>
   <img id="blah0" src="#" alt="your image" />
	<div id="xyz0" style="display:block;">
    <?php 
       echo $arr[0];
    ?>
</div>
	
   
   <BR><BR>
      <input type="file" name="userfile1" id="userfile1" onchange="readURL(this,'xyz1','#blah1');" /> 
    <img id="blah1" src="#" alt="your image" />
	<div id="xyz1" style="display:block;">
    <?php 
       echo $arr[1];
    ?>
</div>
	
	
   <br><br>
    
      <input type="file" name="userfile2" id="userfile2" onchange="readURL(this,'xyz2','#blah2');"/>
   <img id="blah2" src="#" alt="your image" />
	<div id="xyz2" style="display:block;">
    <?php 
       echo $arr[2];
    ?>
</div>
   
    <BR><BR>
      <input type="file" name="userfile3" id="userfile3" onchange="readURL(this,'xyz3','#blah3');"/>
   <img id="blah3" src="#" alt="your image" />
	<div id="xyz3" style="display:block;">
    <?php 
       echo $arr[3];
    ?>
</div>
   <BR><BR>
     <input type="file" name="userfile4" id="userfile4" onchange="readURL(this,'xyz4','#blah4');"/>
   <img id="blah4" src="#" alt="your image" />
	<div id="xyz4" style="display:block;">
    <?php 
       echo $arr[4];
    ?>
</div>
  <br> <br>
Category:<select name="category">
  <option value="Books">Books</option>
  <option value="Lost+Found">Lost+Found</option>
<option value="Other">Other</option>
 <option value="Wanted">Wanted</option><option value=" Vehicles"> Vehicles</option><option value="Services">Services</option>
 <option value="Appliances">Appliances</option>
 
 

  <option value=" Electronics"> Electronics</option>

</select><br><br>
   <input type="submit" name="submit" value="Submit"> 
</form>
<?php
get_footer();
?>


</body>
</html>