<table class="table table-striped task-table">
    <thead>
        <th>Task</th>
        <th>&nbsp;</th>
    </thead>

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
