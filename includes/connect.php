<?php
$con=mysqli_connect('localhost','root','','ec');
if($con){
    echo "Welcome to Dashboard";
}else{
    die(mysqli_error($con));
}
?>