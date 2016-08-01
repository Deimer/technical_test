{!! Form::open(['route' => ['student.destroy', $student], 'method' => 'DELETE']) !!}

	{!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}

{!! Form::close() !!}