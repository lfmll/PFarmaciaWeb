@extends('adminlte::page')
@section('title','Medicamentos')
@section('content')
	<div class="big-padding text-center blue-grey white-text">
		<h1>Medicamentos</h1>
	</div>
	<div class="container">
		<a href="{{url('/medicamento/create')}}" class="btn btn-info">
		Registrar Nuevo Medicamento
		</a>
		<hr>
		<table class="table table-boredered table-responsive-sm">
			<thead>
				<tr>					
					<td>Codigo</td>
					<td>Nombre Comercial</td>					
					<td>Dosis</td>
					<td>Stock</td>
					<td>Laboratorio</td>
					<td>Presentacion</td>
				</tr>
			</thead>
			<tbody>
				@foreach($medicamento as $med)
				<tr>					
					<td>{{$med->codigo}}</td>
					<td>{{$med->nombre_comercial}}</td>			
					<td>{{$med->dosificacion}}</td>
					<td>{{$med->stock}}</td>					
					
					<td>{{$med->laboratorio['nombre']}}</td>
					<td>{{$med->presentacion['nombre']}}</td>
					<td>
						<a href="{{url('/medicamento/'.$med->id.'/edit')}}" class="btn btn-primary">Modificar</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="text-center">
			{{ $medicamento->render() }}
		</div>
	</div>
	@endsection