@include('common.errors')

{!! Form::open(['action' => ['TaskController@index', $project->id]]) !!}
    <div class="form-group">
        {{ Form::label('name') }}
        {{ Form::text('name', null, ['class' => 'form-control']) }}
    </div>

    {{ Form::submit('Create', ['class' => 'btn btn-default']) }}
{!! Form::close() !!}
