<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Showing A Specific Student Info</title>
	
	<link rel="stylesheet" href="{{ asset('public/css/app.css') }}">
	<script src="{{ asset('public/js/app.js') }}"></script>
</head>
<body>

<br>

<div class="container">
		<h2>Showing A Specific Student Info</h2>
			 <div>
			 	<h1>{{$student->name}}</h1>
			 	<p>{{$student->mobile}}</p>

			 </div>
</div>
</div>
</body>
</html>