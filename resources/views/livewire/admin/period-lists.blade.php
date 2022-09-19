<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                <li><a href="{{route("admin.periods.create")}}">New</a></li>
                <li><a href="{{route("admin.periods.index")}}">List</a></li>
            </ul>
            {{-- LIST OF PERIODS --}}
            @if ($periods->count())
                {{ $periods->links("vendor.livewire.tailwind") }}

                <div class="table-responsive">
                    <table class="table table-hover text-center">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Start Date</th>
                                <th class="text-center">End Date</th>
                                <th class="text-center">year</th>
                                <th class="text-center">Update</th>
                                <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($periods as $period)
                                <tr>
                                    <td>{{ $period->id }}</td>
                                    <td>{{ $period->name }}</td>
                                    <td>{{ $period->status }}</td>
                                    <td>{{ $period->startDate }}</td>
                                    <td>{{ $period->endDate }}</td>
                                    <td>{{ $period->year }}</td>
                                    <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i
                                                class="zmdi zmdi-refresh"></i></a></td>
                                    <td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i
                                                class="zmdi zmdi-delete"></i></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="alert alert-danger">
                    <strong>No hay registros</strong>
                </div>
            @endif

            {{-- END OF LIST PERIODS --}}
        </div>
    </div>
</div>
</div>
