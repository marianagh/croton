@extends('layouts.dashboard')
@section('page_heading','Proveedores')
@section('section')
           
 <div class="col-sm-12">
 <a class="btn btn-lg btn-primary btn-block" href="{{ URL::to('suppliers/create') }}" >Agregar</a>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($suppliers as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>
                <a class="btn btn-small btn-success" href="{{ URL::to('suppliers/' . $value->id) }}">Show</a>
                <a class="btn btn-small btn-info" href="{{ URL::to('suppliers/' . $value->id . '/edit') }}">Edit</a>
                {{ Form::open(array('url' => 'suppliers/' . $value->id, 'class' => 'btn')) }}
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
