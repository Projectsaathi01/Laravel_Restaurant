@extends('dashboard.master')
@section('title')
	<div class="col-md-6">
		<form method="POST" action="#">
			@csrf
			<div class="form-group">
				<input type="text" name="product_name" placeholder="Product Name" class="form-control">
			</div>
			<div class="form-group">
				<input type="text" name="product_category" placeholder="Product Category" class="form-control">
			</div>
			<div class="form-group">
				<input type="number" name="product_qty" placeholder="Product Quantity" class="form-control">
			</div>
			<div class="form-group">
				<input type="text" name="product_unit" placeholder="Product Unit" class="form-control">
			</div>
			<div class="form-group">
				<input type="number" name="product_price"  step=".01" placeholder="Product Price" class="form-control">
			</div>
			<div class="form-group">
				<input type="submit" name="submit" value="Register" class="btn btn-primary">
				<input type="submit" name="cancel" value="Cancel" class="btn btn-danger">
			</div>
		</form>
	</div>
@endsection