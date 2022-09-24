<div class="container-fluid">
    <div class="row">
        @include('admin.students.partials.students-nav')

        <div class="col-xs-12">
            
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-md-10 col-md-offset-1">
                        <form action="{{route("admin.students.store")}}" method="POST">
                            @csrf
                            <fieldset>Student Data</fieldset>
                            <div class="form-group label-floating">
                                <label class="control-label">Name</label>
                                <input name="name" class="form-control" type="text">
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">Last Name</label>
                                <input name="lastname" class="form-control" type="text">
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">Address</label>
                                <textarea name="address" class="form-control"></textarea>
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">Email</label>
                                <input name="email" class="form-control" type="text">
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">Phone</label>
                                <input name="phone" class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Birthday</label>
                                <input name="birthday" class="form-control" type="date">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Gender</label>
                                <select name="gender" class="form-control">
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Photo</label>
                                <div>
                                    <input name="namejpg" type="text" readonly="" class="form-control" placeholder="Browse...">
                                    <input name="filejpg" type="file">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Section</label>
                                <select name="section" class="form-control">
                                    <option>1 grade</option>
                                    <option>2 grade</option>
                                    <option>3 grade</option>
                                    <option>4 grade</option>
                                    <option>5 grade</option>
                                </select>
                            </div>
                            <br><br>
                            <fieldset>Representative Data</fieldset>
                            <div class="form-group label-floating">
                                <label class="control-label">Representative DNI</label>
                                <input name="dnirepresentative" class="form-control" type="text">
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">Representative Relationship</label>
                                <input name="representativerelation" class="form-control" type="text">
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
