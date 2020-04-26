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
  <title>Home Page</title>

<meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   
   <link rel="stylesheet" href="index.css">
   <script src="index.js" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js">
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="opinion.js"></script>
 <style type="text/css">







body::-webkit-scrollbar {
    display: none;
}

/* Hide scrollbar for IE and Edge */
body {
    -ms-overflow-style: none;
}














  /* Chat containers */
#container {
 
background-color:rgba(0, 0, 0, 0);
  
   height: auto;
  margin: 10px 0;
}

/* Darker chat container */

/* Clear floats */



.buttonoutline{


background: transparent;
border: none;
 outline: none !important;

   box-shadow: none;

}


.main-cmt-img{
    width: 40px !important;
    height: 40px !important;
    border-radius: 50%;
}



.user-comment-desc p{
  font-size: 14px;
  display: inline-block;
  float: left;
}



#fo{
  display: none;
}

.collapse1{

display: none;

}
.zoom:hover{
  transform: scale(1.1);
}

.collapse2{
    z-index: 9000;
position: absolute;
right: 8%;
bottom: 24%;

}
#fot{
position: absolute;
 bottom: 15%;
 right:8%;


}

@media screen and (max-width: 760px){

#fo{
  display: block;
}

.collapse1{

display: block;

}

.collapse2{
position: absolute;
right: 1%;
bottom: 11%;

}
#fot{
position: absolute;
 bottom: 2%;
 right:0%;


}

}

/* Style images */

/* Style the right image */


/* Style time text */

/* Style time text */


/* The container */








   
   div.scrollmenu {

  overflow: auto;
  white-space: nowrap;
}
    /* Hide scrollbar for Chrome, Safari and Opera */
 div.scrollmenu::-webkit-scrollbar {
  display: none;
}




.scrollmenu
{
background-color:rgba(255, 255, 255, 0.5);
backdrop-filter: blur(5px);
border-bottom-left-radius: 20px;
border-bottom-right-radius: 20px;
}
.scrollmenu:hover {

background-color:rgba(255, 255, 255, 0.5);
backdrop-filter: blur(5px);
}

.dropdown-item:hover {
background-color:transparent !important;

}

.dropdown-item:focus, .dropdown-item:active {
  outline: none !important;
  box-shadow: none !important;
}
.zoom:hover{
  transform: scale(1.1);
}
/* Hide scrollbar for IE and Edge */
 div.scrollmenu {
  -ms-overflow-style: none;
}





div.scrollmenu li{
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px;
  text-decoration: none;
}
[class*="status"]
{
 border-radius: 20px;
  width: 150px;
 box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2)
}

#up_pos{ position: fixed;
    bottom: 120px;
    right: 120px;
}
.fade {
  z-index: 25000;
      transition: opacity 0.5s ease-out !important;
}

.fader{

  transition: 0.2s ease-in-out !important;

}

#con{
  margin-left: -10px;
}

#commsc::-webkit-scrollbar {
    display: none;
 
}

/* Hide scrollbar for IE and Edge */
#commsc {
    -ms-overflow-style: none;
     width:100%;
    height: 270px;
   
    overflow: scroll;"
    
}

@media screen and (max-width: 700px){

[class*="status"]
{
   
  width: 90px;
}
#up_pos{ 
    bottom: 80px;
    right: 34px;

}
#con{
  
 margin-left: -5px;
  margin-right:-15px;
}
}

 </style>

</head>
<body >


 <?php require 'notification.php' ?>
 




<!-- toast-->





<!-- toast end-->



<div class=" scrollmenu sticky-top " style="z-index:20000; " >
  <div class="text-center"   >
<div class=" mt-md-2 mb-md-2 "  >
  
  <ul style="display: inline-block;">

          <li class="nav-item" >
          <a href="home.php">  <button type="button" class="btn btn-light status  "  style="border-radius: 20px">
All</button></a>

          </li>

           <li class="nav-item">

<a href="video.php"><button type="button" class="btn btn-light status   "  style="border-radius: 20px">
  Videos  
</button></a>
          </li>



           <li>

<a href="text.php"><button type="button" class="btn btn-light  status" >
  Text 
</button></a>
          </li>


           <li>

<a href="photo.php"><button type="button" class="btn btn-light status" >
  Photos
</button></a>
          </li>


           <li>

<button type="button" class="btn btn-light active status" >
  Opinion 
</button>
          </li>


           <li>

<button type="button" class="btn btn-light status" >
  Near Me 
</button>
          </li>


  </ul>
</div>
</div>
</div>




<?php require 'uploadbutton.php'; ?>



<?php  require 'background.php' ;   ?>






<!-- MAIN BODY -->



<div class="d-flex  justify-content-around flex-wrap">
   
  <?php



$displayquery="select * from photo_info where post_type='opinion' ORDER BY post_date DESC ";

$querydisplay=mysqli_query($con,$displayquery);


