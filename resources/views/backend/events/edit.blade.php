@extends('backend.layouts.app')

@section('tittle')
Event Edit
@endsection

@section('body')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-9">

            <!-- HEADER -->
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>
                        <h4 class="mb-1 fw-bold">Edit Event</h4>
                        <small class="text-muted">Update event details</small>
                    </div>

                    <a href="{{ route('admin.events.index') }}" class="btn btn-outline-secondary btn-sm">
                        ← Back
                    </a>

                </div>
            </div>

            <!-- FORM -->
            <form action="{{ route('admin.events.update', $event->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- BASIC INFO -->
                <div class="card mb-4 shadow-sm border-0">
                    <div class="card-header bg-light fw-semibold">
                        Basic Event Information
                    </div>

                    <div class="card-body">

                        <div class="mb-3">
                            <label>Title *</label>
                            <input type="text" name="title" class="form-control"
                                   value="{{ $event->title }}" required>
                        </div>

                        <div class="mb-3">
                            <label>Event Type *</label>
                            <select name="event_type_id" class="form-control" required>

                                @foreach($eventTypes as $type)
                                    <option value="{{ $type->id }}"
                                        {{ $event->event_type_id == $type->id ? 'selected' : '' }}>
                                        {{ $type->name }}
                                    </option>
                                @endforeach

                            </select>
                        </div>

                        <div class="mb-3">
                            <label>Location *</label>
                            <input type="text" name="location" class="form-control"
                                   value="{{ $event->location }}" required>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Date</label>
                                <input type="date" name="event_date" class="form-control"
                                       value="{{ $event->event_date }}">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Seats</label>
                                <input type="number" name="seats" class="form-control"
                                       value="{{ $event->seats }}">
                            </div>
                        </div>

                        <!-- IMAGE -->
                        <div class="mb-3">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control">

                            @if($event->image)
                                <img src="{{ asset($event->image) }}" width="80" class="mt-2">
                            @endif
                        </div>

                    </div>
                </div>

                <!-- SEO -->
                <div class="card mb-4 shadow-sm border-0">
                    <div class="card-header bg-dark text-white">
                        SEO Settings
                    </div>

                    <div class="card-body">

                        <div class="mb-3">
                            <label>Meta Title</label>
                            <input type="text" name="meta_title"
                                   value="{{ $event->meta_title }}" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Meta Description</label>
                            <textarea name="meta_description" class="form-control">{{ $event->meta_description }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label>Meta Keywords</label>
                            <input type="text" name="meta_keywords"
                                   value="{{ $event->meta_keywords }}" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>OG Image</label>
                            <input type="file" name="og_image" class="form-control">

                            @if($event->og_image)
                                <img src="{{ asset($event->og_image) }}" width="80" class="mt-2">
                            @endif
                        </div>

                    </div>
                </div>

                <!-- EXTRA -->
                <div class="card mb-4 shadow-sm border-0">
                    <div class="card-header bg-light">
                        Extra Settings
                    </div>

                    <div class="card-body">

                        <div class="mb-3">
                            <label>Position</label>
                            <input type="number" name="position"
                                   value="{{ $event->position }}" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Status</label>

                            <div class="form-check form-switch">
                                <input class="form-check-input"
                                       type="checkbox"
                                       name="status"
                                       value="active"
                                       {{ $event->status == 'active' ? 'checked' : '' }}
                                       style="width: 4rem; height: 2rem;">
                            </div>
                        </div>

                    </div>
                </div>

                <button class="btn btn-success">
                    Update Event
                </button>

            </form>

        </div>
    </div>
</div>
@endsection