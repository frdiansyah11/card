@extends('layouts.master')

@section('title','Card')

@section('content')
	<h1>Edit Datang di Single</h1>
	<hr/>

	<form action="/home/{{$vehicle->id}}" method="post">
		<input type="text" name="nomor" value="{{$vehicle->nomor}}"/><br>
		<input type="text" name="merk" value="{{$vehicle->merk}}"/><br>
		<select name="jenis">
			@if($vehicle->jenis == 'Motor')
			<option value="Motor" selected>Motor</option>
			<option value="Mobil">Mobil</option>
			@else
				<option value="Motor">Motor</option>
				<option value="Mobil" selected>Mobil</option>
			@endif
		</select>


		<input type="submit" name="submit" value="edit">
		{{csrf_field()}}
		<input type="hidden" name="_method" value="PUT">
	</form>

@endsection
