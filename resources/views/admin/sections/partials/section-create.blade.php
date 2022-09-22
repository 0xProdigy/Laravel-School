<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
            @include('admin.sections.partials.sections-nav')

            {!! Form::open(['route' => 'admin.sections.store', 'autocomplete' => 'off']) !!}
            @csrf
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-md-10 col-md-offset-1">

                        <div class="form-group label-floating">
                            {!! Form::label('name', 'name') !!}
                            {!! Form::text('name', null, [
                                'class' => 'form-control',
                                'placeholder' => 'Escribe el nombre de la section',
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
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
