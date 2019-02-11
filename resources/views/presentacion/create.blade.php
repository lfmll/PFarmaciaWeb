@extends("layouts.app")
@section("content")
	<div class="conatiner white">
		<h1>Registrar Presentacion</h1>
		@include('presentacion.form',['presentacion'=>$presentacion,'url'=>'/presentacion','method'=>'POST'])
	</div>
@endsection