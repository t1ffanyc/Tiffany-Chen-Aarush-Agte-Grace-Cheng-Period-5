<?php


$search = $_POST['search'];

$servername = "localhost:3307";
$username = "root";
$password = "123456";
$db = "logindb";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "select * from users where username like '%$search%'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){
	echo $row["username"]."  ".$row["cows"]."  <br>";
}
} else {
	echo "0 records";
}

$conn->close();

?>