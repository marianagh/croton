@extends('layouts.dashboard')
@section('page_heading','Concesiones')
@section('section')
           
 <div class="col-sm-12">
 <a class="btn btn-lg btn-primary btn-block" href="{{ route('risks.create') }}" >Agregar</a>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Work Purchase Order</td>
            <td>Nombre</td>
            <td>Modelo</td>
            <td>Status</td>
            <td>Cliente</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($concessions as $key => $value)
        <tr>
            <td>{{ $value->work_purchase_order }}</td>
            <td><a href="{{ URL::to('users/' . $value->user->id) }}">{{ $value->user->name }}</a></td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->model }}</td>
             <td><a href="{{ URL::to('customers/' . $value->customer->id) }}">{{ $value->customer->name }}</a></td>
            <td>{{ $value->status }}</td>
            <td>
                <a class="btn btn-small btn-info" href="{{ URL::to('risks/' . $value->id . '/edit') }}">Edit</a>
                {{ Form::open(array('url' => 'risks/' . $value->id, 'class' => 'btn')) }}
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
