<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Form for student details">
    <meta name="author" content="">
      
    <title>Faculty Review Form</title>
  </head>

    <body>
    <?php
        include "header.php";
    ?>
    <div class="container">
    <h3>Review 1: Marks</h3>
    <h5>Enter details</h5>
    <form action="projins.php" method="POST" class="form-signin" role="form" enctype="multipart/form-data" onsubmit="return validateForm()">
        
        
        <div class="line">
        <label for="roll">Student's Roll No.</label>
        <div>
        <span>
        <input type="number" name="fid" placeholder="Faculty ID" required>
            </span>
            </div>
        </div>

        <!--reviewid-->
        <div class="line">
        <label for="reid">Review ID </label>
        <div>
        <span>
        <input type="number" name="reid" placeholder="Review ID" required>
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