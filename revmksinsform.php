<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>HOD Login Menu</title>

    <style>
        body {
            padding: 40px 15px;
            text-align: center;
            background-color: #eee;
        }
        ol {
            list-style-type: none;
            margin: 0;
            padding: 0;
            font-size: 1.4em;
        }  
    </style>
  </head>
    
    <body>
    
    <?php
        /*
        session_start();
        
        if($_SESSION['name']=="")
        {
            header("Location: hodloginform.php");
        }
        */
        include "header.php";
    ?>

    <h1>Review Marks Insertion:</h1><br>
    <ol>
        <li><a href="rev1form.php">Review 1</a></li>
        <li><a href="rev2form.php">Review 2</a></li>
        <li><a href="rev3form.php">Review 3</a></li>
        <!--<li><a href="updatebooks.html">Update student details</a></li>
        <li><a href="updatebooks.html">Update faculty details</a></li>
        <li><a href="updatebooks.html">Update faculty details</a></li>-->
        <li><a href="reviewinsform.php">Create Review committee</a></li>
        <li><a href="revdetinsform.php">Create Review Schedule</a></li>
        <li><a href="timetable.php">Review Time Table</a></li>
        <!--<li><a href="revmksinsform.php">Enter Review Marks</a></li>-->
    </ol>
    </body>
</html>