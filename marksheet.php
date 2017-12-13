<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Generates Marksheet">
    <meta name="author" content="">
    <meta name="keywords" content="home">
    
    <title>Student Marksheet</title>
    <style>

    </style>

    <link rel="stylesheet" type="text/css" href="table.css">
    
</head>
    
<body>

<?php
    include "sessionheader.php";
    include "header.php";
	
    echo "<br>";
    
    $roll=$_POST['roll'];
    $name=$_POST['name'];
   
echo "<div align='center'>";
echo "<h2>";
echo "Student Marksheet";
echo "</h2>";
echo "</div>";
    
//First row of table: headings
echo "<table width='80%' align='center'>";

echo "<tr>";
echo "<th>Review Committee ID</th>";
echo "<th>Project ID</th>";
echo "<th>Time</th>";
echo "<th>Lab</th>";
echo "<th>Date</th>";
echo "</tr>";

$sql = "SELECT * FROM student stu
        JOIN student_marks stmks
        ON stu.roll_no=stmks.roll_no
        WHERE roll_no='$roll'";

$result = mysqli_query($dbcon,$sql);

while($row = mysqli_fetch_array($result))
{
    $rcid = $row['rcid'];
    $rpid = $row['pid'];
    $rtime = $row['rtime'];
    $rlab = $row['lab'];
    $rdate = $row['rdate'];
    

    //creating table rows
    echo '<tr>';
	
    echo '<td>';
    echo $rcid;
    echo '</td>';

    echo '<td>';
    echo $rpid;
    echo '</td>';

    echo '<td>';
    echo $rtime;
    echo '</td>';

    echo '<td>';
    echo $rlab;
    echo '</td>';

    echo '<td>';
    echo $rdate;
    echo '</td>';

    echo '</tr>';     
}


echo "</table>";
/*   
//echo'<a href="inc.php" id="forward" ><img src="forward.jpg" width="80" height="50"></a>';
echo "<br>";
echo "<br>";


    echo "<div style='text-align:left'>";
    echo '<a href="spbookdec.php" >Previous year</a>';
    echo "</div>";

echo "<div style='text-align:right'>";
echo '<a href="spbookinc.php" >Next year</a>';
echo "</div>";
*/
?>
    
</body>
</html>