@extends('layouts.dashboard')

@section('page_heading','Escritorio')

@section('section')
<div class="col-sm12">
		@section ('panel1_panel_title', 'Bienvenido!')
		@section ('panel1_panel_body')
		Prueba el sistema cualquier falla reportala al administrador.
		@endsection
		@include('widgets.panel', array('class'=>'info', 'header'=> true, 'as'=>'panel1'))
</div>
@stop