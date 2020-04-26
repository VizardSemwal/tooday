<?php

session_start();

?>



<!DOCTYPE html>
<html>
<head>
  <title>notification Page</title>

<meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   
   <link rel="stylesheet" href="index.css">
   <script src="index.js" ></script>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <style type="text/css">

 	body::-webkit-scrollbar {
    display: none;
}

/* Hide scrollbar for IE and Edge */
body {
    -ms-overflow-style: none;
}
</style>
</head>
<body>




<script type="text/javascript">

setInterval(function(){ 


   
$("#ajaupar").load(location.href + " #ajaupar");


}, 5000);
</script>



<?php

function crown($numn,$time)
{

  ?>
   <div class="d-flex ml-4 flex-row align-items-center bd-highlight dropdown-itdfsem">
      <div class="p-2 bd-highlight " >
        
    <a href="profile.php?id=<?php echo $numn; ?>" target="_parent" ><button type="button" style="background: transparent;border: none;"><img src="icon/crown.png" alt="no image" style="width: 40px;height: auto;" ></button></a>
       
      </div>
      <div class="d-flex flex-column bd-highlight flex-grow-1" >

      <div class=" pl-1  bd-highlight" >You have earned a Crown.</div>
       <div class=" pl-1 bd-highlight text-primary" >
<div class="d-flex flex-row bd-highlight flex-fill justify-content-between" >
 <div class=" pl-1 bd-highlight text-primary" >
       <a href="profile.php?id=<?php echo $numn; ?>"  target="_parent" >You became the Real Tooder</a></div>
   <div class=" pl-1 bd-highlight " >
      <p class="mr-4 text-muted" ><?php echo time_ago_in_php($time); ?></p></div>   
</div>


     </div>
    </div>
    </div>



        <div class="dropdown-divider"></div>


<?php

}

?>






<?php

function rating($num,$numn,$time)//star number user number
{

  ?>
   <div class="d-flex flex-row align-items-center bd-highlight dropdown-item">
      <div class="p-2 bd-highlight " >
        
    <a href="profile.php?id=<?php echo $numn; ?>" target="_parent" ><button type="button" style="background: transparent;border: none;"><i class="fa fa-star" aria-hidden="true" style="font-size: 40px;color: #FFCC00 "></i></button></a>

      </div>
      <div class="d-flex flex-column bd-highlight flex-grow-1" >

      <div class=" pl-1  bd-highlight" >You got <?php echo $num; ?> more star.</div>
       <div class=" pl-1 bd-highlight text-primary" >
<div class="d-flex flex-row bd-highlight flex-fill justify-content-between" >
 <div class=" pl-1 bd-highlight text-primary" >
       <a href="profile.php?id=<?php echo $numn; ?>"  target="_parent" >Click here to see it..</a></div>
   <div class=" pl-1 bd-highlight " >
      <p class="mr-4 text-muted" ><?php echo time_ago_in_php($time); ?></p></div>   
</div>



     </div>
    </div>
    </div>



        <div class="dropdown-divider"></div>


<?php

}

?>

















<?php

function reviewperson($mobileno,$number3,$name3,$profilepice3,$reviewer_at_time)
{

  ?>
   <div class="d-flex flex-row align-items-center bd-highlight dropdown-item  " >
      <div class="p-2 bd-highlight " >
        
    <a href="profile.php?id=<?php echo $number3; ?>" target="_parent" ><button type="button" style="background: transparent;border: none;"><img src="<?php echo $profilepice3; ?>" alt="no image" style="width: 40px;height: 40px;border-radius: 40px;object-fit: cover;" ></button></a>

      </div>
      <div class="d-flex flex-column flex-grow-1 bd-highlight" >

      <div class=" pl-1  bd-highlight" ><?php echo $name3; ?> Wrote a Review on your profile</div>
       <div class=" pl-1 bd-highlight text-primary" >
<div class="d-flex flex-row flex-fill bd-highlight  justify-content-between"   >
 <div class=" pl-1 bd-highlight text-primary" >
      <a href="profile.php?id=<?php echo $mobileno; ?>"  target="_parent" >Click here to see it..</a></div>
   <div class=" pl-1 bd-highlight " >
      <p class="mr-4 text-muted "  ><?php echo time_ago_in_php($reviewer_at_time); ?></p></div>   
</div>


     </div>
    </div>
    </div>



        <div class="dropdown-divider"></div>


<?php

}

?>








<?php

