@extends('adminlte::page')
@section('title','Laboratorio')
@section('content')
	<div class="big-padding text-center blue-grey white-text">
		<h1>Laboratorios</h1>
	</div>
	<div class="container">
		<a href="{{url('/laboratorio/create')}}" class="btn btn-info">
		Registrar Nuevo Laboratorio
		</a>
		<hr>
		<table class="table table-bordered">
			<thead>
				<tr>
					<td>ID</td>
					<td>Nombre</td>
					<td>Procedencia</td>
					<td>Telefono</td>
					<td>Direccion</td>
				</tr>
			</thead>
			<tbody>
				@foreach($laboratorios as $laboratorio)
				<tr>
					<td>{{$laboratorio->id}}</td>
					<td>{{$laboratorio->nombre}}</td>
					<td>{{$laboratorio->procedencia}}</td>
					<td>{{$laboratorio->telefono}}</td>
					<td>{{$laboratorio->direccion}}</td>
					<td>
						<a href="{{url('/laboratorio/'.$laboratorio->id.'/edit')}}" class="btn btn-primary">Modificar</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection	