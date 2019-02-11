@extends("layouts.app")
@section("content")
	<div class="conatiner white">
		<h1>Modificar Presentacion</h1>
		@include('presentacion.form',['presentacion'=>$presentacion,'url'=>'/presentacion/'.$presentacion->id,'method'=>'PATCH'])
	</div>
@endsection