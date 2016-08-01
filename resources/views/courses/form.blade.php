{!! Form::label('code', 'Codigo:') !!}
{!! Form::text('code', null, ['class' => 'form-control']) !!}

{!! Form::label('name', 'Nombre:') !!}
{!! Form::text('name', null, ['class' => 'form-control']) !!}

{!! Form::label('observations', 'Observaciones:') !!}
{!! Form::text('observations', null, ['class' => 'form-control']) !!}

{!! Form::label('teacher_id', 'Docente encargado:') !!}<p>
{!! Form::select('teacher_id', $teachers) !!}<br/>