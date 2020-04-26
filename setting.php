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
	<title>
		Settings	
	</title>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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

	<nav class="navbar navbar-expand-md sticky-top" style="background-color: #E65100">
 <a href="javascript:history.go(-1)"><button id="backbutton"  class="btn btn-light p-0 ml-3" style="width: 26px;height: 26px;outline: none;" >
   <i class="fa fa-chevron-left " aria-hidden="true" style="color: #E65100"  ></i>
 </button></a>
  <a class="navbar-brand ml-4 text-light active "  >Settings</a>
 <button id="fo" onclick="logout()" class="navbar-toggler mr-2 p-1 " type="button" data-toggle="collapse" data-target="#collapseExample" style="margin-right: 20px;outline: none;">

     <img src="icon/LOGOUT.png" alt="logout"  style="width: 28px;height: auto;"></i>
  </button>
  <div class="collapse navbar-collapse  justify-content-end mr-md-5" id="collapsibleNavbar">
    <ul class="navbar-nav " >

    </ul>
</div>

</nav>
<?php

$con=mysqli_connect('localhost','vizard','vikas@96');

mysqli_select_db($con,'toodayin_userdata');

$mobile=$_SESSION['mobile'];

$query1="select * from user_info where mobile='$mobile'";

$getalldata=mysqli_query($con,$query1) ;


$allinfo=mysqli_fetch_array($getalldata);

$profilepic=$allinfo[8];
$name=$allinfo[2];

?>



<div class="d-flex row flex-fill m-4" >



<div class="p-2 bd-highlighted col-4 text-center" >


<img src="<?php echo $profilepic ?>" alt="profilepic" style="width: 80px;height: 80px;border-radius: 80px;object-fit: cover;" >
</div>

<div class="pt-3  bd-highlighted col-8" >
<h6 class="blockquote"><?php echo $name; ?></h6>
<h6 class="lead"><?php echo $mobile; ?></h6>
</div>



</div>
  <div class="container ml-3 mb-3">  <h5 > Rate Us:</h5></div>
   <div class="d-flex mt-3 ml-4 mr-4 mb-4 flex-row align-items-center bd-highlight dropdown-itdfsem" > 
     
      <div class=" bd-highlight text-center col-12 " id="verifying"  style="display: none;" >
        <button type="button" class="btn btn-success mob" onclick="" style="border-radius: 5px;border-radius: 20px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);" disabled>Thank You..</button> 
     
       
      </div>
      
        <div class="offset-1 col-2 bd-highlight" id="rate1" >

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

  <div class="container">
      <div class="modal-header border-0">
        <h5 class="modal-title" id="exampleModalLonge">Feed Back</h5>
        
      </div>
      
       <form  id="feedback">

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
      <div class="modal-footer border-0 justify-content-start">
       
        <button type="button" onclick="feek()" name="submit" class="btn btn-info " style="color: white;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); ">Submit</button>
      </div>
      </form>
  
</div>
<div class="dropdown-divider"></div>
<div class="text-center mb-2">
<button type="button" id="deletemyaccount" onclick="show()" data-target="#deletemyaccount" class="btn btn-danger mob"  style="border-radius: 5px;border-radius: 20px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">Delete my account</button> 
</div>

<script type="text/javascript">
	
	function show()
	{
         document.getElementById('deletemyaccount').style.display="none";
         document.getElementById('showit').style.display="block";

	}
	function hide()
	{
         document.getElementById('deletemyaccount').style.display="inline-block";
         document.getElementById('showit').style.display="none";

	}
</script>

    <form  id="showit" style="display: none;">

<div class="modal-body">
      
      <h6 class="blockquote text-center">Please don't leave us,we Really need you..<i class='fas fa-sad-tear ml-1' style='font-size:34px;color:#E65100 '></i> </h6>
      </div>
      <div class="modal-footer border-0 justify-content-center">
       
        <button type="button"   data-dismiss="modal" onclick="hide()" class="btn btn-danger mr-2" style="color: white;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius: 20px; ">Ok i will stay</button>

         <button type="button" onclick="deletemyaccount()" name="submit" class="btn btn-danger ml-2 " style="color: white;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius: 20px; ">Sorry I can't</button>
      </div>
      </form>
</body>
</html>

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
           
          $('#feedback')[0].reset();
       }
     
       }
    };
    xmlhttp.open("POST", "feeback.php?matter=" +matter+"&feedback=" +feedback, true);
    xmlhttp.send();




}







</script>
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