@extends('layouts.app')

@section('content')

	<div class="container">
		<span class="glyphicon glyphicon-plus"></span>
		{{ link_to_route(
			'student.create', $title = 'Agregar un nuevo estudiante',
			$attributes = ['class' => 'btn btn-success']
		) }}
		<br><hr>

		<div class="panel panel-default">
            <div class="panel-heading">
            	<h3 class="panel-title">
            		<span class="glyphicon glyphicon-align-justify"></span>
            		Lista de estudiantes
            	</h3>
            </div>

            <div class="panel-body">
				@include('alerts.success')

				<table class="table">
					<thead>
						<tr>
							<th>Identificación</th>
							<th>Nombres</th>
							<th>Apellidos</th>
							<th>Genero</th>
						</tr>
					</thead>
					<tbody>
						@foreach($students as $student)
							<tr>
								<td>{{ $student->identification }}</td>
								<td>{{ $student->first_name }}</td>
								<td>{{ $student->last_name }}</td>
								<td>{{ $student->gender }}</td>
								<td>
									<div class="btn-group-vertical">
										{{ link_to_route(
											'student.show', $title = 'Ver',
											$parameter = $student->id, $attributes = ['class' => 'btn btn-info']
										) }}
										{{ link_to_route(
											'student.edit', $title = 'Editar',
											$parameter = $student, $attributes = ['class' => 'btn btn-primary']
										) }}
										@include('students.delete')
									</div>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
        </div>
	</div>

@endsection