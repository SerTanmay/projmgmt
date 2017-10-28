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
    
		session_start();

		$pid = $_POST['pid'];
		$gfid = $_POST['gfid'];

		$q=mysqli_query($dbcon,"SELECT * FROM proj WHERE pid='$pid'");
		while($row=mysqli_fetch_array($q))
		{
		    $e=mysqli_query($con,"UPDATE proj SET faculty_id='$gfid',  WHERE pid='$pid'");
		    if (!$e) 
		    {
		        echo '<div class="alert alert-danger" role="alert">';
		        printf("<strong>Error:</strong> %s\n</div>", mysqli_error($con));
		        exit();
		    }
		    echo '<div class="alert alert-success" id="success" role="alert">';
		    echo "<strong>Edit successful!</strong>";
		    echo "<br></div>";
		}
		echo '<ul>';
		echo '<li><a href="assgnguideform.php">Assign guides</li>';
		//echo '<li><a href="adminlogout.php">Log out</li>'
		echo '</ul>';
	?>
         </body>
</html>