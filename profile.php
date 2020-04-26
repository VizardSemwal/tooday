<?php

session_start();

if(!isset($_SESSION['mobile']))
{
  header("location:index.php");
}



?>


<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="index.css">
   <script src="index.js" ></script>
  <script src="croppie.js"></script>

    <link rel="stylesheet" href="croppie.css" />

<style >


#fo{
  display: none ;
}

#hidethis{

display: none ;

}

.zoom:hover{
  transform: scale(1.1);
}

#shadow
{

 box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

}


   
   body {

  overflow: auto;
  white-space: nowrap;
}
    /* Hide scrollbar for Chrome, Safari and Opera */
 body::-webkit-scrollbar {
  display: none;
}


@media screen and (max-width: 760px){

#fo{
  display: block;
}

#hidethis{

display: block;

}
#shadow{
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);

}
}




  .badge{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }

.hide::-webkit-scrollbar {
    display: none;
}

/* Hide scrollbar for IE and Edge */
.hide {
    -ms-overflow-style: none;
}
  .fa-star{

   text-shadow: 0 0 1px rgba(0, 0, 0, 0.5);
  }

  #crown{
    text-shadow: 0 0 1.5px rgba(0, 0, 0,0.5);
  }
</style>

</head>


<script type="text/javascript">

setInterval(function(){ 


  $("#notify2").load(location.href + " #notify2"); 
 



}, 2000);




</script>



<body >

<nav class="navbar navbar-expand-md sticky-top" style="background-color: #E65100">
 <a href="javascript:history.go(-1)"><button id="backbutton"  class="btn btn-light p-0 ml-3" style="width: 26px;height: 26px;outline: none;" >
   <i class="fa fa-chevron-left " aria-hidden="true" style="color: #E65100"  ></i>
 </button></a>
  <a class="navbar-brand ml-4 text-light active " href="profile.php?id=<?php echo $_SESSION['mobile'];?>" >P r o f i l e</a>
 <button id="fo" onclick="myFunction()" class="navbar-toggler mr-2 " type="button" data-toggle="collapse" data-target="#collapseExample" style="margin-right: 20px;outline: none;">
     <div id="notify2" style="display: inline-block;">

 <span  id="currentvalue" class="badge badge-danger" style="font-size: 17px;position: absolute;bottom: 16px;right: 75px"> <?php echo $_SESSION['count']; ?></span>
 

     
  </div>
     <i id="showoff" class="fa fa-plus-square" aria-hidden="true" style="color: white;font-size: 28px"></i>
  </button>
  <div class="collapse navbar-collapse  justify-content-end mr-md-5" id="collapsibleNavbar">
    <ul class="navbar-nav " >

      
 <li class="nav-item " >
       
          <div class="btn-group" id="getdata">
<button id="notification" onclick="fundo()" type="button" class="dropdown-toggle nav-link text-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: transparent;border: none;">
   Notification <div class="ml-2 mr-2" id="totalnotification2" style="display: inline-block;"><span  class="badge badge-light "  > <?php echo $_SESSION['count']; ?></span></div>
  </button>


<!-- all notification is Shown Here -->

<script>
$(document).ready(function(){


  $("#collapseExample").mouseleave(function(){
  $("#fo").click();
});
});
</script>



   <iframe src=notify.php id="abz"  class="dropdown-menu dropdown-menu-left mt-2 " style="z-index: 99999; height: 300px;overflow: scroll; border-bottom-left-radius: 20px;border-bottom-right-radius: 20px;
box-shadow: 0 4px 8px 0 rgba(255, 0, 0, 0.2), 0 6px 20px 0 rgba(255, 0, 0, 0.19);width:560px"></iframe>
  



<script type="text/javascript">

setInterval(function(){ 


  $("#totalnotification2").load(location.href + " #totalnotification2"); 
 $("#againnotify2").load(location.href + " #againnotify2"); 





}, 2000);




</script>



<script type="text/javascript">



function fundo(){

  var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       
        var avvw=this.responseText;
       
  

  
     
       }
    };
    xmlhttp.open("GET", "checkstatus.php", true);
    xmlhttp.send();
 

}

  
</script>


  

<!-- upload notification is Shown Here -->





        </div>   

      </li>


       <li class="nav-item">
        <a class="nav-link text-light" href="home.php" >Home</a>
      </li> 

      <li class="nav-item">
        <a class="nav-link text-light" href="contest.php">Contest</a>
      </li>
      
  <li class="nav-item">

       <div class="btn-group" id="gel">
