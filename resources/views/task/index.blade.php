@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Task') }}</div>
                <div class="card-body">
                    @can('task-create')
                        <a href="{{route('task.create')}}" class="btn btn-success mb-3">Create Task</a>
                    @endcan
                    @session("success")
                            <div class="alert alert-success">{{$value}}</div>
                    @endsession
                   <table class="table table-striped table-bordered">
                    <input type="search" id="search" name="search" class="form-control my-3" placeholder="search....">
                        <thead>
                            <tr>
                                <th>Task Name</th>
                                <th>Project Name</th>
                                <th>Project Code</th>
                                <th>Status</th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tasks as $task)
                            
                                <tr>
                                    <td>{{$task->taskName}}</td>
                                    <td>{{$task->productName}}</td>
                                    <td>{{$task->ProductCode}}</td>
                                    <td>{{$task->Status}}</td>
                                    <td>
                                        <form action="{{route('task.destroy',$task->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            @can('task-list')
                                            <a href="" class="btn btn-info btn-sm">Show</a>
                                            @endcan
                                            @can('task-edit')
                                            <a href="{{route('task.edit',$task->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                            @endcan
                                            @can('task-delete')
                                            <button class="btn btn-danger btn-sm">Delete</button>
                                            @endcan
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
</div>
@endsection

