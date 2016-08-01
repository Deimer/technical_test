@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading">
            	<h3 class="panel-title">
            		<span class="glyphicon glyphicon-align-justify"></span>
            		Detalles del curso
            	</h3>
            </div>

            <div class="panel-body">
            	<div class="box">
            		<div class="box-content">
            			<h1 class="tag-title">
            				{{ $course->name }}
            			</h1>
            			<hr><p>
            			Codigo: {{ $course->code }}<p>
            			Observaciones: {{ $course->observations }}<p>
            			Fecha de creación: {{ $course->created_at }}<p>
            		</div>
            	</div>
            </div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-6 text-center">
				<div class="panel panel-info">
					<div class="box">
	            		<div class="box-content">
	            			<h3 class="tag-title">
	            				Estudiantes en el curso
	            			</h3>
	            			<hr>
	            			<table class="table">
								<thead>
									<tr>
										<th>Identificación</th>
										<th>Nombre</th>
										<th>Genero</th>
									</tr>
								</thead>
								<tbody>
									@foreach($course->students as $student)
										<tr>
											<td>{{ $student->identification }}</td>
											<td>{{ $student->first_name .' '.$student->last_name }}</td>
											<td>{{ $student->gender }}</td>
										</tr>
									@endforeach
								</tbody>
							</table>
	            		</div>
	            	</div>
				</div>
			</div>
		</div>
	</div>

@endsection