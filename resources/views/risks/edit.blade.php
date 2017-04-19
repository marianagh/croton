@extends('layouts.dashboard')
@section('page_heading','Editar Release')
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
                <div class="panel-heading">Informacion</div>
                <div class="panel-body">
                 {{ csrf_field() }}
                 {{ Form::model($riskrelease, array('route' => array('risks.update', $riskrelease->id), 'class' => 'form-horizontal', 'method' => 'PUT')) }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
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
                        <div class="form-group{{ $errors->has('init_date') ? ' has-error' : '' }}">
                            {{ Form::label('init_date', 'Inicio', ['class' => 'col-md-4 control-label']) }}
                            <div class="col-md-6">
                                {{Form::text('init_date', null, ['class' => 'date form-control'])}}
                                @if ($errors->has('init_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('init_date') }}</strong>
                                    </span>
                                @endif
                                 <script type="text/javascript">  
                            $('.date').datepicker({  
                                format: 'yyyy-mm-dd' 
                                    });  
                            </script>  
                            </div>
                        </div>
                          <div class="form-group{{ $errors->has('end_date') ? ' has-error' : '' }}">
                            {{ Form::label('end_date', 'Fin', ['class' => 'col-md-4 control-label']) }}
                            <div class="col-md-6">
                                {{Form::text('end_date', null, ['class' => 'date form-control'])}}
                                @if ($errors->has('end_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('end_date') }}</strong>
                                    </span>
                                @endif
                                 <script type="text/javascript">  
                            $('.date').datepicker({  
                                format: 'yyyy-mm-dd' 
                                    });  
                            </script>  
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {{ Form::submit('Editar', array('class' => 'btn btn-primary')) }}
                                <a class="btn btn-default" href="{{ URL::to('risks/')}} "> Regresar </a>
                            </div>
                        </div>
                        {{ Form::close() }}
                       
                </div>
            </div>
        </div>
    </div>
</div>         
           
            
@stop