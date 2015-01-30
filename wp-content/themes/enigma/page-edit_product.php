<!DOCTYPE HTML> 
<html>
<head>
abhishek;
</head>
<body> 

<h2>ADD YOUR PRODUCT</h2>
<form enctype="multipart/form-data" method="post" action="/wp-content/themes/enigma/new.php"> 
   Product-Name: <input type="text" name="name">
   <br><br>
   Discription: <textarea name="Discription" rows="5" cols="40"></textarea>
   <br><br>
   Original-Price(₹): <input type="number" name="cp">
   <br><br>
   Selling-Price(₹): <input type="number" name="sp">
   <br><br>
   <input type="file" name="userfile" id="userfile">
   <br><br>
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

</body>
</html>