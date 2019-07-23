<?php
 session_start();
    $now = time();
 // checking the time now when home page starts
 
    if($now > $_SESSION['expire'])
 
    {
 
        session_destroy();
        header("Location:LOGIN1(exp).php");
 
    }

?>