<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>List Page</title>
</head>
<body>
<h1>Show Data {{ $t }}</h1>
<h1>Show Data {!! $t !!}</h1>

<h1>
	Ket qua
</h1>

@foreach ($subjectList as $value)
	<p>{{ $value }}</p>
@endforeach
</body>
</html>