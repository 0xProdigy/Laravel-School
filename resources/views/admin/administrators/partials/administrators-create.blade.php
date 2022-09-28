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
            <form action="{{ route('admin.administrators.store') }}" method="POST" autocomplete="off">
                @csrf
                <input type="text" name="id_identifier" value="{{ Str::random(10) }}" hidden>

                <div class="form-group label-floating">
                    <label class="control-label">Name</label>
                    <input name="name" value="{{$faker->name}}" class="form-control" type="text">
                </div>
                <div class="form-group label-floating">
                    <label class="control-label">Last Name</label>
                    <input name="lastname" value="{{$faker->lastname}}" class="form-control" type="text">
                </div>
                <div class="form-group label-floating">
                    <label class="control-label">Address</label>
                    <textarea name="address" class="form-control">{{$faker->address}}</textarea>
                </div>
                <div class="form-group label-floating">
                    <label class="control-label">Email</label>
                    <input name="email" value="{{$faker->email}}" class="form-control" type="text">
                </div>
                <div class="form-group label-floating">
                    <label class="control-label">Phone</label>
                    <input name="phone" value="{{$faker->phoneNumber}}"  class="form-control" type="text">
                </div>
                {{-- <div class="form-group">
                    <label class="control-label">Photo</label>
                    <div>
                        <input type="text" readonly="" class="form-control" placeholder="Browse...">
                        <input type="file">
                    </div>
                </div> --}}
                <p class="text-center">
                    <button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i>
                        Save</button>
                </p>
            </form>
        </div>
    </div>
</div>
