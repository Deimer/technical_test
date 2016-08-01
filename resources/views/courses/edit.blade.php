@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="panel panel-default">
            <div class="panel-heading">
            	<h3 class="panel-title">
            		<span class="glyphicon glyphicon-pencil"></span>
            		Editar curso
            	</h3>
            </div>
            <div class="panel-body">
				@include('alerts.errors')

				{!! Form::model($course, ['route' => ['course.update', $course], 'method' => 'PUT']) !!}

					{!! Form::label('name', 'Nombre:') !!}
					{!! Form::text('name', null, ['class' => 'form-control']) !!}

					{!! Form::label('observations', 'Observaciones:') !!}
					{!! Form::text('observations', null, ['class' => 'form-control']) !!}

					{!! Form::label('teacher_id', 'Docente encargado:') !!}<p>
					{!! Form::select('teacher_id', $teachers) !!}<br/>

					<br/>
					{!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}

				{!! Form::close() !!}
			</div>
        </div>
	</div>

@endsection