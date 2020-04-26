
 <?php

session_start();
$mobile=$_REQUEST["q"];

$con=mysqli_connect('localhost','vizard','vikas@96');

mysqli_select_db($con,'toodayin_userdata');

$check = "select * from user_info where mobile='$mobile'";
    

 $ip = file_get_contents('https://api6.ipify.org');
    
       
    // your ip address here
    $query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
    if($query && $query['status'] == 'success')
    { 
        $GLOBALS['city'] =  $query['city'];
    }


$_SESSION['location']=$city;


$result = mysqli_query($con ,$check);

$num=mysqli_num_rows($result);

if ($num){

$GLOBALS['resp']=1;

}

else{
  $GLOBALS['resp']=0;
	
}
 echo $resp;
 ?>

