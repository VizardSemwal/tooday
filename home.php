<?php

session_start();

if(!isset($_SESSION['mobile']))
{
  header("location:index.php");
}

?>
<?php  require 'background.php' ;   ?>
<!DOCTYPE html>
<html>
<head>
  <title>Home Page</title>

<meta charset="utf-8">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   
   <link rel="stylesheet" href="index.css">
   <script src="index.js" ></script>
<script src="https://kit.fontawesome.com/b76a844ebd.js" crossorigin="anonymous"></script>

 <style type="text/css">

img {
    image-orientation: from-image !important;
}

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

.user-comment:before{
    content: "";
    height: 0;
    width: 0;
    top: 0;
    left: -10px;
    position: absolute;
    border-style: solid;
    border-width: 13px 0 0 13px;
  border-color: #f3f3f3 transparent transparent transparent; 
}

/* Style images */

/* Style the right image */


/* Style time text */

/* Style time text */

   
   div.scrollmenu {

  overflow: auto;
  white-space: nowrap;
}
    /* Hide scrollbar for Chrome, Safari and Opera */
 div.scrollmenu::-webkit-scrollbar {
  display: none;
}

.overlay {
  position: absolute;

  bottom:0;
  left: 0;
  right: 0;
background-color:rgba(0, 0, 0, 0.5);
backdrop-filter: blur(5px);
  overflow: scroll;
  width: 100%;
  height: auto;

      transition: 1s ease-in-out;
border-radius: 20px;

   
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
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
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

#scroolable::-webkit-scrollbar {
    display: none;
}

/* Hide scrollbar for IE and Edge */
#scroolable {
    -ms-overflow-style: none;
}




#dropdowns::-webkit-scrollbar {
    display: none;
}

/* Hide scrollbar for IE and Edge */
#dropdowns {
    -ms-overflow-style: none;
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
right: 8.5%;
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
<body data-spy="scroll" data-offset="50">



 <?php require 'notification.php' ?>

 






<!-- toast-->


<!-- toast end-->



<div class=" scrollmenu sticky-top " style="z-index: 20000;" >
  <div class="text-center"   >
<div class=" mt-md-2 mb-md-2 "  >
  
  <ul style="display: inline-block;">

          <li class="nav-item" >
             <button type="button" class="btn btn-light active status"  style="border-radius: 20px">
All</button>

          </li>

           <li class="nav-item">

<a href="video.php" ><button type="button" class="btn btn-light status   "  style="border-radius: 20px">
  Videos  
</button></a>
          </li>



           <li>

<a href="text.php"> <button type="button" class="btn btn-light status" >
  Text 
</button></a>
          </li>


           <li>

<a href="photo.php"><button type="button" class="btn btn-light status" >
  Photos
</button></a>
          </li>


           <li>

<a href="opinion.php"><button type="button" class="btn btn-light status" >
  Opinion 
</button></a>
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

<div class="d-flex  justify-content-around flex-wrap">
  <?php



$displayquery="select * from photo_info where post_type='image' or (post_type='video' or post_type='text') ORDER BY post_date DESC ";

$querydisplay=mysqli_query($con,$displayquery);


