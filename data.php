<?php
//header('Content-Type: application/json');
$servername = "localhost";
$username = "pika";
$password = "2736008";
$dbname = "yooo";



/*$conn = mysqli_connect($servername, $username, $password, $dbname);
echo("bitch");
if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
}
*/


/*

$dbc = @mysqli_connect($servername, $username, $password, $dbname)
	OR die('Could not connect to MySQL: '.mysqli_connect_error());
//$username = $_POST['user'];
//$password = $_POST['pass'];
echo "jaale";
echo "Connected successfully";

mysqli_error($dbc);
ini_set('display_errors',1);
error_reporting(E_ALL);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$query = "SELECT id, value, time FROM yooo";
echo $query;

$response = @mysqli_query($dbc, $query);

	if($response){

echo '<table align="center" border=1 cellspacing="2" cellpadding="5">
	<tr><td align="left"> <b>id</b></td>
	<td align="left"><b>value</b></td>
	<td align="left"><b>time</b></td></tr>';
while($row = mysqli_fetch_array($response)){
	echo '<tr><td align="left">' .
	$row['id'] . '</td><td align="left">' .
	$row['value'] . '</td><td align="left">' .
	$row['time'] . '</td>';
	echo '</tr>';
}
echo '</table>';
}
else{
		echo "Couldn't issue database query<br />";
	echo mysqli_error($dbc);
	}
	// Close connection to the database
	mysqli_close($dbc);
*/

header('Content-Type: application/json');


//get connection
$mysqli = new mysqli($servername,$username, $password, $dbname);

echo "bitch";

if(!$mysqli){
	die("Connection failed: " . $mysqli->error);
}



//query to get data from the table
$query = sprintf("SELECT value, time FROM t2 ORDERED BY id");

//execute query
$result = $mysqli->query($query);


//loop through the returned data

//$data = array();
//foreach ($result as $row) {
//	$data[] = $row;
//}

while($row = $result->fetch_assoc()){
echo $row['classtype']."<br>";
}

//free memory associated with result
$result->close();

//close connection
$mysqli->close();

//now print the data
//print json_encode($data);
echo "lalala";

?>
