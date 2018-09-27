<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Tasks</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-inverse bg-inverse" >
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('home') }}">
            Task App
        </a>
          </div>
          <div class="nav navbar-nav navbar-right">
              <li><a href="{{ route('home') }}">Acasă</a></li>
              <li><a href="{{ route('tasks.index') }}">Task-uri</a></li>
          </div>
        </div>
      </nav>

<main>
    <div class="container">
            @if(Session::has('flash_message'))
            <div class="alert alert-success">
                {{ Session::get('flash_message') }}
            </div>
        @endif

        @yield('content')
    </div>
</main>

</body>
</html>
