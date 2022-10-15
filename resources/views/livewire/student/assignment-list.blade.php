<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                <li><a>List</a></li>
            </ul>
            {{-- LIST OF assignments --}}
            @if ($assignments != null)
                {{ $assignments->links('vendor.livewire.tailwind') }}

                <div class="table-responsive">
                    <table class="table table-hover text-center">
                        <thead>
                            <tr>
                                <th class="text-center">Name Assignment</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Start Date</th>
                                <th class="text-center">End Date</th>
                                <th class="text-center">Check</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($assignments as $assignment)
                                <tr>
                                    <td>{{ $assignment->name }}</td>
                                    <td><x-users.assignment-list-status status="{{$assignment->status}}"/></td>
                                    {{-- <td>{{ $assignment->status }}</td> --}}
                                    <td>{{ $assignment->startDate }}</td>
                                    <td>{{ $assignment->endDate }}</td>
                                    <td><a href="{{ route('student.assignments.show', $assignment) }}" class="btn btn-success btn-raised btn-xs"><i
                                                class="zmdi zmdi-plus"></i></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $assignments->links('vendor.livewire.tailwind') }}
                </div>
            @else
                <div class="alert alert-danger">
                    <strong>No hay registros</strong>
                </div>
            @endif

            {{-- END OF LIST assignments --}}
        </div>
    </div>
</div>