<button id="notificationa"  type="button" class="dropdown-toggle nav-link text-light " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: transparent;border: none;">
   Setting 
  </button>
   <div  id="abzzz"  class="dropdown-menu dropdown-menu-right mt-2  " style="z-index: 99999; height: 225px; border-bottom-left-radius: 20px;border-bottom-right-radius: 20px;
box-shadow: 0 4px 8px 0 rgba(255, 0, 0, 0.2), 0 6px 20px 0 rgba(255, 0, 0, 0.19);width:510px">

   <div class="d-flex mt-3 ml-4 mr-4 mb-4 flex-row align-items-center bd-highlight dropdown-itdfsem" > 
      <div class="p-2 bd-highlight col-2" >
        
   Rate Us:
       
      </div>
      <div class=" bd-highlight offset-3 text-center col-7 " id="verifying"  style="display: none;" >
        <button type="button" class="btn btn-success mob" onclick="" style="border-radius: 5px;border-radius: 20px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);" disabled>Thank You..</button> 
     
       
      </div>
      
        <div class=" col-2 bd-highlight" id="rate1" >

          <button class="btn btn-light" type="button" value="20"  onclick="hiderall(this.value)" style="border-radius: 20px;border-radius: 5px;border-radius: 20px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);" > <i class='far fa-frown' style="font-size: 24px;"></i></button>
</div>
  <div class=" col-2 bd-highlight" id="rate2" >
    <button class="btn btn-light" type="button" value="40"  onclick="hiderall(this.value)" style="border-radius: 20px;border-radius: 5px;border-radius: 20px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);" ><i class='far fa-frown-open' style="font-size: 24px;"></i></button>
</div>
         <div class=" col-2  bd-highlight" id="rate3">
          <button class="btn btn-light" type="button" value="60"  onclick="hiderall(this.value)" style="border-radius: 20px;border-radius: 5px;border-radius: 20px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);"> <i class='far fa-grin' style="font-size: 24px;"></i></button>
</div>
<div class="col-2  bd-highlight" id="rate4" >
  <button class="btn btn-light" type="button" value="80"  onclick="hiderall(this.value)" style="border-radius: 20px;border-radius: 5px;border-radius: 20px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);"><i class='far fa-grin-beam' style="font-size: 24px;"></i></button>
</div>
<div class=" col-2  bd-highlight" id="rate5">
  <button class="btn btn-light" type="button" value="100"  onclick="hiderall(this.value)" style="border-radius: 20px;border-radius: 5px;border-radius: 20px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);"> <i class='far fa-grin-hearts' style="font-size: 24px;"></i></button>
</div>
      </div>

<script >
  function hiderall(id)

{
  var x=id;

  document.getElementById("rate1").style.display="none";
  document.getElementById("rate2").style.display="none";
  document.getElementById("rate3").style.display="none";
  document.getElementById("rate4").style.display="none";
  document.getElementById("rate5").style.display="none";
  document.getElementById("verifying").style.display="block";


 var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       
        
       
  

     
       }
    };
    xmlhttp.open("POST", "rating.php?z=" +x, true);
    xmlhttp.send();

}



</script>








      

   <div class="d-flex m-4  flex-row align-items-center bd-highlight dropdown-itdfsem" >
      <div class="p-2 bd-highlight col-5" >
        
   Give us Feedback
       
      </div>
       <div class=" bd-highlight col-7 text-center " >
        

  <button class="btn btn-light" type="button"  data-toggle="modal" data-target="#feedback" style="border-radius: 10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);"> Tell us how we can improve</button>

   
       
      </div>
      
    </div>



 
   <div class="d-flex m-4 flex-row align-items-center bd-highlight dropdown-itdfsem justify-content-center" >
      <div class="p-2 bd-highlight text-center col-6 " >
        <button type="button" data-toggle="modal" data-target="#deletemyaccount" class="btn btn-danger mob" onclick="" style="border-radius: 5px;border-radius: 20px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">Delete my account</button> 
     
       
      </div>
       <div class="p-2 bd-highlight col-6 text-center " >
        
   
     <button type="button" id="verifying" class="btn btn-info mob" onclick="logout()" style="border-radius: 5px;border-radius: 20px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">Log-out</button> 
      </div>
      
    </div>



        </div>  

      </div>

      </li> 

   
<script >
  
  function logout()
  {
  
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       
        var avv=this.responseText;

       if(avv == 1)
       {
            
         window.location.href = "index.php";
       }
     
       }
    };
    xmlhttp.open("GET", "logout.php", true);
    xmlhttp.send();


  }

</script>
     
    </ul>
  </div> 
</nav>

<script>
$(document).ready(function(){



  $("#abz").mouseleave(function(){
  $("#notification").click();
});
});
</script>






