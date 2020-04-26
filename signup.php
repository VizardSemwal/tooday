<?php

session_start();

?>




<!DOCTYPE html>
<html>
<head>
  <title>Tooday-Login or Signup</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   
   <link rel="stylesheet" href="index.css">
  

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">





  
<style type="text/css">



.slidecontainer {
  width: 100%;
}

.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 15px;
  border-radius: 5px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #E65100;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #E65100;

box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

  cursor: pointer;
}


#copyright{
  display: none;
}


  #logo{

display: block;

}
#logo2{

display: none;
}
     body {

  overflow: auto;
  white-space: nowrap;
}
    /* Hide scrollbar for Chrome, Safari and Opera */
 body::-webkit-scrollbar {
  display: none;
}






    .modal-body{

  overflow: auto;
  white-space: nowrap;
}
    /* Hide scrollbar for Chrome, Safari and Opera */
 .modal-body::-webkit-scrollbar {
  display: none;
}





#fo{
  display: none;
}

.collapse1{

display: none;

}.zoom:hover{
  transform: scale(1.1);


}

@media screen and (max-width: 1220px){

#abx
{
  display: none;
}


}




@media screen and (max-width: 760px){





#logo{

display: none;

}
#logo2{

display: block;
}
#fo{
  display: block;
}

.collapse1{

display: block;

}
#downphoto
{
  display: none;
}
#copyright{
  display: block;
}

}

</style>











   
</head>




















<body rel="Tooday-Login">

<?php require 'loginheader.php' ?>



<div class="container-fluid ">

  <div class="d-flex mt-3 mt-md-3 flex-row flex-wrap  bd-highlight "  >

 


  <div class=" p-5 flex-fill  text-center bd-highlight" id="abx"  >
  <div  class="card border-0 mt-5 "  >
    <div class="card-body ">
  <img src="icon/toodaylogo.png"   style="width:400px;height: 250px;object-fit:cover;">
    </div>
    <div class="card-body">
     <h1 class="card-title text-center ml-4 text-dark" style="font-family: Segoe UI Emoji;width: 100%;color:black;margin-top: -40px;">" Social Community App "</h1>
     
    </div>
  </div>
</div>

<!--Create account -->

  <div class=" p-md-5  flex-fill  text-center bd-highlight"   >

  <div  class="card border-0   " style="border-radius: 20px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);min-height: 470px">
    

<!-- Create Account -->

  <div class="card-header border-0 ">
    Sign-up
  </div>
  <div class="card-body mt-4">
    <h5 class="card-title">Create a New Account</h5>
    <div class="card-body">
      




<form class=" form-horizontal" action="signing.php"  method="post"  enctype="multipart/form-data">
 <br>


   <div id=mob style="display: block;">
    <input type="number" name="mobno" class="form-control text-center mob"  aria-describedby="emailHelp" placeholder="Enter Mobile Number" id="number" value=" " style="border-radius: 20px;  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.2) inset;" onfocus="hidearea()">

<script>
function hidearea()
{
document.getElementById("error").innerHTML="";

}

var input = document.getElementById("number");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();
   document.getElementById("sendotpnow").click();
  }
});
</script>

<br>
    <p id="error" class="text-danger"></p>
    <br>
    <button type="button" class="btn btn-danger mob" onclick="mobile()" id="sendotpnow" style="border-radius: 5px;border-radius: 20px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">Send Otp</button> 
  
</div>

  <div id="otp" style="display: none;">
   


    
    
    <div class="d-flex flex-row bd-highlight justify-content-center " >
  <div class="pl-0 pr-3 pt-3 pb-3 bd-highlight"> 

    <input type="number" onkeypress="myFunction1()" class="form-control text-center" id="input1" value=" "  style="width:40px;height:auto;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">  </div>
  <div class="p-3 bd-highlight"> 

    <input type="number" onkeypress="myFunction2()"  class="form-control text-center" id="input2" value=" "  style="width:40px;height:auto;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);"></div>
  <div class="p-3 bd-highlight"> 

    <input type="number" onkeypress="myFunction3()"  class="form-control text-center" id="input3" value=" "  style="width:40px;height:auto;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">

  </div>
  <div class="p-3 bd-highlight"> 


    <input type="number" onkeypress="myFunction4()"  class="form-control text-center" id="input4" value=" "  style="width:40px;height:auto;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">

  </div>
  <div class="pl-3 pr-0 pt-3 pb-3 bd-highlight"> 

    <input type="number" value=" " class="form-control text-center" id="input5"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
    type = "number"
     maxlength="1"  style="width:40px;height:auto;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
  </div>
  
</div>
 <script >
 function otp(){


 var a=(document.getElementById('input1').value);
  
   var b=document.getElementById('input2').value;
    var c=document.getElementById('input3').value;
     var d=document.getElementById('input4').value;
      var e=document.getElementById('input5').value;


var a1=a.toString();
var a2=b.toString();
var a3=c.toString();
var a4=d.toString();
var a5=e.toString();



var values= a1+a2+a3+a4+a5;

    var realvalue = parseInt(values);


   if(realvalue == 12345)
   {
        document.getElementById('otp').style.display="none";
   document.getElementById('location').style.display="block";
   }
   else{
    document.getElementById('error2').innerHTML="Sorry Otp Didn't match !!";
    document.getElementById('correct').innerHTML="Resend code  ";
 document.getElementById('correct1').innerHTML="/  Change Number";
 document.getElementById("correct").style.marginBottom = "20px";
 document.getElementById("correct1").style.marginBottom = "20px";
   }
}
</script>

