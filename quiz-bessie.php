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
<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    $_SESSION["cow"] = "bessie";
    exit;
}
?>
<body>
    <div class="titlebar">
        <ul>
            <li><a href="index.php">home</a></li>
            <li><a href="problems.html">problems</a></li>
            <li><a href="quiz.html">quiz</a></li>
            <li><a href="register.php">register</a></li>
        </ul>
    </div>

    <div class="header">
        <h1 class = "typed-out">bessie</h1>
    </div>

    <br>
    
    <style>
        p{
            float: left;
            padding-left: 25px;
            font-size: xx-large;
            max-width: 500px;;
        }
    </style>
    <div>
        <img src="https://pbs.twimg.com/profile_images/2344933022/cow2_400x400.jpg" width=50% style="float: left; padding-left: 25px;">
        <p>You're Bessie! You're incredibly smart, talented, and popular. You're known to be one of farmer John's prize cows and are best sisters with Elsie.</p>
    </div>
</body>
</html>