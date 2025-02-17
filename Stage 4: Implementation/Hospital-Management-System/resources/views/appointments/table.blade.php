<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="appointments-table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Doctor</th>
                <th>Date</th>
                <th>Message</th>
                <th>Status</th>
                <th>User Id</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($appointments as $appointment)
                <tr>
                    <td>{{ $appointment->name }}</td>
                    <td>{{ $appointment->email }}</td>
                    <td>{{ $appointment->phone }}</td>
                    <td>{{ $appointment->doctor }}</td>
                    <td>{{ $appointment->date }}</td>
                    <td>{{ $appointment->message }}</td>
                    <td>{{ $appointment->status }}</td>
                    <td>{{ $appointment->user_id }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['appointments.destroy', $appointment->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('appointments.show', [$appointment->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('appointments.edit', [$appointment->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
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
            @include('adminlte-templates::common.paginate', ['records' => $appointments])
        </div>
    </div>
</div>
