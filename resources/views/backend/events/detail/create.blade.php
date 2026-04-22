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
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div>
                <h4 class="fw-bold mb-1">Add Event Sections</h4>
                <small class="text-muted">
                    Event: <strong>{{ $event->title }}</strong>
                </small>
            </div>
            <a href="{{ route('admin.events.details.index', $event->id) }}"
               class="btn btn-outline-secondary btn-sm">
                <i class="bi bi-arrow-left me-1"></i> Back
            </a>
        </div>
    </div>

    {{-- Section Type Chooser --}}
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-header bg-light border-0 py-3">
            <h6 class="fw-semibold mb-0">
                <i class="bi bi-plus-circle-fill text-primary me-2"></i>
                Choose a section type to add
            </h6>
        </div>
        <div class="card-body pb-3">
            <div class="row g-3">

                {{-- Banner Simple --}}
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="section-type-card border rounded-3 p-3 text-center h-100"
                         data-type="banner_simple" role="button">
                        <div class="rounded-circle d-inline-flex align-items-center
                                    justify-content-center mb-2 bg-danger bg-opacity-10"
                             style="width:48px;height:48px;">
                            <i class="bi bi-image text-danger fs-5"></i>
                        </div>
                        <div class="fw-semibold" style="font-size:12px;">Banner</div>
                        <div class="fw-semibold" style="font-size:12px;">Simple</div>
                        <small class="text-muted d-block" style="font-size:10px;">
                            Image only, no overlay
                        </small>
                    </div>
                </div>

                {{-- Banner Overlay --}}
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="section-type-card border rounded-3 p-3 text-center h-100"
                         data-type="banner_overlay" role="button">
                        <div class="rounded-circle d-inline-flex align-items-center
                                    justify-content-center mb-2 bg-danger bg-opacity-25"
                             style="width:48px;height:48px;">
                            <i class="bi bi-image-fill text-danger fs-5"></i>
                        </div>
                        <div class="fw-semibold" style="font-size:12px;">Banner</div>
                        <div class="fw-semibold" style="font-size:12px;">Overlay</div>
                        <small class="text-muted d-block" style="font-size:10px;">
                            Image + text + stats
                        </small>
                    </div>
                </div>

                {{-- Overview --}}
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="section-type-card border rounded-3 p-3 text-center h-100"
                         data-type="overview" role="button">
                        <div class="rounded-circle d-inline-flex align-items-center
                                    justify-content-center mb-2 bg-success bg-opacity-10"
                             style="width:48px;height:48px;">
                            <i class="bi bi-check2-square text-success fs-5"></i>
                        </div>
                        <div class="fw-semibold" style="font-size:12px;">Overview</div>
                        <small class="text-muted d-block" style="font-size:10px;">
                            Checklist + image
                        </small>
                    </div>
                </div>

                {{-- Text + Image --}}
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="section-type-card border rounded-3 p-3 text-center h-100"
                         data-type="text_image" role="button">
                        <div class="rounded-circle d-inline-flex align-items-center
                                    justify-content-center mb-2 bg-primary bg-opacity-10"
                             style="width:48px;height:48px;">
                            <i class="bi bi-card-image text-primary fs-5"></i>
                        </div>
                        <div class="fw-semibold" style="font-size:12px;">Text + Image</div>
                        <small class="text-muted d-block" style="font-size:10px;">
                            Description + image
                        </small>
                    </div>
                </div>

                {{-- Stats + Image --}}
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="section-type-card border rounded-3 p-3 text-center h-100"
                         data-type="stats" role="button">
                        <div class="rounded-circle d-inline-flex align-items-center
                                    justify-content-center mb-2 bg-warning bg-opacity-10"
                             style="width:48px;height:48px;">
                            <i class="bi bi-bar-chart-fill text-warning fs-5"></i>
                        </div>
                        <div class="fw-semibold" style="font-size:12px;">Stats + Image</div>
                        <small class="text-muted d-block" style="font-size:10px;">
                            Numbers + image
                        </small>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- Form --}}
    <form action="{{ route('admin.events.details.store', $event->id) }}"
          method="POST"
          enctype="multipart/form-data"
          id="details-form">
        @csrf

        <div id="details-wrapper"></div>

        {{-- Empty State --}}
        <div id="empty-state"
             class="text-center py-5 border rounded-3 mb-4 bg-light">
            <i class="bi bi-layout-text-window-reverse d-block mb-2 text-muted"
               style="font-size:40px;"></i>
            <p class="text-muted mb-1">No sections added yet.</p>
            <small class="text-muted">
                Click any section type above to get started.
            </small>
        </div>

        <div id="submit-area" class="d-none">
            <hr>
            <button type="submit" class="btn btn-success px-4">
                <i class="bi bi-save me-1"></i> Save All Sections
            </button>
        </div>

    </form>
</div>

{{-- ══════════════════════════════════════
     TEMPLATE: BANNER SIMPLE
     Frontend: plain image, no overlay
══════════════════════════════════════ --}}
<template id="tpl-banner_simple">
    <div class="card border-0 shadow-sm mb-3 detail-card" data-type="banner_simple">
        <div class="card-header border-0 bg-danger bg-opacity-10
                    d-flex justify-content-between align-items-center py-3">
            <div class="d-flex align-items-center gap-2">
                <i class="bi bi-grip-vertical drag-handle text-muted fs-5"
                   style="cursor:grab;"></i>
                <i class="bi bi-image text-danger"></i>
               
                <span class="badge bg-danger bg-opacity-10 text-danger
                             border border-danger border-opacity-25"
                      style="font-size:11px;">
                    Banner Simple
                </span>
                {{-- dynamic name badge --}}
                <span class="badge bg-secondary bg-opacity-10 text-secondary
                             section-name-badge d-none border"
                      style="font-size:11px;"></span>
            </div>
            <button type="button"
                    class="btn btn-outline-danger btn-sm remove-detail">
                <i class="bi bi-x-lg"></i> Remove
            </button>
        </div>
        <div class="card-body">
            <input type="hidden" name="details[IDX][type]"
                   value="banner_simple">
            <input type="hidden" name="details[IDX][sort_order]"
                   class="sort-input" value="1">

            <div class="alert alert-danger bg-danger bg-opacity-10
                        border-0 py-2 mb-3">
                <small>
                    <i class="bi bi-eye me-1"></i>
                    Frontend: Full-width image only, no dark overlay or text.
                    Used as a plain visual break between sections.
                </small>
            </div>

            {{-- Preview: Banner Simple --}}
            <div class="border rounded-3 overflow-hidden mb-3 bg-secondary bg-opacity-10
                        d-flex align-items-center justify-content-center"
                 style="height:80px;">
                <div class="text-center text-muted">
                    <i class="bi bi-image fs-3 d-block"></i>
                    <small style="font-size:11px;">Full width image · no overlay</small>
                </div>
            </div>

            <div class="row g-3">
            
                <div class="col-lg-6">
                    <label class="form-label fw-semibold">
                        Banner Image <span class="text-danger">*</span>
                        <small class="text-muted fw-normal">
                            (recommended: 1400×420px)
                        </small>
                    </label>
                    <input type="file"
                           name="details[IDX][image]"
                           class="form-control image-input"
                           accept="image/*">
                    <div class="image-preview mt-2"></div>
                </div>
            </div>
        </div>
    </div>
</template>

