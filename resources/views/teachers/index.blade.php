@extends('layouts.app')

@section('content')

	<div class="container">
		<span class="glyphicon glyphicon-plus"></span>
		{{ link_to_route(
			'teacher.create', $title = 'Agregar un nuevo docente',
			$attributes = ['class' => 'btn btn-success']
		) }}
		<br><hr>

		<div class="panel panel-default">
            <div class="panel-heading">
            	<h3 class="panel-title">
            		<span class="glyphicon glyphicon-align-justify"></span>
            		Lista de docentes
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
						@foreach($teachers as $teacher)
							<tr>
								<td>{{ $teacher->identification }}</td>
								<td>{{ $teacher->first_name }}</td>
								<td>{{ $teacher->last_name }}</td>
								<td>{{ $teacher->gender }}</td>
								<td>
									<div class="btn-group-vertical">
										{{ link_to_route(
											'teacher.show', $title = 'Ver',
											$parameter = $teacher->id, $attributes = ['class' => 'btn btn-info']
										) }}
										{{ link_to_route(
											'teacher.edit', $title = 'Editar',
											$parameter = $teacher, $attributes = ['class' => 'btn btn-primary']
										) }}
										@include('teachers.delete')
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