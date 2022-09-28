<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">

            @include('admin.school.partials.school-nav')
            @if ($years->count())
                {{ $years->links('vendor.livewire.tailwind') }}

                <div class="table-responsive">
                    <table class="table table-hover text-center">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Year</th>
                                <th class="text-center">Start Date</th>
                                <th class="text-center">End Date</th>
                                <th class="text-center">Update</th>
                                <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($years as $year)
                                <tr>
                                    <td>{{$year->id}}</td> 
                                    <td>{{$year->year}}</td> 
                                    <td>{{$year->startDate}}</td> 
                                    <td>{{$year->endDate}}</td> 
                                    <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i
                                                class="zmdi zmdi-refresh"></i></a></td>
                                    <td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i
                                                class="zmdi zmdi-delete"></i></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $years->links('vendor.livewire.tailwind') }}

                </div>
            @else
                <div class="alert alert-danger">
                    <strong>No hay registros</strong>
                </div>
            @endif

        </div>
    </div>
</div>
