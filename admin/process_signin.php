<?php 

$email = $_POST['email'];
$password = $_POST['pass'];
require_once 'connect.php';

$sql = "select * from users
where email = '$email' and password = '$password'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) == 1){
	$each = mysqli_fetch_array($result);
	session_start();

	$_SESSION['id'] = $each['id'];
	$_SESSION['name'] = $each['name'];
	$_SESSION['level'] = $each['level'];

	header('location:root/index.php');
	exit;
}

header('location:index.php');