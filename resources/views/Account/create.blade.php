@extends('Account/index')

@section('body')
	<div class="col-md-8">
		<form method="POST" action="{{ route('account.store') }}">
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
				<input type="submit" name="register" value="Submit" class="btn btn-success">
				<input type="submit" name="cancel" value="Cancel" class="btn btn-danger">
			</div>
			
		</form>
	</div>

@if(isset($success) || Session::has('success') )
	<div class="alert alert-success alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<strong>Success!</strong> {{ isset($success) ? $info : Session::get('success') }}
	</div>
@endif


@if ($errors->any())

<div class="alert alert-danger">

	<ul>

		@foreach ($errors->all() as $error)

			<li>{{ $error }}</li>

		@endforeach

	</ul>

</div>

@endif

@endsection

