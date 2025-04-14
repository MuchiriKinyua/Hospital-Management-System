<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="staff-table">
            <thead>
            <tr>
                <th>Full Name</th>
                <th>Role</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Salary</th>
                <th>Shift</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($staff as $item)
    <tr>
        <td>{{ $item->full_name }}</td>
        <td>{{ $item->role }}</td>
        <td>{{ $item->phone }}</td>
        <td>{{ $item->email }}</td>
        <td>{{ $item->salary }}</td>
        <td>{{ $item->shift }}</td>
        <td style="width: 120px">
            {!! Form::open(['route' => ['staff.destroy', $item->id], 'method' => 'delete']) !!}
            <div class='btn-group'>
                <a href="{{ route('staff.show', [$item->id]) }}" class='btn btn-default btn-xs'>
                    <i class="far fa-eye"></i>
                </a>
                <a href="{{ route('staff.edit', [$item->id]) }}" class='btn btn-default btn-xs'>
                    <i class="far fa-edit"></i>
                </a>
                {!! Form::button('<i class="far fa-trash-alt"></i>', [
                    'type' => 'submit',
                    'class' => 'btn btn-danger btn-xs',
                    'onclick' => "return confirm('Are you sure?')"
                ]) !!}
            </div>
            {!! Form::close() !!}
        </td>
    </tr>
@endforeach

            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $staff])
        </div>
    </div>
</div>
