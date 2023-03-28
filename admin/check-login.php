<?php
session_start();
// error_reporting(0);
include('include/db.php');

if(isset($_POST['submit'])){
	$email=$_POST['email'];
	$pass=$_POST['password'];
	


	if (empty($email) || empty($pass)){
		header("location: index.php?error=Email Or Pass required");

		exit();
	}else{
		$sql="SELECT * FROM admin WHERE admin_email='$email' AND admin_password='$pass'";
		$result= mysqli_query($con,$sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			if ($row['admin_email']===$email && $row['admin_password']===$pass) {
				$_SESSION['admin_email'] = $row['admin_email'];
				$_SESSION['admin_name'] = $row['admin_name'];
				$_SESSION['status'] = $row['status'];
				$_SESSION['id'] = $row['id'];
				header("location: index.php");
				exit();

			}else{
				header("location: index.php?error=Email Or Pass not valid");
				exit();
			}

		}else{
			header("location: index.php?error=Email Or Pass not-matched");
			exit();
		}
	}

}else{
	header("location: index.php");
 	exit();
}




?>