@extends('layouts.dashboard')
@section('page_heading','Agregar Concesion')
@section('section')
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script> 
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar</div>
                <div class="panel-body">
                    {{ Form::open(array('url' => 'concessions')) }}
                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            {{ Form::label('description', 'Descripcion', ['class' => 'col-md-4 control-label']) }}
                            <div class="col-md-6">
                                {{Form::textarea('description',null, ['class' => 'form-control', 'size' => '30x3'])}}
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('customer_id') ? ' has-error' : '' }}">
                            {{ Form::label('customer_id', 'Cliente', ['class' => 'col-md-4 control-label']) }}
                            <div class="col-md-6">
                                 {{ Form::select('customer_id', $customers, null, ['id' => 'customer_id', 'class' => 'form-control'])}}
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('customer_id') ? ' has-error' : '' }}">
                            {{ Form::label('partnumber_id', 'Parte', ['class' => 'col-md-4 control-label']) }}
                            <div class="col-md-6">
                                 {{ Form::select('partnumber_id', $partnumbers, null, ['id' => 'partnumber_id', 'class' => 'form-control'])}}
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('customer_id') ? ' has-error' : '' }}">
                            {{ Form::label('riskrelease_id', 'Release', ['class' => 'col-md-4 control-label']) }}
                            <div class="col-md-6">
                                 {{ Form::select('riskrelease_id', $riskreleases, null, ['id' => 'riskrelease_id', 'class' => 'form-control'])}}
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            {{ Form::label('status', 'Estado', ['class' => 'col-md-4 control-label']) }}
                            <div class="col-md-6">
                                {{Form::select('status', array('1' => 'Abierto', '2' => 'Cerrado'), '1', ['id' => 'riskrelease_id', 'class' => 'form-control'])}}
                                @if ($errors->has('status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('quantity') ? ' has-error' : '' }}">
                            {{ Form::label('quantity', 'Cantidad', ['class' => 'col-md-4 control-label']) }}
                            <div class="col-md-6">
                               {{Form::number('quantity', 'value',['class' => 'form-control'] )}}
                                @if ($errors->has('quantity'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('quantity') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('work_purchase_order') ? ' has-error' : '' }}">
                            {{ Form::label('work_purchase_order', 'Work Purchase Order', ['class' => 'col-md-4 control-label']) }}
                            <div class="col-md-6">
                                {{Form::text('work_purchase_order', null, ['class' => 'form-control'])}}
                                @if ($errors->has('work_purchase_order'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('work_purchase_order') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                          <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {{ Form::submit('Guardar', array('class' => 'btn btn-primary')) }}
                                <a class="btn btn-default" href="{{ URL::to('concessions/')}} "> Regresar </a>
                            </div>
                        </div>                    
                        {{ Form::close() }}
                </div>
                
            </div>
        </div>
    </div>
</div>         
           
            
@stop