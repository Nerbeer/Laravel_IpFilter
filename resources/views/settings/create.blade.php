@extends('layout.admin')

@section('content')
<h1>Add New IP Adress</h1>
<hr>
<form action="/settings" method="post">
	{{ csrf_field() }}
	<div class="form-group">
		<label for="ip">IP adress</label>
		<input type="text" class="form-control" id="ip_adress"  name="ip">
	</div>
	@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
	<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection