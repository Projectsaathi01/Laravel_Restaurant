@extends('layout/master')

@section('body')
	<div class="col-md-8">
		<form method="POST" action="#">
			<!-- for CSRF Protection -->
			{{ @csrf_field() }}

			<div class="form-group">
				<input type="text" name="fname" placeholder="First Name" class="form-control">
			</div>

			<div class="form-group">
				<input type="text" name="lname" placeholder="Last Name" class="form-control">
			</div>

			<div class="form-group">
				<input type="text" name="username" placeholder="Create Username" class="form-control">
			</div>

			<div class="form-group">
				<input type="password" name="createpass" placeholder="Create Password" class="form-control">
			</div>

			<div class="form-group">
				<input type="password" name="confirmpass" placeholder="Confirm Password" class="form-control">
			</div>

			<div class="form-group">
				<label>Account Type</label>
				<select name="account_type">
					<option value="admin">Admin</option>
					<option value="user">User</option>
				</select>
			</div>
			
		</form>
	</div>

@endsection