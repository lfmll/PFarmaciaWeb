{!! Form::open(['url'=>$url, 'method'=>$method]) !!}
<div class="form-group">
	{{Form::text('nombre',$laboratorios->nombre,['class'=>'form-control','placeholder'=>'nombre','required'])}}
</div>
<div class="form-group">
	{{Form::text('procedencia',$laboratorios->procedencia,['class'=>'form-control','placeholder'=>'Procedencia'])}}
</div>
<div class="form-group">
	{{Form::text('telefono',$laboratorios->telefono,['class'=>'form-control','placeholder'=>'Telefono'])}}
</div>
<div class="form-group">
	{{Form::text('direccion',$laboratorios->direccion,['class'=>'form-control','placeholder'=>'Direccion'])}}
</div>
<div class="form-group text-right">
	<a href="{{url('/laboratorio')}}">Regresar a lista de laboratorio</a>
	<input type="submit" value="Enviar" class="btn btn-success">
</div>
{!! Form::close() !!}