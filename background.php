<?php


$con=mysqli_connect('localhost','vizard','vikas@96');

mysqli_select_db($con,'toodayin_userdata');


$fetch_post_data="select * from photo_info";

$get_data_query=mysqli_query($con,$fetch_post_data);



while($result=mysqli_fetch_array($get_data_query))
{

$time_stamp=$result[3];



  
  date_default_timezone_set("Asia/Kolkata");         
  $time_ago        = strtotime($time_stamp);
  $current_time    = time();
  $time_difference = $current_time - $time_ago;
  $seconds         = $time_difference;
    
   
     



if ($seconds >= 86400)

{

  	$post_id=$result[0];
   


$delete_like="delete from post_like where post_id='$post_id'";
$delete_comment="delete from post_comment where post_id='$post_id'";
$delete_opinion="delete from opinion_datas where post_id='$post_id'";
$delete_notification="delete from notification where post_id='$post_id'";
$delete_post="delete from photo_info where post_id='$post_id'";



$like_delete=mysqli_query($con, $delete_like) or die( mysqli_error($con));
$comment_delete=mysqli_query($con, $delete_comment) or die( mysqli_error($con));
$delete_opinio=mysqli_query($con, $delete_opinion) or die( mysqli_error($con));
$delete_notification=mysqli_query($con, $delete_notification) or die( mysqli_error($con));
$post_delete=mysqli_query($con, $delete_post) or die( mysqli_error($con));




}


}






?>