{{-- ══════════════════════════════════════
     TEMPLATE: BANNER OVERLAY
     Frontend: dark image + title + desc + meta pills + stat bar
══════════════════════════════════════ --}}
<template id="tpl-banner_overlay">
    <div class="card border-0 shadow-sm mb-3 detail-card" data-type="banner_overlay">
        <div class="card-header border-0 bg-danger bg-opacity-25
                    d-flex justify-content-between align-items-center py-3">
            <div class="d-flex align-items-center gap-2">
                <i class="bi bi-grip-vertical drag-handle text-muted fs-5"
                   style="cursor:grab;"></i>
                <i class="bi bi-image-fill text-danger"></i>
                <span class="fw-semibold detail-label">Section #1</span>
                <span class="badge bg-danger bg-opacity-25 text-danger
                             border border-danger border-opacity-50"
                      style="font-size:11px;">
                    Banner Overlay
                </span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary
                             section-name-badge d-none border"
                      style="font-size:11px;"></span>
            </div>
            <button type="button"
                    class="btn btn-outline-danger btn-sm remove-detail">
                <i class="bi bi-x-lg"></i> Remove
            </button>
        </div>
        <div class="card-body">
            <input type="hidden" name="details[IDX][type]"
                   value="banner_overlay">
            <input type="hidden" name="details[IDX][sort_order]"
                   class="sort-input" value="1">

            <div class="alert alert-danger bg-danger bg-opacity-10
                        border-0 py-2 mb-3">
                <small>
                    <i class="bi bi-eye me-1"></i>
                    Frontend: Dark image + category badge + title + description
                    + meta pills + stat bar at bottom.
                </small>
            </div>

            {{-- Mini visual preview --}}
            <div class="border rounded-3 overflow-hidden mb-3 bg-dark
                        d-flex flex-column justify-content-between p-3"
                 style="height:100px;">
                <div class="d-flex gap-2 align-items-center">
                    <span class="badge bg-danger" style="font-size:10px;">
                        Category
                    </span>
                    <small class="text-white opacity-75"
                           style="font-size:10px;">Title here</small>
                </div>
                <div class="d-flex justify-content-evenly border-top
                            border-secondary pt-2 mt-auto">
                    <small class="text-white opacity-50"
                           style="font-size:9px;">40+ Speakers</small>
                    <small class="text-white opacity-50"
                           style="font-size:9px;">18 Workshops</small>
                    <small class="text-white opacity-50"
                           style="font-size:9px;">3 Days</small>
                </div>
            </div>

            <div class="row g-3">
                <div class="col-lg-6">
                    <label class="form-label fw-semibold">
                        Banner Title <span class="text-danger">*</span>
                    </label>
                    <input type="text"
                           name="details[IDX][name]"
                           class="form-control section-name-input"
                           placeholder="e.g. International Marketing Summit 2026"
                           required>
                </div>

                <div class="col-lg-6">
                    <label class="form-label fw-semibold">
                        Banner Image <span class="text-danger">*</span>
                        <small class="text-muted fw-normal">
                            (recommended: 1400×420px)
                        </small>
                    </label>
                    <input type="file"
                           name="details[IDX][image]"
                           class="form-control image-input"
                           accept="image/*">
                    <div class="image-preview mt-2"></div>
                </div>

                <div class="col-lg-12">
                    <label class="form-label fw-semibold">
                        Sub Description
                        <small class="text-muted fw-normal">
                            (shown below title on banner)
                        </small>
                    </label>
                    <textarea name="details[IDX][description]"
                              id="editor_IDX"
                              class="form-control ckeditor-field"
                              rows="2"
                              placeholder="Short text shown on the banner..."></textarea>
                </div>

                <div class="col-lg-12">
                    <label class="form-label fw-semibold">
                        Bottom Stat Bar
                        <small class="text-muted fw-normal">
                            (shown at bottom, e.g. 40+ Speakers)
                        </small>
                    </label>
                    <div class="border rounded-3 p-3 bg-light stats-wrapper"
                         id="stats_IDX">
                        <div class="row g-2 mb-2 align-items-center stat-row">
                            <div class="col-1 text-center">
                                <small class="text-muted fw-semibold">#1</small>
                            </div>
                            <div class="col-4">
                                <input type="text"
                                       name="details[IDX][stats][0][value]"
                                       class="form-control form-control-sm"
                                       placeholder="40+">
                            </div>
                            <div class="col-5">
                                <input type="text"
                                       name="details[IDX][stats][0][label]"
                                       class="form-control form-control-sm"
                                       placeholder="Speakers">
                            </div>
                            <div class="col-2">
                                <button type="button"
                                        class="btn btn-outline-danger btn-sm
                                               w-100 remove-stat">
                                    <i class="bi bi-x-lg"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <button type="button"
                            class="btn btn-outline-secondary btn-sm mt-2 add-stat"
                            data-target="stats_IDX" data-index="IDX">
                        <i class="bi bi-plus-lg me-1"></i> Add Stat
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

