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
  @endsection
 