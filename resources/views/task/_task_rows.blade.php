@foreach($tasks as $task)
    <tr>
        <td>{{$task->taskName}}</td>
        <td>{{$task->productName}}</td>
        <td>{{$task->ProductCode}}</td>
        <td>{{$task->Status}}</td>
        <td>
            <form action="{{ route('task.destroy', $task->id) }}" method="POST">
                @csrf
                @method('DELETE')
                @can('user-list')
                    <a href="{{ route('task.show', $task->id) }}" class="btn btn-info btn-sm">Show</a>
                @endcan
                @can('user-edit')
                    <a href="{{ route('task.edit', $task->id) }}" class="btn btn-primary btn-sm">Edit</a>
                @endcan
                @can('user-delete')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                @endcan
            </form>
        </td>
    </tr>
@endforeach