{{-- ══════════════════════════════════════
     TEMPLATE: OVERVIEW
     Frontend: title + desc + checklist left, image right
══════════════════════════════════════ --}}
<template id="tpl-overview">
    <div class="card border-0 shadow-sm mb-3 detail-card" data-type="overview">
        <div class="card-header border-0 bg-success bg-opacity-10
                    d-flex justify-content-between align-items-center py-3">
            <div class="d-flex align-items-center gap-2">
                <i class="bi bi-grip-vertical drag-handle text-muted fs-5"
                   style="cursor:grab;"></i>
                <i class="bi bi-check2-square text-success"></i>
                <span class="fw-semibold detail-label">Section #1</span>
                <span class="badge bg-success bg-opacity-10 text-success
                             border border-success border-opacity-25"
                      style="font-size:11px;">Overview</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary
                             section-name-badge d-none border"
                      style="font-size:11px;"></span>
            </div>
            <button type="button"
                    class="btn btn-outline-danger btn-sm remove-detail">
                <i class="bi bi-x-lg"></i> Remove
            </button>
        </div>
        <div class="card-body">
            <input type="hidden" name="details[IDX][type]"
                   value="overview">
            <input type="hidden" name="details[IDX][sort_order]"
                   class="sort-input" value="1">

            <div class="alert alert-success bg-success bg-opacity-10
                        border-0 py-2 mb-3">
                <small>
                    <i class="bi bi-eye me-1"></i>
                    Frontend: Title + description + checklist on left,
                    image on right.
                </small>
            </div>

            <div class="row g-3">
                <div class="col-lg-12">
                    <label class="form-label fw-semibold">
                        Section Title <span class="text-danger">*</span>
                        <small class="text-muted fw-normal">
                            (shown as heading on frontend)
                        </small>
                    </label>
                    <input type="text"
                           name="details[IDX][name]"
                           class="form-control section-name-input"
                           placeholder="e.g. Over View"
                           required>
                </div>

                <div class="col-lg-12">
                    <label class="form-label fw-semibold">
                        Description
                        <small class="text-muted fw-normal">(optional)</small>
                    </label>
                    <textarea name="details[IDX][description]"
                              id="editor_IDX"
                              class="form-control ckeditor-field"
                              rows="3"
                              placeholder="Paragraph shown above checklist..."></textarea>
                </div>

                <div class="col-lg-7">
                    <label class="form-label fw-semibold">
                        Checklist Items
                        <small class="text-muted fw-normal">
                            — one item per line
                        </small>
                    </label>
                    <textarea name="details[IDX][checklist]"
                              class="form-control" rows="6"
                              placeholder="You Got Full Free Certificate.&#10;Unlimited Coffee & Tea.&#10;Free Lunch Included.&#10;Class Aptent Taciti.&#10;Etiam dictum venenatis."></textarea>
                    <div class="form-text">
                        <i class="bi bi-check2 text-success me-1"></i>
                        Each line = one checkmark item on frontend.
                    </div>
                </div>

                <div class="col-lg-5">
                    <label class="form-label fw-semibold">
                        Section Image
                        <small class="text-muted fw-normal">
                            (shown on right, height 300px)
                        </small>
                    </label>
                    <input type="file"
                           name="details[IDX][image]"
                           class="form-control image-input"
                           accept="image/*">
                    <div class="image-preview mt-2"></div>
                </div>
            </div>
        </div>
    </div>
