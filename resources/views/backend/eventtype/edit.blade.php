@extends('backend.layouts.app')
@section('tittle')
Event Type edit
@endsection

@section('body')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">

                <div class="card-header">
                    {{ __('Edit Event Type') }}
                </div>

                <div class="card-body">

                    <!-- Back Button -->
                    <a href="{{ route('admin.eventtype.index') }}" class="btn btn-info">
                        Back
                    </a>

                    <!-- Form -->
                    <form action="{{ route('admin.eventtype.update', $eventType->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Event Type Name -->
                        <div class="mt-3">
                            <label for="">Event Type Name</label>
                            <input type="text" name="name" value="{{ $eventType->name }}" class="form-control">

                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Position -->
                        <div class="mt-3">
                            <label for="">Position</label>
                            <input type="number" name="position" value="{{ $eventType->position }}" class="form-control">

                            @error('position')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Submit -->
                        <div class="mt-3">
                            <button type="submit" class="btn btn-success">
                                Update
                            </button>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection