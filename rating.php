
<?php

session_start();






$rating=$_REQUEST['z'];




//connecting to that citydatabse
$con=mysqli_connect('localhost','vizard','vikas@96');

mysqli_select_db($con,'toodayin_userdata');



$q= "insert into rating (rating )  values ('$rating')";

$send=mysqli_query($con, $q) or die( mysqli_error($con));





 echo $send;


?>

