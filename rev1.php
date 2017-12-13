<!DOCTYPE html>
<html lang="en">
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<link rel="icon" href="bootstrap-3.3.7/docs/favicon.ico">-->

    <title>Review Details Form</title>

    <!-- Bootstrap core CSS -->
    <!--<link href="bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">-->

    <!-- Custom styles for this template -->
    <!--<link href="bootstrap-3.3.7/docs/examples/signin/signin.css" rel="stylesheet">-->

    </head>
    
    <body>
		
<?php

    /*
        session_start();
        
        if($_SESSION['name']=="")
        {
            header("Location: welcome.php");
        }
        */
        
    include "header.php";
	
    $roll=$_POST['roll'];
    $rcid=$_POST['rcid'];
    $year=$_POST['year'];
    $mks1=$_POST['mks1'];
    $mks2=$_POST['mks2'];
    $mks3=$_POST['mks3'];
    $mks4=$_POST['mks4'];

    $count=0;
    if(isset($mks1)){
        $count++;
    }
    else{
        $mks1 = 0;
    }
    if(isset($mks2)){
        $count++;
    }
    else{
        $mks2 = 0;
    }
    if(isset($mks3)){
        $count++;
    }
    else{
        $mks3 = 0;
    }if(isset($mks4)){
        $count++;
    }
    else{
        $mks4 = 0;
    }

    $avgmks1 = ($mks1 + $mks2 + $mks3 + $mks4) / $count;

    $ins =  "UPDATE student_mks 
            SET avgmks1='$avgmks1'
            WHERE roll_no='$roll'";
        
        $q=mysqli_query($dbcon,$ins);
        if (!$q) 
        {
            echo "<div style='text-align:center;'>";
            echo '<div class="alert alert-danger" role="alert">';
            printf("<strong>Error during insert:</strong> %s\n</div>", mysqli_errno($dbcon));
            echo "</div>";
            exit(); //Exiting upon error
        }
        else
        {
            echo "<div style='text-align:center;'>";
            echo '<div class="alert alert-success" id="success" role="alert">';
            echo "<strong>Review 1 Marks entered.<br> Your database has been updated succesfully.</strong>";
            echo "<br></div>";
            echo "</div>";
        }
        
?>
    
    </body>
</html>