<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Form for HOD login">
    <meta name="author" content="">
      
    <title>HOD Login</title>
  </head>

<body>
    
<?php
    include "header.php";
    if(! $dbcon )
    {
        echo '<div class="alert alert-danger" role="alert">';
        die("<strong>Could not connect:</strong> " . mysqli_connect_error());
        echo '</div><br>';
        
    }

    // Define $username and $password 
    $username=$_POST['user_name']; 
    $password=$_POST['password'];

    $sql="SELECT * FROM hod WHERE faculty_id='$username' and password='$password'";
    $result=mysqli_query($dbcon,$sql);
    if (!$result) {
        echo '<div class="alert alert-danger" role="alert">';
        printf("<strong>Error: %s</strong>\n", mysqli_error($dbcon));
        echo '</div><br>';
        exit();
    }
    

    $count=0;
    // Mysql_num_row is counting table row
    $count=mysqli_num_rows($result);


    // If result matched $username and $password, table row must be 1 row
    if($count==1)
    {
        session_start();
        $_SESSION['admin_id']=$username;
        $_SESSION['admin_pass']=$password;
        echo '<div class="alert alert-success" id="success" role="alert">';
        echo "<strong>Login Successful!</strong>";
        echo "<br></div>";
        header('Location: hodloginmenu.php');
    }
    else
    {
        echo '<div class="alert alert-danger" role="alert">';
        echo "<strong>Wrong Username or Password</strong>";
        echo ' <a href="hodloginform.php">Try again</a></div>';
        return false;
    }
?>
    </body>
</html>