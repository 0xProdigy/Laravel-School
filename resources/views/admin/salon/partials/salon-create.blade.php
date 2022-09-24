<div class="container-fluid">
    <div class="row">
        @include('admin.salon.partials.salon-nav')

        <div class="col-xs-12 col-md-10 col-md-offset-1">

            <form action="{{route("admin.salon.store")}}" method="post" autocomplete="off">
                @csrf
                <div class="form-group label-floating">
                    <label class="control-label">Code</label>
                    <input name="code" class="form-control" type="text">
                </div>
                <div class="form-group label-floating">
                    <label class="control-label">Name</label>
                    <input name="name" class="form-control" type="text">
                </div>
                <div class="form-group label-floating">
                    <label class="control-label">Capacity</label>
                    <input name="capacity" class="form-control" type="text">
                </div>
                <div class="form-group">
                    <label class="control-label">Status</label>
                    <select name="status" class="form-control">
                        <option>Active</option>
                        <option>Disable</option>
                    </select>
                </div>
                <p class="text-center">
                    <button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i>
                        Save</button>
                </p>
            </form>
        </div>
    </div>
</div>
