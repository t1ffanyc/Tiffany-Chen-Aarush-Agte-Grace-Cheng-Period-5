<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="myCss.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>usaco lore</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />
</head>
<body>
<body>
    <div class="titlebar">
        <ul>
            <li><a href="index.php">home</a></li>
            <li><a href="problems.html">problems</a></li>
            <li><a href="quiz.html">quiz</a></li>
            <li><a href="welcome.php">my account</a></li>
        </ul>
    </div>
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
	echo  "Username: ", $row["username"], "<br>",  " Quiz result: ", $row["cows"], "<br>" ;
}
} else {
	echo "0 records";
}

$conn->close();

?>
</body>
</html>