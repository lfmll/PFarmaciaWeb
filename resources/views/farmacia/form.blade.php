{!! Form::open(['url'=>$url,'method'=>$method])!!}
<div class="form-group">
	{{Form::text('nombre',$farmacia->nombre,['class'=>'form-control','placeholder'=>'nombre de la farmacia','required'])}}	
</div>
<div class="form-group">
	{{Form::number('nit',$farmacia->nit,['class'=>'form-control','placeholder'=>'numero de nit','required'])}}
</div>