<script >


function myFunction() {
  var x = document.getElementById("showoff");
  if (x.className === "fa fa-plus-square") {
 document.getElementById("notify2").style.display="none";
 document.getElementById("showoff").className="fa fa-minus-square";
  document.getElementById("hidethis").style.display="block";
 

       
  } else {   document.getElementById("notify2").style.display="inline-block";
    document.getElementById("showoff").className="fa fa-plus-square";
     document.getElementById("hidethis").style.display="none";

  }
}
</script>
<?php
$con=mysqli_connect('localhost','vizard','vikas@96');

mysqli_select_db($con,'toodayin_userdata');


$mobileno=$_SESSION['mobile'];
$get_all_info="select * from user_info where mobile='$mobileno'";

$get_profile_pic=mysqli_query($con , $get_all_info);

$profile_pic=mysqli_fetch_array($get_profile_pic);


$p_pic=$profile_pic[8];
$post_user_ids=$profile_pic[11];

 ?>

 

<div class="collapse1" id="collapseExample" style="position: absolute;right: 0%;z-index: 9999;position: fixed;">
  <div class=" card  card-body border-0 " id="hidethis" style="background:transparent;margin-top: -20px;display: none;">
  <div class="d-flex flex-column" >
 





  <div class="p-2"><a href="notifyphone.php" ><button  type="button" style="background: transparent;border:none;outline: none;">
<div id="againnotify2" >

 <span   class="badge badge-danger" style="font-size: 17px;position: absolute;top:24px;right: 24px;border-radius: 20px;z-index: 3;"><?php echo $_SESSION['count']; ?></span>
 
</div>

    <img  class="zoom" src="icon/NOTIFICATION.png" onclick="fundo()" width="40px" height="auto"></button></a></div>
  <div class="p-2"><a href="contest.php"><button  type="button" style="background: transparent;border:none;outline: none;"><img  class="zoom" src="icon/CONTEST.png"  width="40px" height="auto"></button></a></div>
  <div class="p-2"><a href="setting.php"><button  type="button" style="background: transparent;border:none;outline: none;"><img class="zoom"  src="icon/SETTINGS.png"  width="40px" height="auto"></button></a></div>
 <div class="p-2"><button onclick="logout()" type="button" style="background: transparent;border:none;outline: none;"><img class="zoom"  src="icon/LOGOUT.png"  width="40px" height="auto"></button></div>


</div>
  </div>
</div>  

 <!-- NAvigation Bar -->
<div class="container-fluid mt-3 mb-3 " >
<div class="navbar navbar-expand-md  mt-2 mb-2 "  >
	<?php

$con=mysqli_connect('localhost','vizard','vikas@96');

mysqli_select_db($con,'toodayin_userdata');



 
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
      
 
 $id = explode('=',$url);

$postreviewprofile =end($id);










$mobo=$postreviewprofile;


$displayquery="select * from user_info where mobile=$mobo";

$querydisplay=mysqli_query($con,$displayquery);

