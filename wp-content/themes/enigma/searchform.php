<script>
function search(){
var x=getElementById("s").value;
var s="http://iitbazaar.com/?s=";
s=s.concat(x,"&post_type=product");
getElementById("searchform").action=s;
}
</script>
<div class="input-group">
	 <form method="get" id="searchform" onsubmit="search()"> 	
		<input type="text" class="form-control"  name="s" id="s" placeholder="<?php esc_attr_e( "What do you want to find?", 'weblizar' ); ?>" />
<input type="hidden" name="post_type" value="product" />
		<span class="input-group-btn">
		<button class="btn btn-search" type="submit"><i class="fa fa-search"></i></button>
		</span>
	 </form> 
</div>