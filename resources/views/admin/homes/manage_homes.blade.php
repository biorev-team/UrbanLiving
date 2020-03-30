@extends('layouts.admin')
@section('content')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    .thumb {
        height: 150px;
        width: 200px;
    }

    .w3-bottombar {
      width: 500px
    }
</style>
</head>

<div class="w3-container">
<div class="row">
<div class="col-md-6">
<a type="button" href="/admin/homes" style="color: white;" class="btn btn-info">Go Back</a>
</div>
<div class="col-md-6">
<h4 style="color: black;"><strong>Home Detail</strong></h4>
</div>
</div>
<br>
<div class="w3-row">
    <a href="javascript:void(0)" class="tablinks active" onclick="openCity(event, 'homes');">
      <div class="w3-third tablink w3-bottombar w3-hover-blue-grey w3-padding" style="text-align: center; color:black;"><b>Home</b></div>
    </a>
    <a href="javascript:void(0)" class="tavlinks" onclick="openCity(event, 'features');">
      <div class="w3-third tablink w3-bottombar w3-hover-blue-grey w3-padding" style="text-align: center; color:black;"><b>Features</b></div>
    </a>
  </div>

  <div id="homes" class="w3-container city active" style="display:block">
 <br><br>
 <div class="row">
   @foreach($homes as $home)
      <div class="col-md-5">
        <div class="card">
          <img class="card-img-top" src="data:image/jpeg;base64,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" alt="">
        </div>
      </div>
        <div class="col-md-5">
          <div class="container details"><br><br>
          <h6><strong id=''>{{$home->title}}</strong></h6>
            <h6 style="font-size: 12px;" id='description'>{{$home->description}}</h6>
            <h6 style="font-size: 12px;" id='area'>{{$home->area}}</h6>
            <h6 style="font-size: 12px;" id='builder'>{{$home->builder}}</h6>
          </div>
        </div>
        <div class="col-md-2"><br><br><br>
        <a type="button" href="/admin/home/edit/{{$home->id}}" style="font-size: 15px;" class="btn btn-info">Edit</a>
        </div>
        @endforeach
      </div>
</div>


<div id="features" class="w3-container city" style="display:none"><br><br>
  <div class="container">
  <br>
    <div class="row">
      <div class="col-md-4">
        <a type="button" data-toggle="modal" data-target="#Addfeature" style="font-size: 15px; background-color:#18BDB0;" class="btn btn-Success">Add New Feature</a>
      </div>
      <div class="col-md-4">
        <h4 style="text-align: center;">Features</h4>
      </div>
    </div><br><br>
    
    <div class="row" id="feature_list">
              
    </div>
 
    <div class="modal fade" id="Editfeature" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Features</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
              @csrf
              <label for="inputProperty">Feature Name</label>
              <input type="text" class="form-control" id="title" name="title" placeholder="">
              @foreach($homes as $home)
              <input type="hidden" class="form-control" id="home_id" name="home_id" placeholder="" value="{{$home->id}}">
          @endforeach
            </div>
            <div class="form-group">
            <div class="row">
            <div class="col-md-6">
              <label for="inputProperty">Feature Image</label>
              <div class="card" style="width: 150px;">
                <img class="card-img-top" style="height: 150px;" src="" alt="">
              </div>
              </div>
              <div class="col-md-6">
              <form action="/action_page.php">
            <label for="img">Select image:</label>
            <input type="file" id="img" name="featured-image" accept="image/*">
            </form>
            </div>
          </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
  


<!-- Modal -->
  <div class="modal fade" id="Addfeature" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Features</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="{{route('feature-create')}}" method="post" enctype="multipart/form-data">
          <div class="form-group">
            @csrf
            <label for="inputProperty">Feature Name</label>
            <input type="text" class="form-control" id="inputtitle" name="title" placeholder="">
            @foreach($homes as $home)
            <input type="hidden" class="form-control" id="home_id" name="home_id" placeholder="" value="{{$home->id}}">
        @endforeach
          </div>
          <div class="form-group">
          <div class="row">
          <div class="col-md-6">
            <label for="inputProperty">Feature Image</label>
            <div class="card" style="width: 150px;">
              <img class="card-img-top" style="height: 150px;" src="" alt="">
            </div>
            </div>
            <div class="col-md-6">
            <form action="/action_page.php">
          <label for="img">Select image:</label>
          <input type="file" id="img" name="featured-image" accept="image/*">
          </form>
          </div>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>

<!-- Modal -->
 <!--delet Moadal-->

<div class="modal fade" id="deleteHome" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="text-align: center;">
        Do you want to Delete ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Ok</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>


<script>
// Tabs

function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-border-red", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-border-red";
}


</script>

@endsection