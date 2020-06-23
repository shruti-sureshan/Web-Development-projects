<html>
<head>
<script src="formvalidation2.js"></script>
</head>
<?php
$s1=(mt_rand(1,100));
$t2=$_POST["room"];
$t3=$_POST["r"];
mysql_connect("localhost", "root","") or die (mysql_error());

$dbase_name="tourism";
mysql_select_db($dbase_name) or die (mysql_error());

$query="insert into package values('$s1','$t2','$t3')";
mysql_query($query) or die (mysql_error());
echo '<script>window.location="best.html"</script>';
mysql_close();
?>
</html>
