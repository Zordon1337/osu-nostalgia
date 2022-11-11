<?php
include("config.php");
$user = $_POST['usr'];
$pass = $_POST['pass'];

$encryptedpass = md5($pass);

$sql = "INSERT INTO `users`(`username`, `password`, `restricted`) VALUES ('$user','$encryptedpass','[value-3]')";

$query = mysqli_query($conn, $sql);
if($query)
{
    session_start();
    $_SESSION['username'] = $user;
    $_SESSION['password'] = $pass;
    Header('Location: register.php?reg=success');
    
}
else
{
    echo "Something went wrong while registration!<BR>";
    echo "Error Description: ", mysqli_error($conn);
}

?>