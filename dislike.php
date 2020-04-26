<?php

session_start();

$con=mysqli_connect('localhost','vizard','vikas@96');

mysqli_select_db($con,'toodayin_userdata');


$postid=$_REQUEST['q'];//post id

$mobile=$_SESSION['mobile']; 

$q1="select * from user_info where mobile='$mobile' ";

$k=mysqli_query($con,$q1);

$userinfo=mysqli_fetch_array($k);

$userid=$userinfo[11]; //user_id



  $get_post_data="select * from photo_info where post_id='$postid' ";

  $query_update=mysqli_query($con , $get_post_data);

  $result=mysqli_fetch_array($query_update);
  $post_type=$result[6];
  $post_user_id=$result[1];


$geting_user_data= "select * from user_info where user_id='$post_user_id'";

$like_see=mysqli_query($con , $geting_user_data);


$data_info=mysqli_fetch_array($like_see);

$like_data=$data_info[10];


//dislike

$q4= "select * from  post_like where (post_id='$postid'  and user_id='$userid') and (likes= 1 and dislikes is null) ";


$se=mysqli_query($con, $q4) ;


$b=mysqli_num_rows($se); //and if it return 0


if($b == 1)
{

 //if user already liked the post
$qa= "update post_like set dislikes=1 , likes= Null where (post_id='$postid' and user_id='$userid') and likes= 1 ";
$a1=mysqli_query($con, $qa);


$update_like=$like_data - 2;



 $getting_total_likes="select * from post_like where (post_id='$postid' and dislikes='1')";

 $total_count=mysqli_query($con,$getting_total_likes);


$total_num_dislike=mysqli_num_rows($total_count);

$typer=$post_type.".like";
$typer2=$post_type.".dislike";


 $update_notification="update notification set notification_type='$typer2'  where (user_id='$post_user_id' and not_user_id ='$userid') and (notification_type='$typer' and post_id='$postid') ";




  
$updating_data= "update user_info set likes='$update_like' where user_id='$post_user_id' ";





$flag=11;
echo $flag;




}
else{
	$q5= "select * from  post_like where (post_id='$postid' and user_id='$userid') and dislikes= 1 ";
	$a2=mysqli_query($con, $q5);
   $c=mysqli_num_rows($a2);

    if($c == 1)
    {

      $qb= " delete from post_like WHERE post_id='$postid' and user_id='$userid'  ";
      $a3=mysqli_query($con, $qb);


$update_like=$like_data + 1;



 $getting_total_likes="select * from post_like where (post_id='$postid' and dislikes='1')";

 $total_count=mysqli_query($con,$getting_total_likes);


$total_num_dislike=mysqli_num_rows($total_count);


$typer2=$post_type.".dislike";

 $update_notification="delete from notification  where (user_id='$post_user_id' and not_user_id ='$userid') and (notification_type='$typer2' and post_id='$postid') ";





  
$updating_data= "update user_info set likes='$update_like' where user_id='$post_user_id' ";




    $flag=0;
   echo $flag;
  

    }

    else{


       $qc="insert into post_like (post_id,user_id,dislikes) values ('$postid','$userid',1)" ;
         
         $a4=mysqli_query($con, $qc) ;


$update_like=$like_data - 1;



 $getting_total_likes="select * from post_like where (post_id='$postid' and dislikes='1')";

 $total_count=mysqli_query($con,$getting_total_likes);


$total_num_dislike=mysqli_num_rows($total_count);


$typer2=$post_type.".dislike";


$update_notification="insert into notification (user_id,post_id,notification_type,not_user_id) values ('$post_user_id','$postid','$typer2','$userid')";










  
$updating_data= "update user_info set likes='$update_like' where user_id='$post_user_id' ";







          $flag=1;
        echo $flag;
    }
}



$updated_notification=mysqli_query($con, $update_notification) or die( mysqli_error($con));
mysqli_query($con, $updating_data);

?>