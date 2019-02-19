@extends("layouts.app")
@section("content")
	<div class="container white">
		<h1>Modificar Insumo</h1>
		@include('insumo.form',['insumo'=>$insumos,'url'=>'/insumo/'.$insumos->id,'method'=>'PATCH'])
	</div>
@endsection