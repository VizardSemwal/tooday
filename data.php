
<?php

session_start();


$con=mysqli_connect('localhost','vizard','vikas@96');

mysqli_select_db($con,'toodayin_userdata');





$mobile=$_SESSION['mobile'];
$profilepic=$_SESSION['img'];




//variable intialization//

$name=$_POST['name'];
$occupation=$_POST['occupation'];
$city=$_POST['city'];

$Locality=$_POST['locality'];

$age=$_POST['age'];

$bio=$_POST['bio'];












//checking image extension


$filetmp1 =" ".$profilepic;



$destinationfile1=$profilepic;



move_uploaded_file($filetmp1, $destinationfile1);



//inserting data  in users table

$q= "update user_info set locality='$Locality' , name='$name' ,age='$age',city='$city' , profession='$occupation' ,profilepic='$destinationfile1',bio='$bio' where mobile='$mobile'";


$query=mysqli_query($con,$q);

header("location:profile.php?id=".$_SESSION['mobile']);







?>
