@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <!-- New Task Form -->
            <div class="panel panel-default">
                <div class="panel-heading">New task for <strong>{{ $project->name }}</strong></div>
                <div class="panel-body">
                    @include('tasks.form')
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
                    @include('tasks.tasks')
                </div>
            </div>
            <!-- TODO: Current Tasks -->
        </div>
    </div>
@endsection
