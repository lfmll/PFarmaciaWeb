@extends("layouts.app")
@section("content")
	<div class="container white">
		<h1>Modificar Medicamento</h1>
		@include('medicamento.form',['medicamento'=>$medicamento,'url'=>'/medicamento/'.$medicamento->id,'method'=>'PATCH'])
	</div>
@endsection