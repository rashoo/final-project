<?php

session_start();






$con = mysqli_connect('us-cdbr-iron-east-04.cleardb.net','bcfd1d87108edf','6e549bb3','heroku_38ae91ec505f4fe');
if($con){
    echo "connection";
}else{
    echo "no";
}

//mysqli_select_db($con, 'sessionpractical');
mysqli_select_db($con, 'heroku_38ae91ec505f4fe');


$name = $_POST['user'];
$pass = $_POST['password'];

$q = "select * from signin where name  = '$name' && password = '$pass'";
$result=mysqli_query($con,$q);
$num = mysqli_num_rows($result);
if($num == 1){
    $_SESSION['username'] = $name;
    header('location:home.php');
}else{
    header('location:login.php');
}
?>