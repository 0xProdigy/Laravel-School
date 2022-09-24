<div class="container-fluid">
    <div class="row">
        @include('admin.salon.partials.salon-nav')
        @if ($salones->count())
            {{ $salones->links('vendor.livewire.tailwind') }}

            <div class="table-responsive">
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Code</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Capacity</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Update</th>
                            <th class="text-center">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($salones as $salon)
                            <tr>
                                <td>{{ $salon->id }}</td>
                                <td>{{ $salon->code }}</td>
                                <td>{{ $salon->name }}</td>
                                <td>{{ $salon->capacity }}</td>
                                <td>{{ $salon->status }}</td>
                                <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i
                                            class="zmdi zmdi-refresh"></i></a></td>
                                <td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i
                                            class="zmdi zmdi-delete"></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $salones->links('vendor.livewire.tailwind') }}

            </div>
        @else
            <div class="alert alert-danger">
                <strong>No hay registros</strong>
            </div>
        @endif

    </div>
</div>
