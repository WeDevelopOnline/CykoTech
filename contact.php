<?php
		
		include_once"dbconfig.php";
		$con=mysqli_connect('127.0.0.1','root','') or die('try again');
		$name=mysqli_real_escape_string($con,$_POST['name']);
		$email=mysqli_real_escape_string($con,$_POST['email']);
		$message=mysqli_real_escape_string($con,$_POST['message']);
		if ($name==NULL || $email == NULL || $message== NULL)
			die();
		$query="INSERT INTO `contactus`(`name`, `email`, `message`) VALUES ('$name','$email','$message')";
		$r=my_iud($query);
		if($r==1)
		{
			echo"<script>alert('Thank you for writing to us.. our team will soon be in touch with you. :)')</script>";
		}
		else
			echo"<script>alert('message not sent... please try in a little bit :(')</script>";
	
?>