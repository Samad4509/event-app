@extends('backend.layouts.app')

@section('title')
    Add Details: {{ $event->title }}
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
                <h4 class="mb-1 fw-bold">Add Details</h4>
                <small class="text-muted">Event: <strong>{{ $event->title }}</strong></small>
            </div>
            <a href="{{ route('admin.events.details.index', $event->id) }}"
               class="btn btn-outline-secondary btn-sm">
                <i class="fa fa-arrow-left"></i> Back
            </a>
        </div>
    </div>

    {{-- Form --}}
    <form action="{{ route('admin.events.details.store', $event->id) }}"
          method="POST"
          enctype="multipart/form-data"
          id="details-form">
        @csrf

        {{-- Sortable Details Wrapper --}}
        <div id="details-wrapper">

            {{-- First card always visible --}}
            <div class="card shadow-sm border-0 mb-3 detail-card" data-index="0">
                <div class="card-header bg-light d-flex justify-content-between align-items-center">
                    <span class="d-flex align-items-center gap-2">
                        <i class="fa fa-arrows-alt drag-handle text-muted"
                           style="cursor:grab;"
                           title="Drag to reorder"></i>
                        <span class="fw-semibold detail-label">Detail #1</span>
                    </span>
                </div>
                <div class="card-body">

                    {{-- Sort Order --}}
                    <input type="hidden"
                           name="details[0][sort_order]"
                           class="sort-input"
                           value="1">

                    {{-- Title --}}
                    <div class="mb-3">
                        <label class="form-label fw-semibold">
                            Section Title <span class="text-danger">*</span>
                        </label>
                        <input type="text"
                               name="details[0][name]"
                               class="form-control"
                               placeholder="e.g. Guest Speaker: John Doe"
                               required>
                    </div>

                    {{-- Description (CKEditor) --}}
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Description</label>
                        <textarea name="details[0][description]"
                                  id="editor_0"
                                  class="form-control"
                                  rows="4"
                                  placeholder="Optional description..."></textarea>
                    </div>

                    {{-- Image --}}
                    <div class="mb-0">
                        <label class="form-label fw-semibold">
                            Image <span class="text-muted small">(optional)</span>
                        </label>
                        <input type="file"
                               name="details[0][image]"
                               class="form-control image-input"
                               accept="image/*">
                        <div class="image-preview mt-2"></div>
                    </div>

                </div>
            </div>

        </div>

        {{-- Action Buttons --}}
        <div class="d-flex gap-2 mb-4">
            <button type="button" id="add-detail" class="btn btn-outline-primary">
                <i class="fa fa-plus"></i> Add Another Detail
            </button>
            <button type="submit" class="btn btn-success" id="save-btn">
                <i class="fa fa-save"></i> Save All Details
            </button>
        </div>

    </form>
</div>

{{-- Hidden Card Template --}}
<template id="detail-template">
    <div class="card shadow-sm border-0 mb-3 detail-card" data-index="INDEX">
        <div class="card-header bg-light d-flex justify-content-between align-items-center">
            <span class="d-flex align-items-center gap-2">
                <i class="fa fa-arrows-alt drag-handle text-muted"
                   style="cursor:grab;"
                   title="Drag to reorder"></i>
                <span class="fw-semibold detail-label">Detail #1</span>
            </span>
            <button type="button" class="btn btn-outline-danger btn-sm remove-detail">
                <i class="fa fa-times"></i> Remove
            </button>
        </div>
        <div class="card-body">

            <input type="hidden"
                   name="details[INDEX][sort_order]"
                   class="sort-input"
                   value="INDEX">

            <div class="mb-3">
                <label class="form-label fw-semibold">
                    Section Title <span class="text-danger">*</span>
                </label>
                <input type="text"
                       name="details[INDEX][name]"
                       class="form-control"
                       placeholder="e.g. Guest Speaker: John Doe"
                       required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Description</label>
                <textarea name="details[INDEX][description]"
                          id="editor_INDEX"
                          class="form-control"
                          rows="4"
                          placeholder="Optional description..."></textarea>
            </div>

            <div class="mb-0">
                <label class="form-label fw-semibold">
                    Image <span class="text-muted small">(optional)</span>
                </label>
                <input type="file"
                       name="details[INDEX][image]"
                       class="form-control image-input"
                       accept="image/*">
                <div class="image-preview mt-2"></div>
            </div>

        </div>
    </div>
