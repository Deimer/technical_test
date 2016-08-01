@extends('layouts.app')

@section('content')

	<div class="container">
		<span class="glyphicon glyphicon-plus"></span>
		{{ link_to_route(
			'course.create', $title = 'Agregar un nuevo curso',
			$attributes = ['class' => 'btn btn-success']
		) }}
		<br><hr>
		@include('alerts.success')
		<br><hr>

		<div class="panel panel-default">
            <div class="panel-heading">
            	<h3 class="panel-title">
            		<span class="glyphicon glyphicon-align-justify"></span>
            		Lista de cursos
            	</h3>
            </div>

            <div class="panel-body">

				<table class="table">
					<thead>
						<tr>
							<th>Codigo</th>
							<th>Nombre</th>
							<th>Observaciones</th>
							<th>Funciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($courses as $course)
							<tr>
								<td>{{ $course->code }}</td>
								<td>{{ $course->name }}</td>
								<td>{{ $course->observations }}</td>
								<td>
									<div class="btn-group-vertical">
										{{ link_to_route(
											'course.show', $title = 'Ver',
											$parameter = $course->id, $attributes = ['class' => 'btn btn-info']
										) }}
										{{ link_to_route(
											'course.edit', $title = 'Editar',
											$parameter = $course, $attributes = ['class' => 'btn btn-primary']
										) }}
										@include('courses.delete')
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