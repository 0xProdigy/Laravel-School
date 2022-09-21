<div class="table-responsive">
    <table class="table table-hover text-center">
        <thead>
            <tr>
                <th class="text-center">Code</th>
                <th class="text-center">Name</th>
                <th class="text-center">Status</th>
                <th class="text-center">Update</th>
                <th class="text-center">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($subjects as $subject)
                <tr>
                    <td>{{ $subject->code }}</td>
                    <td>{{ $subject->name }}</td>
                    <td>{{ $subject->status }}</td>
                    <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i
                                class="zmdi zmdi-refresh"></i></a></td>
                    <td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i
                                class="zmdi zmdi-delete"></i></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <ul class="pagination pagination-sm">
        <li class="disabled"><a href="#!">«</a></li>
        <li class="active"><a href="#!">1</a></li>
        <li><a href="#!">2</a></li>
        <li><a href="#!">3</a></li>
        <li><a href="#!">4</a></li>
        <li><a href="#!">5</a></li>
        <li><a href="#!">»</a></li>
    </ul>
</div>