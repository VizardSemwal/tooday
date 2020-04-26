 


 <nav class="navbar navbar-expand-md " style="background-color: #E65100">
 
  <a class="navbar-brand ml-4 text-light active " href="#" ><?php echo $_SESSION['location'];  ?></a>

 <button id="fo" onclick="myFunction()" class="navbar-toggler mr-3 " type="button" data-toggle="collapse" data-target="#collapseExample" style="outline: none;">
    <div id="notify" style="display: inline-block;">

 <span  id="currentvalue" class="badge badge-danger" style="font-size: 17px;position: absolute;bottom: 14px;right: 75px"> <?php echo $_SESSION['count']; ?></span>
 

     
  </div> <i id="showoff" class="fa fa-plus-square" aria-hidden="true" style="color: white;font-size: 28px"></i>
  
  </button>
  <div class="collapse navbar-collapse  justify-content-end mr-md-5" id="collapsibleNavbar">
    <ul class="navbar-nav " >


     
     
      <li class="nav-item">
     

          <div class="btn-group" id="getdata">
<button id="notification" onclick="fundo()" type="button" class="dropdown-toggle nav-link text-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: transparent;border: none;">
   Notification <div class="ml-2 mr-2" style="display: inline-block;" id="totalnotification"><span  class="badge badge-light"> <?php echo $_SESSION['count']; ?></span></div>
  </button>


<!-- all notification is Shown Here -->

<script>
$(document).ready(function(){
 


  $("#abz").mouseleave(function(){
  $("#notification").click();
});
});
</script>



   <iframe src="notify.php" id="abz"  class="dropdown-menu dropdown-menu-left mt-2 " style="z-index: 99999; height: 300px;overflow: scroll; border-bottom-left-radius: 20px;border-bottom-right-radius: 20px;
box-shadow: 0 4px 8px 0 rgba(255, 0, 0, 0.2), 0 6px 20px 0 rgba(255, 0, 0, 0.19);width:510px"></iframe>
  



<script type="text/javascript">

setInterval(function(){ 


  $("#totalnotification").load(location.href + " #totalnotification"); 
 $("#notify").load(location.href + " #notify"); 
 $("#againnotify").load(location.href + " #againnotify"); 
 


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
        <a class="nav-link text-light" href="contest.php">Contest</a>
      </li> 
        <li class="nav-item">
        <a class="nav-link text-light" href="profile.php?id=<?php echo $_SESSION['mobile'];?>" >Profile</a>
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








   </ul>
  </div> 
</nav>


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



<script >


function myFunction() {
  var x = document.getElementById("showoff");

 
  if (x.className === "fa fa-plus-square") {



 document.getElementById("showoff").className="fa fa-minus-square";
document.getElementById("notify").style.display="none";
document.getElementById("collapseExample").style.display="block";
 
  

window.onscroll = function () { window.scrollTo(0, 0); };
       
  } else {

document.getElementById("notify").style.display="inline-block";
    document.getElementById("showoff").className="fa fa-plus-square";
     document.getElementById("collapseExample").style.display="none";


 window.onscroll=function(){};


  }
}
</script>


<div class="collapse1 fader " id="collapseExample" style="position: absolute;right: 0%;z-index: 9999999;display: none;">
  <div class="card  card-body border-0" style="background:transparent;margin-top: -20px">
  <div class="d-flex flex-column">
 
<?php
$con=mysqli_connect('localhost','vizard','vikas@96');

mysqli_select_db($con,'toodayin_userdata');


$mobileno=$_SESSION['mobile'];
$get_all_info="select * from user_info where mobile='$mobileno'";

$get_profile_pic=mysqli_query($con , $get_all_info);

$profile_pic=mysqli_fetch_array($get_profile_pic);


$p_pic=$profile_pic[8];


 ?>





  <div class="p-2"><a href="profile.php?id=<?php echo $_SESSION['mobile'];?>"><button class="" type="button" style="background: transparent;border:none;outline: none;"><img  class="zoom" src="<?php echo $p_pic; ?>"  width="45px" height="45px" style="border-radius: 45px"></button></a></div>
  <div class="p-2"><a href="notifyphone.php"><button   type="button" style="background: transparent;border:none;outline: none;">  <div id="againnotify" >

 <span   class="badge badge-danger" style="font-size: 17px;position: absolute;top:86px;right: 26px;border-radius: 20px;z-index: 3;"><?php echo $_SESSION['count']; ?></span>
 
</div>
     
 <img  class="zoom" src="icon/NOTIFICATION.png" onclick="fundo()"  width="40px" height="auto"></a></button></div>
  <div class="p-2"><a href="contest.php" ><button  type="button" style="background: transparent;border:none;outline: none;"><img  class="zoom" src="icon/CONTEST.png"  width="40px" height="auto"></button></a></div>
  <div class="p-2"><a href="setting.php"><button  type="button" style="background: transparent;border:none;outline: none;"><img class="zoom"  src="icon/SETTINGS.png"  width="40px" height="auto"></button></a></div>
</div>
  </div>
</div>



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