while($result =mysqli_fetch_array($querydisplay)){
$x=$result['user_id'];
$typ=$result['post_type'];


?>
 <div class="p-2  flex-fill" style="width:450px">
   <div class="card m-2 " style="border-radius: 20px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);min-height: 575px; ">
    <div class="card-body row" id="post<?php echo $result['post_id'] ?>">
<?php


$displayquery2="select * from user_info where user_id='$x' ";
$querydisplay2=mysqli_query($con,$displayquery2);

while($rrw=mysqli_fetch_array($querydisplay2))
{
?>
<div class="container" id="pic<?php echo $result['post_id']; ?>" >
<div class="d-flex container  flex-row bd-highlight " >
  <div class="pl-2 pr-3 pt-2 pb-2 align-self-center bd-highlight">  <div  style=" solid;width: 60px;height:60px;">
           <a href="profile.php?id=<?php echo $rrw['mobile'];?>"> <img class="card-img-bottom" src="<?php echo $rrw['profilepic']; ?> " alt="Card image" style="width: 60px;height:60px; object-fit: cover;border-radius: 60px" ></a>
      </div></div>





  <div class="flex-grow-1  flex-column align-self-center  bd-highlight">
     <div class="pt-0 bd-highlight " ><h4 class="card-title" ><?php echo $rrw['name']; ?> </h4></div>
    <div class=" bd-highlight " >   <h6 ><i class="fa fa-map-marker" style="font-size:26px;color:red"></i> <?php echo $result['location']; ?>  <small id= "abcd" style="margin-top: 10px; margin-left: 10px;"><?php echo time_ago_in_php($result['post_date']); ?> </small>
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
</div>
<?php
}

?>
    <div id="aaaa<?php echo $result['post-id']; ?>" class="card-body-row mt-3 mb-2" style="width: 100%; height: 255px;" >
      <div >


  <div style="width: 100%; height: 255px;">


<?php if ($typ =='image')
{
 ?>

<div class=" " style="float: right;margin-right: 60px">
<button class="active mt-3" onclick="fullscreen(<?php echo $result['post_id']; ?>)" id="full<?php echo $result['post_id'] ;?>" style="position: absolute;float:left;z-index: 999;display:block;background-color: Transparent;border:none"><i class="fa fa-arrows-alt" aria-hidden="true" style="color: white;text-shadow: 0 1px 5px  black"></i></button>

<button class="active mt-3" onclick="halfscreen(<?php echo $result['post_id'] ;?>)" id="half<?php echo $result['post_id'] ;?>" style="position: absolute;float:left;display:none;z-index: 999;background-color: Transparent;border:none"><i class="fa fa-times" aria-hidden="true" style="color: white;font-size: 30px;text-shadow: 0 1px 5px  black"></i></button>


<script >


  function fullscreen(abc){
 var fully=abc;
      
      document.getElementById('full'+fully).style.display="none";
      document.getElementById('half'+fully).style.display="block";
      document.getElementById('aa'+fully).style.height="560px";

       document.getElementById('aa'+fully).style.objectFit="cover";
      document.getElementById('aa'+fully).style.marginTop ="-29px";
      
         document.getElementById('b'+fully).style.display="none";
        
        document.getElementById('pic'+fully).style.display="none";
          document.getElementById('hideer'+fully).style.display="none";





  }
  
function halfscreen(abc)
{

var fully=abc;
      
     document.getElementById('full'+fully).style.display="block";
      document.getElementById('half'+fully).style.display="none";


document.getElementById('b'+fully).style.display="block";
      document.getElementById('aa'+fully).style.height="255px";
             document.getElementById('aa'+fully).style.objectFit="fill";
      document.getElementById('aa'+fully).style.marginTop ="";
     

        document.getElementById('pic'+fully).style.display="block";
          document.getElementById('hideer'+fully).style.display="inline-block";

}











</script>









</div>




  <img id="aa<?php echo $result['post_id']; ?>" class="card-img-bottom" src="<?php echo $result['post']; ?>" alt="Card image" style="width: 100%; height: 255px;object-fit:fill;border-radius: 10px;">


      </div>






      </div>
  </div>
     
  



   </div>
       <p class="ml-4 mr-4 card-text" style="text-shadow: 0 1px 5px  white; color: black"><?php echo $result['description'] ?></p>
 
<?php
}
elseif ($typ =='video') {
?>
<div class=" " style="float: right;margin-right: 60px">
<button class="active mt-3" onclick="fullscreen(<?php echo $result['post_id']; ?>)" id="full<?php echo $result['post_id'] ;?>" style="position: absolute;float:left;z-index: 999;display:block;background-color: Transparent;border:none"><i class="fa fa-arrows-alt" aria-hidden="true" style="color: white;text-shadow: 0 1px 5px  black"></i></button>

<button class="active mt-3" onclick="halfscreen(<?php echo $result['post_id'] ;?>)" id="half<?php echo $result['post_id'] ;?>" style="position: absolute;float:left;display:none;z-index: 999;background-color: Transparent;border:none"><i class="fa fa-times" aria-hidden="true" style="color: white;font-size: 30px;text-shadow: 0 1px 5px  black"></i></button>


<script >


  function fullscreen(abc){
 var fully=abc;
      
      document.getElementById('full'+fully).style.display="none";
      document.getElementById('half'+fully).style.display="block";
      document.getElementById('aa'+fully).style.height="560px";

       document.getElementById('aa'+fully).style.objectFit="cover";
      document.getElementById('aa'+fully).style.marginTop ="-29px";
      
         document.getElementById('b'+fully).style.display="none";
        
        document.getElementById('pic'+fully).style.display="none";
          document.getElementById('hideer'+fully).style.display="none";





  }
  
function halfscreen(abc)
{

var fully=abc;
      
     document.getElementById('full'+fully).style.display="block";
      document.getElementById('half'+fully).style.display="none";


document.getElementById('b'+fully).style.display="block";
      document.getElementById('aa'+fully).style.height="255px";
             document.getElementById('aa'+fully).style.objectFit="fill";
      document.getElementById('aa'+fully).style.marginTop ="";
     

        document.getElementById('pic'+fully).style.display="block";
          document.getElementById('hideer'+fully).style.display="inline-block";

}











</script>









</div>



<video id="aa<?php echo $result['post_id']; ?>" style="width: 100%; height: 255px;object-fit: cover;border-radius: 10px;" controls>

  <source src="<?php echo $result['post']; ?>" type="video/mp4">
    <source src="<?php echo $result['post']; ?>" type="video/mkv">
      <source src="<?php echo $result['post']; ?>" type="video/mov">
        <source src="<?php echo $result['post']; ?>" type="video/mpeg">
 
</video>

      </div>






      </div>
  </div>
     
  



   </div>
       <p class="ml-4 mr-4 card-text" style="text-shadow: 0 1px 5px  white; color: black"><?php echo $result['description'] ?></p>


<?php
}
elseif ($typ =='text') {
?>
    <div class=" container card-body-row   " style="width: auto; height: auto;float: center;" >
      
   <div class="text-center m-0 p-5"  width="100%" height="auto" style="  ">

 <blockquote class="blockquote"><?php echo $result['text']; ?>
  </blockquote>





</div>
    </div> 
  
      </div>






      </div>
  </div>
     
  



   </div>
       


<?php
}

?>










<?php 

$post_id= $result['post_id'];
$totalcomment="select * from post_comment where post_id='$post_id' order by comment_id DESC";
$nucomments=mysqli_query($con,$totalcomment);
 
$rows=mysqli_num_rows($nucomments);


?>


<div id="c<?php echo $result['post_id']; ?>" class=" collapse container  " >

  <div id="scroolable" class="overlay card mt-4 mb-0" style="width:100%;height: 570px;z-index: 1000">



<!--fetch comments -->
<?php

while($getinfo=mysqli_fetch_array($nucomments))
{
  $time=$getinfo[4];
$comment=$getinfo[3];
$user_info=$getinfo[2];
?>
 
<?php


$fetchuserinfo="select * from user_info where user_id='$user_info'";

$goin=mysqli_query($con,$fetchuserinfo);

$getarray=mysqli_fetch_array($goin);

$profilepic=$getarray[8];
$name=$getarray[2];
$mobile=$getarray[0];

?>
<div class="container-fluid " style="display: inline-block;">
<div id="container" class="container btn-light">

<?php  

if($mobile == $_SESSION['mobile'])
{
?>
   <div class="col-lg-11 offset-lg-1">
<div class="row comment-box p-1 pt-3 pr-2">
                  <div class="col-lg-2 col-3 pl-2 user-img text-center">
                   <a href="profile.php?id=<?php echo $mobile ?>"> <img src="<?php echo $profilepic; ?>" class="main-cmt-img"></a>
                  </div>
                  <div class="col-lg-10 col-9 user-comment  rounded pb-1">
                       <div class="row bg-light">
                             <div class="col-lg-12 col-12 border-bottom pr-0">
                                <p class="w-100 p-2 m-0"><?php echo $comment; ?></p>
                             </div>
                               </div> 
                               <div class="user-comment-desc p-1 pl-2">
                                    <p class="m-0 mr-2"><i class="fa fa-angle-right" style="color: white;" aria-hidden="true"></i></p>                      
                                    <p class="m-0 mr-2" style="color: white;" ><?php echo $name;  ?></p> 
                                    <p class="m-0 ml-2 float-right"> <span style="color: white;"><i class="fa fa-clock-o mr-1" aria-hidden="true"></i><?php echo time_ago_in_php($time); ?></span></p>                  
                                </div>  
                     
                        
                  </div>
                </div>

</div>
<?php

}
else
{
  ?>
<div class="row comment-box p-1 pt-3 pr-4">
                  <div class="col-lg-2 col-3 user-img text-center ">
                  <a href="profile.php?id=<?php echo $mobile ?>">  <img src="<?php echo $profilepic; ?>" class="main-cmt-img"> </a>
                  </div>
                  <div class="col-lg-10 col-9 user-comment rounded pb-1 ">
                       <div class="row bg-light">
                             <div class="col-lg-12 col-12 border-bottom pr-0">
                               <p class="w-100 p-2 pb-0 m-0" ><?php echo $comment; ?></p>
                             </div>
                               </div> 
                               <div class="user-comment-desc p-1 pl-2">
                                    <p class="m-0 mr-2" ><i class="fa fa-angle-right" style="color: white;" aria-hidden="true"></i></p>                      
                                    <p class="m-0 mr-2" style="color: white;" ><?php echo $name;  ?></p> 
                                    <p class="m-0 ml-2 float-right"> <span style="color: white;" ><i class="fa fa-clock-o mr-1" style="color: white;" aria-hidden="true"></i><?php echo time_ago_in_php($time); ?></span></p>                  
                                </div>  
                     
                        
                  </div>
                </div>

<?php
}
?>



</div>

</div>



<?php

}

?>


</div>
</div>











<div class="ml-4 mr-4"> 
 <!--liked -->
   <div id="bac<?php echo $result['post_id']; ?>" class=" d-flex  " >

  <div class=" p-2 ">

<?php 

$m=$result['post_id'];

$mobb=$_SESSION['mobile'];

$fetchserinfo="select * from user_info where mobile='$mobb'";

$goi=mysqli_query($con,$fetchserinfo);

$getarra=mysqli_fetch_array($goi);
$use=$getarra[11];

$z="select * from post_like where (user_id='$use' and post_id='$m') and likes=1 ";

$gg=mysqli_query($con,$z);

$muj=mysqli_num_rows($gg);

if($muj == 1)
{

 ?>


   <button  type="button"   style="background-color:Transparent;border:none;"> <i onclick="like(<?php echo $result['post_id']; ?>)"  id="liked<?php echo $result['post_id']; ?>"  class="  fa fa-thumbs-up" style="font-size:35px; color:#E65100;z-index:999;"></i></button>
<?php
}
else{
?>
  <button  type="button"  style="background-color:transparent;border:none;"> <i onclick="like(<?php echo $result['post_id']; ?>)"  id="liked<?php echo $result['post_id']; ?>"  class="  fa fa-thumbs-up" style="font-size:35px;z-index:999  color:black ; text-shadow: 0 1px 5px  white;"></i></button>
<?php
}
?>

  </div>
  <div class="p-2 pt-3"  ><p id="likevalue<?php echo $result['post_id']; ?>" value="<?php echo like($result['post_id']); ?>" style="text-shadow: 0 0px 5px  white;color: black;"><?php echo like($result['post_id']); ?></p></div>


<!--disliked -->



  <div class=" p-2">
<?php
$za="select * from post_like where (user_id='$use' and post_id='$m') and dislikes=1 ";

$ggv=mysqli_query($con,$za);

$mujd=mysqli_num_rows($ggv);
if($mujd == 1)
{

?>
  <button  type="button"   style="background-color:Transparent;border:none;">  <i onclick="dislike(<?php echo $result['post_id']; ?>)"  id="disliked<?php echo $result['post_id']; ?>"  class="  fa fa-thumbs-down" style="font-size:35px;color:#E65100"></i></button>

<?php
}
else{

  ?>
  <button  type="button"   style="background-color:Transparent;border:none;"><i onclick="dislike(<?php echo $result['post_id']; ?>)"  id="disliked<?php echo $result['post_id']; ?>"  class="  fa fa-thumbs-down" style="font-size:35px;text-shadow: 0 1px 5px  white;"></i></button>

<?php
}
?>
  </div>
<div class="p-2 pt-3 "><p class="align-self-center" id="dislikevalue<?php echo $result['post_id']; ?>" value="<?php echo dislike($result['post_id']); ?>" style="text-shadow: 0 0px 5px  white;color: black;"><?php echo dislike($result['post_id']); ?></p></div>





<!--fetch comment number -->






  <div  class="p-2 text-right flex-grow-1 justify-content-center "  id="hideer<?php echo $result['post_id']; ?>" style="z-index: 1000;display: block" > <button  onclick="hideer(<?php echo $result['post_id']; ?>)"  type="button" data-toggle="collapse"  data-target="#c<?php echo $result['post_id']; ?>" class="btn btn-info align-self-center" >
  Comments <span  class="badge badge-light"   id="comment<?php echo $result['post_id']; ?>" ><?php echo $rows; ?></span>
</button>
</div>


<!-- button on click -->

  <div class="  text-right flex-grow-1 justify-content-center " id="shower<?php echo $result['post_id']; ?>"  style="z-index: 1000;display: none;">


   <button  
    onclick="shower(<?php echo $result['post_id']; ?>)" type="button" data-toggle="collapse"  data-target="#c<?php echo $result['post_id']; ?>" class="btn btn-danger align-self-center" style="border-radius: 22px;" >
  <i class="fa fa-close" style="font-size:22px;"></i>
</button>
</div>

<script >
  

function hideer(abc){

var getdata=abc;

  document.getElementById('hideer'+abc).style.display="none";
    
  document.getElementById('shower'+abc).style.display="block";


}
function shower(abc)
{var getdata=abc;
  
document.getElementById('hideer'+abc).style.display="block";
 
  document.getElementById('shower'+abc).style.display="none";

}



</script>




</div>
</div>
















<div id="b<?php echo $result['post_id']; ?>">

<div    class=" container-fluid input-group mb-3 mt-2 " style=""  >
  <input id="com<?php echo $result['post_id']; ?>" onclick="changecolor(<?php echo $result['post_id']; ?>)" type="text" class="form-control text-center"  placeholder="Write a Comment" aria-label="Recipient's username" aria-describedby="basic-addon2" style="border-bottom-left-radius: 50px;border-top-left-radius: 50px;">

  <div class="input-group-append">


<script >
  
var input = document.getElementById("com<?php echo $result['post_id']; ?>");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();
   document.getElementById("a<?php echo $result['post_id']; ?>").click();
  }
});

