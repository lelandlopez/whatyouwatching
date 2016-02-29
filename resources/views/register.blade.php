@extends('navbar')
@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="list-group">
            <li class="list-group-item active">Register</li>
            <li class="list-group-item">
                <form method="POST" action="/register">
                {!!csrf_field() !!}
                <div class="form-group">
                    <label for="labelPassword">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="labelPassword">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="labelPassword">Re-Enter Password</label>
                    <input type="password" class="form-control" name="repassword" id="repassword" placeholder="Re-Enter Password">
                </div>
                <div class="form-group">
                    <label for="labelBusinessName">Business Name</label>
                    <input type="text" class="form-control" name="businessname" id="businessname" placeholder="Business Name">
                </div>
                <div class="form-group">
                    <label for="labelLocation">Location</label>
                    <input type="text" class="form-control" name="location" id="location" placeholder="Location">
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
