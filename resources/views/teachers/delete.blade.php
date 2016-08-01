{!! Form::open(['route' => ['teacher.destroy', $teacher], 'method' => 'DELETE']) !!}

	{!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}

{!! Form::close() !!}