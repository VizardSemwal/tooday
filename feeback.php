
<?php

session_start();






$matter=$_REQUEST['matter'];

$feedback=$_REQUEST['feedback'];



//connecting to that citydatabse

$con=mysqli_connect('localhost','vizard','vikas@96');

mysqli_select_db($con,'toodayin_userdata');




$q= "insert into feeback (matter ,feedback )values ('$matter','$feedback')";

$send=mysqli_query($con, $q) or die( mysqli_error($con));

if($send == 1)
{


 echo $send;

}
?>

