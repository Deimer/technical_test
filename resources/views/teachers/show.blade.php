@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading">
            	<h3 class="panel-title">
            		<span class="glyphicon glyphicon-align-justify"></span>
            		Detalles del docente
            	</h3>
            </div>

            <div class="panel-body">
            	<div class="box">
            		<div class="box-content">
            			<h1 class="tag-title">
            				{{ $teacher->first_name . ' ' . $teacher->last_name }}
            			</h1>
            			<hr><p>
            			Identificación: {{ $teacher->identification }}<p>
            			Nombres: {{ $teacher->first_name }}<p>
            			Apellidos: {{ $teacher->last_name }}<p>
            			Genero: {{ $teacher->gender }}<p>
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
	            				Cursos del docente
	            			</h3>
	            			<hr>
	            			<table class="table">
								<thead>
									<tr>
										<th>Codigo del curso</th>
										<th>Nombre del curso</th>
									</tr>
								</thead>
								<tbody>
									@foreach($teacher->courses as $course)
										<tr>
											<td>{{ $course->code }}</td>
											<td>{{ $course->name }}</td>
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