<?php


session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

require_once "config.php";

$type = $_SESSION["id"];
$query = "UPDATE users SET cows = 'farmer nhoj' WHERE id = ?";
$stmt = $link->prepare($query);
$stmt->bind_param("s", $type);
$stmt->execute();


mysqli_close($link);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="myCss.css">
    <title>usaco lore</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro&display=swap" rel="stylesheet">
</head>

<body>
        <div class="titlebar">
        <ul>
            <li><a href="index.php">home</a></li>
            <li><a href="problems.html">problems</a></li>
            <li><a href="quiz.html">quiz</a></li>
            <li><a href="welcome.php">my account</a></li>
        </ul>
    </div>
    <style>
        p{
            float: left;
            padding-left: 25px;
            font-size: xx-large;
            max-width: 500px;;
        }
    </style>
    <div class="header">
        <h1 class = "typed-out">farmer nhoj</h1>
    </div>

    <br>

    <div>
        <img src="farmernhjo.png" width=50% style="float: left;">
        <p style="float: left;">You're farmer Nhoj! You're chaotic, funny, and silly. You are often seen giving fiery speeches about cow farming techniques. Your natural rival is Farmer John, but at the end of the day you two are best friends.</p>
    </div>
</body>
</html>