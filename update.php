<?php 
include("conn.php");
$select=mysqli_query($conn,"SELECT * FROM trainers WHERE id='$id'");
$row=mysqli_fetch_array($select)

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="text"name ="username"placeholder="username"values="<?php echo $row['username']?>">
        <input type="password"name ="password"placeholder="password"values="<?php echo $row['password']?>">
        <button name="submit">update</button>
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
        echo"data inserted";
    }
    else{
        echo"not data inserted";
    }
}


?>