while($result=mysqli_fetch_array($querydisplay)){

?>

<?php

$rating=$result[9];
$user_id=$result[11];
if($rating < 5)
{
?>

 <div class="text-center p-2 ml-md-5 " style="width: 80px;height: auto;">
  <a class="" href="#" ><img  src="icon/c1.png" alt="crown" ></a>
</div>

<?php 
}
else {
  ?>

 <div class="text-center p-2 ml-md-5 " style="width: 80px;height: auto;">
  <a class="" href="#" ><img  src="icon/crown.png" alt="crown" ></a>
</div>

<?php
}
?>



<div class="text-center" style="width: 30px;height: auto;margin-right: 20px" >
  <i class="fa fa-registered" style="color:#E65100;" aria-hidden="true"></i>


</div>

  <div class="collapse navbar-collapse" id="collapsibleNavbar2" style="display: block;">
   <div class="d-flex flex-row flex-fill justify-content-lg-end d-flex justify-content-between flex-wrap bd-highlight ">

    <!-- rating -->
  <div class=" bd-highlight" >
 <div class=" d-flex flex-row flex-wrap bd-highlight ml-md-5 ">

<div class="p-2 bd-highlight text-dark" style="font-size: 20px"> Rating</div>
<div class="p-2 ml-md-5 bd-highlight" >



<?php

$star1likes=$result[10];
$star2post=$result[12];
$star3comment=$result[13];
$star4reviews= $result[14];
$star5contest=$result[15];

$totalcount= $star1likes + $star2post + $star3comment + $star4reviews + $star5contest;


if($totalcount < 150)
{
?>

   <?php $rating_count=0; ?>
  <i class="fa fa-star" aria-hidden="true" style="font-size: 25px;color:  #D3D3D3 "></i>
    <i class="fa fa-star" aria-hidden="true" style="font-size: 25px;color:  #D3D3D3 "></i>
        <i class="fa fa-star" aria-hidden="true" style="font-size: 25px;color:  #D3D3D3 "></i>
        <i class="fa fa-star" aria-hidden="true" style="font-size: 25px;color: #D3D3D3"></i>
        <i class="fa fa-star" aria-hidden="true" style="font-size: 25px; color: #D3D3D3"></i>

  <?php
}
elseif($totalcount >= 150 && $totalcount <= 400)
{
  ?>

<?php $rating_count=1; ?>
  <i class="fa fa-star" aria-hidden="true" style="font-size: 25px;color:  #FFDF00 "></i>
    <i class="fa fa-star" aria-hidden="true" style="font-size: 25px;color:  #D3D3D3 "></i>
        <i class="fa fa-star" aria-hidden="true" style="font-size: 25px;color:  #D3D3D3 "></i>
        <i class="fa fa-star" aria-hidden="true" style="font-size: 25px;color: #D3D3D3"></i>
        <i class="fa fa-star" aria-hidden="true" style="font-size: 25px; color: #D3D3D3"></i>

  <?php
} 
elseif ($totalcount >= 400 && $totalcount <= 900) {

  ?>
  <?php $rating_count=2; ?>
         <i class="fa fa-star" aria-hidden="true" style="font-size: 25px;color:  #FFDF00 "></i>
    <i class="fa fa-star" aria-hidden="true" style="font-size: 25px;color:  #FFDF00 "></i>
        <i class="fa fa-star" aria-hidden="true" style="font-size: 25px;color:  #D3D3D3 "></i>
        <i class="fa fa-star" aria-hidden="true" style="font-size: 25px;color: #D3D3D3"></i>
        <i class="fa fa-star" aria-hidden="true" style="font-size: 25px; color: #D3D3D3"></i>
      
      <?php

     }     
elseif ($totalcount >= 900 && $totalcount <= 1900) {

  ?><?php $rating_count=3; ?>
         <i class="fa fa-star" aria-hidden="true" style="font-size: 25px;color:  #FFDF00 "></i>
    <i class="fa fa-star" aria-hidden="true" style="font-size: 25px;color:  #FFDF00 "></i>
        <i class="fa fa-star" aria-hidden="true" style="font-size: 25px;color:  #FFDF00 "></i>
        <i class="fa fa-star" aria-hidden="true" style="font-size: 25px;color: #D3D3D3"></i>
        <i class="fa fa-star" aria-hidden="true" style="font-size: 25px; color: #D3D3D3"></i>
      
      <?php

     }     
elseif ($totalcount >= 1900 ) {

      if($star5contest >= 1)

{
?>


<?php





?>

<?php $rating_count=5; ?>
     <i class="fa fa-star" aria-hidden="true" style="font-size: 25px;color:  #FFDF00 "></i>
    <i class="fa fa-star" aria-hidden="true" style="font-size: 25px;color:  #FFDF00 "></i>
        <i class="fa fa-star" aria-hidden="true" style="font-size: 25px;color:  #FFDF00 "></i>
        <i class="fa fa-star" aria-hidden="true" style="font-size: 25px;color: #FFDF00"></i>
        <i class="fa fa-star" aria-hidden="true" style="font-size: 25px; color: #FFDF00"></i>
  <?php      
}
else {
  ?>
  <?php $rating_count=4; ?>
    <i class="fa fa-star" aria-hidden="true" style="font-size: 25px;color:  #FFDF00 "></i>
    <i class="fa fa-star" aria-hidden="true" style="font-size: 25px;color:  #FFDF00 "></i>
        <i class="fa fa-star" aria-hidden="true" style="font-size: 25px;color:  #FFDF00 "></i>
        <i class="fa fa-star" aria-hidden="true" style="font-size: 25px;color: #FFDF00"></i>
        <i class="fa fa-star" aria-hidden="true" style="font-size: 25px; color: #D3D3D3"></i>
  <?php

}
?>



  


      
      <?php

     }   

?>

<!-- update rating -->

<?php



$get_all = "select rating FROM user_info where mobile='$mobo'";
$res = mysqli_query($con, $get_all) or die(mysql_error());
$arr = mysqli_fetch_row($res);
$field1 = $arr[0];




if($rating_count > $field1 )
{
  
$updating_rating="update user_info set rating='$rating_count' where mobile='$mobo' ";
mysqli_query($con,$updating_rating);

$new=$rating_count;
$kk=$rating_count."star";


 $update_notification="insert into notification (user_id,notification_type) values ('$user_id','$kk')";


$updated_notification=mysqli_query($con, $update_notification) or die( mysqli_error($con));



}










?>

      </div>



</div>
</div>
  <div class="bd-highlight ml-5" >

 <div class=" d-flex flex-row flex-wrap bd-highlight ">

<div class="p-2 bd-highlight text-dark" style="font-size: 20px"> Post's </div>
<div class="p-2 ml-md-5 bd-highlight">     
       <a><span class="badge badge-dark" style="min-width: 60px;font-size: 20px"><?php echo $result['total_post']; ?></span>
  </a>
     </div>



</div>

</div>


   <div class=" bd-highlight ml-md-5 mr-4" >
 <div class=" d-flex flex-row flex-wrap bd-highlight ">

<div class="pt-2 pr-2 pb-2 pl-1 p-md-2 bd-highlight text-dark" style="font-size: 20px"> Comments's </div>
<div class="p-2 ml-md-5 bd-highlight" ><a><span class="badge badge-dark" style="min-width: 60px;font-size: 20px"> <?php echo $result['total_comment']; ?></span>
  </a>
</div>
</div>
</div>
<div class="bd-highlight  ml-5 mr-xl-5" >

 <div class=" d-flex flex-row flex-wrap bd-highlight ">

<div class="p-2 bd-highlight text-dark" style="font-size: 20px"> Like's </div>
<div class="p-2 ml-md-5  bd-highlight" >     
       <a><span class="badge badge-dark" style="min-width: 60px;font-size: 20px"><?php echo $result['likes']; ?></span>
  </a>
     </div>



</div>

</div>
 

</div>

  </div> 

</div>
</div>

<!-- Navigation Ended -->




<div id="reload">
<div class="container-fluid  " >
<div class="d-flex  justify-content-around flex-wrap ">
   <div class="p-2 ml-lg-2 mr-lg-2  flex-fill" style="width:450px">
  <div class="card " id="shadow" style="height: 600px;border-radius: 15px ; ">
       <div class="card-header  " >


<div class="d-flex bd-highlight">
  <div class="flex-grow-1 bd-highlight" ><h1 class="display-4" style="font-size: 30px;text-shadow: 0 0 1.5px rgba(0, 0, 0,0.2);" ><?php echo $result['name']; ?></h1></div>
 




<?php 

if($_SESSION['mobile']== $postreviewprofile)
{

  ?>



 <div class="p-2 text-right flex-grow-1 bd-highlight " > <button type="button" class="btn btn-dark p-0 ml-3" onclick="editor()" style="width: 30px;height: 30px" ><i  id="editor" class="fa fa-pencil" aria-hidden="true" style="color:white"></i></button></div>
 


<?php
}

else{

   $check_notification="select * from notification where (user_id='$user_id' and not_user_id='$post_user_ids') and notification_type='view'";

   $run_this_query=mysqli_query($con,$check_notification);

   $total_row=mysqli_num_rows($run_this_query);
      
   if($total_row == 0)
{
    $update_notification="insert into notification (user_id,not_user_id,notification_type) values ('$user_id','$post_user_ids','view')";


$updated_notification=mysqli_query($con, $update_notification) or die( mysqli_error($con));
}

  ?>


  <?php
}

?>
      </div>
    </div>


<script >
  
function editor()
{
 
 var current=document.getElementById('editor').className;

 if(current == "fa fa-pencil")
 {
document.getElementById('editor').className="fa fa-times";
 document.getElementById('editinfo').style.display="block";
        document.getElementById('personalinfo').style.display="none";
 }
 else{
   document.getElementById('editor').className="fa fa-pencil";
    document.getElementById('personalinfo').style.display="block";
             document.getElementById('editinfo').style.display="none";
 }

}



</script>









    <div class="hide" style="overflow: scroll;">
      



      

<!-- EDITING user Info -->

<div class="container mt-4" id="editinfo" style="display: none;">

<?php require 'uploaddatainfo.php' ?>


</div>



<!-- Personal info -->

      <div id="personalinfo" style="display: block;" >
    <img class="card-img-top" src="<?php echo $result['profilepic']; ?>" alt="Card image" id="imgg" style="width:100%;height:auto;object-fit: contain;">
    <div class="card-body badge-faded  " >

      <div style="white-space: pre-line;">
        <blockquote class="blockquote"> <p class="mb-0">  <?php echo $result['bio'] ?> </p> </blockquote>
      </div>

</div>
<div class="card-footer ">
  <div class=" row">
      <div class="col-6 pl-5" >
       <blockquote class="blockquote"> <p class="mb-0 "> Age</p></blockquote>

      </div>
       <div class="col-6 pl-5" >
       <p class="lead pl-3 "><?php echo $result['age'] ?></p>

      </div>
      <div class="col-6 pl-5">
      <blockquote class="blockquote"> <p class="mb-0 ">Occupation</p></blockquote>

      </div>
       <div class="col-6 pl-5" >
          <p class=" pl-3 lead"> <?php echo $result['profession'] ?></p>

      </div>
   
      <div class="col-6 pl-5 ">
       <blockquote class="blockquote"> <p class="mb-0 "> Location </p>
         </blockquote>
      </div>
       <div class="col-6 pl-5">
        <p class=" pl-3 lead"> <?php echo $result['locality'] ?></p>
     </div>
     <div class="col-6 pl-5">
      <blockquote class="blockquote">
       <p class="mb-0 "> City</p>
       </blockquote>
     </div>
     <div class="col-6 pl-5 ">
        <p class="lead pl-3"><?php echo $result['city'] ?></p> 
     </div>
      </div> </div></div>
    </div>
</div>
</div>
<!-- Personal info  -->

<?php

}



