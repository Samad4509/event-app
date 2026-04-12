@extends('backend.layouts.app')

@section('body')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Create User') }}</div>
                <div class="card-body">
                    <a href="{{route('admin.users.index')}}" class="btn btn-info">Back</a>
                    <form action="{{route('admin.users.store')}}" method="post">
                        @csrf
                        <div class="mt-2">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control">
                            @error('name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mt-2">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control">
                            @error('email')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mt-2">
                            <label for="">Password</label>
                            <input type="text" name="password" class="form-control">
                            @error('password')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mt-2">
                            <label for="">Roles</label>
                            <select name="roles[]" id="" class="form-select" multiple>
                                <option value="">---Select Role---</option>
                                @foreach($roles as $role)
                                    <option value="{{$role->name}}">{{$role->name}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="mt-2">
                            <button class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
