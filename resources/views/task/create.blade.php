@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Create Task') }}</div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body">
                    <a href="{{route('users.index')}}" class="btn btn-info">Back</a>
                    <form action="{{route('task.store')}}" method="post">
                        @csrf
                        <div class="mt-2">
                            <label for="">Task Name</label>
                            <input type="text" name="taskName" class="form-control">
                            @error('name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mt-2">
                            <label for="">Product Name</label>
                            <select name="productName" id="" class="form-select">
                                <option value="">---Select Role---</option>
                                @foreach($products as $product)
                                    <option value="{{$product->name}}">{{$product->name}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="mt-2">
                            <label for="">Product Code</label>
                            <select name="ProductCode" id="" class="form-select">
                                <option value="">---Select Role---</option>
                                @foreach($products as $product)
                                    <option value="{{$product->product_code}}">{{$product->product_code}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="mt-2">
                            <label for="">Status</label>
                            <select name="status" id="" class="form-select">
                                <option value="Pending">Panding</option>
                                <option value="Working">Working</option>
                                <option value="Done">Done</option>
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