</template>

{{-- ══════════════════════════════════════
     TEMPLATE: TEXT + IMAGE
     Frontend: text left/right alternate, image opposite
══════════════════════════════════════ --}}
<template id="tpl-text_image">
    <div class="card border-0 shadow-sm mb-3 detail-card" data-type="text_image">
        <div class="card-header border-0 bg-primary bg-opacity-10
                    d-flex justify-content-between align-items-center py-3">
            <div class="d-flex align-items-center gap-2">
                <i class="bi bi-grip-vertical drag-handle text-muted fs-5"
                   style="cursor:grab;"></i>
                <i class="bi bi-card-image text-primary"></i>
                <span class="fw-semibold detail-label">Section #1</span>
                <span class="badge bg-primary bg-opacity-10 text-primary
                             border border-primary border-opacity-25"
                      style="font-size:11px;">Text + Image</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary
                             section-name-badge d-none border"
                      style="font-size:11px;"></span>
            </div>
            <button type="button"
                    class="btn btn-outline-danger btn-sm remove-detail">
                <i class="bi bi-x-lg"></i> Remove
            </button>
        </div>
        <div class="card-body">
            <input type="hidden" name="details[IDX][type]"
                   value="text_image">
            <input type="hidden" name="details[IDX][sort_order]"
                   class="sort-input" value="1">

            <div class="alert alert-primary bg-primary bg-opacity-10
                        border-0 py-2 mb-3">
                <small>
                    <i class="bi bi-eye me-1"></i>
                    Frontend: Title + description on left, image on right.
                    Odd-numbered sections automatically flip layout.
                </small>
            </div>

            <div class="row g-3">
                <div class="col-lg-12">
                    <label class="form-label fw-semibold">
                        Section Title <span class="text-danger">*</span>
                    </label>
                    <input type="text"
                           name="details[IDX][name]"
                           class="form-control section-name-input"
                           placeholder="e.g. What You'll Learn"
                           required>
                </div>

                <div class="col-lg-7">
                    <label class="form-label fw-semibold">Description</label>
                    <textarea name="details[IDX][description]"
                              id="editor_IDX"
                              class="form-control ckeditor-field"
                              rows="6"
                              placeholder="Section description..."></textarea>
                </div>

                <div class="col-lg-5">
                    <label class="form-label fw-semibold">
                        Section Image
                        <small class="text-muted fw-normal">(optional)</small>
                    </label>
                    <input type="file"
                           name="details[IDX][image]"
                           class="form-control image-input"
                           accept="image/*">
                    <div class="image-preview mt-2"></div>
                </div>
            </div>
        </div>
    </div>
</template>

