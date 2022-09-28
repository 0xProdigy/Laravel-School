<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
            @include('admin.school.partials.school-nav')

            <div class="tab-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12 col-md-10 col-md-offset-1">
                            <form action="{{route("admin.schools.store")}}" method="POST"> 
                                @csrf
                                <div class="form-group">
                                    <label class="control-label">Year</label>
                                    <select name="year" class="form-control">
                                        @for ($i = date("Y"); $i <= date("Y")+10; $i++)
                                            <option>{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
 
                                <div class="form-group">
                                    <label class="control-label">Start Date</label>
                                    <input name="startDate" class="form-control" type="date">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">End Date</label>
                                    <input name="endDate" class="form-control" type="date">
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
