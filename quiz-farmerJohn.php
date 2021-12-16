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
    $_SESSION["cow"] = "farmer john";
    exit;
}
?>
<body>
    <div class="titlebar">
        <ul>
            <li><a href="index.html">home</a></li>
            <li><a href="problems.html">problems</a></li>
            <li><a href="characters.html">characters</a></li>
            <li><a href="quiz.html">quiz</a></li>
        </ul>
    </div>

    <div class="header">
        <h1 class = "typed-out">farmie john</h1>
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
        <img src="https://bloximages.newyork1.vip.townnews.com/daily-journal.com/content/tncms/assets/v3/editorial/c/53/c539e176-f4d0-11eb-9dba-579fe94fec4d/610a03e268fce.image.jpg?resize=1200%2C800" width=50% style="float: left; padding-left: 25px;">
        <p>You're farmer john! You are down to earth, likeable, and a great farmer. All the cows on the farm love to see you when you work with them.</p>
    </div>
</body>
</html>