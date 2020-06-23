<html>
<head>
<script src="formvalidation2.js"></script>
</head>
<?php
$t1=(mt_rand(1,100));
$t2=$_POST["source"];
$t3=$_POST["destination"];
$t4=$_POST["depart"];
$t5=$_POST["return"];
mysql_connect("localhost", "root","") or die (mysql_error());

$dbase_name="tourism";
mysql_select_db($dbase_name) or die (mysql_error());

$query="insert into Destination values('$t1','$t2','$t3','$t4','$t5')";
mysql_query($query) or die (mysql_error());
echo '<script>window.location="package.html"</script>';
mysql_close();
?>
</html>
