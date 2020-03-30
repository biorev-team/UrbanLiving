@extends('layouts.admin')
@section('content')
<div class="container">
<br>
<div class="row">
<div class="col-md-10">
<h4>Homes</h4>
</div>
<div class="col-md-2">
<a type="button" href="/admin/home/create" style="font-size: 15px; background-color:#18BDB0;" class="btn btn-Success">Add New</a>
</div>
</div>
<br>
    <div class="row" id="home_list">
    
  </div>
  </div>
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
  @endsection
 