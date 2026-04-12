@extends('backend.layouts.app')

@section('body')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Roles') }}</div>
                <div class="card-body">
                @can('role-create')
                    <a href="{{route('admin.roles.create')}}" class="btn btn-success mb-3">Create Roles</a>
                @endcan
                    @session("success")
                            <div class="alert alert-success">{{$value}}</div>
                    @endsession
                   <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th width="60px">ID</th>
                                <th>Name</th>
                                <th width="200px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                                <tr>
                                    <td>{{$role->id}}</td>
                                    <td>{{$role->name}}</td>
                                    <td>
                                        <form action="{{route('admin.roles.destroy',$role->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            @can('role-list')
                                            <a href="{{route('admin.roles.show',$role->id)}}" class="btn btn-info btn-sm">Show</a>
                                            @endcan
                                            @can('role-edit')
                                            <a href="{{route('admin.roles.edit',$role->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                            @endcan
                                            @can('role-delete')
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