while($result =mysqli_fetch_array($querydisplay)){
$x=$result['user_id'];

?>

<?php


$displayquery2="select * from user_info where user_id='$x' ";
$querydisplay2=mysqli_query($con,$displayquery2);
while($rrw=mysqli_fetch_array($querydisplay2))
{
?>

<!-- card strat here-->

  <div class="p-2  flex-fill" style="width:450px">



    <div class="card m-2 " style="border-radius: 20px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);min-height: 575px; ">


<div class="d-flex container  flex-row bd-highlight  mt-4" >
  <div class="pl-2 pr-3 pt-2 pb-2 align-self-center bd-highlight">  <div id="pic<?php echo $result['post_id']; ?>"  style=" solid;width: 60px;height:60px;">
           <a href="profile.php?id=<?php echo $rrw['mobile'];?>"> <img class="card-img-bottom" src="<?php echo $rrw['profilepic'];?>" alt="Card image" style="width: 60px;height:60px; object-fit: cover;border-radius: 60px" ></a>
      </div></div>





  <div class="flex-grow-1  flex-column align-self-center  bd-highlight">
     <div class="pt-0 bd-highlight " ><h4 class="card-title" ><?php echo $rrw['name'];?></h4></div>
    <div class=" bd-highlight " >   <h6 ><i class="fa fa-map-marker" style="font-size:26px;color:red"></i> <?php echo $result['location'];?> <small id= "abcd" style="margin-top: 10px; margin-left: 10px;"><?php echo time_ago_in_php($result['post_date']); ?> </small>
</h6></div>




</div>


  <div class="p-2  justify-content-end align-self-center bd-highlight" ><div class="btn-group" style="float: right;">
  <button type="button" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <i class="fa fa-ellipsis-v" aria-hidden="true" style="font-size: 25px"></i>
  </button>
  <div class="dropdown-menu dropdown-menu-right">
    <button class="dropdown-item" type="button">Hide</button>
    <button class="dropdown-item" type="button">Block</button>
    <button class="dropdown-item" type="button">Report</button>
  </div>
</div></div>
</div>


<?php
}

?>
  
 <div class="card-body">
<div class="d-flex justify-content-center align-content-center " style="height: 250px"  >
 



<div class="p-2 m-0 text-center align-self-center" style="height: auto;" >
      


 <blockquote class="blockquote "><?php echo $result['description']; ?>
  </blockquote>

</div>




</div>
</div>





  <div class="card-footer">

<div class="container">
  <div class="d-flex mb-3 ">
    <div class="d-flex flex-grow-1 radio " style="width: 50%">
  <div class="p-2 align-self-center "><button type="button" class="buttonoutline" onclick="post_opinion1(<?php echo $result['post_id']; ?>)"  id="b1<?php echo $result['post_id']; ?>"   style="background: transparent;border: none;border-radius: 30px;"><img src="icon/radio1.png" id="a<?php echo $result['post_id']; ?>" name="optradio" width="30px" height="30px" style="padding: 4px" ></button></div>
  <div class="p-2 align-self-center flex fill"><label id="show1<?php echo $result['post_id']; ?>"><?php echo $result['option1']; ?></label></div>
</div>

  <div class="d-flex flex-grow-1 radio " style="width: 50%">
  <div class="p-2 align-self-center "> <button type="button" onclick="post_opinion2(<?php echo $result['post_id']; ?>)"  class="buttonoutline" id="b2<?php echo $result['post_id']; ?>"   style="background: transparent;border: none;border-radius: 30px;"><img src="icon/radio1.png" id="b<?php echo $result['post_id']; ?>" name="optradio" width="30px" height="30px" style="padding: 4px" ></button></div>
  <div class="p-2 align-self-center flex fill"><label id="show2<?php echo $result['post_id']; ?>"><?php echo $result['option2']; ?></label></div>
</div>


</div>
    
  <div class="d-flex justify-content-center mb-2">
    <div class="d-flex flex-grow-1 radio " style="width: 50%">
  <div class="p-2  align-self-center "><button class="buttonoutline" onclick="post_opinion3(<?php echo $result['post_id']; ?>)" type="button" id="b3<?php echo $result['post_id']; ?>"   style="background: transparent;border: none;border-radius: 30px;"><img src="icon/radio1.png" id="c<?php echo $result['post_id']; ?>"  name="optradio" width="30px" height="30px" style="padding: 4px" ></button></div>
  <div class="p-2 align-self-center flex fill"><label id="show3<?php echo $result['post_id']; ?>"><?php echo $result['option3']; ?></label></div>
</div>

  <div class="d-flex  radio " style="width: 50%">
  <div class="p-2  align-self-center "> <button class="buttonoutline" onclick="post_opinion4(<?php echo $result['post_id']; ?>)" id="b4<?php echo $result['post_id']; ?>"   type="button" ><img src="icon/radio1.png" id="d<?php echo $result['post_id']; ?>"  name="optradio" width="30px" height="30px" style="padding: 4px" ></button></div>
  <div class="p-2 align-self-center  flex fill"><label id="show4<?php echo $result['post_id']; ?>"><?php echo $result['option4']; ?> </label></div>
</div>

    
 
</div>
<script >
  
  

function post_opinion1(abc){

var post_id1=abc;

var a=1;


var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       
      var response=this.responseText;

     var update = new Array();

 document.getElementById('a'+post_id1).src="icon/radio2.png";
 document.getElementById('b'+post_id1).src="icon/radioh.png";
  document.getElementById('c'+post_id1).src="icon/radioh.png";
   document.getElementById('d'+post_id1).src="icon/radioh.png";



    document.getElementById('b2'+post_id1).disabled =true;
  document.getElementById('b3'+post_id1).disabled =true;
   document.getElementById('b4'+post_id1).disabled =true;

if(response.indexOf('|$|' != -1)) {
update = response.split('|$|');

    document.getElementById('show1'+post_id1).innerHTML=update[0]+"% People agree with you";
 document.getElementById('show2'+post_id1).innerHTML=update[1]+"% People agree with you";
  document.getElementById('show3'+post_id1).innerHTML=update[2]+"% People agree with you";
   document.getElementById('show4'+post_id1).innerHTML=update[3]+"% People agree with you";


}
  


    }
  };

