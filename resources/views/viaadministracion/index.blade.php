@extends('adminlte::page')
@section('title','Via Administracion')
@section('content')
	<div class="big-padding text-center blue-grey white-text">
		<h1>Via Administracion</h1>
	</div>
	<div class="container">
		<hr>
		<table class="table table-boredered">
			<thead>
				<tr>
					<td>ID</td>
					<td>Nombre</td>
					<td>Descripcion</td>
				</tr>
			</thead>
			<tbody>
				@foreach($viaadministracion as $va)
				<tr>
					<td>{{$va->id}}</td>
					<td>{{$va->nombre}}</td>
					<td>{{$va->descripcion}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection