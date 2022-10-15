<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
            @include('admin.teachers.partials.teacher-nav')
            @if ($teachers->count())
                <div class="table-responsive">
                    <table class="table table-hover text-center">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Last Name</th>
                                <th class="text-center">Address</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Phone</th>
                                <th class="text-center">Specialty</th>
                                <th class="text-center">Birthday</th>
                                <th class="text-center">Gender</th>
                                <th class="text-center">status</th>
                                <th class="text-center">Update</th>
                                <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teachers as $teacher)
                                <tr>
                                    <td>{{ $teacher->id }}</td>
                                    <td>{{ $teacher->name }}</td>
                                    <td>{{ $teacher->lastname }}</td>
                                    <td>{{ $teacher->address }}</td>
                                    <td>{{ $teacher->email }}</td>
                                    <td>{{ $teacher->phone }}</td>
                                    <td>{{ $teacher->specialty }}</td>
                                    <td>{{ $teacher->birthday }}</td>
                                    <td>{{ $teacher->gender }}</td>
                                    <td>
                                        <x-admin.user-teacher-list-status status="{{ $teacher->id }}" />
                                    </td>
                                    <td><a href="{{ route('admin.teachers.edit', $teacher) }}"
                                            class="btn btn-success btn-raised btn-xs"><i
                                                class="zmdi zmdi-refresh"></i></a></td>

                                    <td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i
                                                class="zmdi zmdi-delete"></i></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $teachers->links('vendor.livewire.tailwind') }}
                </div>
            @else
                <div class="alert alert-danger">
                    <strong>No hay registros</strong>
                </div>
            @endif
        </div>
    </div>
</div>
