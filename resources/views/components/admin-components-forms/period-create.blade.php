{{-- cambiar url por route --}}
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                <li class="active"><a href="#new" data-toggle="tab">New</a></li>
                <li><a href="#list" data-toggle="tab">List</a></li>
            </ul>
            {!! Form::open(['route' => 'admin.periods.store', 'autocomplete' => 'off']) !!}
            @csrf
            <div id="myTabContent" class="tab-content">

                <div class="tab-pane fade active in" id="new">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12 col-md-10 col-md-offset-1">

                                <div class="form-group label-floating">
                                    {!! Form::label('name', 'name') !!}
                                    {!! Form::text('name', null, [
                                        'class' => 'form-control',
                                        'placeholder' => 'Escribe el nombre del periodo',
                                        'required',
                                    ]) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('name', 'Status', ['class' => 'control-label']) !!}

                                    {!! Form::select('status', ['on' => 'active', 'off' => 'disabled'], null, [
                                        'class' => 'form-control',
                                        'required',
                                    ]) !!}

                                </div>

                                <div class="form-group">
                                    {!! Form::label('name', 'Start Date', ['class' => 'control-label']) !!}

                                    {!! Form::date('startDate', \Carbon\Carbon::now(), ['class' => 'form-control', 'required']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('name', 'End Date', ['class' => 'control-label']) !!}

                                    {!! Form::date('endDate', null, ['class' => 'form-control', 'required']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('name', 'Year') !!}
                                    {!! Form::text('year', \Carbon\Carbon::now()->year, [
                                        'class' => 'form-control',
                                        'placeholder' => 'Escribe el año del periodo',
                                        'required',
                                    ]) !!}

                                </div>

                                <p class="text-center">
                                    <button href="#!" class="btn btn-info btn-raised btn-sm"><i
                                            class="zmdi zmdi-floppy"></i> Save</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}

                {{-- LIST OF PERIODS --}}
                <div class="tab-pane fade" id="list">
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
                        <ul class="pagination pagination-sm">
                            <li class="disabled"><a href="#!">«</a></li>
                            <li class="active"><a href="#!">1</a></li>
                            <li><a href="#!">2</a></li>
                            <li><a href="#!">3</a></li>
                            <li><a href="#!">4</a></li>
                            <li><a href="#!">5</a></li>
                            <li><a href="#!">»</a></li>
                        </ul>
                    </div>
                </div>

                {{-- END OF LIST PERIODS --}}
            </div>
        </div>
    </div>
</div>
