<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Admin | Urban</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/bower_components/admin-lte/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/bower_components/admin-lte/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>
    .card-body{
       height: 150px;
    }
    </style>
     <!-- custom style sheet -->
  <link rel="stylesheet" href="/css/style.css" class="rel">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  @if(Route::currentRouteName() == 'edit-page') 
  <!-- include summernote css/js -->
  <link href="{{asset('summernote/summernote.min.css')}}" rel="stylesheet">
  @endif

<link href="{{asset('/admin/cms/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">  
      <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="{{asset('/admin/cms/css/bootstrap.min.css')}}">
      <link href="{{asset('/admin/cms/css/sb-admin-2.min.css')}}" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="{{asset('/admin/cms/css/bootstrap-extended.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('/admin/cms/css/material-extended.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('/admin/cms/fonts/simple-line-icons/style.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('/admin/cms/css/vendors/datatables.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('/urban_project/public/admin/cms/css/components.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('/urban_project/public/admin/cms/css/core/style.css')}}">
      <link href="{{asset('/admin/cms/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
      <link href="{{asset('/admin/cms/css/custom2.css')}}" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.css" rel="stylesheet">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="/bower_components/admin-lte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Urban</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
              <li class="nav-item">
                <a href="/admin" class="nav-link">
                <i class="fa fa-fire"></i><span><p>Dashboard</p></span>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/homes" class="nav-link">
                <i class="fa fa-home"></i><span><p>Homes</p></span>
                </a>
              </li>

              <li class="nav-item">
                <a href="/admin/community" class="nav-link">
                <i class="fa fa-home"></i><span><p>Communities</p></span>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="fa fa-terminal"></i><span><p>Floor</p></span>
                </a>
              </li>

              <li class="nav-item">
                <a href="/components" class="nav-link">
                <i class="fa fa-square"></i><span><p>Components</p></span>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/pages" class="nav-link">
                <i class="fa fa-square"></i><span><p>Page</p></span>
                </a>
              </li>

            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Urban Copy</li>
              
            </ol>
        
          </div><!-- /.col -->
          @yield('content')
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.min.js"></script>

@if(Route::currentRouteName() == 'edit-page')
<script src="/summernote/summernote.min.js"></script>
<script>
  $(document).ready(function() {
      var image,image_name;
      var APP_URL = "{{ url('/') }}";
      var id = window.location.href.split('/').pop();
      $.ajax({
          type: 'GET',
          url: APP_URL+'/api/page/'+id,
          success: function(result){
            console.log(result.title);
            document.getElementById("title").value        = result.title;
            document.getElementById("meta_title").value   = result.meta_title;
            document.getElementById("meta_des").value     = result.meta_description;
            $('#summernote').summernote('code',result.description);
            $('#chosen_feature_img').attr('src','/'+result.featured_image);
          }   
        });
       $('input[type=file]').on('change',function(e){
            let files = e.target.files[0];
            let reader = new FileReader();
            if(files){
              reader.onloadend = ()=>{
                $('#chosen_feature_img').attr('src',reader.result);
                image = reader.result;
                image_name = files.name;
               // document.getElementById("featured_img").value  = reader.result;
              }
              reader.readAsDataURL(files); 
          }
        });
        $(function () {
          $('form').on('submit', function (e) {
            var title,meta_title,meta_des
            e.preventDefault();
                title            =  document.getElementById("title").value;         
                meta_title       =  document.getElementById("meta_title").value;   
                meta_des         =  document.getElementById("meta_des").value;
                $.ajax({
                  type: 'post',
                  url: '/api/page',
                  data:{
                    'title'               : title,
                    'meta-title'          : meta_title,
                    'meta-des'            : meta_des,
                    'featured-image'      : image,
                    'featured-image-name' : image_name,
                    'editordata'    : $('#summernote').summernote('code')
                  },
                  success: function () {
                    
                  }
                });

          });

      });
    });
