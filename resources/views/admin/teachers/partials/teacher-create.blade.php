@php
$faker = \Faker\Factory::create();
use Illuminate\Support\Str;
@endphp
<div class="container-fluid">
    <div class="row">
        @include('admin.teachers.partials.teacher-nav')

        <div class="col-xs-12">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-md-10 col-md-offset-1">
                        <form action="{{ route('admin.teachers.store') }}" method="post">
                            @csrf
                            <input required type="text" name="id_identifier" value="{{ Str::random(10) }}" hidden>

                            <div class="form-group label-floating">
                                <label class="control-label">Name</label>
                                <input required name="name" value="{{ $faker->name }}" class="form-control"
                                    type="text">
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">Last Name</label>
                                <input required name="lastname" value="{{ $faker->lastName }}" class="form-control"
                                    type="text">
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">Address</label>
                                <textarea name="address" class="form-control">{{ $faker->address }}</textarea>
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">Email</label>
                                <input required name="email" value="{{ $faker->email }}" class="form-control"
                                    type="text">
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">Phone</label>
                                <input required name="phone" value="{{ $faker->phoneNumber }}" class="form-control"
                                    type="text">
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">Specialty</label>
                                <input required name="specialty" value="{{ $faker->name }}" class="form-control"
                                    type="text">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Birthday</label>
                                <input required name="birthday" value="{{ $faker->date }}" class="form-control"
                                    type="date">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Gender</label>
                                <select name="gender" class="form-control">
                                    <option>Select Option</option>
                                    <option selected value="Male">Male</option>
                                    <option value="Female">Female</option>
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
