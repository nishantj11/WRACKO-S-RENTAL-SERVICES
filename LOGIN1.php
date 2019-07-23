<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>WRACKO'S RENTAL</title>
<style type="text/css">
  form{
    width: 25%;
    margin: auto;
  }
  input{
    margin-bottom: 20px;
    padding: 10px;
    width: 90%;
    color: black;
    border-radius: 4px;
    background-color: #F5F5F5;
  }
  #but{
    width: 98%;
    background-color: skyblue;
    border-radius: 4px;
  }
  body{
    background-image: url("https://i.pinimg.com/originals/5e/b2/64/5eb264510ecb0501127adbaad9fbfa6a.jpg");
    background-size: cover;
        background-attachment: fixed;
  }
  label{
        font-weight: bold;
        color: #FFFAFA;
        text-shadow: 1px 1px 1px #000;
    }
    h1{
      color: #FFFAFA;
      text-shadow: 1px 1px 1px #000;
    }
</style>
</head>
<body>
  <div class="signup" style="margin: auto;">
    <form name="form"  action="login.php" method="POST">
      <h1 style="text-align: center;">SIGN IN</h1>
      <input type="email" name="mail" placeholder="Enter Email ID" required value="<?php 
        if (isset($_COOKIE['mail']) && isset($_COOKIE['password'])) {
          echo $_COOKIE['mail'];
        }
        else
        {
          echo "";
        }
      ?>"><br>
      <!--<label for="signup">Password</label><br>-->
      <input type="password" name="pwd" placeholder="Enter Password" value="<?php 
        if (isset($_COOKIE['mail']) && isset($_COOKIE['password'])) {
          echo $_COOKIE['password'];
        }
        else
        {
          echo "";
        }
      ?>" required ><br>
      <input id="but" type="submit" value="SIGN IN">
      <p class="new" style="text-align: center;">
    "New to site"<i>
    <a  href="signup.html" style="color: #113559;">Create an account</a></i>
  </p>
    </form>
  </div>
</body>
</html>