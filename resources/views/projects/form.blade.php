@include('common.errors')

{!! Form::open(['action' => 'ProjectsController@create']) !!}
    <div class="form-group">
        {{ Form::label('name') }}
        {{ Form::text('name', null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('description') }}
        {{ Form::textarea('description', null, ['class' => 'form-control', 'rows' => '4']) }}
    </div>

    {{ Form::submit('Create', ['class' => 'btn btn-success']) }}
{!! Form::close() !!}
