@extends('layout.admin')

@section('content')
<h1>Showing IP Adress {{ $setting->ip_address }}</h1>
<div class="jumbotron text-center">
	<p>
		<strong>ID:</strong> {{ $setting->id }}<br>
		<strong>IP Adress:</strong> {{ $setting->ip_address }}<br>
		<strong>Created At:</strong> {{ $setting->created_at->toFormattedDateString() }}
	</p>
</div>
@endsection