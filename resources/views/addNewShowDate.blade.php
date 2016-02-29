@extends('navbar')
@section('content')

<link href="bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
<script src="bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

<div class="row">
    <div class="col-md-12">
        <div class="list-group">
            <li class="list-group-item active">Add New Show Date</li>
            <li class="list-group-item">
                <form method="POST" action="/register">
                {!!csrf_field() !!}
                <div class="form-group">
                  <label for="exampleInputName2">Date</label>
                  <div class="input-group date" data-provide="datepicker">
                    <input type="text" class="form-control">
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                    <label for="labelPassword">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-default">Register</button>
@foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
@endforeach
                </form>


            </li>
        </div>

    </div>
</div>

@endsection
