@extends('layouts.admin')
    @section('content')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">All Pages </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Title</th>
                                    <th>Meta Title</th>
                                    <th>Meta Description</th>
                                    <th>Featured Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="pages_list">
                                <tr>
                                    <td>1</td>
                                    <td>Home</td>
                                    <td>Home</td>
                                    <td>Biorev Provides various types of services</td>
                                    <td><img src="{{asset('download.jpg')}}" alt="featured" style="height:50px;width:50px;"></td>
                                    <td><span><a href="pages/edit" style="text-decoration:none;color:#212529;"><i class="far fa-edit"></i></a></span>
                                        <span><a href="pages/edit" style="text-decoration:none;color:#212529;"><i class="far fa-file"></i></a></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>About Us</td>
                                    <td>About</td>
                                    <td>Biorev Provides various types of services</td>
                                    <td>about</td>
                                    <td><img src="{{asset('download.jpg')}}" alt="featured" style="height:50px;width:50px;"></td>
                                    <td><span><a href="pages/edit" style="text-decoration:none;color:#212529;"><i class="far fa-edit"></i></a></span>
                                        <span><a href="pages/edit" style="text-decoration:none;color:#212529;"><i class="far fa-file"></i></a></span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    @endsection