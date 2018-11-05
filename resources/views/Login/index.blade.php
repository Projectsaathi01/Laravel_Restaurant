<!DOCTYPE html>
<html>
<head>
	<title>Application Login</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4 login-design">
				<form method="POST" action="{{ route('account.index') }}">
					 @csrf
					<div class="form-group">
						<input type="text" name="username" placeholder="Username" class="form-control" required="">
					</div>

					<div class="form-group">
						<input type="password" name="password" placeholder="Password" class="form-control" required="">
					</div>
					<div class="form-group">
						<input type="submit" name="login" value="Login" class="btn btn-success">
						<input type="submit" name="cancel" value="Cancel" class="btn btn-danger">
					</div>
				</form>
			</div>
		</div>
</body>
</html>