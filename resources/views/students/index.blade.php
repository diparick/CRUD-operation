<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>All Students List</title>
	
	<link rel="stylesheet" href="{{ asset('public/css/app.css') }}">
	<script src="{{ asset('public/js/app.js') }}"></script>
</head>
<body>

<br>
<div class="container">

	<ul class="list-unstyled">
		<li><a href="{{ route('students.create') }}" class="btn btn-sm btn-success ">Create a new Student</a></li>	
	</ul>

	<h2>All Students Lists</h2>  

	<ul class="list-group">
	@foreach($students as $student)
	<li class="list-group-item">

	<a href="{{route('students.show', ['id'=>$student->id])}}">{{$student->name}} ({{$student->mobile}})</a>
	|
	<a href="{{route('students.edit', ['id'=>$student->id] )}}">Edit</a>
	|

	<form action="{{ route ('students.destroy', ['id'=>$student->id] ) }}" method="POST" onsubmit="return confirm('Do You Want to Delete this Information?')"> 

	{{ csrf_field() }}

	{{ method_field('DELETE') }}
	<button type="submit" class="btn btn-danger btn-sm">Delete</button>
	</form>


	</li>
	@endforeach 
	</ul> 
</div>	
	
</body>
</html>