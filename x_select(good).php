<?php
 
(isset($_POST["company"])) ? $theCompany = $_POST["company"] : $theCompany=1;
 
?>

 <!-- EXAMPLE -->
<form>
<select id="company" name="company">
<option <?php if ($theCompany == 1 ) echo 'selected' ; ?> value="1">Apple</option>
<option <?php if ($theCompany == 2 ) echo 'selected' ; ?> value="2">Samsung</option>
<option <?php if ($theCompany == 3 ) echo 'selected' ; ?> value="3">HTC</option>
</select>
</form>

