@extends('layouts.master')

@section('title','Card')

@section('content')
	<h1>Selamat Datang di Single</h1>
	<hr/>

	<p>Nomor Kendaraan: {{$vehicle->nomor}}</p>
	<p>Merk: {{$vehicle->merk}}</p>
	<p>Jenis: {{$vehicle->jenis}}</p>
	<br/>

@endsection
