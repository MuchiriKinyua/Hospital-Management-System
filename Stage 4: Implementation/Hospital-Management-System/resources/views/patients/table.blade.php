<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="patients-table">
            <thead>
            <tr>
                <th>Full Name</th>
                <th>Dob</th>
                <th>Gender</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Address</th>
                <th>Blood Type</th>
                <th>Allergies</th>
                <th>Medical History</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($patients as $patient)
                <tr>
                    <td>{{ $patient->full_name }}</td>
                    <td>{{ $patient->dob }}</td>
                    <td>{{ $patient->gender }}</td>
                    <td>{{ $patient->phone }}</td>
                    <td>{{ $patient->email }}</td>
                    <td>{{ $patient->address }}</td>
                    <td>{{ $patient->blood_type }}</td>
                    <td>{{ $patient->allergies }}</td>
                    <td>{{ $patient->medical_history }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['patients.destroy', $patient->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('patients.show', [$patient->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('patients.edit', [$patient->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $patients])
        </div>
    </div>
</div>
