{!! Form::open(['url'=>$url, 'method'=>$method]) !!}
<div class="form-group">
	{{Form::text('codigo',$insumos->codigo,['class'=>'form-control','placeholder'=>'Codigo'])}}
</div>
<div class="form-group">
	{{Form::text('nombre',$insumos->nombre,['class'=>'form-control','placeholder'=>'Nombre','required'])}}
</div>
<div class="form-group">
	{{Form::textarea('descripcion',$insumos->descripcion,['class'=>'form-control','placeholder'=>'Descripcion'])}}
</div>
<div class="form-group text-right">
	<a href="{{url('/insumo')}}" class="btn btn-danger">Cancelar</a>
	<input type="submit" value="Enviar" class="btn btn-success">
</div>
{!! Form::close() !!}