@extends('layout.template')

@section('content')
    <div class="container py-4">
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="border-bottom pb-2">Data Tables</h2>
            </div>
        </div>

        {{-- Points Table --}}
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">
                    <i class="fa-solid fa-location-dot text-danger me-2"></i> Points
                </h5>
                <span class="badge bg-primary">{{ count($points) }} items</span>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover" id="pointstable">
                        <thead>
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
                            @forelse ($points as $p)
                                <tr>
                                    <td>{{ $p->id }}</td>
                                    <td>{{ $p->name }}</td>
                                    <td>{{ $p->description }}</td>
                                    <td>
                                        <img src="{{ asset('storage/images/' . $p->image) }}" alt="{{ $p->name }}" class="img-fluid" style="max-width: 200px; max-height: 100px;">
                                    </td>
                                    <td>{{ $p->created_at }}</td>
                                    <td>{{ $p->updated_at }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center py-3">No points data available</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Polylines Table --}}
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">
                    <i class="fa-solid fa-grip-lines text-success me-2"></i> Polylines
                </h5>
                <span class="badge bg-primary">{{ count($polylines) }} items</span>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover" id="polylinestable">
                        <thead>
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
                            @forelse ($polylines as $p)
                                <tr>
                                    <td>{{ $p->id }}</td>
                                    <td>{{ $p->name }}</td>
                                    <td>{{ $p->description }}</td>
                                    <td>
                                        <img src="{{ asset('storage/images/' . $p->image) }}" alt="{{ $p->name }}" class="img-fluid" style="max-width: 200px; max-height: 100px;">
                                    </td>
                                    <td>{{ $p->created_at }}</td>
                                    <td>{{ $p->updated_at }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center py-3">No polylines data available</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Polygons Table --}}
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">
                    <i class="fa-regular fa-square text-primary me-2"></i> Polygons
                </h5>
                <span class="badge bg-primary">{{ count($polygons) }} items</span>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover" id="polygonstable">
                        <thead>
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
                            @forelse ($polygons as $p)
                                <tr>
                                    <td>{{ $p->id }}</td>
                                    <td>{{ $p->name }}</td>
                                    <td>{{ $p->description }}</td>
                                    <td>
                                        <img src="{{ asset('storage/images/' . $p->image) }}" alt="{{ $p->name }}" class="img-fluid" style="max-width: 200px; max-height: 100px;">
                                    </td>
                                    <td>{{ $p->created_at }}</td>
                                    <td>{{ $p->updated_at }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center py-3">No polygons data available</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.1/css/dataTables.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <style>
        .table-responsive {
            overflow-x: auto;
        }

        .card {
            border-radius: 0.5rem;
            overflow: hidden;
        }

        .card-header {
            border-bottom: 2px solid rgba(0, 0, 0, 0.125);
        }

        .table th {
            font-weight: 600;
        }

        .table-hover tbody tr:hover {
            background-color: rgba(0, 0, 0, 0.03);
        }

        img.img-fluid {
            transition: transform 0.2s;
        }

        img.img-fluid:hover {
            transform: scale(1.05);
        }
    </style>
@endsection

@section('scripts')
    <script src="https://cdn.datatables.net/2.3.1/js/dataTables.min.js"></script>
    <script>
        let tablepoints = new DataTable('#pointstable');
        let tablepolylines = new DataTable('#polylinestable');
        let tablepolygons = new DataTable('#polygonstable');
    </script>
@endsection
