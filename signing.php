<?php

session_start();

$con=mysqli_connect('localhost','vizard','vikas@96');

mysqli_select_db($con,'toodayin_userdata'); 



$_SESSION['mobile']=$_POST['mobno'];



$mobile=$_POST['mobno'];


$location=$_SESSION['loca'];


$_SESSION['count']=0;


 $ip = file_get_contents('https://api6.ipify.org');
    
       
    // your ip address here
    $query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
    if($query && $query['status'] == 'success')
    { 
        $GLOBALS['city'] =  $query['city'];
    }


$_SESSION['location']=$city;


if(isset($_POST["submit"])) {


$file='profile.jpg';
	
$q="insert into user_info(mobile,location,likes,total_post,total_comment,profilepic,name,age,city,profession,bio,locality,contest) values('$mobile','$location',0,0,0,'$file','Your Name ?','??','Your city ?','what you do ?','Tell us Something about Yourself..','Your locality ?',0)";


$updated=mysqli_query($con, $q) or die( mysqli_error($con));

if($updated == 1)
{
 header("location:home.php");
}
}



?>