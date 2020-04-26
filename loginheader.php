

<?php

?>

<nav class="navbar navbar-expand-md sticky-top ">
 
   <a id="logo" class="navbar-brand ml-md-5 text-dark " href="#" style="font-size: 40px;font-family: georgie">Tooday</a>



 <a id="logo2" class="navbar-brand mt-md-0  text-center text-dark" href="#" > <img src="icon/toodaylogo.png"  style="width:220px;height: 120px;object-fit:cover;"><br > " Social Community App "</a>


<button id="fo" onclick="myFunction()" class="navbar-toggler mr-3 " type="button" data-toggle="collapse" data-target="#collapseExample" style="z-index: 999;outline: none;"  >
     <i id="showoff" class="fa fa-plus-square" aria-hidden="true" style="color: #E65100;font-size: 34px"></i>
  </button>
  <div class="collapse navbar-collapse  justify-content-end mr-md-5" id="collapsibleNavbar">
    <ul class="navbar-nav " >
     
      <li class="nav-item">
        <a class="nav-link text-info" href="#" data-toggle="modal" data-target="#rateusnow" >Rate Us</button></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-info" href="#" data-toggle="modal" data-target="#feedback">Feedback</a>
      </li> 
       <li class="nav-item">
        <a class="nav-link text-info" href="#" data-toggle="modal" data-target="#termscondition">Terms & Condition</a>
      </li>   
    </ul>
  </div> 
<div class="collapse1 mb-5 " id="collapseExample" style="position: absolute;right: 0%;display: none;">
  <div class="card  card-body border-0" style="background:transparent;">
  <div class="d-flex flex-column">
   <div class="p-2">   <button class="btn btn-faded" data-toggle="modal" data-target="#feedback" style="border-radius: 15px;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
 
  Give us feedback.. <i class="fa fa-envelope" aria-hidden="true" style="color: #E65100"></i>
</button>
</div>
  <div class="p-2">

   <button class="btn btn-faded" data-toggle="modal" data-target="#rateusnow" style="border-radius: 15px;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
 
  Rate us..
   <i class="fa fa-heart" aria-hidden="true" style="color: #E65100"></i>
</button>


  </div>


  <div class="p-2">   <button class="btn btn-faded" data-toggle="modal" data-target="#termscondition"  style="border-radius: 15px;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">

 Terms and condition..
  <i class="fa fa-cog" aria-hidden="true" style="color: #E65100"></i>
</button>
</div>

</div>
  </div>
</div>

</nav>




<script >


function myFunction() {
  var x = document.getElementById("showoff");
  if (x.className === "fa fa-plus-square") {

 document.getElementById("showoff").className="fa fa-times-circle";

  document.getElementById("collapseExample").style.display="block";

window.onscroll = function () { window.scrollTo(0, 0); };
       
  } else {
    document.getElementById("showoff").className="fa fa-plus-square";
     document.getElementById("collapseExample").style.display="none";
 window.onscroll=function(){};
  }
}
</script>




















<div class="container-fluid" >

<div class="modal " id="feedback" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="z-index: 30000;">
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






<div class="container-fluid" >

<div class="modal " id="termscondition" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="z-index: 30000;">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="border-radius: 20px;">
      <div class="modal-header border-0">
        <h5 class="modal-title" id="examplelLonge">Terms & Conditions</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
       <form    >


<div class="modal-body" style="height: 400px;overflow: scroll;white-space: pre-line;">
Welcome to Tooday!

Tooday builds technologies and services that enable people to connect with each other, build community and grow businesses. These terms govern your use of Tooday and the products, features, applications, services, technologies and software we offer ( tooday products or products ), except in those situations where we expressly separate terms (And not these terms) as applicable. These products are made available to you by Tooday, Inc.

We do not charge you to use Tooday or the products and services included in these terms. Rather, businesses and organizations pay us to show you advertisements for their products and services. By using our product, you agree that we can show you advertisements that we believe will be relevant to you and your interests. We use your personal data to decide which ads to show you.

We do not sell your personal data to advertisers and do not share any information with which you are personally identified (such as your name, email address or other contact information), unless you give us specific permission for this. Rather, advertisers can tell us things like what kind of audience they want their ads to show, and we show those ads to people they might be interested in. We provide advertisers with reports about the performance of their ads, which helps them understand how people are interacting with their content. See section 2 below to learn more.

Our data policyIt describes how we collect and use your personal data in order to decide some advertisements shown to you and to provide all other services described below. About how we use your data, you can review the privacy options available to you at any time by going to your settings .
      </div>
      <div class="modal-footer border-0 justify-content-center">
       
          <button type="button" class="btn btn-danger" data-dismiss="modal" style="color: white;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>
</div>



















<div class="container-fluid" >

<div class="modal " id="rateusnow" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="z-index: 30000;">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="border-radius: 20px;">
      <div class="modal-header border-0">
        <h5 class="modal-title" id="exampleModalLitle">Rate Us</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
       <form>


<div class="modal-body">
        <div class="slidecontainer">
  <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
<br>
<br>
  <p>Rate us Out of 100 | <span id="demo"></span></p>
</div>
        


      </div>
      <div class="modal-footer border-0 justify-content-center">
       
        <button type="button" onclick="getvalue()" name="submit" class="btn btn-danger " style="color: white;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>
</div>




<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}


function getvalue()

{
var z= output.innerHTML;

 var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       
        var avv=this.responseText;
       
  

       if(avv == 1)
       {
               $('#rateusnow').modal('hide')
               document.getElementById('exampleModalLongTitle').innerHTML="Thanks for taking time to rate Us ";
         $('#feedbackmodel').modal('show')
       }
     
       }
    };
    xmlhttp.open("POST", "rating.php?z=" +z, true);
    xmlhttp.send();


}
</script>






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





<div class="modal fade" id="feedbackmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
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




