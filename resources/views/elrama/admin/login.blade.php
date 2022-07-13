<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dea Undanga | Log in</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

	<link rel="stylesheet" href="{{asset('assets/AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">

	<link rel="stylesheet" href="{{asset('assets/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

	<link rel="stylesheet" href="{{asset('assets/AdminLTE/dist/css/adminlte.min.css?v=3.2.0')}}">
</head>
	<body class="hold-transition login-page">
		<div class="login-box">
            <div class="login-logo">
                <img src="{{ asset('assets/img/dea-logo-pendek.png') }}" width="40%" class="" alt=""><br>
                <a href="../../index2.html"><b>DEA </b>Undangan Online</a>
			</div>

			<div class="card">
                <div class="card-body login-card-body">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
						<div class="input-group mb-3">
							<input type="text" class="form-control" placeholder="Username" name="username">
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-envelope"></span>
								</div>
							</div>
						</div>
						<div class="input-group mb-3">
							<input type="password" class="form-control" placeholder="Password" name="password">
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


		<script src="{{asset('assets/AdminLTE/plugins/jquery/jquery.min.js')}}"></script>

		<script src="{{asset('assets/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

		<script src="{{asset('assets/AdminLTE/dist/js/adminlte.min.js?v=3.2.0')}}"></script>
	</body>
	</html>
