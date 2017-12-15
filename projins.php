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

    <title>Project Details Form</title>

    <!-- Bootstrap core CSS -->
    <!--<link href="bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">-->

    <!-- Custom styles for this template -->
    <!--<link href="bootstrap-3.3.7/docs/examples/signin/signin.css" rel="stylesheet">-->

    </head>
    
    <body>
		
<?php
        
    include "header.php";
	
    $pid=$_POST['pid'];
    $pdescr=$_POST['pdescr'];
    $dom=$_POST['dom'];
    $tech=$_POST['tech'];
    $year=$_POST['year'];
    //$reid=$_POST['reid'];
    //$fid=$_POST['fid'];
    
    
    $ins="INSERT INTO proj (pid, pdescr, domain, tech_used, year)
	VALUES ('$pid', '$pdescr', '$dom', '$tech', '$year',)";
        
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
            echo "<strong>New project inserted.<br> Your database has been updated succesfully.</strong>";
            echo "<br></div>";
            echo "</div>";
        }
        
?>
    
    </body>
</html>
