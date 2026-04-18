@extends('backend.layouts.app')

@section('title')
    Event Details: {{ $event->title }}
@endsection

@section('body')
<div class="container py-4">

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <a href="{{ route('admin.events.index') }}" class="btn btn-outline-secondary btn-sm mb-2">
                <i class="fa fa-arrow-left"></i> Back to Events
            </a>
            <h4 class="mb-0">Manage Details for: <strong>{{ $event->title }}</strong></h4>
        </div>
        <a href="{{ route('admin.events.details.create.section', $event->id) }}" class="btn btn-success btn-sm">
            <i class="fa fa-plus"></i> Add New Detail
        </a>
    </div>

    {{-- Details Table --}}
    <div class="card shadow-sm border-0">
        <div class="card-header bg-dark text-white fw-semibold">
            All Details <span class="badge bg-secondary ms-2">{{ $event->details->count() }}</span>
        </div>
        <div class="card-body p-0">
            <table class="table table-bordered table-hover align-middle mb-0">
                <thead class="table-dark">
                    <tr>
                        <th width="50" class="text-center">Sort</th>
                        <th width="40">#</th>
                        <th width="80" class="text-center">Image</th>
                        <th>Name</th>
                    
                        <th width="160" class="text-center">Action</th>
                    </tr>
                </thead>

                <tbody id="sortable">
                    @forelse($event->details as $index => $detail)
                    <tr data-id="{{ $detail->id }}">
                        <td class="text-center text-muted">
                            <i class="fa fa-arrows-alt" style="cursor: move;" title="Drag to reorder"></i>
                        </td>
                        <td class="text-muted small">{{ $index + 1 }}</td>

                        {{-- Image --}}
                        <td class="text-center">
                            @if($detail->image)
                                <img src="{{ asset($detail->image) }}"
                                     alt="img"
                                     class="rounded"
                                     width="55" height="45"
                                     style="object-fit:cover; cursor:pointer;"
                                     data-bs-toggle="modal"
                                     data-bs-target="#imageModal"
                                    data-src="{{ asset($detail->image) }}">  
                            @else
                                <span class="text-muted small">—</span>
                            @endif
                        </td>

                        {{-- Name --}}
                        <td><strong>{{ $detail->name }}</strong></td>


                        {{-- Actions --}}
                        <td class="text-center">
                            <div class="d-flex justify-content-center gap-1">

                                {{-- View --}}
                                <button type="button"
                                        class="btn btn-info btn-sm text-white"
                                        data-bs-toggle="modal"
                                        data-bs-target="#viewModal"
                                        data-id="{{ $detail->id }}"
                                        data-name="{{ $detail->name }}"
                                        data-description="{{ $detail->description }}"
                                        data-image="{{ $detail->image ? asset($detail->image) : '' }}"> 
                                    <i class="fa fa-eye"></i>
                                </button>

                                {{-- Edit --}}
                                <a href="{{ route('admin.events.details.edit', $detail->id) }}"
                                   class="btn btn-warning btn-sm text-white">
                                    <i class="fa fa-edit"></i>
                                </a>

                                {{-- Delete --}}
                                <form action="{{ route('admin.events.details.delete', $detail->id) }}"
                                      method="POST"
                                      onsubmit="return confirm('Delete this detail?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>

                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted py-4">
                            <i class="fa fa-inbox fa-2x mb-2 d-block"></i>
                            No details found. Add one above!
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- ======================== --}}
{{-- VIEW MODAL --}}
{{-- ======================== --}}
<div class="modal fade" id="viewModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title">
                    <i class="fa fa-eye me-2"></i>
                    <span id="modal-name"></span>
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                {{-- Image --}}
                <div id="modal-image-wrapper" class="mb-3 text-center" style="display:none;">
                    <img id="modal-image"
                         src=""
                         alt="Detail Image"
                         class="img-fluid rounded shadow-sm"
                         style="max-height: 300px; object-fit:cover;">
                </div>

                {{-- Name --}}
                <div class="mb-3">
                    <label class="fw-bold text-muted small text-uppercase">Section Title</label>
                    <p id="modal-name-text" class="fs-5 fw-semibold mb-0"></p>
                </div>

                {{-- Description --}}
                <div>
                    <label class="fw-bold text-muted small text-uppercase">Description</label>
                    <div id="modal-description"
                         class="border rounded p-3 bg-light"
                         style="min-height: 60px;"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

{{-- ======================== --}}
{{-- IMAGE ZOOM MODAL --}}
{{-- ======================== --}}
<div class="modal fade" id="imageModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-transparent border-0">
            <div class="modal-body text-center p-0">
                <img id="zoom-image" src="" alt="Image" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>

<script>
$(document).ready(function () {

  
 // ── Sortable ─────────────────────────────────────────────
if ($("#sortable tr[data-id]").length) {
    $("#sortable").sortable({
        axis: "y",
        cursor: "move",
        handle: "td:first-child",  
        update: function () {
            let positions = [];
            $("#sortable tr[data-id]").each(function () {
                positions.push($(this).data("id"));
            });

            $.ajax({
                url: "{{ route('admin.events.details.sort') }}",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    positions: positions
                },
                success: function () {
                    $("#sortable tr[data-id]").each(function(i) {
                        $(this).find('td:nth-child(2)').text(i + 1);
                    });
                },
                error: function (err) {
                    alert("Failed to update order.");
                    console.error(err.responseText);
                }
            });
        }
    });
}
    // ── View Modal ───────────────────────────────────────────
    $('#viewModal').on('show.bs.modal', function (e) {
        const btn         = $(e.relatedTarget);
        const name        = btn.data('name');
        const description = btn.data('description');
        const image       = btn.data('image');

        $('#modal-name').text(name);
        $('#modal-name-text').text(name);
        $('#modal-description').html(description || '<span class="text-muted">No description.</span>');

        if (image) {
            $('#modal-image').attr('src', image);
            $('#modal-image-wrapper').show();
        } else {
            $('#modal-image-wrapper').hide();
        }
    });

    // ── Image Zoom Modal ─────────────────────────────────────
    $('#imageModal').on('show.bs.modal', function (e) {
        const src = $(e.relatedTarget).data('src');
        $('#zoom-image').attr('src', src);
    });

});
</script>

<style>
    #sortable tr { transition: background 0.15s; }
    #sortable tr:hover { background-color: #f8f9fa; }
    .ui-sortable-helper {
        display: table;
        background: white;
        box-shadow: 0 5px 15px rgba(0,0,0,0.15);
    }
</style>
@endsection