<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Form for student details">
    <meta name="author" content="">
      
    <title>Faculty Details Form</title>
  </head>

    <body>
    <?php
        include "header.php";
    ?>
    <div class="container">
    <h3>Enter faculty details</h3>
    <form action="facultyins.php" method="POST" class="form-signin" role="form" enctype="multipart/form-data" onsubmit="return validateForm()">
        
        <!--ID-->
        <div class="line">
        <label for="fid">Faculty ID </label>
        <div>
        <span>
        <input type="number" name="fid" placeholder="Faculty ID" required>
            </span>
            </div>
        </div>
        
        <!--name-->
        <div class="line">
        <label for="name">Name </label>
        <div>
        <span>
        <input type="text" name="name" placeholder="Name" required>
            </span>
            </div>
        </div>

        <!--office Phone-->
        <div class="line">
        <label for="ophone">Office Phone No.</label>
        <div>
        <span>
        <input type="number" name="ophone" placeholder="Office Phone No." >
            </span>
            </div>
        </div>
        
        <!--mobile Phone-->
        <div class="line">
        <label for="mphone">Mobile Phone No.</label>
        <div>
        <span>
        <input type="number" name="mphone" placeholder="Mobile Phone No." required>
            </span>
            </div>
        </div>

        <!--email-->
        <div class="line">
        <label for="email">E-mail</label>
        <div>
        <span>
        <input type="email" name="email" placeholder="E-mail" required>
            </span>
            </div>
        </div>

        <!--joining date-->
        <div class="line">
        <label for="jdate">Joining Date</label>
        <div>
        <span>
        <input type="date" name="jdate" placeholder="Joining Date" required>
            </span>
            </div>
        </div>

        <!--Gender-->
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

        <!--DOB-->    
        <div class="line">
        <label for="dob">Date of Birth</label>
        <div>
        <span>
        <input type="date" name="dob" placeholder="Date of Birth" required>
            </span>
            </div>
        </div>

        <!--teaching experience-->
        <div class="line">
        <label for="texpyrs">Teaching Experience</label>
        <div>
        <span>
        <input type="number" name="texpyrs" placeholder="Teaching Experience" >
            </span>
            </div>
        </div>

        <!--industry experience-->
        <div class="line">
        <label for="iexpyrs">Industry Experience</label>
        <div>
        <span>
        <input type="number" name="iexpyrs" placeholder="Industry Experience" >
            </span>
            </div>
        </div>

        <!--Permanent address-->
        <div class="line">
        <label for="paddr">Permanent address </label>
        <div>
        <span>
        <input type="text" name="paddr" placeholder="Permanent address" required>
            </span>
            </div>
        </div>
        
        <!--Local address-->
        <div class="line">
        <label for="laddr">Local address </label>
        <div>
        <span>
        <input type="text" name="laddr" placeholder="Local address" >
            </span>
            </div>
        </div>
        
        <!--UG University-->
        <div class="line">
        <label for="ug">UG University </label>
        <div>
        <span>
        <input type="text" name="ug" placeholder="UG University" >
            </span>
            </div>
        </div>
        
        <!--PG University-->
        <div class="line">
        <label for="pg">PG University </label>
        <div>
        <span>
        <input type="text" name="pg" placeholder="PG University" >
            </span>
            </div>
        </div>
        
        <!--Pan card no.-->
        <div class="line">
        <label for="pan">Pan card no.</label>
        <div>
        <span>
        <input type="number" name="pan" placeholder="Pan card no." >
            </span>
            </div>
        </div>
        
        <!--Election card no.-->
        <div class="line">
        <label for="elec">Election card no.</label>
        <div>
        <span>
        <input type="number" name="elec" placeholder="Election card no." >
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