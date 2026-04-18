@extends('backend.layouts.app')

@section('title')
    Edit Detail: {{ $detail->name }}
@endsection

@section('body')
<div class="container py-4">

    @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    {{-- Header --}}
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div>
                <h4 class="mb-1 fw-bold">Edit Detail</h4>
                <small class="text-muted">Event: <strong>{{ $event->title }}</strong></small>
            </div>
            <a href="{{ route('admin.events.details.index', $event->id) }}"
               class="btn btn-outline-secondary btn-sm">
                <i class="fa fa-arrow-left"></i> Back
            </a>
        </div>
    </div>

    {{-- Form --}}
    <div class="card shadow-sm border-0">
        <div class="card-body">
            <form action="{{ route('admin.events.details.update', $detail->id) }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')

                {{-- Title --}}
                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Section Title <span class="text-danger">*</span>
                    </label>
                    <input type="text"
                           name="name"
                           class="form-control"
                           value="{{ old('name', $detail->name) }}"
                           required>
                </div>

                {{-- Description --}}
                <div class="mb-3">
                    <label class="form-label fw-semibold">Description</label>
                    <textarea name="description"
                              id="editor"
                              class="form-control"
                              rows="5">{{ old('description', $detail->description) }}</textarea>
                </div>

                {{-- Current Image --}}
                @if($detail->image)
                <div class="mb-3">
                    <label class="form-label fw-semibold">Current Image</label><br>
                    <img src="{{ asset($detail->image) }}"
                         alt="Current Image"
                         class="rounded border"
                         style="max-height:150px; object-fit:cover;">
                </div>
                @endif

                {{-- New Image --}}
                <div class="mb-4">
                    <label class="form-label fw-semibold">
                        {{ $detail->image ? 'Replace Image' : 'Upload Image' }}
                        <span class="text-muted small">(optional)</span>
                    </label>
                    <input type="file"
                           name="image"
                           class="form-control"
                           accept="image/*"
                           id="imageInput">
                    <div id="imagePreview" class="mt-2"></div>
                </div>

                {{-- Submit --}}
                <div class="text-end">
                    <a href="{{ route('admin.events.details.index', $event->id) }}"
                       class="btn btn-secondary me-2">Cancel</a>
                    <button type="submit" class="btn btn-success px-4">
                        <i class="fa fa-save"></i> Update Detail
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor', { versionCheck: false });

    // Image preview
    document.getElementById('imageInput').addEventListener('change', function () {
        const preview = document.getElementById('imagePreview');
        preview.innerHTML = '';
        if (this.files && this.files[0]) {
            const reader = new FileReader();
            reader.onload = e => {
                preview.innerHTML = `<img src="${e.target.result}"
                    class="rounded border mt-1"
                    style="max-height:150px; object-fit:cover;">`;
            };
            reader.readAsDataURL(this.files[0]);
        }
    });

  
    document.querySelector('form').addEventListener('submit', function () {
        CKEDITOR.instances['editor'].updateElement();
    });
</script>
@endsection