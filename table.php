<html>
<head>
<style>


h1{
	color:white;
	position:absolute;
	top: 10px;
	left: auto;
	font-family: verdana;
	font-size:30;
	border:1px;
	width:300;
	text-align: center;
	
}
#table{
	position:absolute;
	top: 170px;
	left:8px;
	width: 300;
	border: 1px solid white;
	padding: 5px;
    align: center;
	content-align:center;
}
#text {
	
	border: 1px solid white;
	padding: 5px;
	position:absolute;
	top: 130px;
	left:8px;
	height: 25px;
	width: 300;
	text-align:center;
}
#menu{
	display:inline;
	border: 1px solid white;
	padding: 5px;
	position:absolute;
	top: 50px;
	left:8px;
	height:auto;
	width: 300;
	text-align:center;
}
</style>
</head>
</html>


 <?php
 session_start();
$servername = "localhost";
$username = "pika";
$password = "2736008";
$dbname = "yooo";

$var=0;

echo '<body bgcolor="black" > <h1> Table</h1>
<div id="menu"><a href="bargraph.html"> <button> Bargraph
      </button></a>
      <a href="table.php"> <button> Refresh </button></a>
      
 <a href="linegraph.html"> <button> Linegraph
</button></a>

<br><br><font align="left" color="white">view billing information:<a href="billing.php"> <button> here
</button></a></font></div>';


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT value,time FROM t3";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
 
echo '<div id="table"><table border="2" align="center" bgcolor="white" bordercolor="red"
      color="white">

<tr><td><b>power(mw/second) </b></td>
<td><b>time stamp </b></td></tr>';

while($row = $result->fetch_assoc()) {
	$var=$var + $row["value"];
	
echo '<tr><td align="center" >' . $row["value"]. '</td>
 <td align="center" >' . $row["time"].'</td></tr>';
    }
echo '</table></div>';
echo '<div id="text">
<font align="left" color="white">Power consumed 
<input type="text" size="5" name="val" value="'. $var.'"> Watts/sec </font></div>';

$_SESSION['var']= $var;

} else {
    echo "0 results";
}

echo '</body>';
$conn->close();

?> 

