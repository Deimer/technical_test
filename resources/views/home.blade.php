@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Bienvenido!</div>

                <div class="panel-body">
                    <li>
                        {{ link_to_route(
                            'course.index', $title = 'Gestionar Cursos',
                            $attributes = ['class' => 'btn btn-success']
                        ) }}
                    </li>
                    <li>
                        {{ link_to_route(
                            'teacher.index', $title = 'Gestionar Docentes',
                            $attributes = ['class' => 'btn btn-success']
                        ) }}
                    </li>
                    <li>
                        {{ link_to_route(
                            'student.index', $title = 'Gestionar Estudiantes',
                            $attributes = ['class' => 'btn btn-success']
                        ) }}
                    </li>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
