@extends("layouts.app")
@section("content")
	<div class="container white">
		<h1>Nuevo Laboratorio</h1>
		@include('laboratorio.form',['laboratorio'=>$laboratorios,'url'=>'/laboratorio','method'=>'POST'])
	</div>
@endsection