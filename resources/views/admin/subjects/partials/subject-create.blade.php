<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
            {{-- nav only for subject --}}
            @include('admin.subjects.partials.subject-nav')

            @if ($sections->count())
                <div class="tab-pane fade active in">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12 col-md-10 col-md-offset-1">
                                <form autocomplete="off" action="{{ route('admin.subjects.store') }}" method="POST">
                                    @csrf 
                                    <div class="form-group">
                                        <label class="control-label">Code Section</label>
                                        <select name="trayecto" class="form-control">
                                            @foreach ($sections as $section)
                                                <option {{ $section->value }}>{{ $section->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group label-floating">
                                        <label class="control-label">Name</label>
                                        <input value="{{ old('name') }}" name="name" class="form-control"
                                            type="text">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Status</label>
                                        <select name="status" class="form-control">
                                            <option>Active</option>
                                            <option>Disable</option>
                                        </select>
                                    </div>


                                    <div class="form-group">
                                        {!! Form::label('name', 'Start Date', ['class' => 'control-label']) !!}
    
                                        {!! Form::date('startDate', \Carbon\Carbon::now(), ['class' => 'form-control', 'required']) !!}
                                    </div>
    
                                    <div class="form-group">
                                        {!! Form::label('name', 'End Date', ['class' => 'control-label']) !!}
    
                                        {!! Form::date('endDate', null, ['class' => 'form-control', 'required']) !!}
                                    </div>
                                    
                                    <p class="text-center">
                                        <button href="#!" class="btn btn-info btn-raised btn-sm"><i
                                                class="zmdi zmdi-floppy"></i> Save</button>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="alert alert-danger">
                    <strong>No es posible crear un subject ya que no existen secciones activas en este periodo
                        escolar</strong>
                </div>
            @endif

        </div>
    </div>
</div>
