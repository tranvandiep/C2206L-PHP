@extends('layouts.admin')

@section('content')
<div class="panel panel-primary">
	<div class="panel-heading">
		<h2 class="text-center">Register</h2>
	</div>
	<div class="panel-body">
		<form method="post" action="{{ route('students.update') }}">
			@csrf
			<input type="hidden" name="id" value="{{ $std->id }}">
			<div class="form-group">
			  <label for="usr">Name:</label>
			  <input required="true" type="text" class="form-control" id="usr" name="fullname" value="{{ $std->fullname }}">
			</div>
			<div class="form-group">
			  <label for="email">Email:</label>
			  <input required="true" type="email" class="form-control" id="email" name="email" value="{{ $std->email }}">
			</div>
			<div class="form-group">
			  <label for="birthday">Birthday:</label>
			  <input type="date" class="form-control" id="birthday" name="birthday" value="{{ $std->birthday }}">
			</div>
			<div class="form-group">
			  <label for="address">Address:</label>
			  <input type="text" class="form-control" id="address" name="address" value="{{ $std->address }}">
			</div>
			<p>
				<a href="{{ route('students.index') }}">Back to list</a>
			</p>
			<button type="submit" class="btn btn-success">Update Student</button>
		</form>
	</div>
</div>
@stop