?>


<!-- contest -->


<div class="p-2  flex-fill ml-lg-2 mr-lg-2" style="width:450px">
  <div class="card" id="shadow" style="height:600px;border-radius: 15px ;">
  <div class="card-header  " >


<div class="d-flex bd-highlight">
  <div class="flex-grow-1 bd-highlight" ><h1 class="h2" style="font-size: 30px;text-shadow: 0 0 1.5px rgba(0, 0, 0,0.2);" >Contest's</h1></div>

 <div class="p-2 text-right flex-grow-1 bd-highlight " > <button type="button" class="btn btn-dark p-0 ml-3" onclick="editor()" style="width: 30px;height: 30px" ><b>0</b></button></div>
</div>
</div>





    <div  class=" hide card-body p-4   "  style=" border-bottom-left-radius: 25px; border-bottom-right-radius: 25px;height: 300px;overflow:scroll;" >

      <!-- contest one -->

<div style="margin-top: 50% ;" class="text-center">
<h1 class="lead" >No active contest</h1> 
</div>



 <!-- contest two -->



  
</div>
 
  </div>

</div>
<!-- Reviews -->


<?php

$con=mysqli_connect('localhost','vizard','vikas@96');

mysqli_select_db($con,'toodayin_userdata');

?>


<div class="p-2 ml-lg-2 mr-lg-2 flex-fill" style="width:450px">
   <div class="card " id="shadow" style="height: 600px;border-radius: 15px ; ">
     <div class="card-header  " >


