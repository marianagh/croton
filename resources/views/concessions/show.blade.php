@extends('layouts.dashboard')
@section('page_heading','Concesion')
@section('section')
    
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Informacion</div>
                <div class="panel-body">
                   <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Descripcion </label>
                            <div class="col-md-6">
                                <p type="text" class="form-control-static" name="name" >
                               {{ $concession->description }}
                                </p>     
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Modelo </label>
                            <div class="col-md-6">
                                <p type="text" class="form-control-static" name="name" >
                               {{ $concession->model }}
                                </p>     
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Cliente</label>
                            <div class="col-md-6">
                                <p type="text" class="form-control-static" name="name" >
                               {{ $concession->customer->name }}
                                </p>     
                            </div>
                        </div>
                          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Parte</label>
                            <div class="col-md-6">
                                <p type="text" class="form-control-static" name="name" >
                               {{ $concession->partnumber->name }}
                                </p>     
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Release</label>
                            <div class="col-md-6">
                                <p type="text" class="form-control-static" name="name" >
                               {{ $concession->riskrelease->id }}
                                </p>     
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Estado</label>
                            <div class="col-md-6">
                                <p type="text" class="form-control-static" name="name" >
                               {{ $concession->status }}
                                </p>     
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Cantidad</label>
                            <div class="col-md-6">
                                <p type="text" class="form-control-static" name="name" >
                               {{ $concession->quantity }}
                                </p>     
                            </div>
                        </div>
                           <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Cantidad</label>
                            <div class="col-md-6">
                                <p type="text" class="form-control-static" name="name" >
                               {{ $concession->work_purchase_order }}
                                </p>     
                            </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <a class="btn btn-primary" href="{{ URL::to('concessions/')}} ">
                                   Regresar </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>         
                     
@stop