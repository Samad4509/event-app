@extends('backend.layouts.app')
@section('tittle')
Event Type Create
@endsection

@section('body')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">

                <div class="card-header">
                    {{ __('Create Event Type') }}
                </div>

                <div class="card-body">

                    <!-- Back Button -->
                    <a href="{{ route('admin.eventtype.index') }}" class="btn btn-info">
                        Back
                    </a>

                    <!-- Form -->
                    <form action="{{ route('admin.eventtype.store') }}" method="POST">
                        @csrf

                        <!-- Event Type Name -->
                        <div class="mt-3">
                            <label for="">Event Type Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter event type name">

                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="mt-3">
                            <button type="submit" class="btn btn-success">
                                Submit
                            </button>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection