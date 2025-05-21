@extends('layout.template')

@section('content')
    <div class="container py-4">
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="border-bottom pb-2">Data Tables</h2>
            </div>
        </div>

        <!-- Points Table -->
        <div class="card mb-4 shadow-sm">
            <div class="card-header bg-light d-flex justify-content-between align-items-center">
                <h5 class="mb-0">
                    <i class="fa-solid fa-location-dot text-danger me-2"></i> Points
                </h5>
                <span class="badge bg-primary">{{ count($points) }} items</span>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($points) > 0)
                                @foreach ($points as $p)
                                <tr>
                                    <td>{{ $p->id }}</td>
                                    <td>{{ $p->name }}</td>
                                    <td>{{ $p->description }}</td>
                                    <td>
                                        <img src="{{ asset('storage/images/' . $p->image) }}" alt="{{ $p->name }}"
                                        class="img-fluid" style="max-width: 200px; max-height: 100px;" title="{{ $p->image }}">
                                    </td>
                                    <td>{{ $p->created_at }}</td>
                                    <td>{{ $p->updated_at }}</td>
                                </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6" class="text-center py-3">No points data available</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Polylines Table -->
        <div class="card mb-4 shadow-sm">
            <div class="card-header bg-light d-flex justify-content-between align-items-center">
                <h5 class="mb-0">
                    <i class="fa-solid fa-grip-lines text-success me-2"></i> Polylines
                </h5>
                <span class="badge bg-primary">{{ count($polylines) }} items</span>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($polylines) > 0)
                                @foreach ($polylines as $p)
                                <tr>
                                    <td>{{ $p->id }}</td>
                                    <td>{{ $p->name }}</td>
                                    <td>{{ $p->description }}</td>
                                    <td>
                                        <img src="{{ asset('storage/images/' . $p->image) }}" alt="{{ $p->name }}"
                                        class="img-fluid" style="max-width: 200px; max-height: 100px;" title="{{ $p->image }}">
                                    </td>
                                    <td>{{ $p->created_at }}</td>
                                    <td>{{ $p->updated_at }}</td>
                                </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6" class="text-center py-3">No polylines data available</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Polygons Table -->
        <div class="card mb-4 shadow-sm">
            <div class="card-header bg-light d-flex justify-content-between align-items-center">
                <h5 class="mb-0">
                    <i class="fa-regular fa-square text-primary me-2"></i> Polygons
                </h5>
                <span class="badge bg-primary">{{ count($polygons) }} items</span>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($polygons) > 0)
                                @foreach ($polygons as $p)
                                <tr>
                                    <td>{{ $p->id }}</td>
                                    <td>{{ $p->name }}</td>
                                    <td>{{ $p->description }}</td>
                                    <td>
                                        <img src="{{ asset('storage/images/' . $p->image) }}" alt="{{ $p->name }}"
                                        class="img-fluid" style="max-width: 200px; max-height: 100px;" title="{{ $p->image }}">
                                    </td>
                                    <td>{{ $p->created_at }}</td>
                                    <td>{{ $p->updated_at }}</td>
                                </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6" class="text-center py-3">No polygons data available</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <style>
        .table-responsive {
            overflow-x: auto;
        }

        .card {
            border-radius: 0.5rem;
            overflow: hidden;
            border: none;
        }

        .card-header {
            border-bottom: 1px solid rgba(0,0,0,0.125);
        }

        .table th {
            font-weight: 600;
        }

        .table-hover tbody tr:hover {
            background-color: rgba(0,0,0,0.03);
        }

        img.img-fluid {
            transition: transform 0.2s;
        }

        img.img-fluid:hover {
            transform: scale(1.05);
        }
    </style>
@endsection
