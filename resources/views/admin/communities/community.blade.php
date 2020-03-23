@extends('layouts.welcome')
@section('content')

<style>
.card {
    height: 180px;
}
</style>

<div class="container">
<br>
<div class="row">
<div class="col-md-10">
<h4>Communities</h4>
</div>
<div class="col-md-2">
<a type="button" data-toggle="modal" data-target="#editcomm" style="font-size: 15px; background-color:#18BDB0;" class="btn btn-Success">Add New</a>
</div>
</div>
<br>
    <div class="row">
      <div class="col-md-4" >
<div class="card text-black mb-3" style="max-width: 18rem;">
  <div class="card-header">Community Name</div>
  <div class="card-body">
  <div class="row">
      <div class="col-md-4" >
  <a href="#" data-toggle="modal" data-target="#editcomm"><i class="fa fa-edit">Edit</i></a>
  </div>
  <div class="col-md-4" >
  <a href="#"><i class="fa fa-trash-alt">Delete</i></a>
  </div>
  </div>
</div>
<button type="button" class="btn btn-info">Manage</button>
</div>
</div>
<div class="col-md-4" >
<div class="card text-black mb-3" style="max-width: 18rem;">
  <div class="card-header">Community Name</div>
  <div class="card-body">
  <div class="row">
      <div class="col-md-4" >
  <a href="#" data-toggle="modal" data-target="#editcomm"><i class="fa fa-edit">Edit</i></a>
  </div>
  <div class="col-md-4" >
  <a href="#"><i class="fa fa-trash-alt">Delete</i></a>
  </div>
  </div>
</div>
<button type="button" class="btn btn-info">Manage</button>
</div>
</div>
<div class="col-md-4" >
<div class="card text-black mb-3" style="max-width: 18rem;">
  <div class="card-header">Community Name</div>
  <div class="card-body">
  <div class="row">
      <div class="col-md-4" >
  <a href="#" data-toggle="modal" data-target="##editcomm"><i class="fa fa-edit">Edit</i></a>
  </div>
  <div class="col-md-4" >
  <a href="#"><i class="fa fa-trash-alt">Delete</i></a>
  </div>
  </div>
</div>
<button type="button" class="btn btn-info">Manage</button>
</div>
</div>
<div class="col-md-4" >
<div class="card text-black mb-3" style="max-width: 18rem;">
  <div class="card-header">Community Name</div>
  <div class="card-body">
  <div class="row">
      <div class="col-md-4" >
  <a href="#" data-toggle="modal" data-target="#editcomm"><i class="fa fa-edit">Edit</i></a>
  </div>
  <div class="col-md-4" >
  <a href="#"><i class="fa fa-trash-alt">Delete</i></a>
  </div>
  </div>
</div>
<button type="button" class="btn btn-info">Manage</button>
</div>
</div>
<div class="col-md-4" >
<div class="card text-black mb-3" style="max-width: 18rem;">
  <div class="card-header">Community Name</div>
  <div class="card-body">
  <div class="row">
      <div class="col-md-4" >
  <a href="#" data-toggle="modal" data-target="#editcomm"><i class="fa fa-edit">Edit</i></a>
  </div>
  <div class="col-md-4" >
  <a href="#"><i class="fa fa-trash-alt">Delete</i></a>
  </div>
  </div>
</div>
<button type="button" class="btn btn-info">Manage</button>
</div>
</div>
<div class="col-md-4" >
<div class="card text-black mb-3" style="max-width: 18rem;">
  <div class="card-header">Community Name</div>
  <div class="card-body">
  <div class="row">
      <div class="col-md-4" >
  <a href="#" data-toggle="modal" data-target="#editcomm"><i class="fa fa-edit">Edit</i></a>
  </div>
  <div class="col-md-4" >
  <a href="#"><i class="fa fa-trash-alt">Delete</i></a>
  </div>
  </div>
</div>
<button type="button" class="btn btn-info">Manage</button>
</div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="editcomm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" style="background-color: black;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
    <div class="form-group">
      <label for="inputEmail4">Title</label>
      <input type="text" class="form-control" id="inputTitle" placeholder="title">
    </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Address">
  </div>

  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputArea">Area</label>
    <input type="text" class="form-control" id="inputArea" placeholder="Apun ka Area">
  </div>
  <div class="form-group col-md-4">
    <label for="inputDivision">Subdivision</label>
    <input type="text" class="form-control" id="inputDivision" placeholder="Subdivision">
  </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Country</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>India</option>
        <option>USA</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" stye="color: white;" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

@endsection