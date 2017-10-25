<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Form for student details">
    <meta name="author" content="">
      
    <title>Review Form</title>
  </head>

    <body>
    <?php
        include "header.php";
    ?>
    <div class="container">
    <form action="projins.php" method="POST" class="form-signin" role="form" enctype="multipart/form-data" onsubmit="return validateForm()">
        
        <!--reviewid-->
        <div class="line">
        <label for="reid">Review Committee ID </label>
        <div>
        <span>
        <input type="number" name="reid" placeholder="Review Committee ID" required>
            </span>
            </div>
        </div>

        <!--report-->
        <div class="line">
        <label for="rep">Report </label>
        <div>
        <span>
        <input type="text" name="rep" placeholder="Report" required>
            </span>
            </div>
        </div>
        
        <!--pID-->
        <div class="line">
        <label for="pid">Faculty ID </label>
        <div>
        <span>
        <input type="number" name="pid" placeholder="Project ID" required>
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