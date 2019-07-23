<?php
session_start();

	$connect_mysql=mysqli_connect("localhost","root","","signup");
	if(!$connect_mysql)
	{
	    alert("Connection Failed" . mysqli_connect_error());
	}
	$mail=$_POST['mail'];
	$password=$_POST['pwd'];
	$ret="SELECT * FROM customers WHERE mail='$mail' AND password='$password'";
	$result=mysqli_query($connect_mysql,$ret);
			//$row = mysqli_fetch_assoc($ret);
		if (mysqli_num_rows($result) > 0) {
    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) {
						$_SESSION['mail'] = $row[mail];
						$_SESSION['password'] = $row[password];
						$_SESSION['start'] = time();
						$_SESSION['expire'] = $_SESSION['start'] + (1200);
					}
					setcookie('mail', $_POST['mail'], time()+1200);
	            setcookie('password', $_POST['pwd'], time()+1200);
	        
      
				header('location: Login1.php');
			}
			else{
				$message = "Invalid Username or Password! ";
				header("Location:Login1(inc).php");
			}
		
		
	
?>