{{-- ══════════════════════════════════════
     TEMPLATE: STATS + IMAGE
     Frontend: title + desc + stat boxes left, image right
══════════════════════════════════════ --}}
<template id="tpl-stats">
    <div class="card border-0 shadow-sm mb-3 detail-card" data-type="stats">
        <div class="card-header border-0 bg-warning bg-opacity-10
                    d-flex justify-content-between align-items-center py-3">
            <div class="d-flex align-items-center gap-2">
                <i class="bi bi-grip-vertical drag-handle text-muted fs-5"
                   style="cursor:grab;"></i>
                <i class="bi bi-bar-chart-fill text-warning"></i>
                <span class="fw-semibold detail-label">Section #1</span>
                <span class="badge bg-warning bg-opacity-10 text-warning
                             border border-warning border-opacity-25"
                      style="font-size:11px;">Stats + Image</span>
                <span class="badge bg-secondary bg-opacity-10 text-secondary
                             section-name-badge d-none border"
                      style="font-size:11px;"></span>
            </div>
            <button type="button"
                    class="btn btn-outline-danger btn-sm remove-detail">
                <i class="bi bi-x-lg"></i> Remove
            </button>
        </div>
        <div class="card-body">
            <input type="hidden" name="details[IDX][type]"
                   value="stats">
            <input type="hidden" name="details[IDX][sort_order]"
                   class="sort-input" value="1">

            <div class="alert alert-warning bg-warning bg-opacity-10
                        border-0 py-2 mb-3">
                <small>
                    <i class="bi bi-eye me-1"></i>
                    Frontend: Title + description + red number boxes (col-4)
                    on left, image on right.
                </small>
            </div>

            <div class="row g-3">
                <div class="col-lg-12">
                    <label class="form-label fw-semibold">
                        Section Title <span class="text-danger">*</span>
                    </label>
                    <input type="text"
                           name="details[IDX][name]"
                           class="form-control section-name-input"
                           placeholder="e.g. Why You Should Attend"
                           required>
                </div>

                <div class="col-lg-12">
                    <label class="form-label fw-semibold">
                        Description
                        <small class="text-muted fw-normal">(optional)</small>
                    </label>
                    <textarea name="details[IDX][description]"
                              class="form-control" rows="2"
                              placeholder="Short paragraph above stat boxes..."></textarea>
                </div>

                <div class="col-lg-7">
                    <label class="form-label fw-semibold">
                        Stat Items
                        <small class="text-muted fw-normal">
                            (max 3 recommended — col-4 boxes on frontend)
                        </small>
                    </label>
                    <div class="border rounded-3 p-3 bg-light stats-wrapper"
                         id="stats_IDX">
                        <div class="row g-2 mb-2 align-items-center stat-row">
                            <div class="col-1 text-center">
                                <small class="text-muted fw-semibold">#1</small>
                            </div>
                            <div class="col-4">
                                <input type="text"
                                       name="details[IDX][stats][0][value]"
                                       class="form-control form-control-sm"
                                       placeholder="40+">
                            </div>
                            <div class="col-5">
                                <input type="text"
                                       name="details[IDX][stats][0][label]"
                                       class="form-control form-control-sm"
                                       placeholder="Speakers">
                            </div>
                            <div class="col-2">
                                <button type="button"
                                        class="btn btn-outline-danger btn-sm
                                               w-100 remove-stat">
                                    <i class="bi bi-x-lg"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <button type="button"
                            class="btn btn-outline-secondary btn-sm mt-2 add-stat"
                            data-target="stats_IDX" data-index="IDX">
                        <i class="bi bi-plus-lg me-1"></i> Add Stat
                    </button>
                    <div class="form-text">
                        <i class="bi bi-info-circle me-1"></i>
                        Value = big red number, Label = small grey text below.
                    </div>
                </div>

                <div class="col-lg-5">
                    <label class="form-label fw-semibold">
                        Section Image
                        <small class="text-muted fw-normal">
                            (shown on right, height 300px)
                        </small>
                    </label>
                    <input type="file"
                           name="details[IDX][image]"
                           class="form-control image-input"
                           accept="image/*">
                    <div class="image-preview mt-2"></div>
                </div>
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
let sectionCount = 0;

// ── Click section type card ──────────────────────────────────
$(document).on('click', '.section-type-card', function () {
    addSection($(this).data('type'));
});

// ── Add section ──────────────────────────────────────────────
function addSection(type) {
    const tpl = document.getElementById('tpl-' + type);
    if (!tpl) return;

    const idx  = sectionCount;
    const html = tpl.innerHTML.replaceAll('IDX', idx);
    const card = $(html);

    bindImagePreview(card.find('.image-input'));
    $('#details-wrapper').append(card);

    // Init CKEditor if exists
    const edId = 'editor_' + idx;
    if (card.find('#' + edId).length) {
        setTimeout(() => initEditor(edId), 150);
    }

    sectionCount++;
    renumber();
    toggleEmptyState();

    $('html,body').animate({ scrollTop: card.offset().top - 120 }, 300);
}

// ── Live name badge update ───────────────────────────────────
$(document).on('input', '.section-name-input', function () {
    const card  = $(this).closest('.detail-card');
    const badge = card.find('.section-name-badge');
    const val   = $(this).val().trim();

    if (val) {
        badge.text('"' + val + '"').removeClass('d-none');
    } else {
        badge.text('').addClass('d-none');
    }
});

