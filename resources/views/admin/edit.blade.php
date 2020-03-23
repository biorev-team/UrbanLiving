@extends('layouts.admin')
    @section('content')
        <form action="post">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="name">Title</label>
                        <input class="form-control" id="title" name="title" value="Title" placeholder="Title" type="text">
                    </div>
                    <div class="form-group">
                        <label for="name">Meta Title</label>
                        <input class="form-control" id="meta_title" name="meta-title" value="Text value" placeholder="Meta Title" type="text">
                    </div>
                    <div class="form-group">
                        <label for="name">Meta Description</label>
                        <input class="form-control" id="meta_des" name="meta-des" value="Text value" placeholder="Meta Description" type="text">
                    </div>
                    <div>
                        <label for="name">Description</label>
                        <textarea id="summernote" name="editordata"></textarea>
                    </div>
                    <div class="form-group mt-2">
                        <div class="row">
                            <div class="col-xl-4 col-lg-6">
                                <label for="logo">Featured Image</label>
                                <label class="btn btn-default btn-file rounded-0">
                                    <!-- The file is stored here. -->Choose
                                    <input class="form-control" type="file" id="featured_img" name="featured-image" value="" placeholder="Logo">
                                </label>
                            </div>
                            <div class="col-xl-8 col-lg-6">
                                <img src="/download.jpg" id="blah1" width="100" height="100">
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </form>    
    @endsection