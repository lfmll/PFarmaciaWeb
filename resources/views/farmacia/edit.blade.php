@extends("layouts.app")
@section("content")
<div class="container white">
	<h1>Bienvenido</h1>
	@include('farmacia.form',['farmacia'=>$farmacia,'url'=>'/farmacia'.$farmacia->id,'method'=>'PATCH'])
</div>
@endsection