<?php
mysql_connect("localhost","root","") or die(mysql_error());
$dbase_name="tourism";
mysql_select_db($dbase_name) or die(mysql_error());
$t=$_POST['t1'];
$newpassword=$_POST['t8'];
$query= "update customer set pwd='$newpassword' where cid='$t' ";
mysql_query($query) or die(mysql_error());
echo '<script language= "javascript">';
	echo 'alert("Account updated successfully")';
	echo '</script>';
echo '<script>window.location="account.html"</script>';
mysql_close();
?>
