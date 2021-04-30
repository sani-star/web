<?php
session_start();    
require 'koneksi.php';

$username = $_POST["username"];
$password = $_POST["password"];
// $level = $_POST["level"];

$sql = "select * from user where username='".$username."' and password='".$password."' limit 1";
$hasil = mysqli_query($kon,$sql);
$jumlah = mysqli_num_rows($hasil);


	if ($jumlah>0) {
		$row = mysqli_fetch_assoc($hasil);
		// $_SESSION["nama"]=$row["nama"];
		// $_SESSION["username"]=$row["username"];
		// $_SESSION["level"]=$row["level"];
        // $_SESSION['status'] = "login";
	    header("location: isi/index.php");
	
		
	}else {
        header("location:index.html");
        
	}
?>