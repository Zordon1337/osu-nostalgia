<?php 
// db connect
include ("src/pdoconnect.php");
$user = $_GET['username'];
$pass = $_GET['password'];
// user check
$stmt = $db->prepare("SELECT * FROM users WHERE username = ? AND password = ?;");
$stmt->execute(array(trim($user), trim($pass)));

if($stmt->rowCount() >= 1) {
    echo "1";
} else {
    echo "0";
}
?>