<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>

<div class="blog-header">
            <div class="container">
                <h1 class="blog-title">NBA</h1>
            </div>
        </div>
        <div class="blog-masthead">
            <div class="container">
                <nav class="nav blog-nav alert-danger">
                    <a class="nav-link active" href="/teams">All teams</a>
                    @if (Auth::check())
                        <a class="nav-link ml-auto" href="#">{{ Auth()->user()->name }}</a>
                        <a class="nav-link ml-auto" href="/logout">Logout</a>
                    @endif
                    @if(!Auth::check())

                    <a class="nav-link ml-auto" href="/register">Register</a>
                    <a class="nav-link ml-auto" href="/login">Login</a>
                    @endif
                </nav>
            </div>
        </div>
    @yield('content')
</body>
</html>