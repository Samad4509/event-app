@extends('backend.layouts.app')

@section('tittle')
Events List
@endsection

@section('body')
<div class="container py-4">

    <!-- ===================== -->
    <!-- 🔥 SUCCESS MESSAGE -->
    <!-- ===================== -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <!-- ===================== -->
    <!-- HEADER -->
    <!-- ===================== -->
    <div class="d-flex justify-content-between mb-3">
        <h4>All Events</h4>

        <a href="{{ route('admin.events.create') }}" class="btn btn-primary">
            + Add Event
        </a>
    </div>

    <!-- ===================== -->
    <!-- TABLE CARD -->
    <!-- ===================== -->
    <div class="card shadow-sm border-0">
        <div class="card-body">

            <table class="table table-bordered table-hover align-middle">

                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Location</th>
                        <th>Date</th>
                        <th>Seats</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <!-- IMPORTANT: sortable tbody -->
                <tbody id="sortable">

                    @forelse($events as $key => $event)

                    <tr data-id="{{ $event->id }}">

                        <!-- ORDER -->
                        <td>{{ $key + 1 }}</td>

                        <!-- IMAGE -->
                        <td>
                            @if($event->image)
                                <img src="{{ asset($event->image) }}"
                                     width="60"
                                     height="60"
                                     style="object-fit: cover; border-radius: 5px;">
                            @else
                                <span class="text-muted">No Image</span>
                            @endif
                        </td>

                        <!-- TITLE -->
                        <td>{{ $event->title }}</td>

                        <!-- LOCATION -->
                        <td>{{ $event->location }}</td>

                        <!-- DATE -->
                        <td>{{ $event->event_date }}</td>

                        <!-- SEATS -->
                        <td>{{ $event->seats }}</td>

                        <!-- STATUS 🔥 -->
                        <td>
                            @if($event->status == 'active')
                                <a href="{{ route('admin.events.status', $event->id) }}"
                                   class="btn btn-success btn-sm">
                                    Active
                                </a>
                            @else
                                <a href="{{ route('admin.events.status', $event->id) }}"
                                   class="btn btn-danger btn-sm">
                                    Inactive
                                </a>
                            @endif
                        </td>

                        <!-- ACTION -->
                       <td>
                            <div class="d-flex flex-wrap gap-1">

                                <a href="{{ route('admin.events.edit', $event->id) }}"
                                class="btn btn-warning btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>

                                <a href="{{ route('admin.events.delete', $event->id) }}"
                                onclick="return confirm('Are you sure?')"
                                class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i>
                                </a>

                                <a href="{{ route('admin.events.details.index', $event->id) }}"
                                class="btn btn-info btn-sm">
                                    <i class="fa fa-plus"></i>
                                </a>

                            </div>
                        </td>

                    </tr>

                    @empty
                    <tr>
                        <td colspan="8" class="text-center text-muted">
                            No Events Found
                        </td>
                    </tr>
                    @endforelse

                </tbody>

            </table>

        </div>
    </div>

</div>
@endsection


@section('scripts')

<!-- jQuery + jQuery UI -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>

<script>
$(document).ready(function () {

    if (!$("#sortable").length) return;

    $("#sortable").sortable({
        axis: "y",
        cursor: "move",

        update: function () {

            let positions = [];

            $("#sortable tr").each(function () {
                positions.push($(this).data("id"));
            });

            $.ajax({
                url: "{{ route('admin.events.sort') }}",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    positions: positions
                },
                success: function () {
                    console.log("Order Updated Successfully");
                },
                error: function (err) {
                    console.log("Error:", err.responseText);
                }
            });
        }
    });

});
</script>

<style>
#sortable tr {
    cursor: move;
}
</style>

@endsection