<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text"name ="username"placeholder="username"><br><br>
        <input type="password"name ="password"placeholder="password"><br>
        <button name="submit">login</button><br><br>
        <a href="login.php">sign up</a>
    </form>
</body>
</html>
<?php
include("conn.php");
session_start();
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $login = mysqli_query($conn, "SELECT * FROM  trainers WHERE  username='$username' AND `password`='$password'");
    $count=mysqli_num_rows($login);
    if($count){
    $_SESSION=$_POST['username'];
    $_SESSION=$_POST['password'];


    
        header("location:home.php");
    }
    else{
        echo "<script>alert(wrong credential create your account)</script>";

    
    }
}
?>