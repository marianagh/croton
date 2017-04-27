@extends('layouts.dashboard')
@section('page_heading','Clientes')
@section('section')
           
 <div class="col-sm-12">
 <a class="btn btn-lg btn-primary btn-block" href="{{ URL::to('customers/create') }}" >Agregar</a>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Proveedor</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($customers as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->supplier->name }}</td>
            <td>
                <a class="btn btn-small btn-success" href="{{ URL::to('customers/' . $value->id) }}"><i class="fa fa-search"></i></a>
                <a class="btn btn-small btn-info" href="{{ URL::to('customers/' . $value->id . '/edit') }}"><i class="fa fa-pencil-square-o"></i></a>
                {{ Form::open(array('url' => 'customers/' . $value->id, 'class' => 'btn')) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete', array('class' => 'btn btn-small btn-danger')) }}
                {{ Form::close() }}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>    
@stop