// ── Remove section ───────────────────────────────────────────
$(document).on('click', '.remove-detail', function () {
    const card = $(this).closest('.detail-card');
    const edId = card.find('.ckeditor-field').attr('id');
    if (edId && CKEDITOR.instances[edId]) {
        CKEDITOR.instances[edId].destroy(true);
    }
    card.remove();
    renumber();
    toggleEmptyState();
});

// ── Add stat row ─────────────────────────────────────────────
$(document).on('click', '.add-stat', function () {
    const target    = $(this).data('target');
    const cardIndex = $(this).data('index');
    const wrapper   = $('#' + target);
    const statIdx   = wrapper.find('.stat-row').length;

    wrapper.append(`
        <div class="row g-2 mb-2 align-items-center stat-row">
            <div class="col-1 text-center">
                <small class="text-muted fw-semibold">#${statIdx + 1}</small>
            </div>
            <div class="col-4">
                <input type="text"
                       name="details[${cardIndex}][stats][${statIdx}][value]"
                       class="form-control form-control-sm"
                       placeholder="18">
            </div>
            <div class="col-5">
                <input type="text"
                       name="details[${cardIndex}][stats][${statIdx}][label]"
                       class="form-control form-control-sm"
                       placeholder="Workshops">
            </div>
            <div class="col-2">
                <button type="button"
                        class="btn btn-outline-danger btn-sm w-100 remove-stat">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>
        </div>
    `);
});

// ── Remove stat row ──────────────────────────────────────────
$(document).on('click', '.remove-stat', function () {
    $(this).closest('.stat-row').remove();
});

// ── CKEditor ─────────────────────────────────────────────────
function initEditor(id) {
    if (CKEDITOR.instances[id]) CKEDITOR.instances[id].destroy(true);
    CKEDITOR.replace(id, { versionCheck: false });
}
function destroyAllEditors() {
    for (let id in CKEDITOR.instances) CKEDITOR.instances[id].destroy(true);
}
function reinitAllEditors() {
    $('#details-wrapper .ckeditor-field').each(function () {
        initEditor($(this).attr('id'));
    });
}

// ── Image preview ────────────────────────────────────────────
function bindImagePreview(input) {
    input.on('change', function () {
        const preview = $(this).siblings('.image-preview');
        preview.html('');
        if (this.files && this.files[0]) {
            const reader = new FileReader();
            reader.onload = e => {
                preview.html(`
                    <img src="${e.target.result}"
                         class="rounded border mt-1 img-fluid"
                         style="max-height:120px;object-fit:cover;">
                `);
            };
            reader.readAsDataURL(this.files[0]);
        }
    });
}

// ── Renumber ─────────────────────────────────────────────────
function renumber() {
    $('.detail-card').each(function (i) {
        $(this).find('.detail-label').text('Section #' + (i + 1));
        $(this).find('.sort-input').val(i + 1);
    });
}

// ── Toggle empty state ───────────────────────────────────────
function toggleEmptyState() {
    const count = $('.detail-card').length;
    $('#empty-state').toggleClass('d-none', count > 0);
    $('#submit-area').toggleClass('d-none', count === 0);
}

// ── Sortable ─────────────────────────────────────────────────
$('#details-wrapper').sortable({
    handle: '.drag-handle',
    axis: 'y',
    cursor: 'grab',
    start: () => destroyAllEditors(),
    update: () => renumber(),
    stop: () => reinitAllEditors()
});

// ── Sync CKEditor on submit ──────────────────────────────────
$('#details-form').on('submit', function () {
    for (let id in CKEDITOR.instances) {
        CKEDITOR.instances[id].updateElement();
    }
});
</script>

<style>
.section-type-card:hover {
    border-color: #0d6efd !important;
    background-color: #f0f7ff !important;
}
</style>
@endsection