</template>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

<script>
let detailCount = 1;

// ── Initialize CKEditor ──────────────────────────────────────
function initEditor(id) {
    if (CKEDITOR.instances[id]) {
        CKEDITOR.instances[id].destroy(true);
    }
    CKEDITOR.replace(id, { versionCheck: false });
}

// ── Destroy all CKEditor instances ───────────────────────────
function destroyAllEditors() {
    for (let id in CKEDITOR.instances) {
        CKEDITOR.instances[id].destroy(true);
    }
}

// ── Reinitialize all editors in wrapper ──────────────────────
function reinitAllEditors() {
    $('#details-wrapper .detail-card textarea').each(function () {
        initEditor($(this).attr('id'));
    });
}

// ── Init first card editor on page load ──────────────────────
$(document).ready(function () {
    initEditor('editor_0');
});

// ── Add new detail card ──────────────────────────────────────
$('#add-detail').on('click', function () {
    const template = document.getElementById('detail-template').innerHTML;
    const html = template.replaceAll('INDEX', detailCount);
    const card = $(html);

    bindImagePreview(card.find('.image-input'));
    $('#details-wrapper').append(card);

    // Init CKEditor for the new textarea
    initEditor('editor_' + detailCount);

    detailCount++;
    renumber();
});

// ── Remove detail card ───────────────────────────────────────
$(document).on('click', '.remove-detail', function () {
    const card = $(this).closest('.detail-card');
    const editorId = card.find('textarea').attr('id');

    // Destroy CKEditor before removing DOM element
    if (editorId && CKEDITOR.instances[editorId]) {
        CKEDITOR.instances[editorId].destroy(true);
    }

    card.remove();
    renumber();
});

// ── Renumber labels & sort_order inputs ──────────────────────
function renumber() {
    $('.detail-card').each(function (i) {
        $(this).find('.detail-label').text('Detail #' + (i + 1));
        $(this).find('.sort-input').val(i + 1);
    });
}

// ── Image live preview ───────────────────────────────────────
function bindImagePreview(input) {
    input.on('change', function () {
        const preview = $(this).siblings('.image-preview');
        preview.html('');
        if (this.files && this.files[0]) {
            const reader = new FileReader();
            reader.onload = e => {
                preview.html(`
                    <img src="${e.target.result}"
                         class="rounded border mt-1"
                         style="max-height:120px; object-fit:cover;">
                `);
            };
            reader.readAsDataURL(this.files[0]);
        }
    });
}

// Bind preview for first static card
bindImagePreview($('.image-input'));

// ── Sortable cards ───────────────────────────────────────────
$("#details-wrapper").sortable({
    handle: ".drag-handle",
    axis: "y",
    cursor: "grab",
    start: function () {
        // Must destroy editors before jQuery UI moves DOM nodes
        destroyAllEditors();
    },
    update: function () {
        renumber();
    },
    stop: function () {
        // Reinit all editors after drag is complete
        reinitAllEditors();
    }
});

// ── Sync CKEditor content before form submit ─────────────────
$('#details-form').on('submit', function () {
    for (let id in CKEDITOR.instances) {
        CKEDITOR.instances[id].updateElement();
    }
});
</script>

<style>
    .detail-card {
        transition: box-shadow 0.2s;
    }
    .detail-card:hover {
        box-shadow: 0 4px 15px rgba(0,0,0,0.08) !important;
    }
    .ui-sortable-helper {
        box-shadow: 0 8px 25px rgba(0,0,0,0.15) !important;
        opacity: 0.95;
    }
    .drag-handle:active {
        cursor: grabbing;
    }
    .cke {
        border-radius: 6px;
        border-color: #dee2e6 !important;
    }
</style>
@endsection