<?php

 
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
      
 
 $id = explode('=',$url);

$postreviewprofile =end($id);



$b="select * from reviews  where mobile='$postreviewprofile' "; //add order by asc on timestamp


$que1=mysqli_query($con,$b);


$d=mysqli_num_rows($que1);// counting total reviews

$rev=mysqli_fetch_array($que1);

$updatereview="update user_info set reviews='$d'  where mobile='$postreviewprofile'";

mysqli_query($con ,$updatereview)


?>



<div class="d-flex bd-highlight">
  <div class="flex-grow-1 bd-highlight" ><h2 class="h2" style="font-size: 30px; text-shadow: 0 0 1.5px rgba(0, 0, 0,0.2);" >Review's</h2></div>

 <div class="p-2 text-right flex-grow-1 bd-highlight " > <button type="button" class="btn btn-dark p-0 ml-3" onclick="editor()" style="width: 30px;height: 30px" >

<?php
if($d != 0)
{


 ?>

<b><?php echo $d; ?></b>
<?php



}
else{

?>
<b>0</b>
<?php
}
?>

</button>
</div>
</div>
</div>

   
    <div class="hide card-body p-4 "  style=" border-bottom-left-radius: 25px; border-bottom-right-radius: 25px;height: 300px;overflow:scroll;" >

<?php

$b="select * from reviews  where mobile='$postreviewprofile' order by post_date desc";
$d="select user_id from reviews  where mobile='$postreviewprofile'";

$cc=mysqli_query($con,$d);

$c=mysqli_fetch_array($cc);



