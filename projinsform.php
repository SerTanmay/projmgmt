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

    <title>Project Details Form</title>
  </head>

    <body>
    <?php

        include "sessionheader.php";

        include "header.php";
    ?>
    <div class="container">
    <h3>Enter project details</h3>
    <form action="projins.php" method="POST" class="form-signin" role="form" enctype="multipart/form-data" onsubmit="return validateForm()">
        
        <!--pID-->
        <div class="line">
        <label for="pid">Project ID </label>
        <div>
        <span>
        <input type="number" name="pid" placeholder="Project ID" required>
            </span>
            </div>
        </div>
        
        <!--projdescr-->
        <div class="line">
        <label for="pdescr">Project Description </label>
        <div>
        <span>
        <input type="text" name="pdescr" placeholder="Project Description" >
            </span>
            </div>
        </div>
             
        <!--domain-->
        <div class="line">
        <label for="dom">Domain </label>
        <div>
        <span>
        <input type="text" name="dom" placeholder="Domain" >
            </span>
            </div>
        </div>
        
        <!--Tech Used-->
        <div class="line">
        <label for="tech">Tech Used </label>
        <div>
        <span>
        <input type="text" name="tech" placeholder="Tech Used" >
            </span>
            </div>
        </div>

        <!--Year-->
        <div class="line">
        <label for="year">Year </label>
        <div>
        <span>
        <input type="number" name="year" placeholder="Year" required>
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