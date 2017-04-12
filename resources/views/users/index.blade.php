@extends('layouts.dashboard')
@section('page_heading','Usuarios')
@section('section')
           
 <div class="col-sm-12">
		<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($users as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td>
            <td>
                <a class="btn btn-small btn-success" href="{{ URL::to('users/' . $value->id) }}">Show</a>
                <a class="btn btn-small btn-info" href="{{ URL::to('users/' . $value->id . '/edit') }}">Edit</a>
                <a class="btn btn-small btn-danger" href="{{ URL::to('users/' . $value->id . '/delete') }}">Delete</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

  
	</div>          
            
@stop
