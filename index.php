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
  <?php
  if(isset($_SESSION)){
    echo "<li><a href='logout.php'>Logout</a></li>";
    }else{
        
    }

  ?>
</ul>

<div style="padding:20px;background-color:#9fd3c7;height:1500px;text-align:center;">
  <h1>Welcome in OSU!NOSTALGIA</h1>
  <h4>your b99 osu! server</h4>
</div>

</body>
</html>


