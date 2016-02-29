<!-- Latest compiled and minified CSS -->
<link href="css/app.css" rel="stylesheet">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="js/bootstrap.min.js"></script>

<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" href="/">What You Watching</a>

        </div>
        <ul class="nav navbar-nav">
            <li><a href="/findashow">Find A Show</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            @if(!Auth::check()) 
            <li><a href="/login">Sign In</a></li>
            <li><a href="/register">Register</a></li>
            @else
            <li><a href="/profile">Profile</a></li>
            <li><a href="/logout">Logout</a></li>
            @endif
        </ul>
    </div><!-- /.container-fluid -->
</nav>

<div class="container">
@yield('content')
</div>
