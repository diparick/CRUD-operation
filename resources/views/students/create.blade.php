<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Create A New Student</title>
	
	<link rel="stylesheet" href="{{ asset('public/css/app.css') }}">
	<script src="{{ asset('public/js/app.js') }}"></script>
</head>
<body>
		<br>
<div class="container">
		<h2>Create A new Student</h2>

	<form class="form-horizontal" action="{{route('students.store')}}" method="POST">

		<!-- csrf token field -->
		
		{{csrf_field()}}


		<div class="form-group">
			<label class="control-label col-sm-2" for="name">Name : </label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" id="name" placeholder="Enter your name"  name="name">
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-sm-2" for="mobile">Mobile No :</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" id="mobile" placeholder="Enter your mobile no." name="mobile">
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-default">Submit</button>
			</div>
		</div>
	</form> 
</div>
</body>
</html>