function viewperson($mobileno,$number3,$name3,$profilepice3,$reviewer_at_time)
{

  ?>
   <div class="d-flex flex-row align-items-center bd-highlight dropdown-item  " >
      <div class="p-2 bd-highlight " >
        
    <a href="profile.php?id=<?php echo $number3; ?>" target="_parent" ><button type="button" style="background: transparent;border: none;"><img src="<?php echo $profilepice3; ?>" alt="no image" style="width: 40px;height: 40px;border-radius: 40px;object-fit: cover;" ></button></a>

      </div>
      <div class="d-flex flex-column flex-grow-1 bd-highlight" >

      <div class=" pl-1  bd-highlight" ><?php echo $name3; ?> Viewd your profile</div>
       <div class=" pl-1 bd-highlight text-primary" >
<div class="d-flex flex-row flex-fill bd-highlight  justify-content-between"   >
 <div class=" pl-1 bd-highlight text-primary" >
      <a href="profile.php?id=<?php echo $mobileno; ?>"  target="_parent" >Click here to see it..</a></div>
   <div class=" pl-1 bd-highlight " >
      <p class="mr-4 text-muted "  ><?php echo time_ago_in_php($reviewer_at_time); ?></p></div>   
</div>


     </div>
    </div>
    </div>



        <div class="dropdown-divider"></div>


<?php

}

?>



















<?php

function commentperson($post_type,$post_id,$number,$name,$profilepic,$liketime)
{

  ?>
   <div class="d-flex flex-row align-items-center bd-highlight dropdown-item">
      <div class="p-2 bd-highlight " >
        
    <a href="profile.php?id=<?php echo $number; ?>" target="_parent" ><button type="button" style="background: transparent;border: none;"><img src="<?php echo $profilepic; ?>" alt="no image" style="width: 40px;height: 40px;border-radius: 40px;object-fit: cover;" ></button></a>

      </div>
      <div class="d-flex flex-column bd-highlight flex-grow-1" >

      <div class=" pl-1  bd-highlight" ><?php echo $name; ?> commented on your <?php echo $post_type; ?> </div>
       <div class=" pl-1 bd-highlight text-primary" >
<div class="d-flex flex-row flex-fill bd-highlight justify-content-between "   >
 <div class=" pl-1 bd-highlight text-primary" >
      <a href="#post<?php echo $post_id; ?>" >Click here to see it..</a></div>
   <div class=" pl-1 bd-highlight align-items-end">
      <p class="mr-4 text-muted " ><?php echo time_ago_in_php($liketime); ?></p></div>    
</div>


     </div>
    </div>
    </div>



        <div class="dropdown-divider"></div>


<?php

}

?>

















<?php

function likeperson($post_type,$post_id,$number,$name,$profilepic,$liketime)
{

  ?>
   <div class="d-flex flex-row align-items-center bd-highlight dropdown-item">
      <div class="p-2 bd-highlight " >
        
    <a href="profile.php?id=<?php echo $number; ?>" target="_parent" ><button type="button" style="background: transparent;border: none;"><img src="<?php echo $profilepic; ?>" alt="no image" style="width: 40px;height: 40px;border-radius: 40px;object-fit: cover;" ></button></a>

      </div>
      <div class="d-flex flex-column bd-highlight flex-grow-1" >

      <div class=" pl-1  bd-highlight" ><?php echo $name; ?> liked your <?php echo $post_type; ?></div>
       <div class=" pl-1 bd-highlight text-primary" >
<div class="d-flex flex-row bd-highlight flex-fill justify-content-between" >
 <div class=" pl-1 bd-highlight text-primary" >
      <a href="#post<?php echo $post_id; ?>" >Click here to see it..</a></div>
   <div class=" pl-1 bd-highlight " >
      <p class="mr-4 text-muted" ><?php echo time_ago_in_php($liketime); ?></p></div>   
</div>


     </div>
    </div>
    </div>



        <div class="dropdown-divider"></div>


<?php

}

?>




<?php

