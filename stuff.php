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
    
<title>Seminar Booking</title>
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
//$dbcon = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=admin");

    session_start();
    
	if($_SESSION['name']=="")
    {
        header("Location: welcome.php");
    }
	
    include "header.php";
	
    echo "<br>";
    echo "<div>";
        //echo "<div style='text-align:left'>";
        //echo '<a href="spbook.php">Home</a>';
        //echo "</div>";
		echo "<div style='text-align:left'>";
        echo '<a href="alphabetsearch.php">Alphabetic Search</a>';
        echo "</div>";
        echo "<div style='text-align:right'>";
        echo '<a href="logout.php">Logout</a>';
        echo "</div>";
    echo "</div>";
  
$date = array();
$month = array();

$current_date = date('d-m-Y');

$shift=$_SESSION['shift'];

//Generating 1 date per month of this year
$dategen = array();

$d=date("d",strtotime($current_date));
$m=date("m",strtotime($current_date));
$y=date("Y",strtotime($current_date));
$y=$y+$shift;           //Shifting year (previous and next)
$dategen[0] = date("d-m-Y",mktime(0,0,0,1,$d,$y));

//$dategen[0] = $current_date;
for($i=1;$i<12;$i++)
{
    $dategen[$i] = date("d-m-Y",strtotime($dategen[0]."+$i month"));
}

    
/*In case Loop implementation failed: Start from this month 
$month[0] = date("M");
$month[1] = date("M",strtotime($month[0]."+1 month"));
$month[2] = date("M",strtotime($month[1]."+1 month"));
$month[3] = date("M",strtotime($month[2]."+1 month"));
$month[4] = date("M",strtotime($month[3]."+1 month"));
$month[5] = date("M",strtotime($month[4]."+1 month"));
$month[6] = date("M",strtotime($month[5]."+1 month"));
$month[7] = date("M",strtotime($month[6]."+1 month"));
$month[8] = date("M",strtotime($month[7]."+1 month"));
$month[9] = date("M",strtotime($month[8]."+1 month"));
$month[10] = date("M",strtotime($month[9]."+1 month"));
$month[11] = date("M",strtotime($month[10]."+1 month"));
*/

//Generating months for table headers    
//Loop implementation success
for($i=0;$i<12;$i++)
{
    $month[$i] = date("M",strtotime($dategen[$i]));
}

//alloting every month's alternate Fridays to calendar
for($i=0;$i<12;$i++)
{
    $date[0][$i]=date("d-m-Y",strtotime("first Friday of $dategen[$i]"));
    $date[1][$i]=date("d-m-Y",strtotime("third Friday of $dategen[$i]"));
}

/*
    //alloting every month's alternate Fridays to calendar
    $date[0]=date("d-m-Y",strtotime("first Friday of $month[$i]"));
    $date[1]=date("d-m-Y",strtotime("third Friday of $month[$i]"));
    $day[0]=date("d",strtotime("first Friday of $month[$i]"));
    $day[1]=date("d",strtotime("third Friday of $month[$i]"));
    //echo $date[0];
    //echo "<br>";
    //echo $date[1];
    //echo "<br>";
*/

echo "<div style='text-align:left;'>";
echo '<a href="archiveindex.php" >Archive</a>';
echo "</div>";
    
echo "<div align='center'>";
echo "<h2>";
echo "Seminar Booking Calendar - ".$y;
//echo "<br>for";
//echo "<br>Seminar Booking at NCAOR, Goa";
echo "</h2>";
echo "</div>";
    
//First row of table: headings
echo "<table width='80%' align='center'>";
echo "<tr>";
echo "<th>Bi-monthly <br>on Friday</th>";
for($i=0;$i<12;$i++)
{
    echo "<th>".$month[$i]."</th>";
}
echo "</tr>";

for($j=0;$j<2;$j++)
{
    //creating table rows
    echo '<tr>';
	echo '<td>';
	if($j==0)
		echo 'First ';
	if($j==1)
		echo 'Third ';
    echo 'Friday ';
    echo '</td>';
    for($k=0;$k<12;$k++)
    {
        $datetodisplay = date("d-m-y",strtotime($date[$j][$k]));
        $dateused = date("d-m-Y",strtotime($date[$j][$k]));
        $datetemp = $dateused."";
        $d=date("d",strtotime($date[$j][$k]));
        $m=date("m",strtotime($date[$j][$k]));
        $y=date("Y",strtotime($date[$j][$k]));
        
        echo '<td>';
        
        $ts1 = strtotime($dateused);
        $ts2 = strtotime($current_date);
        $seconds_diff = $ts1 - $ts2;    				//stores seconds
        $days_diff=$seconds_diff/86400;					//dividing by 86400sec = 1 day
        //echo $days_diff;									//stores no of days
        
        if ($days_diff>0)
        {
            //echo $d;
            $sql = "SELECT * FROM speakerdata
            WHERE sdate='$datetemp'";
            $result = pg_query($dbcon,$sql);
            $r = pg_num_rows($result);
            if($r==0)
            {
                //Sending date using GET method (Normal date display)
                echo "<a href=\"speakerform.php?d=".$d."&m=".$m."&y=".$y."\">".$datetodisplay;
                echo '</a>';
            }
            if($r!=0)            
            {
                while($row = pg_fetch_assoc($result))
                {
                    $sprefix = $row['prefix_spname'];
                    $spname = $row['spname'];
                    $stopic = $row ['stitle'];
                }
                //Sending date using GET method
                //Making hyperlinks for name and topic
                echo $datetodisplay;
                echo "<br>";
                echo "<br>";
                echo "<a href=\"speakerinfo.php?d=".$d."&m=".$m."&y=".$y."\">";
                echo $sprefix.$spname;
                echo "</a>";
                echo "<br>";
                echo "<br>";
                echo "<a href=\"speakerinfo.php?d=".$d."&m=".$m."&y=".$y."\">".$stopic."</a>";
            }
        }
    }
    echo '</tr>';
    
}


echo "</table>";
    
//echo'<a href="inc.php" id="forward" ><img src="forward.jpg" width="80" height="50"></a>';
echo "<br>";
echo "<br>";

if($shift>0)
{
    echo "<div style='text-align:left'>";
    echo '<a href="spbookdec.php" >Previous year</a>';
    echo "</div>";
}
echo "<div style='text-align:right'>";
echo '<a href="spbookinc.php" >Next year</a>';
echo "</div>";
?></body>
</html>