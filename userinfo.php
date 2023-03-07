<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo"Connected";
}else{
    echo"Not Connected"; 
}

mysqli_select_db($con, 'contactme');

$from_name = $_POST['from_name'];
$email_id = $_POST['email_id'];
$tel = $_POST['tel'];
$message = $_POST['message'];

$query = " insert into userinfodata (from_name, email_id, tel, message) 
values ('$from_name', '$email_id', '$tel', '$message') ";

echo "$query";
mysqli_query($con, $query);
 

?>