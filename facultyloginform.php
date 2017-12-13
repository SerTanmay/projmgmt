<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Form for Faculty login">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="form.css">
      
    <title>Faculty Login</title>
  </head>

    <body>
    <?php
        include "header.php";
    ?>

    <div class="container">
        
      <form action="facultylogin.php" method="POST" class="form-signin" role="form">
        <h1 class="form-signin-heading">Welcome faculty</h1>
        <h2 class="form-signin-heading">Please sign in</h2>

        Faculty ID:<input type="text" id="inputID" name="user_name" class="form-control" placeholder="Faculty ID" required autofocus><br>
        Password:<input type="password" name="password" class="form-control" placeholder="Password" required><br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->

    </body>
</html>