$que1=mysqli_query($con,$b);
while($result =mysqli_fetch_array($que1))
{
   $z=$result['user_id'];
  ?>
<div class=" mb-5">
  <div class="d-flex">
  <div class="flex" ><div style=" width: 40px;height:40px">
   <?php
    $f="select * from User_info where user_id='$z'";
    $que3=mysqli_query($con,$f);
     while($res =mysqli_fetch_array($que3))
     {
   ?>

            <a href="profile.php?id=<?php echo $res['mobile'];?>"><img class="card-img-bottom" src="<?php echo $res['profilepic']; ?> " alt="Card image" style="width: 40px;height:40px; object-fit: cover;border-radius: 60px" ></a>
      </div></div>
  <div class="pl-2 mt-2 flex-fill text-left" ><h6 class="h6"><?php echo $res['name']; ?> </h6></div>
  <div class=" flex"><?php echo time_ago_in_php($result['post_date']); ?></div>
</div>
<?php }
?>
<div class="d-flex">
  </div>
  <div class="pl-4 ml-4  flex-fill"><?php echo $result['review']; ?></div>
 
</div>
<?php

}



?>


</div>


 <div class="card-footer text-muted " >
   <div class=" container input-group  " >
  <input type="text" class="form-control text-center" placeholder="Write a review" value="" onclick="changecolor()" id="review" aria-label="" aria-describedby="basic-addon2" style="border-bottom-left-radius: 50px;border-top-left-radius: 50px;">
  <div class="input-group-append">
    <button type="button" class="input-group-text btn btn-success" onclick="getURL()" id="basic-addon2" style="border-bottom-right-radius: 50px;border-top-right-radius: 50px;width:50px;"><i id="send" class="fa fa-arrow-right" aria-hidden="true"></i></button>
  <script>





function changecolor()
{
 
   document.getElementById('review').style.borderColor="rgb(206, 212, 218)";

document.getElementById('basic-addon2').style.backgroundColor="rgba(0, 0, 0, 0.125)";
document.getElementById('send').className="fa fa-arrow-right";

}







    function getURL() {
          var url=window.location.href;
           var re=document.getElementById('review').value;

          if(re == "")
          {



  document.getElementById('review').style.borderColor="#d9534f";
 document.getElementById('basic-addon2').style.backgroundColor="#d9534f";
 document.getElementById('send').className="fa fa-close";

          } 
          else{  
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       
        var reviewposted=this.responseText;
if(reviewposted == 1)
{
setTimeout(() => {
  $("#reviewpost").toast('show')
}, 0)


  $( "#reload" ).load(window.location.href + " #reload" );


}
          

      }
    };
    xmlhttp.open("GET", "review.php?q=" + url+"&r=" +re, true);
    xmlhttp.send();

}
    }
    </script>
     
 
  </div>
</div>
  </div>



</div>
</div>
  </div>

  </div>

</div>



</body>
</html>

<div>
<div aria-live="polite " aria-atomic="true"  style="position: absolute; min-height: 200px;">
  <div id="reviewpost" class="toast " data-animation="true" data-delay="10000" style="position: fixed; top: 100px; right: 40px;z-index: 5000;border-radius: 15px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);width: 500px">
    <div class="toast-header bg-success">
      
    <strong class="mr-auto text-light">Review</strong>
      <small class="text-light">1 mins ago</small>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="toast-body" id="bodytext">
      Your review has been submitted
    </div>
  </div>
</div>

</div>





<script>  




$(document).ready(function(){

   $("#my").click(function(){
    $("#myModal").modal("show");
  });

  $image_crop = $('#image_demo').croppie({
    enableExif: true,
    viewport: {
      width:400,
      height:300,
      type:'square' //circle
    },
    boundary:{
      width:400,
      height:300
    }
  });

  $('#upload_image').on('change', function(){
document.getElementById('image_demo').style.display="block";
          document.getElementById('image_demo2').style.display=" block";
  document.getElementById('uploaded_image').style.display=" none";
    var reader = new FileReader();
    reader.onload = function (event) {
      $image_crop.croppie('bind', {
        url: event.target.result
      }).then(function(){
      
      });
    }
    reader.readAsDataURL(this.files[0]);
    
  });

  $('.crop_image').click(function(event){
    $image_crop.croppie('result', {
      type: 'canvas',
      size: 'viewport'
    }).then(function(response){
      $.ajax({
        url:"test.php",
        type: "POST",
        data:{"image": response},
        success:function(data)
        {
       
          $('#uploaded_image').html(data);

          $('#abcz').html(data);
          document.getElementById('image_demo').style.display="none";
          document.getElementById('image_demo2').style.display="none";
           document.getElementById('uploaded_image').style.display=" block";
        }
      });
    })
  });

});  
</script>

<?php

