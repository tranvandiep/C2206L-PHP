@extends('layouts.admin')

@section('content')
<a href="{{ route('students.create') }}"><button class="btn btn-success mb-2 mt-2">Add new student</button></a>
<div class="panel panel-primary">
	<div class="panel-body">
		<form method="get" action="{{ route('students.index') }}">
			<input type="text" name="s" class="form-control" style="max-width: 200px">
		</form>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Full Name</th>
					<th>Email</th>
					<th>Birthday</th>
					<th>Address</th>
					<th style="width: 190px"></th>
				</tr>
			</thead>
			<tbody>
				@foreach($stdList as $item)
					<tr>
						<td>{{ ++$index }}</td>
						<td>{{ $item->fullname }}</td>
						<td>{{ $item->email }}</td>
						<td>{{ $item->birthday }}</td>
						<td>{{ $item->address }}</td>
						<td>
							<a href="{{ route('students.edit', $item->id) }}"><button class="btn btn-warning">Edit</button></a>
							<button class="btn btn-danger" onclick="deleteItem({{ $item->id }})">Remove</button>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		{{ $stdList->links() }}
	</div>
</div>
@stop

@section('js')
<script type="text/javascript">
	function deleteItem(id) {
		var option = confirm('Ban chac chan muon xoa sinh vien nay khong?')
		if(!option) return;

		$.post('{{ route('students.delete') }}', {
			'_token': '{{ csrf_token() }}',
			'id': id			
		}, function(data) {
			location.reload()
		})
	}
</script>
@stop