<form  action="data.php" method="POST" enctype="multipart/form-data">
 
   <label class="navbar-brand" ><h6>Upload profile pic</h6></label>
  
          <div>

            <div class="input-group" >
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01" >Upload</span>
  </div>
  <div class="custom-file" >
    <input type="file" name="upload_image" id="upload_image" class="custom-file-input" 
      aria-describedby="inputGroupFileAddon01" >
    <label class="custom-file-label" for="upload_image">Choose file</label>
  </div>
</div>
         
              <br>
            <div id="uploaded_image" style="display: none;" ></div>
          <div id="image_demo" style="display: none;" ></div>
              <button type="button" style="display: none;" id="image_demo2" class=" btn btn-success mb-2 crop_image">Crop & Upload Image</button>
     </div>
     <input type="file" id="abcz" name="profile" style="display: none; " >
     


<div class="form-group row mt-3">
    <label for="name" class="col-sm-3 col-form-label navbar-brand"><h6>Name</h6></label>
    <div class="col-sm-8 ">
      <input type="text" name="name" class="form-control text-center" id="name" aria-describedby="emailHelp" placeholder="Enter name" style="border-radius: 15px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
    </div>
  </div>

<div class="form-group row">
    <label for="occupation" class="col-sm-4 col-form-label navbar-brand"><h6>Occupation</h6></label>
    <div class="col-sm-7 ">
      <input type="text" name="occupation" class="form-control text-center" id="occupation" aria-describedby="occupation" placeholder="Student" style="border-radius: 15px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
    </div>
  </div>

<div class="form-group row">
    <label for="city" class="col-sm-2 col-form-label navbar-brand"><h6>City</h6></label>
    <div class="col-sm-9 ">
     <input type="text" name="city" class="form-control text-center" id="city" placeholder="city" style="border-radius: 15px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
    </div>
  </div>

<div class="form-group row">
    <label for="Locality" class="col-sm-2 col-form-label navbar-brand"><h6>Locality</h6></label>
    <div class="col-sm-9 ">
     <input type="text" name="locality" class="form-control text-center" id="locality" placeholder="Locality name" style="border-radius: 15px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
    </div>
  </div>


<div class="form-group row">
    <label for="Age" class="col-sm-2 col-form-label navbar-brand"><h6>Age</h6></label>
    <div class="col-sm-4">
   <input type="number" name="age" class="form-control text-center" id="age" placeholder="22 yrs" style="border-radius: 15px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
    </div>
  </div>
 


<div class="form-group ">

  <label class="navbar-brand"><h5>Bio</h5></label>
    <textarea type="text" name="bio" class="form-control" id="bio" placeholder="Write Something about youself" maxlength="150" style="border-radius: 15px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);min-height: 160px"></textarea>
  <br>
</div>

<div class="form-group text-center ">

  <button  type="submit"  class="btn btn-success mb-2" style="width: 150px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">Update</button>
</div>

  


</form>