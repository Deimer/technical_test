{!! Form::label('identification', 'Identificación:') !!}
{!! Form::text('identification', null, ['class' => 'form-control']) !!}

{!! Form::label('first_name', 'Nombres:') !!}
{!! Form::text('first_name', null, ['class' => 'form-control']) !!}

{!! Form::label('last_name', 'Apellidos:') !!}
{!! Form::text('last_name', null, ['class' => 'form-control']) !!}

{!! Form::label('gender', 'Genero:') !!}<p>
{!! Form::select('gender', array('Femenino' => 'Femenino', 'Masculino' => 'Masculino')) !!}<br/><p>

{!! Form::label('course_id', 'Curso:') !!}<p>
{!! Form::select('course_id', $courses) !!}<br/>