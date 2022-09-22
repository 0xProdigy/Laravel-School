<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">

            {{-- nav only for subject --}}
            @include('admin.subjects.partials.subject-nav')
            @if ($subjects->count())
                {{ $subjects->links('vendor.livewire.tailwind') }}

                <div class="table-responsive">
                    <table class="table table-hover text-center">
                        <thead>
                            <tr>
                                <th class="text-center">Code</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Update</th>
                                <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subjects as $subject)
                                <tr>
                                    <td>{{ $subject->code }}</td>
                                    <td>{{ $subject->name }}</td>
                                    <td>{{ $subject->status }}</td>
                                    <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i
                                                class="zmdi zmdi-refresh"></i></a></td>
                                    <td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i
                                                class="zmdi zmdi-delete"></i></a></td>
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
        </div>
    </div>
</div>
