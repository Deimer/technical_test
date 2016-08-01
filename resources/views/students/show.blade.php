@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading">
            	<h3 class="panel-title">
            		<span class="glyphicon glyphicon-align-justify"></span>
            		Detalles del docente
            	</h3>
            </div>

            <div class="panel-body">
            	<div class="box">
            		<div class="box-content">
            			<h1 class="tag-title">
            				{{ $student->first_name . ' ' . $student->last_name }}
            			</h1>
            			<hr><p>
            			Identificación: {{ $student->identification }}<p>
            			Nombres: {{ $student->first_name }}<p>
            			Apellidos: {{ $student->last_name }}<p>
            			Genero: {{ $student->gender }}<p>
            		</div>
            	</div>
            </div>
		</div>
	</div>

@endsection