function dislikeperson($post_type,$post_id,$number,$name,$profilepic,$liketime)
{

  ?>
   <div class="d-flex flex-row align-items-center bd-highlight dropdown-item">
      <div class="p-2 bd-highlight " >
        
    <a href="profile.php?id=<?php echo $number; ?>" target="_parent" ><button type="button" style="background: transparent;border: none;"><img src="<?php echo $profilepic; ?>" alt="no image" style="width: 40px;height: 40px;border-radius: 40px;object-fit: cover;" ></button></a>

      </div>
      <div class="d-flex flex-column bd-highlight flex-grow-1" >

      <div class=" pl-1  bd-highlight" ><?php echo $name; ?> disliked your <?php echo $post_type; ?></div>
       <div class=" pl-1 bd-highlight text-primary" >
<div class="d-flex flex-row bd-highlight flex-fill justify-content-between" >
 <div class=" pl-1 bd-highlight text-primary" >
      <a href="#post<?php echo $post_id; ?>" >Click here to see it..</a></div>
   <div class=" pl-1 bd-highlight " >
      <p class="mr-4 text-muted" ><?php echo time_ago_in_php($liketime); ?></p></div>   
</div>


     </div>
    </div>
    </div>



        <div class="dropdown-divider"></div>


<?php

}

?>



<?php

function opinion($post_type,$post_id,$number,$name,$profilepic,$liketime)
{

  ?>
   <div class="d-flex flex-row align-items-center bd-highlight dropdown-item">
      <div class="p-2 bd-highlight " >
        
    <a href="profile.php?id=<?php echo $number; ?>" target="_parent" ><button type="button" style="background: transparent;border: none;"><img src="<?php echo $profilepic; ?>" alt="no image" style="width: 40px;height: 40px;border-radius: 40px;object-fit: cover;" ></button></a>

      </div>
      <div class="d-flex flex-column bd-highlight flex-grow-1" >

      <div class=" pl-1  bd-highlight" ><?php echo $name; ?> Choosed Option <?php echo $post_type; ?> from your post</div>
       <div class=" pl-1 bd-highlight text-primary" >
<div class="d-flex flex-row bd-highlight flex-fill justify-content-between" >
 <div class=" pl-1 bd-highlight text-primary" >
      <a href="#post<?php echo $post_id; ?>" >Click here to see it..</a></div>
   <div class=" pl-1 bd-highlight " >
      <p class="mr-4 text-muted" ><?php echo time_ago_in_php($liketime); ?></p></div>   
</div>


     </div>
    </div>
    </div>



        <div class="dropdown-divider"></div>


<?php

}

?>



















<!-- for getting all post-->


<?php
function input($post_type,$post_id,$time)
{
        

      ?>

        <div class="d-flex flex-row align-items-center bd-highlight dropdown-item">
      <div class="p-2 bd-highlight " >
        
    <a href="<?php echo $post_type?>.php/#post<?php echo $post_id; ?>" target="_parent" ><button type="button" style="background: transparent;border: none;"><i class="fa fa-upload text-success" aria-hidden="true" style="font-size: 40px"></i></button></a>

      </div>
      <div class="d-flex flex-column flex-grow-1 bd-highlight" >

      <div class=" pl-1  bd-highlight" >You have uploaded a new <?php echo $post_type ?></div>
     <div class=" pl-1 bd-highlight text-primary" >
<div class="d-flex flex-row bd-highlight flex-fill justify-content-between" >
 <div class=" pl-1 bd-highlight text-primary" >
      <a href="#post<?php echo $post_id; ?>" >Click here to see it..</a></div>
   <div class=" pl-1 bd-highlight " >
      <p class="mr-4 text-muted" ><?php echo time_ago_in_php($time); ?></p></div>   
</div>


     </div>
    </div>
    </div>



        <div class="dropdown-divider"></div>


         <?php


}

?>


<div id="ajaupar">

<?php
$con=mysqli_connect('localhost','vizard','vikas@96');

mysqli_select_db($con,'toodayin_userdata');
$count=0;

$mobileno=$_SESSION['mobile'];
$get_all_info="select * from user_info where mobile='$mobileno'";

$get_user_info=mysqli_query($con , $get_all_info);

$user_info_data=mysqli_fetch_array($get_user_info);


$user_id=$user_info_data[11];




$get_post="select * from notification where user_id='$user_id'  order by post_date desc";



$runer=mysqli_query($con ,$get_post);


