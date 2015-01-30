<?php
foreach($images as $oneImage){
?>
<div class="uploaded_images">
    <div class="div_110px_width">
        <img src="<?php echo $plugins_url;?>/wp-image-uploader/includes/thumb.php?src=<?php echo $oneImage['location'];?>&w=100&h=100" style="border: 1px solid #000;"><br>
        <center><b>Dimensions:<br> </b> <?php echo $oneImage['maxwidth'];?> x <?php echo $oneImage['height'];?> px</center>
    </div>
    <div class="div_100perc_width">
        
        Direct URL:<br>
        <input type="text" style="width:100%" value="<?php echo $oneImage['location'];?>"><br>
        HTML code:<br>
        <input type="text" style="width:100%" value="<img src='<?php echo $oneImage['location'];?>'>"><br>
        BB Code:<br>
        <input type="text" style="width:100%" value="[img]<?php echo $oneImage['location'];?>[/img]">

        
    </div>
</div>
<?php
}
?>

<hr>
<a href="http://<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>">Upload more!</a>