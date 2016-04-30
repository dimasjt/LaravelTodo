@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">New Project</div>
                <div class="panel-body">
                    @include('common.errors')

                    <form action="{{ url('/projects') }}" method="POST">
                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label for="project_name">Project Name</label>
                            <input type="text" name="name" id="project_name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="project_description">Description</label>
                            <textarea name="description" id="project_description" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Create" class="btn btn-success">
                        </div>
                    </form>
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