while($result=mysqli_fetch_array($runer))
{

$notification_type=$result[3];
$getpost_id=$result[2];
$not_user_id=$result[4];
$status=$result[6];
$timer=$result[5];

if($status == 0)
{
  $count +=1;
}



switch ($notification_type) {
    case "uploadphoto":{


      $post_type1='Photo';

        input($post_type1,$getpost_id,$timer);
    




        break;
      }
    case "uploadtext":{

                                      $post_type1='Blog';

                                    input($post_type1,$getpost_id,$timer);

        break;
      }
    case "uploadopinion":{
       
                                         $post_type1='Opinion';

                                    input($post_type1,$getpost_id,$timer);


        break;
      }
     case "uploadvideo":{

                                         $post_type1='Video';

                                         input($post_type1,$getpost_id,$timer);
                                          
        break;
      }

            case "1.opinion": 
            case "2.opinion":
             case "3.opinion":
             case "4.opinion":{
            
                $id = explode('.',$notification_type);

$poster =$id[0];


                    $get_like_whole_data="select * from user_info where user_id='$not_user_id'";

                              $run_data_query2=mysqli_query($con,$get_like_whole_data);

                              $allinfo=mysqli_fetch_array($run_data_query2);

                              $number=$allinfo[0];
                              $name=$allinfo[2];
                              $profilepice=$allinfo[8];
                                     
                           
                            
                            opinion($poster,$getpost_id,$number,$name,$profilepice,$timer);


        break;
}


        

        case "text.like":
        case "video.like":
        case "image.like": {
        
      $id = explode('.',$notification_type);

$poster =$id[0];
                            $get_like_whole_data="select * from user_info where user_id='$not_user_id'";

                              $run_data_query2=mysqli_query($con,$get_like_whole_data);

                              $allinfo=mysqli_fetch_array($run_data_query2);

                              $number=$allinfo[0];
                              $name=$allinfo[2];
                              $profilepice=$allinfo[8];
                                     
                              
                             likeperson($poster,$getpost_id,$number,$name,$profilepice,$timer);




        break;
      }



        case "text.dislike":
        case "video.dislike":
        case "image.dislike": {
        
    $id = explode('.',$notification_type);

$poster =$id[0];
                  

                    $get_like_whole_data="select * from user_info where user_id='$not_user_id'";

                              $run_data_query2=mysqli_query($con,$get_like_whole_data);

                              $allinfo=mysqli_fetch_array($run_data_query2);

                              $number=$allinfo[0];
                              $name=$allinfo[2];
                              $profilepice=$allinfo[8];
                                     
                          
                             
                            dislikeperson($poster,$getpost_id,$number,$name,$profilepice,$timer);


        break;
      }

case "text.comment":
case "image.comment":
case "video.comment":{

     $id = explode('.',$notification_type);

$poster =$id[0];
                  


                          
                            $get_like_whole_data="select * from user_info where user_id='$not_user_id'";

                              $run_data_query2=mysqli_query($con,$get_like_whole_data);

                              $allinfo=mysqli_fetch_array($run_data_query2);

                              $number=$allinfo[0];
                              $name=$allinfo[2];
                              $profilepice=$allinfo[8];
                                     
                            commentperson($poster,$getpost_id,$number,$name,$profilepice,$timer);
                      

        
        break;

  }








        case "review":
        
{

                          $get_reviewer_whole_data="select * from user_info where user_id='$not_user_id'";

                    $run_data_query5=mysqli_query($con, $get_reviewer_whole_data);

                    $allinfo3=mysqli_fetch_array($run_data_query5);

                    $number3=$allinfo3[0];
                    $name3=$allinfo3[2];
                    $profilepice3=$allinfo3[8];

                    reviewperson($mobileno,$number3,$name3,$profilepice3,$timer);





        break;
      }
        case "view":
       {



                          $get_viewer_whole_data="select * from user_info where user_id='$not_user_id'";

                    $run_data_query5=mysqli_query($con, $get_viewer_whole_data);

                    $allinfo3=mysqli_fetch_array($run_data_query5);

                    $number3=$allinfo3[0];
                    $name3=$allinfo3[2];
                    $profilepice3=$allinfo3[8];

                    viewperson($mobileno,$number3,$name3,$profilepice3,$timer);

                





        break;
      }
        case "1star":{
                                        
                                              $star=1;

                                    rating($star,$mobileno,$timer);//star number user number



        break;
      }
        case "2star":{
                                       $star=2;

                          rating($star,$mobileno,$timer);//star number user number
        break;
      }
        case "3star":{
                                       $star=3;

                          rating($star,$mobileno,$timer);//star number user number
        break;
      }
        case "4star":{
                                     $star=4;

                        rating($star,$mobileno,$timer);//star number user number
        break;
      }
        case "5star":{
                                       $star=5;
                             crown($mobileno,$timer);
                          rating($star,$mobileno,$timer);//star number user number

                         



        break;
      }
    default:
    {
        echo "Your favorite color is neither red, blue, nor green!";
      }
}//switch end

}



?>

 <?php  $_SESSION['count']= $count; ?>
 

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