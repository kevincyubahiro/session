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
        
    </form>
</body>
</html>