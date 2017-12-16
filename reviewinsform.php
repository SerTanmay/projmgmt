<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Form for student details">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="form.css">

      
    <title>Create Review Committee: Form</title>
  </head>

  <body>
    <?php

        //include "sessionheader.php";

        include "header.php";
    ?>
    <div class="container">
    <form action="projins.php" method="POST" class="form-signin" role="form" enctype="multipart/form-data" onsubmit="return validateForm()">
        
        <!--FacultyID-->
        <div class="line">
        <label for="fid">Faculty ID </label>
        <div>
        <span>
        <input type="number" name="fid" placeholder="Faculty ID" required>
            </span>
            </div>
        </div>

        <!--reviewid-->
        <div class="line">
        <label for="rcid">Review Committee ID </label>
        <div>
        <span>
        <input type="number" name="rcid" placeholder="Review ID" required>
            </span>
            </div>
        </div>

        <div class="line">
        <label for="roll">Student's Roll No. </label>
        <div>
        <span>
        <input type="number" name="roll" placeholder="Roll No." required>
            </span>
            </div>
        </div>

        <div class="line">
        <label for="mks">Enter marks awarded </label>
        <div>
        <span>
        <input type="number" name="mks" placeholder="Marks awarded" required>
            </span>
            </div>
        </div>

        <div class="line">
        <label for="pid">Project ID </label>
        <div>
        <span>
        <input type="number" name="pid" placeholder="Project ID" required>
            </span>
            </div>
        </div>

        <br><br>

        <!--Submit-->
        <div style="text-align:center;">
        <input type="submit" name = "button" value="Submit">
        <input type="reset" name = "button" value="Reset">
        </div>
        
        </form>
	</div>
  </body>
</html>