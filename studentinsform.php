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
      
    <title>Student Details Form</title>
  </head>

    <body>
    <?php

        include "sessionheader.php";

        include "header.php";
    ?>
    <div class="container">
    <h3>Enter student details</h3>
    <form action="studentins.php" method="POST" class="form-signin" role="form" enctype="multipart/form-data" onsubmit="return validateForm()">
        
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
        <input type="text" name="name" placeholder="Name" required>
            </span>
            </div>
        </div>
        
        <div class="line">
        <label for="addr">Address </label>
        <div>
        <span>
        <input type="text" name="addr" placeholder="Address" required>
            </span>
            </div>
        </div>
        
        <div class="line">
        <label for="gender">Gender</label>
        <div>
        <span>
        <select name="gender" style='margin-left:30px;'>
            <option value="M">Male</option>
            <option value="F">Female</option>
            <option value="Others">Others</option>
        </select>
        </span>
        </div>
        </div>
        
        <div class="line">
        <label for="dob">Date of Birth</label>
        <div>
        <span>
        <input type="date" name="dob" placeholder="Date of Birth" required>
            </span>
            </div>
        </div>
        
        <div class="line">
        <label for="phone">Phone No.</label>
        <div>
        <span>
        <input type="number" name="phone" placeholder="Phone No." required>
            </span>
            </div>
        </div>
        
        <div class="line">
        <label for="email">E-mail</label>
        <div>
        <span>
        <input type="email" name="email" placeholder="E-mail" required>
            </span>
            </div>
        </div>
        
        <div class="line">
        <label for="jyear">Joining Year</label>
        <div>
        <span>
        <input type="number" name="jyear" placeholder="Joining Year" required>
            </span>
            </div>
        </div>
        
        <div class="line">
        <label for="fname">Father's Name</label>
        <div>
        <span>
        <input type="text" name="fname" placeholder="Father's Name" >
            </span>
            </div>
        </div>
        
        <div class="line">
        <label for="mname">Mother's Name</label>
        <div>
        <span>
        <input type="text" name="mname" placeholder="Mother's Name" >
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