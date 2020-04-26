<?php
session_start();

$con=mysqli_connect('localhost','vizard','vikas@96');

mysqli_select_db($con,'toodayin_userdata');


$mobileno=$_SESSION['mobile'];
$get_all_info="select * from user_info where mobile='$mobileno'";

$get_user_info=mysqli_query($con , $get_all_info);

$user_info_data=mysqli_fetch_array($get_user_info);


$user_id=$user_info_data[11];




$r="update notification set status=1 where user_id='$user_id' and status=0 " ;

$send1=mysqli_query($con, $r) or die( mysqli_error($con));


//rating


echo "done";








?>

