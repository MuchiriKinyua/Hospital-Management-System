<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="admissions-table">
            <thead>
            <tr>
                <th>Ward Id</th>
                <th>Patient Id</th>
                <th>Admitted By</th>
                <th>Reason</th>
                <th>Admission Date</th>
                <th>Discharge Date</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($admissions as $admission)
                <tr>
                    <td>{{ $admission->ward_id }}</td>
                    <td>{{ $admission->patient_id }}</td>
                    <td>{{ $admission->admitted_by }}</td>
                    <td>{{ $admission->reason }}</td>
                    <td>{{ $admission->admission_date }}</td>
                    <td>{{ $admission->discharge_date }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['admissions.destroy', $admission->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('admissions.show', [$admission->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('admissions.edit', [$admission->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $admissions])
        </div>
    </div>
</div>
