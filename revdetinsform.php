<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Form for student details">
    <meta name="author" content="">
      
    <title>Review Details Form</title>
  </head>

    <body>
    <?php
        include "header.php";
    ?>
    <div class="container">

    <h3>Enter review details</h3>
    <form action="revdetins.php" method="POST" class="form-signin" role="form" enctype="multipart/form-data" onsubmit="return validateForm()">
        
        <div class="line">
        <label for="reid">Review ID</label>
        <div>
        <span>
        <input type="number" name="reid" placeholder="Review ID" required>
            </span>
            </div>
        </div>
        
        <div class="line">
        <label for="date">Date of Review</label>
        <div>
        <span>
        <input type="date" name="date" placeholder="Date of Review" required>
            </span>
            </div>
        </div>

        <div class="line">
        <label for="time">Time of Review </label>
        <div>
        <span>
        <input type="time" name="time" placeholder="Time of Review" required>
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
        
        <div style="text-align:center;">
        <input type="submit" name = "button" value="Submit">
        <input type="reset" name = "button" value="Reset">
        </div>

        </form>
	</div>
  </body>
</html>