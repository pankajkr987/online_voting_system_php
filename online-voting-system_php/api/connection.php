<?php
$connect = mysqli_connect("localhost", "root", "", "sample testing");
if($connect){
    echo "connected:";
}
else{
    echo "Not Connected:";
}
?>