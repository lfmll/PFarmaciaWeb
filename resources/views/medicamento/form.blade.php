{!! Form::open(['url' => $url, 'method' => $method]) !!}
<div class="form-group">
	{{Form::text('codigo',$medicamento->codigo,['class'=>'form-control','placeholder'=>'codigo'])}}
</div>
<div class="form-group">
    {{Form::text('nombre_comercial',$medicamento->nombre_comercial,['class'=>'form-control','placeholder'=>'Nombre Comercial'])}}
</div>
<div class="form-group">
    {{Form::text('nombre_generico',$medicamento->nombre_generico,['class'=>'form-control','placeholder'=>'Nombre Generico'])}}
</div>
<div class="form-group">
    {{Form::select('prescripcion', array('Libre'=>'Libre', 'Con Receta'=>'Con Receta'),null,['class'=>'form-control','placeholder'=>'selecione una Prescripcion'])}}
</div>
<div class="form-group">
    {{Form::number('dosificacion',$medicamento->dosificacion,['class'=>'form-control','placeholder'=>'dosificacion'])}}
</div>
<div class="form-group">
    {{Form::label('title','Seleccionar Laboratorio')}}
    {{Form::select('laboratorio_id',$laboratorios,null,['class'=>'form-control','placeholder'=>'seleccione un opcion','required'])}}
</div>
<div class="form-group">
    {{Form::label('title','Seleccionar Presentacion')}}
    {{Form::select('presentacion_id',$presentaciones,null,['class'=>'form-control','placeholder'=>'seleccione un opcion','required'])}}
</div>
<div class="form-group">
    {{Form::label('title','Seleccionar Vias de Administracion')}}
    {{Form::select('viaadministracion_id',$vias_administracion,null,['class'=>'form-control','placeholder'=>'seleccione un opcion','required'])}}
</div>
<div class="form-group text-right">
    <a href="{{url('/medicamento')}}"> Regresar al listado producto
    </a>
    <input type="submit" value="Enviar" class="btn btn-sucess">
</div>
{!! Form::close() !!}