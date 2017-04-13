@extends('layouts.dashboard')
@section('page_heading','PartNumber')
@section('section')
    
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Informacion</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{$part->id}}/edit/">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <p type="text" class="form-control-static" name="name" >
                               {{ $part->name }}
                                </p>     
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Descripcion</label>

                            <div class="col-md-6">
                                <p type="text" class="form-control-static" name="name" >
                               {{ $part->description}}
                                </p>  
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <a class="btn btn-primary" href="{{ URL::to('parts/')}} ">
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