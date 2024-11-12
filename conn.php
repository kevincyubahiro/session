<?php
$conn=mysqli_connect("localhost","root","","school");
if($conn){
    echo"connected successfully"
}
else{
    echo"not";
}


?>