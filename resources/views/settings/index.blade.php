@extends('layout.admin')

@section('content')

@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table">
	<thead class="thead-dark">
		<tr>
			<th scope="col">#</th>
			<th scope="col">IP</th>
			<th scope="col">Created At</th>
			<th scope="col">Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($ip_list as $setting)
		<tr>
			<th scope="row">{{$setting->id}}</th>
			<td><a href="/settings/{{$setting->id}}">{{$setting->ip_address}}</a></td>
			<td>{{$setting->created_at->toFormattedDateString()}}</td>
			<td>
				<div class="btn-group" role="group" aria-label="Basic example">
					<a href="{{ URL::to('settings/' . $setting->id . '/edit') }}">
						<button type="button" class="btn btn-warning">Edit</button>
					</a>&nbsp;
					<form action="{{url('settings', [$setting->id])}}" method="POST">
						<input type="hidden" name="_method" value="DELETE">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="submit" class="btn btn-danger" value="Delete"/>
					</form>
				</div>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection