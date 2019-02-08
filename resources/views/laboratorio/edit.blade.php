@extends("layouts.app")
@section("content")
<div class="container white">
	<h1>Modificar Laboratorio</h1>
	@include('laboratorio.form',['laboratorio'=>$laboratorios,'url'=>'/laboratorio/'.$laboratorios->id,'method'=>'PATCH'])
</div>
@endsection