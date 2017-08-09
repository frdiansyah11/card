@extends('layouts.master')

@section('title','Card')

@section('content')
	<h1>Selamat Datang di Home</h1>
	<p>Hohohoho...</p>

	<hr>
	@foreach($vehicles as $vehicle)
	<li>
		<a href="home/{{$vehicle->id}}"> Nomor Kendaraan: {{$vehicle->nomor}}</a>
		<form action="/home/{{$vehicle->id}}" method="post">
			<input type="submit" name="submit" value="Delete">
			{{csrf_field()}}
			<input type="hidden" name="_method" value="DELETE">
		</form>
	</li>
	@endforeach


@endsection
