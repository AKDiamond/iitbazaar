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
function validateForm1() {
var y=0;
    var x = document.forms["skill"]["name"].value;
    if (x == null || x == "") {
        document.getElementById("namerr1").style="display:inline;color:red";
	y=1;
	 document.forms["skill"]["name"].style="border-color:red";
	window.scrollTo(300,0);	
	
    }
    
     var x = document.forms["skill"]["Discription"].value;
    if (x == null || x == "") {
        document.getElementById("discerr1").style="display:inline;color:red";
	y=1;
	document.forms["skill"]["Discription"].style="border-color:red";
	window.scrollTo(300,0);	
    }

    if(y==1){
    return false;}
}
function validateForm() {
var y=0;
    var x = document.forms["addproduct"]["name"].value;
    if (x == null || x == "") {
       
	y=1;
	 document.forms["addproduct"]["name"].style="border-color:red";
	window.scrollTo(300,0);	
	
    }
    
     var x = document.forms["addproduct"]["Discription"].value;
    if (x == null || x == "") {
        document.getElementById("discerr").style="display:inline;color:red";
	y=1;
	document.forms["addproduct"]["Discription"].style="border-color:red";
	window.scrollTo(300,0);	
    }
      var x = document.forms["addproduct"]["sp"].value;
    if (x == null || x == "") {
        document.getElementById("sperr").style="display:inline;color:red";
	y=1;
	document.forms["addproduct"]["sp"].style="border-color:red";
	window.scrollTo(400,0);	
    }
    
 var x = document.forms["addproduct"]["userfile"].value;
    if (x == null || x == "") {
        document.getElementById("imgerr").style="display:inline;color:red";
	y=1;

	window.scrollTo(400,0);	
    }
    
    if(y==1){
    return false;}
}

function readURL(input,y) {
var z =y.slice(1);
document.getElementById(z).style="display:block";

            if (input.files && input.files[0]) {
                var reader = new FileReader();
			   reader.onload = function (e) {
                    $(y)
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200)
                        .display(block);
                        
                };

                reader.readAsDataURL(input.files[0]);
		

            }}
			</script>


<?php

if (!is_user_logged_in()){
wp_redirect(site_url().'/my-account?id=1');}
else{
$user_id=get_current_user_id();
$billing_address_1=get_user_meta($user_id,'billing_address_1',true);
$billing_address_2=get_user_meta($user_id,'billing_address_2',true);
$n=NULL;
		if ($billing_address_1==($n || "")  || $billing_address_2==($n || "")) { 
wp_redirect(site_url().'/my-account/edit-profile?id=1');
}
		else {

get_header();
get_template('breadcrum');
 include ABSPATH.'/wp-includes/t.php';
 $id=$_GET['id'];
 if($id==1):
  ?>
<h2>ADD YOUR PRODUCT</h2>
<form name="addproduct" enctype="multipart/form-data" method="post" onsubmit="return validateForm()" action="<?php $a=site_url();
echo $a;?>/wp-content/themes/enigma/new.php"> 
  
   Product-Name: <input type="text" name="name"><span id="namerr" style="display:none">* Product Name can't be empty</span>
   <br><br>
   Discription: <textarea name="Discription" rows="5" cols="40"></textarea><span id="discerr" style="display:none">* Discription can't be empty</span>
   <br><br>
   Original-Price(₹): <input type="number" name="cp">
   <br><br>
   Selling-Price(₹): <input type="number" name="sp"><span id="sperr" style="display:none">* Selling-Price can't be empty</span>
   <br><br>
   Upload Product Images:<br>
   Thumbnail Image:
   <input type="file" name="userfile" id="userfile" onchange="readURL(this,'#blah0');"/><span id="imgerr" style="display:none">* Thumbnail Image can't be empty</span><br>
   <img id="blah0" alt="your image" height="0" src="#"/>
   <br><br>
   More Images:
   <input type="file" name="userfile1" id="userfile1" onchange="readURL(this,'#blah1');"/>
   <img id="blah1" src="#" alt="your image" height="0"/>
   <br><br>
   <input type="file" name="userfile2" id="userfile2" onchange="readURL(this,'#blah2');"/>
   <img id="blah2" src="#"  height="0" alt="your image" />
   <br><br>
   <input type="file" name="userfile3" id="userfile3"  onchange="readURL(this,'#blah3');"/>
   <img id="blah3" src="#"  height="0" alt="your image" />
   <br><br>
   <input type="file" name="userfile4" id="userfile4"  onchange="readURL(this,'#blah4');"/>
   <img id="blah4" src="#"  height="0" alt="your image" style= />
   <br><br>
   
   
   
   
Category:<select name="category" id="cat"  >
   <?php 

  $terms=get_terms('product_cat',array('parent'=>32,'hide_empty'=> false ));
 foreach ($terms as $x){
 echo '<option value="'.$x->name.'" >'.$x->name.'</option>';
 $subs=get_terms('product_cat',array('parent'=>$x->term_id,'hide_empty'=> false ));
$k=0;
   foreach ($subs as $y){
   
   echo '<option id="'.$x->name.$k.'"value="'.$y->name.'">-->'.$y->name.'</option>';
  
}}
 ?>
 
</select><br><br>


   <input type="submit" name="submit" value="Submit"> 
</form>

<?php elseif($id==2): ?>
<h2>Sell Your Skill</h2>
<form name="skill" enctype="multipart/form-data" method="post" onsubmit="return validateForm1()" action="<?php $a=site_url();
echo $a;?>/wp-content/themes/enigma/new.php"> 
  
   Skill: <input type="text" name="name" placeholder="e.g. web designer, tutor"><span id="namerr1" style="display:none">* Skill can't be empty</span>
   <br><br>
   Experience/Achievements:<br><textarea name="Discription" rows="5" cols="40"></textarea><span id="discerr1" style="display:none">* This can't be empty</span>
   <br><br>
Upload Your Resume:<input type="file" name="userfile1" id="userfile1"/>
  
   <br><br>

   <input type="submit" name="submit" value="Submit"> </form>

<?php elseif($id==3): ?>
<h2>Post a Job</h2>
<form name="vacancy" enctype="multipart/form-data" method="post" onsubmit="return validateForm1()" action="<?php $a=site_url();
echo $a;?>/wp-content/themes/enigma/new.php"> 
  
   Job-Title: <input type="text" name="name" placeholder="e.g. Graphic Designer "><span id="namerr2" style="display:none">* Skill can't be empty</span>
   <br><br>
   
  Job-Discription:<br><textarea name="Discription" rows="5" cols="40"></textarea><span id="discerr2" style="display:none">* This can't be empty</span>
<br><br>

   <input type="submit" name="submit" value="Submit"> </form>

<?php endif;}} ?>


<?php get_footer();?>

</body>
</html>