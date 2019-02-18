{!! Form::open(['url' => $url, 'method' => $method]) !!}
<div class="form-group">
	{{Form::text('codigo',$medicamento->codigo,['class'=>'form-control','placeholder'=>'codigo'])}}
</div>
<div class="form-group">
    {{Form::text('nombre_comercial',$medicamento->nombre_comercial,['class'=>'form-control','placeholder'=>'nombre comercial'])}}
</div>
<div class="form-group">
    {{Form::text('nombre_generico',$medicamento->nombre_generico,['class'=>'form-control','placeholder'=>'nombre generico'])}}
</div>
<div class="form-group">
    {{Form::text('prescripcion',$medicamento->prescripcion,['class'=>'form-control','placeholder'=>'prescripcion'])}}
</div>
<div class="form-group">
    {{Form::text('dosificacion',$medicamento->dosificacion,['class'=>'form-control','placeholder'=>'dosificacion'])}}
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