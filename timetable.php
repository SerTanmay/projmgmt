<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Generates calendar and dates of alternate fridays. This is the home page.">
    <meta name="author" content="Tanmay Pereira Naik">
    <meta name="keywords" content="home">
    
<title>Review Time Table</title>
<!--
<style>
#main
{
   margin:auto;
   width:400px;
}
#forward
{  position: absolute;
   margin-top: 00px;
   margin-left: 1250px;
}
#back
{  position: absolute;
   margin-top: 00px;
   margin-left: 50px;
}
#heading
{
   font-size:30px;
   text-align:center;
}
th,td
{
   margin:0;
   width: 10%;
   table-layout: fixed;
   text-align: center;
   border collapse: colapse;
   outline: 1px solid black;
}
#booked
{
 font-size:10px;
}

</style>
-->

<style>
table, td, th {    
    border: 1px solid #ddd;
    text-align: center;
}

table {
    border-collapse: collapse;
    width: 120%;
}

th, td {
    padding: 15px;
}
</style>
    
</head>
    
<body>
<!--
    <img id="line" src="newheader.png" width="100%" height="250" align="center">
-->    
<?php
    /*
    session_start();
    
	if($_SESSION['name']=="")
    {
        header("Location: welcome.php");
    }
	*/
    include "header.php";
	
    echo "<br>";
    
$date = array();
$month = array();

$current_date = date('d-m-Y');

$d=date("d",strtotime($current_date));
$m=date("m",strtotime($current_date));
$y=date("Y",strtotime($current_date));
   
echo "<div align='center'>";
echo "<h2>";
echo "Review Time Table - ".$y;
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


$sql = "SELECT * FROM review_details revdet
        ORDER BY rdate";
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
    echo $rcid;
    echo '</td>';

    echo '<td>';
    echo $rcid;
    echo '</td>';

    echo '</tr>';
       
}


echo "</table>";
    
//echo'<a href="inc.php" id="forward" ><img src="forward.jpg" width="80" height="50"></a>';
echo "<br>";
echo "<br>";


    echo "<div style='text-align:left'>";
    echo '<a href="spbookdec.php" >Previous year</a>';
    echo "</div>";

echo "<div style='text-align:right'>";
echo '<a href="spbookinc.php" >Next year</a>';
echo "</div>";
?>
    
</body>
</html>