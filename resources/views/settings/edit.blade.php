@extends('layout.admin')

@section('content')
<h1>Edit IP Adress</h1>
<hr>
<form action="{{url('settings', [$setting->id])}}" method="POST">
	<input type="hidden" name="_method" value="PUT">
	{{ csrf_field() }}
	<div class="form-group">
		<label for="ip">IP adress</label>
		<input type="text" value="{{$setting->ip_address}}" class="form-control" id="ip_address"  name="ip" >
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