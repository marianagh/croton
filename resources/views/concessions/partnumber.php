@extends('layouts.dashboard')
@section('page_heading','Concesiones')
@section('section')
           
 <div class="col-sm-12">
 <a class="btn btn-lg btn-primary btn-block" href="{{ route('concessions.create') }}" >Agregar</a>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Work Purchase Order</td>
            <td>Modelo</td>
            <td>Status</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($concessions as $key => $value)
        <tr>
            <td>{{ $value->work_purchase_order }}</td>
            <td>{{ $value->model }}</td>
            <td>{{ $value->status }}</td>
            <td>
                <a class="btn btn-small btn-success" href="{{ URL::to('concessions/' . $value->id) }}">Show</a>
                <a class="btn btn-small btn-info" href="{{ URL::to('concessions/' . $value->id . '/edit') }}">Edit</a>
                {{ Form::open(array('url' => 'concessions/' . $value['id'], 'class' => 'btn')) }}
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
