<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="insurances-table">
            <thead>
            <tr>
                <th>Patient Id</th>
                <th>Provider Name</th>
                <th>Policy Number</th>
                <th>Coverage Details</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($insurances as $insurance)
                <tr>
                    <td>{{ $insurance->patient_id }}</td>
                    <td>{{ $insurance->provider_name }}</td>
                    <td>{{ $insurance->policy_number }}</td>
                    <td>{{ $insurance->coverage_details }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['insurances.destroy', $insurance->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('insurances.show', [$insurance->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('insurances.edit', [$insurance->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $insurances])
        </div>
    </div>
</div>
