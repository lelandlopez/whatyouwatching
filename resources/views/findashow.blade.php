@extends('navbar')
@section('content')

<link href="bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
<script src="bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

<script>
</script>

<div class="row">
	<h1>Find A Show</h1>
	<form class="form-inline">
		<div class="form-group">
			<label for="exampleInputName2">Date</label>
			<div class="input-group date" data-provide="datepicker">
		    <input type="text" class="form-control">
		    <div class="input-group-addon">
		        <span class="glyphicon glyphicon-th"></span>
		    </div>
		</div>
		<div class="form-group">
			<label for="exampleInputEmail2">Show/Keyword</label>
			<input type="text" class="form-control" id="exampleInputEmail2" placeholder="Show/Keyword">
		</div>
		<div class="form-group">
		<label for="exampleInputEmail2">Zipcode</label>
		<input type="text" class="form-control" id="exampleInputEmail2" placeholder="Zipcode">
		</div>
		<button type="submit" class="btn btn-default">Find A Showing</button>
	</form>
</div>
@endsection
