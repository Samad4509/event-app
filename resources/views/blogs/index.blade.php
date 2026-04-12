@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Blog') }}</div>
                <div class="card-body">
                    @can('blog-create')
                        <a href="{{route('blogs.create')}}" class="btn btn-success mb-3">Create Blogs</a>
                    @endcan
                    @session("success")
                            <div class="alert alert-success">{{$value}}</div>
                    @endsession
                   <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Blogs Descriptions</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->product_code}}</td>
                                    <td>
                                        <form action="{{route('blogs.destroy',$product->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            @can('blog-list')
                                            <a href="{{route('blogs.show',$product->id)}}" class="btn btn-info btn-sm">Show</a>
                                            @endcan
                                            @can('blog-edit')
                                            <a href="{{route('blogs.edit',$product->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                            @endcan
                                            @can('blog-delete')
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

