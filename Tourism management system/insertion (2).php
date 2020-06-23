<html>
<head>
<script src="formvalidation.js"></script>
</head>
<body>
<?php
$t1=(mt_rand(1,100));
$t2=$_POST["t2"];
$t3=$_POST["t3"];
$t4=$_POST["t4"];
$t5=$_POST["t5"];
$t6=$_POST["t6"];
$t7=$_POST["t7"];
$t8=$_POST["t8"];

mysql_connect("localhost", "root","") or die (mysql_error());
$dbase_name="tourism";
mysql_select_db($dbase_name) or die (mysql_error());
$query="insert into customer values('$t1','$t2','$t3','$t4','$t5','$t6','$t7','$t8')";
mysql_query($query) or die (mysql_error());
echo '<script language= "javascript">';
	echo 'alert("Account created successfully")';
	echo '</script>';
echo '<script>window.location="account.html"</script>';

mysql_close();
?>
</body>
</html>


