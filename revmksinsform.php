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
      
    <title>Review Marks</title>
  </head>

    <body>
    <?php
        include "sessionheader.php";
        include "header.php";
    ?>
    <div class="container">
    
    <form action="revmksins.php" method="POST" class="form-signin" role="form" enctype="multipart/form-data" onsubmit="return validateForm()">

        <h1>Review: Marks</h1>
        <h2>Enter details</h2>
        
        <div class="line">
        <label for="revno">Enter Review No. (1/2/3)</label>
        <div>
        <span>
        <input type="number" name="revno" placeholder="Review No." required>
            </span>
            </div>
        </div>

        <br><br>
        
        <div class="line">
        <label for="roll">Student's Roll No.</label>
        <div>
        <span>
        <input type="number" name="roll" placeholder="Roll No." required>
            </span>
            </div>
        </div>

        <br><br>

        <!--reviewid-->
        <div class="line">
        <label for="rcid">Review Committee ID </label>
            <div>
            <span>
                <input type="number" name="rcid" placeholder="Review Committee ID" required>
            </span>
            </div>
        </div>

        <br><br>

        <div class="line">
        <label for="pid">Project ID </label>
        <div>
        <span>
        <input type="number" name="pid" placeholder="Project ID" required>
            </span>
            </div>
        </div>

        <br><br>

        <!--Year-->
        <div class="line">
        <label for="year">Year </label>
        <div>
        <span>
        <input type="number" name="year" placeholder="Year" required>
            </span>
            </div>
        </div>

        <br><br>

        <div class="line">
        <label for="mks1">Marks awarded by first faculty </label>
        <div>
        <span>
        <input type="number" name="mks1" placeholder="Marks awarded by first faculty" required>
            </span>
            </div>
        </div>

        <br><br>

        <div class="line">
        <label for="mks2">Marks awarded by second faculty </label>
        <div>
        <span>
        <input type="number" name="mks2" placeholder="Marks awarded by second faculty">
            </span>
            </div>
        </div>

        <br><br>

        <div class="line">
        <label for="mks3">Marks awarded by third faculty </label>
        <div>
        <span>
        <input type="number" name="mks3" placeholder="Marks awarded by first faculty">
            </span>
            </div>
        </div>

        <br><br>

        <div class="line">
        <label for="mks4">Marks awarded by fourth faculty </label>
        <div>
        <span>
        <input type="number" name="mks4" placeholder="Marks awarded by fourth faculty">
            </span>
            </div>
        </div>

        <br><br>

        <!--Submit-->
        <div style="text-align:center;">
        <input type="submit" name = "button" value="Submit">
        <input type="reset" name = "button" value="Reset">
        </div>

        <br><br>
        
        </form>
	</div>
  </body>
</html>