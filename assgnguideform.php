<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="bootstrap-3.3.7/docs/favicon.ico">

    <title>Assign Guide</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="bootstrap-3.3.7/docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap-3.3.7/docs/examples/signin/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bootstrap-3.3.7/docs/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>

  <body>
    
    <?php
        include "header.php";
    ?>


    <div class="container">
    <h3>Guide Assignment</h3>
    <h5>Enter details</h5>
    <form action="assgnguide.php" method="POST" class="form-signin" role="form" enctype="multipart/form-data" onsubmit="return validateForm()">
        
        
        <div class="line">
        <label for="pid">Project ID </label>
        <div>
        <span>
        <input type="number" name="pid" placeholder="Project ID" required>
            </span>
            </div>
        </div>

        <div class="line">
        <label for="gfid">Guide's Faculty ID</label>
        <div>
        <span>
        <input type="number" name="gfid" placeholder="Guide's Faculty ID" required>
            </span>
            </div>
        </div>

        <!--Submit-->
        <div style="text-align:center;">
        <input type="submit" name = "button" value="Submit">
        <input type="reset" name = "button" value="Reset">
        </div>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap-3.3.7/docs/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
