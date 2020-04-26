<?php
session_start();


$con=mysqli_connect('localhost','vizard','vikas@96');

mysqli_select_db($con,'toodayin_userdata');

$post_id=$_REQUEST['id'];

$comment=$_REQUEST['comment'];


$mobile=$_SESSION['mobile'];

$fetchuserid="select * from user_info where mobile='$mobile'";

$data=mysqli_query($con,$fetchuserid);

$gettinrow=mysqli_fetch_array($data);

$userid=$gettinrow[11];

$senddata="insert into post_comment (user_id,comment,post_id) values ('$userid','$comment','$post_id')";

$send=mysqli_query($con, $senddata) or die( mysqli_error($con));



	$get_post_data="select * from photo_info where post_id='$post_id' ";

	$query_update=mysqli_query($con , $get_post_data);

	$result=mysqli_fetch_array($query_update);
 $post_type=$result[6];
	$post_user_id=$result[1];

$typer=$post_type.".comment";
$geting_user_data= "select * from user_info where user_id='$post_user_id'";

$like_see=mysqli_query($con , $geting_user_data);


$data_info=mysqli_fetch_array($like_see);

$comment_data=$data_info[13];


$update_comment=$comment_data + 1;




  
$updating_data= "update user_info set total_comment='$update_comment' where user_id='$post_user_id' ";

mysqli_query($con, $updating_data);




 $getting_total_comment="select * from post_comment where post_id='$post_id'";

 $total_count=mysqli_query($con,$getting_total_comment);


$total_num_comment=mysqli_num_rows($total_count);




$update_notification="insert into notification (user_id,post_id,notification_type,not_user_id) values ('$post_user_id','$post_id','$typer','$userid')";




$updated_notification=mysqli_query($con, $update_notification) or die( mysqli_error($con));












echo $updated_notification;

?>