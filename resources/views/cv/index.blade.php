@extends('layouts.app')

@section('content')


<div class="container"> 
	<div class="row">
		<div class="col-md-12">
			
			
<h1> Users Lists: </h1>
<div class="pull-right">
	<a href="{{url('cvs/create')}}" class="btn btn-success "> Nouveau  :  </a>
</div>
<table class="table">
	
<head>
		
<tr>
	
	<th>Title</th>
	<th>Presentation</th>
	<th>Date</th>
	<th>Actions</th>
</tr>
</head>
<body>
	@foreach($cvs as $cv)
	<tr>
		
<td>{{$cv->titre}} <br> {{ $cv->user->name }}</td>
<td>{{$cv->presentation}}</td>
<td>{{$cv->created_at}}</td>
<td>

	<form action="{{url('cvs/'.$cv->id)}}" method="post" >
		{{csrf_field()}}
		{{method_field('DELETE')}}
		<a href=""  class="btn btn-primary">Details</a>
	<a href="{{url('cvs/'.$cv->id.'/edit')}}" class="btn btn-dafault">Edit</a>
		<button type="submit" class="btn btn-danger">Delete</button>
	</form>
	
</td>
</tr>
	@endforeach




</body>
</table>
	

</div>
</div>
</div>
 @endsection