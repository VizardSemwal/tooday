<?php

session_start();

$con=mysqli_connect('localhost','vizard','vikas@96');

mysqli_select_db($con,'toodayin_userdata');



$url=$_REQUEST["q"];
$review=$_REQUEST["r"];


//getting user id 


$ru=$_SESSION['mobile'];

$k="select * from user_info where mobile='$ru'";

$que=mysqli_query($con,$k);

$result2=mysqli_fetch_array($que);

$user_id=$result2[11];




$id = explode('=',$url);

$postreviewprofile =end($id);

$geting_user_id="select * from user_info where mobile='$postreviewprofile'";

$get_id=mysqli_query($con,$geting_user_id);

$get_array=mysqli_fetch_array($get_id);

$user_info_id=$get_array[11];


$r="insert into reviews (user_id , mobile , review) values ('$user_id' , '$postreviewprofile' , '$review')";

$send=mysqli_query($con, $r) or die( mysqli_error($con));


$update_notification="insert into notification (user_id,notification_type,not_user_id) values ('$user_info_id','review','$user_id')";


$updated_notification=mysqli_query($con, $update_notification) or die( mysqli_error($con));
echo $send;



?>