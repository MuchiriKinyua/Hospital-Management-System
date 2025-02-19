<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="performances-table">
            <thead>
            <tr>
                <th>Doctor Id</th>
                <th>Patient Count</th>
                <th>Avg Consultation Time</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($performances as $performance)
                <tr>
                    <td>{{ $performance->doctor_id }}</td>
                    <td>{{ $performance->patient_count }}</td>
                    <td>{{ $performance->avg_consultation_time }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['performances.destroy', $performance->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('performances.show', [$performance->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('performances.edit', [$performance->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $performances])
        </div>
    </div>
</div>
