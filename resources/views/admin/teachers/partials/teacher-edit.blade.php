<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <div class="container-fluid">
                <div class="row">
                    <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                        <li class="activecol-xs-4 col-sm-4"><a href="#list" data-toggle="tab">Subject-List</a></li>
                        <li class="col-xs-4 col-sm-4"><a href="#edit" data-toggle="tab">Edit</a></li>
                        <li class="col-xs-4 col-sm-4"><a href="{{ route('admin.teachers.index') }}">back</a></li>
                    </ul>

                    <div id="myTabContent" class="tab-content">
                        @if ($subjects->count())
                            <div class="tab-pane fade active in" id="list">
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
                                                <th class="text-center">Update</th>
                                                <th class="text-center">Delete</th>
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
                                                    <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i
                                                                class="zmdi zmdi-refresh"></i></a></td>
                                                    <td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i
                                                                class="zmdi zmdi-delete"></i></a></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{ $subjects->links('vendor.pagination.default') }}
                                </div>
                            </div>
                        @else
                            <div class="card-body">
                                <strong>No hay registros</strong>
                            </div>
                        @endif
                        <div class="tab-pane fade" id="edit">
                            <div class="col-xs-12 col-md-10 col-md-offset-1">
                                <form autocomplete="off" action="{{ route('admin.teachers.store') }}" method="post">
                                    @csrf
                                    <div class="form-group label-floating">
                                        <label class="control-label">Name</label>
                                        <input required name="name" value="{{ $teacher->name }}" class="form-control"
                                            type="text">
                                    </div>
                                    <div class="form-group label-floating">
                                        <label class="control-label">Last Name</label>
                                        <input required name="lastname" value="{{ $teacher->lastname }}"
                                            class="form-control" type="text">
                                    </div>
                                    <div class="form-group label-floating">
                                        <label class="control-label">Address</label>
                                        <textarea name="address" class="form-control">{{ $teacher->address }}</textarea>
                                    </div>
                                    <div class="form-group label-floating">
                                        <label class="control-label">Email</label>
                                        <input required name="email" value="{{ $teacher->email }}"
                                            class="form-control" type="text">
                                    </div>
                                    <div class="form-group label-floating">
                                        <label class="control-label">Phone</label>
                                        <input required name="phone" value="{{ $teacher->phone }}"
                                            class="form-control" type="text">
                                    </div>
                                    <div class="form-group label-floating">
                                        <label class="control-label">Specialty</label>
                                        <input required name="specialty" value="{{ $teacher->specialty }}"
                                            class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Birthday</label>
                                        <input required name="birthday" value="{{ $teacher->birthday }}"
                                            class="form-control" type="date">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Gender</label>
                                        <select name="gender" class="form-control">
                                            <option>Select Option</option>
                                            <option @if ($teacher->gender == 'male') {{ 'selected' }} @endif>
                                                Male
                                            </option>
                                            <option @if ($teacher->gender == 'female') {{ 'selected' }} @endif>
                                                Female
                                            </option>
                                        </select>
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
