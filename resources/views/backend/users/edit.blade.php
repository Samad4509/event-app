@extends('backend.layouts.app')

@section('body')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Edit User') }}</div>

                <div class="card-body">
                    <a href="{{route('admin.users.index')}}" class="btn btn-info">Back</a>
                    <form action="{{route('admin.users.update',$user->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mt-2">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" value="{{$user->name}}">
                            @error('name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mt-2">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control"value="{{$user->email}}">
                            @error('email')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mt-2">
                            <label for="">Password</label>
                            <input type="text" name="password" class="form-control" value="">
                            @error('password')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mt-2">
                            <label for="">Roles</label>
                            <select name="roles[]" id="" class="form-select" multiple>
                                <option value="">---Select Role---</option>
                                @foreach($roles as $role)
                                    <option value="{{$role->name}}" 
                                        {{$user->hasRole($role->name) ? "selected" : ""}}>
                                        {{$role->name}}
                                    </option>
                                @endforeach
                            </select>

                        </div>
                        <div class="mt-2">
                            <button class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
