@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="panel panel-default">
            <div class="panel-heading">
            	<h3 class="panel-title">
            		<span class="glyphicon glyphicon-pencil"></span>
            		Editar la información del estudiante
            	</h3>
            </div>
            <div class="panel-body">
				@include('alerts.errors')

				{!! Form::model($student, ['route' => ['student.update', $student], 'method' => 'Put']) !!}

					{!! Form::label('first_name', 'Nombres:') !!}
					{!! Form::text('first_name', null, ['class' => 'form-control']) !!}

					{!! Form::label('last_name', 'Apellidos:') !!}
					{!! Form::text('last_name', null, ['class' => 'form-control']) !!}

					{!! Form::label('gender', 'Genero:') !!}<p>
					{!! Form::select('gender', array('Femenino' => 'Femenino', 'Masculino' => 'Masculino')) !!}<br/>

					<br/>
					{!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}

				{!! Form::close() !!}
			</div>
        </div>
	</div>

@endsection