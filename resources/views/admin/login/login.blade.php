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

	<!-- Custom CSS -->
	<link href="{{asset('backend/assets/css/sb-admin-2.css')}}" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="{{asset('backend/assets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

</head>

<body>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Please Sign In</h3>
				</div>
				<div class="panel-body">
				
					<form role="form" method="post" action="{{ route('login') }}">
                        @csrf
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div>
							<!-- Change this to a button or input when using this as a form -->
							<input type="submit"  value="login" />
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- jQuery -->
<script src="{{asset('backend/assets/js/jquery.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('backend/assets/js/bootstrap.min.js')}}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{asset('backend/assets/js/metisMenu.min.js')}}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{asset('backend/assets/js/sb-admin-2.js')}}"></script>

</body>

</html>
