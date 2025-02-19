<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="results-table">
            <thead>
            <tr>
                <th>Doctor Id</th>
                <th>Patient Id</th>
                <th>Test Name</th>
                <th>Result</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($results as $result)
                <tr>
                    <td>{{ $result->doctor_id }}</td>
                    <td>{{ $result->patient_id }}</td>
                    <td>{{ $result->test_name }}</td>
                    <td>{{ $result->result }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['results.destroy', $result->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('results.show', [$result->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('results.edit', [$result->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $results])
        </div>
    </div>
</div>
