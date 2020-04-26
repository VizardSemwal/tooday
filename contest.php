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
		Contest	
	</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style type="text/css">
	/* Set height to 100% for body and html to enable the background image to cover the whole page: */



.topleft {
  position: absolute;
  top: 0;
  left: 16px;
}

.bottomleft {
  position: absolute;
  bottom: 0;
  left: 16px;
}

.bottomright {
  position: absolute;
  bottom: 0;
  right: 16px;
}

.middle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

hr {
  margin: auto;
  width: 40%;
}
body::-webkit-scrollbar {
    display: none;
}

/* Hide scrollbar for IE and Edge */
body {
    -ms-overflow-style: none;
}

	
</style>

<script>
// Set the date we're counting down to
var countDownDate = new Date("July 11, 2020 12:00:00").getTime();

// Update the count down every 1 second
var countdownfunction = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();
  
  // Find the distance between now an the count down date
  var distance = countDownDate - now;
  
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
  
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(countdownfunction);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

</head>
<body>

	<nav class="navbar navbar-expand-md sticky-top" style="background-color: #E65100">
 <a href="javascript:history.go(-1)"><button id="backbutton"  class="btn btn-light p-0 ml-3" style="width: 26px;height: 26px;outline: none;" >
   <i class="fa fa-chevron-left " aria-hidden="true" style="color: #E65100"  ></i>
 </button></a>
  <a class="navbar-brand ml-4 text-light active "  >Contest</a>
  <button id="prizes"  class="navbar-toggler ml-5 p-1 " type="button" data-toggle="collapse" style="outline: none;background: transparent;border: none" disabled >
   <i class="fa fa-gift " aria-hidden="true" style="color: white;font-size: 28px;"  ></i>
</button>
<button id="information"  class="navbar-toggler  p-1 " type="button" data-toggle="collapse" style="outline: none;background: transparent;border: none"  disabled >
   <i class="fa fa-info-circle" aria-hidden="true" style="color:white;font-size: 28px;"  ></i>
</button>
  <div class="collapse navbar-collapse  justify-content-end mr-md-5" id="collapsibleNavbar">
    <ul class="navbar-nav " >
 <li>

<button id="prizes"  class="btn btn-light p-0 " style="outline: none;background: transparent;border: none" disabled="" >
   <i class="fa fa-gift " aria-hidden="true" style="color: white;font-size: 28px;"  ></i>
</button >

  
 </li>
 <li>
<button id="information"  class="btn btn-light p-0 ml-5" style="outline: none;background: transparent;border: none" disabled="" >
   <i class="fa fa-info-circle" aria-hidden="true" style="color:white;font-size: 28px;"  ></i>
</button>

 </li>
    </ul>
</div>

</nav>
<div class="bgimg">

  <div class="middle" style="margin-top: -80px">

  	<img src="icon/toodaylogo.png" class="mr-5"  alt="tooday" >
    <h1 style="margin-top: -100px;" ><b  class="display-4">Tooders</b> - <button class="btn btn-danger mb-2" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius: 20px;" disabled="">Live Soon</button></h1>
    <hr>
    <p id="demo" class="lead" style="font-size:30px"></p>
  </div>
  <div class="bottomleft">


    <p class="">Sponsored by -</p> <h4> Mukul Foundation.</h4>
  </div>


    <div class="bottomright">


    <p class="ml-2"><kbd style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">#</kbd>  V I Z A R D</p>
  </div>
</div>
</body>
</html>

