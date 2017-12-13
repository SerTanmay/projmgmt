<?php
    
	session_start();
        
    if($_SESSION['name']=="")
    {
        header("Location: welcome.php");
    }
        
    include "header.php";
?>