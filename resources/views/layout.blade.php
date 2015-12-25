<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ url('/') }}/_asset/favicon.png">

    <title>{{ config('app.name') }} - {{ $page_title or ''}}</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="{{ url('_asset/css') }}/style.css" rel="stylesheet">
	<link href="{{ url('_asset/css') }}/daterangepicker.css" rel="stylesheet">
	<link href="{{ url('_asset/fullcalendar') }}/fullcalendar.min.css" rel="stylesheet">
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name') }}</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ url('events') }}">Events List</a></li>
			<li><a href="{{ url('events/create') }}">Add new event</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	
    <div class="container">

		@yield('content')
		
    </div> <!-- /container -->

	<footer class="footer">
		<p>Built by <a href="http://pisyek.com">Pisyek</a>. Hosting by <a href="http://bit.ly/dataklhost">DataKL</a>.</p>
		<p>
			Read the <a href="http://blog.pisyek.com/create-room-booking-system-laravel-fullcalendar/">tutorial</a>
		</p>
	</footer>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
 	<script src="{{ url('_asset/fullcalendar/lib') }}/moment.min.js"></script>
	
	@yield('js')
	
  </body>
</html>