</script>
@endif
@if(Route::currentRouteName() == 'edit-home' )
<script>
$(document).ready(function() {
  var APP_URL = "{{ url('/') }}";
  var id = window.location.href.split('/').pop();
  $.ajax({
      type: 'GET',
      url: APP_URL+'/api/admin/home/'+id,

      success: function(result){     
        document.getElementById("title").value = result.title;
        document.getElementById("description").value = result.description;
        document.getElementById("bedroom").value = result.bedroom;
        document.getElementById("bathroom").value = result.bathroom;
        document.getElementById("garage").value = result.garage;
        document.getElementById("stories").value = result.stories;
        document.getElementById("mls").value = result.mls;
        document.getElementById("area").value = result.area;
        document.getElementById("community_list").value = result.community;
        document.getElementById("builder").value = result.builder;
        document.getElementById("meta_title").value = result.meta_title;
        document.getElementById("meta_description").value = result.meta_description;
      }
      
    }); 
    $('input[type=file]').on('change',function(e){
            let files = e.target.files[0];
            let reader = new FileReader();
            if(files){
              reader.onloadend = ()=>{
                $('#chosen_feature_img').attr('src',reader.result);
                image = reader.result;
                image_name = files.name;
               // document.getElementById("featured_img").value  = reader.result;
              }
              reader.readAsDataURL(files); 
          }
        });
        $(function () {
          $('form').on('submit', function (e) {
            var title,description,bedroom,bathroom,garage,stories,mls,area,builder,meta_description,meta_title;
            e.preventDefault();
                title            =  document.getElementById("title").value;         
                description            =  document.getElementById("description").value;         
                bedroom            =  document.getElementById("bedroom").value;         
                bathroom            =  document.getElementById("bathroom").value;         
                garage            =  document.getElementById("garage").value;         
                stories            =  document.getElementById("stories").value;         
                mls            =  document.getElementById("mls").value;         
                area            =  document.getElementById("area").value;         
                builder            =  document.getElementById("builder").value;         
                community            =  document.getElementById("community_list").value;         
                meta_description            =  document.getElementById("meta_description").value;         
                meta_title            =  document.getElementById("meta_title").value;         
                $.ajax({
                  type: 'post',
                  url: '/api/admin/home/'+id,
                  data:{
                    'title'               : title,
                    'description'         : description,
                    'bedroom'             : bedroom,
                    'bathroom'            : bathroom,
                    'garage'              : garage,
                    'stories'             : stories,
                    'mls'                 : mls,
                    'area'                : area,
                    'builder'             : builder,
                    'community'           : community,
                    'meta-title'          : meta_title,
                    'meta-description'    : meta_description,
                    'featured-image'      : image,
                    'featured-image-name' : image_name,
                  },
                  success: function () {
                    window.location.href = "/admin/home/manage/"+id;
                  }
                });

          });

      });
});
</script>
@endif
@if(Route::currentRouteName() == 'create-home' )
<script>
$(document).ready(function() {
  var APP_URL = "{{ url('/') }}";
  var id = window.location.href.split('/').pop();
  
    $('input[type=file]').on('change',function(e){
            let files = e.target.files[0];
            let reader = new FileReader();
            if(files){
              reader.onloadend = ()=>{
                $('#chosen_feature_img').attr('src',reader.result);
                image = reader.result;
                image_name = files.name;
               // document.getElementById("featured_img").value  = reader.result;
              }
              reader.readAsDataURL(files); 
          }
        });
        $(function () {
          $('form').on('submit', function (e) {
            var title,description,bedroom,bathroom,garage,community,stories,mls,area,builder,meta_description,meta_title;
            e.preventDefault();
                title            =  document.getElementById("title").value;         
                description            =  document.getElementById("description").value;         
                bedroom            =  document.getElementById("bedroom").value;         
                bathroom            =  document.getElementById("bathroom").value;         
                garage            =  document.getElementById("garage").value;         
                stories            =  document.getElementById("stories").value;         
                mls            =  document.getElementById("mls").value;         
                area            =  document.getElementById("area").value;         
                community            =  document.getElementById("community_list").value;         
                builder            =  document.getElementById("builder").value;         
                meta_description            =  document.getElementById("meta_description").value;         
                meta_title            =  document.getElementById("meta_title").value;         
                $.ajax({
                  type: 'post',
                  url: '/api/admin/home/',
                  data:{
                    'title'               : title,
                    'description'         : description,
                    'bedroom'             : bedroom,
                    'bathroom'            : bathroom,
                    'garage'              : garage,
                    'stories'             : stories,
                    'mls'                 : mls,
                    'area'                : area,
                    'community'           : community,
                    'builder'             : builder,
                    'meta-title'          : meta_title,
                    'meta-description'    : meta_description,
                    'featured-image'      : image,
                    'featured-image-name' : image_name,
                  },
                  success: function ( ) {
                    window.location.href = "/admin/homes";
                  }
                });

          });

      });
});
</script>
@endif
@if(Route::currentRouteName() =='manage-home')
<script>
  $(document).ready(function() {
    var APP_URL = "{{ url('/') }}";
    var id = window.location.href.split('/').pop();
   
    $.ajax({
        type: 'GET',
        url: APP_URL+'/api/admin/home/'+id,
  
        success: function(result){     
          document.getElementById("title").innerHTML = result.title;
          document.getElementById("description").innerHTML = result.description;
          document.getElementById("area").innerHTML = result.area;
          document.getElementById("builder").innerHTML = result.builder;
        }
        
      }); 

  });
  </script>
  @endif
  <script>
    function deleteFeature(id)
    {
      $.ajax({
              url: APP_URL + '/api/admin/home/feature/'+ id,
              type: 'DELETE'
            });
           
    }
    function editfeature(id)
      {     
        var APP_URL = "{{ url('/') }}";
        $.ajax({
      type: 'GET',
      url: APP_URL+'/api/admin/home/feature/'+id,
      success: function(result){    
        $('#editFeature').modal('show');

        document.getElementById("title").value = result.title;
      }
      }); 
      $(function () {
          $('#editForm').on('submit', function (e) {
            var title;
            e.preventDefault();
                title            =  document.getElementById("title").value;         
                 
                        

                $.ajax({
                  type: 'post',
                  url: '/api/admin/community/'+cid,
                  data:{
                    'title'           : title,
                     
                     
                  },
                  success: function () {
                    $('#featureEdit').modal('hide');
                    
                  }
                });

          });

      });
      }

  </script>
