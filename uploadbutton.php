

 <button id="fot" onclick="myupload()" class="navbar-toggler mr-2 " type="button" data-toggle="collapse" data-target="#collapseExample1" style="z-index: 20000;position: fixed;outline: none; "  >
     
<img  id="uploadarea" src="icon/try.png" class=" zoom " width="75px" height="auto"  >
  </button>


<script >


function myupload() {
  var z = document.getElementById("uploadarea");


  if (z.src == "http://localhost/tooday/icon/try.png") {
 

 document.getElementById("uploadarea").src="icon/close.png";
document.getElementById("collapseExample1").style.display="block";
 
       
  } else {

    document.getElementById("uploadarea").src="icon/try.png";
document.getElementById("collapseExample1").style.display="none";




  }
}
</script>


<div class="collapse2  " id="collapseExample1" style="position: fixed;display: none;">
  <div class="card card-body border-0" style="background: transparent;">
  <div class="d-flex flex-column">
  <div class="p-2"><button  type="button" style="background: transparent;border:none;outline: none;"><img  src="../abc/VIDEO.png" data-toggle="modal" data-target="#VIDEO" class="zoom "   width="40px" height="auto" style="border-radius: 50px"></button></div>
  <div class="p-2"><button  type="button" style="background: transparent;border:none;outline: none;"><img src="../abc/PHOTO.png" class="zoom"  data-toggle="modal" data-target="#PHOTO"  width="40px" height="auto"></button></div>
  <div class="p-2"><button  type="button" style="background: transparent;border:none;outline: none;"><img  class="zoom" data-toggle="modal" data-target="#OPINION" type="button" src="../abc/OPINION.png"  width="40px" height="auto"></button></div>
  <div class="p-2"><button  type="button" style="background: transparent;border:none;outline: none;"><img  src="../abc/TEXT.png" class="zoom"  data-toggle="modal" data-target="#TEXT"  width="40px" height="auto" ></button></div>
</div>
  </div>
</div>

</div>










<!-- button ends here -->





<div class="container-fluid"  >

<div class="modal fade " id="PHOTO" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="z-index: 30000;" >
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="border-radius: 20px">
      <div class="modal-header border-0 " >
        <h5 class="modal-title" id="exampleModalLongTitle">Uploading Photo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
       <form  action="upload.php"  method="post"  enctype="multipart/form-data">


<div class="modal-body">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Choose a photo</label><br>
            <input type="file" name="photo" accept="image/*;capture=camera" required >
          </div>
           <div class="form-group text-center">
            <label for="message-text"  class="col-form-label m-2">Location:</label>
            <input  type="text" name="location" class="form-control text-center" id="Location1" required style="border-radius: 20px; ">
          </div>
          <div class="form-group text-center">
            <label for="message-text"  class="col-form-label m-2">Description:</label>
            <textarea class="form-control text-center p-2" name="description" id="Description1" required maxlength="100" style="border-radius: 20px; "></textarea>
          </div>
        


      </div>
      <div class="modal-footer justify-content-center">
        
        <button type="submit"  name="submit" class="btn btn-danger" style="border-radius: 5px;border-radius: 20px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>
</div>


<!-- Upload video -->

<!-- Modal -->

<div class="container-fluid"  >
<div class="modal fade" id="VIDEO" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="z-index: 30000;">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="border-radius: 20px;">
      <div class="modal-header border-0">
        <h5 class="modal-title" id="exampleModalLongTitle">Uploading Video</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
       <form  action="uploadvideo.php"  method="post"  enctype="multipart/form-data">


<div class="modal-body ">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Select a video</label><br>
            <input type="file" name="video" accept="video/*;capture=camera" required>
          </div>
           <div class="form-group text-center">
            <label for="message-text"  class="col-form-label m-2">Location:</label>
            <input  type="text" name="location" class="form-control  text-center" id="Location2" required style="border-radius: 20px;">
          </div>
          <div class="form-group text-center">
            <label for="message-text"  class="col-form-label  m-2">Description:</label>
            <textarea class="form-control text-center p-2" name="description" id="Description2" required maxlength="100" style="border-radius: 20px;"></textarea>
          </div>
        


      </div>
      <div class="modal-footer justify-content-center ">
        
        <button type="submit"  name="submit" class="btn btn-danger" style="border-radius: 5px;border-radius: 20px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>

</div>

<!-- Upload text -->

<!-- Modal -->

<div class="container-fluid" >
<div class="modal fade " id="TEXT" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="z-index: 30000;">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="border-radius: 20px;">
      <div class="modal-header border-0">
        <h5 class="modal-title" id="exampleModalLongTitle">Write Text</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
       <form  action="uploadtext.php"  method="post"  enctype="multipart/form-data">


<div class="modal-body">
          
           <div class="form-group text-center">
            <label for="message-text"  class="col-form-label  m-2">Location:</label>
            <input  type="text" name="location" class="form-control text-center" id="Location3" required style="border-radius: 20px;">
          </div>
          <div class="form-group text-center">
            <label for="message-text"  class="col-form-label m-2 " >Write Something good:</label>
            <textarea class="form-control text-center p-5" name="description" id="Description3" required minlength="100" maxlength="200" style="min-height: 200px ;border-radius: 20px;"></textarea>
          </div>
        


      </div>
      <div class="modal-footer justify-content-center">
     
        <button type="submit"  name="submit" class="btn btn-danger" style="border-radius: 5px;border-radius: 20px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>

</div>

<!-- Upload opinion -->

<!-- Modal -->

<div class="container-fluid" >
<div class="modal fade " id="OPINION" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="z-index: 30000;">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="border-radius: 20px;">
      <div class="modal-header border-0">
        <h5 class="modal-title" id="exampleModalLongTitle">Opinion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
       <form  action="uploadopinion.php"  method="post"  enctype="multipart/form-data">


<div class="modal-body">
         
           <div class="form-group text-center">
            <label for="message-text"  class="col-form-label m-2">Location:</label>
            <input  type="text" name="location" class="form-control text-center" id="Location4" required style="border-radius: 10px">
          </div>
          <div class="form-group text-center ">
            <label for="message-text"  class="col-form-label text-center m-2 ">Quesion ?</label>
            <input class="form-control text-center p-5" name="description" id="Description4" placeholder="Write a Question ?" required maxlength="100"  style="border-radius: 10px"></input>
          </div>
        


<div class="form-group">
            <div class="row">
    <div class="col">
      <input type="text" class="form-control text-center" name="Option1" placeholder="Option 1" required maxlength="40" style="border-radius: 20px">
    </div>
    <div class="col">
      <input type="text" class="form-control text-center" name="Option2" placeholder="Option 2" required maxlength="40" style="border-radius: 20px">
    </div>
  </div>
</div>

<div class="form-group">
    <div class="row">
    <div class="col">
      <input type="text" class="form-control text-center" name="Option3" placeholder="Option 3" required maxlength="40" style="border-radius: 20px">
    </div>
    <div class="col">
      <input type="text" class="form-control text-center" name="Option4" placeholder="Option 4" required maxlength="40" style="border-radius: 20px">
    </div>
  </div>
</div>
      </div>
      <div class="modal-footer justify-content-center">
      
        <button type="submit"  name="submit" class="btn btn-danger" style="border-radius: 5px;border-radius: 20px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>
</div>

