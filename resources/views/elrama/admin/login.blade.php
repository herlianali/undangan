<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dea Undanga | Log in</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

	<link rel="stylesheet" href="{{asset('/AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">

	<link rel="stylesheet" href="{{asset('/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

	<link rel="stylesheet" href="{{asset('/AdminLTE/dist/css/adminlte.min.css?v=3.2.0')}}">
</head>
	<body class="hold-transition login-page">
		<div class="login-box">
			<div class="login-logo">
				<a href="../../index2.html"><b>DEA </b>Undangan Online</a>
			</div>

			<div class="card">
				<div class="card-body login-card-body">
					<form action="{{url('/beranda')}}">
						<div class="input-group mb-3">
							<input type="email" class="form-control" placeholder="Email">
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-envelope"></span>
								</div>
							</div>
						</div>
						<div class="input-group mb-3">
							<input type="password" class="form-control" placeholder="Password">
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-lock"></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<button type="submit" class="btn btn-primary btn-block">Sign In</button>
							</div>

						</div>
					</form>
				</div>

			</div>
		</div>


		<script src="{{asset('/AdminLTE/plugins/jquery/jquery.min.js')}}"></script>

		<script src="{{asset('/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

		<script src="{{asset('/AdminLTE/dist/js/adminlte.min.js?v=3.2.0')}}"></script>
	</body>
	</html>