<script>
    var APP_URL = "{{ url('/') }}";
    loadPagesList(); 
    function loadPagesList(){
    $.ajax({
          type: 'GET',
          url: APP_URL+'/api/page',
          success: function(result){
          $('#pages_list').html(result);
          }   
      });
  } 
</script> 
@if(Route::currentRouteName() == 'homes')
  <script>
    var APP_URL = "{{ url('/') }}";
    loadHomeList();
      function loadHomeList(){
    $.ajax({
          type: 'GET',
          url: APP_URL+'/api/admin/home',
          success: function(result){   
          $('#home_list').html(result);
          }   
      });
  }  
      function deleteHome(id)
      {       $.ajax({
              url: APP_URL + '/api/admin/home/'+ id,
              type: 'DELETE'
            });
           loadHomeList();

      }
      
 </script> 
 @endif 

 @if(Route::currentRouteName() == 'create-home'||Route::currentRouteName() == 'edit-home')
  <script>
    var APP_URL = "{{ url('/') }}";
    var id = window.location.href.split('/').pop();
    loadCommunityList();
      function loadCommunityList(){
        var display;
    $.ajax({
          type: 'GET',
          url: APP_URL+'/api/admin/communityList',
          success: function(result){
            $.each(result,function(k){
              display += '<option value="'+result[k].id+'">'+result[k].title+'</option>';
            })
          $('#community_list').html(display);
          }   
      });
  }
</script>
@endif

 @if(Route::currentRouteName() == 'communities')
  <script>
    var APP_URL = "{{ url('/') }}";
    var id = window.location.href.split('/').pop();
    loadCommunityList();
      function loadCommunityList(){
    $.ajax({
          type: 'GET',
          url: APP_URL+'/api/admin/community',
          success: function(result){
          $('#community_list').html(result);
          }   
      });
  }  
       
      function deleteCommunity(id)
      {         $.ajax({
                url: APP_URL + '/api/admin/community/'+ id,
                type: 'DELETE',
            });
            loadCommunityList();
      }

      function editcommunity(cid)
      {        
        var APP_URL = "{{ url('/') }}";
        var id = window.location.href.split('/').pop();
        $.ajax({
      type: 'GET',
      url: APP_URL+'/api/admin/community/'+cid,

      success: function(result){    
        $('#communityModal').modal('show');

        document.getElementById("title").value = result.title;
        document.getElementById("address").value = result.address;
        document.getElementById("area").value = result.area;
        document.getElementById("subdivission").value = result.subdivission;
        document.getElementById("city").value = result.city;
        document.getElementById("state").value = result.state;
        document.getElementById("country").value = result.county;
        document.getElementById("area").value = result.area;
        document.getElementById("zipcode").value = result.zipcode;
      }
      }); 
      $(function () {
          $('#Communityform').on('submit', function (e) {
            var title,address,area,state,country,city,subdivission,zipcode;
            e.preventDefault();
                title            =  document.getElementById("title").value;         
                address           =  document.getElementById("address").value;         
                area             =  document.getElementById("area").value;         
                city             =  document.getElementById("city").value;         
                country     =  document.getElementById("country").value;         
                subdivission     =  document.getElementById("subdivission").value;         
                state     =  document.getElementById("state").value;         
                zipcode          =  document.getElementById("zipcode").value;  
                        

                $.ajax({
                  type: 'post',
                  url: '/api/admin/community/'+cid,
                  data:{
                    'title'           : title,
                    'address'         : address,
                    'area'            : area,
                    'city'            : city,
                    'county'          : country,
                    'subdivission'    : subdivission,
                    'state'           : state,
                    'zipcode'         : zipcode,
                     
                  },
                  success: function () {
                    $('#communityModal').modal('hide');
                    loadCommunityList();
                    
                  }
                });

          });

      });
      }

      function Addcommunity()
      {        
        $('#communityModal').modal('show');
        var APP_URL = "{{ url('/') }}";
        
      $(function () {
          $('#Communityform').on('submit', function (e) {
            var title,address,area,state,country,city,subdivission,zipcode;
            e.preventDefault();
                title            =  document.getElementById("title").value;         
                address           =  document.getElementById("address").value;         
                area             =  document.getElementById("area").value;         
                city             =  document.getElementById("city").value;         
                country     =  document.getElementById("country").value;         
                subdivission     =  document.getElementById("subdivission").value;         
                state     =  document.getElementById("state").value;         
                zipcode          =  document.getElementById("zipcode").value;  
                        

                $.ajax({
                  type: 'post',
                  url: '/api/admin/community/',
                  data:{
                    'title'           : title,
                    'address'         : address,
                    'area'            : area,
                    'city'            : city,
                    'county'          : country,
                    'subdivission'    : subdivission,
                    'state'    : state,
                    'zipcode'         : zipcode,
                     
                  },
                  success: function () {
                    $('#communityModal').modal('hide');
                    loadCommunityList();
                  }
                });

          });

      });
    }
 </script> 
 @endif
 
  
</body>
</html>
