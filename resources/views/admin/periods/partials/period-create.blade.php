<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                <li><a href="{{ route('admin.periods.create') }}">New</a></li>
                <li><a href="{{ route('admin.periods.index') }}">List</a></li>
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
                                    <label class="control-label">Year</label>
                                    <select class="form-control">
                                        @foreach ($years as $year)
                                            <option value="{{ $year->year }}">{{ $year->year }}</option>
                                        @endforeach
                                    </select>
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
            </div>
        </div>
    </div>
</div>
