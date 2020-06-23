<html>
<head>
<script src="formvalidation.js"></script>
</head>
<body>
<?php
$t1=$_POST["t1"];
$t2=$_POST["q1"];
$t3=$_POST["q2"];
$t4=$_POST["q3"];
$t5=$_POST["q4"];


mysql_connect("localhost", "root","") or die (mysql_error());
$dbase_name="tourism";
mysql_select_db($dbase_name) or die (mysql_error());
$query="insert into feedback values('$t1','$t2','$t3','$t4','$t5')";
mysql_query($query) or die (mysql_error());
echo '<script language= "javascript">';
	echo 'alert("Feedback submitted successfully")';
	echo '</script>';
mysql_close();
?>
</body>
</html>
