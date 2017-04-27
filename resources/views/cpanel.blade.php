@extends('layouts.dashboard')

@section('page_heading','Menu Principal')

@section('section')
<div class="col-sm12">
		@section ('panel1_panel_title', 'Bienvenido!')
		@section ('panel1_panel_body')
		Elige entre el menú de la izquierda o los botones de este panel para realizar una acción.
		@endsection
		@include('widgets.panel', array('class'=>'info', 'header'=> true, 'as'=>'panel1'))
		<ul id="firstRow" class="listReset">
				<li>
				 <div class="panel panel-primary">
                        <div class="panel-heading">
                           <div class="row"> 
                        <div class="col-xs-3">
                            <i class="fa fa-table fa-5x"></i>
                        </div>
                            <div class="col-xs-9 text-right">
                                
                                
                            </div> 
                        </div>
                       
                        </div>
                      <a href="{{ url ('concessions') }}"> 
                       <div class="panel-footer">
                                <span class="pull-left">Administrar concesiones</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
				</li>
				<li>
				<div class="panel panel-green">
                        <div class="panel-heading">
                           <div class="row"> 
                        <div class="col-xs-3">
                            <i class="fa fa-cogs fa-5x"></i>
                        </div>
                            <div class="col-xs-9 text-right">
                                
                                
                            </div> 
                        </div>
                       
                        </div>
                      <a href="{{ url ('parts') }}"> 
                       <div class="panel-footer">
                                <span class="pull-left">Administrar partes</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
				</li>
				<li>
				<div class="panel panel-yellow">
                        <div class="panel-heading">
                           <div class="row"> 
                        <div class="col-xs-3">
                            <i class="fa fa-tasks fa-5x"></i>
                        </div>
                            <div class="col-xs-9 text-right">
                               
                                
                            </div> 
                        </div>
                       
                        </div>
                      <a href="{{ url ('risks') }}"> 
                       <div class="panel-footer">
                                <span class="pull-left">Administrar releases</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
				</li>
			</ul>
            <ul id="secondRow" class="listReset">
				<li>
				<div class="panel panel-primary">
                        <div class="panel-heading">
                           <div class="row"> 
                        <div class="col-xs-3">
                            <i class="fa fa-users fa-5x"></i>
                        </div>
                            <div class="col-xs-9 text-right">
                                
                                
                            </div> 
                        </div>
                       
                        </div>
                      <a href="{{ url ('customers') }}"> 
                       <div class="panel-footer">
                                <span class="pull-left">Administrar clientes</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
				</li>
				<li>
				<div class="panel panel-green">
                        <div class="panel-heading">
                           <div class="row"> 
                        <div class="col-xs-3">
                            <i class="fa fa-book fa-5x"></i>
                        </div>
                            <div class="col-xs-9 text-right">
                                
                                
                            </div> 
                        </div>
                       
                        </div>
                      <a href="{{ url ('suppliers') }}"> 
                       <div class="panel-footer">
                                <span class="pull-left">Administrar proveedores</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
				</li>
				<li>
				<div class="panel panel-yellow">
                        <div class="panel-heading">
                           <div class="row"> 
                        <div class="col-xs-3">
                            <i class="fa fa-user fa-5x"></i>
                        </div>
                            <div class="col-xs-9 text-right">
                                
                                
                            </div> 
                        </div>
                       
                        </div>
                      <a href="{{ url ('users') }}"> 
                       <div class="panel-footer">
                                <span class="pull-left">Administrar usuarios</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
				</li>
			</ul>
</div>

@stop