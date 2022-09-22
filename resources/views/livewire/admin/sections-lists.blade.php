<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
            {{-- nav only for sections --}}
            @include('admin.sections.partials.sections-nav')

            @if ($sections->count())

            {{ $sections->links('vendor.livewire.tailwind') }}
                
                <div class="table-responsive">
                    <table class="table table-hover text-center">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Year</th>
                                <th class="text-center">Update</th>
                                <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sections as $section)
                                <tr>
                                    <td>{{$section->id}}</td>
                                    <td>{{$section->name}}</td>
                                    <td>{{$section->status}}</td> 
                                    <td>{{$section->year}}</td> 
                                    <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i
                                                class="zmdi zmdi-refresh"></i></a></td>
                                    <td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i
                                                class="zmdi zmdi-delete"></i></a></td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    {{ $sections->links('vendor.livewire.tailwind') }}

                </div>
            @else
                <div class="alert alert-danger">
                    <strong>No hay registros</strong>
                </div>
            @endif
        </div>
    </div>
</div>
