<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text"name ="username"placeholder="username">
        <input type="password"name ="password"placeholder="password">
        <button name="submit">login</button>
    </form>
</body>
</html>
<?php
include("conn.php");
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $insert = mysqli_query($conn, "INSERT INTO trainers (username, password) VALUES ('$username', '$password')");


    if($insert){
        header("location:insert.php");
    }
    else{
        echo"not data inserted";
    }
}


?>