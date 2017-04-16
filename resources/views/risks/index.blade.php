@extends('layouts.dashboard')
@section('page_heading','Releases')
@section('section')
           
 <div class="col-sm-12">
 <a class="btn btn-lg btn-primary btn-block" href="{{ route('risks.create') }}" >Agregar</a>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Descripcion</td>
            <td>Creador</td>
            <td>Inicio</td>
            <td>Fin</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($riskreleases as $key => $value)
        <tr>
            <td>{{ $value->description }}</td>
            <td><a href="{{ URL::to('users/' . $value->user->id) }}">{{ $value->user->name }}</a></td>
            <td>{{ $value->init_date }}</td>
            <td>{{ $value->end_date }}</td>
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
