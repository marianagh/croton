@extends('layouts.dashboard')
@section('page_heading','Proveedor')
@section('section')
    
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Informacion</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{$supplier->id}}/edit/">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <p type="text" class="form-control-static" name="name" >
                               {{ $supplier->name }}
                                </p>     
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <a class="btn btn-primary" href="{{ URL::to('suppliers/')}} ">
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