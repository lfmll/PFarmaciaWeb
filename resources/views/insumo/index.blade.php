@extends('adminlte::page')
@section('title','Insumos')
@section('content')
	<div class="big-padding text-center blue-grey white-text">
		<h1>Insumos</h1>
	</div>
	<div class="container">
		<a href="{{url('/insumo/create')}}" class="btn btn-info">
		Registrar Nuevo Insumo
		</a>
		<hr>
		<table class="table table-boredered table-responsivo-sm">
			<thead>
				<tr>
					<td>Codigo</td>					
					<td>Nombre</td>
					<td>Descripcion</td>
				</tr>
			</thead>
			<tbody>
				@foreach($insumo as $ins)
				<tr>		
					<td>{{$ins->codigo}}</td>			
					<td>{{$ins->nombre}}</td>
					<td>{{$ins->descripcion}}</td>
					<td>
						<a href="{{url('/insumo/'.$ins->id.'/edit')}}" class="btn btn-primary">Modificar</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="text-center">
			{{ $insumo->render() }}
		</div>
	</div>
@endsection