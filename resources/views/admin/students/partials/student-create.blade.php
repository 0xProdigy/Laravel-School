@php
$faker = \Faker\Factory::create();
use Illuminate\Support\Str;

@endphp
<div class="container-fluid">
    <div class="row">
        @include('admin.students.partials.student-nav')

        <div class="col-xs-12">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-md-10 col-md-offset-1">
                        <form action="{{ route('admin.students.store') }}" method="POST" autocomplete="off">
                            @csrf
                            <fieldset>Student Data</fieldset>

                            <input type="text" name="id_identifier" value="{{ Str::random(10) }}" hidden>

                            <div class="form-group label-floating">
                                <label class="control-label">Name</label>
                                <input value="{{ $faker->name }}" name="name" class="form-control" type="text">
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">Last Name</label>
                                <input value="{{ $faker->lastName }}" name="lastname" class="form-control"
                                    type="text">
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">Address</label>
                                <textarea name="address" class="form-control">{{ $faker->address }}</textarea>
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">Email</label>
                                <input value="{{ $faker->email }}" name="email" class="form-control" type="text">
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">Phone</label>
                                <input value="{{ $faker->phoneNumber }}" name="phone" id="phone"
                                    class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Birthday</label>
                                <input value="{{ $faker->date }}" name="birthday" class="form-control" type="date">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Gender</label>
                                <select name="gender" class="form-control">
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>

                            {{-- <div class="form-group">
                                <label class="control-label">Photo</label>
                                <div>
                                    <input name="namejpg" type="text" readonly="" class="form-control"
                                        placeholder="Browse...">
                                    <input name="filejpg" type="file">
                                </div>
                            </div>
                             --}} 

                            <br><br>
                            <fieldset>Representative Data</fieldset>
                            <div class="form-group label-floating">
                                <label class="control-label">Representative DNI</label>
                                <input value="{{ $faker->uuid }}" name="dnirepresentative" class="form-control"
                                    type="text">
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">Representative Relationship</label>
                                <input value="asdasdasdasdasdasdas" name="representativerelation" class="form-control"
                                    type="text">
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
