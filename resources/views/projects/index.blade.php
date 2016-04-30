@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">New Project</div>
                <div class="panel-body">
                    @include('projects.form')
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">List Projects</div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <th>Name</th>
                            <th>Tasks</th>
                            <th></th>
                        </thead>

                        <tbody>
                            @foreach ($projects as $project)
                                <tr>
                                    <td>{{ $project->name }}</td>
                                    <td><a href="{{ url('/projects/' . $project->id . '/tasks') }}">{{ $project->id }}</a></td>
                                    <td>
                                        <form action="{{ url('/projects/'. $project->id) }}" method="POST">
                                            {!! csrf_field() !!}
                                            {!! method_field('DELETE') !!}

                                            <button type="submit" id="delete-project-{{ $project->id }}" class="btn btn-danger btn-xs">
                                                <i class="fa fa-btn fa-trash"></i>Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
