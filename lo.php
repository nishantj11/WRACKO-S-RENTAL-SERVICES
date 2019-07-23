<?php


	$conn=mysqli_connect("localhost","root","","signup");
	if(!$conn)
	{
	    alert("Connection Failed" . mysqli_connect_error());
	}
	$mail=$_POST['mail'];
	$password=$_POST['pwd'];
	$ret="SELECT * FROM customer WHERE email='$mail' AND password='$password'";
		$result = mysqli_query($conn,$ret);
			//$row = mysqli_fetch_assoc($ret);
			if(mysqli_num_rows($result) > 0){
					echo $password;
			}
			else{
				header("Location:Login1(inc).php");
			}
			/*if(is_array($row)) {
				$_SESSION["mail"] = $row[mail];
				$_SESSION["password"] = $row[password];
				$_SESSION['start'] = time();
				$_SESSION['expire'] = $_SESSION['start'] + (1200) ;
			}
			else{
				$message = "Invalid Username or Password!";
				header("Location:Login1(inc).php");
			}
		}
		if(isset($_SESSION["mail"])) {
				setcookie('mail', $_POST['mail'], time()+60);
	            setcookie('password', $_POST['pwd'], time()+60);
	        
      
				header('location: homepage.php');
		}*/
	
?>