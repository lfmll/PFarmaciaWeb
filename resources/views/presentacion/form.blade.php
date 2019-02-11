{!! Form::open(['url'=>$url, 'method'=>$method]) !!}
<div class="form-group">
	{{Form::text('nombre',$presentacion->nombre,['class'=>'form-control','placeholder'=>'nombre','required'])}}
</div>
<div class="form-group text-right">
	<a href="{{url('/presentacion')}}">Regresar a lista de laboratorio</a>
	<input type="submit" value="Enviar" class="btn btn-success">
</div>
{!! Form::close() !!}