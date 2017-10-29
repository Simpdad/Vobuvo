@extends('layouts.skeleton')

@section('title')
Bienvenue à Vobuvo
@endsection


@section('content')
	<div id="background-parallax" class="jumbotron" >
		@include('inc.main-form')
	</div>


	@include('inc.destination')
@endsection