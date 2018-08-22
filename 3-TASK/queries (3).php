<?php
$host = 'localhost'; // server ip/host
$database = 'database'; // base name
$user = 'root'; // username
$password = ''; // pass

$query1 ="SELECT status,create_date FROM transactions WHERE email='enjey@gmail.com' AND amount='110'"; // query num 1 
$query2 ="SELECT (SUM(Monday)+SUM(Tuesday)+SUM(Wednesday)+SUM(Thursday)+SUM(Friday)+SUM(Saturday)+SUM(Sunday)) as `Total` FROM `test` WHERE 1"; // query num 2
// connect
$link = mysqli_connect($host, $user, $password, $database) 
    or die("error " . mysqli_error($link));
	
$res = mysqli_query($link, $query1) or die("error " . mysqli_error($link));	
while ($arr=mysqli_fetch_array ($res))
{
	echo $arr[0], $arr[1];// show info
}
echo "</br>";
$res = mysqli_query($link, $query2) or die("error " . mysqli_error($link));
while ($arr=mysqli_fetch_array ($res))
{
	echo $arr[0];// show info 
}

mysqli_close($link); // close connection	
?>