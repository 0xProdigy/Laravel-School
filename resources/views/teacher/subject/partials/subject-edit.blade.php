<div class="container-fluid">

    <a href="{{ route('teacher.exams.create') }}" class="btn btn-success btn-raised">Create Exam</a>

    <div class="row">
        <div class="col-xs-12">
            <div class="container-fluid">
                <div class="row">
                    <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                        <li class="activecol-xs-4 col-sm-4"><a href="#list" data-toggle="tab">Examen-Lists</a></li>
                        <li class="col-xs-4 col-sm-4"><a href="#edit" data-toggle="tab">Edit</a></li>
                        <li class="col-xs-4 col-sm-4"><a href="{{ route('admin.subjects.index') }}">back</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        @if ($exams->count())
                            <div class="tab-pane fade active in" id="list">
                                <div class="table-responsive">
                                    <table class="table table-hover text-center">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-center">name</th>
                                                <th class="text-center">startDate</th>
                                                <th class="text-center">endDate</th>
                                                <th class="text-center">date</th>
                                                <th class="text-center">Update</th>
                                                <th class="text-center">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($exams as $exam)
                                                <tr>
                                                    <td>{{ $exam->id }}</td>
                                                    <td>{{ $exam->name }}</td>
                                                    <td>{{ $exam->timeStart }}</td>
                                                    <td>{{ $exam->timeEnd }}</td>
                                                    <td>{{ $exam->date }}</td>
                                                    <td><a href="" class="btn btn-success btn-raised btn-xs"><i
                                                                class="zmdi zmdi-refresh"></i></a></td>
                                                    <td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i
                                                                class="zmdi zmdi-delete"></i></a></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{ $exams->links('vendor.pagination.default') }}
                                </div>
                            </div>
                        @else
                            <div class="card-body">
                                <strong>No hay registros</strong>
                            </div>
                        @endif

                        <div class="tab-pane fade" id="edit">
                            <div class="col-xs-12 col-md-10 col-md-offset-1">
                                <form autocomplete="off" action="#!" method="post">
                                    @csrf
                                    <div class="form-group label-floating">
                                        <label class="control-label">Trayecto</label>
                                        <input required name="name" value="{{ $subject->trayecto }}"
                                            class="form-control" type="text">
                                    </div>
                                    <div class="form-group label-floating">
                                        <label class="control-label">Name</label>
                                        <input required name="lastname" value="{{ $subject->name }}"
                                            class="form-control" type="text">
                                    </div>
                                    <div class="form-group label-floating">
                                        <label class="control-label">Status</label>
                                        <textarea name="address" class="form-control">{{ $subject->status }}</textarea>
                                    </div>
                                    <div class="form-group label-floating">
                                        <label class="control-label">Start Date</label>
                                        <input required name="email" value="{{ $subject->startDate }}"
                                            class="form-control" type="text">
                                    </div>
                                    <div class="form-group label-floating">
                                        <label class="control-label">End Date</label>
                                        <input required name="phone" value="{{ $subject->endDate }}"
                                            class="form-control" type="text">
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
            </div>
        </div>
    </div>
</div>
