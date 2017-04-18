@extends('layouts.dashboard')
@section('page_heading','Editar Proveedor')
@section('section')
  
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Informacion</div>
                <div class="panel-body">
                    {{ Form::model($supplier, array('route' => array('supplier.update', $supplier->id), 'class' => 'form-horizontal', 'method' => 'PUT')) }}  
                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            {{ Form::label('name', 'Nombre', ['class' => 'col-md-4 control-label']) }}
                            <div class="col-md-6">
                                {{Form::text('name', null, ['class' => 'form-control'])}}
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {{ Form::submit('Editar', array('class' => 'btn btn-primary')) }}
                                <a class="btn btn-default" href="{{ URL::to('suppliers/')}} "> Regresar </a>
                            </div>
                        </div>
                 {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>         
           
            
@stop