<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="schedules-table">
            <thead>
            <tr>
                <th>Doctor Id</th>
                <th>Available Days</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($schedules as $schedule)
                <tr>
                    <td>{{ $schedule->doctor_id }}</td>
                    <td>{{ $schedule->available_days }}</td>
                    <td>{{ $schedule->start_time }}</td>
                    <td>{{ $schedule->end_time }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['schedules.destroy', $schedule->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('schedules.show', [$schedule->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('schedules.edit', [$schedule->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $schedules])
        </div>
    </div>
</div>
