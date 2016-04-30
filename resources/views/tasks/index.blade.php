@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <!-- New Task Form -->
            <div class="panel panel-default">
                <div class="panel-heading">New task for <strong>{{ $project->name }}</strong></div>
                <div class="panel-body">
                    @include('common.errors')
                    <form action="{{ url('/projects/'. $project->id . '/tasks') }}" method="POST">
                        {!! csrf_field() !!}

                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="task-name">Task</label>
                            <input type="text" name="name" id="task-name" class="form-control">
                        </div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-plus"></i> Add Task
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <!-- Current Tasks -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Current Tasks
                </div>

                <div class="panel-body">
                    <table class="table table-striped task-table">

                        <!-- Table Headings -->
                        <thead>
                            <th>Task</th>
                            <th>&nbsp;</th>
                        </thead>

                        <!-- Table Body -->
                        <tbody>
                            @foreach ($tasks as $task)
                                <tr>
                                    <!-- Task Name -->
                                    <td class="table-text">
                                        <div>{{ $task->name }}</div>
                                    </td>

                                    <td>
                                        <form action="{{ url('task/'.$task->id) }}" method="POST">
                                            {!! csrf_field() !!}
                                            {!! method_field('DELETE') !!}

                                            <button type="submit" id="delete-task-{{ $task->id }}" class="btn btn-danger btn-xs">
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
            <!-- TODO: Current Tasks -->
        </div>
    </div>
@endsection
