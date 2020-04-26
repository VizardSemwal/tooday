
<?php

session_start();

$_SESSION['upload']=0;
//connecting to that citydatabse

$con=mysqli_connect('localhost','vizard','vikas@96');

mysqli_select_db($con,'toodayin_userdata');



if(isset($_POST["submit"])) {




//variable intialization//

$location=$_POST['location'];

$text=$_POST['description'];

$option1=$_POST['Option1'];

$option2=$_POST['Option2'];

$option3=$_POST['Option3'];

$option4=$_POST['Option4'];


$mobile=$_SESSION['mobile'];

 $f="select * from User_info where mobile='$mobile'";

 $bb=mysqli_query($con,$f);

 $k=mysqli_fetch_array($bb);

 $user_id=$k[11];




//inserting data  in users table



$q= "insert into photo_info (user_id,location,description,post_type,option1,option2,option3,option4) values ('$user_id','$location','$text','opinion','$option1','$option2','$option3','$option4')";







$send=mysqli_query($con, $q) or die( mysqli_error($con));

if($send == 1)
{


 $total_post=$k[12];
echo $total_post;

 $add=$total_post + 1;


 $update="update user_info set total_post='$add' where mobile='$mobile'";


$updated=mysqli_query($con, $update) or die( mysqli_error($con));



//notification update


$getpost_id= "select * from photo_info where (user_id='$user_id' and description='$text') and ( option1='$option1' and post_type='opinion')";


$getting_post_id=mysqli_query($con , $getpost_id);

$get_array_data=mysqli_fetch_array($getting_post_id);

$post_id_get=$get_array_data[0];




 $update_notification="insert into notification (user_id,post_id,notification_type) values ('$user_id','$post_id_get','uploadopinion')";


$updated_notification=mysqli_query($con, $update_notification) or die( mysqli_error($con));








header('Location: ' . $_SERVER['HTTP_REFERER']);

$_SESSION['upload']=1;

}
else{
	echo "sorry";
}



}
?>

