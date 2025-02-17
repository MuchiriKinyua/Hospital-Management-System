<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="tests-table">
            <thead>
            <tr>
                <th>Patient Id</th>
                <th>Doctor Id</th>
                <th>Test Name</th>
                <th>Test Result</th>
                <th>Test Date</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tests as $test)
                <tr>
                    <td>{{ $test->patient_id }}</td>
                    <td>{{ $test->doctor_id }}</td>
                    <td>{{ $test->test_name }}</td>
                    <td>{{ $test->test_result }}</td>
                    <td>{{ $test->test_date }}</td>
                    <td>{{ $test->status }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['tests.destroy', $test->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('tests.show', [$test->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('tests.edit', [$test->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $tests])
        </div>
    </div>
</div>