</script>










    <button id="a<?php echo $result['post_id']; ?>" type="button" onclick="comm(<?php echo $result['post_id']; ?>)" class="input-group-text btn btn-success " id="basic-addon2" style="border-bottom-right-radius: 50px;border-top-right-radius: 50px;width:50px;"><i id="send<?php echo $result['post_id']; ?>" class="fa fa-arrow-right " aria-hidden="true"></i></button>
 
  </div>
</div>
  </div>
</div>

  <br>



<script >
  
function changecolor(postt)
{
 var postid=postt;
 
   document.getElementById('com'+postid).style.borderColor="rgb(206, 212, 218)";

document.getElementById('a'+postid).style.backgroundColor="rgba(0, 0, 0, 0.125)";
document.getElementById('send'+postid).className="fa fa-arrow-right";

}



</script>

<script>
  
function comm(commented){
var postid=commented;
var comment= document.getElementById('com'+postid).value;



if(comment == "")
{
 
  document.getElementById('com'+postid).style.borderColor="#d9534f";
 document.getElementById('a'+postid).style.backgroundColor="#d9534f";
 document.getElementById('send'+postid).className="fa fa-close";
}
else{
  var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       
        var avv=this.responseText;
       


       if(avv == 1)
       {
            
              document.getElementById('com'+postid).value=null;
              
 document.getElementById('a'+postid).style.backgroundColor="#5cb85c";
 document.getElementById('send'+postid).className="fa fa-check";

            var values5=parseInt(document.getElementById('comment'+postid).innerHTML);
               
              var Comment_number1=values5+1;
 document.getElementById('comment'+postid).innerHTML=Comment_number1;
           
       }
     
       }
    };
    xmlhttp.open("GET", "comment.php?id=" +postid+"&comment=" +comment, true);
    xmlhttp.send();




}}
</script>

