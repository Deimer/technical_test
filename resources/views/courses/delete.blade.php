{!! Form::open(['route' => ['course.destroy', $course], 'method' => 'DELETE']) !!}

	{!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}

{!! Form::close() !!}