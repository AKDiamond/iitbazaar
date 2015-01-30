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
+
                reader.readAsDataURL(input.files[0]);
            }}
			</script>

<?php 
get_header();
    include ABSPATH.'wp-includes/t.php'; 
	require_once(dirname(dirname(dirname(dirname( __FILE__ )))) . '/wp-load.php');
if (isset($_GET['id'])) {
$fid=1;
}
else {
$fid=0;
}
echo '<h2>Edit-Profile</h2>';
$id=get_current_user_id();
$usermeta=get_user_meta($id);
$hostel=$usermeta['billing_address_1'][0];
$room=$usermeta['billing_address_2'][0];
$phone=$usermeta['billing_phone'][0];
$fname=$usermeta['billing_first_name'][0];
$photo=$usermeta['_photo'][0];
if($fname==""){
$fname=get_userdata($id)->first_name;
}


?>




<form enctype="multipart/form-data"  action="<?php echo site_url();?>/wp-content/themes/enigma/profilenew.php?id=<?php echo $fid;?>" method="post" >

First Name:<input type="text" name="fname" value="<?php echo $fname;?>" required><br><br>

Hostel/Apartment:<input type="text" name="hostel" value="<?php echo $hostel;?>" required><br><br>

Room:<input type="text" name="room" value="<?php echo $room;?>" required><br><br>

Phone:<input type="number"name="phone" value="<?php echo $phone;?>"><br><br>

Upload Profile Picture:<input type="file" name="image" id="image" onchange="readURL(this,'xyz1','#blah1');" /> 
    <img id="blah1" src="#" alt="your image" />
<br>
<div id="xyz1" style="display:block">
<?php echo '<img src="'.$photo.'"height="80" width="80">';?></div>

<input type="submit" value="Edit Profile" name="submit">

</form>
