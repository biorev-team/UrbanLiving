@extends('layouts.welcome')
@section('content')
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    .thumb {
        height: 150px;
        width: 200px;
    }

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>
</head>

<div class="tab">
  <button class="tablinks" onclick="openMode(event, 'homes')">Homes</button>
  <button class="tablinks" onclick="openMode(event, 'communities')">Communities</button>
</div>
<div id="homes" class="tabcontent">
<form>
  
    <div class="form-group">
      <label for="inputTitle">Title</label>
    <input type="text" class="form-control" id="title" name ="title"  >
    </div>
  <div class="form-group">
    <label for="inputDescription">Description</label>
    <input type="text" class="form-control" id="description"    >
  </div>
  <div class="form-row">
  <div class="form-group col-md-4">
    <label for="inputBedroom">Bedroom</label>
    <input type="text" class="form-control" id="bedroom"   >
  </div>
  <div class="form-group col-md-4">
    <label for="inputBathroom">bathroom</label>
    <input type="text" class="form-control" id="bathroom"  >
  </div>
  <div class="form-group col-md-4">
    <label for="inputGarage">Garage</label>
    <input type="text" class="form-control" id="garage"    >
  </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-4">
    <label for="stories">Stories</label>
    <input type="text" class="form-control" id="stories"    >
  </div>
  <div class="form-group col-md-4">
    <label for="mls">Mls</label>
    <input type="text" class="form-control" id="mls"  >
  </div>
  <div class="form-group col-md-4">
    <label for="area">Area</label>
    <input type="text" class="form-control" id="area"   >
  </div>
  </div>
<div class="row">
<div class="col-md-6">
  <div class="image-upload">
  <p>Featured Image</p>
  <p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
<p><label for="file" style="cursor: pointer;">Choose File</label></p>
<p><img id="output" width="200" /></p>
  </div>
</div>
<div class="col-md-6">
<div class="image-upload">
<p>Image Gallery</p>
   
  <input type="file" id="files" name="files[]" multiple />
<output id="list"></output>
  </div>
</div>
</div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity">Builder</label>
      <input type="text" class="form-control" id="builder"  >
    </div>
    <div class="form-group col-md-4">
    <label for="inputDescription">Meta Description</label>
      <input type="text" class="form-control" id="meta_description"  >
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputMetatitle">Meta Title</label>
      <input type="text" class="form-control" id="meta_title"  >
    </div>
  </div>
  
</div>

<!-- Modal -->
<div id="communities" class="tabcontent">
 <div class="form-group">
      <label for="inputEmail4">Title</label>
      <input type="text" class="form-control" id="inputTitle"  >
    </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress"   >
  </div>

  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputArea">Area</label>
    <input type="text" class="form-control" id="inputArea"   >
  </div>
  <div class="form-group col-md-4">
    <label for="inputDivision">Subdivision</label>
    <input type="text" class="form-control" id="inputDivision"  >
  </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity"  >
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Country</label>
      <select id="inputState" class="form-control">
        <option selected></option>
        <option>India</option>
        <option>USA</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip"  >
    </div>
  </div>
</form>
<div class="modal-footer">
        <button type="button" stye="color: white;" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
</div>

<script>
  function handleFileSelect(evt) {
    var files = evt.target.files; // FileList object

    // Loop through the FileList and render image files as thumbnails.
    for (var i = 0, f; f = files[i]; i++) {

      // Only process image files.
      if (!f.type.match('image.*')) {
        continue;
      }

      var reader = new FileReader();

      // Closure to capture the file information.
      reader.onload = (function(theFile) {
        return function(e) {
          // Render thumbnail.
          var span = document.createElement('span');
          span.innerHTML = ['<img class="thumb" src="', e.target.result,
                            '" title="', escape(theFile.name), '"/>'].join('');
          document.getElementById('list').insertBefore(span, null);
        };
      })(f);

      // Read in the image file as a data URL.
      reader.readAsDataURL(f);
    }
  }

  document.getElementById('files').addEventListener('change', handleFileSelect, false);
  


  var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};


// Tabs

function openMode(evt, modeName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(modeName).style.display = "block";
  evt.currentTarget.className += " active";
}

</script>

@endsection