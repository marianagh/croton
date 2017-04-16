@extends('layouts.dashboard')
@section('page_heading','Editar Release')
@section('section')
  
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Informacion</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{$customer->id}}/edit/">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $customer->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('supplier_id') ? ' has-error' : '' }}">
                            <label for="supplier" class="col-md-4 control-label">Proveedor</label>
                            <div class="col-md-6">
                              <select class="form-control" name="supplier_id" id="supplier_id">
                               @foreach($suppliers as $supplier)
                                @if($customer->supplier_id == $supplier->id)
                                <option selected="selected" value="{{$supplier->id}}">{{$supplier->name}}</option>
                                @else
                                <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                                @endif
                                @endforeach
                             </select>
                            </div>
                            </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Guardar
                                </button>
                                 <a class="btn btn-primary" href="{{ URL::to('customers/')}} ">
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