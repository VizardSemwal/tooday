
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
    <div class="card-body " >
  <img src="icon/toodaylogo.png"   style="width:400px;height: 250px;object-fit:cover;">
    </div>
    <div class="card-body">
     <h1 class="card-title text-center ml-4 text-dark" style="font-family: Segoe UI Emoji;width: 100%;color:black;margin-top: -40px;">" Social Community App "</h1>
     
    </div>
  </div>
</div>
<!--Create account -->





  <div class=" p-md-5  flex-fill  text-center bd-highlight"   >

  <div  class="card border-0   " style="border-radius: 20px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
  <div id="cardhiderb" class="card-header">
    Log-in
  </div>
  <div class="border-0 mt-5 ">
    <h5 id="wel" class="card-title">Welcome back !!</h5>
    <div class="card-body">
      




<form class=" form-horizontal" method="post" >
 <br>


 <div id="mob" style="display: block;">
    <input type="number" name="mobno" id="Cell"  class="form-control text-center mob"  aria-describedby="mobilenumber" placeholder="Enter Mobile Number" value="" style="border-radius: 20px;  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.2) inset;" onkeypress="hidearea()">



<script>
function hidearea()
{
document.getElementById("Status_Cell").innerHTML=null;
document.getElementById("Status_Cell2").innerHTML=null;
document.getElementById("Status_Cell").style.marginBottom = "20px";
}
</script>
<script>
var inputa = document.getElementById("Cell");
inputa.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();
   document.getElementById("verifying").click();
  }
});
</script>



<br>

    <p id="Status_Cell" class="text-danger"></p>
    <a id="Status_Cell2" href="signup.php" class="text-danger" ></a>
    <br>
    <button type="button" id="verifying" class="btn btn-danger mob" onclick="myfunc()" style="border-radius: 5px;border-radius: 20px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">Verify your number</button> 
  
</div>

  <div id="otp" style="display: none;">
   

   

    
    <div class="d-flex flex-row bd-highlight justify-content-center " >
  <div class="p-3 bd-highlight"> 

    <input type="number" onkeypress="myFunction1()" class="form-control text-center" id="input1" value=""  style="width:40px;height:auto;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);"></div>
  <div class="p-3 bd-highlight"> 

    <input type="number" onkeypress="myFunction2()"  class="form-control text-center" id="input2" value=""  style="width:40px;height:auto;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);"></div>
  <div class="p-3 bd-highlight"> 

    <input type="number" onkeypress="myFunction3()"  class="form-control text-center" id="input3" value=""  style="width:40px;height:auto;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">

  </div>
  <div class="p-3 bd-highlight"> 


    <input type="number" onkeypress="myFunction4()"  class="form-control text-center" id="input4" value=""  style="width:40px;height:auto;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">

  </div>
  <div class="p-3 bd-highlight"> 

    <input type="number" value="" class="form-control text-center" id="input5"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
    type = "number"
     maxlength="1"  style="width:40px;height:auto;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
  </div>
  
</div>
 <script >
 function otphai(){


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






    var datahai=document.getElementById('Cell').value;
  
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       
           var checking=this.responseText;

        
  document.getElementById("otp").style.display="none";
 document.getElementById("welcomescreen").style.display="block";

 document.getElementById("cardhider").style.display="none";
 document.getElementById("cardhiderb").style.display="none";



  var update = new Array();

if(checking.indexOf('|$|' != -1)) {
update = checking.split('|$|');
  


    document.getElementById('profilepic').src=update[1];
 document.getElementById('namee').innerHTML=update[0];
 


}
  




     


      }
    };
    xmlhttp.open("GET", "otpcheck.php?q=" + datahai, true);
    xmlhttp.send();




       document.getElementById("otp").style.display="none";
    



















   }
   else{
    document.getElementById("otp1").style.display="block";

   }
}
</script>

<script >
  function myFunction1() {

    document.getElementById("input2").focus(); 
  document.getElementById("otp1").style.display="none";
}
function myFunction2() {
  document.getElementById("input3").focus();
document.getElementById("otp1").style.display="none";}
function myFunction3() {
  document.getElementById("input4").focus();
document.getElementById("otp1").style.display="none";}
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
  document.getElementById("otp1").style.display="none";



  
}


function change(){
 document.getElementById('input1').value=null;
  document.getElementById('input2').value=null;
  document.getElementById('input3').value=null;
  document.getElementById('input4').value=null;
  document.getElementById('input5').value=null;

 
   document.getElementById("otp1").style.display="none";
 document.getElementById('otp').style.display="none";
  document.getElementById('mob').style.display="block";
  
   document.getElementById("Cell").focus();
}


</script>



<script >
  
  var inp2 = document.getElementById("input5");
inp2.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();
   document.getElementById("otpcheck").click();
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
















    <div id="otp1" style="display: none;">
    <p class=" text-danger" id="error2">Sorry Wrong Otp</p><br>
   <div style="margin-top: -15px"> <a style="display:block-inline" href="#" onclick="resend()" id="correct"> Resend Otp  </a><a style="display:block-inline" href= "" onclick="change()" id="correct1">/   Change  number</a></div></div>
<br>
  <button type="button" id="otpcheck" class="btn btn-danger mt-3 mob"  onclick="otphai()" style="border-radius: 5px;border-radius: 20px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">Verify Otp</button> 
</div>
<br>



<div id="welcomescreen" style="display: none;">

<div class="d-flex flex-column bd-highlight mb-0" style="margin-top: -50px">
  <div class="p-2 bd-highlight" ><img id="profilepic" src="1585718847.png" alt="profilepic" width="200px" height="auto" style="border-radius: 50px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"> </div>
  <div class="p-2 bd-highlight" ><h1 class="display-4" id="namee" >No Name</h1></div>
  <div class="p-3 bd-highlight" > <a href="home.php" ><button type="button"  class="btn btn-danger mob"  style="border-radius: 5px;border-radius: 20px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">Welcome</button></a> </div>
</div>







</div>










   
  </div>



   <div id="cardhider" class="card-footer text-muted ">
   Don't have an account? click here to <a href="signup.php">SignUp</a>
  </div>


    </div>
    
  </div>


</form>
<script>
function myfunc() {
  var data=document.getElementById('Cell').value;
   var aaa=data.length;
  if(aaa < 10){

document.getElementById("Status_Cell").innerHTML = "Enter a valid Number";
document.getElementById("Status_Cell").style.marginBottom = "-20px";

  }

  else{


  
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       
           var checking=this.responseText;

       if(checking == 0){
        
        document.getElementById("Status_Cell").innerHTML = "sorry you don't have an Account with this number";
        document.getElementById("Status_Cell2").innerHTML = "Create a new Account";
        }
        else{
            document.getElementById("mob").style.display="none";
            document.getElementById("otp").style.display="block";
            document.getElementById("input1").focus();

        }


      }
    };
    xmlhttp.open("GET", "check.php?q=" + data, true);
    xmlhttp.send();
  }
}



</script>


  

</div>
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
