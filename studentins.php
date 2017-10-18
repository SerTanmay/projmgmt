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

    <title>Speaker Form</title>

    <!-- Bootstrap core CSS -->
    <!--<link href="bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">-->

    <!-- Custom styles for this template -->
    <!--<link href="bootstrap-3.3.7/docs/examples/signin/signin.css" rel="stylesheet">-->

    </head>
    
    <body>
		
<?php
        
    include "header1.php";
	
    //$dbcon = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=admin");
    //$sdate=$_POST['sdate'];
    $sdate=$_SESSION['sdate'];
    $stime=$_POST['start_time'];
    $ssec=$_POST['start_sec'];
    $etime=$_POST['end_time'];
    $esec=$_POST['end_sec'];
    $sname=$_POST['sname'];
    $spref=$_POST['prefix_sname'];
    $insti=$_POST['insti'];
    $desig=$_POST['desig'];
    $place=$_POST['place']; 
    $field=$_POST['field'];
    $stitle=$_POST['stitle'];
    $rurl=$_POST['ref_url'];
    $sphone=$_POST['contact'];
    $semail=$_POST['semail'];
    $filename1 = $_FILES["abstract"]["name"];
    //$filename2 = $_FILES["ppt"]["name"];
        
        //Time combination calculations
        $xstime=($stime*100)+$ssec;
        $stime=$xstime;
        $xetime=($etime*100)+$esec;
        $etime=$xetime;
		/*
        //Adding prefix to name
        $xname=$spref.$sname;
        $sname=$xname;
        $sname=$xname;
        */
	//$filename1 = rawurlencode($filename1);
        
    $name=$sname;
    
    if(!is_dir("uploads/". $name ."/")) 
    {
        mkdir("uploads/".$name."/");
    }
    $target_dir = "uploads/".$name."/";
    $maxfilesize = 10 * 1024 * 1024; //10 MB
    $uploadOk = 1;
    $uploadConfirm = 0;
        
    if($_FILES["abstract"]["error"] != 4) {
            
        $target_file1 = $target_dir . basename($_FILES["abstract"]["name"]);
        //$uploadOk = 1;
        $FileType1 = pathinfo($target_file1,PATHINFO_EXTENSION);
        $FileSize1 = $_FILES["abstract"]["size"];
        $uploadConfirm = 1;
        
        // Check file size
        if ($FileSize1 > $maxfilesize) {
            echo "<div style='text-align:center;'>";
            echo "Sorry, your file is too large.<br>";
            echo "</div>";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($FileType1 != "doc" && $FileType1 != "docx" && $FileType1 != "txt" && $FileType1 != "pdf" ) {
            echo "<div style='text-align:center;'>";
            echo "Sorry, only PDF, DOC, DOCX, TXT files are allowed.<br>";
            echo "</div>";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "<div style='text-align:center;'>";
            echo "Sorry, your file was not uploaded.<br>";
            echo "</div>";
            exit();
        }
        
        //Truncating file name with 20 characters + extension
        //Truncating only if file name is too long 
        //rename($filename1, substr($filename1, 0, 10) . $FileType1);
        $filename1 = trim($filename1);
        $l = strlen($filename1);
        if($l>23)
        {
            $filename1 = substr($filename1, 0, 20) . "." . $FileType1;
            $target_file1 = $target_dir . $filename1;
        }
        
        
        /*
        // if everything is ok, try to upload file
        else {
            if (move_uploaded_file($_FILES["abstract"]["tmp_name"], $target_file1)) {
                echo "The file ". basename( $_FILES["abstract"]["name"]). " has been uploaded.<br>";
            } else {
                echo "<div style='text-align:center;'>";
                echo "Sorry, there was an error uploading your file.<br>";
                echo "</div>";
            }
        }
        */
    
    }
    
        
    /*
    if($_FILES["ppt"]["error"] != 4) {
            
        $target_file2 = $target_dir . basename($_FILES["ppt"]["name"]);
        $uploadOk = 1;
        $FileType2 = pathinfo($target_file2,PATHINFO_EXTENSION);
        $FileSize2 = $_FILES["ppt"]["size"];
        
        // Check file size
        if ($FileSize2 > $maxfilesize) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($FileType2 != "ppt" && $FileType2 != "pptx" && $FileType2 != "pdf" ) {
            echo "Sorry, only PPT, PPTX, PDF files are allowed.<br>";
            $uploadOk = 0;
        }
        
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.<br>";
        // if everything is ok, try to upload file
        } 
        else {
            if (move_uploaded_file($_FILES["ppt"]["tmp_name"], $target_file2)) {
                echo "The file ". basename( $_FILES["ppt"]["name"]). " has been uploaded.<br>";
            } else {
                echo "Sorry, there was an error uploading your file.<br>";
            }   
        }
    }
    */
    
        
        
    $_SESSION['name']=$sname;
    $ins="INSERT INTO speakerdata (sdate, start_time, end_time, prefix_spname, spname, desig, insti, place, spemail, spcontact, field, stitle, ref_url, abstract_name, ppt_name)
	VALUES ('$sdate', '$stime', '$etime', '$spref', '$sname', '$desig', '$insti', '$place', '$semail', '$sphone', '$field', '$stitle', '$rurl', '$filename1', '$filename2')";
        
    $sql1 = "SELECT * FROM speakerdata
            WHERE sdate='$sdate'";
    $result1= pg_query($dbcon,$sql1);
    $r = pg_num_rows($result1);
        
    if($r != 0)
    {   
        echo "<div style='text-align:center;'>";
        echo "Sorry! The slot/date is already booked.<br>";
        echo "</div>";
    }
    else
    {
        $q=pg_query($dbcon,$ins);
        if (!$q) 
        {
            echo "<div style='text-align:center;'>";
            echo '<div class="alert alert-danger" role="alert">';
            printf("<strong>Error during insert:</strong> %s\n</div>", pg_last_error($dbcon));
            echo "</div>";
            exit(); //Exiting upon error
        }
        
        
        if($uploadOk == 1 && $uploadConfirm == 1)
        {
            //$sql2 = "SELECT * FROM speakerdata
            //WHERE sdate='$sdate'";
            //$result2 = pg_query($dbcon,$sql2);
            //$bookid = $row['booking_id'];
            //$target_file1 = $target_dir . $bookid . $FileType1;
            
            if (move_uploaded_file($_FILES["abstract"]["tmp_name"], $target_file1)) {
                echo "<div style='text-align:center;'>";
                //echo "The file ". basename( $_FILES["abstract"]["name"]). " has been uploaded.<br>";
                echo "</div>";
            } else {
                echo "<div style='text-align:center;'>";
                echo "Sorry, there was an error uploading your file.<br>";
                echo "</div>";
                
                $sql2 = "DELETE FROM speakerdata
                        WHERE sdate='$sdate'";
                $result2 = pg_query($dbcon,$sql2);
                
                exit(); //Exiting upon error
            } 
            
            echo "<div style='text-align:center;'>";
            echo '<div class="alert alert-success" id="success" role="alert">';
            echo "<strong>Thanks for Seminar booking.<br> Your details have been updated succesfully.</strong>";
            echo "<br></div>";
            echo "</div>";
        }
        else
        {
            echo "<div style='text-align:center;'>";
            echo '<div class="alert alert-success" id="success" role="alert">';
            echo "<strong>Thanks for Seminar booking.<br> Your details have been updated succesfully.</strong>";
            echo "<br></div>";
            echo "</div>";
        }
    }
    
?>
    
    </body>
</html>
