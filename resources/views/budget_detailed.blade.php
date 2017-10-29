@extends('layouts.skeleton')

@section('title')
Bienvenue à Vobuvo
@endsection


@section('content')
	
	@include('inc.main-form')
	<br>
	@include('inc.tabs')
	@include('inc.destination')
@endsection