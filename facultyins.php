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

    <title>Student Form</title>

    <!-- Bootstrap core CSS -->
    <!--<link href="bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">-->

    <!-- Custom styles for this template -->
    <!--<link href="bootstrap-3.3.7/docs/examples/signin/signin.css" rel="stylesheet">-->

    </head>
    
    <body>
		
<?php
        
    include "header.php";
	
    $fid=$_POST['fid'];
    $name=$_POST['name'];
    $ophone=$_POST['ophone'];
    $mphone=$_POST['mphone'];
    $email=$_POST['email'];
    $jdate=$_POST['jdate'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $texpyrs=$_POST['texpyrs'];
    $iexpyrs=$_POST['iexpyrs'];
    $paddr=$_POST['paddr'];
    $laddr=$_POST['laddr'];
    $ug=$_POST['ug'];
    $pg=$_POST['pg']; 
    $pan=$_POST['pan'];
    $elec=$_POST['elec'];
    
    $ins="INSERT INTO faculty (faculty_id, faculty_name, faculty_office_phone, faculty_mobile_no, faculty_email, joining_date, gender, birthdate, teaching_exp, industry_exp, permanent_address, local_address, UG_University, PG_University, pan_card_no, election_card_no)
	VALUES ('$fid', '$name', '$ophone', '$mphone', '$email', '$jdate', '$gender', '$dob', '$texpyrs', '$iexpyrs','$paddr', '$laddr', '$ug', '$pg', '$pan', '$elec')";
        
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
            echo "<strong>New faculty inserted.<br> Your database has been updated succesfully.</strong>";
            echo "<br></div>";
            echo "</div>";
        }
        
?>
    
    </body>
</html>
