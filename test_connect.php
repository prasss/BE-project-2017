 <?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "pika";
$password = "2736008";
$dbname = "yooo";

//$username = $_POST['user'];
//$password = $_POST['pass'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
/*
echo '<b>Current user:</b> '. $username.'<br>';
echo '<b>Password entered:</b> '.$password.'<br>';
echo 'you have successfully logged in'.'<br>';
*/
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT value,time FROM t3";
$result = $conn->query($sql);

$data = array();
foreach ($result as $row) {
 $data[] = $row;
}

/*
if ($result->num_rows > 0) {
    // output data of each row
 
echo '<table border="1" align="center"> 
<tr> <td> <b>serial no.</b> </td>
<td><b>power(mw/second) </b></td>
<td><b>time stamp </b></td>';

    while($row = $result->fetch_assoc()) {

echo '<tr><td align="center" >' . $row["id"].'</td><td align="center" >'  . $row["value"]. '</td>
 <td align="center" >' . $row["time"].'</td></tr>';
    }
echo '</table>';

} else {
    echo "0 results";
}
*/
$conn->close();
print json_encode($data);

?> 
