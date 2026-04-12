@extends('backend.layouts.app')

@section('title')
    All Event Types
@endsection

@section('body')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-10 mx-auto">

                <div class="card shadow">

                    <div class="card-header d-flex justify-content-between">
                        <h4>Event Types (Drag & Drop)</h4>

                        <a href="{{ route('admin.eventtype.create') }}" class="btn btn-success">
                            <i class="fa fa-plus"></i> Add New
                        </a>
                    </div>

                    <div class="card-body">

                        <table class="table table-bordered text-center">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody id="sortable">

                                @foreach ($eventTypes as $key => $item)
                                    <tr data-id="{{ $item->id }}">

                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->position }}</td>

                                        <!-- ACTION BUTTONS -->
                                        <td>

                                            <!-- EDIT -->
                                            <a href="{{ route('admin.eventtype.edit', $item->id) }}"
                                                class="btn btn-primary btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <!-- DELETE -->
                                            <form action="{{ route('admin.eventtype.destroy', $item->id) }}" method="POST"
                                                style="display:inline-block;">

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure?')">

                                                    <i class="fa fa-trash"></i>
                                                </button>

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
@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>

    <script>
        $(document).ready(function() {

            console.log("DRAG SCRIPT LOADED");

            if (!$("#sortable").length) {
                console.log("sortable not found");
                return;
            }

            $("#sortable").sortable({
                axis: "y",
                cursor: "move",
                update: function() {

                    let positions = [];

                    $("#sortable tr").each(function() {
                        positions.push($(this).data("id"));
                    });

                    console.log("NEW ORDER:", positions);

                    $.ajax({
                        url: "{{ route('admin.eventtype.sort') }}",
                        type: "POST",
                        data: {
                            _token: "{{ csrf_token() }}",
                            positions: positions
                        },
                        success: function() {
                            console.log("UPDATED SUCCESS");
                        },
                        error: function(err) {
                            console.log("ERROR:", err.responseText);
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
