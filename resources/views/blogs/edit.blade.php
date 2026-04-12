@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Update Product') }}</div>

                <div class="card-body">
                    <a href="{{route('products.index')}}" class="btn btn-info">Back</a>
                    <form action="{{route('products.update',$products->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mt-2">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" value="{{$products->name}}">
                            @error('name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
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
