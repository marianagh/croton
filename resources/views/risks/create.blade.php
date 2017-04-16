@extends('layouts.dashboard')
@section('page_heading','Agregar Release')
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
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('risks.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Descripcion</label>

                            <div class="col-md-6">
                                <textarea class="form-control" rows="3" id="description" name="description" required autofocus></textarea>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                          <div class="form-group{{ $errors->has('init_date') ? ' has-error' : '' }}">
                            <label for="inicio" class="col-md-4 control-label">Inicio</label>
                            <div class="col-md-6">
                            <input name="init_date" id="init_date" class="date form-control" type="text">  
                        <script type="text/javascript">  
                            $('.date').datepicker({  
                                format: 'yyyy-mm-dd'  
                                    });  
                     </script>  
                            </div>
                        </div>
                          <div class="form-group{{ $errors->has('end_date') ? ' has-error' : '' }}">
                            <label for="fin" class="col-md-4 control-label">Fin</label>
                            <div class="col-md-6">
                            <input name="end_date" id="end_date" class="date form-control" type="text">  
                        <script type="text/javascript">  
                            $('.date').datepicker({  
                                format: 'yyyy-mm-dd' 
                                    });  
                     </script>  
                            </div>
                        </div>
                         <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                                <a href="{{ URL::to('risks/') }}" class="btn btn-default">
                                    Regresar
                                </a>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>         
           
            
@stop