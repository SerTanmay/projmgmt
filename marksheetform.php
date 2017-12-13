<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Form for student details">
    <meta name="author" content="">
      
    <style>
        
    </style>
    
    <link rel="stylesheet" type="text/css" href="form.css">

    <title>Student Marksheet</title>
  </head>

  <body>
    <?php

        include "sessionheader.php";

        include "header.php";
    ?>
    <div class="container">
    <h3>Enter student details </h3>
    <form action="marksheet.php" method="POST" class="form-signin" role="form" enctype="multipart/form-data" onsubmit="return validateForm()">
        
        <div class="line">
        <label for="roll">Roll No. </label>
        <div>
        <span>
        <input type="number" name="roll" placeholder="Roll No." required>
            </span>
            </div>
        </div>
        
        <div class="line">
        <label for="name">Name </label>
        <div>
        <span>
        <input type="text" name="name" placeholder="Name" >
            </span>
            </div>
        </div>
        
        <!--Submit-->
        <div style="text-align:center;">
        <input type="submit" name = "button" value="Submit">
        <input type="reset" name = "button" value="Reset">
        </div>
        
        </form>
	</div>
  </body>
</html>