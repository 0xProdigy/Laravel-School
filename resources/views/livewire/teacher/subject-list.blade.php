<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                <li><a>List</a></li>
            </ul>
            {{-- LIST OF assignments --}}
            @if ($subjects != null)
                {{ $subjects->links('vendor.livewire.tailwind') }}

                <div class="table-responsive">
                    <table class="table table-hover text-center">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">trayecto</th>
                                <th class="text-center">name</th>
                                <th class="text-center">status</th>
                                <th class="text-center">startDate</th>
                                <th class="text-center">endDate</th>
                                <th class="text-center">EDIT</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subjects as $subject)
                                <tr>
                                    <td>{{ $subject->id }}</td>
                                    <td>{{ $subject->trayecto }}</td>
                                    <td>{{ $subject->name }}</td>
                                    <td>{{ $subject->status }}</td>
                                    <td>{{ $subject->startDate }}</td>
                                    <td>{{ $subject->endDate }}</td>
                                    <td><a href="{{ route('teacher.subjects.edit', $subject) }}"
                                            class="btn btn-success btn-raised btn-xs"><i
                                                class="zmdi zmdi-refresh"></i></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $subjects->links('vendor.livewire.tailwind') }}

                </div>
            @else
                <div class="alert alert-danger">
                    <strong>No hay registros</strong>
                </div>
            @endif

            {{-- END OF LIST subjects --}}
        </div>
    </div>
</div>
