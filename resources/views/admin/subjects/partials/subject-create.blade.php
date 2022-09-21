<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
            {{-- nav only for subject --}}
            @include('admin.subjects.partials.subject-nav')

            
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade active in">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12 col-md-10 col-md-offset-1">
                                <form autocomplete="off" action="{{ route('admin.subjects.store') }}" method="POST">
                                    @csrf

                                    <div class="form-group label-floating">
                                        <label class="control-label">Code</label>
                                        <input value="{{ old('code') }}" name="code" class="form-control"
                                            type="text">
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
