<?php

session_start();

$con=mysqli_connect('localhost','vizard','vikas@96');

mysqli_select_db($con,'toodayin_userdata');


$postid=$_REQUEST['q'];//post id


$option=$_REQUEST['option'];//choosed option

$mobile=$_SESSION['mobile']; 

$q1="select * from user_info where mobile='$mobile' ";

$k=mysqli_query($con,$q1);

$userinfo=mysqli_fetch_array($k);

$userid=$userinfo[11]; //user_id

$typers=$option.".opinion";


$get_post_data="select * from photo_info where post_id='$postid' ";

	$query_update=mysqli_query($con , $get_post_data);

	$result=mysqli_fetch_array($query_update);

	$post_user_id=$result[1];





$row;

//dislike

$q4= "select * from  opinion_datas where post_id='$postid' and user_id='$userid' ";


$sen=mysqli_query($con, $q4);

$c=mysqli_num_rows($sen); //and if it return 0



if($c == 1)
{

 //if user already gaved opinion 
$qa= "update opinion_datas set opinion='$option' where post_id='$postid' and user_id='$userid' ";
$a1=mysqli_query($con, $qa);

 $update_notification="update notification set notification_type='$typers'  where (user_id='$post_user_id' and not_user_id ='$userid') and post_id='$postid' ";


}

else {

       $opinion="insert into opinion_datas (post_id,user_id,opinion) values ('$postid','$userid','$option')" ;

 $update_notification="insert into notification (user_id,post_id,notification_type,not_user_id) values ('$post_user_id','$postid','$typers','$userid')";



	$post_opinion=mysqli_query($con, $opinion) or die( mysqli_error($con));

  
	

$geting_user_data= "select * from user_info where user_id='$post_user_id'";

$like_see=mysqli_query($con , $geting_user_data);


$data_info=mysqli_fetch_array($like_see);

$like_data=$data_info[10];


$update_like=$like_data + 1;


  
$updating_data= "update user_info set likes='$update_like' where user_id='$post_user_id' ";

mysqli_query($con, $updating_data);


    }

$posted=mysqli_query($con, $update_notification) or die( mysqli_error($con));

// total no. of people like the post

$total_people_opinion= "select * from opinion_datas where post_id='$postid'";

$run_query=mysqli_query($con , $total_people_opinion);

$total_number=mysqli_num_rows($run_query);


//total people choosed 1

$total_people_opinion1= "select * from opinion_datas where (post_id='$postid' and opinion=1)";

$run_query1=mysqli_query($con ,$total_people_opinion1);

$total_people_choosed1=mysqli_num_rows($run_query1);

//total people choosed 2

$total_people_opinion2= "select * from opinion_datas where (post_id='$postid' and opinion=2)";

$run_query2=mysqli_query($con , $total_people_opinion2);

$total_people_choosed2=mysqli_num_rows($run_query2);

//total people choosed 3

$total_people_opinion3= "select * from opinion_datas where (post_id='$postid' and opinion=3)";

$run_query3=mysqli_query($con ,$total_people_opinion3);

$total_people_choosed3=mysqli_num_rows($run_query3);

//total people choosed 4

$total_people_opinion4= "select * from opinion_datas where (post_id='$postid' and opinion=4)";

$run_query4=mysqli_query($con ,$total_people_opinion4);

$total_people_choosed4=mysqli_num_rows($run_query4);




$row['a_percent']= ( $total_people_choosed1 / $total_number ) * 100;

$row['b_percent']= ( $total_people_choosed2 / $total_number ) * 100;

$row['c_percent']= ( $total_people_choosed3 / $total_number ) * 100;

$row['d_percent']= ( $total_people_choosed4 / $total_number ) * 100;


echo intval($row["a_percent"]).'|$|'.intval($row["b_percent"]).'|$|'.intval($row["c_percent"]).'|$|'.intval($row["d_percent"]);



?>