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
function pastcat(){
var item1= document.getElementById("cat").value;
var res=item1.concat('k');
var k= document.getElementById(res).value;
for(i=0;i<k;i++){
var result=item1.concat(i);
document.getElementById(result).style="display:none";

}}

function subcat(){
var item1= document.getElementById("cat").value;
document.getElementById("scat").value="";
var res=item1.concat('k');
var k= document.getElementById(res).value;
for(i=0;i<k;i++){
var result=item1.concat(i);
document.getElementById(result).style="display:block";

}
}
function readURL(input,y) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
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

if (!is_user_logged_in()){
wp_redirect(site_url().'/my-account/');}
else{
$user_id=get_current_user_id();
$billing_address_1=get_user_meta($user_id,'billing_address_1',true);


		if (! $billing_address_1) {
wp_redirect(site_url().'/my-account/edit-address');
}
		else {

get_header();
get_template('breadcrum');
 include ABSPATH.'/wp-includes/t.php'; }}?>
<h2>ADD YOUR PRODUCT</h2>
<form enctype="multipart/form-data" method="post" action="<?php $a=site_url();
echo $a;?>/wp-content/themes/enigma/new.php"> 
  
   Product-Name: <input type="text" name="name">
   <br><br>
   Discription: <textarea name="Discription" rows="5" cols="40"></textarea>
   <br><br>
   Original-Price(₹): <input type="number" name="cp">
   <br><br>
   Selling-Price(₹): <input type="number" name="sp">
   <br><br>
   Upload Product Images:<br><br>
   <input type="file" name="userfile" id="userfile" onchange="readURL(this,'#blah0');"/><BR><BR>
   <img id="blah0" alt="your image" src="#"/>
   <br><br>
   <input type="file" name="userfile1" id="userfile1" onchange="readURL(this,'#blah1');"/>
   <img id="blah1" src="#" alt="your image" />
   <br><br>
   <input type="file" name="userfile2" id="userfile2" onchange="readURL(this,'#blah2');"/>
   <img id="blah2" src="#" alt="your image" />
   <br><br>
   <input type="file" name="userfile3" id="userfile3"  onchange="readURL(this,'#blah3');"/>
   <img id="blah3" src="#" alt="your image" />
   <br><br>
   <input type="file" name="userfile4" id="userfile4"  onchange="readURL(this,'#blah4');"/>
   <img id="blah4" src="#" alt="your image" />
   <br><br>
   
   
   
   
Category:<select name="category" id="cat" onfocus="pastcat();"onchange="subcat();" >
   <?php 

  $terms=get_terms('product_cat',array('parent'=>NULL,'hide_empty'=> false ));
 foreach ($terms as $x){
 echo '<option value="'.$x->name.'" disabled>'.$x->name.'</option>';
 $subs=get_terms('product_cat',array('parent'=>$x->term_id,'hide_empty'=> false ));
$k=0;
   foreach ($subs as $y){
   
   echo '<option id="'.$x->name.$k.'"value="'.$y->name.'">-->'.$y->name.'</option>';
  
}}
 ?>
 
</select><br><br>


   <input type="submit" name="submit" value="Submit"> 
</form>
<?php get_footer();?>

</body>
</html>