function time_ago_in_php($timestamp){
  
  date_default_timezone_set("Asia/Kolkata");         
  $time_ago        = strtotime($timestamp);
  $current_time    = time();
  $time_difference = $current_time - $time_ago;
  $seconds         = $time_difference;
  
  $minutes = round($seconds / 60); // value 60 is seconds  
  $hours   = round($seconds / 3600); //value 3600 is 60 minutes * 60 sec  
  $days    = round($seconds / 86400); //86400 = 24 * 60 * 60;  
  $weeks   = round($seconds / 604800); // 7*24*60*60;  
  $months  = round($seconds / 2629440); //((365+365+365+365+366)/5/12)*24*60*60  
  $years   = round($seconds / 31553280); //(365+365+365+365+366)/5 * 24 * 60 * 60
                
  if ($seconds <= 60){

    return "Just Now";

  } else if ($minutes <= 60){

    if ($minutes == 1){

      return "one minute ago";

    } else {

      return "$minutes minutes ago";

    }

  } else if ($hours <= 24){

    if ($hours == 1){

      return "an hour ago";

    } else {

      return "$hours hrs ago";

    }

  } else if ($days <= 7){

    if ($days == 1){

      return "yesterday";

    } else {

      return "$days days ago";

    }

  } else if ($weeks <= 4.3){

    if ($weeks == 1){

      return "a week ago";

    } else {

      return "$weeks weeks ago";

    }

  } else if ($months <= 12){

    if ($months == 1){

      return "a month ago";

    } else {

      return "$months months ago";

    }

  } else {
    
    if ($years == 1){

      return "one year ago";

    } else {

      return "$years years ago";

    }
  }
}


?>


<div class="container-fluid" >

<div class="modal fade" id="feedback" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="z-index: 30000;">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="border-radius: 20px;">
      <div class="modal-header border-0">
        <h5 class="modal-title" id="exampleModalLonge">Feed Back</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
       <form    >

<div class="modal-body">
          <div class="form-group">
            <label for="recipient-name"  class="col-form-label">What's the Matter</label><br>
            <select class="form-control"  id="matter" required>
  <option>App related issue</option>
   <option>Feature Related issue</option>
    <option>Suggestions</option>
     <option>privacy</option>
      <option>other</option>

</select>
          </div>
          
          <div class="form-group">
            <label for="message-text"   class="col-form-label">Description:</label>
            <textarea class="form-control" value=" "   id="feed" required maxlength="150"></textarea>
          </div>
        


      </div>
      <div class="modal-footer border-0 justify-content-center">
       
        <button type="button" onclick="feek()" name="submit" class="btn btn-danger " style="color: white;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); ">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>
</div>
<script>
  
function feek(){


var matter=document.getElementById('matter').value;
var feedback=document.getElementById('feed').value;

 var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       
        var avv=this.responseText;
       


       if(avv == 1)
       {
               $('#feedback').modal('hide')
         $('#feedbackmodel').modal('show')
       }
     
       }
    };
    xmlhttp.open("POST", "feeback.php?matter=" +matter+"&feedback=" +feedback, true);
    xmlhttp.send();




}







</script>

<div class="modal fade" id="feedbackmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true"  style="z-index: 99999;">
  <div class="modal-dialog modal-dialog-centered" role="document" >
    <div class="modal-content border-0" style="border-radius: 20px;">
      <div class="modal-header  border-0" >
        <h5 class="modal-title ml-5 " id="exampleModalLongTitle" style="color: #E65100" >Thanks for your Valuable feeback</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
    </div>
  </div>
</div>



<div class="container-fluid" >

<div class="modal fade" id="deletemyaccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="z-index: 30000;">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="border-radius: 20px;">
      <div class="modal-header border-0">
        <h5 class="modal-title" id="exampleModalLonge">Delete Your Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
       <form    >

<div class="modal-body">
      
      <h6 class="blockquote">Please don't leave us,we Really need you..<i class='fas fa-sad-tear ml-1' style='font-size:34px;color:#E65100 '></i> </h6>
      </div>
      <div class="modal-footer border-0 justify-content-center">
       
        <button type="button"  data-dismiss="modal"  class="btn btn-danger mr-2" style="color: white;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius: 20px; ">Ok i will stay</button>

         <button type="button" onclick="deletemyaccount()" name="submit" class="btn btn-danger ml-2 " style="color: white;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius: 20px; ">Sorry I can't</button>
      </div>
      </form>
    </div>
  </div>
</div>
</div>

<script >
  
function deletemyaccount()
{




 var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       
        var avv=this.responseText;
       
  if(avv == 1)
  {
window.location.href = "index.php";
   }   
     
       }
    };
    xmlhttp.open("POST", "deletemyaccount.php", true);
    xmlhttp.send();

}



</script>