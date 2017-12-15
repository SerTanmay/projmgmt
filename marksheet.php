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
    
$sql = "SELECT * FROM student stu
        JOIN student_marks stmks
        ON stu.roll_no=stmks.roll_no
        WHERE roll_no='$roll'";

$result = mysqli_query($dbcon,$sql);

    if(mysqli_num_rows($result)==0)
    {
        echo "No data found";                           //no persons found
    }
    else
    {
        echo "<table width='100%' align='center'>";
        
        /*
        echo "<tr>";
        echo "<th>Name</th>";
        echo "<th>Roll No.</th>";
        echo "<th>Address</th>";
        echo "<th>Gender</th>";
        echo "<th>Date of Birth</th>";
        echo "<th>Contact No.</th>";
        echo "<th>e-mail</th>";
        echo "<th>Father's Name</th>";
        echo "<th>Mother's Name</th>";
        echo "<th>Marks</th>";
        echo "</tr>";
        */

$row = mysqli_fetch_array($result)
{
    $name = $row['name'];
    $addr = $row['address'];
    $gender = $row['gender'];
    $dob = $row['date_of_birth'];
    $phone = $row['phone_no'];
    $email = $row['email_id'];
    $fname = $row['fathers_name'];
    $mname = $row['mothers_name'];
    $marks = $row['Imarks'];

    //creating table rows
    echo '<tr>';
    echo "<th>Name</th>";
    echo '<td>';
    echo $name;
    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo "<th>Roll No.</th>";
    echo '<td>';
    echo $roll;
    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo "<th>Address</th>";
    echo '<td>';
    echo $addr;
    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo "<th>Gender</th>";
    echo '<td>';
    echo $gender;
    echo '</td>';
    echo '</tr>';

    echo '<tr>';

    echo '<td>';
    echo "<th>Date of Birth</th>";
    echo $dob;
    echo '</td>';
    echo '</tr>';

    echo '<tr>';

    echo '<td>';
    echo "<th>Contact No.</th>";
    echo $phone;
    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo "<th>e-mail</th>";
    echo '<td>';
    echo $email;
    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo "<th>Father's Name</th>";
    echo '<td>';
    echo $fname;
    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo "<th>Mother's Name</th>";
    echo '<td>';
    echo $mname;
    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo "<th>Marks</th>";
    echo '<td>';
    echo $marks;
    echo '</td>';
    echo '</tr>';
    
}

echo "</table>";

?>
    
</body>
</html>