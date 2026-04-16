@extends('backend.layouts.app')

@section('tittle')
Event Create
@endsection

@section('body')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-9">

            <!-- ===================== -->
            <!-- HEADER -->
            <!-- ===================== -->
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>
                        <h4 class="mb-1 fw-bold">Create Event</h4>
                        <small class="text-muted">Add new event details</small>
                    </div>

                    <a href="{{ route('admin.events.index') }}" class="btn btn-outline-secondary btn-sm">
                        ← Back
                    </a>

                </div>
            </div>

            <!-- ===================== -->
            <!-- FORM -->
            <!-- ===================== -->
            <form action="{{ route('admin.events.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- ===================== -->
                <!-- BASIC INFO -->
                <!-- ===================== -->
                <div class="card mb-4 shadow-sm border-0">
                    <div class="card-header bg-light fw-semibold">
                        Basic Event Information
                    </div>

                    <div class="card-body">

                        <!-- TITLE -->
                        <div class="mb-3">
                            <label class="form-label">Title *</label>
                            <input type="text" name="title" class="form-control form-control-lg" required>
                        </div>

                        <!-- EVENT TYPE -->
                        <div class="mb-3">
                            <label class="form-label">Event Type *</label>

                            <select name="event_type_id" class="form-control form-control-lg" required>
                                <option value="">-- Select Event Type --</option>

                                @foreach($eventTypes as $type)
                                    <option value="{{ $type->id }}">
                                        {{ $type->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- LOCATION -->
                        <div class="mb-3">
                            <label class="form-label">Location *</label>
                            <input type="text" name="location" class="form-control form-control-lg" required>
                        </div>

                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Event Date *</label>
                                <input type="date" name="event_date" class="form-control" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Seats</label>
                                <input type="number" name="seats" class="form-control">
                            </div>

                        </div>

                        <!-- IMAGE -->
                        <div class="mb-3">
                            <label class="form-label">Event Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>

                    </div>
                </div>

                <!-- ===================== -->
                <!-- SEO SETTINGS -->
                <!-- ===================== -->
                <div class="card mb-4 shadow-sm border-0">

                    <div class="card-header bg-dark text-white fw-semibold">
                        SEO Settings
                    </div>

                    <div class="card-body">

                        <div class="mb-3">
                            <label class="form-label">Meta Title</label>
                            <input type="text" name="meta_title" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Meta Description</label>
                            <textarea name="meta_description" class="form-control" rows="3"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Meta Keywords</label>
                            <input type="text" name="meta_keywords" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">OG Image</label>
                            <input type="file" name="og_image" class="form-control">
                        </div>

                    </div>
                </div>

                <!-- ===================== -->
                <!-- EXTRA SETTINGS -->
                <!-- ===================== -->
                <div class="card mb-4 shadow-sm border-0">

                    <div class="card-header bg-light fw-semibold">
                        Extra Settings
                    </div>

                    <div class="card-body">

                        <!-- POSITION -->
                        <div class="mb-3">
                            <label class="form-label">Position</label>
                            <input type="number" name="position" class="form-control" value="0">
                        </div>

                        <!-- STATUS TOGGLE -->
                        <div class="mb-3">
                            <label class="form-label d-block">Status</label>

                            <div class="form-check form-switch">
                                <input class="form-check-input"
                                       type="checkbox"
                                       name="status"
                                       value="active"
                                       checked
                                       style="width: 4rem; height: 2rem;">
                            </div>

                        </div>

                    </div>
                </div>

                <!-- ===================== -->
                <!-- SUBMIT -->
                <!-- ===================== -->
                <div class="text-end">
                    <button type="submit" class="btn btn-success px-4">
                        💾 Save Event
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>
@endsection