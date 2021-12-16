<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
$results = "";
$letter = "";
if(isset($_GET['letter']) && strlen($_GET['letter']) == 1){
    $letter = preg_replace('#[^a-z]#i', '', $_GET['letter']);
    if(strlen($letter) != 1){
        echo "ERROR: Hack Attempt, after filtration the variable is empty.";
        exit();
    }
    // Connect to database here now
    // SELECT * FROM movies WHERE title LIKE '%$letter'
    // Use a while loop to append database results into the $results variable ($results .=)
    // Close your database connection here after your while loop closes
    
    // The line below is only to use for testing purposes before you
    // attempt to connect to your database and query it, remove this line after initial test
    $results = "PHP recognizes the dynamic ".$letter." and can search MySQL using it";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>
    <link rel="stylesheet" type="text/css" href="myCss.css">
    <title>My Account</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro&display=swap" rel="stylesheet">
</head>
<script>
var btns = "";
var letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
var letterArray = letters.split("");
for(var i = 0; i < 26; i++){
    var letter = letterArray.shift();
    btns += '<button class="mybtns" onclick="alphabetSearch(\''+letter+'\');">'+letter+'</button>';
}
function alphabetSearch(let){
    window.location = "search_results.php?letter="+let;
}
</script>
<body>
    <div class="titlebar">
        <ul>
            <li><a href="index.php">home</a></li>
            <li><a href="problems.html">problems</a></li>
            <li><a href="characters.html">characters</a></li>
            <li><a href="quiz.html">quiz</a></li>
            <li><a href="register.php">register</a></li>
        </ul>
    </div>
<body>
<div class="row">
  <div class="column">
    <div class="card">
    <img src="farmernhjo.png" alt="Avatar" style="width:100%">
    <h4><h1 class="my-5">Welcome <?php echo htmlspecialchars($_SESSION["username"]); ?></h4> 
    <p>Status: Moosaco friend!</p> 
    </div>
  </div>
<div class="column">
    <div class="card">
      <h3>Other moosaco lovers!</h3>
      <script> document.write(btns); </script>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <h3>Options</h3>
      <p><a href="reset-password.php" class="btn btn-warning">Reset Your Password</a></p>
      <p><a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a></p>
    </div>
  </div>
</div>
</body>
</html>