<script >
  function myFunction1() {

    document.getElementById("input2").focus();
  document.getElementById("error2").innerHTML="";
document.getElementById("correct1").innerHTML="";
document.getElementById("correct").innerHTML="";}
function myFunction2() {
  document.getElementById("input3").focus();
document.getElementById("error2").innerHTML="";
document.getElementById("correct1").innerHTML="";
document.getElementById("correct").innerHTML="";}
function myFunction3() {
  document.getElementById("input4").focus();
document.getElementById("error2").innerHTML="";
document.getElementById("correct1").innerHTML="";
document.getElementById("correct").innerHTML="";}
function myFunction4() {
  document.getElementById("input5").focus();
}

function resend(){

  document.getElementById('input1').value=null;
  document.getElementById('input2').value=null;
  document.getElementById('input3').value=null;
  document.getElementById('input4').value=null;
  document.getElementById('input5').value=null;

 document.getElementById("input1").focus();
document.getElementById("error2").innerHTML="";
document.getElementById("correct1").innerHTML="";
document.getElementById("correct").innerHTML="";




  
}


function change(){
 document.getElementById('input1').value=null;
  document.getElementById('input2').value=null;
  document.getElementById('input3').value=null;
  document.getElementById('input4').value=null;
  document.getElementById('input5').value=null;

 
  document.getElementById("error2").innerHTML="";
document.getElementById("correct1").innerHTML="";
document.getElementById("correct").innerHTML="";
  document.getElementById('mob').style.display="block";
   document.getElementById('otp').style.display="none";
   document.getElementById("number").focus();
}


</script>



<script >
  
  var inp2 = document.getElementById("input5");
inp2.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();
   document.getElementById("verifyotpnow").click();
  }

  if(event.keyCode === 8){

document.getElementById("input1").value=null;
document.getElementById("input2").value=null;
document.getElementById("input3").value=null;
document.getElementById("input4").value=null;
document.getElementById("input5").value=null;
document.getElementById("input1").focus();
  }

});
</script>








    
    <p class=" text-danger" id="error2"></p>
    <a  style="display:block-inline" href="#" onclick="resend()" id="correct" style="margin-bottom: -20px"></a><a style="display:block-inline" href= "#" onclick="change()" id="correct1" style="margin-bottom: -20px"></a>

<br>
<br>




  <button type="button" class="btn btn-danger mob" onclick="otp()" id="verifyotpnow" style="border-radius: 5px;border-radius: 20px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">Verify Otp</button> 

    
  </div>

<div id="location" style="display: none;">
   <div class="input-group">
    <div class="d-flex flex-row  flex-fill justify-content-center bd-highlight mb-3" >
  <div class="p-2 ml-5 bd-highlight"> <input type="text" name="location"  readonly class="form-control-plaintext text-center" id="local" placeholder="click to get your location"  ></div>
  <div class="p-2 bd-highlight">   <button id="det" type="button" class="spinner-grow text-danger" role="status" style=" display: none;" ></button>
           <button id="loc" type="button" class="btn btn-danger" onclick="myFunc()" style="border-radius: 20px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)"><i class="fa fa-map-marker" style="font-size:28px;color:white"></i></button></div>
 
</div>
       
       
        </div>
<br>

     <button type="submit" id ="dis" name="submit" class="btn btn-danger mob" style="border-radius: 20px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);width: 200px" disabled>Welcome</button> 


   </div>
</form>


<script>



function mobile(){


   var mob=document.getElementById('number').value;
   var x=mob.length;



var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       
           var k=this.responseText;

       if(k == 0 && x == 10){
        document.getElementById('mob').style.display="none";
   document.getElementById('otp').style.display="block";
   document.getElementById("input1").focus();
   
        }
        else if(k == 1){
            document.getElementById('error').innerHTML="You already have an account !!";


        }
       else{
        document.getElementById('error').innerHTML="Please enter correct number !!";
       }

      }
    };
    xmlhttp.open("GET", "check.php?q=" + mob, true);
    xmlhttp.send();
  }







    function myFunc() {

      document.getElementById('loc').style.display="none";
       document.getElementById('det').style.display="block";
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState==4 && xmlhttp.status==200) {
              document.getElementById('dis').disabled=false;
                document.getElementById("local").value=xmlhttp.responseText;
                document.getElementById('det').style.display="none";
       document.getElementById('loc').style.display="block";
      
            }
        }
        xmlhttp.open("GET","city.php",true); //Change file.php to the location of your php file
        xmlhttp.send();
    }
    </script>














    </div>
    
  </div>
  <div class="  mb-3" style="white-space: pre-line;color: black"> By Signing Up, you agree to our Terms,<br>Data Policy and Cookie Policy.
  </div>
   <div class="card-footer border-0 text-muted">
   Already have an account? click here to <a href="login.php">Login</a>
  </div>
</div>









</div>
</div>




<!-- Footer -->


<div id= "downphoto" class="   navbar navbar-expand-sm fixed-bottom " style="height: 200px;width:100%;overflow: hidden;z-index:-9;margin-bottom: -11px;">

<img id="surfing" src="icon/home.png" style="height: 200px;width: 100%;object-fit: cover;">


</div>

<div id="copyright" class="navbar-brand " style="position: absolute;bottom: 6px;right: 10px ;z-index:-4;"><kbd class="mr-2 mb-2 " style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">#</kbd>V I Z A R D</div>
</body>
</html>
