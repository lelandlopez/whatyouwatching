@extends('navbar')
@section('content')
<style type="text/css"> span { width: 120px; display: inline-block; } </style>

<div class="row">
    <div class="col-md-12">
        <div class="list-group">
            <li class="list-group-item active">Profile</li>
            <li class="list-group-item">
                <ul class="list-group">
                  <li class="list-group-item"><span>Business Name:</span>Business</li>
                  <li class="list-group-item"><span>Location:</span>Location</li>
                  <li class="list-group-item">
                    <button type="submit" class="btn btn-default">Edit</button>
                  </li>
              </ul>
            </li>
        </div>

    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="list-group">
            <li class="list-group-item active">Show Dates</li>
            <li class="list-group-item">
              <a href="/addnewshowdate" class="btn btn-default" role="button">Add New Show Date</a>
            </li>
            <li class="list-group-item">
              <table class="table table-condensed">
                <thead>
                  <tr>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Description</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </li>
        </div>

    </div>
</div>

@endsection
