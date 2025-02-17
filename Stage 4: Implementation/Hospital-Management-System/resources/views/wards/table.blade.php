<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="wards-table">
            <thead>
            <tr>
                <th>Patient Id</th>
                <th>Doctor Id</th>
                <th>Ward Name</th>
                <th>Room Number</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($wards as $ward)
                <tr>
                    <td>{{ $ward->patient_id }}</td>
                    <td>{{ $ward->doctor_id }}</td>
                    <td>{{ $ward->ward_name }}</td>
                    <td>{{ $ward->room_number }}</td>
                    <td>{{ $ward->status }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['wards.destroy', $ward->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('wards.show', [$ward->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('wards.edit', [$ward->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $wards])
        </div>
    </div>
</div>
