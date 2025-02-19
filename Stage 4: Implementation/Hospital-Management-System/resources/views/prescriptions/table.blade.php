<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="prescriptions-table">
            <thead>
            <tr>
                <th>Patient Id</th>
                <th>Doctor Id</th>
                <th>Medicine</th>
                <th>Dosage</th>
                <th>Duration</th>
                <th>Instructions</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($prescriptions as $prescription)
                <tr>
                    <td>{{ $prescription->patient_id }}</td>
                    <td>{{ $prescription->doctor_id }}</td>
                    <td>{{ $prescription->medicine }}</td>
                    <td>{{ $prescription->dosage }}</td>
                    <td>{{ $prescription->duration }}</td>
                    <td>{{ $prescription->instructions }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['prescriptions.destroy', $prescription->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('prescriptions.show', [$prescription->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('prescriptions.edit', [$prescription->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $prescriptions])
        </div>
    </div>
</div>
