@extends("layouts.app")
@section("content")
	<div class="container white">
		<h1>Registrar Medicamento</h1>
		@include('medicamento.form',['medicamento'=>$medicamento,'url'=>'/medicamento','method'=>'POST'])
	</div>
@endsection