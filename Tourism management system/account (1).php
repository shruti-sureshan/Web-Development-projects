</body>
</html>
<?php

mysql_connect("localhost","root","") or die(mysql_error());
$db="tourism";
mysql_select_db($db) or die(mysql_error());
$t2=$_POST['t2'];
$t8=$_POST['t8'];

$q="select fname,pwd from customer where fname='$t2' and pwd='$t8' ";

$no_of_rows=mysql_num_rows(mysql_query($q));
#echo $no_of_rows;
if($no_of_rows==0){
	echo '<script language= "javascript">';
	echo 'alert("Incorrect Username or Password")';
	echo '</script>';
	echo '<a href="account.html">Enter correct username or password</a>';
	
}
else{
	echo '<script language= "javascript">';
	echo 'alert("Successfully Logged in!")';
	echo '</script>';
	echo '<a href="package.html">Select Package</a>';
}
?>
</body>
</html>