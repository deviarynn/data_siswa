<?php
require "koneksi.php";

$username 	= $_POST['userName'];
$pwd   	= $_POST['password'];

$query  = mysqli_query( $connection, "SELECT * FROM tbl_users WHERE userName='$username' AND password='$pwd'");
$hitung = mysqli_num_rows($query);
$data   = mysqli_fetch_array($query);

if ($hitung > 0){
	session_start();
	$_SESSION['userName'] = $data['userName'];
	$_SESSION['password'] = $data['password'];
	
	header('Location:header.php'); 
}else{
   echo "<script>alert('GAGAL! Silakan Ulangi Lagi'); window.location = 'login.php'</script>";
}
?>