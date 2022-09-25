<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
            @include('admin.students.partials.student-nav')
            @if ($students->count())
                {{ $students->links('vendor.livewire.tailwind') }}
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
                                <th class="text-center">Birthday</th>
                                <th class="text-center">Gender</th>
                                <th class="text-center">Section</th>
                                <th class="text-center">Update</th>
                                <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <td>{{ $student->id }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->lastname }}</td>
                                    <td>{{ $student->address }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->phone }}</td>
                                    <td>{{ $student->birthday }}</td>
                                    <td>{{ $student->gender }}</td>
                                    <td>{{ $student->section }}</td>

                                    <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i
                                                class="zmdi zmdi-refresh"></i></a></td>
                                    <td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i
                                                class="zmdi zmdi-delete"></i></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $students->links('vendor.livewire.tailwind') }}

                </div>
            @else
                <div class="alert alert-danger">
                    <strong>No hay registros</strong>
                </div>
            @endif

        </div>
    </div>
</div>
