@extends('backend.layouts.app')

@section('body')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Users') }}</div>
                <div class="card-body">
                    <a href="{{route('admin.users.create')}}" class="btn btn-success mb-3">Create User</a>
                    @session("success")
                            <div class="alert alert-success">{{$value}}</div>
                    @endsession
                   <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        @foreach($user->getRoleNames() as $role)
                                            <button class="btn btn-success btn-sm">{{$role}}</button>
                                        @endforeach
                                    </td>
                                    <td>
                                        <form action="{{route('admin.users.destroy',$user->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            @can('user-list')
                                            <a href="{{route('admin.users.show',$user->id)}}" class="btn btn-info btn-sm">Show</a>
                                            @endcan
                                            @can('user-edit')
                                            <a href="{{route('admin.users.edit',$user->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                            @endcan
                                            @can('user-delete')
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

