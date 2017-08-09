@extends('layouts.master')

@section('title','Card')

@section('content')
	<h1>Create Vehicle</h1>
	<hr/>

	<form action="/home" method="post">
		Nomor Kendaraan: <input type="text" name="nomor" value="{{old('nomor')}}"/><br>
		@if($errors->has('nomor'))
			<p style="color:red;">{{$errors->first('nomor')}}</p>
		@endif

		Merk: <input type="text" name="merk" value="{{old('merk')}}"/><br>
		@if($errors->has('merk'))
			<p style="color:red;">{{$errors->first('merk')}}</p>
		@endif

		Jenis:
		<select name="jenis">
							<option value="Motor">Motor</option>
							<option value="Mobil">Mobil</option>
		</select><br/>

		<input type="submit" name="submit" value="Create">
		{{csrf_field()}}
	</form>

@endsection
