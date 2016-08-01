@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="panel panel-default">
            <div class="panel-heading">
            	<h3 class="panel-title">
            		<span class="glyphicon glyphicon-plus"></span>
            		Crear un curso
            	</h3>
            </div>
			<div class="panel-body">
				@include('alerts.errors')

				{!! Form::open(['route' => 'course.store', 'method' => 'POST']) !!}

					@include('courses.form')

					<br/>
					{!! Form::submit('Almacenar', ['class' => 'btn btn-primary']) !!}

				{!! Form::close() !!}
			</div>
		</div>
	</div>

@endsection