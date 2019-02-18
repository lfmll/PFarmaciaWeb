@extends('adminlte::page')
@section('title','Presentaciones')
@section('content')
	<div class="big-padding text-center blue-grey white-text">
		<h1>Presentaciones</h1>
	</div>
	<div class="container">
		<a href="{{url('/presentacion/create')}}" class="btn btn-info">
		Registrar Nueva Presentacion
		</a>
		<hr>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<td>ID</td>
					<td>Nombre</td>
				</tr>
			</thead>
			<tbody>
				@foreach($presentacion as $pre)
				<tr>
					<td>{{$pre->id}}</td>
					<td>{{$pre->nombre}}</td>
					<td>
						<a href="{{url('/presentacion/'.$pre->id.'/edit')}}" class="btn btn-primary">Modificar</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	@endsection