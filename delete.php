<?php
include("conn.php");
$id=$_GET["id"];
$delete=mysqli_query($conn,"DELETE FROM trainers WHERE id='$id'");
if($delete){
    echo"delted";
}

else{
    echo"not dleted";
}
?>