</div>

<?php

}



?>




</div>
</div>




</div>

</body>
</html>

<?php






function like($postid)

{

$con=mysqli_connect('localhost','vizard','vikas@96');

mysqli_select_db($con,'toodayin_userdata');

//counting likes
$poster=$postid;

        $likecount=" select * from post_like where (likes = 1 and dislikes is null) and post_id='$poster' ";

        $dd=mysqli_query($con,$likecount);

        $k=mysqli_num_rows($dd);
return $k;
}


//counting dislikes
function dislike($postid)
{

 $con=mysqli_connect('localhost','vizard','vikas@96');

mysqli_select_db($con,'toodayin_userdata');
$poster1=$postid;

        $dislikecount=" select * from post_like where (dislikes = 1 and likes is null) and post_id='$poster1' ";

        $ddd=mysqli_query($con,$dislikecount);

        $kk=mysqli_num_rows($ddd);
        return $kk;

}



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


<script>
  
function dislike(abc)
{
  var x=abc;

  var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       
       var avv=this.responseText;
       



   if(avv == 11)
       {
           //means user have disliked it earlier and now he is liking it
        //change dislike color to black
        //change like color to orange
        //-1 from dislike
        //+1 to like 
           
           document.getElementById('liked'+x).style.color="black";
            document.getElementById('disliked'+x).style.color="#E65100";
            var values1=parseInt(document.getElementById('likevalue'+x).innerHTML,10);
              var dislikevalue=values1-1;

              
              document.getElementById('likevalue'+x).innerHTML=dislikevalue;
             var values2=parseInt(document.getElementById('dislikevalue'+x).innerHTML,10);
              var likevalue=values2+1;
              
              document.getElementById('dislikevalue'+x).innerHTML=likevalue;

       }
       else if (avv == 0) {

           //user liked it and now disliking it
           //change like color to black
           //and -1 from like

  document.getElementById('disliked'+x).style.color="black";
var values=parseInt(document.getElementById('dislikevalue'+x).innerHTML,10);
              var likevalue=values-1;
              document.getElementById('dislikevalue'+x).innerHTML=likevalue;

      }
      else if(avv == 1){
           //user is liking it first time
           //change color to orange 
           //and add 1

  document.getElementById('disliked'+x).style.color="#E65100";
var values=parseInt(document.getElementById('dislikevalue'+x).innerHTML,10);
              var likevalue=values+1;
              document.getElementById('dislikevalue'+x).innerHTML=likevalue;


       }











      }
    };

    xmlhttp.open("GET", "dislike.php?q=" +x, true);
    xmlhttp.send();

}

  
function like(abc)
{
  var x=abc;

  var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       
        var avv=this.responseText;
       
 

       
       if(avv == 10)
       {
           //means user have disliked it earlier and now he is liking it
        //change dislike color to black
        //change like color to orange
        //-1 from dislike
        //+1 to like 
           
           document.getElementById('disliked'+x).style.color="black";
            document.getElementById('liked'+x).style.color="#E65100";
            var values1=parseInt(document.getElementById('dislikevalue'+x).innerHTML,10);
              var dislikevalue=values1-1;
              document.getElementById('dislikevalue'+x).innerHTML=dislikevalue;
             var values2=parseInt(document.getElementById('likevalue'+x).innerHTML,10);
              var likevalue=values2+1;
          
              document.getElementById('likevalue'+x).innerHTML=likevalue;

       }
       else if (avv == 0) {

           //user liked it and now disliking it
           //change like color to black
           //and -1 from like

  document.getElementById('liked'+x).style.color="black";
var values=parseInt(document.getElementById('likevalue'+x).innerHTML,10);
              var likevalue=values-1;
              document.getElementById('likevalue'+x).innerHTML=likevalue;

      }
      else if(avv == 1){
           //user is liking it first time
           //change color to orange 
           //and add 1

  document.getElementById('liked'+x).style.color="#E65100";
var values=parseInt(document.getElementById('likevalue'+x).innerHTML,10);

              var likevalue=values+1;
              document.getElementById('likevalue'+x).innerHTML=likevalue;


       }
     
       }
    };
    xmlhttp.open("GET", "like.php?q=" +x, true);
    xmlhttp.send();

}




</script>
