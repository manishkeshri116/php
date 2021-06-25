<?php
$con = mysqli_connect('localhost','root');

if($con){
    echo"connection successful";
}else{
    echo"no connection";
}

mysqli_select_db($con,'youtubeuserdata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$_query = " insert into userinfodata (user,email,mobile,comment) 
values ('$user','$email','$mobile','$comments') ";

mysqli_query($con,$_query);

header('location:index.php')


?>