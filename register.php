<!DOCTYPE html>
<html>
<head>
<style>
body {margin:0;font-family: "Rajdhani", serif;}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  position: top;
  bottom: 0;
  width: 100%;
}

li {
  float: right;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}




</style>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rajdhani">

</head>
<body>

<ul>
  <li><a style="color:pink;"> osu!nostalgia</a></li>
  <li><a href="index.php">Home</a></li>
  <li><a href="register.php">Register</a></li>
  <li><a href="download.php">Download</a></li>
</ul>

<div style="padding:20px;background-color:#9fd3c7;height:1500px;text-align:center;">
<?php
ini_set('display_errors', 0);
error_reporting(E_ERROR | E_WARNING | E_PARSE); 
if($_GET['reg'] == "success"){
    echo "Registration done successfully!";
} else {
}?>
  <h1>Register</h1>
  <form method="POST" action="register-process.php">
    <h3>Username</h3>
    <input name="usr" />
    <h3>Password</h3>
    <input name="pass" type="password" />
    <h1>  </h1>
    <input type="submit" value="Create" />

  </form>
</div>

</body>
</html>


