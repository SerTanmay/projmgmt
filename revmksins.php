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

    <title>Review Marks</title>

    <!-- Bootstrap core CSS -->
    <!--<link href="bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">-->

    <!-- Custom styles for this template -->
    <!--<link href="bootstrap-3.3.7/docs/examples/signin/signin.css" rel="stylesheet">-->

    </head>
    
    <body>
		
<?php

    include "sessionheader.php";
        
    include "header.php";
	
    $revno=$_POST['revno'];
    $roll=$_POST['roll'];
    $rcid=$_POST['rcid'];
    $year=$_POST['year'];

    $mks = array();
    $mks[0]=NULL;
    $mks[1]=$_POST['mks1'];
    $mks[2]=$_POST['mks2'];
    $mks[3]=$_POST['mks3'];
    $mks[4]=$_POST['mks4'];

    //Validate
    $err=0;
    if($revno == 1 || $revno == 2)
    {
        for($i=1; $i<=4; $i++)
        {
            if($mks[$i]>10)
            {
                $err=1;
                break;
            }
        }
    }
    if($revno == 3)
    {
        for($i=1; $i<=4; $i++)
        {
            if($mks[$i]>5)
            {
                $err=1;
                break;
            }
        }
    }
    if($err == 1)
    {
        echo "Marks greater than specified limit!<br>";
        echo '<a href="revmksinsform.php">Try again!</a>';
        exit(); //Exiting upon error
    }
    $count=0;
    for($i=1; $i<=4; $i++)
    {
        if($mks[$i] != ""){
            $count++;
        }
        else{
            $mks[$i] = 0;
        }
    }
    
    //Test to see values
    /*
    for($i=1; $i<=4; $i++)
        echo $mks[$i]."<br>";
    */

    //Finding sum
    $mkssum=0;
    for($i=1; $i<=4; $i++){
        $mkssum = $mkssum + $mks[$i];
    }

    $avgmks = $mkssum / $count;

    if($revno == 1)
    {
        $ins = "UPDATE student_mks 
                SET avgmks1='$avgmks'
                WHERE roll_no='$roll'";
    }
    if($revno == 2)
    {
        $ins = "UPDATE student_mks 
                SET avgmks2='$avgmks'
                WHERE roll_no='$roll'";
    }
    if($revno == 3)
    {
        $ins = "UPDATE student_mks 
                SET avgmks3='$avgmks'
                WHERE roll_no='$roll'";
    }

        
        $q=mysqli_query($dbcon,$ins);
        if (!$q) 
        {
            echo "<div style='text-align:center;'>";
            echo '<div class="alert alert-danger" role="alert">';
            printf("<strong>Error during insert:</strong> %s\n</div>", mysqli_errno($dbcon));
            echo "</div>";
            echo '<a href="revmksinsform.php"> Try again </a>';
            exit(); //Exiting upon error
        }
        else
        {
            echo "<div style='text-align:center;'>";
            echo '<div class="alert alert-success" id="success" role="alert">';
            echo "<strong>Review Marks entered.<br> Your database has been updated succesfully.</strong>";
            echo "<br></div>";
            echo "</div>";
        }

    //Updating internal marks
    $sel = "SELECT *
            FROM student_mks
            WHERE roll_no='$roll'";

    $q1 = mysqli_query($dbcon,$sel);

        if (!$q1) 
        {
            echo "<div style='text-align:center;'>";
            echo '<div class="alert alert-danger" role="alert">';
            printf("<strong>Error during selection:</strong> %s\n</div>", mysqli_errno($dbcon));
            echo "</div>";
            exit(); //Exiting upon error
        }
        
    $row = mysqli_fetch_array($q1);

    $avgmks1 = $row['avgmks1'];
    $avgmks2 = $row['avgmks2'];
    $avgmks3 = $row['avgmks3'];

    if($avgmks1 == NULL)
        $avgmks1 = 0;
    if($avgmks2 == NULL)
        $avgmks2 = 0;
    if($avgmks3 == NULL)
        $avgmks3 = 0;

    $imks = $avgmks1 + $avgmks2 + $avgmks3;

        $upd = "UPDATE student_mks 
                SET Imarks='$imks'
                WHERE roll_no='$roll'";

        $q=mysqli_query($dbcon,$upd);
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
            echo "<strong>Internal Marks entered.<br> Your database has been updated succesfully.</strong>";
            echo "<br></div>";
            echo "</div>";
        }
        
?>
    
    </body>
</html>
