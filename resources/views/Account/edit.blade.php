<!DOCTYPE html>
<html>
<head>
	<title>Edit Form</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<div class="container">
		<div class="row"> 
			<div class="col-md-8">
				<form method="POST" action="{{ route('account.update', ['id' => $account->id]) }}">
					<!-- for CSRF Protection -->
					<!-- {{ @csrf_field() }} -->
					@csrf
					@method('PUT')

					<div class="form-group">
						<input type="text" name="fname" placeholder="First Name" class="form-control" value="{{ $account->first_name }}">
					</div>

					<div class="form-group">
				<input type="text" name="lname" placeholder="Last Name" class="form-control" value="{{ $account->last_name }}">
					</div>

					<div class="form-group">
						<input type="text" name="username" placeholder="Create Username" class="form-control" value="{{ $account->username }}">
					</div>

					<div class="form-group">
						<input type="password" name="createpass" placeholder="Create Password" class="form-control" value="{{ $account->password }}">
					</div>

					<div class="form-group">
						<input type="password" name="confirmpass" placeholder="Confirm Password" class="form-control" value="{{ $account->password }}">
					</div>

					
					<div class="form-group">
						<input type="submit" name="register" value="Submit" class="btn btn-success">
						<input type="submit" name="cancel" value="Cancel" class="btn btn-danger">
					</div>
					
				</form>
			</div>
		</div>
	</div>
</head>
<body>

</body>
</html>