xmlhttp.open("GET", "updateopinion.php?q=" +post_id1+"&option="+a , true);
    xmlhttp.send();


}
function post_opinion2(abc){

var post_id2=abc;

var b=2;




var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       
       var response=this.responseText;
       
     var update = new Array();

document.getElementById('b'+post_id2).src="icon/radio2.png";
 document.getElementById('a'+post_id2).src="icon/radioh.png";
  document.getElementById('c'+post_id2).src="icon/radioh.png";
   document.getElementById('d'+post_id2).src="icon/radioh.png";


   document.getElementById('b1'+post_id2).disabled =true;
  document.getElementById('b3'+post_id2).disabled =true;
   document.getElementById('b4'+post_id2).disabled =true;


if(response.indexOf('|$|' != -1)) {
update = response.split('|$|');

       document.getElementById('show1'+post_id2).innerHTML=update[0]+"% People agree with you";
 document.getElementById('show2'+post_id2).innerHTML=update[1]+"% People agree with you";
  document.getElementById('show3'+post_id2).innerHTML=update[2]+"% People agree with you";
   document.getElementById('show4'+post_id2).innerHTML=update[3]+"% People agree with you";



}
    }
  };


    xmlhttp.open("GET", "updateopinion.php?q=" +post_id2+"&option="+b , true);
    xmlhttp.send();

  
}


function post_opinion3(abc){

var post_id3=abc;

var c=3;

var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       
    
var response=this.responseText;

     var update = new Array();

document.getElementById('c'+post_id3).src="icon/radio2.png";
 document.getElementById('a'+post_id3).src="icon/radioh.png";
  document.getElementById('b'+post_id3).src="icon/radioh.png";
   document.getElementById('d'+post_id3).src="icon/radioh.png";

  
 document.getElementById('b1'+post_id3).disabled =true;
  document.getElementById('b2'+post_id3).disabled =true;
   document.getElementById('b4'+post_id3).disabled =true;

if(response.indexOf('|$|' != -1)) {
update = response.split('|$|');

       document.getElementById('show1'+post_id3).innerHTML= update[0]+"% People agree with you";
 document.getElementById('show2'+post_id3).innerHTML=update[1]+"% People agree with you";
  document.getElementById('show3'+post_id3).innerHTML=update[2]+"% People agree with you";
   document.getElementById('show4'+post_id3).innerHTML=update[3]+"% People agree with you";



}

    }
  };

    xmlhttp.open("GET", "updateopinion.php?q=" +post_id3+"&option="+c , true);
    xmlhttp.send();

  

}
function post_opinion4(abc){

var post_id4=abc;
var d=4;



var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       
     var response=this.responseText;
    
     var update = new Array();

document.getElementById('d'+post_id4).src="icon/radio2.png";
 document.getElementById('a'+post_id4).src="icon/radioh.png";
  document.getElementById('b'+post_id4).src="icon/radioh.png";
   document.getElementById('c'+post_id4).src="icon/radioh.png";


    document.getElementById('b1'+post_id4).disabled =true;
  document.getElementById('b2'+post_id4).disabled =true;
   document.getElementById('b3'+post_id4).disabled =true;


if(response.indexOf('|$|' != -1)) {
update = response.split('|$|');

       document.getElementById('show1'+post_id4).innerHTML=update[0]+"% People agree with you";
 document.getElementById('show2'+post_id4).innerHTML=update[1]+"% People agree with you";
  document.getElementById('show3'+post_id4).innerHTML=update[2]+"% People agree with you";
   document.getElementById('show4'+post_id4).innerHTML=update[3]+"% People agree with you";



}



    }
  };


    xmlhttp.open("GET", "updateopinion.php?q=" +post_id4+"&option="+d, true);
    xmlhttp.send();

  
}


  
</script>




  </div>


</div>





  </div>
</div>
<?php
}
?>
</div>



</body>
</html>






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

      return "$hours";

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