<?php
$server="52.60.109.91";
$db="db2";
$username="userDB2";
$pass="password";

$conn = mysqli_connect($server, $username, $pass, $db);

if (mysqli_connect_errno()){

	echo 'Failed to Connect :' . mysqli_connect_errno();

}
//else {
	//echo "Connected!";
//}
?>
