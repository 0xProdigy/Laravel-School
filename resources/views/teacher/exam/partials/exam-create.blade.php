@php
    $faker = \Faker\Factory::create();
    use Illuminate\Support\Str;
    
@endphp
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                <li><a href="{{ route('admin.administrators.create') }}">New</a></li>
                <li><a href="{{ route('admin.administrators.index') }}">List</a></li>
            </ul>
            <form action="{{ route('teacher.exams.store') }}" method="POST" autocomplete="off">
                @csrf

                <div class="form-group">
                    <label class="control-label">Subject</label>
                    <select name="id_identifier_subject" class="form-control">
                        @foreach ($subjects as $subject)
                            <option  value="{{ $subject->id }}">{{ $subject->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group label-floating">
                    <label class="control-label">Name</label>
                    <input name="name" value="{{ $faker->name }}" class="form-control" type="text">
                </div>
                <div class="form-group label-floating">
                    <label class="control-label">Time Start</label>
                    <input name="timeStart" value="{{ now() }}" class="form-control" type="text">
                </div>
                <div class="form-group label-floating">
                    <label class="control-label">Time End</label>
                    <textarea name="timeEnd" class="form-control">{{ now() }}</textarea>
                </div>
                <div class="form-group label-floating">
                    <label class="control-label">Date</label>
                    <input name="date" value="{{ now() }}" class="form-control" type="text">
                </div>
                <p class="text-center">
                    <button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i>
                        Save</button>
                </p>
            </form>
        </div>
    </div>
</div>
