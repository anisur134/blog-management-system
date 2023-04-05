<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>SB Admin 2 - Bootstrap Admin Theme</title>

	<!-- Bootstrap Core CSS -->
    
	<link href="{{asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet">

	<!-- MetisMenu CSS -->
	<link href="{{asset('backend/assets/css/metisMenu.min.css')}}" rel="stylesheet">

	<!-- DataTables CSS -->
	<link href="{{asset('backend/assets/css/dataTables.bootstrap.css')}}" rel="stylesheet">

	<!-- DataTables Responsive CSS -->
	<link href="{{asset('backend/assets/css/dataTables.responsive.css')}}" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="{{asset('backend/assets/css/sb-admin-2.css')}}" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="{{asset('backend/assets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
</head>

<body>

<div id="wrapper">

	<!-- Navigation -->
	<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">Admin Panel</a>
		</div>
		<!-- /.navbar-header -->

		<ul class="nav navbar-top-links navbar-right">
		{{-- <li>Logged in  </li> --}}
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">
					<i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
				</a>
				<ul class="dropdown-menu dropdown-user">
					<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
					</li>
					<li><a href="#" onclick="event.preventDefault();
                        document.getElementById('logoutForm').submit();"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        <form id="logoutForm" action="{{route('logout')}}" method="POST">
                            @csrf
                        </form>
					</li>
				</ul>
				<!-- /.dropdown-user -->
			</li>
			<!-- /.dropdown -->
		</ul>
		<!-- /.navbar-top-links -->

		<div class="navbar-default sidebar" role="navigation">
			<div class="sidebar-nav navbar-collapse">
				<ul class="nav" id="side-menu">

                   

					<li><a href="{{route('home')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a></li>

				
					<li>
						<a href="#"><i class="fa fa-files-o fa-fw"></i>Category<span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
							<li><a href="{{route('add-category')}}">Add Category</a></li>
							<li><a href="{{route('manage-category')}}">View Category</a></li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-files-o fa-fw"></i>Blog<span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
							<li><a href="{{route('add-blog')}}">Add Blog</a></li>
							<li><a href="{{route('manage-blog')}}">View Blog</a></li>
						</ul>
					</li>
					<li><a href="{{route('manage-comment')}}">Manage Comment</a></li>
					<li>
						<a href="#"><i class="fa fa-files-o fa-fw"></i>Testimonial<span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
							<li><a href="testimonial_add.php">Add Testimonial</a></li>
							<li><a href="testimonial_view.php">View Testimonial</a></li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-files-o fa-fw"></i>Service<span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
							<li><a href="service_add.php">Add Service</a></li>
							<li><a href="service_view.php">View Service</a></li>
						</ul>
					</li>
               
                         <li>
						<a href="#"><i class="fa fa-files-o fa-fw"></i>Gallery<span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
							<li><a href="photo_category_add.php">Add Photo Category</a></li>
							<li><a href="photo_category_view.php">View Photo Category</a></li>
							<li><a href="photo_add.php">Add Photo</a></li>
							<li><a href="photo_view.php">View Photo</a></li>
						</ul>
					</li>

					<li>
						<a href="#"><i class="fa fa-files-o fa-fw"></i>Blog/Post<span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
							<li><a href="category_add.php">Add Category</a></li>
							<li><a href="category_view.php">View Category</a></li>
							<li><a href="post_add.php">Add Post</a></li>
							<li><a href="post_view.php">View Post</a></li>
						</ul>
					</li>
					
                 
					<li>
						<a href="#"><i class="fa fa-files-o fa-fw"></i>Role Settings<span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
							<li><a href="role_add.php">Add Role</a></li>
							<li><a href="role_view.php">View Role</a></li>
						</ul>
					</li>
					
					
					<li>
						<a href="#"><i class="fa fa-files-o fa-fw"></i>User Settings<span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
							<li><a href="user_add.php">User Add</a></li>
							<li><a href="user_view.php">Views user</a></li>
						</ul>
					</li>
					
					
				</ul>
			</div>
			<!-- /.sidebar-collapse -->
		</div>
		<!-- /.navbar-static-side -->
	</nav>

	<div id="page-wrapper">
        @yield('body_content')
            </div>
            <!-- /#page-wrapper -->
            
            </div>
            <!-- /#wrapper -->
            
            <!-- jQuery -->
            <script src="{{asset('backend/assets/js/jquery.min.js')}}"></script>
            
            <!-- Bootstrap Core JavaScript -->
            <script src="{{asset('backend/assets/js/bootstrap.min.js')}}"></script>
            
            <!-- Metis Menu Plugin JavaScript -->
            <script src="{{asset('backend/assets/js/metisMenu.min.js')}}"></script>
            
            <!-- DataTables JavaScript -->
            <script src="{{asset('backend/assets/js/jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('backend/assets/js/dataTables.bootstrap.min.js')}}"></script>
            <script src="{{asset('backend/assets/js/dataTables.responsive.js')}}"></script>
            
            <!-- Custom Theme JavaScript -->
            <script src="{{asset('backend/assets/js/sb-admin-2.js')}}"></script>
            <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
            <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
            
            <script>
				$('.delete-btn').click(function(){
					event.preventDefault();
					   var categoryId=$(this).attr('id');
					   var Check=confirm("Are You Want To Sure Delete");
					   if(Check){
						
						 
						  document.getElementById('Categorydel'+categoryId).submit();
				
				
					   }
				
				
				});

				$('.deletebtn').click(function(){
        event.preventDefault();
           var blogId=$(this).attr('id');
           var Check=confirm("Are You Want To Sure Delete");
           if(Check){
            
             
              document.getElementById('Blogdel'+blogId).submit();
    
    
           }
    
    
    });


				</script>
            
            </body>
            
            </html>        