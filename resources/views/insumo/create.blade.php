@extends("layouts.app")
@section("content")
	<div class="container white">
		<h1>Nuevo Insumo</h1>
		@include('insumo.form',['insumo'=>$insumos,'url'=>'/insumo','method'=>'POST'])
	</div>
@endsection